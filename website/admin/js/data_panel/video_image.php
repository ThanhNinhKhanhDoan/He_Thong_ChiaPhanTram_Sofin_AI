<script>
/**
     * Sets up real-time search functionality for a DataTable
     * @param {string} inputElement - Selector for the search input field
     * @param {string} tableElement - Selector for the DataTable to search
     */
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
function initializeDataTable_video_image(tableElement, ajaxUrl, idInput) {
    return $(tableElement).DataTable({
        scrollX: true,
        info: false,
        ajax: function(data, callback, settings) {
            // Get the aspect ratio value from the select element
            // var aspectRatio = $('#aspect-ratio-select').val();
            // var data_type = $('#data-type-select').val();
            
            // Append the aspect ratio to the AJAX URL as a GET parameter
            var ajaxUrlWithParams = ajaxUrl;
            // if (ajaxUrl.indexOf('?') !== -1) {
            //     ajaxUrlWithParams += '&aspect_ratio=' + aspectRatio;
            //     ajaxUrlWithParams += '&data_type=' + data_type;
            // } else {
            //     ajaxUrlWithParams += '?aspect_ratio=' + aspectRatio;
            //     ajaxUrlWithParams += '&data_type=' + data_type;
            // }
            
            $.ajax({
                url: ajaxUrlWithParams,
                type: 'GET',
                dataType: 'json',
                success: function(json) {
                    callback(json);
                }
            });
        },
        order: [],
        sDom: '<"row"<"col-sm-12"<"table-container"t>r>><"row"<"col-12"p>>',
        pageLength: 10, // Hiển thị 5 rows mỗi trang
        columns: [
            { data: "_id" },
            { data: "name" },
            { data: "data_type" },
            { data: "description" },
            { data: "group" }
        ],
        language: {
            paginate: {
                previous: '<i class="cs-chevron-left"></i>',
                next: '<i class="cs-chevron-right"></i>'
            }
        },
        initComplete: function(settings, json) {
            this.api().columns.adjust();
        },
        columnDefs: [
            {
                targets: 5,
                render: function(data, type, row, meta) {
                    return '<div class="form-check float-end mt-1"><input type="checkbox" name="' + idInput + '" class="form-check-input" value="' + row._id + '"></div>';
                },
            },
            {
                targets: 0, // Cột thứ tư (index 4)
                render: function(data, type, row, meta) {
                    if (type === 'display') {
                        return '<span title="' + data + '" style="display: inline-block; max-width: 80px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'80px\'; this.style.whiteSpace=\'nowrap\';">#' + (meta.row + 1) + ' </span>';
                    }
                    return data;
                }
            },
            {
                targets: 2, // text
                render: function(data, type, row, meta) {
                    if (type === 'display') {
                        return '<button class="btn btn-sm btn-outline-primary">' + data + '</button>';
                    }
                    return data;
                }
            },
            {
                targets: 1, // text
                render: function(data, type, row, meta) {
                    if (type === 'display') {
                        return '<a href="<?=set_route_to_link(["public","data_panel","video_image_id"])?>/' + row._id + '" title="' + data + '" style="display: inline-block; max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'300px\'; this.style.whiteSpace=\'nowrap\';"><i class="fas fa-link"></i> ' + data + ' </a>';
                    }
                    return data;
                }
            },
            
            {
                targets: 4, // text
                render: function(data, type, row, meta) {
                    if (type === 'display') {
                        return '<button class="btn btn-sm btn-outline-primary">' + data + '</button>';
                    }
                    return data;
                }
            },
            
        ]
    });
}



var tableVideoImage = initializeDataTable_video_image("#datatableRowsAjaxVideoImage", "<?=set_route_to_link(['jsload','data_panel','video_image'])?>", "checkbox_video_image");
setupSearch("#search-video-image-history", "#datatableRowsAjaxVideoImage");
initializeRowSelection("#datatableRowsAjaxVideoImage");
</script>



<script>
    function addData() {
        var browseDataPath = $('#browseDataPath');
        var aspectRatio = $('#aspectRatio').val();
        var dataType = $('#dataType').val();
        var dataGroup = $('#dataGroup').val();
        var dataName = $('#dataName').val();
        var dataDescription = $('#dataDescription').val();

        if (dataGroup.length < 3) {
            $.toast({
                heading: 'Lỗi',
                text: 'Vui lòng nhập tên nhóm dữ liệu.',
                icon: 'error',
                position: 'top-right',
                hideAfter: 10000
            })
            return;
        }
        if (dataName.length < 3) {
            $.toast({
                heading: 'Lỗi',
                text: 'Vui lòng nhập tên dữ liệu.',
                icon: 'error',
                position: 'top-right',
                hideAfter: 10000
            })
            return;
        }
        if (dataDescription.length < 3) {
            $.toast({
                heading: 'Lỗi',
                text: 'Vui lòng nhập mô tả dữ liệu.',
                icon: 'error',
                position: 'top-right',
                hideAfter: 10000
            })
            return;
        }
        

        browseDataPath.prop('disabled', true);
        browseDataPath.html('Đang thêm...');
        $.ajax({
            url: '<?=set_route_to_link(["backend","data_panel","video_image_add"])?>',
            type: 'POST',
            data: {group: dataGroup, name: dataName, description: dataDescription, aspect_ratio: aspectRatio, data_type: dataType},
            success: function(response) {
                browseDataPath.prop('disabled', false);
                browseDataPath.html('Lưu');
                if (response.stt) {
                    tableVideoImage.ajax.reload();
                    $.toast({
                        heading: 'Thành công',
                        text: response.data,
                        showHideTransition: 'slide',
                        icon: 'success',
                        position: 'top-right',
                        hideAfter: 10000
                    })
                } else {
                    let errorMessages = [];
                    for (const field in response.data) {
                        if (response.data.hasOwnProperty(field)) {
                            const fieldErrors = response.data[field];
                            for (let key in fieldErrors) {
                                errorMessages.push(fieldErrors[key]);
                            }
                            $("#" + field).addClass("is-invalid");
                        }
                    }
                    $.toast({
                        heading: 'Lỗi',
                        text: errorMessages,
                        icon: 'error',
                        position: 'top-right',
                        hideAfter: 30000
                    });
                }
            },
            error: function(response) {
                browseDataPath.prop('disabled', false);
                browseDataPath.html('Lưu');
                $.toast({
                    heading: 'Lỗi',
                    text: 'Không thể thêm dữ liệu',
                    showHideTransition: 'fade',
                    icon: 'error',
                    position: 'top-right',
                    hideAfter: 10000
                })
            }
        });
    }



    async function delete_data() {
        
        var buttonDeleteSelectedVideos = $('#delete-button');
        
        var videos = getCheckedBoxes("checkbox_video_image");
        if (videos.length === 0) {
            $.toast({
                heading: 'Lỗi',
                text: 'Vui lòng chọn ít nhất một chủ đề.',
                icon: 'error',  
                position: 'top-right'
            });
            return;
        }
        const confirmed = await confirmAction();
        if (!confirmed) {
            return false;
        }
        buttonDeleteSelectedVideos.prop('disabled', true);
        buttonDeleteSelectedVideos.html('Đang xóa...');
        for (var i = 0; i < videos.length; i++) {
            $.ajax({
                url: '<?=set_route_to_link(["backend","data_panel","video_image_delete"])?>',
                type: 'POST',
                data: {id: videos[i]},
                success: async function(response) {
                    buttonDeleteSelectedVideos.prop('disabled', false);
                    buttonDeleteSelectedVideos.html('Xoá đã chọn');
                    if (response.stt) { 
                        var is_delete = await window.dir_files.delete_dir_s3(response.data);
                        if (is_delete) {
                            $.toast({
                                heading: 'Thành công',
                                text: 'Đã xóa dữ liệu thành công',
                                icon: 'success',
                                position: 'top-right',
                                hideAfter: 2000
                            })
                        } else {
                            $.toast({
                                heading: 'Lỗi',
                                text: 'Không tìm thấy dữ liệu trên server',
                                icon: 'warning',
                                position: 'top-right',
                                hideAfter: 2000
                            })
                        }   
                    } else {
                        $.toast({
                            heading: 'Lỗi',
                            text: response.data,
                            icon: 'error',
                            position: 'top-right',
                            hideAfter: 2000
                        });
                    }
                },
                error: function(response) {
                    buttonDeleteSelectedVideos.prop('disabled', false);
                    buttonDeleteSelectedVideos.html('Xoá đã chọn');
                    $.toast({
                        heading: 'Lỗi',
                        text: 'Không thể xóa video',
                        icon: 'error',
                        position: 'top-right',
                        hideAfter: 2000
                    })
                }
            });
        }
        tableVideoImage.ajax.reload();
    }
</script>