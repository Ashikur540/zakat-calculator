<?php

class ZakatCalculator {
    private $deductibleFields = [
        [
            'name' => 'business_loan',
            'label' => 'ব্যবসায়িক ঋণ'
        ],
        [
            'name' => 'personal_loan',
            'label' => 'ব্যক্তিগত ঋণ'
        ],
        [
            'name' => 'credit_card_due',
            'label' => 'ক্রেডিট কার্ড বকেয়া'
        ],
        [
            'name' => 'utility_bills',
            'label' => 'ইউটিলিটি বিল বকেয়া'
        ],
        [
            'name' => 'rent_due',
            'label' => 'বাড়ি ভাড়া বকেয়া'
        ],
        [
            'name' => 'other_dues',
            'label' => 'অন্যান্য বকেয়া'
        ]
    ];

    public function getDeductibleFields() {
        return $this->deductibleFields;
    }

    public function calculate($totalAddableAmount, $deductibles = []) {
        // Calculate total deductible amount
        $totalDeductible = 0;
        foreach ($deductibles as $amount) {
            $totalDeductible += floatval($amount);
        }

        // Calculate net amount eligible for Zakat
        $netAmount = $totalAddableAmount - $totalDeductible;

        // Calculate Zakat (2.5% of net amount)
        $zakat = $netAmount * 0.025;

        return max(0, $zakat); // Ensure Zakat is not negative
    }
}
?>