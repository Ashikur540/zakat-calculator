<!-- Calculator section -->
<section class="mb-10 lg:mb-18" id="zakat-calculator-section">
    <div class="container mx-auto px-4">
        <form action="calculator-step-2.php" method="POST" class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow">
            <div class="text-center mb-6">
                <h2 class="text-xl font-semibold mb-2">যাকাতযোগ্য সম্পদ (1)</h2>
                <p class="text-sm text-gray-600">[যাকাতের হিসাব নির্ণয়ে প্রয়োজনীয় তথ্য প্রদান করুন]</p>
            </div>

            <div class="space-y-4">
                <div class="relative">
                    <label for="gold_value" class="block mb-2 text-sm">১.আপনার মালিকানাধীন মোট স্বর্ণের মূল্য (যদি থাকে)</label>
                    <div class="relative">
                        <input type="number" id="gold_value" name="gold_value" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                            <span class="text-gray-500">৳</span>
                        </div>
                        <button type="button" data-hs-overlay="#goldCalculatorModal" onclick="setMetalType('gold')" class="absolute right-3 top-1/2 -translate-y-1/2 bg-green-600 text-white text-xs px-3 py-1 rounded">যাকাতের মূল্য নির্ণয় করতে এখানে ক্লিক করুন</button>
                    </div>
                </div>

                <div class="relative">
                    <label for="silver_value" class="block mb-2 text-sm">২. আপনার মালিকানাধীন মোট রূপার মূল্য (যদি থাকে)</label>
                    <div class="relative">
                        <input type="number" id="silver_value" name="silver_value" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                            <span class="text-gray-500">৳</span>
                        </div>
                        <button type="button" data-hs-overlay="#goldCalculatorModal" onclick="setMetalType('silver')" class="absolute right-3 top-1/2 -translate-y-1/2 bg-green-600 text-white text-xs px-3 py-1 rounded">যাকাতের মূল্য নির্ণয় করতে এখানে ক্লিক করুন</button>
                    </div>
                </div>

                <div>
                    <label for="cash" class="block mb-2 text-sm">৩. নিজের কাছে রাখা নগদ অর্থ (সেটা যে উদ্দেশ্যেই রাখা হোক না কেন, যেমন: হজ, বিবাহ, গৃহ-নির্মাণ ইত্যাদি):</label>
                    <div class="relative">
                        <input type="number" id="cash" name="cash" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                            <span class="text-gray-500">৳</span>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="bank_savings" class="block mb-2 text-sm">৪. ব্যাংক বা অন্য কোথাও জমা টাকা (যদি থাকে)</label>
                    <div class="relative">
                        <input type="number" id="bank_savings" name="bank_savings" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                            <span class="text-gray-500">৳</span>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="receivable" class="block mb-2 text-sm">৫. অন্যের কাছে পাওনা টাকা (যদি থাকে)</label>
                    <div class="relative">
                        <input type="number" id="receivable" name="receivable" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                            <span class="text-gray-500">৳</span>
                        </div>
                    </div>
                </div>

                <div>
                    <label for="shares" class="block mb-2 text-sm">৬. শেয়ার বাজারে বিনিয়োগ (যদি থাকে)</label>
                    <div class="relative">
                        <input type="number" id="shares" name="shares" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                            <span class="text-gray-500">৳</span>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="shares" class="block mb-2 text-sm">৬. আমানত হিসেবে কারো কাছে রাখা টাকা: (যদি থাকে)</label>
                    <div class="relative">
                        <input type="number" id="amanot" name="amanot" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                            <span class="text-gray-500">৳</span>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="shares" class="block mb-2 text-sm">৬. আমানত হিসেবে কারো কাছে রাখা টাকা: (যদি থাকে)</label>
                    <div class="relative">
                        <input type="number" id="amanot" name="amanot" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                            <span class="text-gray-500">৳</span>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="shares" class="block mb-2 text-sm">৬. যে কোনো ধরনের সঞ্চয়পত্র, বন্ড, ডিবেঞ্চার ও ট্রেজারি বিল ইত্যাদির (টাকায়) পরিমাণ (প্রকৃত ক্রয় মূল্য):</label>
                    <div class="relative">
                        <input type="number" id="bondMoney" name="bondMoney" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                            <span class="text-gray-500">৳</span>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="shares" class="block mb-2 text-sm">৬.  শেয়ার মার্কেট- Capital Gain অর্থাৎ লাভে বিক্রয়ের উদ্দেশ্যে ক্রয়কৃত শেয়ারসমূহের বাজারমূল্য (যাকাতবর্ষ পূর্তির দিন হিসাবে)::</label>
                    <div class="relative">
                        <input type="number" id="stock_items" name="stock_items" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                            <span class="text-gray-500">৳</span>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="shares" class="block mb-2 text-sm">৬. বিক্রয়ের উদ্দেশ্যে স্টকে রাখা রেডি পণ্য, উৎপাদিত পণ্য, কাঁচামাল ও প্রক্রিয়াধীন পণ্যের পাইকারি বা একত্রে বিক্রয় মূল্য:</label>
                    <div class="relative">
                        <input type="number" id="share_market_capital_gain" name="share_market_capital_gain" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                            <span class="text-gray-500">৳</span>
                        </div>
                    </div>
                </div>
                <div>
                    <label for="shares" class="block mb-2 text-sm">৬. শেয়ার মার্কেট- Dividend অর্থাৎ বাৎসরিক মুনাফা অর্জনের ক্রয়কৃত শেয়ারসমূহের বাজারমূল্য (যাকাতবর্ষ পূর্তির দিন হিসাবে, যদি নিট যাকাতযোগ্য সম্পদ জানা সম্ভব না হয়):</label>
                    <div class="relative">
                        <input type="number" id="share_market_dividend" name="share_market_dividend" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none">
                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                            <span class="text-gray-500">৳</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="mt-6">
                <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                    হিসাব নির্ণয় করুন
                </button>
            </div>
        </form>
    </div>
</section>

<!-- Include the Gold/Silver Calculator Modal -->
<?php include 'gold-calculator-modal.php'; ?>

<script>
    // Initialize Preline components
    document.addEventListener('DOMContentLoaded', () => {
        HSOverlay.init(document.querySelectorAll('.hs-overlay'));
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
        '22': 8500,
        '21': 8100,
        '18': 7300,
        'sonaton': 9200
    };
    
    const silverPrice = 140;
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
            
            if (currentMetalType === 'gold') {
                const carat = row.querySelector('.ornament-carat').value;
                total += weight * goldPrices[carat];
            } else {
                total += weight * silverPrice;
            }
        });
        
        document.getElementById('totalValue').textContent = total.toLocaleString();
        return total;
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
</script>