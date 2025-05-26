<!DOCTYPE html>
<html lang="vi">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Chuyển Đổi Văn Bản Thành Giọng Nói</title>
  
  <!-- Bootstrap CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
  
  <!-- jQuery Toast CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-toast-plugin/1.3.2/jquery.toast.min.css" rel="stylesheet">
  
  <style>
    :root {
      --primary: #3a86ff;
      --secondary: #4361ee;
      --dark-bg: #121212;
      --card-bg: #1e1e1e;
      --text-color: #ffffff;
      --text-secondary: #e0e0e0;
      --border-color: #333;
      --selected-bg: #1a3a6c;
    }
    
    body {
      background-color: var(--dark-bg);
      color: var(--text-color);
      font-family: 'Segoe UI', 'Roboto', sans-serif;
      padding: 2rem;
    }
    
    .card {
      background-color: var(--card-bg);
      border: 1px solid var(--border-color);
      border-radius: 10px;
      box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
      margin-bottom: 2rem;
      padding: 1.5rem;
    }
    
    .card-title {
      font-size: 1.5rem;
      font-weight: 600;
      margin-bottom: 1.2rem;
      color: var(--primary);
      border-bottom: 1px solid var(--border-color);
      padding-bottom: 10px;
    }
    
    .form-control, .form-select {
      background-color: #2d2d2d;
      border: 1px solid var(--border-color);
      color: var(--text-color);
      padding: 12px;
      border-radius: 8px;
      font-size: 1.1rem;
    }
    
    .form-control:focus, .form-select:focus {
      background-color: #2d2d2d;
      color: var(--text-color);
      border-color: var(--primary);
      box-shadow: 0 0 0 0.25rem rgba(58, 134, 255, 0.25);
    }
    
    .btn {
      padding: 12px 20px;
      font-size: 1.1rem;
      border-radius: 8px;
      margin-right: 10px;
      font-weight: 500;
      transition: all 0.3s;
    }
    
    .btn-primary {
      background-color: var(--primary);
      border-color: var(--primary);
    }
    
    .btn-primary:hover {
      background-color: var(--secondary);
      border-color: var(--secondary);
      transform: translateY(-2px);
      box-shadow: 0 5px 15px rgba(58, 134, 255, 0.4);
    }
    
    .voice-item {
      background-color: #252525;
      border-radius: 8px;
      padding: 12px;
      margin-bottom: 10px;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
    
    .voice-item:hover {
      background-color: #2a2a2a;
    }
    
    .selected-voice {
      background-color: var(--selected-bg);
      border-left: 3px solid var(--primary);
    }
    
    .voice-item h5 {
      color: var(--text-color);
      font-weight: 500;
      margin-bottom: 0.25rem;
    }
    
    .voice-item small {
      color: var(--text-secondary);
    }
    
    .character-count {
      color: var(--text-secondary);
      font-size: 0.9rem;
      text-align: right;
      margin-top: 5px;
    }
    
    label {
      font-size: 1.1rem;
      margin-bottom: 8px;
      color: var(--text-color);
    }
    
    .section-description {
      color: var(--text-secondary);
      margin-bottom: 15px;
      font-size: 1rem;
    }
    
    .created-voice-item {
      background-color: #252525;
      border-radius: 10px;
      margin-bottom: 15px;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      transition: all 0.3s ease;
    }
    
    .created-voice-item:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 12px rgba(0, 0, 0, 0.15);
    }
    
    .created-voice-header {
      padding: 15px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .voice-title-wrapper {
      display: flex;
      align-items: center;
      gap: 12px;
    }
    
    .voice-title {
      margin: 0;
      font-size: 1.25rem;
      font-weight: 500;
    }
    
    .voice-badge {
      background-color: var(--primary);
      color: white;
      padding: 3px 8px;
      border-radius: 4px;
      font-size: 0.75rem;
      font-weight: 500;
    }
    
    .voice-actions {
      display: flex;
      gap: 8px;
    }
    
    .action-btn {
      width: 36px;
      height: 36px;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      border-radius: 6px;
      font-size: 0.9rem;
    }
    
    .voice-details {
      padding: 15px;
    }
    
    .voice-info {
      display: flex;
      flex-wrap: wrap;
      gap: 15px;
      margin-bottom: 15px;
    }
    
    .info-item {
      display: flex;
      align-items: center;
      gap: 6px;
      color: var(--text-secondary);
      font-size: 0.9rem;
    }
    
    .voice-progress-container {
      background-color: rgba(0, 0, 0, 0.2);
      border-radius: 8px;
      padding: 10px;
    }
    
    /* Make sure all text is bright */
    h1, h2, h3, h4, h5, h6, p, span, div, label, small, .form-control, .btn {
      color: var(--text-color);
    }
    
    input, select, textarea {
      color: var(--text-color) !important;
    }
    
    .alert-primary {
      background-color: rgba(58, 134, 255, 0.2);
      border-color: rgba(58, 134, 255, 0.3);
      color: #ffffff;
    }
    
    .alert-primary i {
      color: #ffffff;
    }
    
    .alert-primary strong {
      color: #ffffff;
      font-weight: 600;
    }
    
    /* Placeholder styles */
    ::placeholder {
      color: #b0b0b0 !important;
      opacity: 1;
    }
    
    :-ms-input-placeholder {
      color: #b0b0b0 !important;
    }
    
    ::-ms-input-placeholder {
      color: #b0b0b0 !important;
    }
    
    .form-control::placeholder,
    .form-select::placeholder {
      color: #b0b0b0 !important;
    }
    
    .audio-player audio {
      width: 100%;
      height: 40px;
      outline: none;
    }
    
    /* Style audio controls for dark theme */
    audio::-webkit-media-controls-panel {
      background-color: #333;
    }
    
    audio::-webkit-media-controls-play-button {
      background-color: var(--primary);
      border-radius: 50%;
    }
    
    /* Custom scrollbar */
    ::-webkit-scrollbar {
      width: 8px;
    }
    
    ::-webkit-scrollbar-track {
      background: #1e1e1e;
    }
    
    ::-webkit-scrollbar-thumb {
      background: #555;
      border-radius: 4px;
    }
    
    ::-webkit-scrollbar-thumb:hover {
      background: #777;
    }
  </style>
</head>
<body>
  <div class="container">
    <!-- Phần danh sách giọng nói và nhập nội dung văn bản -->
    <div class="row">
      <!-- Phần danh sách giọng nói -->
      <div class="col-lg-4">
        <div class="card">
          <h3 class="card-title">
            <i class="fas fa-microphone-alt me-2"></i>
            Danh Sách Giọng Nói
          </h3>
          <p class="section-description">Chọn giọng nói phù hợp với nội dung của bạn</p>
          
          <div class="mb-3">
            <div class="input-group">
              <span class="input-group-text bg-dark text-light border-dark">
                <i class="fas fa-search"></i>
              </span>
              <input type="text" class="form-control" id="voiceSearch" placeholder="Tìm kiếm giọng nói...">
            </div>
          </div>
          
          <div class="mb-3">
            <label for="countrySelect">Quốc Gia</label>
            <select class="form-select" id="countrySelect">
              <option value="all">Tất cả quốc gia</option>
              <option value="vn">Việt Nam</option>
              <option value="us">Hoa Kỳ</option>
            </select>
          </div>
          
          <div class="voice-list" style="max-height: 400px; overflow-y: auto;">
            <!-- Giọng Việt Nam -->
            <div class="voice-category">
              <div class="category-header">
                <i class="fas fa-language me-2"></i>
                Tiếng Việt
              </div>
              <div class="voice-item" data-country="vn">
                <div>
                  <h5>Thanh Mai</h5>
                  <small>Giọng Nữ - Miền Bắc</small>
                </div>
                <div>
                  <button class="btn btn-sm btn-primary" onclick="previewVoice('Thanh Mai')">
                    <i class="fas fa-play"></i>
                  </button>
                  <button class="btn btn-sm btn-primary" onclick="selectVoice('Thanh Mai')">
                    <i class="fas fa-check"></i>
                  </button>
                </div>
              </div>
              
              <div class="voice-item" data-country="vn">
                <div>
                  <h5>Minh Quân</h5>
                  <small>Giọng Nam - Miền Bắc</small>
                </div>
                <div>
                  <button class="btn btn-sm btn-primary" onclick="previewVoice('Minh Quân')">
                    <i class="fas fa-play"></i>
                  </button>
                  <button class="btn btn-sm btn-primary" onclick="selectVoice('Minh Quân')">
                    <i class="fas fa-check"></i>
                  </button>
                </div>
              </div>
              
              <div class="voice-item" data-country="vn">
                <div>
                  <h5>Thu Minh</h5>
                  <small>Giọng Nữ - Miền Nam</small>
                </div>
                <div>
                  <button class="btn btn-sm btn-primary" onclick="previewVoice('Thu Minh')">
                    <i class="fas fa-play"></i>
                  </button>
                  <button class="btn btn-sm btn-primary" onclick="selectVoice('Thu Minh')">
                    <i class="fas fa-check"></i>
                  </button>
                </div>
              </div>
            </div>
            
            <!-- Giọng tiếng Anh -->
            <div class="voice-category">
              <div class="category-header">
                <i class="fas fa-language me-2"></i>
                English
              </div>
              <div class="voice-item" data-country="us">
                <div>
                  <h5>Emma</h5>
                  <small>Female - American</small>
                </div>
                <div>
                  <button class="btn btn-sm btn-primary" onclick="previewVoice('Emma')">
                    <i class="fas fa-play"></i>
                  </button>
                  <button class="btn btn-sm btn-primary" onclick="selectVoice('Emma')">
                    <i class="fas fa-check"></i>
                  </button>
                </div>
              </div>
              
              <div class="voice-item" data-country="us">
                <div>
                  <h5>John</h5>
                  <small>Male - American</small>
                </div>
                <div>
                  <button class="btn btn-sm btn-primary" onclick="previewVoice('John')">
                    <i class="fas fa-play"></i>
                  </button>
                  <button class="btn btn-sm btn-primary" onclick="selectVoice('John')">
                    <i class="fas fa-check"></i>
                  </button>
                </div>
              </div>
              
              <div class="voice-item" data-country="uk">
                <div>
                  <h5>Alice</h5>
                  <small>Female - British</small>
                </div>
                <div>
                  <button class="btn btn-sm btn-primary" onclick="previewVoice('Alice')">
                    <i class="fas fa-play"></i>
                  </button>
                  <button class="btn btn-sm btn-primary" onclick="selectVoice('Alice')">
                    <i class="fas fa-check"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Phần nhập văn bản và tạo giọng nói -->
      <div class="col-lg-8">
        <div class="card">
          <h3 class="card-title">
            <i class="fas fa-text-height me-2"></i>
            Nhập Nội Dung Văn Bản
          </h3>
          <p class="section-description">Nhập nội dung cần chuyển đổi thành giọng nói</p>
          
          <div class="mb-3">
            <textarea class="form-control" id="textContent" rows="12" placeholder="Nhập nội dung văn bản của bạn tại đây..."></textarea>
            <div class="character-count" id="charCount">0 ký tự</div>
          </div>
          
          <div class="alert alert-primary" role="alert">
            <i class="fas fa-info-circle me-2"></i>
            Đã chọn giọng: <strong id="selectedVoice">Thanh Mai</strong>
          </div>
          
          <div class="d-flex flex-wrap gap-2 mb-3">
            <button class="btn btn-primary" id="previewBtn">
              <i class="fas fa-headphones me-2"></i>
              Nghe Thử Giọng
            </button>
            
            <button class="btn btn-primary" id="generateBtn">
              <i class="fas fa-microphone me-2"></i>
              Tạo Giọng Nói
            </button>
            
            <button class="btn btn-primary" id="improveBtn">
              <i class="fas fa-magic me-2"></i>
              Viết Lại Nội Dung Hay Hơn
            </button>
          </div>
          

        </div>
      </div>
    </div>
    
    <!-- Danh sách giọng nói đã tạo -->
    <div class="row">
      <div class="col-12">
        <div class="card">
          <h3 class="card-title">
            <i class="fas fa-history me-2"></i>
            Giọng Nói Đã Tạo
          </h3>
          <p class="section-description">Các tệp giọng nói đã được tạo gần đây</p>
          
          <div id="createdVoices">
            <div class="created-voice-item">
              <div class="created-voice-header">
                <div class="voice-title-wrapper">
                  <h5 class="voice-title">Bài giới thiệu công ty</h5>
                  <div class="voice-badge">Giọng Việt</div>
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
                    <span>Thanh Mai</span>
                  </div>
                  <div class="info-item">
                    <i class="fas fa-calendar-alt"></i>
                    <span>01/05/2025</span>
                  </div>
                  <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <span>2:30 phút</span>
                  </div>
                  <div class="info-item">
                    <i class="fas fa-file-audio"></i>
                    <span>MP3 • 3.2 MB</span>
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
            
            <div class="created-voice-item">
              <div class="created-voice-header">
                <div class="voice-title-wrapper">
                  <h5 class="voice-title">Hướng dẫn sử dụng phần mềm</h5>
                  <div class="voice-badge">English</div>
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
                    <span>Emma</span>
                  </div>
                  <div class="info-item">
                    <i class="fas fa-calendar-alt"></i>
                    <span>30/04/2025</span>
                  </div>
                  <div class="info-item">
                    <i class="fas fa-clock"></i>
                    <span>4:15 phút</span>
                  </div>
                  <div class="info-item">
                    <i class="fas fa-file-audio"></i>
                    <span>MP3 • 5.7 MB</span>
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
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- jQuery, Popper.js, and Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.11.8/umd/popper.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.min.js"></script>
  
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
</body>
</html>