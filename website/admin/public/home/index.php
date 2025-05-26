<div class="row">
    <div class="col-12">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h2 class="small-title">Stats</h2>
            <div class="d-flex gap-2">
                <div class="input-group">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                            <path d="M7 2v4"></path>
                            <path d="M17 2v4"></path>
                            <path d="M8 14h.01"></path>
                            <path d="M12 14h.01"></path>
                            <path d="M16 14h.01"></path>
                            <path d="M8 18h.01"></path>
                            <path d="M12 18h.01"></path>
                            <path d="M16 18h.01"></path>
                        </svg>
                    </span>
                    <select class="form-select" id="dateRangeSelect">
                        <option value="">Select</option>
                        <option value="today">Today</option>
                        <option value="7days">7 days</option>
                        <option value="1month">1 month</option>
                        <option value="2months">2 months</option>
                        <option value="3months">3 months</option>
                        <option value="4months">4 months</option>
                        <option value="5months">5 months</option>
                        <option value="6months">6 months</option>
                        <option value="7months">7 months</option>
                        <option value="8months">8 months</option>
                        <option value="9months">9 months</option>
                        <option value="10months">10 months</option>
                        <option value="11months">11 months</option>
                        <option value="1year">1 year</option>
                    </select>
                </div>
                <div class="input-group">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                        </svg>
                    </span>
                    <input type="date" class="form-control" id="startDate" placeholder="Start date">
                </div>
                
                <div class="input-group">
                    <span class="input-group-text">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                            <line x1="16" y1="2" x2="16" y2="6"></line>
                            <line x1="8" y1="2" x2="8" y2="6"></line>
                            <line x1="3" y1="10" x2="21" y2="10"></line>
                            <circle cx="8" cy="16" r="2"></circle>
                        </svg>
                    </span>
                    <input type="date" class="form-control" id="endDate" placeholder="End date">
                </div>
                <button class="btn btn-outline-primary" type="button">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="me-1">
                        <circle cx="11" cy="11" r="8"></circle>
                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                        <line x1="8" y1="11" x2="14" y2="11"></line>
                    </svg>
                    Filter
                </button>
            </div>
            <script>
                // Set default date range to last 30 days with Vietnamese format
                document.addEventListener('DOMContentLoaded', function() {
                    const endDate = new Date();
                    endDate.setDate(endDate.getDate() + 2); // End date is current date + 2 days
                    const startDate = new Date();
                    startDate.setDate(endDate.getDate() - 32); // Start date is 30 days before the end date
                    
                    document.getElementById('endDate').valueAsDate = endDate;
                    document.getElementById('startDate').valueAsDate = startDate;
                    
                    // Format dates in Vietnamese style (dd/mm/yyyy) for display if needed
                    const formatDateVN = (date) => {
                        const day = date.getDate().toString().padStart(2, '0');
                        const month = (date.getMonth() + 1).toString().padStart(2, '0');
                        const year = date.getFullYear();
                        return `${day}/${month}/${year}`;
                    };
                    
                    // You can use these formatted dates if needed elsewhere
                    const startDateVN = formatDateVN(startDate);
                    const endDateVN = formatDateVN(endDate);
                    
                    // Ensure start date is not greater than end date and not earlier than 2025
                    document.getElementById('startDate').addEventListener('change', function() {
                        const startDate = new Date(this.value);
                        const endDate = new Date(document.getElementById('endDate').value);
                        const currentDate = new Date();
                        
                        // Check if start date is greater than current date
                        if (startDate > currentDate) {
                            // Reset to current date
                            this.valueAsDate = currentDate;
                            startDate.setTime(currentDate.getTime());
                        }
                        
                        // Check if year is less than 2025
                        if (startDate.getFullYear() < 2025) {
                            // Set to January 1st, 2025
                            const minDate = new Date(2025, 0, 1);
                            this.valueAsDate = minDate;
                            startDate.setTime(minDate.getTime());
                        }
                        
                        if (startDate > endDate) {
                            // If start date is greater than end date, set end date to current date + 2 days
                            const newEndDate = new Date();
                            newEndDate.setDate(newEndDate.getDate() + 2);
                            document.getElementById('endDate').valueAsDate = newEndDate;
                        }
                    });
                    
                    // Check when end date changes
                    document.getElementById('endDate').addEventListener('change', function() {
                        const endDate = new Date(this.value);
                        const startDate = new Date(document.getElementById('startDate').value);
                        const currentDate = new Date();
                        const maxDate = new Date();
                        maxDate.setDate(currentDate.getDate() + 2); // End date can be at most current date + 2 days
                        
                        // If end date is greater than current date + 2 days, reset to current date + 2 days
                        if (endDate > maxDate) {
                            this.valueAsDate = maxDate;
                            endDate.setTime(maxDate.getTime());
                        }
                        
                        if (startDate > endDate) {
                            // If start date is greater than end date, set start date equal to end date
                            document.getElementById('startDate').valueAsDate = endDate;
                        }
                    });
                    
                    // Handle date range select change
                    document.getElementById('dateRangeSelect').addEventListener('change', function() {
                        const currentDate = new Date();
                        const endDate = new Date();
                        endDate.setDate(currentDate.getDate() + 2); // End date is current date + 2 days
                        let startDate = new Date();
                        
                        // Set start date based on selection
                        switch(this.value) {
                            case 'today':
                                startDate = new Date(currentDate);
                                break;
                            case '7days':
                                startDate.setDate(endDate.getDate() - 7);
                                break;
                            case '1month':
                                startDate.setMonth(endDate.getMonth() - 1);
                                break;
                            case '2months':
                                startDate.setMonth(endDate.getMonth() - 2);
                                break;
                            case '3months':
                                startDate.setMonth(endDate.getMonth() - 3);
                                break;
                            case '4months':
                                startDate.setMonth(endDate.getMonth() - 4);
                                break;
                            case '5months':
                                startDate.setMonth(endDate.getMonth() - 5);
                                break;
                            case '6months':
                                startDate.setMonth(endDate.getMonth() - 6);
                                break;
                            case '7months':
                                startDate.setMonth(endDate.getMonth() - 7);
                                break;
                            case '8months':
                                startDate.setMonth(endDate.getMonth() - 8);
                                break;
                            case '9months':
                                startDate.setMonth(endDate.getMonth() - 9);
                                break;
                            case '10months':
                                startDate.setMonth(endDate.getMonth() - 10);
                                break;
                            case '11months':
                                startDate.setMonth(endDate.getMonth() - 11);
                                break;
                            case '1year':
                                startDate.setFullYear(endDate.getFullYear() - 1);
                                break;
                            default:
                                startDate.setDate(endDate.getDate() - 32); // Default to 30 days
                        }
                        
                        // Check if start date is earlier than 2025
                        if (startDate.getFullYear() < 2025) {
                            startDate = new Date(2025, 0, 1);
                        }
                        
                        // Update date inputs
                        document.getElementById('startDate').valueAsDate = startDate;
                        document.getElementById('endDate').valueAsDate = endDate;
                    });
                });
            </script>
        </div>
        <div class="mb-5">
            <div class="row g-2">
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-wallet text-primary">
                                    <path d="M14.5 5H5.5C4.09554 5 3.39331 5 2.88886 5.33706C2.67048 5.48298 2.48298 5.67048 2.33706 5.88886C2 6.39331 2 7.09554 2 8.5V14.5C2 15.9045 2 16.6067 2.33706 17.1111C2.48298 17.3295 2.67048 17.517 2.88886 17.6629C3.39331 18 4.09554 18 5.5 18H14.5C15.9045 18 16.6067 18 17.1111 17.6629C17.3295 17.517 17.517 17.3295 17.6629 17.1111C18 16.6067 18 15.9045 18 14.5V8.5C18 7.09554 18 6.39331 17.6629 5.88886C17.517 5.67048 17.3295 5.48298 17.1111 5.33706C16.6067 5 15.9045 5 14.5 5Z"></path>
                                    <path d="M14 2L14 5"></path>
                                    <path d="M6 2L6 5"></path>
                                    <path d="M14.5 11H17.5"></path>
                                    <path d="M13 14H15"></path>
                                </svg>
                            </div>
                            <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">Total deposit amount</div>
                            <div class="text-primary cta-4" id="total-deposit-amount">$ 0</div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-6 col-md-4 col-lg-3">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-arrow-double-top text-primary">
                                    <path d="M10 3 10 17M10 3 14 7M10 3 6 7"></path>
                                    <path d="M10 9 14 13M10 9 6 13"></path>
                                </svg>
                            </div>
                            <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">Withdrawable balance</div>
                            <div class="text-primary cta-4" id="withdrawable-balance">$ 875.30</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-cart text-primary">
                                    <path d="M1 2H3.5L5.5 14H17M6.07 6H18L16 12H6.855M8 18C8 18.5523 7.55228 19 7 19C6.44772 19 6 18.5523 6 18C6 17.4477 6.44772 17 7 17C7.55228 17 8 17.4477 8 18ZM16 18C16 18.5523 15.5523 19 15 19C14.4477 19 14 18.5523 14 18C14 17.4477 14.4477 17 15 17C15.5523 17 16 17.4477 16 18Z"></path>
                                </svg>
                            </div>
                            <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">Amount used</div>
                            <div class="text-primary cta-4" id="amount-used">$ 374.70</div>
                        </div>
                    </div>
                </div> -->
                
                <!-- <div class="col-6 col-md-4 col-lg-3">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-user text-primary">
                                    <path d="M10.0179 8C10.9661 8 11.4402 8 11.8802 7.76629C12.1434 7.62648 12.4736 7.32023 12.6328 7.06826C12.8989 6.64708 12.9256 6.29324 12.9789 5.58557C13.0082 5.19763 13.0071 4.81594 12.9751 4.42106C12.9175 3.70801 12.8887 3.35148 12.6289 2.93726C12.4653 2.67644 12.1305 2.36765 11.8573 2.2256C11.4235 2 10.9533 2 10.0129 2V2C9.03627 2 8.54794 2 8.1082 2.23338C7.82774 2.38223 7.49696 2.6954 7.33302 2.96731C7.07596 3.39365 7.05506 3.77571 7.01326 4.53982C6.99635 4.84898 6.99567 5.15116 7.01092 5.45586C7.04931 6.22283 7.06851 6.60631 7.33198 7.03942C7.4922 7.30281 7.8169 7.61166 8.08797 7.75851C8.53371 8 9.02845 8 10.0179 8V8Z"></path>
                                    <path d="M16.5 17.5L16.583 16.6152C16.7267 15.082 16.7986 14.3154 16.2254 13.2504C16.0456 12.9164 15.5292 12.2901 15.2356 12.0499C14.2994 11.2842 13.7598 11.231 12.6805 11.1245C11.9049 11.048 11.0142 11 10 11C8.98584 11 8.09511 11.048 7.31945 11.1245C6.24021 11.231 5.70059 11.2842 4.76443 12.0499C4.47077 12.2901 3.95441 12.9164 3.77462 13.2504C3.20144 14.3154 3.27331 15.082 3.41705 16.6152L3.5 17.5"></path>
                                </svg>
                            </div>
                            <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">TIER 1</div>
                            <div class="text-primary cta-4" id="tier-1">42</div>
                        </div>
                    </div>
                </div> -->
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-user text-primary">
                                    <path d="M10.0179 8C10.9661 8 11.4402 8 11.8802 7.76629C12.1434 7.62648 12.4736 7.32023 12.6328 7.06826C12.8989 6.64708 12.9256 6.29324 12.9789 5.58557C13.0082 5.19763 13.0071 4.81594 12.9751 4.42106C12.9175 3.70801 12.8887 3.35148 12.6289 2.93726C12.4653 2.67644 12.1305 2.36765 11.8573 2.2256C11.4235 2 10.9533 2 10.0129 2V2C9.03627 2 8.54794 2 8.1082 2.23338C7.82774 2.38223 7.49696 2.6954 7.33302 2.96731C7.07596 3.39365 7.05506 3.77571 7.01326 4.53982C6.99635 4.84898 6.99567 5.15116 7.01092 5.45586C7.04931 6.22283 7.06851 6.60631 7.33198 7.03942C7.4922 7.30281 7.8169 7.61166 8.08797 7.75851C8.53371 8 9.02845 8 10.0179 8V8Z"></path>
                                    <path d="M16.5 17.5L16.583 16.6152C16.7267 15.082 16.7986 14.3154 16.2254 13.2504C16.0456 12.9164 15.5292 12.2901 15.2356 12.0499C14.2994 11.2842 13.7598 11.231 12.6805 11.1245C11.9049 11.048 11.0142 11 10 11C8.98584 11 8.09511 11.048 7.31945 11.1245C6.24021 11.231 5.70059 11.2842 4.76443 12.0499C4.47077 12.2901 3.95441 12.9164 3.77462 13.2504C3.20144 14.3154 3.27331 15.082 3.41705 16.6152L3.5 17.5"></path>
                                </svg>
                            </div>
                            <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">TIER 2</div>
                            <div class="text-primary cta-4" id="tier-2">0</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-user text-primary">
                                    <path d="M10.0179 8C10.9661 8 11.4402 8 11.8802 7.76629C12.1434 7.62648 12.4736 7.32023 12.6328 7.06826C12.8989 6.64708 12.9256 6.29324 12.9789 5.58557C13.0082 5.19763 13.0071 4.81594 12.9751 4.42106C12.9175 3.70801 12.8887 3.35148 12.6289 2.93726C12.4653 2.67644 12.1305 2.36765 11.8573 2.2256C11.4235 2 10.9533 2 10.0129 2V2C9.03627 2 8.54794 2 8.1082 2.23338C7.82774 2.38223 7.49696 2.6954 7.33302 2.96731C7.07596 3.39365 7.05506 3.77571 7.01326 4.53982C6.99635 4.84898 6.99567 5.15116 7.01092 5.45586C7.04931 6.22283 7.06851 6.60631 7.33198 7.03942C7.4922 7.30281 7.8169 7.61166 8.08797 7.75851C8.53371 8 9.02845 8 10.0179 8V8Z"></path>
                                    <path d="M16.5 17.5L16.583 16.6152C16.7267 15.082 16.7986 14.3154 16.2254 13.2504C16.0456 12.9164 15.5292 12.2901 15.2356 12.0499C14.2994 11.2842 13.7598 11.231 12.6805 11.1245C11.9049 11.048 11.0142 11 10 11C8.98584 11 8.09511 11.048 7.31945 11.1245C6.24021 11.231 5.70059 11.2842 4.76443 12.0499C4.47077 12.2901 3.95441 12.9164 3.77462 13.2504C3.20144 14.3154 3.27331 15.082 3.41705 16.6152L3.5 17.5"></path>
                                </svg>
                            </div>
                            <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">TIER 3</div>
                            <div class="text-primary cta-4" id="tier-3">0</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-user text-primary">
                                    <path d="M10.0179 8C10.9661 8 11.4402 8 11.8802 7.76629C12.1434 7.62648 12.4736 7.32023 12.6328 7.06826C12.8989 6.64708 12.9256 6.29324 12.9789 5.58557C13.0082 5.19763 13.0071 4.81594 12.9751 4.42106C12.9175 3.70801 12.8887 3.35148 12.6289 2.93726C12.4653 2.67644 12.1305 2.36765 11.8573 2.2256C11.4235 2 10.9533 2 10.0129 2V2C9.03627 2 8.54794 2 8.1082 2.23338C7.82774 2.38223 7.49696 2.6954 7.33302 2.96731C7.07596 3.39365 7.05506 3.77571 7.01326 4.53982C6.99635 4.84898 6.99567 5.15116 7.01092 5.45586C7.04931 6.22283 7.06851 6.60631 7.33198 7.03942C7.4922 7.30281 7.8169 7.61166 8.08797 7.75851C8.53371 8 9.02845 8 10.0179 8V8Z"></path>
                                    <path d="M16.5 17.5L16.583 16.6152C16.7267 15.082 16.7986 14.3154 16.2254 13.2504C16.0456 12.9164 15.5292 12.2901 15.2356 12.0499C14.2994 11.2842 13.7598 11.231 12.6805 11.1245C11.9049 11.048 11.0142 11 10 11C8.98584 11 8.09511 11.048 7.31945 11.1245C6.24021 11.231 5.70059 11.2842 4.76443 12.0499C4.47077 12.2901 3.95441 12.9164 3.77462 13.2504C3.20144 14.3154 3.27331 15.082 3.41705 16.6152L3.5 17.5"></path>
                                </svg>
                            </div>
                            <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">TOTAL USERS</div>
                            <div class="text-primary cta-4" id="total-users">0</div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-6 col-md-4 col-lg-3">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-package text-primary">
                                    <path d="M14 14V16.5C14 16.7761 13.7761 17 13.5 17H3.5C3.22386 17 3 16.7761 3 16.5V7.5C3 7.22386 3.22386 7 3.5 7H5"></path>
                                    <path d="M14.5 3H8.5C8.22386 3 8 3.22386 8 3.5V12.5C8 12.7761 8.22386 13 8.5 13H14.5C14.7761 13 15 12.7761 15 12.5V3.5C15 3.22386 14.7761 3 14.5 3Z"></path>
                                </svg>
                            </div>
                            <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">BASIC PLAN</div>
                            <div class="text-primary cta-4" id="basic-plan">32</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-package text-primary">
                                    <path d="M14 14V16.5C14 16.7761 13.7761 17 13.5 17H3.5C3.22386 17 3 16.7761 3 16.5V7.5C3 7.22386 3.22386 7 3.5 7H5"></path>
                                    <path d="M14.5 3H8.5C8.22386 3 8 3.22386 8 3.5V12.5C8 12.7761 8.22386 13 8.5 13H14.5C14.7761 13 15 12.7761 15 12.5V3.5C15 3.22386 14.7761 3 14.5 3Z"></path>
                                </svg>
                            </div>
                            <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">PRO PLAN</div>
                            <div class="text-primary cta-4" id="pro-plan">24</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-package text-primary">
                                    <path d="M14 14V16.5C14 16.7761 13.7761 17 13.5 17H3.5C3.22386 17 3 16.7761 3 16.5V7.5C3 7.22386 3.22386 7 3.5 7H5"></path>
                                    <path d="M14.5 3H8.5C8.22386 3 8 3.22386 8 3.5V12.5C8 12.7761 8.22386 13 8.5 13H14.5C14.7761 13 15 12.7761 15 12.5V3.5C15 3.22386 14.7761 3 14.5 3Z"></path>
                                </svg>
                            </div>
                            <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">ENTERPRISE PLAN</div>
                            <div class="text-primary cta-4" id="enterprise-plan">18</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-check text-primary">
                                    <path d="M16 5L7.7051 14.2166C7.32183 14.6424 6.65982 14.6598 6.2547 14.2547L3 11"></path>
                                </svg>
                            </div>
                            <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">ACTIVE TIER 2</div>
                            <div class="text-primary cta-4" id="active-tier-2">21</div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-3">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                        <div class="card-body d-flex flex-column align-items-center">
                            <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-check text-primary">
                                    <path d="M16 5L7.7051 14.2166C7.32183 14.6424 6.65982 14.6598 6.2547 14.2547L3 11"></path>
                                </svg>
                            </div>
                            <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">ACTIVE TIER 3</div>
                            <div class="text-primary cta-4" id="active-tier-3">21</div>
                        </div>
                    </div>
                </div> -->
                
            </div>
        </div>
    </div>
</div>










<div class="card mb-5 shadow-sm">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="page-title-container">
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <h1 class="mb-0 pb-0 display-4" id="title">Package Purchase History</h1>
                        </div>
                    </div>
                </div>
                <div class="data-table-rows slim">
                    <div class="row">
                        <div class="col-sm-12 col-md-5 col-lg-3 col-xxl-2 mb-1">
                            <div class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 shadow bg-foreground">
                                <input class="form-control datatable-search" placeholder="Search" id="search-package-history">
                                <span class="search-magnifier-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-search undefined"><circle cx="9" cy="9" r="7"></circle><path d="M14 14L17.5 17.5"></path></svg>
                                </span>
                                <span class="search-delete-icon d-none">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="acorn-icons acorn-icons-close undefined"><path d="M5 5 15 15M15 5 5 15"></path></svg>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="data-table-responsive-wrapper">
                        <table id="datatableRowsAjax" class="data-table nowrap w-100">
                            <thead>
                                <tr>
                                    <th class="text-muted text-small text-uppercase">ID</th>
                                    <th class="text-muted text-small text-uppercase">status</th>
                                    <th class="text-muted text-small text-uppercase">Time create</th>
                                    <th class="text-muted text-small text-uppercase">Time expired</th>
                                    <th class="text-muted text-small text-uppercase">Email</th>
                                    <th class="text-muted text-small text-uppercase">Phone</th>
                                    <th class="text-muted text-small text-uppercase">plan_name</th>
                                    <th class="text-muted text-small text-uppercase">duration_days</th>
                                    <th class="text-muted text-small text-uppercase">bonus_points</th>
                                    <th class="text-muted text-small text-uppercase">price</th>
                                    
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>