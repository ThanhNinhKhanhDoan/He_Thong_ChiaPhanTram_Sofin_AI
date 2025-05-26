<script>
    



    function initializeDataTable(tableElement, ajaxUrl, idInput) {
        return $(tableElement).DataTable({
            scrollX: true,
            info: false,
            ajax: ajaxUrl,
            order: [],
            sDom: '<"row"<"col-sm-12"<"table-container"t>r>><"row"<"col-12"p>>',
            pageLength: 5, // Hiển thị 5 rows mỗi trang
            columns: [
                { data: "_id" },
                { data: "status" },
                { data: "create_at" },
                { data: "time_end" },
                { data: "u_email" },
                { data: "u_phone" },
                { data: "plan_name" },
                { data: "duration_days" },
                { data: "bonus_points" },
                { data: "price" }
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
                    targets: 0, // Cột thứ tư (index 4)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            return '<span title="' + data + '" style="display: inline-block; max-width: 80px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'80px\'; this.style.whiteSpace=\'nowrap\';">#' + (meta.row + 1) + ' ' + data + '</span>';
                        }
                        return data;
                    }
                },
                {
                    targets: 1, // Cột thứ tư (index 4)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            let badgeClass = '';
                            let displayText = '';

                            switch (data) {
                                case 'pending':
                                    badgeClass = 'bg-outline-warning';
                                    displayText = 'Pending';
                                    break;
                                case 'approved':
                                    badgeClass = 'bg-outline-success';
                                    displayText = 'Approved';
                                    break;
                                case 'rejected':
                                    badgeClass = 'bg-outline-danger';
                                    displayText = 'Rejected';
                                    break;
                                default:
                                    badgeClass = 'bg-outline-secondary';
                                    displayText = data;
                            }

                            return '<span class="badge ' + badgeClass + '">' + displayText + '</span>';
                        }
                        return data;
                    }
                },
                {
                    targets: 2, // Cột thứ hai (index 1)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            var date = new Date(data * 1000);
                            return '<span style="color: #6c757d; font-weight: bold;">' + date.toLocaleString() + '</span>';
                        }
                        return data;
                    }
                },
                {
                    targets: 8, // Cột thứ ba (index 2)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            // Thêm đơn vị tiền tệ VNĐ với màu sắc
                            let amountHtml = '<span style="color: #6c757d; font-weight: bold;">' + data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + '</span>'; // Trả về số tiền kèm theo đơn vị
                            if (row.status === 'rejected') {
                                amountHtml = '<span style="text-decoration: line-through; color: lightgray;">' + amountHtml + '</span>'; // Thêm gạch ngang nếu trạng thái là rejected
                            }
                            return amountHtml;
                        }
                        return data;
                    }
                },
                {
                    targets: 9, // Cột thứ ba (index 2)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            // Thêm đơn vị tiền tệ VNĐ với màu sắc
                            let amountHtml = '<span style="color: gold; font-weight: bold;">' + data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' VNĐ</span>'; // Trả về số tiền kèm theo đơn vị
                            if (row.status === 'rejected') {
                                amountHtml = '<span style="text-decoration: line-through; color: lightgray;">' + amountHtml + '</span>'; // Thêm gạch ngang nếu trạng thái là rejected
                            }
                            return amountHtml;
                        }
                        return data;
                    }
                },
                {
                    targets: 3, // Cột thứ hai (index 1)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            var date = new Date(data * 1000);
                            return '<span style="color: #6c757d; font-weight: bold;">' + date.toLocaleString() + '</span>';
                        }
                        return data;
                    }
                },
            ]
        });
    }

    


    


    

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
            $(this).toggleClass('selected odd');
            // Update the role attribute to reflect the selected state
            $(this).attr('role', 'row');
            // Check/uncheck the checkbox inside the row
            const checkbox = $(this).find('input[type="checkbox"]');
            checkbox.prop('checked', !checkbox.prop('checked'));
        });
        
        // Handle Ctrl+A to select all rows
        $(document).on('keydown', function(e) {
            // Only process if the datatable is in focus/visible
            if ($(tableElement + ':visible').length === 0) {
                return;
            }
            
            // Check if Ctrl+A was pressed (keyCode 65 is 'A')
            if (e.ctrlKey && e.keyCode === 65) {
                // Prevent the default browser "Select All" behavior
                e.preventDefault();
                
                if (!isAllSelected) {
                    // Select all rows when Ctrl+A is pressed the first time
                    $(tableElement + ' tbody tr').addClass('selected odd').attr('role', 'row');
                    $(tableElement + ' tbody tr input[type="checkbox"]').prop('checked', true);
                    isAllSelected = true; // Update state to indicate all are selected
                } else {
                    // Deselect all rows when Ctrl+A is pressed the second time
                    $(tableElement + ' tbody tr').removeClass('selected odd').attr('role', 'row');
                    $(tableElement + ' tbody tr input[type="checkbox"]').prop('checked', false);
                    isAllSelected = false; // Reset state to indicate none are selected
                }
                
                return false;
            }
        });
        
        // Function to get all selected row data (useful for processing)
        window.getSelectedRows = function() {
            const selectedData = [];
            $(tableElement + ' tbody tr.selected').each(function() {
                selectedData.push(tablePending.row(this).data());
            });
            return selectedData;
        };
    }


    function getCheckedBoxes(checkboxName) {
        const checkedBoxes = [];
        $('input[name="' + checkboxName + '"]:checked').each(function() {
            checkedBoxes.push($(this).val());
        });
        return checkedBoxes;
    }


    

    $(document).ready(function() {
        var tablePending = initializeDataTable("#datatableRowsAjax", "<?=set_route_to_link(['jsload','home','history_package_purchase'])?>", "checkbox_pending");
        setupSearch("#search-package-history", "#datatableRowsAjax");
        // initializeRowSelection("#datatableRowsAjax");
    });
</script>