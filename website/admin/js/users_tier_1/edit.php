<script src="<?=asset("/style/acom-all/js/vendor/movecontent.js")?>"></script>
<script src="<?=asset("/style/acom-all/js/vendor/select2.full.min.js")?>"></script>
<script src="<?=asset("/style/acom-all/js/vendor/datepicker/bootstrap-datepicker.min.js")?>"></script>

<script>
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
	$(document).ready(function() {
		// Định dạng giá trị ban đầu khi trang được tải
		formatCurrency($('#point'));
		// Lắng nghe sự kiện input trên trường nhập liệu
		$('#point').on('input', function() {
			formatCurrency($(this));
		});

		// Định dạng giá trị ban đầu khi trang được tải
		formatCurrency($('#balance'));
		// Lắng nghe sự kiện input trên trường nhập liệu
		$('#balance').on('input', function() {
			formatCurrency($(this));
		});
	});

	function updateBalance() {
		var submitUpdateBalance = $('#submitUpdateBalance');
		var id = '<?=$u_id?>';
		var elm_balance = $('#balance');
		var elm_point = $('#point');
		var point = elm_point.val();
		point = point.replace(/[^\d]/g, '');
		point = parseInt(point, 10);
		
		// Check if point is not a number or less than 0
		if (isNaN(point) || point < 0) {
			$.toast({
				heading: 'Error',
				text: 'Point must be a non-negative number',
				icon: 'error',
			});
			return; // Exit the function if validation fails
		} 
		
		submitUpdateBalance.prop('disabled', true);
		submitUpdateBalance.html('Loading...');
		
		setTimeout(function() {
			$.ajax({
				url: '<?=set_route_to_link(["backend","members","updateBalance"])?>',
				type: 'POST',
				data: {id: id, point: point},
				success: function(response) {
					submitUpdateBalance.prop('disabled', false);
					submitUpdateBalance.html('Add funds');
					
					if (response.stt === true) {
						elm_balance.val(response.data);
						formatCurrency(elm_balance);
						elm_point.css('border', '1px solid green');
						$.toast({
							heading: 'Success',
							text: 'Balance updated successfully',
							showHideTransition: 'slide',
							icon: 'success',
							position: 'top-right',
							hideAfter: 10000
						});
					} else {
						elm_point.css('border', '1px solid red');
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
				error: function(response, status, error) {
					submitUpdateBalance.prop('disabled', false);
					submitUpdateBalance.html('Add funds');
					elm_point.css('border', '1px solid red');
					$.toast({
						heading: 'Error',
						text: 'Failed to update balance',
						showHideTransition: 'fade',
						icon: 'error',
						position: 'top-right',
						hideAfter: 10000
					});
				}
			});
		}, 3000);
	}

	function updateInfo() {
		var submitUpdateInfo = $('#submitUpdateInfo');
		var id = '<?=$u_id?>';
		var name = $('#name').val();
		var phone = $('#phone').val();
		var telegram = $('#telegram').val();
		submitUpdateInfo.prop('disabled', true);
		submitUpdateInfo.html('Loading...');
		$.ajax({
			url: '<?=set_route_to_link(["backend","members","updateInfo"])?>',
			type: 'POST',
			data: {id: id, name: name, phone: phone, telegram: telegram},
			success: function(response) {
				submitUpdateInfo.prop('disabled', false);
				submitUpdateInfo.html('Update');
				if (response.stt === true) {
					$.toast({
						heading: 'Success',
						text: 'User updated successfully',
						showHideTransition: 'slide',
						icon: 'success',
						position: 'top-right',
						hideAfter: 10000
					});
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
			error: function(response, status, error) {
				submitUpdateInfo.prop('disabled', false);
				submitUpdateInfo.html('Update');
				$.toast({
					heading: 'Error',
					text: 'Failed to update info',
					showHideTransition: 'fade',
					icon: 'error',
					position: 'top-right',
					hideAfter: 10000
				});
			}
		}); 
	}


	function updatePassword() {
		var submitUpdatePassword = $('#submitUpdatePassword');
		var id = '<?=$u_id?>';
		var password = $('#password').val();
		var password_confirm = $('#password_confirm').val();
		submitUpdatePassword.prop('disabled', true);
		submitUpdatePassword.html('Loading...');
		
		// Check if password and confirm password match
		if (password.trim() === '' || password_confirm.trim() === '') {
			$.toast({
				heading: 'Error',
				text: 'Password fields cannot be empty',
				icon: 'error',
				position: 'top-right',
				hideAfter: 10000
			});
			submitUpdatePassword.prop('disabled', false);
			submitUpdatePassword.html('Update');
			return;
		}

		if (password !== password_confirm) {
			$.toast({
				heading: 'Error',
				text: 'Password and confirm password do not match',
				icon: 'error',
				position: 'top-right',
				hideAfter: 10000
			});
			submitUpdatePassword.prop('disabled', false);
			submitUpdatePassword.html('Update');
			return;
		}

		$.ajax({
			url: '<?=set_route_to_link(["backend","members","updatePassword"])?>',
			type: 'POST',
			data: {id: id, password: password, password_confirm: password_confirm},
			success: function(response) {
				submitUpdatePassword.prop('disabled', false);
				submitUpdatePassword.html('Update');
				if (response.stt === true) {
					$.toast({
						heading: 'Success',
						text: 'Password updated successfully',
						showHideTransition: 'slide',
						icon: 'success',
						position: 'top-right',
						hideAfter: 10000
					});
					$('#password').val('');
					$('#password_confirm').val('');
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
			error: function(response, status, error) {
				submitUpdatePassword.prop('disabled', false);
				submitUpdatePassword.html('Update');
				$.toast({
					heading: 'Error',
					text: 'Failed to update password',
					showHideTransition: 'fade',
					icon: 'error',
					position: 'top-right',
					hideAfter: 10000
				});
			}
		});
	}
</script>

