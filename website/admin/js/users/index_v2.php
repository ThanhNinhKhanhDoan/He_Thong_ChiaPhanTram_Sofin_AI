<script>
var table_options = {
    url: "<?=set_route_to_link(["jsload","users","index"])?>", // link table
    url_delete : "<?=set_route_to_link(["backend","users","delete_users"])?>", // link xoá
    elm_table_id: "table_lists", // id table
    checkboxName: "table_checkbox", // id checkbox
    elm_id_input_search: "table_search", // id input search
    elm_id_delete_status: "delete_status", // select đã xoá , chưa xoá
    elm_id_btn_restore_deleted: "btn_restore_deleted", // button khôi phục
    elm_id_btn_delete_selected: "btn_delete_selected", // button xoá
    elm_id_page_length: "page_length", //id của phần chọn số lượng hiển thị

    elm_button_click_add_database: "btn_add_database", // button thêm dữ liệu vào database

    pageLength: 10, // số lượng hiển thị
    
    columns: [
        { data: "_id", orderable: true },
        { data: "email", orderable: true },
        { data: "name", orderable: true },
        { data: "point", orderable: true },
        { data: "roles", orderable: true },
        { data: "phone", orderable: true },
        { data: "telegram", orderable: true },
    ],
    columnDefs: [
        {
            targets: 7,
            render: function(data, type, row, meta) {
                return `<div class="form-check float-end mt-1"><input type="checkbox" name="${table_options.checkboxName}" class="form-check-input" value="${row._id}"></div>`;
            }
        },
        {
            targets: 0,
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
                return `<div class="archive-name">
                    <span class="archive-title" title="${data}">${data}</span>
                    <a href="javascript:void(0)" class="edit-archive-btn" data-id="${row._id}" title="Edit Archive">
                        <i class="fas fa-edit"></i>
                    </a>
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
var add_keywordManager = keywordManager("keyword-input", "keywords-container", "keywords");
// Gán trình quản lý từ khóa vào sự kiện onload của trang
// Lưu ý: Cách này sẽ ghi đè các hàm onload khác, cần cải thiện
window.onload = add_keywordManager;

// Khởi tạo trình quản lý từ khóa cho form chỉnh sửa
// Tham số: ID của input nhập từ khóa, ID của container hiển thị từ khóa, ID của input ẩn lưu giá trị
var edit_keywordManager = keywordManager("edit_keywords_input", "edit_keywords_container", "edit_keywords");
// Gán trình quản lý từ khóa vào sự kiện onload của trang
// Lưu ý: Cách này sẽ ghi đè add_keywordManager ở trên, cần cải thiện bằng cách gộp các hàm onload
window.onload = edit_keywordManager;

// Xử lý sự kiện khi người dùng nhấp vào nút chỉnh sửa kho lưu trữ
$(document).on('click', '.edit-archive-btn', function() {
    // Lấy ID của kho lưu trữ từ thuộc tính data-id của nút được nhấp
    const archiveId = $(this).data('id');
    // Lấy dữ liệu của hàng chứa nút được nhấp từ DataTable
    const row = table_lists.row($(this).closest('tr')).data();
    
    // Điền ID kho lưu trữ vào trường ẩn trong form chỉnh sửa
    $('#edit_archive_id').val(archiveId);
    // Điền tên kho lưu trữ vào trường nhập liệu trong form
    $('#edit_name').val(row.email);
    

    
    // Hiển thị modal chỉnh sửa
    $('#editArchiveModal').modal('show');
});






















// tạo bảng
function table_create(table_options) {
    return $(`#${table_options.elm_table_id}`).DataTable({
        scrollX: true,
        info: false,
        ajax: function(data, callback, settings) {            
            $.ajax({
                url: table_options.url,
                type: 'GET',
                dataType: 'json',
                data: { delete_status: $(`#${table_options.elm_id_delete_status}`).val() },
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
function table_load_delete_status(table_options) {
    var delete_status = $(`#${table_options.elm_id_delete_status}`).val();
    if (delete_status == "true") {
        $(`#${table_options.elm_id_btn_restore_deleted}`).show();
        $(`#${table_options.elm_id_btn_delete_selected}`).hide();
    } else {
        $(`#${table_options.elm_id_btn_restore_deleted}`).hide();
        $(`#${table_options.elm_id_btn_delete_selected}`).show();
    }
    var table = $(`#${table_options.elm_table_id}`).DataTable();
    table.ajax.reload(null, false); // Reload without resetting the paging
}

// hàm xoá item
// hàm xoá item
function table_restore_delete(type = "delete",table_options) {
    const selectedIds = table_getCheckedBoxes(table_options);
    if (type == "delete") {
        var text_html = "Xoá";
        var icon_html = "fas fa-trash";
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
    
    
    
    
    if (type == "delete") {
        var button_elm_submit = $(`#${table_options.elm_id_btn_delete_selected}`);
        var originalButtonText = button_elm_submit.html();
        button_elm_submit.html(`<i class="${icon_html}"></i> Đang xoá...`);
    } else {
        var button_elm_submit = $(`#${table_options.elm_id_btn_restore_deleted}`);
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
                url: table_options.url_delete,
                type: 'POST',
                data: { id: selectedIds[index] },
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
    var elm_name = $("#btn_add_archive");
    var name = $("#name").val();
    var keywords = $("#keywords").val() ? JSON.parse($("#keywords").val()).join(',') : '';
    if (name == "") {
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
        url: '<?=set_route_to_link(["backend","admin_panel_videos","add_archive"])?>',
        type: 'POST',
        data: { name: name, keywords: keywords },
        success: function(response) {
            elm_name.html(`<i class="fas fa-save"></i> Lưu kho`);
            if (response.stt) {
                $('#table_lists').DataTable().ajax.reload();
                $("#keywords").val('');
                $("#keywords-container").html('');
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
    const saveButton = document.getElementById('btn_save_category');
    saveButton.onclick = function() {
        setTimeout(function() {
            clearKeywords();
            keywordInput.value = '';
        }, 100);
    };

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
    var keywords = $("#edit_keywords").val() ? JSON.parse($("#edit_keywords").val()).join(',') : '';

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
        url: "<?=set_route_to_link(["backend","admin_panel_videos","edit_archive"])?>",
        type: "POST",
        data: {
            id: archive_id,
            name: name,
            keywords: keywords
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
            elm_name.html('Cập nhật');
        },
        error: function() {
            $.toast({
                heading: 'Lỗi',
                text: 'Đã xảy ra lỗi, vui lòng thử lại sau.',
                icon: 'error',
                position: 'top-right',
                hideAfter: 5000
            });
            elm_name.html('Cập nhật');
        }
    });
}
</script>