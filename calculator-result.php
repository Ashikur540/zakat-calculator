<?php
include 'classes/ZakatCalculator.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $savings = $_POST['savings'] ?? 0;
    $gold = $_POST['gold'] ?? 0;

    //  create capitals and liabilities object from the inputs
    


    $zakatCalculator = new ZakatCalculator();
    $zakat = $zakatCalculator->calculate($capitals, $liabilities);
}
?>

<?php include 'includes/header.php'; ?>

<section class="result py-10 text-center">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold">Your Zakat Amount:</h2>
        <p class="text-xl text-gray-700 mt-4">৳<?php echo number_format($zakat, 2); ?></p>
    </div>
</section>

<?php include 'includes/footer.php'; ?>