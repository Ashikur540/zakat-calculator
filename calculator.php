<!-- Calculator section -->
            <section class="mb-10 lg:mb-18">
                <div class="container mx-auto px-4">
                    <form action="calculator-result.php" method="POST" class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow">
                        <div class="text-center mb-6">
                            <h2 class="text-xl font-semibold mb-2">যাকাতযোগ্য সম্পদ (৩)</h2>
                            <p class="text-sm text-gray-600">[যাকাতের হিসাব নির্ণয়ে প্রয়োজনীয় তথ্য প্রদান করুন]</p>
                        </div>

                        <div class="space-y-4">
                            <div class="relative">
                                <label class="block mb-2 text-sm">১. স্বর্ণের মূল্য (যদি থাকে)</label>
                                <input type="number" name="gold_value" class="w-full border border-gray-300 p-3 rounded-md">
                                <button type="button" onclick="openCalculatorModal('gold')" class="absolute right-3 top-9 bg-green-600 text-white text-xs px-3 py-1 rounded">যাকাতের মূল্য নির্ণয় করতে এখানে ক্লিক করুন</button>
                            </div>

                            <div class="relative">
                                <label class="block mb-2 text-sm">২. রূপার মূল্য (যদি থাকে)</label>
                                <input type="number" name="silver_value" class="w-full border border-gray-300 p-3 rounded-md">
                                <button type="button" onclick="openCalculatorModal('silver')" class="absolute right-3 top-9 bg-green-600 text-white text-xs px-3 py-1 rounded">যাকাতের মূল্য নির্ণয় করতে এখানে ক্লিক করুন</button>
                            </div>

                            <div>
                                <label class="block mb-2 text-sm">৩. নিজের কাছে নগদ টাকা (যদি থাকে)</label>
                                <input type="number" name="cash" class="w-full border border-gray-300 p-3 rounded-md">
                            </div>

                            <div>
                                <label class="block mb-2 text-sm">৪. ব্যাংক বা অন্য কোথাও জমা টাকা (যদি থাকে)</label>
                                <input type="number" name="bank_savings" class="w-full border border-gray-300 p-3 rounded-md">
                            </div>

                            <div>
                                <label class="block mb-2 text-sm">৫. অন্যের কাছে পাওনা টাকা (যদি থাকে)</label>
                                <input type="number" name="receivable" class="w-full border border-gray-300 p-3 rounded-md">
                            </div>

                            <div>
                                <label class="block mb-2 text-sm">৬. শেয়ার বাজারে বিনিয়োগ (যদি থাকে)</label>
                                <input type="number" name="shares" class="w-full border border-gray-300 p-3 rounded-md">
                            </div>
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="w-full bg-green-600 text-white py-3 px-4 rounded-md hover:bg-green-700 transition-colors">
                                হিসাব নির্ণয় করুন
                            </button>
                        </div>
                    </form>
                </div>
            </section>

            <!-- Gold/Silver Calculator Modal -->
            <div id="goldCalculatorModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden flex items-center justify-center">
                <div class="bg-white rounded-lg p-6 max-w-2xl w-full max-h-[90vh] overflow-y-auto">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-xl font-semibold">স্বর্ণ এবং রূপার বর্তমান বাজার মূল্য</h3>
                        <button type="button" class="text-gray-500 hover:text-gray-700" onclick="closeGoldModal()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                    
                    <p class="mb-4">স্বর্ণ এবং রূপার বর্তমান বাজার মূল্য <span class="text-green-600 font-medium">বাজারের ওয়েবসাইট</span> থেকে নেওয়া। বাজার মূল্যের ৮০% ধরে আমরা আনুমানিক বিক্রয় মূল্য হিসাব করেছি।</p>
                    
                    <div id="ornamentsList">
                        <!-- First ornament row (default) -->
                        <div class="ornament-row flex flex-wrap gap-2 mb-4">
                            <div class="w-full sm:w-[48%]">
                                <label class="block mb-1 text-sm">গহনার নাম:</label>
                                <input type="text" class="ornament-name w-full border border-gray-300 p-2 rounded-md" placeholder="গহনার নাম লিখুন">
                            </div>
                            <div class="w-full sm:w-[23%]">
                                <label class="block mb-1 text-sm">পরিমাণ:</label>
                                <div class="flex">
                                    <input type="number" class="ornament-weight w-full border border-gray-300 p-2 rounded-l-md" placeholder="0">
                                    <select class="ornament-unit border border-gray-300 p-2 rounded-r-md bg-white">
                                        <option value="gram">গ্রাম</option>
                                    </select>
                                </div>
                            </div>
                            <div class="w-full sm:w-[23%]">
                                <label class="block mb-1 text-sm">ক্যারেট:</label>
                                <div class="flex">
                                    <button type="button" class="calculate-btn bg-amber-500 text-white px-3 py-2 rounded-l-md">ক্যালেট</button>
                                    <select class="ornament-carat border border-gray-300 p-2 rounded-r-md bg-white">
                                        <option value="22">২২</option>
                                        <option value="21">২১</option>
                                        <option value="18">১৮</option>
                                        <option value="sonaton">সনাতনী</option>
                                    </select>
                                </div>
                            </div>
                            <button type="button" class="delete-ornament text-red-500 self-end mb-2" title="মুছে ফেলুন">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                    <button id="addOrnamentBtn" type="button" class="flex items-center text-green-600 font-medium mb-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
                        </svg>
                        আরও যোগ করুন
                    </button>
                    
                    <div class="bg-gray-100 p-4 rounded-md mb-4">
                        <p id="totalValueText" class="text-center text-lg font-medium">আপনার মালিকানাধীন মোট স্বর্ণের বর্তমান বিক্রয় মূল্য: ৳<span id="totalValue">0</span> (টাকা)</p>
                    </div>
                    
                    <div class="flex justify-center">
                        <button type="button" id="confirmGoldValue" class="bg-green-600 text-white py-2 px-6 rounded-md hover:bg-green-700 transition-colors">
                            বিক্রয় মূল্য নিশ্চিত করুন
                        </button>
                    </div>
                </div>
            </div>

            <script>
            // Gold prices per gram (in BDT)
            const goldPrices = {
                '22': 8500,  // 22 carat gold price per gram
                '21': 8100,  // 21 carat gold price per gram
                '18': 7300,  // 18 carat gold price per gram
                'sonaton': 9200  // Traditional gold price per gram
            };
            
            // Silver price per gram (in BDT)
            const silverPrice = 140;
            
            // Current metal type (gold or silver)
            let currentMetalType = 'gold';
            
            // Open modal with specific metal type
            function openCalculatorModal(metalType) {
                currentMetalType = metalType;
                
                // Update modal title and description based on metal type
                const modalTitle = document.querySelector('#goldCalculatorModal h3');
                if (metalType === 'gold') {
                    modalTitle.textContent = 'স্বর্ণের বর্তমান বাজার মূল্য';
                    document.getElementById('totalValueText').innerHTML = 'আপনার মালিকানাধীন মোট স্বর্ণের বর্তমান বিক্রয় মূল্য: ৳<span id="totalValue">0</span> (টাকা)';
                } else {
                    modalTitle.textContent = 'রূপার বর্তমান বাজার মূল্য';
                    document.getElementById('totalValueText').innerHTML = 'আপনার মালিকানাধীন মোট রূপার বর্তমান বিক্রয় মূল্য: ৳<span id="totalValue">0</span> (টাকা)';
                }
                
                document.getElementById('goldCalculatorModal').classList.remove('hidden');
                calculateTotal();
            }
            
            // Close modal
            function closeGoldModal() {
                document.getElementById('goldCalculatorModal').classList.add('hidden');
            }
            
            // Add new ornament row
            document.getElementById('addOrnamentBtn').addEventListener('click', function() {
                const ornamentsList = document.getElementById('ornamentsList');
                const newRow = document.querySelector('.ornament-row').cloneNode(true);
                
                // Clear input values
                newRow.querySelector('.ornament-name').value = '';
                newRow.querySelector('.ornament-weight').value = '';
                
                // Add event listeners to the new row
                addRowEventListeners(newRow);
                
                ornamentsList.appendChild(newRow);
                calculateTotal();
            });
            
            // Add event listeners to ornament row
            function addRowEventListeners(row) {
                // Delete button
                row.querySelector('.delete-ornament').addEventListener('click', function() {
                    if (document.querySelectorAll('.ornament-row').length > 1) {
                        row.remove();
                        calculateTotal();
                    }
                });
                
                // Weight input
                row.querySelector('.ornament-weight').addEventListener('input', calculateTotal);
                
                // Carat select
                row.querySelector('.ornament-carat').addEventListener('change', calculateTotal);
            }
            
            // Calculate total value
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
            
            // Confirm button action
            document.getElementById('confirmGoldValue').addEventListener('click', function() {
                const total = calculateTotal();
                
                if (currentMetalType === 'gold') {
                    document.querySelector('input[name="gold_value"]').value = total;
                } else {
                    document.querySelector('input[name="silver_value"]').value = total;
                }
                
                closeGoldModal();
            });
            
            // Initialize event listeners for the first row
            document.addEventListener('DOMContentLoaded', function() {
                const firstRow = document.querySelector('.ornament-row');
                addRowEventListeners(firstRow);
                
                // Add click handlers to the calculation buttons
                document.querySelectorAll('.relative button').forEach((btn, index) => {
                    btn.addEventListener('click', function() {
                        openCalculatorModal(index === 0 ? 'gold' : 'silver');
                    });
                });
            });
            </script>