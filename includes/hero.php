<?php
echo '<section class="relative min-h-screen flex items-center justify-center overflow-hidden px-6">
      <div class="absolute inset-0 -z-10">
        <div class="absolute inset-0 bg-gradient-radial from-accent to-background"></div>
      </div>
      <div class="absolute top-1/4 right-1/4 w-64 h-64 bg-primary/5 rounded-full blur-3xl"></div>
      <div class="absolute bottom-1/3 left-1/5 w-72 h-72 bg-primary/10 rounded-full blur-3xl"></div>
      
      <div class="container mx-auto text-center relative z-10">
        <div class="inline-block mb-3 px-3 py-1 bg-primary/10 text-primary text-xs font-medium rounded-full animate-fade-in">
          Calculate with precision
        </div>
        
        <h1 class="text-4xl md:text-6xl font-display font-bold tracking-tight mb-4 animate-fade-up" style="animation-delay: 100ms">
          Zakat Calculator
        </h1>
        
        <p class="text-lg md:text-xl text-foreground/70 max-w-2xl mx-auto mb-8 animate-fade-up" style="animation-delay: 200ms">
          A simple, accurate way to calculate your Zakat obligation with clear guidance and instant results.
        </p>
        
        <button 
          type="button"
          class="inline-flex items-center justify-center px-6 py-3 bg-green-400 text-primary-foreground rounded-full font-medium shadow-button hover:bg-primary/90 transition-all duration-300 transform hover:-translate-y-0.5 animate-fade-up group"
          style="animation-delay: 300ms"
        >
          Calculate Now
          <ArrowDown class="ml-2 h-4 w-4 group-hover:translate-y-0.5 transition-transform" />
        </button>
      </div>
      
      <div class="absolute bottom-8 left-0 right-0 flex justify-center animate-bounce">
        <ArrowDown 
          class="h-6 w-6 text-foreground/50 cursor-pointer"
        />
      </div>
    </section>';
?>