<script>
    function changePageLength(tableElement,value) {
        var table = $(tableElement).DataTable();
        table.page.len(value).draw();
    }
    function toggleCheckboxes(source, id_tables) {
        $(`#${id_tables} tbody input[type="checkbox"]`).prop('checked', $(source).prop('checked'));
    }

    
    function setupSearch(inputElement, tableElement) {
        $(inputElement).on('keyup', function() {
            const searchTerm = $(this).val().trim();
            const dataTable = $(tableElement).DataTable();
            
            // Use regex to create a %search% like SQL LIKE query pattern
            // This allows for partial matches anywhere in the data (similar to SQL's %term%)
            if (searchTerm) {
                dataTable.search(searchTerm, true, false).draw();
            } else {
                dataTable.search('').draw();
            }
        });
    }



    function initializeRowSelection(tableElement) {
        let isAllSelected = false; // Track selection state

        // Handle row click (toggle selection)
        $(tableElement).on('click', 'tbody tr', function(e) {
            // Check if the click originated from an element with the select_or_checkbox_disable class
            if ($(e.target).hasClass('select_or_checkbox_disable') || $(e.target).parents('.select_or_checkbox_disable').length > 0) {
                // Don't toggle selection if clicked on a disabled element
                return;
            }
            
            $(this).toggleClass('selected odd');
            // Update the role attribute to reflect the selected state
            $(this).attr('role', 'row');
            // Check/uncheck the checkbox inside the row
            const checkbox = $(this).find('input[type="checkbox"]');
            checkbox.prop('checked', !checkbox.prop('checked'));
            
            // Toggle red border when selected
            if ($(this).hasClass('selected')) {
                $(this).css('border', '2px solid red');
            } else {
                $(this).css('border', '');
            }
        });
        
        // Handle Ctrl+A to select all rows
        $(document).on('keydown', function(e) {
            // Only process if the datatable is in focus/visible
            if ($(tableElement + ':visible').length === 0) {
                return;
            }
            
            // Check if Ctrl+A was pressed (keyCode 65 is 'A')
            if (e.ctrlKey && e.keyCode === 88) {
                // Prevent the default browser "Select All" behavior
                e.preventDefault();
                
                if (!isAllSelected) {
                    // Select all rows when Ctrl+A is pressed the first time
                    $(tableElement + ' tbody tr').addClass('selected odd').attr('role', 'row');
                    $(tableElement + ' tbody tr input[type="checkbox"]').prop('checked', true);
                    $(tableElement + ' tbody tr').css('border', '2px solid red');
                    isAllSelected = true; // Update state to indicate all are selected
                } else {
                    // Deselect all rows when Ctrl+A is pressed the second time
                    $(tableElement + ' tbody tr').removeClass('selected odd').attr('role', 'row');
                    $(tableElement + ' tbody tr input[type="checkbox"]').prop('checked', false);
                    $(tableElement + ' tbody tr').css('border', '');
                    isAllSelected = false; // Reset state to indicate none are selected
                }
                
                return false;
            }
        });
        
        // Function to get all selected row data (useful for processing)
        window.getSelectedRows = function() {
            const selectedData = [];
            $(tableElement + ' tbody tr.selected').each(function() {
                selectedData.push(tableVoice.row(this).data());
            });
            return selectedData;
        };
    }

    function initializeRowRadio(tableElement) {
        // Handle row click (select only one row)
        $(tableElement).on('click', 'tbody tr', function(e) {
            // Check if the click originated from an element with the select_or_checkbox_disable class
            if ($(e.target).hasClass('select_or_checkbox_disable') || $(e.target).parents('.select_or_checkbox_disable').length > 0) {
                // Don't toggle selection if clicked on a disabled element
                return;
            }
            
            // Deselect all rows first
            $(tableElement + ' tbody tr').removeClass('selected odd');
            $(tableElement + ' tbody tr input[type="radio"]').prop('checked', false);
            $(tableElement + ' tbody tr').css('border', '');
            
            // Select only the clicked row
            $(this).addClass('selected odd');
            $(this).attr('role', 'row');
            $(this).css('border', '2px solid red');
            
            // Check the radio button inside the row
            const radio = $(this).find('input[type="radio"]');
            radio.prop('checked', true);
        });
        
        // Handle direct radio button clicks
        $(tableElement).on('click', 'input[type="radio"]', function(e) {
            // Prevent the row click handler from being triggered
            e.stopPropagation();
            
            // Deselect all rows
            $(tableElement + ' tbody tr').removeClass('selected odd');
            $(tableElement + ' tbody tr').css('border', '');
            
            // Select only the row containing this radio
            const row = $(this).closest('tr');
            row.addClass('selected odd');
            row.attr('role', 'row');
            row.css('border', '2px solid red');
            
            // Ensure only this radio is checked
            $(tableElement + ' tbody tr input[type="radio"]').prop('checked', false);
            $(this).prop('checked', true);
        });
        
        // Function to get selected row data (useful for processing)
        window.getSelectedRow = function() {
            const selectedRow = $(tableElement + ' tbody tr.selected');
            if (selectedRow.length > 0) {
                return tableVoice.row(selectedRow).data();
            }
            return null;
        };
    }


    function getCheckedBoxes(checkboxName) {
        const checkedBoxes = [];
        $('input[name="' + checkboxName + '"]:checked').each(function() {
            checkedBoxes.push($(this).val());
        });
        return checkedBoxes;
    }
</script>

<script>
function create_table(tableElement, ajaxUrl, checkboxName) {

    return $(tableElement).DataTable({
        scrollX: true,
        info: false,
        ajax: function(data, callback, settings) {
            var ajaxUrlWithParams = ajaxUrl;
            
            $.ajax({
                url: ajaxUrlWithParams,
                type: 'GET',
                dataType: 'json',
                data: { delete_status: $("#delete_status").val() },
                success: function(json) {
                    callback(json);
                }
            });
        },
        ordering: true,
        "orderCellsTop": true,
        "order": [],
        dom: '<"row"<"col-sm-12"<"table-container"t>r>><"row"<"col-12"p>>',
        pageLength: 10,
        columns: [
            { data: "_id", orderable: true },
            { data: "name", orderable: true },
            { data: "count_video_16_9", orderable: true },
            { data: "count_video_9_16", orderable: true },
            { data: "create_at", orderable: true },
            { data: "keywords", orderable: true },
            { data: "u_email", orderable: true },
        ],
        language: {
            paginate: {
                previous: '<i class="cs-chevron-left"></i>',
                next: '<i class="cs-chevron-right"></i>'
            },
            "aria": {
                "sortAscending": ": sắp xếp tăng dần",
                "sortDescending": ": sắp xếp giảm dần"
            }
        },
        initComplete: function(settings, json) {
            this.api().columns.adjust();
            $(this).find('thead th').addClass('sortable-header');
        },
        classes: {
            sTable: "",
            sHeaderTable: "",
            sFooterTable: "",
            sHeader: "",
            sFooter: "",
            sFilter: "",
            sInfo: "",
            sPaging: "",
            sLength: "",
            sProcessing: ""
        },
        stripeClasses: [],
        autoWidth: false,
        
        columnDefs: [
            {
                targets: 7,
                render: function(data, type, row, meta) {
                    return `<div class="form-check float-end mt-1"><input type="checkbox" name="${checkboxName}" class="form-check-input" value="${row._id}"></div>`;
                }
            },
            {
                targets: 5,
                render: function(data, type, row, meta) {
                    if (!data) return '';
                    
                    const keywords = data.split(',');
                    let keywordButtons = '';
                    let currentLineWidth = 0;
                    const maxWidth = 300;
                    
                    for (let i = 0; i < keywords.length; i++) {
                        const keyword = keywords[i].trim();
                        if (keyword) {
                            const estimatedWidth = keyword.length * 8 + 16;
                            if (currentLineWidth > 0 && (currentLineWidth + estimatedWidth) > maxWidth) {
                                keywordButtons += '<br>';
                                currentLineWidth = 0;
                            }
                            keywordButtons += `<a href="javascript:void(0)" class="upload-btn me-1 mb-1">${keyword}</a>`;
                            currentLineWidth += estimatedWidth;
                        }
                    }
                    
                    return keywordButtons;
                }
            },
            {
                targets: 0,
                render: function(data, type, row, meta) {
                    if (type === 'display') {
                        return '<span title="' + data + '" style="display: inline-block; max-width: 80px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'80px\'; this.style.whiteSpace=\'nowrap\';">#' + (meta.row + 1) + ' </span>';
                    }
                    return data;
                }
            },
            {
                targets: 1,
                render: function(data, type, row, meta) {
                    return `<div class="archive-name">
                        <span class="archive-title" title="${data}">${data}</span>
                        <a href="javascript:void(0)" class="edit-archive-btn" data-id="${row._id}" title="Edit Archive">
                            <i class="fas fa-edit"></i>
                        </a>
                    </div>`;
                }
            },
            {
                targets: 2,
                render: function(data, type, row, meta) {
                    return `<a href="#" class="upload-btn"><i class="fas fa-upload"></i> <b>[${data}]</b> Upload 16:9</a>`;
                }
            },
            {
                targets: 3,
                render: function(data, type, row, meta) {
                    return `<a href="#" class="upload-btn portrait"><i class="fas fa-upload"></i> <b>[${data}]</b> Upload 9:16</a>`;
                }
            },
            {
                targets: 4,
                render: function(data, type, row, meta) {
                    const date = new Date(data * 1000);
                    const hours = String(date.getHours()).padStart(2, '0');
                    const minutes = String(date.getMinutes()).padStart(2, '0');
                    const day = String(date.getDate()).padStart(2, '0');
                    const month = String(date.getMonth() + 1).padStart(2, '0');
                    const year = date.getFullYear();
                    return `${hours}:${minutes} - ${day}/${month}/${year}`;
                }
            },
        ],
    });
}
</script>





<script>
    var table_lists = create_table("#table_lists", "<?=set_route_to_link(["jsload","admin_panel_videos","data_archives",$dir_id])?>", "table_checkbox");
    setupSearch("#table_search", "#table_lists");
    function delete_status_load() {
        var delete_status = $("#delete_status").val();
        console.log(delete_status);
        if (delete_status == "true") {
            $("#btn_restore_deleted").show();
            $("#btn_delete_selected").hide();
        } else {
            $("#btn_restore_deleted").hide();
            $("#btn_delete_selected").show();
        }
        table_lists.ajax.reload();
    }
</script>










<script>
function show_error_toast(response) {
    let errorMessages = [];
    
    // Check if response data exists and is an object
    if (response && response.data && typeof response.data === 'object') {
        // Loop through each field with errors
        for (const field in response.data) {
            if (response.data.hasOwnProperty(field)) {
                // Get all error messages for this field
                const fieldErrors = response.data[field];
                
                // Handle array of errors
                if (Array.isArray(fieldErrors)) {
                    for (let i = 0; i < fieldErrors.length; i++) {
                        errorMessages.push(fieldErrors[i]);
                    }
                } 
                // Handle object of errors
                else if (typeof fieldErrors === 'object') {
                    for (let key in fieldErrors) {
                        errorMessages.push(fieldErrors[key]);
                    }
                }
                // Handle string error
                else if (typeof fieldErrors === 'string') {
                    errorMessages.push(fieldErrors);
                }
                
                // Add visual indication to the field with error
                try {
                    $("#" + field).addClass("is-invalid");
                } catch (e) {
                    console.error("Could not add invalid class to field:", field);
                }
            }
        }
    } else {
        // Fallback error message if response structure is unexpected
        errorMessages.push("Đã xảy ra lỗi không xác định");
    }
    
    $.toast({
        heading: 'Lỗi',
        text: errorMessages.length > 0 ? errorMessages : "Đã xảy ra lỗi",
        icon: 'error',
        position: 'top-right',
        hideAfter: 10000
    });
}
function add_archive() {
    var elm_name = $("#btn_add_archive");
    var name = $("#name").val();
    var keywords = $("#keywords").val() ? JSON.parse($("#keywords").val()).join(',') : '';
    if (name == "") {
        $.toast({
            heading: 'Lỗi',
            text: 'Vui lòng nhập thông tin.',
            icon: 'error',  
            position: 'top-right',
            hideAfter: 5000
        });
        return;
    }

    elm_name.html('Đang xử lý...');
    $.ajax({
        url: '<?=set_route_to_link(["backend","admin_panel_videos","add_archive"])?>',
        type: 'POST',
        data: { name: name, keywords: keywords, dir_id: '<?=$dir_id?>' },
        success: function(response) {
            elm_name.html(`<i class="fas fa-save"></i> Lưu kho`);
            if (response.stt) {
                $('#table_lists').DataTable().ajax.reload();
                $("#keywords").val('');
                $("#keywords-container").html('');
                $.toast({
                    heading: 'Thành công',
                    text: response.data,
                    icon: 'success',
                    position: 'top-right',
                    hideAfter: 5000
                });
            } else {
                show_error_toast(response)
            }
        }
    });
}
</script>

<script>
function openEditArchiveModal(archiveId) {
    const row = table_lists.rows().data().toArray().find(row => row._id === archiveId);
    
    if (row) {
        $('#edit_archive_id').val(archiveId);
        $('#edit_name').val(row.name);
        editKeywordManager.setKeywords(row.keywords);
        
        $('#editArchiveModal').modal('show');
    } else {
        $.toast({
            heading: 'Lỗi',
            text: 'Không tìm thấy thông tin kho.',
            icon: 'error',
            position: 'top-right',
            hideAfter: 5000
        });
    }
}



function update_archive() {
    var elm_name = $("#btn_update_archive");
    var archive_id = $("#edit_archive_id").val();
    var name = $("#edit_name").val();
    var keywords = $("#edit_keywords").val() ? JSON.parse($("#edit_keywords").val()).join(',') : '';

    if (name == "") {
        $.toast({
            heading: 'Lỗi',
            text: 'Vui lòng nhập tên kho.',
            icon: 'error',  
            position: 'top-right',
            hideAfter: 5000
        });
        return;
    }

    elm_name.html('Đang xử lý...');
    $.ajax({
        url: "<?=set_route_to_link(["backend","admin_panel_videos","edit_archive"])?>",
        type: "POST",
        data: {
            id: archive_id,
            name: name,
            keywords: keywords
        },
        success: function(response) {
            if (response.stt) {
                $.toast({
                    heading: 'Thành công',
                    text: 'Cập nhật kho thành công.',
                    icon: 'success',
                    position: 'top-right',
                    hideAfter: 5000
                });
                $('#editArchiveModal').modal('hide');
                table_lists.ajax.reload();
            } else {
                show_error_toast(response);
            }
            elm_name.html('Cập nhật');
        },
        error: function() {
            $.toast({
                heading: 'Lỗi',
                text: 'Đã xảy ra lỗi, vui lòng thử lại sau.',
                icon: 'error',
                position: 'top-right',
                hideAfter: 5000
            });
            elm_name.html('Cập nhật');
        }
    });
}
</script>



<script>
    // xoá nhé
    

    function deleteSelected(checkboxName) {
        const selectedIds = getCheckedBoxes(checkboxName);
        
        if (selectedIds.length === 0) {
            $.toast({
                heading: 'Thông báo',
                text: 'Vui lòng chọn ít nhất một kho để xoá.',
                icon: 'warning',
                position: 'top-right',
                hideAfter: 5000
            });
            return;
        }
        document.getElementById('btn_delete_selected').innerHTML = `<i class="fas fa-trash"></i> Đang xử lý...`;
        document.getElementById('btn_delete_selected').disabled = true;
        
        let successCount = 0;
        let failCount = 0;
        let totalToProcess = selectedIds.length;
        let processed = 0;
        
        // Process each ID sequentially
        function processNextId(index) {
            if (index >= selectedIds.length) {
                // All IDs processed, show final result
                $.toast({
                    heading: 'Thành công',
                    text: 'Đã xoá ' + successCount + ' kho thành công.' + (failCount > 0 ? ' ' + failCount + ' kho thất bại.' : ''),
                    icon: 'success',
                    position: 'top-right',
                    hideAfter: 5000
                });
                
                // Reload the table
                table_lists.ajax.reload();
                
                // Uncheck the "check all" checkbox
                document.getElementById('check_all').checked = false;
                
                // Reset button state
                document.getElementById('btn_delete_selected').innerHTML = `<i class="fas fa-trash"></i> Xoá đã chọn`;
                document.getElementById('btn_delete_selected').disabled = false;
                return;
            }
            
            // Update button text to show progress
            document.getElementById('btn_delete_selected').innerHTML = 
                `<i class="fas fa-trash"></i> Đang xử lý... (${processed}/${totalToProcess})`;
            
            $.ajax({
                url: '<?=set_route_to_link(["backend","admin_panel_videos","delete_archives"])?>',
                type: 'POST',
                data: { id: selectedIds[index] },
                success: function(response) {
                    processed++;
                    if (response.stt) {
                        successCount++;
                    } else {
                        failCount++;
                        console.error('Failed to delete archive ID:', selectedIds[index], response);
                    }
                    
                    // Process next ID
                    processNextId(index + 1);
                },
                error: function() {
                    processed++;
                    failCount++;
                    console.error('Error deleting archive ID:', selectedIds[index]);
                    
                    // Process next ID despite error
                    processNextId(index + 1);
                }
            });
        }
        
        // Start processing from the first ID
        processNextId(0);
    }
</script>


<script>
    // khôi phục đã xoá

    function restoreDeleted(checkboxName) {
        const selectedIds = getCheckedBoxes(checkboxName);
        
        if (selectedIds.length === 0) {
            $.toast({
                heading: 'Thông báo',
                text: 'Vui lòng chọn ít nhất một kho để khôi phục.',
                icon: 'warning',
                position: 'top-right',
                hideAfter: 5000
            });
            return;
        }
        document.getElementById('btn_restore_deleted').innerHTML = `<i class="fas fa-trash-restore"></i> Đang xử lý...`;
        document.getElementById('btn_restore_deleted').disabled = true;
        
        let successCount = 0;
        let failCount = 0;
        let totalToProcess = selectedIds.length;
        let processed = 0;
        
        // Process each ID sequentially
        function processNextId(index) {
            if (index >= selectedIds.length) {
                // All IDs processed, show final result
                $.toast({
                    heading: 'Thành công',
                    text: 'Đã khôi phục ' + successCount + ' kho thành công.' + (failCount > 0 ? ' ' + failCount + ' kho thất bại.' : ''),
                    icon: 'success',
                    position: 'top-right',
                    hideAfter: 5000
                });
                
                // Reload the table
                table_lists.ajax.reload();
                
                // Uncheck the "check all" checkbox
                document.getElementById('check_all').checked = false;
                
                // Reset button state
                document.getElementById('btn_restore_deleted').innerHTML = `<i class="fas fa-trash-restore"></i> Khôi phục`;
                document.getElementById('btn_restore_deleted').disabled = false;
                return;
            }
            
            // Update button text to show progress
            document.getElementById('btn_restore_deleted').innerHTML = 
                `<i class="fas fa-trash"></i> Đang xử lý... (${processed}/${totalToProcess})`;
            
            $.ajax({
                url: '<?=set_route_to_link(["backend","admin_panel_videos","restore_deleted_archives"])?>',
                type: 'POST',
                data: { id: selectedIds[index] },
                success: function(response) {
                    processed++;
                    if (response.stt) {
                        successCount++;
                    } else {
                        failCount++;
                        console.error('Failed to delete archive ID:', selectedIds[index], response);
                    }
                    
                    // Process next ID
                    processNextId(index + 1);
                },
                error: function() {
                    processed++;
                    failCount++;
                    console.error('Error deleting archive ID:', selectedIds[index]);
                    
                    // Process next ID despite error
                    processNextId(index + 1);
                }
            });
        }
        
        // Start processing from the first ID
        processNextId(0);
    }
</script>