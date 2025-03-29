
    // Initialize Preline components
    document.addEventListener('DOMContentLoaded', () => {
        // Initialize all Preline components
        HSStaticMethods.autoInit();
        
        // Initialize specific components if needed
        if (typeof HSOverlay !== 'undefined') {
            HSOverlay.init(document.querySelectorAll('.hs-overlay'));
        }
    });

    // form validation
    document.querySelector('form').addEventListener('submit', function(e) {
                    const inputs = document.querySelectorAll('input[type="number"]');
                    let hasValue = false;
                    
                    inputs.forEach(input => {
                        if (input.value && input.value > 0) {
                            hasValue = true;
                        }
                    });
                    
                    if (!hasValue) {
                        e.preventDefault();
                        document.getElementById('validation-error').classList.remove('hidden');
                        // Scroll to error message
                        document.getElementById('validation-error').scrollIntoView({ behavior: 'smooth', block: 'center' });
                    }
                });

                // Hide error message when user starts typing
                document.querySelectorAll('input[type="number"]').forEach(input => {
                    input.addEventListener('input', function() {
                        document.getElementById('validation-error').classList.add('hidden');
                    });
                });
    const closeButtons = document.querySelectorAll('[data-hs-overlay="#goldCalculatorModal"]');
        closeButtons.forEach(button => {
            button.addEventListener('click', () => {
                const modal = document.querySelector('#goldCalculatorModal');
                modal.classList.add('hidden');
            });
        });
    // Gold prices per gram (in BDT)
    const goldPrices = {
        '22': 13383 * 0.80, // Taking 80% of the original price
        '21': 12774 * 0.80,
        '18': 10949 * 0.80,
        'sonaton': 9028 * 0.80
    };
     // Gold prices per gram (in BDT)
    const silverPrices={
        '22': 221 * 0.80, // Taking 80% of the original price
        '21': 210 * 0.80,
        '18': 181 * 0.80,
        'sonaton': 136 * 0.80
    };
    let currentMetalType = 'gold';
    
    function setMetalType(metalType) {
        currentMetalType = metalType;
        const modalTitle = document.querySelector('#goldCalculatorModal-modalTitle');
        const totalValueText = document.getElementById('totalValueText');
        
        if (metalType === 'gold') {
            modalTitle.textContent = 'স্বর্ণের বর্তমান বাজার মূল্য';
            totalValueText.innerHTML = 'আপনার মালিকানাধীন মোট স্বর্ণের বর্তমান বিক্রয় মূল্য: ৳<span id="totalValue">0</span> (টাকা)';
        } else {
            modalTitle.textContent = 'রূপার বর্তমান বাজার মূল্য';
            totalValueText.innerHTML = 'আপনার মালিকানাধীন মোট রূপার বর্তমান বিক্রয় মূল্য: ৳<span id="totalValue">0</span> (টাকা)';
        }
        calculateTotal();
    }
    
    document.getElementById('addOrnamentBtn').addEventListener('click', function() {
        const ornamentsList = document.getElementById('ornamentsList');
        const newRow = document.querySelector('.ornament-row').cloneNode(true);
        
        newRow.querySelector('.ornament-name').value = '';
        newRow.querySelector('.ornament-weight').value = '';
        
        addRowEventListeners(newRow);
        ornamentsList.appendChild(newRow);
        calculateTotal();
    });
    
    function addRowEventListeners(row) {
        row.querySelector('.delete-ornament').addEventListener('click', function() {
            if (document.querySelectorAll('.ornament-row').length > 1) {
                row.remove();
                calculateTotal();
            }
        });
        
        row.querySelector('.ornament-weight').addEventListener('input', calculateTotal);
        row.querySelector('.ornament-carat').addEventListener('change', calculateTotal);
    }
    
    function calculateTotal() {
        let total = 0;
        const rows = document.querySelectorAll('.ornament-row');
        
        rows.forEach(row => {
            const weight = parseFloat(row.querySelector('.ornament-weight').value) || 0;
            const carat = row.querySelector('.ornament-carat')?.value;
            
            if (currentMetalType === 'gold') {
                total += weight * goldPrices[carat];
            } else {
                total += weight * silverPrices[carat];
            }
        });
        
        document.getElementById('totalValue').textContent = total.toLocaleString();
        return Math.round(total);
    }
    
    document.getElementById('confirmGoldValue').addEventListener('click', function() {
        const total = calculateTotal();
        const inputField = currentMetalType === 'gold' ? 
            document.querySelector('input[name="gold_value"]') : 
            document.querySelector('input[name="silver_value"]');
        
        inputField.value = total;
        HSOverlay.close(document.getElementById('goldCalculatorModal'));
    });
    
    document.addEventListener('DOMContentLoaded', function() {
        const firstRow = document.querySelector('.ornament-row');
        addRowEventListeners(firstRow);
    });

    // handle select change in modal dynamically
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize Preline Select
        HSSelect.init('.ornament-carat-btn');

        // Handle select change
        document.querySelectorAll('.hs-select-option').forEach(option => {
            option.addEventListener('click', function() {
                const value = this.dataset.value;
                const row = this.closest('.ornament-row');
                const hiddenInput = row.querySelector('.ornament-carat');
                hiddenInput.value = value;
                calculateTotal();
            });
        });
    });
