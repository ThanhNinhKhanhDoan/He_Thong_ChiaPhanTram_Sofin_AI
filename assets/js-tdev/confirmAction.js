/**
 * MathVerification - A class to handle math verification modals
 * Requires Bootstrap, uses Promises for async support
 */
class MathVerification {
    /**
     * Create a new math verification instance
     * @param {Object} options - Configuration options
     */
    constructor(options = {}) {
        // Default options
        this.options = {
            title: 'Confirm Action',
            message: 'Please solve the following question to confirm your action:',
            cancelBtnText: 'Cancel',
            confirmBtnText: 'Confirm',
            modalClass: '',
            ...options
        };
        
        // Check dependencies
        if (!this.checkDependencies()) {
            throw new Error('Bootstrap Modal is required for MathVerification');
        }
        
        // Generate unique IDs for elements
        this.uniqueId = 'math_' + Math.random().toString(36).substring(2, 10);
        this.modalId = `modal_${this.uniqueId}`;
        this.questionId = `question_${this.uniqueId}`;
        this.answerId = `answer_${this.uniqueId}`;
        this.confirmBtnId = `confirm_${this.uniqueId}`;
        this.cancelBtnId = `cancel_${this.uniqueId}`;
        this.styleId = `style_${this.uniqueId}`;
        this.containerId = `container_${this.uniqueId}`;
        
        // Internal state
        this.correctAnswer = null;
        this.modal = null;
        this.elements = {};
        this.previousActiveElement = null; // Store element that had focus before modal
        
        // Bound event handlers (define once to avoid memory leaks)
        this._checkAnswerHandler = null;
        this._keyPressHandler = null;
        this._modalHiddenHandler = null;
        this._cancelHandler = null;
        this._closeHandler = null;
    }
    
    /**
     * Check if Bootstrap is available
     * @private
     * @returns {boolean} True if dependencies are met
     */
    checkDependencies() {
        return typeof bootstrap !== 'undefined' && typeof bootstrap.Modal !== 'undefined';
    }
    
    /**
     * Show the math verification modal
     * @returns {Promise<boolean>} Promise resolving to true if verified, false if canceled
     */
    show() {
        return new Promise((resolve, reject) => {
            try {
                // Store the currently focused element to restore later
                this.previousActiveElement = document.activeElement;
                
                // Create elements
                this.createElements();
                
                // Store references to DOM elements
                this.elements = {
                    modal: document.getElementById(this.modalId),
                    question: document.getElementById(this.questionId),
                    answer: document.getElementById(this.answerId),
                    confirmBtn: document.getElementById(this.confirmBtnId),
                    cancelBtn: document.getElementById(this.cancelBtnId),
                    closeBtn: document.querySelector(`#${this.modalId} .btn-close`),
                    container: document.getElementById(this.containerId)
                };
                
                // Verify elements exist
                if (!this.elements.modal || !this.elements.question || 
                    !this.elements.answer || !this.elements.confirmBtn ||
                    !this.elements.cancelBtn || !this.elements.closeBtn) {
                    throw new Error('Modal elements not created properly');
                }
                
                // Create Bootstrap modal
                try {
                    this.modal = new bootstrap.Modal(this.elements.modal, {
                        backdrop: 'static', // Prevent closing when clicking outside
                        keyboard: true      // Allow closing with Escape key for better UX
                    });
                } catch (error) {
                    console.error('Error creating Bootstrap modal:', error);
                    this.cleanup(); // Clean up on error
                    reject(error);
                    return;
                }
                
                // Generate question
                this.generateQuestion();
                
                // Set up event handlers with resolve function
                this.setupEventHandlers(resolve);
                
                // Show modal
                try {
                    this.modal.show();
                    
                    // Set focus to the answer input after modal is shown
                    setTimeout(() => {
                        if (this.elements.answer) {
                            this.elements.answer.focus();
                        }
                    }, 150);
                } catch (error) {
                    console.error('Error showing modal:', error);
                    this.cleanup(); // Clean up on error
                    reject(error);
                }
            } catch (error) {
                console.error('Error in math verification:', error);
                this.cleanup(); // Make sure to clean up on error
                reject(error);
            }
        });
    }
    
    /**
     * Create modal elements and append to document
     * @private
     */
    createElements() {
        // Create container for the modal
        const container = document.createElement('div');
        container.id = this.containerId;
        
        // Create CSS
        const styleEl = document.createElement('style');
        styleEl.id = this.styleId;
        styleEl.textContent = `
            @keyframes shake_${this.uniqueId} {
                0%, 100% { transform: translateX(0); }
                10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
                20%, 40%, 60%, 80% { transform: translateX(5px); }
            }
            .shake_${this.uniqueId} {
                animation: shake_${this.uniqueId} 0.5s;
            }
            .error_${this.uniqueId} {
                border: 2px solid #dc3545 !important;
                box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25) !important;
            }
        `;
        document.head.appendChild(styleEl);
        
        // Create modal HTML with appropriate ARIA attributes
        container.innerHTML = `
            <div class="modal fade ${this.options.modalClass}" id="${this.modalId}" tabindex="-1" aria-labelledby="${this.modalId}-title" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="${this.modalId}-title">${this.options.title}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <p>${this.options.message}</p>
                            <p id="${this.questionId}" class="fs-4 text-center my-3" aria-live="polite"></p>
                            <div class="form-group">
                                <label for="${this.answerId}" class="visually-hidden">Your answer</label>
                                <input type="number" id="${this.answerId}" class="form-control" 
                                       placeholder="Your answer" aria-describedby="${this.questionId}">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="${this.cancelBtnId}" class="btn btn-secondary" data-bs-dismiss="modal">${this.options.cancelBtnText}</button>
                            <button type="button" id="${this.confirmBtnId}" class="btn btn-primary">${this.options.confirmBtnText}</button>
                        </div>
                    </div>
                </div>
            </div>
        `;
        document.body.appendChild(container);
    }
    
    /**
     * Generate a random math question
     * @private
     */
    generateQuestion() {
        const num1 = Math.floor(Math.random() * 10);
        const num2 = Math.floor(Math.random() * 10);
        
        // Randomly choose between addition and subtraction
        const isAddition = Math.random() < 0.5;
        
        if (isAddition) {
            this.elements.question.textContent = `${num1} + ${num2} = ?`;
            this.correctAnswer = num1 + num2;
        } else {
            const larger = Math.max(num1, num2);
            const smaller = Math.min(num1, num2);
            this.elements.question.textContent = `${larger} - ${smaller} = ?`;
            this.correctAnswer = larger - smaller;
        }
        
        this.elements.answer.value = '';
        this.elements.answer.classList.remove(`error_${this.uniqueId}`);
    }
    
    /**
     * Set up event handlers for the modal
     * @param {Function} resolve - Promise resolve function
     * @private
     */
    setupEventHandlers(resolve) {
        // Create bound methods for event handlers
        this._checkAnswerHandler = () => this.checkAnswer(resolve);
        
        this._keyPressHandler = (e) => {
            if (e.key === 'Enter') {
                this.checkAnswer(resolve);
            }
        };
        
        this._modalHiddenHandler = () => {
            this.cleanup();
            // Restore focus to the previous element
            if (this.previousActiveElement && this.previousActiveElement.focus) {
                this.previousActiveElement.focus();
            }
            resolve(false); // Modal dismissed, resolve with false
        };
        
        this._cancelHandler = () => {
            // Just triggers the built-in Bootstrap dismiss
            // The hidden.bs.modal event will handle the resolve(false)
        };
        
        this._closeHandler = () => {
            // Just triggers the built-in Bootstrap dismiss
            // The hidden.bs.modal event will handle the resolve(false)
        };
        
        // Add event listeners
        this.elements.confirmBtn.addEventListener('click', this._checkAnswerHandler);
        this.elements.answer.addEventListener('keypress', this._keyPressHandler);
        this.elements.modal.addEventListener('hidden.bs.modal', this._modalHiddenHandler);
        this.elements.cancelBtn.addEventListener('click', this._cancelHandler);
        this.elements.closeBtn.addEventListener('click', this._closeHandler);
    }
    
    /**
     * Check the user's answer
     * @param {Function} resolve - Promise resolve function
     * @private
     */
    checkAnswer(resolve) {
        const userInput = this.elements.answer.value.trim();
        
        // Check for empty input
        if (!userInput) {
            this.elements.answer.classList.add(`error_${this.uniqueId}`);
            return;
        }
        
        const userAnswer = parseInt(userInput, 10);
        
        // Check for invalid input
        if (isNaN(userAnswer)) {
            this.elements.answer.classList.add(`error_${this.uniqueId}`);
            return;
        }
        
        if (userAnswer === this.correctAnswer) {
            // Correct answer - clear focus before hiding modal
            this.elements.answer.blur();
            this.elements.confirmBtn.blur();
            
            // Hide modal
            this.modal.hide();
            
            // Clean up and resolve promise with true
            this.cleanup();
            
            // Restore focus
            if (this.previousActiveElement && this.previousActiveElement.focus) {
                setTimeout(() => {
                    this.previousActiveElement.focus();
                }, 100);
            }
            
            resolve(true); // Verification successful
        } else {
            // Incorrect answer
            this.handleIncorrectAnswer();
        }
    }
    
    /**
     * Handle incorrect answer input
     * @private
     */
    handleIncorrectAnswer() {
        this.elements.answer.classList.add(`error_${this.uniqueId}`, `shake_${this.uniqueId}`);
        
        // Set a timeout to remove the shake animation
        setTimeout(() => {
            if (this.elements.answer) {
                this.elements.answer.classList.remove(`shake_${this.uniqueId}`);
                // Set another timeout to remove the error styling and generate a new question
                setTimeout(() => {
                    if (this.elements.answer) {
                        this.elements.answer.classList.remove(`error_${this.uniqueId}`);
                        this.generateQuestion();
                        // Re-focus on the answer input
                        this.elements.answer.focus();
                    }
                }, 300);
            }
        }, 500);
    }
    
    /**
     * Clean up resources
     * @private
     */
    cleanup() {
        // Remove event listeners if elements still exist
        if (this.elements.confirmBtn && this._checkAnswerHandler) {
            this.elements.confirmBtn.removeEventListener('click', this._checkAnswerHandler);
        }
        
        if (this.elements.answer && this._keyPressHandler) {
            this.elements.answer.removeEventListener('keypress', this._keyPressHandler);
        }
        
        if (this.elements.modal && this._modalHiddenHandler) {
            this.elements.modal.removeEventListener('hidden.bs.modal', this._modalHiddenHandler);
        }
        
        if (this.elements.cancelBtn && this._cancelHandler) {
            this.elements.cancelBtn.removeEventListener('click', this._cancelHandler);
        }
        
        if (this.elements.closeBtn && this._closeHandler) {
            this.elements.closeBtn.removeEventListener('click', this._closeHandler);
        }
        
        // Remove elements
        const styleEl = document.getElementById(this.styleId);
        if (styleEl) styleEl.remove();
        
        const container = document.getElementById(this.containerId);
        if (container) container.remove();
        
        // Clear references
        this.modal = null;
        this.elements = {};
        this._checkAnswerHandler = null;
        this._keyPressHandler = null;
        this._modalHiddenHandler = null;
        this._cancelHandler = null;
        this._closeHandler = null;
    }
}

// Function to delete an item with confirmation
async function confirmAction() {   
    try {
        const customVerifier = new MathVerification({
            title: 'Action Confirmation',
            message: 'Please confirm your action to avoid unintentional submissions. Solve the following question to proceed:',
            confirmBtnText: 'Proceed',
            cancelBtnText: 'Cancel',
            modalClass: 'danger-modal'
        }); 
        const result = await customVerifier.show();
        if (result) {
            // console.log("Delete confirmed!");
            return true;
        } else {
            // console.log("Delete canceled");
            return false;
        }
    } catch (error) {
        // console.error("Error in delete confirmation:", error);
        return false;
    }
}

// hàm ví dụ về cách sử dụng confirmAction
// function initializeDeleteConfirmation() {
//     document.addEventListener('DOMContentLoaded', async function() {
//         const confirmed = await confirmAction();
//         if (!confirmed) {
//             // Perform actual delete operation
//             console.log("not deleted!");
//         } else {
//             console.log("deleted!");
//         }

//         console.log("DOM fully loaded and ready");
//     });
// }

// initializeDeleteConfirmation();