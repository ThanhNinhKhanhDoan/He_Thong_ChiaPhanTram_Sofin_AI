<script>
$(document).ready(function() {
    // Áp dụng preset mặc định (12 tháng)
    applyDateRangePreset();
    
    // Thêm event listener cho select
    // $('#date_range_preset_set').on('change', function() {
    //     applyDateRangePreset();
    // });
});


var table_options = {
    url: "<?=set_route_to_link(["jsload","edu_tier","data_tier_2",$tier_1_id])?>", // link table
    url_update_status : "<?=set_route_to_link(["backend","edu_tier","update_status_tier_2"])?>", // link xoá
    elm_table_id: "table_lists", // id table
    checkboxName: "table_checkbox", // id checkbox
    elm_id_input_search: "table_search", // id input search
    elm_id_page_length: "page_length", //id của phần chọn số lượng hiển thị
    elm_id_status: "status-load", //id của select status
    elm_id_btn_active_selected: "btn_active_selected", // button đã xoá
    elm_id_btn_pending_selected: "btn_pending_selected", // button chưa xoá
    elm_id_btn_delete_selected: "btn_delete_selected", // button xoá

    elm_button_click_add_database: "btn_add_database", // button thêm dữ liệu vào database

    pageLength: 10, // số lượng hiển thị
    
    columns: [
        { data: "_id", orderable: true }, // Đảm bảo orderable: true cho mỗi cột
        { data: "name", orderable: true },
        { data: "representative_name", orderable: true },
        { data: "phone", orderable: true },
        { data: "email", orderable: true },
        { data: "discount_percent", orderable: true },
        { data: "software_discount_percent", orderable: true },
        { data: "channel_revenue_discount_percent", orderable: true },
        { data: "count_tier_3", orderable: true },
        { data: "count_tier_4", orderable: true },
        { data: "create_at", orderable: true },
    ],
    columnDefs: [        
        {
            targets: 0,
            render: function(data, type, row, meta) {
                if (type === 'display') {
                    return `
                    <div class="form-check float-end mt-1"><input type="checkbox" name="${table_options.checkboxName}" class="form-check-input" value="${row._id}"><i class="fas fa-hashtag me-1 text-primary"></i>${meta.row + 1}</div>`;
                }
                return data;
            }
        },
        {
            targets: 1,
            render: function(data, type, row, meta) {
                return `<div class="archive-name d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-archive text-primary me-2"></i>
                        <span class="archive-title fw-medium text-truncate" style="max-width: 200px;" title="${data}">${data}</span>
                    </div>
                    <a href="javascript:void(0)" class="edit-archive-btn btn btn-sm btn-outline-primary rounded-pill py-0 px-2 ms-2" data-id="${row._id}" title="Chỉnh sửa kho">
                        <i class="fas fa-edit"></i>
                    </a>
                </div>`;
            }
        },
        {
            targets: 2,
            render: function(data, type, row, meta) {
                var id = row._id;
                return `<a href="<?=set_route_to_link(['public', 'edu_tier', 'tier_3'])?>/${id}" class="upload-btn"><i class="fas fa-folder-open"></i> ${data}</a>`;
            },
        },
        {
            targets: 3,
            render: function(data, type, row, meta) {
                var id = row._id;
                return ``;
            },
        },
        {
            targets: 5,
            render: function(data, type, row, meta) {
                return `<div class="video-count-display">
                    <span class="badge bg-light text-primary border border-2 border-primary rounded-pill px-3 py-2 d-inline-flex align-items-center">
                        <i class="fas fa-percent me-2"></i>
                        <span class="fw-medium">${data}</span>
                        <span class="ms-1 small text-primary opacity-75"></span>
                    </span>
                </div>`;
            }
        },
        {
            targets: 6,
            render: function(data, type, row, meta) {
                return `<div class="video-count-display">
                    <span class="badge bg-light text-primary border border-2 border-primary rounded-pill px-3 py-2 d-inline-flex align-items-center">
                        <i class="fas fa-percent me-2"></i>
                        <span class="fw-medium">${data}</span>
                        <span class="ms-1 small text-primary opacity-75"></span>
                    </span>
                </div>`;
            }
        },
        {
            targets: 7,
            render: function(data, type, row, meta) {
                return `<div class="video-count-display">
                    <span class="badge bg-light text-primary border border-2 border-primary rounded-pill px-3 py-2 d-inline-flex align-items-center">
                        <i class="fas fa-percent me-2"></i>
                        <span class="fw-medium">${data}</span>
                        <span class="ms-1 small text-primary opacity-75"></span>
                    </span>
                </div>`;
            }
        },
        {
            targets: 8,
            render: function(data, type, row, meta) {
                return `<div class="video-count-display">
                    <span class="badge bg-light text-primary border border-2 border-primary rounded-pill px-3 py-2 d-inline-flex align-items-center">
                        <i class="fas fa-database me-2"></i>
                        <span class="fw-medium">${data}</span>
                        <span class="ms-1 small text-primary opacity-75"></span>
                    </span>
                </div>`;
            }
        },
        {
            targets: 9,
            render: function(data, type, row, meta) {
                return `<div class="video-count-display">
                    <span class="badge bg-light text-primary border border-2 border-primary rounded-pill px-3 py-2 d-inline-flex align-items-center">
                        <i class="fas fa-database me-2"></i>
                        <span class="fw-medium">${data}</span>
                        <span class="ms-1 small text-primary opacity-75"></span>
                    </span>
                </div>`;
            }
        },
        {
            targets: 10, // thời gian
            render: function(data, type, row, meta) {
                const date = new Date(data * 1000); // Convert int timestamp to milliseconds
                const hours = String(date.getHours()).padStart(2, '0');
                const minutes = String(date.getMinutes()).padStart(2, '0');
                const day = String(date.getDate()).padStart(2, '0');
                const month = String(date.getMonth() + 1).padStart(2, '0'); // Months are zero-based
                const year = date.getFullYear();
                return `
                <div class="date-display">
                    <span class="time-badge ms-1 text-secondary small">
                        <i class="fas fa-clock me-1"></i>${hours}:${minutes}
                    </span>
                    <span class="date-badge bg-light text-primary rounded px-2 py-1">
                        ${day}/${month}/${year}
                    </span>
                </div>`;
            }
        },
        
    ]
};




// Khởi tạo bảng dữ liệu từ các tùy chọn đã cấu hình
var table_lists = table_create(table_options)
// Thiết lập chức năng tìm kiếm cho bảng
table_search(table_options)

// Khởi tạo trình quản lý từ khóa cho form thêm mới
// Tham số: ID của input nhập từ khóa, ID của container hiển thị từ khóa, ID của input ẩn lưu giá trị
// var add_keywordManager = keywordManager("keyword-input", "keywords-container", "keywords", "btn_submit_add_database");
// Gán trình quản lý từ khóa vào sự kiện onload của trang
// Lưu ý: Cách này sẽ ghi đè các hàm onload khác, cần cải thiện
// window.onload = add_keywordManager;

// Khởi tạo trình quản lý từ khóa cho form chỉnh sửa
// Tham số: ID của input nhập từ khóa, ID của container hiển thị từ khóa, ID của input ẩn lưu giá trị
// var edit_keywordManager = keywordManager("edit_keywords_input", "edit_keywords_container", "edit_keywords", "btn_submit_edit_database");
// Gán trình quản lý từ khóa vào sự kiện onload của trang
// Lưu ý: Cách này sẽ ghi đè add_keywordManager ở trên, cần cải thiện bằng cách gộp các hàm onload
// window.onload = edit_keywordManager;

// Xử lý sự kiện khi người dùng nhấp vào nút chỉnh sửa kho lưu trữ
$(document).on('click', '.edit-archive-btn', function() {
    // Lấy ID của kho lưu trữ từ thuộc tính data-id của nút được nhấp
    const archiveId = $(this).data('id');
    // Lấy dữ liệu của hàng chứa nút được nhấp từ DataTable
    const row = table_lists.row($(this).closest('tr')).data();
    
    // Điền ID kho lưu trữ vào trường ẩn trong form chỉnh sửa
    $('#edit_archive_id').val(archiveId);
    // Điền tên kho lưu trữ vào trường nhập liệu trong form
    $('#edit_name').val(row.name);
    $('#edit_representative_name').val(row.representative_name);
    $('#edit_phone').val(row.phone);
    $('#edit_email').val(row.email);
    $('#edit_discount_percent').val(row.discount_percent);
    $('#edit_software_discount_percent').val(row.software_discount_percent);
    $('#edit_channel_revenue_discount_percent').val(row.channel_revenue_discount_percent);
    
    
    
    
    // Hiển thị modal chỉnh sửa
    $('#editArchiveModal').modal('show');
});















// Hàm áp dụng preset thời gian
function applyDateRangePreset() {
    const preset = $('#date_range_preset_set').val();
    
    // Lấy ngày hiện tại
    const now = new Date();
    
    let startDate, endDate;
    
    switch(preset) {
        case 'today':
            // Hôm nay: từ 00:00:00 đến 23:59:59
            startDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 0, 0, 0, 0);
            endDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
            break;
            
        case 'yesterday':
            // Hôm qua: từ 00:00:00 đến 23:59:59
            const yesterday = new Date(now);
            yesterday.setDate(now.getDate() - 1);
            startDate = new Date(yesterday.getFullYear(), yesterday.getMonth(), yesterday.getDate(), 0, 0, 0, 0);
            endDate = new Date(yesterday.getFullYear(), yesterday.getMonth(), yesterday.getDate(), 23, 59, 59, 999);
            break;
            
        case '7days':
            // 7 ngày gần nhất (6 ngày trước + hôm nay)
            const sevenDaysAgo = new Date(now);
            sevenDaysAgo.setDate(now.getDate() - 6);
            startDate = new Date(sevenDaysAgo.getFullYear(), sevenDaysAgo.getMonth(), sevenDaysAgo.getDate(), 0, 0, 0, 0);
            endDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
            break;
            
        case '1month':
            // 1 tháng trước đến hôm nay
            const oneMonthAgo = new Date(now);
            oneMonthAgo.setMonth(now.getMonth() - 1);
            startDate = new Date(oneMonthAgo.getFullYear(), oneMonthAgo.getMonth(), oneMonthAgo.getDate(), 0, 0, 0, 0);
            endDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
            break;
            
        case '2months':
            const twoMonthsAgo = new Date(now);
            twoMonthsAgo.setMonth(now.getMonth() - 2);
            startDate = new Date(twoMonthsAgo.getFullYear(), twoMonthsAgo.getMonth(), twoMonthsAgo.getDate(), 0, 0, 0, 0);
            endDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
            break;
            
        case '3months':
            const threeMonthsAgo = new Date(now);
            threeMonthsAgo.setMonth(now.getMonth() - 3);
            startDate = new Date(threeMonthsAgo.getFullYear(), threeMonthsAgo.getMonth(), threeMonthsAgo.getDate(), 0, 0, 0, 0);
            endDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
            break;
            
        case '4months':
            const fourMonthsAgo = new Date(now);
            fourMonthsAgo.setMonth(now.getMonth() - 4);
            startDate = new Date(fourMonthsAgo.getFullYear(), fourMonthsAgo.getMonth(), fourMonthsAgo.getDate(), 0, 0, 0, 0);
            endDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
            break;
            
        case '5months':
            const fiveMonthsAgo = new Date(now);
            fiveMonthsAgo.setMonth(now.getMonth() - 5);
            startDate = new Date(fiveMonthsAgo.getFullYear(), fiveMonthsAgo.getMonth(), fiveMonthsAgo.getDate(), 0, 0, 0, 0);
            endDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
            break;
            
        case '6months':
            const sixMonthsAgo = new Date(now);
            sixMonthsAgo.setMonth(now.getMonth() - 6);
            startDate = new Date(sixMonthsAgo.getFullYear(), sixMonthsAgo.getMonth(), sixMonthsAgo.getDate(), 0, 0, 0, 0);
            endDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
            break;
            
        case '7months':
            const sevenMonthsAgo = new Date(now);
            sevenMonthsAgo.setMonth(now.getMonth() - 7);
            startDate = new Date(sevenMonthsAgo.getFullYear(), sevenMonthsAgo.getMonth(), sevenMonthsAgo.getDate(), 0, 0, 0, 0);
            endDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
            break;
            
        case '8months':
            const eightMonthsAgo = new Date(now);
            eightMonthsAgo.setMonth(now.getMonth() - 8);
            startDate = new Date(eightMonthsAgo.getFullYear(), eightMonthsAgo.getMonth(), eightMonthsAgo.getDate(), 0, 0, 0, 0);
            endDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
            break;
            
        case '9months':
            const nineMonthsAgo = new Date(now);
            nineMonthsAgo.setMonth(now.getMonth() - 9);
            startDate = new Date(nineMonthsAgo.getFullYear(), nineMonthsAgo.getMonth(), nineMonthsAgo.getDate(), 0, 0, 0, 0);
            endDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
            break;
            
        case '10months':
            const tenMonthsAgo = new Date(now);
            tenMonthsAgo.setMonth(now.getMonth() - 10);
            startDate = new Date(tenMonthsAgo.getFullYear(), tenMonthsAgo.getMonth(), tenMonthsAgo.getDate(), 0, 0, 0, 0);
            endDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
            break;
            
        case '11months':
            const elevenMonthsAgo = new Date(now);
            elevenMonthsAgo.setMonth(now.getMonth() - 11);
            startDate = new Date(elevenMonthsAgo.getFullYear(), elevenMonthsAgo.getMonth(), elevenMonthsAgo.getDate(), 0, 0, 0, 0);
            endDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
            break;
            
        case '12months':
            // 1 năm trước đến hôm nay
            const oneYearAgo = new Date(now);
            oneYearAgo.setFullYear(now.getFullYear() - 1);
            startDate = new Date(oneYearAgo.getFullYear(), oneYearAgo.getMonth(), oneYearAgo.getDate(), 0, 0, 0, 0);
            endDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
            break;
            
        case 'custom':
            // Mặc định: 1 năm trước đến hôm nay
            const customDefault = new Date(now);
            customDefault.setFullYear(now.getFullYear() - 1);
            startDate = new Date(customDefault.getFullYear(), customDefault.getMonth(), customDefault.getDate(), 0, 0, 0, 0);
            endDate = new Date(now.getFullYear(), now.getMonth(), now.getDate(), 23, 59, 59, 999);
            break;
    }
    
    // Cập nhật giá trị cho input date (format: YYYY-MM-DD)
    // Sử dụng getFullYear, getMonth, getDate để tránh vấn đề múi giờ
    const formatDate = (date) => {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, '0');
        const day = String(date.getDate()).padStart(2, '0');
        return `${year}-${month}-${day}`;
    };
    
    const startDateFormatted = formatDate(startDate);
    const endDateFormatted = formatDate(endDate);
    
    $('#date_start').val(startDateFormatted);
    $('#date_end').val(endDateFormatted);
    
    // Cập nhật timestamp (Unix timestamp in seconds)
    $('#date_start_time_int_hidden').val(Math.floor(startDate.getTime() / 1000));
    $('#date_end_time_int_hidden').val(Math.floor(endDate.getTime() / 1000));
    
    // Refresh table với bộ lọc ngày mới
    validateDateRange();
}

// Hàm chọn thời gian của table
function validateDateRange() {
    const startDate = $('#date_start').val();
    const endDate = $('#date_end').val();
    
    // Nếu người dùng thay đổi ngày thủ công, chuyển preset về "Tùy chỉnh"
    if (startDate && endDate) {
        // Chỉ set về custom nếu không phải đang thực hiện applyDateRangePreset
        const currentPreset = $('#date_range_preset_set').val();
        
        // Kiểm tra xem ngày có khác với preset hiện tại không
        const tempDate = new Date(startDate + 'T00:00:00');
        const expectedStartDate = getExpectedDateByPreset(currentPreset);
        
        // Nếu ngày khác với preset, chuyển về custom
        if (expectedStartDate && tempDate.getTime() !== expectedStartDate.getTime()) {
            $('#date_range_preset_set').val('custom');
        }
    }
    
    if (startDate && endDate) {
        // Chuyển đổi sang Date object
        const startDateTime = new Date(startDate + 'T00:00:00');
        const endDateTime = new Date(endDate + 'T00:00:00');
        
        if (endDateTime < startDateTime) {
            $.toast({
                text: 'Ngày kết thúc không được nhỏ hơn ngày bắt đầu',
                icon: 'error',
                position: 'top-right',
                duration: 10000
            });

            $('#date_start').val(endDate);
            $.toast({
                text: 'Ngày bắt đầu đã được đặt lại thành ngày kết thúc',
                icon: 'info',
                position: 'top-right',
                duration: 10000
            });
            
            // Cập nhật timestamp cho ngày bắt đầu
            const newStartDate = new Date(endDate + 'T00:00:00');
            $('#date_start_time_int_hidden').val(Math.floor(newStartDate.getTime() / 1000));
        }
    }
    
    // Cập nhật timestamps
    if (startDate) {
        const startDateTime = new Date(startDate + 'T00:00:00');
        $('#date_start_time_int_hidden').val(Math.floor(startDateTime.getTime() / 1000));
    }
    
    if (endDate) {
        const endDateTime = new Date(endDate + 'T23:59:59');
        $('#date_end_time_int_hidden').val(Math.floor(endDateTime.getTime() / 1000));
    }
    
    // Refresh table với bộ lọc ngày
    table_load_status({
        elm_table_id: 'table_lists', 
        elm_id_status: 'status-load',
        date_start: $('#date_start_time_int_hidden').val(),
        date_end: $('#date_end_time_int_hidden').val(),
        elm_id_btn_active_selected: 'btn_active_selected', 
        elm_id_btn_pending_selected: 'btn_pending_selected', 
        elm_id_btn_delete_selected: 'btn_delete_selected'
    });
}

// Hàm helper để lấy ngày expected theo preset (để so sánh)
function getExpectedDateByPreset(preset) {
    const now = new Date();
    
    switch(preset) {
        case 'today':
            return new Date(now.getFullYear(), now.getMonth(), now.getDate(), 0, 0, 0, 0);
        case 'yesterday':
            const yesterday = new Date(now);
            yesterday.setDate(now.getDate() - 1);
            return new Date(yesterday.getFullYear(), yesterday.getMonth(), yesterday.getDate(), 0, 0, 0, 0);
        case '7days':
            const sevenDaysAgo = new Date(now);
            sevenDaysAgo.setDate(now.getDate() - 6);
            return new Date(sevenDaysAgo.getFullYear(), sevenDaysAgo.getMonth(), sevenDaysAgo.getDate(), 0, 0, 0, 0);
        case '1month':
            const oneMonthAgo = new Date(now);
            oneMonthAgo.setMonth(now.getMonth() - 1);
            return new Date(oneMonthAgo.getFullYear(), oneMonthAgo.getMonth(), oneMonthAgo.getDate(), 0, 0, 0, 0);
        // ... thêm các case khác nếu cần
        default:
            return null;
    }
}












// hàm thông báo lỗi
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

// tạo bảng
function table_create(table_options) {
    // Áp dụng preset mặc định (12 tháng)
    // applyDateRangePreset();

    return $(`#${table_options.elm_table_id}`).DataTable({
        scrollX: true,
        info: false,
        ajax: function(data, callback, settings) {            
            $.ajax({
                url: table_options.url,
                type: 'GET',
                dataType: 'json',
                data: { status: $(`#${table_options.elm_id_status}`).val(), date_start: $('#date_start_time_int_hidden').val(), date_end: $('#date_end_time_int_hidden').val() },
                success: function(json) {
                    callback(json);
                }
            });
        },
        ordering: true,
        "orderCellsTop": true,
        "order": [],
        dom: '<"row"<"col-sm-12"<"table-container"t>r>><"row"<"col-12"p>>',
        pageLength: table_options.pageLength,
        columns: table_options.columns,
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
        columnDefs: table_options.columnDefs
    });
}

// lấy giá trị đã check
function table_getCheckedBoxes(table_options) {
    const checkedBoxes = [];
    $('input[name="' + table_options.checkboxName + '"]:checked').each(function() {
        checkedBoxes.push($(this).val());
    });
    return checkedBoxes;
}
// tìm kiếm
function table_search(table_options) {
    $(`#${table_options.elm_id_input_search}`).on('keyup', function() {
        const searchTerm = $(this).val().trim();
        const dataTable = $(`#${table_options.elm_table_id}`).DataTable();
        
        // Use regex to create a %search% like SQL LIKE query pattern
        // This allows for partial matches anywhere in the data (similar to SQL's %term%)
        if (searchTerm) {
            dataTable.search(searchTerm, true, false).draw();
        } else {
            dataTable.search('').draw();
        }
    });
}
// tích all or bỏ tích all 
function table_checkbox_all(source, table_options) {
    $(`#${table_options.elm_table_id} tbody input[type="checkbox"]`).prop('checked', $(source).prop('checked'));
}
// thay đổi số lượng hiển thị / page
function table_change_page_length(table_options) {
    var table = $(`#${table_options.elm_table_id}`).DataTable();
    var newLength = $(`#${table_options.elm_id_page_length}`).val(); // Get the value directly
    table.page.len(newLength).draw(); // Set the new page length
}
// chọn đã xoá , chưa xoá
function table_load_status(table_options) {
    var status = $(`#${table_options.elm_id_status}`).val();
    if (status == "active") {
        $(`#${table_options.elm_id_btn_active_selected}`).hide();
        $(`#${table_options.elm_id_btn_pending_selected}`).show();
        $(`#${table_options.elm_id_btn_delete_selected}`).show();
    } else if (status == "pending") {
        $(`#${table_options.elm_id_btn_active_selected}`).show();
        $(`#${table_options.elm_id_btn_pending_selected}`).hide();
        $(`#${table_options.elm_id_btn_delete_selected}`).show();
    } else {
        $(`#${table_options.elm_id_btn_active_selected}`).show();
        $(`#${table_options.elm_id_btn_pending_selected}`).show();
        $(`#${table_options.elm_id_btn_delete_selected}`).hide();
    }
    var table = $(`#${table_options.elm_table_id}`).DataTable();
    table.ajax.reload(null, false); // Reload without resetting the paging
}

// hàm xoá item
function table_update_status(status = "delete",table_options) {
    const selectedIds = table_getCheckedBoxes(table_options);
    if (status == "delete") {
        var text_html = "Xoá";
        var icon_html = "fas fa-trash";
    }  else if (status == "pending") {
        var text_html = "chờ duyệt";
        var icon_html = "fas fa-clock";
    } else {
        var text_html = "Khôi phục";
        var icon_html = "fas fa-trash-restore";
    }
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
    
    
    
    
    if (status == "deleted") {
        var button_elm_submit = $(`#${table_options.elm_id_btn_delete_selected}`);
        var originalButtonText = button_elm_submit.html();
        button_elm_submit.html(`<i class="${icon_html}"></i> Đang xoá...`);
    } else if (status == "pending") {
        var button_elm_submit = $(`#${table_options.elm_id_btn_pending_selected}`);
        var originalButtonText = button_elm_submit.html();
        button_elm_submit.html(`<i class="${icon_html}"></i> Đang chuyển sang chờ duyệt...`);
    } else {
        status = "active";
        var button_elm_submit = $(`#${table_options.elm_id_btn_active_selected}`);
        var originalButtonText = button_elm_submit.html();
        button_elm_submit.html(`<i class="${icon_html}"></i> Đang khôi phục...`);
    }
    
    button_elm_submit.prop('disabled', true);
    
    let successCount = 0;
    let failCount = 0;
    let totalToProcess = selectedIds.length;
    let processed = 0;
    
    function processNextId(index) {
        if (index >= selectedIds.length) {
            // Tất cả ID đã được xử lý, hiển thị kết quả cuối cùng
            let successText = successCount > 0 
                ? `Đã ${text_html} ${successCount} ${successCount === 1 ? 'kho' : 'kho'} thành công.` 
                : '';
            
            let failText = failCount > 0 
                ? `${failCount} ${failCount === 1 ? 'kho' : 'kho'} thất bại.` 
                : '';
            
            let toastIcon = successCount > 0 ? 'success' : 'error';
            
            $.toast({
                heading: successCount > 0 ? 'Thành công' : 'Thất bại',
                text: `${successText} ${failText}`.trim(),
                icon: toastIcon,
                position: 'top-right',
                hideAfter: 5000
            });
            
            // Tải lại bảng
            const table = $(`#${table_options.elm_table_id}`).DataTable();
            table.ajax.reload();
            
            // Bỏ chọn hộp kiểm "chọn tất cả"
            if (document.getElementById('check_all')) {
                document.getElementById('check_all').checked = false;
            }
            
            // Đặt lại trạng thái nút
            button_elm_submit.html(originalButtonText);
            button_elm_submit.prop('disabled', false);
            return;
        }
        
        // Cập nhật văn bản nút để hiển thị tiến trình
        button_elm_submit.html(
            `<i class="${icon_html}"></i> Đang ${text_html}... (${processed}/${totalToProcess})`
        );
        
        let safetyTimeout = null;
        
        try {
            // Thêm xử lý timeout cho cuộc gọi AJAX
            const ajaxRequest = $.ajax({
                url: table_options.url_update_status,
                type: 'POST',
                data: { id: selectedIds[index], status: status },
                timeout: 30000, // 30 giây timeout
                success: function(response) {
                    processed++;
                    if (response && response.stt) {
                        successCount++;
                    } else {
                        failCount++;
                        console.error( `Không thể ${text_html} ID kho:`, selectedIds[index], response);
                    }
                    // Xóa timeout an toàn
                    if (safetyTimeout) {
                        clearTimeout(safetyTimeout);
                    }
                    // Xử lý ID tiếp theo
                    processNextId(index + 1);
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    processed++;
                    failCount++;
                    console.error( `Lỗi khi ${text_html} ID kho:`, selectedIds[index], textStatus, errorThrown);
                    // Xóa timeout an toàn
                    if (safetyTimeout) {
                        clearTimeout(safetyTimeout);
                    }
                    // Xử lý ID tiếp theo bất chấp lỗi
                    processNextId(index + 1);
                }
            });
            
            // Thêm một timeout an toàn trong trường hợp cuộc gọi AJAX bị kẹt
            safetyTimeout = setTimeout(function() {
                if (ajaxRequest && ajaxRequest.readyState !== 4) {
                    ajaxRequest.abort();
                    processed++;
                    failCount++;
                    console.error( `Hết thời gian ${text_html} ID kho:`, selectedIds[index]);
                    processNextId(index + 1);
                }
            }, 35000);
        } catch (e) {
            // Xử lý bất kỳ lỗi không mong muốn nào trong quá trình thiết lập AJAX
            console.error( `Lỗi khi thiết lập yêu cầu AJAX cho ID:`, selectedIds[index], e);
            processed++;
            failCount++;
            processNextId(index + 1);
        }
    }
    
    // Bắt đầu xử lý từ ID đầu tiên
    try {
        processNextId(0);
    } catch (e) {
        // Xử lý bất kỳ lỗi không mong muốn nào
        console.error( `Lỗi không mong muốn trong table_deletes:`, e);
        
        // Đặt lại trạng thái nút
        button_elm_submit.html(originalButtonText);
        button_elm_submit.prop('disabled', false);
        
        // Hiển thị thông báo lỗi
        $.toast({
            heading: 'Lỗi',
            text: `Đã xảy ra lỗi không mong muốn khi ${text_html} kho.`,
            icon: 'error',
            position: 'top-right',
            hideAfter: 5000
        });
    }
}



// thêm dữ liệu vào database
function add_database() {
    var tier_1_id = $("#tier_1_id").val();
    var elm_name = $("#btn_submit_add_database");
    var name = $("#name").val();
    var representative_name = $("#representative_name").val();
    var phone = $("#phone").val();
    var email = $("#email").val()
    var password = $("#password").val()
    var discount_percent = $("#discount_percent").val()
    var software_discount_percent = $("#software_discount_percent").val()
    var channel_revenue_discount_percent = $("#channel_revenue_discount_percent").val()

    if (discount_percent > 100 || software_discount_percent > 100 || channel_revenue_discount_percent > 100) {
        $.toast({
            heading: 'Lỗi',
            text: 'Vui lòng nhập tỷ lệ chiết khấu hợp lệ.',
            icon: 'error',
            position: 'top-right',
            hideAfter: 10000
        });
        return;
    }

    if (discount_percent < 1 || software_discount_percent < 1 || channel_revenue_discount_percent < 1) {
        $.toast({
            heading: 'Lỗi',
            text: 'Vui lòng nhập tỷ lệ chiết khấu hợp lệ.',
            icon: 'error',
            position: 'top-right',
            hideAfter: 10000
        });
        return;
    }



    if (name == "" || email == "" || password == "" || discount_percent == "" || software_discount_percent == "" || channel_revenue_discount_percent == "" || tier_1_id == "") {
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
        url: '<?=set_route_to_link(["backend","edu_tier","add_tier_2"])?>',
        type: 'POST',
        data: { name: name, email : email, password : password, discount_percent : discount_percent, software_discount_percent : software_discount_percent, channel_revenue_discount_percent : channel_revenue_discount_percent, representative_name : representative_name, phone : phone, tier_1_id : tier_1_id },
        success: function(response) {
            elm_name.html(`<i class="fas fa-save"></i> Tạo tổ chức`);
            if (response.stt) {
                $('#table_lists').DataTable().ajax.reload();
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


// hàm giúp tạo danh sách tag từ keywords
function keywordManager(elm_input_keyword, elm_container_keyword, elm_hidden_keyword) {
    // Khai báo các biến
    let keywordInput = document.getElementById(elm_input_keyword);
    let keywordsContainer = document.getElementById(elm_container_keyword);
    let keywordsHiddenInput = document.getElementById(elm_hidden_keyword);
    let keywords = [];

    // Thiết lập sự kiện keydown cho input
    keywordInput.onkeydown = function(e) {
        if (e.key === 'Enter' || e.key === ',') {
            e.preventDefault();
            const inputValue = keywordInput.value.trim();
            if (inputValue) {
                addKeyword(inputValue);
                keywordInput.value = '';
            }
        }
    };
    
    // Thiết lập sự kiện paste cho input
    keywordInput.onpaste = function() {
        setTimeout(function() {
            const pastedText = keywordInput.value;
            if (pastedText.includes(',')) {
                pastedText.split(',').forEach(function(k) {
                    if (k.trim()) addKeyword(k);
                });
                keywordInput.value = '';
            }
        }, 0);
    };
    
    // Thiết lập sự kiện click cho nút lưu
    // const saveButton = document.getElementById(elm_btn_submit);
    // saveButton.onclick = function() {
    //     setTimeout(function() {
    //         clearKeywords();
    //         keywordInput.value = '';
    //     }, 100);
    // };

    // Hàm thêm từ khóa
    function addKeyword(keyword) {
        keyword = keyword.trim();
        if (keyword && !keywords.includes(keyword)) {
            keywords.push(keyword);
            updateKeywordsDisplay();
            updateHiddenInput();
        }
    }

    // Hàm xóa từ khóa
    function removeKeyword(keyword) {
        const index = keywords.indexOf(keyword);
        if (index !== -1) {
            keywords.splice(index, 1);
            updateKeywordsDisplay();
            updateHiddenInput();
        }
    }

    // Hàm cập nhật hiển thị từ khóa
    function updateKeywordsDisplay() {
        keywordsContainer.innerHTML = '';
        keywords.forEach(function(keyword) {
            const badge = document.createElement('span');
            badge.className = 'upload-btn me-1 mb-1';
            badge.innerHTML = `${keyword} <button type="button" class="btn-close btn-close-white" aria-label="Close" style="font-size: 0.65em;"></button>`;
            
            // Thiết lập sự kiện click cho nút đóng
            const closeButton = badge.querySelector('.btn-close');
            closeButton.onclick = function() {
                removeKeyword(keyword);
            };
            
            keywordsContainer.appendChild(badge);
        });
    }

    // Hàm cập nhật input ẩn
    function updateHiddenInput() {
        keywordsHiddenInput.value = JSON.stringify(keywords);
    }

    // Hàm xóa tất cả từ khóa
    function clearKeywords() {
        keywords.length = 0;
        updateKeywordsDisplay();
        updateHiddenInput();
    }

    // Trả về các hàm bạn muốn public
    return {
        clearKeywords: clearKeywords,
        addKeyword: addKeyword,
        // Có thể thêm các hàm khác nếu cần
        getKeywords: function() {
            return [...keywords]; // Trả về bản sao của mảng keywords
        }
    };
}

// Để gọi hàm này khi trang đã tải xong, bạn có thể sử dụng:
// window.onload = keywordManager;
// HOẶC gọi hàm này từ thẻ <body onload="keywordManager()">
// HOẶC thêm vào cuối trang HTML trước thẻ </body>

// hàm update row database
function update_database() {
    var elm_name = $("#btn_update_archive");
    var archive_id = $("#edit_archive_id").val();
    var name = $("#edit_name").val();
    var representative_name = $("#edit_representative_name").val();
    var phone = $("#edit_phone").val();
    var email = $("#edit_email").val();
    var discount_percent = $("#edit_discount_percent").val();
    var software_discount_percent = $("#edit_software_discount_percent").val();
    var channel_revenue_discount_percent = $("#edit_channel_revenue_discount_percent").val();


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
        url: "<?=set_route_to_link(["backend","edu_tier","update_info_tier_2"])?>",
        type: "POST",
        data: {
            id: archive_id,
            name: name,
            representative_name: representative_name,
            phone: phone,
            discount_percent: discount_percent,
            software_discount_percent: software_discount_percent,
            channel_revenue_discount_percent: channel_revenue_discount_percent,
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
            elm_name.html(`<i class="fas fa-save"></i> Cập nhật`);
        },
        error: function() {
            $.toast({
                heading: 'Lỗi',
                text: 'Đã xảy ra lỗi, vui lòng thử lại sau.',
                icon: 'error',
                position: 'top-right',
                hideAfter: 5000
            });
            elm_name.html(`<i class="fas fa-save"></i> Cập nhật`);
        }
    });
}





function update_password() {
    var elm_name = $("#btn_update_password");
    var archive_id = $("#edit_archive_id").val();
    var password = $("#edit_password").val();

    if (password == "") {
        $.toast({
            heading: 'Lỗi',
            text: 'Vui lòng nhập mật khẩu.',
            icon: 'error',  
            position: 'top-right',
            hideAfter: 5000
        });
        return;
    }

    elm_name.html('Đang xử lý...');
    $.ajax({
        url: "<?=set_route_to_link(["backend","edu_tier","update_password_tier_2"])?>",
        type: "POST",
        data: {
            id: archive_id,
            password: password,
        },
        success: function(response) {
            if (response.stt) {
                $.toast({
                    heading: 'Thành công',
                    text: 'Cập nhật mật khẩu thành công.',
                    icon: 'success',
                    position: 'top-right',
                    hideAfter: 5000
                });
                $('#editArchiveModal').modal('hide');
                table_lists.ajax.reload();
            } else {
                show_error_toast(response);
            }
            elm_name.html(`<i class="fas fa-save"></i> Cập nhật`);
        },
        error: function() {
            $.toast({
                heading: 'Lỗi',
                text: 'Đã xảy ra lỗi, vui lòng thử lại sau.',
                icon: 'error',
                position: 'top-right',
                hideAfter: 5000
            });
            elm_name.html(`<i class="fas fa-save"></i> Cập nhật`);
        }
    });
}
</script>