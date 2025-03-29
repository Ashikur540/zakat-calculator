<?php
echo '<section class="relative min-h-[80vh] flex items-center justify-center overflow-hidden px-6 bg-[#F7F3EA] mt-12">
    <div class="container mx-auto max-w-6xl">
        <div class="text-center">
            <h1 class="text-3xl md:text-5xl lg:text-6xl font-playfair font-bold text-[#1B4B40] mb-4">
                Purify Your Wealth<br>
                Through <span class="relative inline-block">
                    Zakat
                    <svg class="absolute -bottom-1 left-0 w-full" viewBox="0 0 100 20" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 15 Q 25 0, 50 15 Q 75 30, 100 15" fill="none" stroke="#FFA500" stroke-width="4"/>
                    </svg>
                </span>
            </h1>
            
            <p class="text-base md:text-lg text-gray-600 max-w-2xl mx-auto mb-8">
                Fulfill your Islamic obligation and purify your wealth by calculating and giving Zakat. 
                Our calculator helps you accurately determine your Zakat amount to support those in need.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-12">
                <a href="#zakat-calculator-section" class="inline-flex items-center justify-center px-6 py-3 bg-[#FFA500] text-white rounded-md font-medium hover:bg-[#FF9000] transition-all">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z"/>
                    </svg>
                   Calculate Zakat
                </a>
                <a href="#" class="inline-flex items-center justify-center px-6 py-3 bg-white text-[#1B4B40] border border-[#1B4B40] rounded-md font-medium hover:bg-gray-50 transition-all">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M11 17a1 1 0 001.447.894l4-2A1 1 0 0017 15V9.236a1 1 0 00-1.447-.894l-4 2a1 1 0 00-.553.894V17zM15.211 6.276a1 1 0 000-1.788l-4.764-2.382a1 1 0 00-.894 0L4.789 4.488a1 1 0 000 1.788l4.764 2.382a1 1 0 00.894 0l4.764-2.382zM4.447 8.342A1 1 0 003 9.236V15a1 1 0 00.553.894l4 2A1 1 0 009 17v-5.764a1 1 0 00-.553-.894l-4-2z"/>
                    </svg>
                    Donate Now
                </a>
            </div>

            <!-- Quran Images -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto mb-16 gap-6">
                <div class="relative aspect-[2/3] rounded-lg overflow-hidden shadow-lg md:col-span-1  w-full h-full">
                    <img src="./assets/images/hero-1.webp" alt="Holy Quran" class="w-full h-full object-cover">
                </div>
                <div class="relative aspect-[4/3] rounded-lg overflow-hidden shadow-lg md:col-span-2">
                    <img src="./assets/images/hero-2.webp" alt="Reading Quran" class="w-full h-full object-cover">
                </div>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-8 text-center">
                <div>
                    <h3 class="text-3xl font-playfair font-bold text-[#1B4B40]">114</h3>
                    <p class="text-gray-600">Zakats Calculated</p>
                </div>
                <div>
                    <h3 class="text-3xl font-playfair font-bold text-[#1B4B40]">6,666</h3>
                    <p class="text-gray-600">Donations Received</p>
                </div>
                <div>
                    <h3 class="text-3xl font-playfair font-bold text-[#1B4B40]">28+</h3>
                    <p class="text-gray-600">Family Smiled!</p>
                </div>
            </div>
        </div>
    </div>
</section>';
?>