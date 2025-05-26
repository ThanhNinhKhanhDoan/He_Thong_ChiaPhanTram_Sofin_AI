<script>
    async function getContentYoutube() {
        var button_test_voice = $('#button-test-voice');
        button_test_voice.prop('disabled', true);
        var button_start_tts = $('#button-start-tts');
        button_start_tts.prop('disabled', true);
        var button_import_youtube = $('#button-import-youtube');
        button_import_youtube.prop('disabled', true);
        button_import_youtube.html('Vui lòng chờ...');
        var url = $('#text-to-speech').val();
        if (url.length == 0) {
            button_test_voice.prop('disabled', false);
            button_start_tts.prop('disabled', false);
            button_import_youtube.prop('disabled', false);
            button_import_youtube.html('Nhập Youtube');
            $.toast({
                heading: 'Lỗi',
                text: "Vui lòng nhập URL Youtube",
                icon: 'error',
                position: 'top-right',
                hideAfter: 10000
            });
            return;
        }
        var response = await window.youtube.getContent(url);
        if (response.stt) {
            $('#text-to-speech').val(response.content);
            button_test_voice.prop('disabled', false);
            button_start_tts.prop('disabled', false);
            button_import_youtube.prop('disabled', false);
            button_import_youtube.html('Nhập Youtube');
            $('#seo-title').val(response.title);
            $.toast({
                heading: 'Thành công',
                text: "Tải nội dung thành công",
                icon: 'success',
                position: 'top-right',
                hideAfter: 10000
            });
        } else {
            button_test_voice.prop('disabled', false);
            button_start_tts.prop('disabled', false);
            button_import_youtube.prop('disabled', false);
            button_import_youtube.html('Nhập Youtube');
            $.toast({
                heading: 'Lỗi',
                text: response.data,
                icon: 'error',
                position: 'top-right',
                hideAfter: 10000
            });
        }
    }


    async function generateStory() {
        var button_test_voice = $('#button-test-voice');
        button_test_voice.prop('disabled', true);
        var button_start_tts = $('#button-start-tts');
        button_start_tts.prop('disabled', true);
        var button_import_prompt = $('#button-import-prompt');
        button_import_prompt.prop('disabled', true);
        button_import_prompt.html('Vui lòng chờ...');
        var elm_content = $('#text-to-speech');
        var content = elm_content.val();
        var response = await window.api_chat_ai.generate_story("claude", content);
        button_test_voice.prop('disabled', false);
        button_start_tts.prop('disabled', false);
        button_import_prompt.prop('disabled', false);
        button_import_prompt.html('Nhập prompt ');
        if (response.stt) {
            elm_content.val(response.data);
            $.toast({
                heading: 'Thành công',
                text: "Tạo câu chuyện thành công",
                icon: 'success',
                position: 'top-right',
                hideAfter: 10000
            });
        } else {
            elm_content.val(content);
            $.toast({
                heading: 'Lỗi',
                text: response.data,
                icon: 'error',
                position: 'top-right',
                hideAfter: 10000
            });
        }
    }


    async function generateSEO() {
        var button_test_voice = $('#button-test-voice');
        button_test_voice.prop('disabled', true);
        var button_start_tts = $('#button-start-tts');
        button_start_tts.prop('disabled', true);
        var button_create_seo = $('#button-create-seo');
        button_create_seo.prop('disabled', true);
        button_create_seo.html('Vui lòng chờ...');
        var elm_content = $('#text-to-speech');

        var seo_title = $('#seo-title');
        var seo_description = $('#seo-description');
        var seo_keywords = $('#seo-keywords');
        var seo_thumbnail = $('#seo-thumbnail');

        var content = elm_content.val();
        var response = await window.api_chat_ai.generate_seo("claude", content);
        button_test_voice.prop('disabled', false);
        button_start_tts.prop('disabled', false);
        button_create_seo.prop('disabled', false);
        button_create_seo.html('Tạo SEO');
        console.log(response);
        if (response.stt) {
            seo_title.val(response.title);
            seo_description.val(response.description);
            seo_keywords.val(response.keywords);
            seo_thumbnail.val(response.thumbnail);
            $.toast({
                heading: 'Thành công',
                text: "Tạo SEO thành công", 
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
    }

    async function rewriteContent() {
        var button_test_voice = $('#button-test-voice');
        button_test_voice.prop('disabled', true);
        var button_start_tts = $('#button-start-tts');
        button_start_tts.prop('disabled', true);
        var button_rewrite_content = $('#button-rewrite-content');
        button_rewrite_content.prop('disabled', true);
        button_rewrite_content.html('Vui lòng chờ...');
        var elm_content = $('#text-to-speech');
        var content = elm_content.val();
        if(content.length < 10){
            button_test_voice.prop('disabled', false);
            button_start_tts.prop('disabled', false);
            button_rewrite_content.prop('disabled', false);
            button_rewrite_content.html('Viết lại nội dung');
            $.toast({
                heading: 'Lỗi',
                text: "Văn bản phải dài hơn 10 ký tự",
                icon: 'error',
                position: 'top-right',
                hideAfter: 10000
            }); 
            return;
        }
        elm_content.val("Đang viết lại nội dung...\nVui lòng chờ...");
        elm_content.prop('disabled', true);
        var response = await window.api_chat_ai.rewrite("claude", content);
        button_test_voice.prop('disabled', false);
        button_start_tts.prop('disabled', false);
        elm_content.prop('disabled', false);
        button_rewrite_content.prop('disabled', false);
        button_rewrite_content.html('Viết lại nội dung');
        if (response.stt) {
            elm_content.val(response.data);
            $.toast({
                heading: 'Thành công',
                text: "Viết lại nội dung thành công",
                icon: 'success',
                position: 'top-right',
                hideAfter: 10000
            });
        } else {
            elm_content.val(content);
            $.toast({
                heading: 'Lỗi',
                text: response.data,
                icon: 'error',
                position: 'top-right',
                hideAfter: 10000
            });
        }

    }




    function getVoice() {
        $("#result-voices").load("<?=set_route_to_link(["jsload","voice-openai","voices"])?>", function(response, status, xhr) {
            if (status === "error") {
                $.toast({
                    heading: 'Lỗi',
                    text: 'Không thể tải giọng nói: ' + xhr.status + ' ' + xhr.statusText,
                    icon: 'error',
                    position: 'top-right',
                    hideAfter: 30000
                });
            }
        });
    }

    async function startTTS() {
        var button_start_tts = $('#button-start-tts');
        var voiceCreationName = $('#voiceCreationName').val();
        var voiceGroup = $('#voiceGroup').val();
        var seo_title = $('#seo-title').val();
        var seo_description = $('#seo-description').val();
        var seo_keywords = $('#seo-keywords').val();
        var seo_thumbnail = $('#seo-thumbnail').val();

        if (seo_title.length < 5) {
            button_start_tts.prop('disabled', false);
            button_start_tts.html('Tạo giọng đọc'); // Đặt lại văn bản nút  
            $.toast({
                heading: 'Lỗi',
                text: 'Tiêu đề phải dài hơn 5 ký tự.',
                icon: 'error',
                position: 'top-right',
                hideAfter: 30000
            });
            return;
        }
        if (seo_description.length < 5) {
            button_start_tts.prop('disabled', false);
            button_start_tts.html('Tạo giọng đọc'); // Đặt lại văn bản nút
            $.toast({
                heading: 'Lỗi',
                text: 'Mô tả phải dài hơn 5 ký tự.',
                icon: 'error',
                position: 'top-right',
                hideAfter: 30000
            });
            return;
        }
        if (seo_keywords.length < 5) {
            button_start_tts.prop('disabled', false);
            button_start_tts.html('Tạo giọng đọc'); // Đặt lại văn bản nút
            $.toast({
                heading: 'Lỗi',
                text: 'Từ khóa phải dài hơn 5 ký tự.',
                icon: 'error',
                position: 'top-right',
                hideAfter: 30000
            });
            return;
        }
        if (seo_thumbnail.length < 5) {
            button_start_tts.prop('disabled', false);
            button_start_tts.html('Tạo giọng đọc'); // Đặt lại văn bản nút
            $.toast({
                heading: 'Lỗi',
                text: 'Ảnh thumbnail phải dài hơn 5 ký tự.',
                icon: 'error',
                position: 'top-right',
                hideAfter: 30000
            });
            return;
        }
        
        button_start_tts.prop('disabled', true);
        button_start_tts.html('Vui lòng chờ...');
        var config = $("input[name='voice']:checked").val();
        if (!config) {
            button_start_tts.prop('disabled', false);
            button_start_tts.html('Tạo giọng đọc'); // Đặt lại văn bản nút
            $.toast({
                heading: 'Lỗi',
                text: 'Ít nhất một giọng nói phải được chọn.',
                icon: 'error',
                position: 'top-right',
                hideAfter: 30000
            });
            return; // Thoát khỏi hàm nếu không có giọng nói nào được chọn
        }
        var text = $('#text-to-speech').val();
        if (text.length <= 5) {
            button_start_tts.prop('disabled', false);
            button_start_tts.html('Tạo giọng đọc'); // Đặt lại văn bản nút
            $.toast({
                heading: 'Lỗi',
                text: 'Văn bản phải dài hơn 5 ký tự.',
                icon: 'error',
                position: 'top-right',
                hideAfter: 30000
            });
            return; // Thoát khỏi hàm nếu văn bản quá ngắn
        }

        if (voiceGroup.length == 0) {
            button_start_tts.prop('disabled', false);
            button_start_tts.html('Tạo giọng đọc'); // Đặt lại văn bản nút
            $.toast({
                heading: 'Lỗi',
                text: 'Vui lòng chọn nhóm giọng nói.',
                icon: 'error',
                position: 'top-right',
                hideAfter: 30000
            });
            return; // Thoát khỏi hàm nếu không có nhóm giọng nói
        }

        if (voiceCreationName.length == 0) {
            button_start_tts.prop('disabled', false);
            button_start_tts.html('Tạo giọng đọc'); // Đặt lại văn bản nút
            $.toast({
                heading: 'Lỗi',
                text: 'Vui lòng nhập tên cho phiên tạo giọng đọc.', 
                icon: 'error',
                position: 'top-right',
                hideAfter: 30000
            });
            return; // Thoát khỏi hàm nếu không có tên giọng đọc
        }
        $('#createVoiceModal').modal('hide');
        
        var response = await window.voice_openai.start_tts(config, text, false);
        button_start_tts.prop('disabled', false);
        button_start_tts.html('Tạo giọng đọc'); // Đặt lại văn bản nút
        if (response.stt) {
            $.ajax({
                url: '<?=set_route_to_link(["backend","voices","add"])?>',
                type: 'POST',
                data: {
                    config_voice: config,
                    text: text,
                    group: voiceGroup,
                    name: voiceCreationName,
                    path_voice: response.data,
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
    }


    async function testVoice() {
        var button_test_voice = $('#button-test-voice');
        button_test_voice.prop('disabled', true);
        button_test_voice.html('Vui lòng chờ...');
        var config = $("input[name='voice']:checked").val();
        if (!config) {
            button_test_voice.prop('disabled', false);
            button_test_voice.html('Nghe thử'); // Đặt lại văn bản nút
            $.toast({
                heading: 'Lỗi',
                text: 'Ít nhất một giọng nói phải được chọn.',
                icon: 'error',
                position: 'top-right',
                hideAfter: 30000
            });
            
            return; // Thoát khỏi hàm nếu không có giọng nói nào được chọn
        }
        var text = $('#text-to-speech').val();
        if (text.length <= 5) {
            button_test_voice.prop('disabled', false);
            button_test_voice.html('Nghe thử'); // Đặt lại văn bản nút
            $.toast({
                heading: 'Lỗi',
                text: 'Văn bản phải dài hơn 5 ký tự.',
                icon: 'error',
                position: 'top-right',
                hideAfter: 30000
            });
            return; // Thoát khỏi hàm nếu văn bản quá ngắn
        }
        
        var response = await window.voice_openai.start_tts(config, text, true);
        console.log(response);
        button_test_voice.prop('disabled', false);
        button_test_voice.html('Nghe thử'); // Đặt lại văn bản nút
        if (response.stt) {
            var audio = new Audio(response.data);
            audio.loop = true; // Đặt âm thanh để lặp lại
            audio.play().then(() => {
                $.toast({
                    heading: 'Thành công',
                    text: 'Âm thanh đang phát.',
                    icon: 'success',
                    position: 'top-right',
                    hideAfter: 10000
                });
                // Cập nhật nút để hiển thị 'Dừng'
                button_test_voice.removeAttr('onclick');
                button_test_voice.prop('disabled', false);
                button_test_voice.html('Dừng');

                // Thêm sự kiện để dừng âm thanh và đặt lại nút
                button_test_voice.off('click').on('click', function() {
                    audio.pause(); // Dừng âm thanh
                    audio.currentTime = 0; // Đặt lại âm thanh về đầu
                    button_test_voice.attr('onclick', 'testVoice()');
                    button_test_voice.prop('disabled', false);
                    button_test_voice.html('Nghe thử'); // Đặt lại văn bản nút
                });
            }).catch(error => {
                $.toast({
                    heading: 'Lỗi',
                    text: 'Không thể phát âm thanh',
                    icon: 'error',
                    position: 'top-right',
                    hideAfter: 30000
                });
            });

            
        }
    }

    

    async function addVoice() {
        var gender = $('#voiceGender').val();
        var name = $('#voiceName').val();
        var id = $('#voiceId').val();
        var prompt = $('#voicePrompt').val();
        var description = $('#voiceDescription').val();

        var addVoiceButton = $('#addVoiceButton');
        addVoiceButton.prop('disabled', true);
        addVoiceButton.html('Vui lòng chờ...');

        $.ajax({
            url: '<?=set_route_to_link(["backend","voice_openai","add"])?>',
            type: 'POST',
            data: {gender: gender, name: name, id: id, prompt: prompt, description: description},
            success: function(response) {
                addVoiceButton.prop('disabled', false);
                addVoiceButton.html('Lưu Giọng Nói');
                if (response.stt) {
                    getVoice()
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
                addVoiceButton.prop('disabled', false);
                addVoiceButton.html('Lưu Giọng Nói');
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
    document.addEventListener('DOMContentLoaded', function() {
        getVoice()
        // Đếm ký tự
        const textArea = document.getElementById('text-to-speech');
        const charCount = document.getElementById('char-count');
        
        textArea.addEventListener('input', function() {
            charCount.textContent = this.value.length;
        });
        
        
    });
</script>

<script>
    // thực hiện mở modal tạo giọng đọc
    document.getElementById('button-start-tts').addEventListener('click', function() {
        var createVoiceModal = new bootstrap.Modal(document.getElementById('createVoiceModal'));
        createVoiceModal.show();
    });

    async function createVoiceReading() {
        var voiceName = document.getElementById('voiceCreationName').value;
        if (!voiceName) {
            $.toast({
                heading: 'Lỗi',
                text: 'Vui lòng nhập tên cho phiên tạo giọng đọc.',
                icon: 'error',
                position: 'top-right',
                hideAfter: 30000
            });
            return;
        }
        // Call your function to handle the voice reading creation here
        // Example: await window.voice_openai.create_voice_reading(voiceName);
        console.log("Creating voice reading with name:", voiceName);
        // Close the modal after processing
        var createVoiceModal = bootstrap.Modal.getInstance(document.getElementById('createVoiceModal'));
        createVoiceModal.hide();
    }
</script>














<script>
    // phần này của table và quản lý table
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
            },
            columnDefs: [
                {
                    targets: 6,
                    render: function(data, type, row, meta) {
                        return '<div class="form-check float-end mt-1"><input type="checkbox" name="' + idInput + '" class="form-check-input" value="' + row._id + '"></div>';
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
                            return '<span title="' + data + '" style="display: inline-block; max-width: 80px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'80px\'; this.style.whiteSpace=\'nowrap\';">#' + (meta.row + 1) + ' ' + data + '</span>';
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


    async function deleteSelectedVoices() {
        const selectedRows = getCheckedBoxes("checkbox_voice");
        if (selectedRows.length === 0) {
            $.toast({
                heading: 'Lỗi',
                text: 'Vui lòng chọn ít nhất một hàng để xoá.',
                icon: 'error',
                position: 'top-right'
            });
            return;
        }
        const confirmed = await confirmAction();
        if (!confirmed) {
            return false;
        }

        var button_delete_selected_voices = $('#button-delete-selected-voices');
        button_delete_selected_voices.prop('disabled', true);
        button_delete_selected_voices.html('<i class="bi-trash me-1"></i> Đang xoá...');
        button_delete_selected_voices.addClass('disabled');
        button_delete_selected_voices.removeClass('btn-outline-danger');
        button_delete_selected_voices.addClass('btn-danger');
        button_delete_selected_voices.removeClass('btn-outline-danger');
        button_delete_selected_voices.addClass('btn-danger');

        for (const id of selectedRows) {
            $.ajax({
                url: "<?=set_route_to_link(['backend','voices','delete'])?>",
                type: "POST",
                data: {id: id},
                success: function(response) {
                    button_delete_selected_voices.prop('disabled', false);
                    button_delete_selected_voices.html('<i class="bi-trash me-1"></i> Xoá đã chọn');
                    button_delete_selected_voices.removeClass('disabled');
                    button_delete_selected_voices.addClass('btn-outline-danger');
                    button_delete_selected_voices.removeClass('btn-danger');
                    button_delete_selected_voices.removeClass('btn-outline-danger');
                    button_delete_selected_voices.addClass('btn-danger');
                    if (response.stt) {
                        tableVoice.ajax.reload();
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
                    button_delete_selected_voices.prop('disabled', false);
                    button_delete_selected_voices.html('<i class="bi-trash me-1"></i> Xoá đã chọn');
                    button_delete_selected_voices.removeClass('disabled');
                    button_delete_selected_voices.addClass('btn-outline-danger');
                    button_delete_selected_voices.removeClass('btn-danger');
                    button_delete_selected_voices.removeClass('btn-outline-danger');
                    button_delete_selected_voices.addClass('btn-danger');
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

    var tableVoice = initializeDataTable("#datatableRowsAjaxVoice", "<?=set_route_to_link(['jsload','voices','voice_list'])?>", "checkbox_voice");
    setupSearch("#search-voice-history", "#datatableRowsAjaxVoice");
    initializeRowSelection("#datatableRowsAjaxVoice");
</script>
