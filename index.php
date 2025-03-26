<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zakat Calculator</title>
        <!-- Add Tailwind CSS and Preline UI -->
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/preline@3.0.1/src/plugins/accordion/variants.min.css">
         <!-- Add Google Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Plus+Jakarta+Sans:wght@400;500;600&display=swap" rel="stylesheet">
        <!-- bangla font -->
        <link href="https://fonts.maateen.me/tiro-bangla/font.css" rel="stylesheet">
        <!-- external css -->
        <link rel="stylesheet" href="./styles/style.css">
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
    <!-- https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.behance.net%2Fsearch%2Fprojects%2Fislamic%2520website%2520&psig=AOvVaw27RLyv1gBUaLI1Mt1I312_&ust=1742969903932000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCODvj4LLpIwDFQAAAAAdAAAAABAm -->