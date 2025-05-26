<script src="<?=asset("/style/acom-all/js/vendor/movecontent.js")?>"></script>
<script src="<?=asset("/style/acom-all/js/vendor/select2.full.min.js")?>"></script>
<script src="<?=asset("/style/acom-all/js/vendor/datepicker/bootstrap-datepicker.min.js")?>"></script>

<script>

	function updateInfo() {
		var submitUpdateInfo = $('#submitUpdateInfo');
		var name = $('#name').val();
		var phone = $('#phone').val();
		var telegram = $('#telegram').val();
		submitUpdateInfo.prop('disabled', true);
		submitUpdateInfo.html('Loading...');
		$.ajax({
			url: '<?=set_route_to_link(["backend","profiles","updateInfo"])?>',
			type: 'POST',
			data: { name: name, phone: phone, telegram: telegram},
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
				})
			}
		}); 
	}


	function updatePassword() {
		var submitUpdatePassword = $('#submitUpdatePassword');
		var password = $('#password').val();
		var password_confirm = $('#password_confirm').val();
		submitUpdatePassword.prop('disabled', true);
		submitUpdatePassword.html('Loading...');
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
			url: '<?=set_route_to_link(["backend","profiles","updatePassword"])?>',
			type: 'POST',
			data: {password: password, password_confirm: password_confirm},
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
					location.reload();
				} else {
					let errorMessages = [];
					// Loop through each field with errors
					for (const field in response.data) {
						if (response.data.hasOwnProperty(field)) {
						// Get all error messages for this field
						const fieldErrors = response.data[field];
						
						// Add each error message to our array
						fieldErrors.forEach(errorMsg => {
							errorMessages.push(errorMsg);
						});
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
					})
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

