<style>
    :root {
        --primary: #3498db;
        --primary-dark: #2980b9;
        --accent: #00c6ff;
        --dark: #0c1524;
        --dark-light: #162234;
        --dark-lighter: #1f2d40;
        --text: #f8f9fa;
        --text-muted: #b0b8c1;
        --border: #2a3a51;
        --success: #2ecc71;
        --hover: #217dbb;
        --button-gradient: linear-gradient(135deg, #3498db 0%, #2574a9 100%);
        --card-gradient: linear-gradient(135deg, rgba(22, 34, 52, 0.95) 0%, rgba(12, 21, 36, 0.95) 100%);
    }

    body {
        background-color: var(--dark);
        color: var(--text);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        min-height: 100vh;
        background-image: linear-gradient(to bottom, rgba(10, 15, 25, 0.9) 0%, rgba(15, 25, 40, 0.9) 100%);
        background-size: cover;
    }

    .container {
        max-width: 1100px;
        padding: 2rem;
    }

    .card {
        background: var(--card-gradient);
        border-radius: 16px;
        border: 1px solid var(--border);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5), 
                    0 1px 3px rgba(0, 198, 255, 0.05), 
                    0 1px 2px rgba(0, 198, 255, 0.1);
        overflow: hidden;
        transition: all 0.3s ease;
        backdrop-filter: blur(10px);
        -webkit-backdrop-filter: blur(10px);
    }

    .card-header {
        background: linear-gradient(135deg, rgba(52, 152, 219, 0.15) 0%, rgba(41, 128, 185, 0.1) 100%);
        border-bottom: 1px solid rgba(42, 58, 81, 0.5);
        padding: 1.5rem;
    }

    .card-header h3 {
        margin: 0;
        font-weight: 600;
        letter-spacing: 0.5px;
    }

    .card-body {
        padding: 1.75rem;
    }

    .section-title {
        color: var(--text);
        font-weight: 600;
        margin-bottom: 1.5rem;
        display: flex;
        align-items: center;
        letter-spacing: 0.5px;
    }

    .section-title i {
        margin-right: 12px;
        background: linear-gradient(135deg, var(--primary) 0%, var(--accent) 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 1.2em;
    }

    .section-heading {
        color: var(--primary);
        font-weight: 600;
        margin-bottom: 0.8rem;
        font-size: 1.15rem;
        letter-spacing: 0.5px;
        position: relative;
        display: inline-block;
        padding-bottom: 5px;
    }
    
    .section-heading::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 40px;
        height: 2px;
        background: linear-gradient(90deg, var(--primary), transparent);
    }
    
    .section-heading.light {
        color: #ffffff;
        text-shadow: 0 0 10px rgba(255, 255, 255, 0.2);
    }
    
    .section-heading.light::after {
        background: linear-gradient(90deg, #ffffff, transparent);
    }

    .form-control, .form-select {
        background-color: rgba(15, 25, 40, 0.6);
        border: 1px solid rgba(42, 58, 81, 0.8);
        color: var(--text);
        border-radius: 12px;
        padding: 14px 18px;
        transition: all 0.3s;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .form-control::placeholder {
        color: rgba(176, 184, 193, 0.8);
    }

    .form-control:focus, .form-select:focus {
        background-color: rgba(31, 45, 64, 0.8);
        border-color: var(--primary);
        box-shadow: 0 0 0 0.25rem rgba(52, 152, 219, 0.25), 
                    inset 0 2px 4px rgba(0, 0, 0, 0.05);
        color: var(--text);
        transform: translateY(-1px);
    }

    .form-select option {
        background-color: var(--dark-light);
        color: var(--text);
    }

    .btn-primary {
        background: var(--button-gradient);
        border: none;
        border-radius: 12px;
        padding: 12px 24px;
        font-weight: 500;
        letter-spacing: 0.5px;
        transition: all 0.3s;
        position: relative;
        overflow: hidden;
        box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
    }

    .btn-primary:hover, .btn-primary:focus {
        background: linear-gradient(135deg, #217dbb 0%, #1f6da8 100%);
        transform: translateY(-2px);
        box-shadow: 0 6px 18px rgba(52, 152, 219, 0.4);
    }
    
    .btn-primary:active {
        transform: translateY(0);
        box-shadow: 0 2px 8px rgba(52, 152, 219, 0.4);
    }
    
    .btn-primary::after {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
        transition: 0.5s;
    }
    
    .btn-primary:hover::after {
        left: 100%;
    }

    .page-max-container {
        margin-top: 1.5rem;
        min-height: 300px;
        max-height: 500px;
        border-radius: 12px;
        background-color: rgba(15, 25, 40, 0.5);
        padding: 1.25rem;
        border: 1px solid rgba(42, 58, 81, 0.7);
        overflow-y: auto;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        scrollbar-width: thin;
        scrollbar-color: var(--primary) var(--dark-light);
    }

    .tag-container {
        margin-top: 1.5rem;
        min-height: 100px;
        max-height: 250px;
        border-radius: 12px;
        background-color: rgba(15, 25, 40, 0.5);
        padding: 1.25rem;
        border: 1px solid rgba(42, 58, 81, 0.7);
        overflow-y: auto;
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        scrollbar-width: thin;
        scrollbar-color: var(--primary) var(--dark-light);
    }

    .tag-list {
        display: flex;
        flex-wrap: wrap;
        gap: 8px;
    }

    .tag {
        display: inline-flex;
        align-items: center;
        background: linear-gradient(135deg, rgba(52, 152, 219, 0.15) 0%, rgba(41, 128, 185, 0.1) 100%);
        color: var(--text);
        padding: 8px 16px;
        border-radius: 30px;
        font-size: 0.9rem;
        font-weight: 500;
        border: 1px solid rgba(52, 152, 219, 0.3);
        cursor: pointer;
        transition: all 0.3s;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        letter-spacing: 0.3px;
    }

    .tag:hover {
        background: linear-gradient(135deg, rgba(52, 152, 219, 0.25) 0%, rgba(41, 128, 185, 0.2) 100%);
        transform: translateY(-3px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.15);
        border-color: rgba(52, 152, 219, 0.5);
    }
    
    .tag:active {
        transform: translateY(-1px);
    }

    .tag.selected {
        background: linear-gradient(135deg, rgba(52, 152, 219, 0.7) 0%, rgba(41, 128, 185, 0.6) 100%);
        border-color: rgba(52, 152, 219, 0.8);
        box-shadow: 0 2px 8px rgba(52, 152, 219, 0.3);
    }

    .tag.selected:hover {
        background: linear-gradient(135deg, rgba(52, 152, 219, 0.8) 0%, rgba(41, 128, 185, 0.7) 100%);
        box-shadow: 0 4px 10px rgba(52, 152, 219, 0.4);
    }

    .separator {
        height: 1px;
        background: linear-gradient(90deg, transparent, var(--border), transparent);
        margin: 2rem 0;
        opacity: 0.7;
    }

    .selected-tags-container {
        margin-top: 2rem;
    }

    .no-tags {
        color: var(--text-muted);
        font-style: italic;
        margin: 10px 0;
    }

    .search-box {
        position: relative;
    }

    .search-box i {
        position: absolute;
        left: 18px;
        top: 50%;
        transform: translateY(-50%);
        color: var(--primary);
        opacity: 0.8;
        transition: all 0.3s;
    }
    
    .search-box:focus-within i {
        color: var(--accent);
        opacity: 1;
    }

    .search-input {
        padding-left: 48px;
    }

    /* Custom scrollbar */
    ::-webkit-scrollbar {
        width: 6px;
        height: 6px;
    }

    ::-webkit-scrollbar-track {
        background: var(--dark-light);
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb {
        background: linear-gradient(var(--primary), var(--primary-dark));
        border-radius: 10px;
    }

    ::-webkit-scrollbar-thumb:hover {
        background: linear-gradient(var(--accent), var(--primary));
    }
    
    /* Animations */
    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(10px); }
        to { opacity: 1; transform: translateY(0); }
    }
    
    @keyframes pulse {
        0% { box-shadow: 0 0 0 0 rgba(52, 152, 219, 0.4); }
        70% { box-shadow: 0 0 0 10px rgba(52, 152, 219, 0); }
        100% { box-shadow: 0 0 0 0 rgba(52, 152, 219, 0); }
    }

    .tag {
        animation: fadeIn 0.3s ease-out;
    }
    
    /* Apply button animation */
    #applyButton {
        animation: pulse 2s infinite;
    }
</style>