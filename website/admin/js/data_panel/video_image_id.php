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
function initializeDataTable(tableElement, ajaxUrl, idInput) {
        return $(tableElement).DataTable({
            scrollX: true,
            info: false,
            ajax: function(data, callback, settings) {

                
                // Append the aspect ratio to the AJAX URL as a GET parameter
                var ajaxUrlWithParams = ajaxUrl;
                
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
                { data: "group" },
                { data: "type" },
                { data: "url" },
                { data: "description" },
            ],
            language: {
                paginate: {
                    previous: '<i class="cs-chevron-left"></i>',
                    next: '<i class="cs-chevron-right"></i>'
                }
            },
            initComplete: function(settings, json) {
                this.api().columns.adjust();
                
                // Add hover effect to table rows
                $(tableElement + ' tbody').on('mouseenter', 'tr', function() {
                    $(this).addClass('bg-light');
                    $(this).css('transition', 'all 0.2s ease');
                    $(this).css('border-radius', '0');
                    $(this).css('border', '1px solid #e9ecef');
                    $(this).css('cursor', 'pointer');
                }).on('mouseleave', 'tr', function() {
                    $(this).removeClass('bg-light');
                    $(this).css('border', '');
                });
            },
            columnDefs: [
                {
                    targets: 6,
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
                    targets: 1, // Cột thứ tư (index 4)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            let icon = '';
                            if (row.type === 'mp4' || row.type === 'avi' || row.type === 'mov') {
                                icon = '<i class="fas fa-video me-1"></i>'; // Video icon
                            } else if (row.type === 'mp3' || row.type === 'wav' || row.type === 'ogg') {
                                icon = '<i class="fas fa-music me-1"></i>'; // Audio icon
                            } else if (row.type === 'jpg' || row.type === 'jpeg' || row.type === 'png') {
                                icon = '<i class="fas fa-image me-1"></i>'; // Image icon
                            } else if (row.type === 'gif') {
                                icon = '<i class="fas fa-film me-1"></i>'; // GIF icon
                            } else if (row.type === 'txt') {
                                icon = '<i class="fas fa-file-alt me-1"></i>'; // Text file icon
                            } else {
                                icon = '<i class="fas fa-file me-1"></i>'; // Default file icon
                            }
                            return '<span style="color: #007bff; font-weight: bold;">'+icon+data+'</span>'; // Changed color and added text
                        }
                        return data;
                    }
                },
                {
                    targets: 2, // Cột thứ tư (index 4)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            if (!data) return '';
                            
                            // Split the keywords by comma
                            const keywords = data.split(',').map(keyword => keyword.trim()).filter(keyword => keyword);
                            
                            // Create a button for each keyword
                            let buttons = '';
                            let currentLineWidth = 0;
                            
                            keywords.forEach((keyword, index) => {
                                // Estimate width: roughly 10px per character + 20px padding
                                const estimatedWidth = keyword.length * 10 + 20;
                                
                                if (currentLineWidth + estimatedWidth > 1500 && currentLineWidth > 0) {
                                    // Add line break if width exceeds 150px
                                    buttons += '<br>';
                                    currentLineWidth = 0;
                                }
                                
                                // Random color classes for badges
                                const colors = ['secondary'];
                                const randomColor = colors[Math.floor(Math.random() * colors.length)];

                                buttons += `<span class="badge bg-outline-${randomColor} text-uppercase me-1 mb-1">${keyword}</span>`;
                                currentLineWidth += estimatedWidth;
                            });
                            
                            return buttons;
                        }
                        return data;
                    }
                },
                {
                    targets: 3, // Cột thứ tư (index 4)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            let icon = '';
                            if (data === 'mp4' || data === 'avi' || data === 'mov') {
                                icon = '<i class="fas fa-video me-1"></i>'; // Video icon
                            } else if (data === 'mp3' || data === 'wav' || data === 'ogg') {
                                icon = '<i class="fas fa-music me-1"></i>'; // Audio icon
                            } else if (data === 'jpg' || data === 'jpeg' || data === 'png') {
                                icon = '<i class="fas fa-image me-1"></i>'; // Image icon
                            } else if (data === 'gif') {
                                icon = '<i class="fas fa-film me-1"></i>'; // GIF icon
                            } else if (data === 'txt') {
                                icon = '<i class="fas fa-file-alt me-1"></i>'; // Text file icon
                            } else {
                                icon = '<i class="fas fa-file me-1"></i>'; // Default file icon
                            }
                            return '<button class="btn btn-sm btn-outline-primary">' + icon + data + '</button>';
                        }
                        return data;
                    }
                },
                {
                    targets: 4, // Cột thứ tư (index 4)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            let icon = '';
                            if (row.type === 'mp4' || row.type === 'avi' || row.type === 'mov') {
                                icon = '<i class="fas fa-video me-1"></i>'; // Video icon
                            } else if (row.type === 'mp3' || row.type === 'wav' || row.type === 'ogg') {
                                icon = '<i class="fas fa-music me-1"></i>'; // Audio icon
                            } else if (row.type === 'jpg' || row.type === 'jpeg' || row.type === 'png') {
                                icon = '<i class="fas fa-image me-1"></i>'; // Image icon
                            } else if (row.type === 'gif') {
                                icon = '<i class="fas fa-film me-1"></i>'; // GIF icon
                            } else if (row.type === 'txt') {
                                icon = '<i class="fas fa-file-alt me-1"></i>'; // Text file icon
                            } else {
                                icon = '<i class="fas fa-file me-1"></i>'; // Default file icon
                            }
                            return '<button class="btn btn-sm btn-outline-primary" onclick="viewDetails(\'' + row._id + '\',\'' + row.url + '\',\'' + row.name + '\',\'' + row.type + '\')"> '+icon+' Xem chi tiết</button>';
                        }
                        return data;
                    }
                },
                
            ]
        });
    }

</script>





<script>
    var tableVideoImage = initializeDataTable("#datatableRowsAjaxVideoImage", "<?=set_route_to_link(['jsload','data_panel','video_image_id', $u_id])?>", "checkbox_video_image");
    setupSearch("#search-video-image-history", "#datatableRowsAjaxVideoImage");
    initializeRowSelection("#datatableRowsAjaxVideoImage");

    function viewDetails(id,url_img,name_img,type_img) {
        $('#viewDetails').modal('show');
        $('#viewDetailsLabel').text(name_img);
        // Clear previous content first
        $('#modal_load_data').empty();
        
        if (type_img === 'mp4' || type_img === 'avi' || type_img === 'mov') {
            $('#modal_load_data').html('<video id="modal_image_id" class="img-fluid rounded shadow" style="max-height: 70vh; object-fit: contain;" controls><source src="' + url_img + '" type="video/' + type_img + '">Your browser does not support the video tag.</video>');
        } else if (type_img === 'mp3' || type_img === 'wav' || type_img === 'ogg') {
            $('#modal_load_data').html('<audio id="modal_audio_id" class="w-100" controls><source src="' + url_img + '" type="audio/' + type_img + '">Your browser does not support the audio element.</audio>');
        } else {
            $('#modal_load_data').html('<img id="modal_image_id" class="img-fluid rounded shadow" style="max-height: 70vh; object-fit: contain;" src="' + url_img + '" alt="Image">');
        }
    }

    async function add_video_image() {
        var create_button = $("#create-button");
        create_button.prop('disabled', true);
        create_button.html('Đang xử lý...');
        const result = await window.dir_files.upload_file('<?=$params[3]?>');
        create_button.prop('disabled', false);
        create_button.html('Thêm nội dung');
        tableVideoImage.ajax.reload();
    }

    function saveField(key, value, button) {
        
        var elm_button = $('#'+button);
        value = $('#'+value).val();
        var videos = getCheckedBoxes("checkbox_video_image");

        if (videos.length === 0) {
            $.toast({
                heading: 'Lỗi',
                text: 'Vui lòng chọn ít nhất một tập tin.',
                icon: 'error',  
                position: 'top-right'
            });
            return;
        }
        if (value == "") {
            $.toast({
                heading: 'Lỗi',
                text: 'Vui lòng nhập thông tin.',
                icon: 'error',  
                position: 'top-right'
            });
            return;
        }
        elm_button.prop('disabled', true);
        elm_button.html('Đang xử lý...');
        for (var i = 0; i < videos.length; i++) {
            $.ajax({
                url: '<?=set_route_to_link(["backend","data_panel","edit_info_file"])?>',
                type: 'POST',
                data: {id: videos[i], key_data: key, value_data: value},
                success: async function(response) {
                    elm_button.prop('disabled', false);
                    elm_button.html('Lưu');
                    if (response.stt) {
                        $.toast({
                            heading: 'Success',
                            text: response.data,
                            showHideTransition: 'slide',
                            icon: 'success',
                            position: 'top-right',
                            hideAfter: 5000
                        })
                        tableVideoImage.ajax.reload();
                    } else {
                        let errorMessages = [];
                        // Loop through each field with errors
                        // Loop through each field with errors
                        for (const field in response.data) {
                            if (response.data.hasOwnProperty(field)) {
                                // Get all error messages for this field
                                const fieldErrors = response.data[field];
                                // Add each error message to our array
                                for (let key in fieldErrors) {
                                        errorMessages.push(fieldErrors[key]);
                                }
                                // Add visual indication to the field with error
                                $("#" + field).addClass("is-invalid");
                            }
                        }
                        $.toast({
                            heading: 'Error',
                            text: errorMessages,
                            icon: 'error',
                            position: 'top-right',
                            hideAfter: 30000
                        });
                    }
                },
                error: function(response) {
                    elm_button.prop('disabled', false);
                    elm_button.html('Lưu');
                    $.toast({
                        heading: 'Lỗi',
                        text: 'Không thể lưu thông tin',
                        icon: 'error',
                        position: 'top-right',
                        hideAfter: 2000
                    })
                }
            });
        }
        // Get current page before reload
        var currentPage = tableVideoImage.page();
        // Reload the table data but maintain the current page
        tableVideoImage.ajax.reload(function() {
            // Check if the current page still exists after reload
            if (currentPage < tableVideoImage.page.info().pages) {
                tableVideoImage.page(currentPage).draw('page');
            } else {
                // If current page no longer exists, go to first page
                tableVideoImage.page(0).draw('page');
            }
        }, false);
    }


    function add_database(datas) {
        var folder_id = "<?=$params[3]?>";
        var path_file = datas.path;
        var name_file = datas.name;
        var type_file = datas.type;
        var url = datas.url;
        
        $.ajax({
            url: '<?=set_route_to_link(["backend","data_panel","video_image_add_database_id"])?>',
            type: 'POST',
            data: {
                folder_id: folder_id,
                path: path_file,
                name: name_file,
                type: type_file,
                url: url
            },
            success: function(response) {
                if(response.stt) {
                    $.toast({
                        heading: 'Thành công',
                        text: 'Đã thêm nội dung thành công',
                        icon: 'success',
                        position: 'top-right',
                        hideAfter: 2000
                    })
                } else {
                    $.toast({
                        heading: 'Lỗi',
                        text: 'Đã xảy ra lỗi khi thêm nội dung',
                        icon: 'error',
                        position: 'top-right',
                        hideAfter: 2000
                    });
                }
            },
            error: function(xhr, status, error) {
                $.toast({
                    heading: 'Lỗi',
                    text: 'Đã xảy ra lỗi khi thêm nội dung',
                    icon: 'error',
                    position: 'top-right',
                    hideAfter: 2000
                });
            }
        });
        

    }

    async function delete_video_image() {
        
        var buttonDeleteSelectedVideos = $('#button-delete-selected-videos');
        
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
                url: '<?=set_route_to_link(["backend","data_panel","video_image_delete_database_id"])?>',
                type: 'POST',
                data: {id: videos[i]},
                success: async function(response) {
                    buttonDeleteSelectedVideos.prop('disabled', false);
                    buttonDeleteSelectedVideos.html('Xoá đã chọn');
                    if (response.stt) { 
                        var is_delete = await window.dir_files.delete_object_s3(response.data);
                        if (is_delete) {
                            $.toast({
                                heading: 'Thành công',
                                text: 'Đã xóa file thành công',
                                icon: 'success',
                                position: 'top-right',
                                hideAfter: 2000
                            })
                        } else {
                            $.toast({
                                heading: 'Lỗi',
                                text: 'Không thể xoá file trên server',
                                icon: 'error',
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