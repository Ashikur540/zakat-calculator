<?php
include 'classes/ZakatCalculator.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $totalAddable = floatval($_POST['total_addable'] ?? 0);
    
    // Get all deductible amounts
    $deductibles = [
        'personal_loan' => floatval($_POST['personal_loan'] ?? 0),
        'business_loan' => floatval($_POST['business_loan'] ?? 0),
        'utility_bills' => floatval($_POST['utility_bills'] ?? 0),
        'due_rent' => floatval($_POST['due_rent'] ?? 0),
        'employee_salary' => floatval($_POST['employee_salary'] ?? 0),
        'other_dues' => floatval($_POST['other_dues'] ?? 0)
    ];

    $calculator = new ZakatCalculator();
    $zakatAmount = $calculator->calculate($totalAddable, $deductibles);
}
?>

<!-- Rest of your HTML with the final step stepper and zakat amount display -->