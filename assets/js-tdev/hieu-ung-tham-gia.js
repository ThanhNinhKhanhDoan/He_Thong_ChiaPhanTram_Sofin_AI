// Đặt tất cả mã trong một hàm IIFE (Immediately Invoked Function Expression)
(function() {
    // Kiểm tra xem nút có tồn tại không
    const pricingButton = document.getElementById('btn-pricing-html');
  
    // Nếu không tìm thấy nút, dừng thực thi
    if (!pricingButton) {
      console.log('Button with ID "btn-pricing-html" not found');
      return;
    }
  
    // Loại bỏ class animate__shakeX từ Animate.css nếu có
    pricingButton.classList.remove('animate__shakeX');
  
    // Thêm CSS cho hiệu ứng rung mạnh và liên tục
    const style = document.createElement('style');
    style.innerHTML = `
      @keyframes intense-shake {
        0%, 100% { transform: translate(0, 0) rotate(0deg) scale(1.5); }
        10% { transform: translate(-5px, -2px) rotate(-2deg) scale(1.5); }
        20% { transform: translate(5px, 2px) rotate(2deg) scale(1.5); }
        30% { transform: translate(-5px, 2px) rotate(-1deg) scale(1.5); }
        40% { transform: translate(5px, -2px) rotate(1deg) scale(1.5); }
        50% { transform: translate(-5px, -2px) rotate(-2deg) scale(1.5); }
        60% { transform: translate(5px, 2px) rotate(2deg) scale(1.5); }
        70% { transform: translate(-5px, 2px) rotate(-1deg) scale(1.5); }
        80% { transform: translate(5px, -2px) rotate(1deg) scale(1.5); }
        90% { transform: translate(-5px, -2px) rotate(-2deg) scale(1.5); }
      }
      
      @keyframes intense-glow {
        0% { box-shadow: 0 0 10px rgba(255, 82, 82, 0.7); }
        25% { box-shadow: 0 0 25px rgba(255, 123, 0, 0.8); }
        50% { box-shadow: 0 0 15px rgba(231, 76, 60, 0.9); }
        75% { box-shadow: 0 0 25px rgba(255, 123, 0, 0.8); }
        100% { box-shadow: 0 0 10px rgba(255, 82, 82, 0.7); }
      }
      
      .super-shake-button {
        animation: intense-shake 0.8s cubic-bezier(.36,.07,.19,.97) infinite !important;
        transform-origin: center !important;
        backface-visibility: hidden !important;
        perspective: 1000px !important;
        animation-delay: 0s !important;
      }
      
      .super-glow-effect {
        animation: intense-glow 1s infinite !important;
      }
    `;
    document.head.appendChild(style);
  
    // Thêm hiệu ứng rung và phát sáng ngay lập tức và liên tục
    function applyIntenseEffects() {
      // Kiểm tra lại để đảm bảo nút vẫn tồn tại
      if (!document.getElementById('btn-pricing-html')) {
        return;
      }
      
      // Thêm hiệu ứng rung mạnh
      pricingButton.classList.add('super-shake-button');
      
      // Thêm hiệu ứng phát sáng
      pricingButton.classList.add('super-glow-effect');
      
      // Đảm bảo hiệu ứng luôn hoạt động bằng cách kiểm tra mỗi 5 giây
      setInterval(() => {
        const btn = document.getElementById('btn-pricing-html');
        if (btn) {
          // Đảm bảo các class hiệu ứng vẫn được áp dụng
          if (!btn.classList.contains('super-shake-button')) {
            btn.classList.add('super-shake-button');
          }
          if (!btn.classList.contains('super-glow-effect')) {
            btn.classList.add('super-glow-effect');
          }
        }
      }, 500);
    }
  
    // Thêm hiệu ứng nổi bật khi người dùng di chuột vào
    pricingButton.addEventListener('mouseenter', () => {
      // Thay vì dừng hiệu ứng khi hover, chúng ta làm nó nổi bật hơn
      pricingButton.style.animationDuration = '0.5s';
      pricingButton.style.transform = 'scale(1.6)';
    });
  
    // Trở lại trạng thái bình thường khi người dùng di chuột ra
    pricingButton.addEventListener('mouseleave', () => {
      pricingButton.style.animationDuration = '0.8s';
      pricingButton.style.transform = 'scale(1.5)';
    });
  
    // Hiệu ứng khi người dùng có ý định rời trang
    document.addEventListener('mouseleave', (e) => {
      // Kiểm tra lại sự tồn tại của nút
      const currentBtn = document.getElementById('btn-pricing-html');
      if (!currentBtn) return;
      
      if (e.clientY < 0) {
        // Tăng cường hiệu ứng rung khi người dùng có ý định rời đi
        currentBtn.style.animationDuration = '0.4s';
        
        // Thêm hiệu ứng nhảy mạnh
        currentBtn.animate([
          { transform: 'translateY(0) scale(1.5)' },
          { transform: 'translateY(-15px) scale(1.6)' },
          { transform: 'translateY(0) scale(1.5)' }
        ], {
          duration: 600,
          iterations: 5
        });
        
        // Đặt lại sau 3 giây
        setTimeout(() => {
          const resetBtn = document.getElementById('btn-pricing-html');
          if (resetBtn) {
            resetBtn.style.animationDuration = '0.8s';
          }
        }, 500);
      }
    });
  
    // Khởi chạy hiệu ứng ngay lập tức
    applyIntenseEffects();
  })();