<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <!-- Add Tailwind CSS and Preline UI -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/preline@3.0.1/src/plugins/accordion/variants.min.css">
    </head>
    <body>
        <main class="max-w-screen-lg mx-auto">
            <!-- Hero section -->
            <?php include 'includes/hero.php'; ?>
            <!-- Calculator section -->
            <?php include 'calculator.php';?>
            <!-- faq section -->
            <?php include 'faq.php'; ?>
        </main>

        <!-- Add Preline UI JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/preline@3.0.1/dist/preline.min.js"></script>
        <script>
            // Initialize Preline UI
            document.addEventListener('DOMContentLoaded', () => {
                window.HSStaticMethods.autoInit();
            });
        </script>
    </body>
</html>
    
<?php include 'includes/footer.php'; ?>
    <!-- http://poptics-dev.local/wp-content/zakat-calculator-two/ -->