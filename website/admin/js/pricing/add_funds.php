<script>
    $(document).ready(function() {
		// Định dạng giá trị ban đầu khi trang được tải
		formatCurrency($('#amountPaid'));
		// Lắng nghe sự kiện input trên trường nhập liệu
		$('#amountPaid').on('input', function() {
			formatCurrency($(this));
		});

        formatCurrency_html($("#html_point"));
	});
    var table = jQuery("#datatableRowsAjax").DataTable({
        scrollX: true,
        info: false,
        ajax: "<?=set_route_to_link(['jsload','pricing','add_funds'])?>",
        order: [],
        sDom: '<"row"<"col-sm-12"<"table-container"t>r>><"row"<"col-12"p>>',
        pageLength: 5, // Hiển thị 5 rows mỗi trang
        columns: [
            { data: "_id" },
            { data: "create_at" },
            { data: "amount" },
            { data: "transaction_id" },
            { data: "note" },
            { data: "status" }
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
                        // Hiển thị text với giới hạn độ dài, hiển thị toàn bộ khi đưa chuột vào và ẩn bớt khi kéo chuột ra
                        return '<span title="' + data + '" style="display: inline-block; max-width: 80px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'80px\'; this.style.whiteSpace=\'nowrap\';">#' + (meta.row + 1) + ' ' + data + '</span>'; // Trả về ghi chú với giới hạn độ dài
                    }
                    return data;
                }
            },
            {
                targets: 1, // Cột thứ hai (index 1)
                render: function(data, type, row, meta) {
                    if (type === 'display') {
                        // Chuyển đổi thời gian từ int sang định dạng ngày giờ
                        var date = new Date(data * 1000); // Chuyển đổi từ giây sang mili giây
                        return '<span style="color: #6c757d; font-weight: bold;">' + date.toLocaleString() + '</span>'; // Trả về định dạng ngày giờ với màu sắc
                    }
                    return data;
                }
            },
            {
                targets: 2, // Cột thứ ba (index 2)
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
                targets: 3, // Cột thứ tư (index 4)
                render: function(data, type, row, meta) {
                    if (type === 'display') {
                        // Hiển thị text với giới hạn độ dài, hiển thị toàn bộ khi đưa chuột vào và ẩn bớt khi kéo chuột ra
                        return '<span title="' + data + '" style="display: inline-block; max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'150px\'; this.style.whiteSpace=\'nowrap\';">' + data + '</span>'; // Trả về ghi chú với giới hạn độ dài
                    }
                    return data;
                }
            },
            {
                targets: 4, // Cột thứ tư (index 4)
                render: function(data, type, row, meta) {
                    if (type === 'display') {
                        // Hiển thị text với giới hạn độ dài, hiển thị toàn bộ khi đưa chuột vào và ẩn bớt khi kéo chuột ra
                        return '<span title="' + data + '" style="display: inline-block; max-width: 150px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'150px\'; this.style.whiteSpace=\'nowrap\';">' + data + '</span>'; // Trả về ghi chú với giới hạn độ dài
                    }
                    return data;
                }
            },
            {
                targets: 5, // Cột thứ tư (index 4)
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
                                displayText = data; // Fallback for any other status
                        }

                        return '<span class="badge ' + badgeClass + '">' + displayText + '</span>'; // Trả về trạng thái với màu sắc tương ứng
                    }
                    return data;
                }
            },
        ]
    });

    



    function formatCurrency(input) {
		// Lấy giá trị hiện tại và loại bỏ tất cả ký tự không phải số
		let value = input.val().replace(/\D/g, '');
		
		// Định dạng số với dấu phẩy ngăn cách hàng nghìn
		if (value) {
		value = parseInt(value, 10).toLocaleString('vi-VN');
		}
		
		// Cập nhật giá trị của input
		input.val(value);
	}
    function formatCurrency_html(element) {
		// Lấy giá trị hiện tại và loại bỏ tất cả ký tự không phải số
		let value = element.html().replace(/\D/g, '');
		
		// Định dạng số với dấu phẩy ngăn cách hàng nghìn
		if (value) {
		value = parseInt(value, 10).toLocaleString('vi-VN');
		}
		
		// Cập nhật giá trị của input
		element.html(value);
	}
    

    async function addFunds() {
        const confirmed = await confirmAction();
        if (!confirmed) {
            return false;
        }
        var amountPaid = $("#amountPaid").val();
        amountPaid = amountPaid.replace(/[^\d]/g, '');
		amountPaid = parseInt(amountPaid, 10);
        var transactionId = $("#transactionId").val();
        var paymentNote = $("#paymentNote").val();

        var submitAddFunds = $("#SubmitAddFunds");

        
		


        submitAddFunds.prop("disabled", true);
        submitAddFunds.html("Please wait...");
        if (amountPaid == "") {
            submitAddFunds.prop("disabled", false);
            submitAddFunds.html(`<i class="bi bi-send-check-fill me-2"></i>Xác nhận đã chuyển khoản`);
            $.toast({
                heading: 'Error',
                text: 'Please fill in all fields.',
                showHideTransition: 'fade',
                icon: 'error',
                position: 'top-right',
                hideAfter: 300000
            })
            return;
        }
        
        setTimeout(function() {
            $.ajax({
                url: "<?=set_route_to_link(["backend","pricing","history_payment_creater"])?>",
                type: "POST",
                data: {
                    amountPaid: amountPaid,
                    transactionId: transactionId,
                    paymentNote: paymentNote
                },
                success: function(response) {
                    submitAddFunds.prop("disabled", false);
                    submitAddFunds.html(`<i class="bi bi-send-check-fill me-2"></i>Xác nhận đã chuyển khoản`);
                    if (response.stt) {
                        table.ajax.reload();
                        $.toast({
                            heading: 'Success',
                            text: response.data,
                            showHideTransition: 'slide',
                            icon: 'success',
                            position: 'top-right',
                            hideAfter: 5000
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
                            hideAfter: 300000
                        });
                    }
                },
                error: function(response) {
                    submitAddFunds.prop("disabled", false);
                    submitAddFunds.html(`<i class="bi bi-send-check-fill me-2"></i>Xác nhận đã chuyển khoản`);
                    $.toast({
                        heading: 'Error',
                        text: 'Failed to add funds',
                        showHideTransition: 'fade',
                        icon: 'error',
                        position: 'top-right',
                        hideAfter: 300000
                    })
                }
            });
        }, 500);
    }
</script>