<p class="mb-4">স্বর্ণ এবং রূপার বর্তমান বাজার মূল্য <a href="https://www.bajus.org/gold-price" target="_blank" class="text-teal-600 font-medium">বাজারের ওয়েবসাইট</a> থেকে নেওয়া। বাজার মূল্যের ৮০% ধরে আমরা আনুমানিক বিক্রয় মূল্য হিসাব করেছি।</p>

<div id="ornamentsList">
    <!-- First ornament row (default) -->
    <div class="ornament-row mb-4">
        <div class="grid grid-cols-1 sm:grid-cols-12 gap-3">
            <div class="sm:col-span-5">
                <label class="block mb-1 text-sm">গহনার নাম:</label>
                <input type="text" class="ornament-name py-2 px-3 block w-full border-gray-300 border rounded-md text-sm focus:border-blue-500 focus:ring-blue-500" placeholder="গহনার নাম লিখুন">
            </div>
            <div class="sm:col-span-3">
                <label class="block mb-1 text-sm">পরিমাণ:</label>
                <div class="flex rounded-md shadow-sm">
                    <input type="number" class="ornament-weight py-2 px-3 block w-full border-gray-300 border rounded-s-md text-sm focus:z-10 focus:border-blue-500 focus:ring-blue-500" placeholder="0">
                    <span class="px-4 inline-flex items-center min-w-fit rounded-e-md border border-s-0 border-gray-300 border bg-gray-50 text-sm text-gray-500">গ্রাম</span>
                </div>
            </div>
            <div class="sm:col-span-3">
                <label class="block mb-1 text-sm">ক্যারেট:</label>
                <div class="relative">
                    <button type="button" class="ornament-carat-btn hs-select-button py-2 px-3 pe-9 block w-full border-gray-300 border rounded-lg text-start text-sm focus:border-blue-500 focus:ring-blue-500">
                        <span class="me-2">২২</span>
                        ক্যারেট
                    </button>

                    <div class="hs-select-menu transition-[opacity,margin] duration-[0.1ms] hs-select-open:opacity-100 opacity-0 w-full z-50 mt-2 bg-white shadow-md rounded-lg p-2 dark:bg-gray-800 dark:border dark:border-gray-700 hidden" aria-hidden="true">
                        <div class="ornament-carat py-2 first:pt-0 last:pb-0">
                            <div class="hs-select-option" data-value="22">
                                <span class="block px-3 py-2 text-sm rounded-lg cursor-pointer hover:bg-gray-100">২২ ক্যারেট</span>
                            </div>
                            <div class="hs-select-option" data-value="21">
                                <span class="block px-3 py-2 text-sm rounded-lg cursor-pointer hover:bg-gray-100">২১ ক্যারেট</span>
                            </div>
                            <div class="hs-select-option" data-value="18">
                                <span class="block px-3 py-2 text-sm rounded-lg cursor-pointer hover:bg-gray-100">১৮ ক্যারেট</span>
                            </div>
                            <div class="hs-select-option" data-value="sonaton">
                                <span class="block px-3 py-2 text-sm rounded-lg cursor-pointer hover:bg-gray-100">সনাতনী</span>
                            </div>
                        </div>
                    </div>

                    <input type="hidden" class="ornament-carat" value="22">

                    <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                        <svg class="size-4 text-gray-800" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 9 6 6 6-6"/></svg>
                    </div>
                </div>
            </div>
            <div class="flex items-end sm:col-span-1">
                <button type="button" class="delete-ornament py-2 px-2 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-red-500 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" title="মুছে ফেলুন">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</div>

<button id="addOrnamentBtn" type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-teal-600 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none mb-6">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
    </svg>
    আরও যোগ করুন
</button>

<div class="bg-gray-100 p-4 rounded-md mb-4">
    <p id="totalValueText" class="text-center text-lg font-medium">আপনার মালিকানাধীন মোট স্বর্ণের বর্তমান বিক্রয় মূল্য: ৳<span id="totalValue">0</span> (টাকা)</p>
</div>