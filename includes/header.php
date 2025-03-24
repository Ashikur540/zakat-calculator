<?php
    echo '<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Zakat Calculator</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class="bg-gray-100">
        <header 
      class="sticky top-0 left-0 right-0 z-50 py-4 px-6 transition-all duration-300 ease-in-out",
        scrolled bg-white/80 backdrop-blur-lg shadow-subtle">
      <div class="container mx-auto flex items-center justify-between">
        <div class="flex items-center space-x-1 text-primary">
          <span class="text-2xl font-display font-bold tracking-tight">Zakat</span>
          <span class="text-2xl font-display font-light tracking-tight text-foreground/80">Calculator</span>
        </div>
        <nav class="hidden md:flex items-center space-x-8">
          <a href="#zakat-calculator-section" class="text-sm font-medium text-foreground/80 hover:text-primary transition-colors">
            Calculator
          </a>
          <a href="#about" class="text-sm font-medium text-foreground/80 hover:text-primary transition-colors">
            About Zakat
          </a>
          <a href="#faq" class="text-sm font-medium text-foreground/80 hover:text-primary transition-colors">
            FAQ
          </a>
        </nav>
      </div>
    </header>';
?>