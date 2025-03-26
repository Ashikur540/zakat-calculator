<?php
include 'classes/ZakatCalculator.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get addable amounts
    $gold_value = floatval($_POST['gold_value'] ?? 0);
    $silver_value = floatval($_POST['silver_value'] ?? 0);
    $cash = floatval($_POST['cash'] ?? 0);
    $bank_savings = floatval($_POST['bank_savings'] ?? 0);
    $receivable = floatval($_POST['receivable'] ?? 0);
    $shares = floatval($_POST['shares'] ?? 0);
    $amanot = floatval($_POST['amanot'] ?? 0);
    $bondMoney = floatval($_POST['bondMoney'] ?? 0);
    $stock_items = floatval($_POST['stock_items'] ?? 0);
    $share_market_capital_gain = floatval($_POST['share_market_capital_gain'] ?? 0);
    $share_market_dividend = floatval($_POST['share_market_dividend'] ?? 0);

    $totalAddableAmount = $gold_value + $silver_value + $cash + $bank_savings + $receivable + $shares + $amanot + $bondMoney + $stock_items + $share_market_capital_gain + $share_market_dividend;
}
?>
<?php include 'includes/header.php'; ?>
<!-- Stepper -->
<div class="py-8">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Stepper Progress -->
            <div class="flex items-center justify-between mb-10 md:mb-16">
                <div class="w-full flex items-center">
                    <!-- Step 1: Total Assets -->
                    <div class="flex items-center relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 bg-teal-600 border-teal-600 flex justify-center">
                            <svg class="w-full text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-600">যোগযোগ্য সম্পদ</div>
                    </div>
                    <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-teal-600"></div>
                    
                    <!-- Step 2: Deductions -->
                    <div class="flex items-center relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-teal-600 bg-white text-center flex justify-center">
                            <span class="text-teal-600 text-xl font-bold">2</span>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-teal-600">বিয়োগযোগ্য সম্পদ</div>
                    </div>
                    <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-gray-300"></div>
                    
                    <!-- Step 3: Final Calculation -->
                    <div class="flex items-center relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-gray-300 bg-white text-center">
                            <span class="text-gray-600 text-xl font-bold">3</span>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-gray-500">যাকাত পরিমাণ</div>
                    </div>
                </div>
            </div>

            <!-- Step Content -->
            <div class="bg-white rounded-lg shadow-lg p-5">
                <!-- Total Assets Summary -->
                <div class="mb-8">
                    <h3 class="text-xl font-bold text-gray-700 mb-4">মোট যোগযোগ্য সম্পদ</h3>
                    <div class="bg-teal-50 p-4 rounded-lg">
                        <p class="text-center text-xl font-semibold text-teal-600">৳<?php echo number_format($totalAddableAmount, 2); ?> টাকা</p>
                    </div>
                </div>

                <!-- Deductible Amount Form -->
                <form action="calculator-step-3.php" method="POST" class="space-y-6">
                    <input type="hidden" name="total_addable" value="<?php echo $totalAddableAmount; ?>">
                    
                    <h3 class="text-xl font-bold text-gray-700 mb-4">বিয়োগযোগ্য সম্পদ</h3>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block mb-2 text-sm font-medium">ব্যক্তিগত ঋণ</label>
                            <div class="relative">
                                <input type="number" name="personal_loan" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500" placeholder="0">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                                    <span class="text-gray-500">৳</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block mb-2 text-sm font-medium">ব্যবসায়িক ঋণ</label>
                            <div class="relative">
                                <input type="number" name="business_loan" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500" placeholder="0">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                                    <span class="text-gray-500">৳</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block mb-2 text-sm font-medium">বকেয়া ইউটিলিটি বিল</label>
                            <div class="relative">
                                <input type="number" name="utility_bills" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500" placeholder="0">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                                    <span class="text-gray-500">৳</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block mb-2 text-sm font-medium">বকেয়া ভাড়া</label>
                            <div class="relative">
                                <input type="number" name="due_rent" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500" placeholder="0">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                                    <span class="text-gray-500">৳</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block mb-2 text-sm font-medium">কর্মচারীদের বেতন বকেয়া</label>
                            <div class="relative">
                                <input type="number" name="employee_salary" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500" placeholder="0">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                                    <span class="text-gray-500">৳</span>
                                </div>
                            </div>
                        </div>

                        <div>
                            <label class="block mb-2 text-sm font-medium">অন্যান্য বকেয়া</label>
                            <div class="relative">
                                <input type="number" name="other_dues" class="py-3 px-4 ps-11 block w-full border-gray-300 border rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500" placeholder="0">
                                <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4">
                                    <span class="text-gray-500">৳</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-8">
                        <button type="submit" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-teal-600 text-white hover:bg-teal-700 disabled:opacity-50 disabled:pointer-events-none duration-300 ease">
                            পরবর্তী ধাপে যান
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
