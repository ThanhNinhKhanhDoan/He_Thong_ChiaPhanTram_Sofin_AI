<script>
// Fix 1: Plan Card loading function
function loadPlanData(plan) {
    const planCard = document.getElementById('currentPlanCard');
    const planName = document.getElementById('planName');
    const planExpiration = document.getElementById('planExpiration');
    const pointsUsed = document.getElementById('pointsUsed');
    const planType = document.getElementById('planType');
    const planIcon = document.getElementById('planIcon');

    // Set the plan details
    if (plan && typeof plan === 'object') {
        planName.textContent = plan.name || 'N/A';
        planExpiration.textContent = `Expiration: ${plan.expiration || 'N/A'} (${plan.daysLeft || 0} days left)`;
        pointsUsed.textContent = `${plan.pointsUsed || 0} points`;
        planType.textContent = plan.type || 'N/A';

        // Clear previous card color classes
        planCard.classList.remove('bg-gradient-light', 'bg-gradient-secondary', 'bg-gradient-success', 'bg-gradient-primary', 'bg-gradient-info', 'bg-gradient-warning');

        // Set the card color and icon based on the plan type
        switch (plan.type) {
            case 'Basic':
                planCard.classList.add('bg-gradient-light');
                pointsUsed.classList.remove('bg-info', 'bg-success', 'bg-warning', 'bg-primary');
                pointsUsed.classList.add('bg-light');
                
                // Fix: Check if elements exist before modifying them
                const badges = document.querySelectorAll('.badge');
                if (badges.length > 1) {
                    badges[1].classList.remove('bg-info', 'bg-success', 'bg-warning', 'bg-primary');
                    badges[1].classList.add('bg-light');
                }
                
                // Basic plan icon
                planIcon.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-user text-dark">
                        <path d="M10.0179 8C10.9661 8 11.4402 8 11.8802 7.76629C12.1434 7.62648 12.4736 7.32023 12.6328 7.06826C12.8989 6.64708 12.9256 6.29324 12.9789 5.58557C13.0082 5.19763 13.0071 4.81594 12.9751 4.42106C12.9175 3.70801 12.8887 3.35148 12.6289 2.93726C12.4653 2.67644 12.1305 2.36765 11.8573 2.2256C11.4235 2 10.9533 2 10.0129 2V2C9.03627 2 8.54794 2 8.1082 2.23338C7.82774 2.38223 7.49696 2.6954 7.33302 2.96731C7.07596 3.39365 7.05506 3.77571 7.01326 4.53982C6.99635 4.84898 6.99567 5.15116 7.01092 5.45586C7.04931 6.22283 7.06851 6.60631 7.33198 7.03942C7.4922 7.30281 7.8169 7.61166 8.08797 7.75851C8.53371 8 9.02845 8 10.0179 8V8Z"></path>
                        <path d="M16.5 17.5L16.583 16.6152C16.7267 15.082 16.7986 14.3154 16.2254 13.2504C16.0456 12.9164 15.5292 12.2901 15.2356 12.0499C14.2994 11.2842 13.7598 11.231 12.6805 11.1245C11.9049 11.048 11.0142 11 10 11C8.98584 11 8.09511 11.048 7.31945 11.1245C6.24021 11.231 5.70059 11.2842 4.76443 12.0499C4.47077 12.2901 3.95441 12.9164 3.77462 13.2504C3.20144 14.3154 3.27331 15.082 3.41705 16.6152L3.5 17.5"></path>
                    </svg>
                `;
                break;
            
            // Other case statements remain the same
            case 'Pro':
                planCard.classList.add('bg-gradient-success');
                pointsUsed.classList.remove('bg-info', 'bg-light', 'bg-warning', 'bg-primary');
                pointsUsed.classList.add('bg-success');
                
                // Fix: Check if elements exist before modifying them
                const badgesPro = document.querySelectorAll('.badge');
                if (badgesPro.length > 1) {
                    badgesPro[1].classList.remove('bg-info', 'bg-light', 'bg-warning', 'bg-primary');
                    badgesPro[1].classList.add('bg-success');
                }
                
                // Pro plan icon
                planIcon.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-rocket text-success">
                        <path d="M4.73111 15.2689C4.73111 15.2689 5.49388 14.5061 9.06107 10.9389C12.6283 7.37171 15.9999 4.00007 15.9999 4.00007M15.9999 4.00007L11.9999 2.00007M15.9999 4.00007L17.9999 8.00007"></path>
                        <path d="M12.2685 14.7317L14.7543 17.2175C14.9015 17.3647 15.1051 17.4472 15.3177 17.4472H17.4472C17.7532 17.4472 17.9999 17.2004 17.9999 16.8944V14.7649C17.9999 14.5523 17.9174 14.3487 17.7702 14.2015L15.2844 11.7157"></path>
                        <path d="M7.73111 10.2689L5.24533 7.78307C5.09809 7.63583 5.01562 7.43221 5.01562 7.21967V5.09021C5.01562 4.78421 5.26234 4.5375 5.56833 4.5375H7.69779C7.91033 4.5375 8.11395 4.61997 8.26119 4.76721L10.747 7.25297"></path>
                        <path d="M8.00036 17.9999C6.5275 17.9999 5.00536 17.3676 3.75964 16.2404C2.51393 15.1132 1.88171 13.5693 1.88171 12.0964C1.88171 10.6236 3.39564 8.00007 3.39564 8.00007C3.39564 8.00007 6.52571 9.51579 8.00036 10.9904C9.475 12.4651 11.0007 15.5999 11.0007 15.5999C11.0007 15.5999 8.37714 17.9999 8.00036 17.9999Z"></path>
                    </svg>
                `;
                break;
            
            case 'Enterprise':
                planCard.classList.add('bg-gradient-primary');
                pointsUsed.classList.remove('bg-info', 'bg-success', 'bg-warning', 'bg-light');
                pointsUsed.classList.add('bg-primary');
                
                // Fix: Check if elements exist before modifying them
                const badgesEnterprise = document.querySelectorAll('.badge');
                if (badgesEnterprise.length > 1) {
                    badgesEnterprise[1].classList.remove('bg-info', 'bg-success', 'bg-warning', 'bg-light');
                    badgesEnterprise[1].classList.add('bg-primary');
                }
                
                // Enterprise plan icon
                planIcon.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-building text-primary">
                        <path d="M2 18H18M4 18V4C4 3.06812 4 2.60218 4.15224 2.23463C4.35523 1.74458 4.74458 1.35523 5.23463 1.15224C5.60218 1 6.06812 1 7 1H13C13.9319 1 14.3978 1 14.7654 1.15224C15.2554 1.35523 15.6448 1.74458 15.8478 2.23463C16 2.60218 16 3.06812 16 4V18"></path>
                        <path d="M10 18V14C10 13.4477 10.4477 13 11 13H13C13.5523 13 14 13.4477 14 14V18"></path>
                        <path d="M6 5H8M6 8H8M6 11H8M12 5H14M12 8H14"></path>
                    </svg>
                `;
                break;
            
            default:
                planCard.classList.add('bg-gradient-info');
                // Default icon for unknown plan types
                planIcon.innerHTML = `
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-diamond text-info">
                        <path d="M2 7L10 17L18 7M2 7L10 2L18 7M2 7H18"></path>
                    </svg>
                `;
                break;
        }
    } else {
        console.error('Invalid plan data provided');
    }
}

// Define the pricing plans data - moved outside the function to ensure it's available globally
const pricingPlans = [
    {
        id: 'test',
        name: 'Gói Test',
        originalPrice: 'đ 780.000',
        price: 'đ 0',
        duration: '/1 ngày',
        badge: 'Tặng 50.000 điểm test',
        description: 'Gói Test cho phép bạn sử dụng toàn bộ tính năng của gói Pro trong vòng 1 ngày. <strong>Gói Test không được nạp thêm điểm và không gia hạn được thời gian sử dụng.</strong>',
        icon: '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-gift text-white"><path d="M10 2C8.34315 2 7 3.34315 7 5V6H5C4.44772 6 4 6.44772 4 7V18C4 18.5523 4.44772 19 5 19H15C15.5523 19 16 18.5523 16 18V7C16 6.44772 15.5523 6 15 6H13V5C13 3.34315 11.6569 2 10 2Z"></path><path d="M7 6H13V5C13 4.44772 12.5523 4 12 4H8C7.44772 4 7 4.44772 7 5V6Z"></path><path d="M10 10C10.5523 10 11 10.4477 11 11V15C11 15.5523 10.5523 16 10 16C9.44772 16 9 15.5523 9 15V11C9 10.4477 9.44772 10 10 10Z"></path></svg>',
        features: [
            { icon: 'bi-star', text: 'Truy cập tất cả các tính năng của gói Pro' }
        ]
    },
    {
        id: 'basic',
        name: 'Gói Cơ Bản',
        originalPrice: 'đ 494.000',
        price: 'đ 127.400',
        duration: '/tháng',
        badge: 'Tặng 127.400 điểm',
        description: 'Gói Cơ Bản cung cấp các tính năng thiết yếu để bắt đầu tạo nội dung.',
        icon: '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-rocket text-white"><path d="M4.73111 15.2689C4.73111 15.2689 5.0366 17.5 7.00404 17.5C8.97147 17.5 9.5 15.5 9.5 15.5L4.73111 15.2689Z"></path><path d="M15.2689 4.73111C15.2689 4.73111 17.5 5.0366 17.5 7.00404C17.5 8.97147 15.5 9.5 15.5 9.5L15.2689 4.73111Z"></path><path d="M13.9453 6.05518C13.9453 6.05518 10.1914 2.30127 7.00404 2.5C3.81672 2.69873 2.5 5.5 2.5 7.00404C2.5 8.50808 2.69873 12.1833 6.05518 13.9453C9.41164 15.7074 13.0919 15.5 14.5 15.5C15.9081 15.5 17.3013 14.1833 17.5 10.996C17.6987 7.80869 13.9453 6.05518 13.9453 6.05518Z"></path><path d="M10.5 9.5C10.5 10.0523 10.0523 10.5 9.5 10.5C8.94772 10.5 8.5 10.0523 8.5 9.5C8.5 8.94772 8.94772 8.5 9.5 8.5C10.0523 8.5 10.5 8.94772 10.5 9.5Z"></path></svg>',
        features: [
            { icon: 'bi-youtube', text: 'Lấy nội dung từ YouTube' },
            { icon: 'bi-mic', text: 'Voice cơ bản' },
            { icon: 'bi-collection', text: 'Kho chủ đề bị giới hạn' }
        ]
    },
    {
        id: 'pro',
        name: 'Gói Pro',
        originalPrice: 'đ 7.774.000',
        price: 'đ 1.300.000',
        duration: '/tháng',
        badge: 'Tặng 1.500.000 điểm',
        description: 'Gói Pro cung cấp các tính năng nâng cao để tạo nội dung chuyên nghiệp với sự hỗ trợ của AI.',
        icon: '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-crown text-white"><path d="M2.5 16.5L3.5 10.5L6.5 12.5L10 8.5L13.5 12.5L16.5 10.5L17.5 16.5H2.5Z"></path><path d="M3.5 10.5C4.60457 10.5 5.5 9.60457 5.5 8.5C5.5 7.39543 4.60457 6.5 3.5 6.5C2.39543 6.5 1.5 7.39543 1.5 8.5C1.5 9.60457 2.39543 10.5 3.5 10.5Z"></path><path d="M10 8.5C11.1046 8.5 12 7.60457 12 6.5C12 5.39543 11.1046 4.5 10 4.5C8.89543 4.5 8 5.39543 8 6.5C8 7.60457 8.89543 8.5 10 8.5Z"></path><path d="M16.5 10.5C17.6046 10.5 18.5 9.60457 18.5 8.5C18.5 7.39543 17.6046 6.5 16.5 6.5C15.3954 6.5 14.5 7.39543 14.5 8.5C14.5 9.60457 15.3954 10.5 16.5 10.5Z"></path></svg>',
        features: [
            { icon: 'bi-robot', text: 'AI biên soạn kịch bản tự động chuẩn SEO' },
            { icon: 'bi-soundwave', text: 'Tính năng Voice nâng cao (chuẩn tự nhiên)' },
            { icon: 'bi-folder2-open', text: 'Kho chủ đề hiệu quả, kiếm tiền bền vững' },
            { icon: 'bi-camera-video', text: 'AI tạo video, hỗ trợ làm nội dung siêu tốc' },
            { icon: 'bi-people', text: 'Được hỗ trợ các bài giảng Online qua Zoom' },
            { icon: 'bi-chat-dots', text: 'Hỏi & Đáp 1-1 cùng chuyên gia' },
            { icon: 'bi-headset', text: 'Được support 24/7' },
            { icon: 'bi-people-fill', text: 'Tham gia cộng đồng thực chiến cùng SOFIN AI' }
        ],
        isCurrentPlan: true
    },
    {
        id: 'business',
        name: 'Gói Doanh Nghiệp',
        originalPrice: 'đ 75.400.000',
        price: 'đ 25.974.000',
        duration: '/tháng',
        badge: 'Tặng 27.000.000 điểm',
        description: 'Gói Pro cung cấp các tính năng nâng cao để tạo nội dung chuyên nghiệp với sự hỗ trợ của AI.',
        icon: '<svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-diamond text-white"><path d="M2.5 6.5L9.5 17.5M9.5 17.5L17.5 6.5M9.5 17.5V6.5M17.5 6.5H2.5M17.5 6.5L13.5 2.5H6.5L2.5 6.5"></path></svg>',
        features: [
            { icon: 'bi-check-all', text: 'Toàn bộ tính năng của bản Pro' },
            { icon: 'bi-person-video3', text: 'Được huấn luyện 1-1, truyền nghề Youtube' },
            { icon: 'bi-mortarboard', text: 'Được truyền dạy các phương pháp kĩ thuật nâng cao' },
            { icon: 'bi-graph-up-arrow', text: 'AI phát triển nội dung doanh nghiệp, tăng hiệu quả bán hàng' },
            { icon: 'bi-search', text: 'AI hỗ trợ SEO' },
            { icon: 'bi-speedometer2', text: 'Công nghệ SEO tự động đẩy nhanh hiệu suất' },
            { icon: 'bi-briefcase', text: 'Cơ hội hợp tác cùng SOFIN Network' }
        ]
    }
];

// Fix 2: Rendering pricing plans function
function renderPricingPlans() {
    // Check if container exists
    const container = document.getElementById('pricing-plans-container');
    if (!container) {
        console.error('Pricing plans container not found');
        return;
    }
    
    container.innerHTML = '';

    pricingPlans.forEach(plan => {
        // Create feature list HTML
        let featuresHTML = '';
        plan.features.forEach(feature => {
            featuresHTML += `
                <div class="d-flex align-items-center mb-3">
                    <div class="bg-primary rounded-circle p-1 me-2 d-flex align-items-center justify-content-center" style="width: 24px; height: 24px;">
                        <i class="bi ${feature.icon} text-white"></i>
                    </div>
                    <span>${feature.text}</span>
                </div>
            `;
        });

        // Create current plan badge if applicable
        const currentPlanBadge = plan.isCurrentPlan ? 
            `<div class="position-absolute badge bg-primary top-0 end-0 mt-3 me-3 px-3 py-2 rounded-pill fs-6 fw-bold">Gói hiện tại</div>` : '';

        // Fix 3: Fixed button ID to match the one used in purchasePlan function
        const planHTML = `
            <div class="col">
                <div class="card h-100 hover-scale-up shadow-sm border-primary rounded-4 overflow-hidden">
                    ${currentPlanBadge}
                    <div class="card-body p-4">
                        <div class="d-flex flex-column align-items-center mb-4">
                            <div class="bg-gradient-primary sw-6 sh-6 rounded-circle d-flex justify-content-center align-items-center mb-3">
                                ${plan.icon}
                            </div>
                            <h3 class="fw-bold text-primary mb-2">${plan.name}</h3>
                            <div class="text-muted mb-1"><del>${plan.originalPrice}</del></div>
                            <div class="d-flex align-items-end mb-2">
                                <span class="display-4 fw-bold text-dark me-1">${plan.price}</span>
                                <span class="text-muted">${plan.duration}</span>
                            </div>
                            <div class="badge bg-success px-3 py-2 rounded-pill fs-5">${plan.badge}</div>
                        </div>
                        <p class="text-center mb-4">
                            ${plan.description}
                        </p>
                        <hr>
                        <div class="mb-4">
                            ${featuresHTML}
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-0 pb-4 px-4">
                        <a href="javascript:void(0)" class="btn btn-primary btn-lg w-100 rounded-pill hover-lift" 
                           id="elm_button_plan_id_${plan.id}" onclick="purchasePlan('${plan.id}')" data-plan-id="${plan.id}">
                            <span>Mua ngay</span>
                        </a>
                    </div>
                </div>
            </div>
        `;

        // Add plan to container
        container.innerHTML += planHTML;
    });
}

// Fix 4: Purchase plan function
async function purchasePlan(planId) {
    const confirmed = await confirmAction();
    if (!confirmed) {
        return false;
    }
    // Get the button element
    var elm_button_plan_id = document.getElementById("elm_button_plan_id_" + planId);
    if (!elm_button_plan_id) {
        console.error("Button not found for plan ID: " + planId);
        return;
    }
    
    // Update button state
    elm_button_plan_id.innerHTML = "Đang mua...";
    elm_button_plan_id.disabled = true;
    elm_button_plan_id.setAttribute("onclick", "return false;");

    $.ajax({
		url: "<?=set_route_to_link(["backend","pricing","purchase"])?>",
		type: "POST",
		data: {id: planId},
		success: function(response) {
			elm_button_plan_id.innerHTML = "Mua ngay";
			elm_button_plan_id.disabled = false;
			elm_button_plan_id.setAttribute("onclick", "purchasePlan('" + planId + "');");
			if (response.stt) {
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
			elm_button_plan_id.innerHTML = "Mua ngay";
			elm_button_plan_id.disabled = false;
			elm_button_plan_id.setAttribute("onclick", "purchasePlan('" + planId + "');");
			$.toast({
				heading: 'Error',
				text: 'Failed to purchase plan',
				showHideTransition: 'fade',
				icon: 'error',
				position: 'top-right',
				hideAfter: 10000
			})
		}
	});
}

// Fix 6: Format currency function
function formatCurrency_html(element) {
    // Check if element exists
    if (!element || element.length === 0) {
        console.error("Element not found for formatting currency");
        return;
    }
    
    // Get current value and remove non-numeric characters
    let value = element.html().replace(/\D/g, '');
    
    // Format number with thousand separators
    if (value) {
        try {
            value = parseInt(value, 10).toLocaleString('vi-VN');
        } catch (e) {
            console.error("Error formatting currency:", e);
            return;
        }
    }
    
    // Update element's HTML
    element.html(value);
}

// Fix 7: Document ready with jQuery check
document.addEventListener('DOMContentLoaded', function() {
    // Initialize pricing plans
    renderPricingPlans();
    
    // Format currency if jQuery is available
    if (typeof $ !== 'undefined') {
        const pointElement = $("#html_point");
        if (pointElement.length > 0) {
            formatCurrency_html(pointElement);
        } else {
            console.warn("Element #html_point not found");
        }
    } else {
        console.warn("jQuery is not loaded, some functionality may not work");
    }
});

// Make sure jQuery is loaded before using it
function ensureJQuery(callback) {
    if (window.jQuery) {
        callback(window.jQuery);
    } else {
        // If jQuery isn't loaded, attempt to load it
        var script = document.createElement('script');
        script.src = 'https://code.jquery.com/jquery-3.6.0.min.js';
        script.onload = function() {
            callback(window.jQuery);
        };
        script.onerror = function() {
            console.error('Could not load jQuery');
        };
        document.head.appendChild(script);
    }
}

// Define the current plan data for loadPlanData function
const currentPlan = {
    name: 'Test',
    expiration: '15/12/2023',
    daysLeft: 30,
    pointsUsed: 650,
    type: 'Test'
};

// Optional: Initialize with jQuery check
ensureJQuery(function($) {
    $(document).ready(function() {
        // Render pricing plans
        renderPricingPlans();
        
        // Load current plan data
        loadPlanData(currentPlan);
        
        // Format currency
        const pointElement = $("#html_point");
        if (pointElement.length > 0) {
            formatCurrency_html(pointElement);
        }
    });
});






</script>

































<script>
    



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
                { data: "status" },
                { data: "create_at" },
                { data: "time_end" },
                { data: "u_email" },
                { data: "u_phone" },
                { data: "plan_name" },
                { data: "duration_days" },
                { data: "bonus_points" },
                { data: "price" }
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
                    targets: 0, // Cột thứ tư (index 4)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            return '<span title="' + data + '" style="display: inline-block; max-width: 80px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap; color: #6c757d; font-weight: bold;" onmouseover="this.style.maxWidth=\'500px\'; this.style.whiteSpace=\'normal\';" onmouseout="this.style.maxWidth=\'80px\'; this.style.whiteSpace=\'nowrap\';">#' + (meta.row + 1) + ' ' + data + '</span>';
                        }
                        return data;
                    }
                },
                {
                    targets: 1, // Cột thứ tư (index 4)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            let badgeClass = '';
                            let displayText = '';

                            switch (data) {
                                case 'pending':
                                    badgeClass = 'bg-outline-warning';
                                    displayText = 'Pending';
                                    break;
                                case 'approved':
                                    badgeClass = 'bg-outline-success';
                                    displayText = 'Approved';
                                    break;
                                case 'rejected':
                                    badgeClass = 'bg-outline-danger';
                                    displayText = 'Rejected';
                                    break;
                                default:
                                    badgeClass = 'bg-outline-secondary';
                                    displayText = data;
                            }

                            return '<span class="badge ' + badgeClass + '">' + displayText + '</span>';
                        }
                        return data;
                    }
                },
                {
                    targets: 2, // Cột thứ hai (index 1)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            var date = new Date(data * 1000);
                            return '<span style="color: #6c757d; font-weight: bold;">' + date.toLocaleString() + '</span>';
                        }
                        return data;
                    }
                },
                {
                    targets: 8, // Cột thứ ba (index 2)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            // Thêm đơn vị tiền tệ VNĐ với màu sắc
                            let amountHtml = '<span style="color: #6c757d; font-weight: bold;">' + data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + '</span>'; // Trả về số tiền kèm theo đơn vị
                            if (row.status === 'rejected') {
                                amountHtml = '<span style="text-decoration: line-through; color: lightgray;">' + amountHtml + '</span>'; // Thêm gạch ngang nếu trạng thái là rejected
                            }
                            return amountHtml;
                        }
                        return data;
                    }
                },
                {
                    targets: 9, // Cột thứ ba (index 2)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            // Thêm đơn vị tiền tệ VNĐ với màu sắc
                            let amountHtml = '<span style="color: gold; font-weight: bold;">' + data.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".") + ' VNĐ</span>'; // Trả về số tiền kèm theo đơn vị
                            if (row.status === 'rejected') {
                                amountHtml = '<span style="text-decoration: line-through; color: lightgray;">' + amountHtml + '</span>'; // Thêm gạch ngang nếu trạng thái là rejected
                            }
                            return amountHtml;
                        }
                        return data;
                    }
                },
                {
                    targets: 3, // Cột thứ hai (index 1)
                    render: function(data, type, row, meta) {
                        if (type === 'display') {
                            var date = new Date(data * 1000);
                            return '<span style="color: #6c757d; font-weight: bold;">' + date.toLocaleString() + '</span>';
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
            $(this).toggleClass('selected odd');
            // Update the role attribute to reflect the selected state
            $(this).attr('role', 'row');
            // Check/uncheck the checkbox inside the row
            const checkbox = $(this).find('input[type="checkbox"]');
            checkbox.prop('checked', !checkbox.prop('checked'));
        });
        
        // Handle Ctrl+A to select all rows
        $(document).on('keydown', function(e) {
            // Only process if the datatable is in focus/visible
            if ($(tableElement + ':visible').length === 0) {
                return;
            }
            
            // Check if Ctrl+A was pressed (keyCode 65 is 'A')
            if (e.ctrlKey && e.keyCode === 65) {
                // Prevent the default browser "Select All" behavior
                e.preventDefault();
                
                if (!isAllSelected) {
                    // Select all rows when Ctrl+A is pressed the first time
                    $(tableElement + ' tbody tr').addClass('selected odd').attr('role', 'row');
                    $(tableElement + ' tbody tr input[type="checkbox"]').prop('checked', true);
                    isAllSelected = true; // Update state to indicate all are selected
                } else {
                    // Deselect all rows when Ctrl+A is pressed the second time
                    $(tableElement + ' tbody tr').removeClass('selected odd').attr('role', 'row');
                    $(tableElement + ' tbody tr input[type="checkbox"]').prop('checked', false);
                    isAllSelected = false; // Reset state to indicate none are selected
                }
                
                return false;
            }
        });
        
        // Function to get all selected row data (useful for processing)
        window.getSelectedRows = function() {
            const selectedData = [];
            $(tableElement + ' tbody tr.selected').each(function() {
                selectedData.push(tablePending.row(this).data());
            });
            return selectedData;
        };
    }


    function getCheckedBoxes(checkboxName) {
        const checkedBoxes = [];
        $('input[name="' + checkboxName + '"]:checked').each(function() {
            checkedBoxes.push($(this).val());
        });
        return checkedBoxes;
    }


    

    $(document).ready(function() {
        var tablePending = initializeDataTable("#datatableRowsAjax", "<?=set_route_to_link(['jsload','pricing','history_package_purchase'])?>", "checkbox_pending");
        setupSearch("#search-package-history", "#datatableRowsAjax");
        // initializeRowSelection("#datatableRowsAjax");
    });
</script>