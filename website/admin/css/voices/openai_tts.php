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