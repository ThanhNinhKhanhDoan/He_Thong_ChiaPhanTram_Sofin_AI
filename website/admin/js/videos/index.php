<script>

    async function browseButton(element, type = "file") {
        const result = await window.dir_files.set_path(type);
        if (result.filePaths.length > 0) {
            $("#" + element).val(result.filePaths[0]);
        }
    }

    async function uploadVoice() {

        const result = await window.dir_files.set_path("voice");
        if (result.filePaths.length < 1) {
            $.toast({
                text: "Không tìm thấy file giọng đọc",
                icon: 'error',
                position: 'top-right',
                hideAfter: 10000,
                showHideTransition: 'fade'
            });
            return;
        }

        var path_voice = result.filePaths[0];

        $.ajax({
            url: '<?=set_route_to_link(["backend","voices","add"])?>',
            type: 'POST',
            data: {
                config_voice: config,
                text: text,
                group: voiceGroup,
                name: voiceCreationName,
                path_voice: path_voice,
                play_time: response.play_time,
                type: "OPEN AI - TTS",
                title: seo_title,
                description: seo_description,
                keywords: seo_keywords,
                thumbnail: seo_thumbnail
            },
            success: function(response) {
                if (response.stt) {
                    tableVoice.ajax.reload();
                    $.toast({
                        heading: 'Success',
                        text: "Tạo giọng đọc thành công",
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
                        heading: 'Error',
                        text: errorMessages,
                        icon: 'error',
                        position: 'top-right',
                        hideAfter: 30000
                    });
                }
            },
            error: function(response) {
                $.toast({
                    heading: 'Lỗi',
                    text: 'Không thể thêm giọng nói',
                    showHideTransition: 'fade',
                    icon: 'error',
                    position: 'top-right',
                    hideAfter: 10000
                })
            }
        });
    }

</script>





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
                $(this).css('border', '2px solid #636363');
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
                    $(tableElement + ' tbody tr').css('border', '2px solid #636363');
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
            $(this).css('border', '2px solid #636363');
            
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
            row.css('border', '2px solid #636363');
            
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
    function initializeDataTable_video(tableElement, ajaxUrl, idInput) {
        return $(tableElement).DataTable({
            scrollX: true,
            info: false,
            ajax: function(data, callback, settings) {
                // Get the aspect ratio value from the select element
                var data_type = $('#data-type-select').val();
                
                // Append the aspect ratio to the AJAX URL as a GET parameter
                var ajaxUrlWithParams = ajaxUrl;
                if (ajaxUrl.indexOf('?') !== -1) {
                    ajaxUrlWithParams += '&data_type=' + data_type;
                } else {
                    ajaxUrlWithParams += '?data_type=' + data_type;
                }
                
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
                { data: "description" }
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
                    // $(this).css('border', '1px solid #e9ecef');
                    $(this).css('cursor', 'pointer');
                }).on('mouseleave', 'tr', function() {
                    $(this).removeClass('bg-light');
                    // $(this).css('border', '');
                });
            },
            columnDefs: [
                {
                    targets: 4,
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
                        return '<i class="fas fa-folder me-1"></i><span style="color: var(--primary); font-size: 1.2em; font-weight: bold;">' + data + '</span>';
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
                                
                                if (currentLineWidth + estimatedWidth > 400 && currentLineWidth > 0) {
                                    // Add line break if width exceeds 150px
                                    buttons += '<br>';
                                    currentLineWidth = 0;
                                }
                                
                                // Random color classes for badges
                                const colors = ['primary'];
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
                        return '<span style="font-size: 1.1em; color: #6c757d; font-weight: bold; display: inline-block; max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'300px\'; this.style.whiteSpace=\'nowrap\';"><i class="fas fa-info-circle me-1"></i> ' + data + '</span>';
                    }
                }
                
            ]
        });
    }

    function initializeDataTable_files(tableElement, ajaxUrl, idInput, dir_id, radio_or_checkbox) {
        dir_id = $(`#${dir_id}`).val();
        return $(tableElement).DataTable({
            scrollX: true,
            info: false,
            ajax: function(data, callback, settings) {

                
                // Append the aspect ratio to the AJAX URL as a GET parameter
                var ajaxUrlWithParams = ajaxUrl;
                ajaxUrlWithParams += '/' + dir_id;
                
                

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
            pageLength: 5, // Hiển thị 5 rows mỗi trang
            columns: [
                { data: "_id" },
                { data: "name" },
                { data: "type" },
                { data: "url" },
                { data: "group" },
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
                    // $(this).css('border', '1px solid #e9ecef');
                    $(this).css('cursor', 'pointer');
                }).on('mouseleave', 'tr', function() {
                    $(this).removeClass('bg-light');
                    // $(this).css('border', '');
                });
            },
            columnDefs: [
                {
                    targets: 6,
                    render: function(data, type, row, meta) {
                        return '<div class="form-check float-end mt-1"><input type="' + radio_or_checkbox + '" name="' + idInput + '" class="form-check-input" value="' + row.url + '"></div>';
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
                            return '<span style="color: var(--primary); font-weight: bold;">'+icon+data+'</span>'; // Changed color to primary theme color
                        }
                        return data;
                    }
                },
                {
                    targets: 4, // Cột thứ tư (index 4)
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
                                
                                if (currentLineWidth + estimatedWidth > 400 && currentLineWidth > 0) {
                                    // Add line break if width exceeds 150px
                                    buttons += '<br>';
                                    currentLineWidth = 0;
                                }
                                
                                // Random color classes for badges
                                const colors = ['primary'];
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
                    targets: 2, // Cột thứ tư (index 4)
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
                    targets: 3, // Cột thứ tư (index 4)
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


    function initializeDataTable_video_project(tableElement, ajaxUrl, idInput) {
        return $(tableElement).DataTable({
            scrollX: true,
            info: false,
            ajax: ajaxUrl,
            order: [],
            sDom: '<"row"<"col-sm-12"<"table-container"t>r>><"row"<"col-12"p>>',
            pageLength: 5, // Hiển thị 5 rows mỗi trang
            columns: [
                { data: "_id" },
                { data: "update_at" },
                { data: "status" },
                { data: "group" },
                { data: "name" },
                { data: "path_output" },
                { data: "gif" },
                

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
                    // $(this).css('border', '1px solid #e9ecef');
                    $(this).css('cursor', 'pointer');
                }).on('mouseleave', 'tr', function() {
                    $(this).removeClass('bg-light');
                    // $(this).css('border', '');
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
                    targets: 1,
                    render: function(data, type, row, meta) {
                        var date = new Date(data * 1000); // Assuming data is in seconds
                        var formattedTime = date.getHours() + ' Giờ : ' + date.getMinutes() + ' Phút ' + date.getDate() + '/' + (date.getMonth() + 1) + '/' + date.getFullYear();
                        return '<span title="' + formattedTime + '" style="display: inline-block; max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'150px\'; this.style.whiteSpace=\'nowrap\';">' + formattedTime + '</span>';
                    }
                },
                {
                    targets: 2,
                    render: function(data, type, row, meta) {
                        var buttonClass, buttonColor;
                        
                        if (data === 'pending') {
                            buttonClass = 'btn-outline-warning';
                            buttonColor = '#ffc107';
                        } else if (data === 'success') {
                            buttonClass = 'btn-outline-success';
                            buttonColor = '#28a745';
                        } else if (data === 'error') {
                            buttonClass = 'btn-outline-danger';
                            buttonColor = '#dc3545';
                        }
                        return '<span title="' + data + '" style="display: inline-block; max-width: 80px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'80px\'; this.style.whiteSpace=\'nowrap\';"><button class="btn ' + buttonClass + ' btn-sm" style="border-color: ' + buttonColor + '; margin-left: 5px;">'+data+'</button></span>';
                    }
                },
                {
                    targets: 3,
                    render: function(data, type, row, meta) {
                        return '<span title="' + data + '" style="display: inline-block; max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'200px\'; this.style.whiteSpace=\'nowrap\';">' + data + '</span>';
                    }
                },
                {
                    targets: 4,
                    render: function(data, type, row, meta) {
                        return '<span title="' + data + '" style="display: inline-block; max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'200px\'; this.style.whiteSpace=\'nowrap\';">' + data + '</span>';
                    }
                },
                {
                    targets: 5,
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            if (data && data.endsWith('.mp4')) {
                                // If data is a video path, show a view button
                                return '<div class="d-flex align-items-center">' +
                                       '<button class="btn btn-sm btn-outline-primary" onclick="onclick_view_video_done(\'' + row._id + '\')" title="Xem video">' +
                                       '<i class="bi-play-fill"></i> Xem video' +
                                       '</button>' +
                                       '</div>';
                            } else {
                                // Regular display for non-video paths
                                return '<span title="' + data + '" style="display: inline-block; max-width: 200px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'200px\'; this.style.whiteSpace=\'nowrap\';">' + data + '</span>';
                            }
                        }
                        return data;
                    }
                },


                
                
            ]
        });
    }

    // phần này của table và quản lý table
    function initializeDataTable_voice(tableElement, ajaxUrl, idInput) {
        return $(tableElement).DataTable({
            scrollX: true,
            info: false,
            ajax: ajaxUrl,
            order: [],
            sDom: '<"row"<"col-sm-12"<"table-container"t>r>><"row"<"col-12"p>>',
            pageLength: 5, // Hiển thị 5 rows mỗi trang
            columns: [
                { data: "_id" },
                { data: "group" },
                { data: "name" },
                { data: "play_time" },
                { data: "path_voice" },
                { data: "text" }
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
                    // $(this).css('border', '1px solid #e9ecef');
                    $(this).css('cursor', 'pointer');
                }).on('mouseleave', 'tr', function() {
                    $(this).removeClass('bg-light');
                    // $(this).css('border', '');
                });
            },
            columnDefs: [
                {
                    targets: 6,
                    render: function(data, type, row, meta) {
                        return '<div class="form-check float-end mt-1"><input type="radio" name="' + idInput + '" class="form-check-input" value="' + row._id + '"></div>';
                    },
                },
                {
                    targets: 4, // text
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            // Generate a clean filename from the row name
                            const cleanFileName = row.name.replace(/[^a-zA-Z0-9]/g, "_") + '.wav';
                            
                            // data is the audio path – render an audio player with integrated download button
                            return '<div class="audio-container d-flex align-items-center shadow-sm rounded" style="width:220px; transition: all 0.3s ease; background: linear-gradient(to right,rgba(110, 110, 110, 0),rgba(233, 236, 239, 0.29)); overflow:hidden;"' +
                                   'onmouseover="this.style.width=\'420px\'; this.style.boxShadow=\'0 .125rem .25rem rgba(0,0,0,.15)\';" ' +
                                   'onmouseout="this.style.width=\'220px\'; this.style.boxShadow=\'0 .125rem .25rem rgba(0,0,0,.075)\';">' +
                                   '<div class="position-relative p-1 flex-grow-1" style="transition: all 0.3s ease;">' +
                                   '<div class="audio-player-wrapper" style="border-radius:4px; overflow:hidden; border:1px solid rgba(0,123,255,0.2);">' +
                                   '<audio controls preload="none" style="width:100%; height:20px; background-color:rgba(255,255,255,0.8); --webkit-media-controls-play-button-color:#007bff; --webkit-media-controls-current-time-display-color:#495057; --webkit-media-controls-time-remaining-display-color:#495057; --webkit-media-controls-timeline-color:#007bff; --webkit-media-controls-volume-slider-color:#007bff;">' +
                                   '<source src="' + data + '" type="audio/mpeg">' +
                                   'Your browser does not support the audio element.' +
                                   '</audio>' +
                                   '</div>' +
                                   '</div>' +
                                   '<div class="download-btn-wrapper p-2 d-flex align-items-center">' +
                                   '<a href="' + data + '" download="' + cleanFileName + '" class="btn btn-primary btn-sm" ' +
                                   'style="height:36px; display:flex; align-items:center; justify-content:center; transition: all 0.2s ease; border-radius:6px; white-space:nowrap; min-width:40px;" ' +
                                   'title="Tải về ' + cleanFileName + '" ' +
                                   'onclick="event.stopPropagation();" ' +
                                   'onmouseover="this.style.transform=\'translateY(-2px)\'; this.style.boxShadow=\'0 4px 8px rgba(0,123,255,0.3)\';" ' +
                                   'onmouseout="this.style.transform=\'translateY(0)\'; this.style.boxShadow=\'none\';">' +
                                   '<i class="bi-download"></i>' +
                                   '<span class="ms-2 d-none d-md-inline">Tải về</span>' +
                                   '</a>' +
                                   '</div>' +
                                   '</div>';
                        }
                        return data;
                    }
                },
                {
                    targets: 0, // Cột thứ tư (index 4)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            return '<span title="' + data + '" style="display: inline-block; max-width: 80px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'80px\'; this.style.whiteSpace=\'nowrap\';">#' + (meta.row + 1) + '</span>';
                        }
                        return data;
                    }
                },
                
                
                
                {
                    targets: 2, // text
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            return '<span title="' + data + '" style="display: inline-block; max-width: 220px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'220px\'; this.style.whiteSpace=\'nowrap\';">' + data + '</span>';
                        }
                        return data;
                    }
                },
                {
                    targets: 3,
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            const numericData = Number(data); // Convert data to number
                            if (!isNaN(numericData)) {
                                const hours = Math.floor(numericData / 3600);
                                const minutes = Math.floor((numericData % 3600) / 60);
                                const seconds = Math.floor(numericData % 60);
                                return (hours > 0 ? String(hours).padStart(2, '0') + ':' : '') +
                                       String(minutes).padStart(2, '0') + ':' +
                                       String(seconds).padStart(2, '0');
                            }
                        }
                        return data;
                    },
                },
                {
                    targets: 5, // text
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            return '<span title="' + data + '" style="display: inline-block; max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'300px\'; this.style.whiteSpace=\'nowrap\';">' + data + '</span>';
                        }
                        return data;
                    }
                },
                
            ]
        });
    }

    


    


    

    


    

    var tableVoice = initializeDataTable_voice("#datatableRowsAjaxVoice", "<?=set_route_to_link(['jsload','voices','voice_list'])?>", "checkbox_voice");
    setupSearch("#search-voice-history", "#datatableRowsAjaxVoice");
    initializeRowRadio("#datatableRowsAjaxVoice");



    var tableVideo = initializeDataTable_video("#datatableRowsAjaxVideo", "<?=set_route_to_link(['jsload','videos','list'])?>", "checkbox_video");
    setupSearch("#search-video-history", "#datatableRowsAjaxVideo");
    initializeRowSelection("#datatableRowsAjaxVideo");



    var tableVideoProject = initializeDataTable_video_project("#datatableRowsAjaxVideoProject", "<?=set_route_to_link(['jsload','videos','list_project'])?>", "checkbox_video_project");
    setupSearch("#search-video-project-history", "#datatableRowsAjaxVideoProject");
    initializeRowSelection("#datatableRowsAjaxVideoProject");


    var tableMusic = initializeDataTable_files("#datatableRowsAjaxMusic", "<?=set_route_to_link(['jsload','videos','list_files'])?>", "checkbox_music", "category-music-select", "radio");
    setupSearch("#search-music-history", "#datatableRowsAjaxMusic");
    initializeRowRadio("#datatableRowsAjaxMusic");


    // var tableGif = initializeDataTable_files("#datatableRowsAjaxGif", "<?=set_route_to_link(['jsload','videos','list_files'])?>", "checkbox_gif", "category-gif-effects-select", "radio");
    // setupSearch("#search-gif-history", "#datatableRowsAjaxGif");
    // initializeRowRadio("#datatableRowsAjaxGif");

    var tableImageEffects = initializeDataTable_files("#datatableRowsAjaxImageEffects", "<?=set_route_to_link(['jsload','videos','list_files'])?>", "checkbox_image_effects", "category-image-effects-select", "radio");
    setupSearch("#search-image-effects-history", "#datatableRowsAjaxImageEffects");
    initializeRowRadio("#datatableRowsAjaxImageEffects");



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


    // chỉnh volume music
    $('#music-volume-slider').on('input', function() {
        var value = $(this).val();
        console.log(value);
        $('#music-volume-value').html(value);
    });

    // Add event listener for music category change
    $('#category-music-select').on('change', function() {
        // Get the selected category
        var selectedCategory = $(this).val();
        
        // Update the table's ajax URL with the selected category
        tableMusic.ajax.url("<?=set_route_to_link(['jsload','videos','list_files'])?>/" + selectedCategory).load();
        
        // Update URL in browser history
        var url = new URL(window.location.href);
        url.searchParams.set('music_category', selectedCategory);
        window.history.pushState({}, '', url);
        
        // Show a notification to the user
        $.toast({
            heading: 'Thông báo',
            text: 'Đã cập nhật danh sách nhạc theo danh mục ' + $(this).find('option:selected').text(),
            icon: 'info',
            position: 'top-right',
            hideAfter: 3000
        });
    });

    // Add event listener for gif category change
    $('#category-gif-effects-select').on('change', function() {
        // Get the selected category
        var selectedCategory = $(this).val();
        
        // Update the table's ajax URL with the selected category
        tableGif.ajax.url("<?=set_route_to_link(['jsload','videos','list_files'])?>/" + selectedCategory).load();
        
        // Update URL in browser history
        var url = new URL(window.location.href);
        url.searchParams.set('gif_category', selectedCategory);
        window.history.pushState({}, '', url);
        
        // Show a notification to the user
        $.toast({
            heading: 'Thông báo',
            text: 'Đã cập nhật danh sách hiệu ứng gif theo danh mục ' + $(this).find('option:selected').text(),
            icon: 'info',
            position: 'top-right',
            hideAfter: 3000
        });
    });

    // Add event listener for image effects category change
    $('#category-image-effects-select').on('change', function() {
        // Get the selected category
        var selectedCategory = $(this).val();
        
        // Update the table's ajax URL with the selected category   
        tableImageEffects.ajax.url("<?=set_route_to_link(['jsload','videos','list_files'])?>/" + selectedCategory).load();
        
        // Update URL in browser history
        var url = new URL(window.location.href);
        url.searchParams.set('image_effects_category', selectedCategory);
        window.history.pushState({}, '', url);  

        // Show a notification to the user
        $.toast({
            heading: 'Thông báo',
            text: 'Đã cập nhật danh sách lớp phủ nhân vật theo danh mục ' + $(this).find('option:selected').text(),
            icon: 'info',
            position: 'top-right',
            hideAfter: 3000
        });
    });


    // Add event listener for aspect ratio change
    $('#aspect-ratio-select').on('change', function() {
        // Reload the video table when aspect ratio changes
        tableVideo.ajax.reload();
        
        // Optional: Show a notification to the user
        $.toast({
            heading: 'Thông báo',
            text: 'Đã cập nhật danh sách video theo tỷ lệ khung hình ' + $(this).val(),
            icon: 'info',
            position: 'top-right',
            hideAfter: 3000
        });
    });

    $('#data-type-select').on('change', function() {
        // Reload the video table when aspect ratio changes
        tableVideo.ajax.reload();
        
        // Optional: Show a notification to the user
        $.toast({
            heading: 'Thông báo',
            text: 'Đã cập nhật danh sách video theo loại dữ liệu ' + $(this).val(),
            icon: 'info',
            position: 'top-right',
            hideAfter: 3000
        });
    });


    function onclick_view_video_done(id) {
        $.ajax({
            url: '<?=set_route_to_link(["backend","videos","get_info_video_done"])?>',
            type: 'POST',
            data: {id: id},
            dataType: 'json',
            success: function(response) {
                
                if (response.stt) {
                    var url_video = response.data.path_output;
                    var load_video_html_modal_id = $("#load-video-html-modal-id");
                    
                    // Create video element and append it into the modal container
                    var videoElement = '<video controls class="w-100 h-100"><source src="' + url_video + '" type="video/mp4">Your browser does not support the video tag.</video>';
                    load_video_html_modal_id.html(videoElement);
                    
                    // Add click event to play video when clicked
                    load_video_html_modal_id.find('video').on('click', function() {
                        if (this.paused) {
                            this.play();
                        } else {
                            this.pause();
                        }
                    });
                    
                    // Set download button href
                    $('#download-video-btn').attr('href', url_video);
                    
                    $('#video-title').text(response.data.title);
                    $('#video-description').text(response.data.description);
                    $('#video-keywords').text(response.data.keywords);
                    $('#video-prompt').text(response.data.thumbnail);
                    $('#view-video-project-id').modal('show');
                } else {
                    $.toast({
                        heading: 'Lỗi',
                        text: response.data,
                        icon: 'error',
                        position: 'top-right',
                        hideAfter: 10000
                    });
                }
            },
            error: function(response) {
                $.toast({
                    heading: 'Lỗi',
                    text: 'Không thể lấy thông tin dự án.', 
                    icon: 'error',
                    position: 'top-right',
                    hideAfter: 10000
                });
            }
        }); 
    }

    function update_project_id_video_done(id,path_output) {
        $.ajax({
            url: '<?=set_route_to_link(["backend","videos","update_project_id_video_done"])?>',
            type: 'POST',
            data: {id: id, path_output: path_output},
            dataType: 'json',
            success: function(response) {
                tableVideoProject.ajax.reload();
                if (response.stt) {
                    $.toast({
                        heading: 'Thành công',
                        text: response.data,
                        icon: 'success',
                        position: 'top-right',
                        hideAfter: 10000
                    });
                } else {
                    $.toast({
                        heading: 'Lỗi',
                        text: response.data,
                        icon: 'error',
                        position: 'top-right',
                        hideAfter: 10000
                    });
                }
            },
            error: function(response) {
                $.toast({
                    heading: 'Lỗi',
                    text: 'Không thể cập nhật dự án.',
                    icon: 'error',
                    position: 'top-right',
                    hideAfter: 10000
                }); 
            }
        });
    }

    async function run_projects() {
        var buttonRunProjects = $('#button-run-projects');
        var videos = getCheckedBoxes("checkbox_video_project");
        if (videos.length === 0) {
            $.toast({
                heading: 'Lỗi',
                text: 'Vui lòng chọn ít nhất một dự án.',
                icon: 'error',  
                position: 'top-right'
            });
            return;
        }

        buttonRunProjects.prop('disabled', true); 
        buttonRunProjects.html('Đang chạy...');
        for (var i = 0; i < videos.length; i++) {
            $.ajax({
                url: '<?=set_route_to_link(["backend","videos","get_info_project_id"])?>',
                type: 'POST',
                data: {id: videos[i]},
                dataType: 'json',
                success: async function(response) {
                    if (response.stt) {
                        var dir_id = response.data.dir_id;
                        var path_voice = response.data.path_voice;
                        var url_image_effects = response.data.url_image_effects;
                        var url_music = response.data.url_music;
                        var video_urls = response.data.video_urls;
                        var music_volume = response.data.music_volume;
                        var play_time = response.data.play_time;
                        
                        var video_run = await window.video.run_project_id(dir_id, path_voice, url_image_effects, url_music, video_urls, music_volume, play_time);
                        buttonRunProjects.prop('disabled', false); 
                        buttonRunProjects.html('Chạy dự án đã chọn');
                        if (video_run.stt) {
                            $.toast({
                                heading: 'Thành công',
                                text: 'Đã chạy dự án thành công',
                                icon: 'success',
                            });
                        } else {
                            $.toast({
                                heading: 'Lỗi',
                                text: video_run.msg,
                                icon: 'error',
                                position: 'top-right',
                                hideAfter: 10000
                            });
                        }
                    } else {
                        $.toast({
                            heading: 'Lỗi',
                            text: response.data,
                            icon: 'error',
                            position: 'top-right',
                            hideAfter: 10000
                        });
                    }
                },
                error: function(response) {
                    buttonRunProjects.prop('disabled', false);
                    buttonRunProjects.html('Chạy dự án đã chọn');
                    $.toast({
                        heading: 'Lỗi',
                        text: 'Không thể lấy thông tin dự án.', 
                        icon: 'error',
                        position: 'top-right',
                        hideAfter: 10000
                    });
                }
            }); 
        }

    }







    async function start_video() {
        
        var confirmCreateVideoButton = $('#confirmCreateVideoButton');
        var videos = getCheckedBoxes("checkbox_video");
        var voice = $("input[name='checkbox_voice']:checked").val();
        var music = $("input[name='checkbox_music']:checked").val();
        var music_volume = $('#music-volume-slider').val();
        var gif = $("input[name='checkbox_gif']:checked").val();
        var image_effects = $("input[name='checkbox_image_effects']:checked").val();
        var group = $('#videoGroup').val();
        var name = $('#videoName').val();


        if (videos.length === 0) {
            $.toast({
                heading: 'Lỗi',
                text: 'Vui lòng chọn ít nhất một chủ đề.',
                icon: 'error',
                position: 'top-right'
            });
            return;
        }
        var video = videos.join(',');

        if (voice == undefined) {
            $.toast({
                heading: 'Lỗi',
                text: 'Vui lòng chọn một giọng đọc.',
                icon: 'error',
                position: 'top-right'
            });
            return;
        }
        if (music == undefined) {
            $.toast({
                heading: 'Lỗi',
                text: 'Vui lòng chọn một bài hát.',
                icon: 'error',
                position: 'top-right'
            });
            return;
        }
        if (gif == undefined) {
            $.toast({
                heading: 'Lỗi',
                text: 'Vui lòng chọn một hiệu ứng GIF.',
                icon: 'error',
                position: 'top-right'
            });
            return;
        }
        if (image_effects == undefined) {
            $.toast({   
                heading: 'Lỗi',
                text: 'Vui lòng chọn một hiệu ứng ảnh.',
                icon: 'error',
                position: 'top-right'
            });
            return;
        }


        const confirmed = await confirmAction();
        if (!confirmed) {
            return false;
        }
        

        // var is_file_voice_exist = await dir_files.file_exist(voice);
        // if (!is_file_voice_exist.stt) {
        //     $.toast({
        //         heading: 'Lỗi',
        //         text: 'File bài hát không tồn tại.',
        //         icon: 'error',  
        //         position: 'top-right'
        //     });
        //     return;
        // }

        confirmCreateVideoButton.prop('disabled', true);
        confirmCreateVideoButton.html('Đang tạo...');
        
        // Fetch voice information before creating the video

        try {
            const voiceInfoResponse = await $.ajax({
                url: '<?=set_route_to_link(["backend","voices","get_voice_info"])?>',
                type: 'POST',
                data: {id: voice},
                dataType: 'json'
            });
            
            if (!voiceInfoResponse.stt) {
                confirmCreateVideoButton.prop('disabled', false);
                confirmCreateVideoButton.html('Tạo video');
                $.toast({
                    heading: 'Cảnh báo',
                    text: 'Không thể lấy thông tin giọng đọc. Tiếp tục tạo video với thông tin hiện có.',
                    icon: 'warning',
                    position: 'top-right'
                });
                return;
            }
            
            var path_voice = voiceInfoResponse.data.path_voice;
            var play_time = voiceInfoResponse.data.play_time;

            console.log("path_voice", path_voice);
            console.log("play_time", play_time);

            $.ajax({
                url: '<?=set_route_to_link(["backend","videos","add_project"])?>',
                type: 'POST',
                data: {group: group, name: name, voice: voice, music: music, music_volume: music_volume, video: video, gif: gif, image_effects: image_effects, path_voice: path_voice, play_time: play_time},
                success: function(response) {
                    confirmCreateVideoButton.prop('disabled', false);
                    confirmCreateVideoButton.html('Tạo video');
                    if (response.stt) {
                        tableVideoProject.ajax.reload();
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
                    confirmCreateVideoButton.prop('disabled', false);
                    confirmCreateVideoButton.html('Tạo video');
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
        } catch (error) {
            confirmCreateVideoButton.prop('disabled', false);
            confirmCreateVideoButton.html('Tạo video');
            $.toast({
                heading: 'Cảnh báo',
                text: 'Lỗi khi lấy thông tin giọng đọc. Tiếp tục tạo video với thông tin hiện có.',
                icon: 'warning',
                position: 'top-right'
            });
            return;
        }

        
    }


    async function delete_video() {
        
        var buttonDeleteSelectedVideos = $('#button-delete-selected-videos');
        
        var videos = getCheckedBoxes("checkbox_video_project");
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
                url: '<?=set_route_to_link(["backend","videos","delete_project"])?>',
                type: 'POST',
                data: {id: videos[i]},
                success: function(response) {
                    buttonDeleteSelectedVideos.prop('disabled', false);
                    buttonDeleteSelectedVideos.html('Xoá đã chọn');
                    if (response.stt) { 
                        $.toast({
                            heading: 'Thành công',
                            text: 'Đã xóa video thành công',
                            icon: 'success',
                            position: 'top-right',
                            hideAfter: 10000
                        })
                    } else {
                        $.toast({
                            heading: 'Lỗi',
                            text: response.data,
                            icon: 'error',
                            position: 'top-right',
                            hideAfter: 10000
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
                        hideAfter: 10000
                    })
                }
            });
        }
        tableVideoProject.ajax.reload();
    }



    async function run_video_selected() {
        var runSelectedProjects = $('#run-selected-projects');
        var videos = getCheckedBoxes("checkbox_video_project");
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
        runSelectedProjects.prop('disabled', true); 
        runSelectedProjects.html('Đang chạy...');
        for (var i = 0; i < videos.length; i++) {
            $.ajax({
                url: '<?=set_route_to_link(["backend","videos","get_info_project"])?>',
                type: 'POST',
                data: {id: videos[i]},
                success: function(response) {
                    runSelectedProjects.prop('disabled', false);
                    runSelectedProjects.html('Chạy dự án đã chọn');
                    if (response.stt) {
                        console.log(response.data);
                    } else {
                        $.toast({
                            heading: 'Lỗi',
                            text: response.data,
                            icon: 'error',
                            position: 'top-right',
                            hideAfter: 10000
                        }); 
                    }
                },
                error: function(response) {
                    runSelectedProjects.prop('disabled', false);
                    runSelectedProjects.html('Chạy đã chọn');
                    $.toast({
                        heading: 'Lỗi',
                        text: 'Không thể chạy video',
                        icon: 'error',
                        position: 'top-right',
                        hideAfter: 10000
                    })
                }
            }); 
        }
        tableVideoProject.ajax.reload();
    }
</script>