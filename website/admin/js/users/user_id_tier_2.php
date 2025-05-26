<script>

// hàm copy input khi ckick vào
function copyInputValue(element) {
		// Lưu giá trị của input
		var value = element.value;
		
		// Chọn toàn bộ text trong input
		element.select();
		
		try {
				// Thực hiện lệnh copy
				var successful = document.execCommand('copy');
				if (successful) {
						// Hiển thị thông báo nếu copy thành công
						$.toast('Đã sao chép: ' + value);
				} else {
						$.toast('Không thể sao chép văn bản');
				}
		} catch (err) {
				$.toast('Lỗi khi sao chép');
		}
		
		// Bỏ chọn text (tùy chọn)
		window.getSelection().removeAllRanges();
}

/**
 * Format a number with dot separators for thousands
 * @param {number|string} number - The number to format
 * @return {string} The formatted number with dot separators
 */
function formatNumberWithDots(number) {
	// Convert to string and handle potential non-numeric inputs
	if (!number && number !== 0) return '';
	
	// Convert to string and remove any existing non-numeric characters except decimal point
	let numStr = number.toString().replace(/[^\d.]/g, '');
	
	// Split by decimal point if exists
	let parts = numStr.split('.');
	
	// Format the integer part with dots
	parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, '.');
	
	// Join back with decimal part if it exists
	return parts.join('.');
}

// Example usage:
// formatNumberWithDots(100000) returns "100.000"
// formatNumberWithDots("1234567.89") returns "1.234.567.89"

/**
 * RowsAjax class
 * Manages AJAX-powered DataTable with row editing, adding, and deleting functionality
 */
class RowsAjax {
	/**
	 * Constructor for RowsAjax
	 * Initializes the DataTable and sets up event handlers
	 */
	constructor() {
		if (!jQuery().DataTable) {
			console.log("DataTable is null!");
			return;
		}

		// Initialize properties
		this._rowToEdit = null;
		this._datatable = null;
		this._currentState = null;
		this._datatableExtend = null;
		this._addEditModal = null;
		this._staticHeight = 62;

		// Initialize the instance
		this._createInstance();
		this._addListeners();
		this._extend();
		this._initBootstrapModal();
	}

	/**
	 * Create DataTable instance with configuration
	 * @private
	 */
	_createInstance() {
		const self = this;
		
		this._datatable = jQuery("#datatableRowsAjax").DataTable({
			scrollX: true,
			buttons: ["copy", "excel", "csv", "print"],
			info: false,
			ajax: "<?=set_route_to_link(["jsload","users","user_id_tier_2",$u_id])?>",
			order: [],
			sDom: '<"row"<"col-sm-12"<"table-container"t>r>><"row"<"col-12"p>>',
			pageLength: 10,
			columns: [
				{ data: "id" },
				{ data: "name" },
				{ data: "email" },
				{ data: "point" },
				{ data: "tier_3" },
			],
			language: {
				paginate: {
					previous: '<i class="cs-chevron-left"></i>',
					next: '<i class="cs-chevron-right"></i>'
				}
			},
			initComplete: function(settings, json) {
				self._setInlineHeight();
			},
			drawCallback: function(settings) {
				self._setInlineHeight();
			},
			columnDefs: [
				{
					targets: 4,
					render: function(data, type, row, meta) {
						return '<a href="<?=set_route_to_link(["public","users","user_id_tier_3"])?>/' + row.id + '">' + data + '</a>';
					}
				},
				{
					targets: 5,
					render: function(data, type, row, meta) {
						return '<div class="form-check float-end mt-1"><input type="checkbox" class="form-check-input" value="' + row.id + '"></div>';
					}
				}
			]
		});
	}


	

		

	/**
	 * Add event listeners to DOM elements
	 * @private
	 */
	_addListeners() {
		// Confirm button in modal
		document.getElementById("addEditConfirmButton")
			.addEventListener("click", this._addEditFromModalClick.bind(this));
		
		// Add row buttons
		document.querySelectorAll(".add-datatable").forEach(button => 
			button.addEventListener("click", this._onAddRowClick.bind(this))
		);
		
		// Delete buttons
		document.querySelectorAll(".delete-datatable").forEach(button => 
			button.addEventListener("click", this._onDeleteClick.bind(this))
		);
		
		// Edit buttons
		document.querySelectorAll(".edit-datatable").forEach(button => 
			button.addEventListener("click", this._onEditButtonClick.bind(this))
		);
		
		// Tag buttons
		document.querySelectorAll(".tag-done").forEach(button => 
			button.addEventListener("click", () => this._updateTag("Done"))
		);
		
		document.querySelectorAll(".tag-new").forEach(button => 
			button.addEventListener("click", () => this._updateTag("New"))
		);
		
		document.querySelectorAll(".tag-sale").forEach(button => 
			button.addEventListener("click", () => this._updateTag("Sale"))
		);
		
		// Modal hidden event
		document.getElementById("addEditModal")
			.addEventListener("hidden.bs.modal", this._clearModalForm);
	}

	/**
	 * Extend DataTable with DatatableExtend functionality
	 * @private
	 */
	_extend() {
		this._datatableExtend = new DatatableExtend({
			datatable: this._datatable,
			editRowCallback: this._onEditRowClick.bind(this),
			singleSelectCallback: this._onSingleSelect.bind(this),
			multipleSelectCallback: this._onMultipleSelect.bind(this),
			anySelectCallback: this._onAnySelect.bind(this),
			noneSelectCallback: this._onNoneSelect.bind(this)
		});
	}

	/**
	 * Initialize Bootstrap modal
	 * @private
	 */
	_initBootstrapModal() {
		this._addEditModal = new bootstrap.Modal(document.getElementById("addEditModal"));
	}

	/**
	 * Set inline height for scrollable table body
	 * @private
	 */
	_setInlineHeight() {
		if (!this._datatable) return;
		
		const pageLength = this._datatable.page.len();
		document.querySelector(".dataTables_scrollBody").style.height = 
			(this._staticHeight * pageLength) + "px";
	}

	/**
	 * Handle add/edit confirmation from modal
	 * @param {Event} event - Click event
	 * @private
	 */
	_addEditFromModalClick(event) {
		if (this._currentState === "add") {
			this._addNewRowFromModal();
		} else {
			this._editRowFromModal();
		}
		
		// this._addEditModal.hide();
	}

	/**
	 * Handle edit button click
	 * @param {Event} event - Click event
	 * @private
	 */
	_onEditButtonClick(event) {
		if (event.currentTarget.classList.contains("disabled")) return;
		
		const selectedRows = this._datatableExtend.getSelectedRows();
		this._onEditRowClick(this._datatable.row(selectedRows[0][0]));
	}

	/**
	 * Handle row edit click
	 * @param {Object} row - DataTable row
	 * @private
	 */
	_onEditRowClick(row) {
		this._rowToEdit = row;
		this._showModal("edit", "Edit", "Done");
		this._setForm();
	}

	/**
	 * Edit row with data from modal form
	 * @private
	 */
	_editRowFromModal() {
		const rowData = this._rowToEdit.data();
		const updatedData = Object.assign(rowData, this._getFormData());
		
		this._datatable.row(this._rowToEdit).data(updatedData).draw();
		this._datatableExtend.unCheckAllRows();
		this._datatableExtend.controlCheckAll();
	}

	/**
	 * Add new row from modal form data
	 * @private
	 */
	_addNewRowFromModal() {
		var table = $('#datatableRowsAjax').DataTable();
		const name = $("#name").val();
		const email = $("#email").val();
		const password = $("#password").val();
		const roles = $("input[name='roles']:checked").val();
		const phone = $("#phone").val();
		const telegram = $("#telegram").val();


		$.ajax({
			url: "<?=set_route_to_link(["backend","members","create"])?>",
			type: "POST",
			data: {
				name: name,
				email: email, 
				password: password,
				roles: roles,
				phone: phone,
				telegram: telegram
			},
			success: function(response) {
				if (response.stt) {
					$('#addEditModal').modal('hide');
					table.ajax.reload();
					$.toast({
						heading: 'Success',
						text: 'User added successfully',
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
			error: function(response) {
				$.toast({
					heading: 'Error',
					text: 'Failed to add user',
					showHideTransition: 'fade',
					icon: 'error',
					position: 'top-right',
					hideAfter: 10000
				})
			}
		});


	}

	/**
	 * Delete selected rows
	 * @private
	 */
	_onDeleteClick() {
		var table = $('#datatableRowsAjax').DataTable();
		const selectedRows = this._datatableExtend.getSelectedRows();
		selectedRows.each(function() {
			var rowIndex = $(this)[0];
			
			for (let i = 0; i < rowIndex.length; i++) {
				var id = rowIndex[i];
				var row_id = table.cell(id, 0).data();
				var row_email_html = table.cell(id, 1).node();
				var row_email = $(row_email_html).text();
				console.log("row_id", row_id);
				console.log("row_email", row_email);
				$.ajax({
					url: "<?=set_route_to_link(["backend","members","restore_account"])?>",
					type: "POST",
					data: {
						id: row_id,
						email: row_email
					},
					success: function(response) {
						if (response.stt) {
							table.row(id).remove().draw();
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
						$.toast({
							heading: 'Error',
							text: 'Failed to add user',
							showHideTransition: 'fade',
							icon: 'error',
							position: 'top-right',
							hideAfter: 10000
						})
					} 
				})
			}
		});
		// 2 đoạn dưới là để xoá dòng đã chọn
		// this._datatableExtend.getSelectedRows().remove().draw();
		// this._datatableExtend.controlCheckAll();
	}

	/**
	 * Handle add row button click
	 * @private
	 */
	_onAddRowClick() {
		this._showModal("add", "Add New", "Add");
	}

	/**
	 * Show modal with appropriate title and button text
	 * @param {string} state - Current state ("add" or "edit")
	 * @param {string} title - Modal title
	 * @param {string} buttonText - Confirm button text
	 * @private
	 */
	_showModal(state, title, buttonText) {
		this._addEditModal.show();
		this._currentState = state;
		
		document.getElementById("modalTitle").innerHTML = title;
		document.getElementById("addEditConfirmButton").innerHTML = buttonText;
	}

	/**
	 * Set form values based on selected row data
	 * @private
	 */
	_setForm() {
		const data = this._rowToEdit.data();
		
		// Set text input values
		document.querySelector("#addEditModal input[name=Name]").value = data.Name;
		document.querySelector("#addEditModal input[name=Sales]").value = data.Sales;
		document.querySelector("#addEditModal input[name=Stock]").value = data.Stock;
		
		// Set radio button for Category
		const categoryRadio = document.querySelector(`#addEditModal input[name=Category][value="${data.Category}"]`);
		if (categoryRadio) {
			categoryRadio.checked = true;
		}
		
		// Set radio button for Tag
		const tagRadio = document.querySelector(`#addEditModal input[name=Tag][value="${data.Tag}"]`);
		if (tagRadio) {
			tagRadio.checked = true;
		}
	}

	/**
	 * Get form data from modal
	 * @returns {Object} Form data as object
	 * @private
	 */
	_getFormData() {
		// const formData = {};
		
		// // Get text input values
		// formData.Name = document.querySelector("#addEditModal input[name=Name]").value;
		// formData.Sales = document.querySelector("#addEditModal input[name=Sales]").value;
		// formData.Stock = document.querySelector("#addEditModal input[name=Stock]").value;
		
		// // Get selected Category radio button value
		// const categoryRadio = document.querySelector("#addEditModal input[name=Category]:checked");
		// formData.Category = categoryRadio ? categoryRadio.value : "";
		
		// // Get selected Tag radio button value
		// const tagRadio = document.querySelector("#addEditModal input[name=Tag]:checked");
		// formData.Tag = tagRadio ? tagRadio.value : "";
		
		// // Empty Check field
		// formData.Check = "";
		
		// return formData;


		return false;
	}

	/**
	 * Clear modal form
	 * @private
	 */
	_clearModalForm() {
		document.querySelector("#addEditModal form").reset();
	}

	/**
	 * Update tag for selected rows
	 * @param {string} tag - New tag value
	 * @private
	 */
	_updateTag(tag) {
		const selectedRows = this._datatableExtend.getSelectedRows();
		const self = this;
		
		selectedRows.every(function(index, element, array) {
			const rowData = this.data();
			rowData.Tag = tag;
			self._datatable.row(this).data(rowData).draw();
		});
		
		this._datatableExtend.unCheckAllRows();
		this._datatableExtend.controlCheckAll();
	}

	/**
	 * Handle single row selection
	 * @private
	 */
	_onSingleSelect() {
		document.querySelectorAll(".edit-datatable").forEach(button => 
			button.classList.remove("disabled")
		);
	}

	/**
	 * Handle multiple row selection
	 * @private
	 */
	_onMultipleSelect() {
		document.querySelectorAll(".edit-datatable").forEach(button => 
			button.classList.add("disabled")
		);
	}

//	 _onAnySelect() {
//		 document.querySelectorAll(".delete-datatable").forEach(button => 
//			 button.classList.remove("disabled")
//		 );
//	 }
	/**
	 * Handle any row selection and enable delete functionality
	 * @private
	 */
	_onAnySelect() {
		document.querySelectorAll(".delete-datatable").forEach(button => 
			button.classList.remove("disabled")
		);
	}

	/**
	 * Handle no row selection
	 * @private
	 */
	_onNoneSelect() {
		document.querySelectorAll(".delete-datatable").forEach(button => 
			button.classList.add("disabled")
		);
	}
}
</script>
<script>
		/**
 * DatatableExtend class for enhancing DataTables functionality with 
 * selection controls, search, export, and other utility features.
 */
class DatatableExtend {
	/**
	 * Default options for the DatatableExtend
	 * @returns {Object} Default configuration options
	 */
	get options() {
		return {
			datatable: null,
			editRowCallback: null,
			singleSelectCallback: null,
			anySelectCallback: null,
			noneSelectCallback: null,
			multipleSelectCallback: null,
			lengthChangeCallback: null
		};
	}

	/**
	 * Constructor for DatatableExtend
	 * @param {Object} options - Configuration options
	 */
	constructor(options = {}) {
		this.settings = Object.assign(this.options, options);
		this.datatable = this.settings.datatable;
		
		if (this.datatable) {
			this.element = this.datatable.table().container();
		}
		
		this._init();
	}

	/**
	 * Initialize the extension
	 * @private
	 */
	_init() {
		this._addListeners();
		this._addShortcuts();
	}

	/**
	 * Add event listeners to the datatable elements
	 * @private
	 */
	_addListeners() {
		// Check all checkbox
		if (document.getElementById("datatableCheckAll")) {
			document.getElementById("datatableCheckAll").addEventListener("change", this._onCheckAllChange.bind(this));
		}
		
		// Check all button
		if (document.getElementById("datatableCheckAllButton")) {
			document.getElementById("datatableCheckAllButton").addEventListener("click", this._onCheckAllButtonClick.bind(this));
		}
		
		// Table row clicks
		if (this.element) {
			this.element.querySelectorAll("tbody").forEach(tbody => 
				tbody.addEventListener("click", this._onRowClick.bind(this))
			);
		}
		
		// Search functionality
		document.querySelectorAll(".datatable-search").forEach(search => {
			search.addEventListener("keyup", this._onSearchKeyup.bind(this));
		});
		
		document.querySelectorAll(".search-delete-icon").forEach(deleteIcon => {
			deleteIcon.addEventListener("click", this._onSearchDelete.bind(this));
		});
		
		// Export options
		document.querySelectorAll(".datatable-export .dropdown-item").forEach(exportItem => {
			exportItem.addEventListener("click", this._onExportClick.bind(this));
		});
		
		// Print functionality
		document.querySelectorAll(".datatable-print").forEach(printButton => {
			printButton.addEventListener("click", this._onPrintClick.bind(this));
		});
		
		// Page length options
		document.querySelectorAll(".datatable-length .dropdown-item").forEach(lengthItem => {
			lengthItem.addEventListener("click", this._onLengthClick.bind(this));
		});
	}

	/**
	 * Add keyboard shortcuts
	 * @private
	 */
	_addShortcuts() {
		if (typeof Mousetrap !== "undefined") {
			// Select all rows (Ctrl+A or Cmd+A)
			Mousetrap.bind("mod+a", event => {
				event.preventDefault();
				if (this.datatable.data().any()) {
					this.checkAllRows();
					this.controlCheckAll();
				}
			});
			
			// Deselect all rows (Ctrl+D or Cmd+D)
			Mousetrap.bind("mod+d", event => {
				event.preventDefault();
				if (this.datatable.data().any()) {
					this.unCheckAllRows();
					this.controlCheckAll();
				}
			});
		}
	}




















	/**
	 * Handle row click events
	 * @param {Event} event - Click event
	 * @private
	 */
	_onRowClick(event) {
		event.preventDefault();
		
		if (!this.datatable.data().any()) return;
		
		const row = event.target.closest("tr");
		
		// If clicked on a link, handle edit function
		if (event.target.tagName === "A") {
			this.unCheckAllRows();
			// mở phần này ra thì click sẽ mở mol
			// this.settings.editRowCallback(this.datatable.row(row));

			event.preventDefault(); // Ngăn hành vi mặc định của thẻ a
			const url = event.target.href; // Lấy địa chỉ URL từ thuộc tính href
			window.location.href = url; // Thực hiện chuyển hướng


			return true;
		}
		

















		
		// Toggle row selection
		row.classList.toggle("selected");
		
		// Update checkbox state
		const checkbox = row.querySelector(".form-check input");
		checkbox.checked = !checkbox.checked;
		checkbox.dispatchEvent(new Event("change"));
		
		this.controlCheckAll();
	}

	/**
	 * Handle check all change event
	 * @param {Event} event - Change event
	 * @private
	 */
	_onCheckAllChange(event) {
		if (document.getElementById("datatableCheckAll").checked) {
			this.checkAllRows();
		} else {
			this.unCheckAllRows();
		}
		
		this.controlCheckAll();
	}

	/**
	 * Handle check all button click
	 * @param {Event} event - Click event
	 * @private
	 */
	_onCheckAllButtonClick(event) {
		if (!this.datatable.data().any()) return;
		
		const target = event.target;
		const currentTarget = event.currentTarget;
		
		if (!target.classList.contains("form-check-input")) {
			currentTarget.querySelector("input").click();
		}
	}

	/**
	 * Control check all checkbox state
	 */
	controlCheckAll() {
		if (!document.getElementById("datatableCheckAll")) return;
		
		let anyChecked = false;
		let allChecked = true;
		
		// Check the state of all row checkboxes
		this.element.querySelectorAll("tbody tr .form-check input").forEach(checkbox => {
			if (checkbox.checked) {
				anyChecked = true;
			} else {
				allChecked = false;
			}
		});
		
		// If no data, set both flags to false
		if (this.datatable && !this.datatable.data().any()) {
			allChecked = false;
			anyChecked = false;
		}
		
		const checkAllElement = document.getElementById("datatableCheckAll");
		
		// Handle "some checked" state
		if (anyChecked) {
			checkAllElement.indeterminate = anyChecked;
			
			if (this.settings.anySelectCallback) {
				this.settings.anySelectCallback();
			}
		} else {
			// Handle "none checked" state
			checkAllElement.indeterminate = anyChecked;
			checkAllElement.checked = anyChecked;
			
			if (this.settings.noneSelectCallback) {
				this.settings.noneSelectCallback();
			}
		}
		
		// Handle "all checked" state
		if (allChecked) {
			checkAllElement.indeterminate = false;
			checkAllElement.checked = allChecked;
		}
		
		// Handle callbacks based on number of selections
		const checkedCount = this.element.querySelectorAll("tbody tr .form-check input:checked").length;
		
		if (checkedCount === 1) {
			if (this.settings.singleSelectCallback) {
				this.settings.singleSelectCallback();
			}
		} else if (checkedCount > 1) {
			if (this.settings.multipleSelectCallback) {
				this.settings.multipleSelectCallback();
			}
		}
	}

	/**
	 * Uncheck all rows
	 */
	unCheckAllRows() {
		if (!this.element) return;
		
		this.element.querySelectorAll("tbody tr").forEach(row => 
			row.classList.remove("selected")
		);
		
		this.element.querySelectorAll("tbody tr .form-check input").forEach(checkbox => {
			checkbox.checked = false;
		});
	}

	/**
	 * Check all rows
	 */
	checkAllRows() {
		if (!this.element) return;
		
		this.element.querySelectorAll("tbody tr").forEach(row => 
			row.classList.add("selected")
		);
		
		this.element.querySelectorAll("tbody tr .form-check input").forEach(checkbox => {
			checkbox.checked = true;
		});
	}

	/**
	 * Get selected rows
	 * @returns {Object} DataTable rows API object for selected rows
	 */
	getSelectedRows() {
		return this.datatable.rows(".selected");
	}

	/**
	 * Get DataTable instance from element
	 * @param {HTMLElement} element - Element with data-datatable attribute
	 * @returns {Object} DataTable instance
	 * @private
	 */
	_getDatatable(element) {
		const selector = element.getAttribute("data-datatable");
		return jQuery(selector).DataTable();
	}

	/**
	 * Handle search keyup event
	 * @param {Event} event - Keyup event
	 * @private
	 */
	_onSearchKeyup(event) {
		const datatable = this._getDatatable(event.currentTarget);
		datatable.search(event.currentTarget.value).draw();
		
		const parentDiv = event.currentTarget.closest("div");
		const magnifierIcon = parentDiv.querySelector(".search-magnifier-icon");
		const deleteIcon = parentDiv.querySelector(".search-delete-icon");
		
		// Toggle icon visibility based on search value
		if (event.currentTarget.value !== "") {
			deleteIcon.classList.remove("d-none");
			magnifierIcon.classList.add("d-none");
		} else {
			deleteIcon.classList.add("d-none");
			magnifierIcon.classList.remove("d-none");
		}
		
		this.unCheckAllRows();
		this.controlCheckAll();
	}

	/**
	 * Handle search delete click
	 * @param {Event} event - Click event
	 * @private
	 */
	_onSearchDelete(event) {
		const parentDiv = event.currentTarget.closest("div");
		const magnifierIcon = parentDiv.querySelector(".search-magnifier-icon");
		const deleteIcon = parentDiv.querySelector(".search-delete-icon");
		const searchInput = parentDiv.querySelector("input");
		
		// Clear search and reset datatable
		searchInput.value = "";
		this._getDatatable(searchInput).search("").draw();
		
		// Reset icon visibility
		deleteIcon.classList.add("d-none");
		magnifierIcon.classList.remove("d-none");
		
		this.unCheckAllRows();
		this.controlCheckAll();
	}

	/**
	 * Handle print button click
	 * @param {Event} event - Click event
	 * @private
	 */
	_onPrintClick(event) {
		event.preventDefault();
		
		try {
			this._getDatatable(event.currentTarget).buttons(3).trigger();
		} catch (error) {
			console.log("Trigger button is not found");
		}
	}

	/**
	 * Handle export option click
	 * @param {Event} event - Click event
	 * @private
	 */
	_onExportClick(event) {
		event.preventDefault();
		
		// Copy action
		if (event.currentTarget.classList.contains("export-copy")) {
			try {
				this._getDatatable(event.currentTarget.closest(".datatable-export")).buttons(0).trigger();
			} catch (error) {
				console.log("Trigger button is not found");
			}
		}
		
		// Excel export
		if (event.currentTarget.classList.contains("export-excel")) {
			try {
				this._getDatatable(event.currentTarget.closest(".datatable-export")).buttons(1).trigger();
			} catch (error) {
				console.log("Trigger button is not found");
			}
		}
		
		// CSV export
		if (event.currentTarget.classList.contains("export-cvs")) {
			try {
				this._getDatatable(event.currentTarget.closest(".datatable-export")).buttons(2).trigger();
			} catch (error) {
				console.log("Trigger button is not found");
			}
		}
	}

	/**
	 * Handle length change click
	 * @param {Event} event - Click event
	 * @private
	 */
	_onLengthClick(event) {
		event.preventDefault();
		
		const length = parseInt(event.currentTarget.innerHTML);
		const datatable = this._getDatatable(event.currentTarget.closest(".datatable-length"));
		
		datatable.page.len(length).draw();
		
		this.unCheckAllRows();
		this.controlCheckAll();
		
		if (this.settings.lengthChangeCallback) {
			this.settings.lengthChangeCallback();
		}
	}
}











</script>