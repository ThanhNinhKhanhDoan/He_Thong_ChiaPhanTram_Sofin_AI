
  
  <!-- jQuery Toast Plugin JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.js"></script>
  
  <script>
    $(document).ready(function() {
      // Đếm số ký tự
      $('#textContent').on('input', function() {
        const charLength = $(this).val().length;
        $('#charCount').text(charLength + ' ký tự');
      });
      
      // Lọc giọng nói theo quốc gia
      $('#countrySelect').on('change', function() {
        const country = $(this).val();
        if (country === 'all') {
          $('.voice-category').show();
          $('.voice-item').show();
        } else {
          $('.voice-category').show(); // Luôn hiển thị các nhóm
          $('.voice-item').hide();
          $(`.voice-item[data-country="${country}"]`).show();
          
          // Ẩn các nhóm không có giọng nào hiển thị
          $('.voice-category').each(function() {
            const visibleItems = $(this).find(`.voice-item[data-country="${country}"]:visible`).length;
            if (visibleItems === 0) {
              $(this).hide();
            }
          });
        }
      });
      
      // Tìm kiếm giọng nói
      $('#voiceSearch').on('input', function() {
        const searchText = $(this).val().toLowerCase();
        
        if (searchText === '') {
          $('.voice-category').show();
          $('.voice-item').show();
          return;
        }
        
        $('.voice-item').each(function() {
          const voiceName = $(this).find('h5').text().toLowerCase();
          const voiceDesc = $(this).find('small').text().toLowerCase();
          if (voiceName.includes(searchText) || voiceDesc.includes(searchText)) {
            $(this).show();
          } else {
            $(this).hide();
          }
        });
        
        // Ẩn các nhóm không có giọng nào hiển thị
        $('.voice-category').each(function() {
          const visibleItems = $(this).find('.voice-item:visible').length;
          if (visibleItems === 0) {
            $(this).hide();
          } else {
            $(this).show();
          }
        });
      });
      
      // Đánh dấu giọng mặc định đã chọn khi tải trang
      $('.voice-item').each(function() {
        const itemVoiceName = $(this).find('h5').text().split(' (')[0];
        if ($('#selectedVoice').text() === itemVoiceName) {
          $(this).addClass('selected-voice');
        }
      });
      
      // Nút nghe thử giọng
      $('#previewBtn').on('click', function() {
        const text = $('#textContent').val();
        const selectedVoice = $('#selectedVoice').text();
        
        if (text.trim() === '') {
          $.toast({
            text: "Vui lòng nhập nội dung văn bản",
            icon: 'warning',
            position: 'top-right',
            hideAfter: 3000,
            showHideTransition: 'fade'
          });
          return;
        }
        
        $(this).html('<i class="fas fa-spinner fa-spin me-2"></i> Đang xử lý...');
        
        setTimeout(() => {
          $(this).html('<i class="fas fa-headphones me-2"></i> Nghe Thử Giọng');
          $.toast({
            text: `Đang phát giọng đọc với giọng: ${selectedVoice}`,
            icon: 'info',
            position: 'top-right',
            hideAfter: 3000,
            showHideTransition: 'fade'
          });
        }, 1500);
      });
      
      $('#generateBtn').on('click', function() {
        const text = $('#textContent').val();
        const selectedVoice = $('#selectedVoice').text();
        
        if (text.trim() === '') {
          $.toast({
            text: "Vui lòng nhập nội dung văn bản",
            icon: 'warning',
            position: 'top-right',
            hideAfter: 3000,
            showHideTransition: 'fade'
          });
          return;
        }
        
        $(this).html('<i class="fas fa-spinner fa-spin me-2"></i> Đang tạo...');
        
        setTimeout(() => {
          $(this).html('<i class="fas fa-microphone me-2"></i> Tạo Giọng Nói');
          
          // Tạo kích thước file ngẫu nhiên
          const fileSize = (Math.random() * 6 + 1).toFixed(1);
          // Tạo thời lượng ngẫu nhiên
          const duration = Math.floor(Math.random() * 5) + 1 + ':' + String(Math.floor(Math.random() * 60)).padStart(2, '0');
          // Lấy tiêu đề từ nội dung nhập vào
          const firstLine = text.split('\n')[0].substring(0, 25) + (text.split('\n')[0].length > 25 ? '...' : '');
          // Xác định ngôn ngữ dựa vào giọng đọc
          const langBadge = selectedVoice === 'Thanh Mai' || selectedVoice === 'Thu Minh' ? 'Giọng Việt' : 'English';
          
          // Tạo ngày hiện tại cho tệp mới
          const now = new Date();
          const dateStr = now.toLocaleDateString('vi-VN');
          
          // HTML cho tệp giọng nói mới
          const newVoiceItem = `
            <div class="created-voice-item">
              <div class="created-voice-header">
                <div class="voice-title-wrapper">
                  <h5 class="voice-title">${firstLine}</h5>
                  <div class="voice-badge">${langBadge}</div>
                </div>
                <div class="voice-actions">
                  <button class="btn btn-primary action-btn" title="Tải xuống">
                    <i class="fas fa-download"></i>
                  </button>
                  <button class="btn btn-primary action-btn" title="Chia sẻ">
                    <i class="fas fa-share-alt"></i>
                  </button>
                  <button class="btn btn-primary action-btn" title="Xóa">
                    <i class="fas fa-trash"></i>
                  </button>
                </div>
              </div>
              <div class="voice-details">
                <div class="voice-info">
                  <div class="info-item">
                    <i class="fas fa-user"></i>
                    <span>${selectedVoice}</span>
                  </div>
                  <div class="info-item">
                    <i class="fas fa-calendar-alt"></i>
                    <span>${dateStr}</span>
                  </div>
                  <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <span>${duration} phút</span>
                  </div>
                  <div class="info-item">
                    <i class="fas fa-file-audio"></i>
                    <span>MP3 • ${fileSize} MB</span>
                  </div>
                </div>
                <div class="voice-progress-container">
                  <div class="audio-player">
                    <audio controls>
                      <source src="#" type="audio/mpeg">
                      Trình duyệt của bạn không hỗ trợ phát âm thanh.
                    </audio>
                  </div>
                </div>
              </div>
            </div>
          `;
          
          $('#createdVoices').prepend(newVoiceItem);
          
          $.toast({
            text: "Đã tạo giọng nói thành công",
            icon: 'success',
            position: 'top-right',
            hideAfter: 3000,
            showHideTransition: 'fade'
          });
        }, 2000);
      });
      
      // Nút viết lại nội dung hay hơn
      $('#improveBtn').on('click', function() {
        const text = $('#textContent').val();
        if (text.trim() === '') {
          $.toast({
            text: "Vui lòng nhập nội dung văn bản",
            icon: 'warning',
            position: 'top-right',
            hideAfter: 3000,
            showHideTransition: 'fade'
          });
          return;
        }
        
        $(this).html('<i class="fas fa-spinner fa-spin me-2"></i> Đang xử lý...');
        
        setTimeout(() => {
          $(this).html('<i class="fas fa-magic me-2"></i> Viết Lại Nội Dung Hay Hơn');
          
          const improvedText = text + "\n\n[Nội dung đã được cải thiện về câu từ, ngữ pháp và phong cách diễn đạt.]";
          $('#textContent').val(improvedText);
          $('#charCount').text(improvedText.length + ' ký tự');
          
          $.toast({
            text: "Đã viết lại nội dung thành công",
            icon: 'success',
            position: 'top-right',
            hideAfter: 3000,
            showHideTransition: 'fade'
          });
        }, 2000);
      });
    });
    
    // Hàm nghe thử giọng cụ thể
    function previewVoice(voiceName) {
      $.toast({
        text: `Đang phát giọng mẫu: ${voiceName}`,
        icon: 'info',
        position: 'top-right',
        hideAfter: 2000,
        showHideTransition: 'fade'
      });
    }
    
    // Hàm chọn giọng
    function selectVoice(voiceName) {
      $('#selectedVoice').text(voiceName);
      
      // Xóa màu tất cả các giọng
      $('.voice-item').removeClass('selected-voice');
      
      // Thêm màu cho giọng đã chọn
      $('.voice-item').each(function() {
        const itemVoiceName = $(this).find('h5').text();
        if (voiceName === itemVoiceName) {
          $(this).addClass('selected-voice');
        }
      });
      
      $.toast({
        text: `Đã chọn giọng: ${voiceName}`,
        icon: 'success',
        position: 'top-right',
        hideAfter: 3000,
        showHideTransition: 'fade'
      });
    }
  </script>