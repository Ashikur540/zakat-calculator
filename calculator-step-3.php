<?php
include 'classes/ZakatCalculator.php';
include 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get total addable amount
    $totalAddableAmount = floatval($_POST['total_addable'] ?? 0);
    
    // Get all deductible amounts
    $deductibles = [
        'personal_loan' => floatval($_POST['personal_loan'] ?? 0),
        'business_loan' => floatval($_POST['business_loan'] ?? 0),
        'utility_bills' => floatval($_POST['utility_bills'] ?? 0),
        'due_rent' => floatval($_POST['due_rent'] ?? 0),
        'employee_salary' => floatval($_POST['employee_salary'] ?? 0),
        'other_dues' => floatval($_POST['other_dues'] ?? 0)
    ];

    // Calculate total deductible amount
    $totalDeductibleAmount = array_sum($deductibles);
    
    // Calculate net amount
    $netAmount = $totalAddableAmount - $totalDeductibleAmount;
    
    // Calculate Zakat (2.5% of net amount)
    $zakatAmount = $netAmount * 0.025;
}
?>

<div class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Stepper Progress -->
            <div class="flex items-center justify-between mb-8">
                <div class="w-full flex items-center">
                    <!-- Step 1: Completed -->
                    <div class="flex items-center relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 bg-green-600 border-green-600 flex justify-center">
                            <svg class="w-full text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-green-600">যোগযোগ্য সম্পদ</div>
                    </div>
                    <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-green-600"></div>
                    
                    <!-- Step 2: Completed -->
                    <div class="flex items-center relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 bg-green-600 border-green-600 flex justify-center">
                            <svg class="w-full text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="20 6 9 17 4 12"></polyline>
                            </svg>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-green-600">বিয়োগযোগ্য সম্পদ</div>
                    </div>
                    <div class="flex-auto border-t-2 transition duration-500 ease-in-out border-green-600"></div>
                    
                    <!-- Step 3: Current -->
                    <div class="flex items-center relative">
                        <div class="rounded-full transition duration-500 ease-in-out h-12 w-12 py-3 border-2 border-green-600 bg-green-600 text-center">
                            <span class="text-white text-xl font-bold">3</span>
                        </div>
                        <div class="absolute top-0 -ml-10 text-center mt-16 w-32 text-xs font-medium uppercase text-green-600">যাকাত পরিমাণ</div>
                    </div>
                </div>
            </div>

            <!-- Result Content -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <h2 class="text-2xl font-bold text-center mb-8">যাকাত হিসাব</h2>
                
                <!-- Calculation Summary -->
                <div class="space-y-6">
                    <div class="p-4 bg-gray-50 rounded-lg">
                        <h3 class="font-semibold mb-3">মোট যোগযোগ্য সম্পদ:</h3>
                        <p class="text-xl text-green-600 font-bold">৳<?php echo number_format($totalAddableAmount, 2); ?></p>
                    </div>
                    
                    <div class="p-4 bg-gray-50 rounded-lg">
                        <h3 class="font-semibold mb-3">মোট বিয়োগযোগ্য সম্পদ:</h3>
                        <p class="text-xl text-red-600 font-bold">৳<?php echo number_format($totalDeductibleAmount, 2); ?></p>
                    </div>
                    
                    <div class="p-4 bg-gray-50 rounded-lg">
                        <h3 class="font-semibold mb-3">নিট যাকাতযোগ্য সম্পদ:</h3>
                        <p class="text-xl text-blue-600 font-bold">৳<?php echo number_format($netAmount, 2); ?></p>
                    </div>
                    
                    <div class="p-6 bg-green-50 rounded-lg text-center">
                        <h3 class="text-xl font-bold mb-2">আপনার যাকাতের পরিমাণ (২.৫%):</h3>
                        <p class="text-3xl text-green-600 font-bold">৳<?php echo number_format($zakatAmount, 2); ?></p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="mt-8 flex gap-4">
                    <a href="/wp-content/zakat-calculator-two/#zakat-calculator-section" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-gray-300 bg-white text-gray-700 hover:bg-gray-50">
                        নতুন হিসাব করুন
                    </a>
                    <button onclick="window.print()" class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700">
                        প্রিন্ট করুন
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>