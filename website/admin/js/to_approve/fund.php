
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
                { data: "u_email" },
                { data: "u_phone" },
                { data: "amount" },
                { data: "transaction_id" },
                { data: "note" },
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
                    targets: 8,
                    render: function(data, type, row, meta) {
                        return '<div class="form-check float-end mt-1"><input type="checkbox" name="' + idInput + '" class="form-check-input" value="' + row._id + '"></div>';
                    }
                },
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
                    targets: 5, // Cột thứ ba (index 2)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            let amountHtml = '<span style="color: gold; font-weight: bold;">' + data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' VNĐ</span>';
                            if (row.status === 'rejected') {
                                amountHtml = '<span style="text-decoration: line-through; color: lightgray;">' + amountHtml + '</span>';
                            }
                            return amountHtml;
                        }
                        return data;
                    }
                },
                {
                    targets: 6, // Cột thứ tư (index 4)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            return '<span title="' + data + '" style="display: inline-block; max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'150px\'; this.style.whiteSpace=\'nowrap\';">' + data + '</span>';
                        }
                        return data;
                    }
                },
                {
                    targets: 7, // Cột thứ tư (index 4)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            return '<span title="' + data + '" style="display: inline-block; max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'150px\'; this.style.whiteSpace=\'nowrap\';">' + data + '</span>';
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
                }
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


    async function pendingFund() {
        const confirmed = await confirmAction();
        if (!confirmed) {
            return false;
        }
        const checkedBoxes = getCheckedBoxes("checkbox_rejected");   
        if (checkedBoxes.length === 0) {
            $.toast({
                text: "Please select at least one row to pending.",
                position: "top-right",
                icon: "error",  
                hideAfter: 30000,
                stack: 6
            });
            return false;
        }
        var tableRejected = $('#datatableRowsAjaxRejected').DataTable();
        var tablePending = $('#datatableRowsAjaxPending').DataTable();
        for (const id of checkedBoxes) {
            $.ajax({
                url: "<?=set_route_to_link(['backend','to_approve','fund_pending'])?>",
                type: "POST",
                data: {id: id},
                success: function(response) {
                    if (response.stt) {
                        tableRejected.ajax.reload();
                        tablePending.ajax.reload();
                        $.toast({
                            heading: 'Success',
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
                            heading: 'Error',
                            text: errorMessages,
                            icon: 'error',
                            position: 'top-right',
                            hideAfter: 30000
                        });
                    }
                },
                error: function(xhr, status, error) {
                    $.toast({
                        heading: 'Error',
                        text: 'Failed to pending fund',
                        showHideTransition: 'fade',
                        icon: 'error',
                        position: 'top-right',
                        hideAfter: 10000
                    })
                }
            });
        }
    }

    async function rejectFund() {
        const confirmed = await confirmAction();
        if (!confirmed) {
            return false;
        }
        const checkedBoxes = getCheckedBoxes("checkbox_pending");
        if (checkedBoxes.length === 0) {
            $.toast({
                text: "Please select at least one row to reject.",
                position: "top-right",
                icon: "error",
                hideAfter: 30000,
                stack: 6
            });
            return false;
        }
        var tablePending = $('#datatableRowsAjaxPending').DataTable();
        var tableRejected = $('#datatableRowsAjaxRejected').DataTable();

        for (const id of checkedBoxes) {
            $.ajax({
                url: "<?=set_route_to_link(['backend','to_approve','fund_rejected'])?>",
                type: "POST",
                data: {id: id},
                success: function(response) {
                    if (response.stt) {
                        tablePending.ajax.reload();
                        tableRejected.ajax.reload();
                        $.toast({
                            heading: 'Success',
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
                            heading: 'Error',
                            text: errorMessages,
                            icon: 'error',
                            position: 'top-right',
                            hideAfter: 30000
                        }); 
                    }
                },
                error: function(xhr, status, error) {
                    $.toast({
                        heading: 'Error',
                        text: 'Failed to reject fund',  
                        showHideTransition: 'fade',
                        icon: 'error',
                        position: 'top-right',
                        hideAfter: 10000
                    })
                }
            });
        }
    } 

    async function approveFund() {
        const confirmed = await confirmAction();
        if (!confirmed) {
            return false;
        }
        const checkedBoxes = getCheckedBoxes("checkbox_pending");
        if (checkedBoxes.length === 0) {
            $.toast({
                text: "Please select at least one row to approve.",
                position: "top-right",
                icon: "error",
                hideAfter: 30000,
                stack: 6
            });
            return false;
        }
        var tablePending = $('#datatableRowsAjaxPending').DataTable();
        var tableApproved = $('#datatableRowsAjaxApproved').DataTable();

        for (const id of checkedBoxes) {
            $.ajax({
                url: "<?=set_route_to_link(['backend','to_approve','fund_approved'])?>",
                type: "POST",
                data: {id: id},
                success: function(response) {
                    if (response.stt) {
                        tablePending.ajax.reload();
                        tableApproved.ajax.reload();
                        $.toast({
                            heading: 'Success',
                            text: response.data,
                            showHideTransition: 'slide',
                            icon: 'success',
                            position: 'top-right',
                            hideAfter: 10000
                        })
                    } else {
                        let errorMessages = [];
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
                error: function(xhr, status, error) {
                    $.toast({
                        heading: 'Error',
                        text: 'Failed to approve fund',
                        showHideTransition: 'fade',
                        icon: 'error',
                        position: 'top-right',
                        hideAfter: 10000
                    })
                }
            });
        }
    }


    $(document).ready(function() {
        var tablePending = initializeDataTable("#datatableRowsAjaxPending", "<?=set_route_to_link(['jsload','to_approve','fund_pending'])?>", "checkbox_pending");
        setupSearch("#search-pending", "#datatableRowsAjaxPending");
        initializeRowSelection("#datatableRowsAjaxPending");

        var tableApproved = initializeDataTable("#datatableRowsAjaxApproved", "<?=set_route_to_link(['jsload','to_approve','fund_approved'])?>", "checkbox_approved");
        setupSearch("#search-approved", "#datatableRowsAjaxApproved");
        // initializeRowSelection("#datatableRowsAjaxApproved");

        var tableRejected = initializeDataTable("#datatableRowsAjaxRejected", "<?=set_route_to_link(['jsload','to_approve','fund_rejected'])?>", "checkbox_rejected");
        setupSearch("#search-rejected", "#datatableRowsAjaxRejected");
        initializeRowSelection("#datatableRowsAjaxRejected");
    });
</script>