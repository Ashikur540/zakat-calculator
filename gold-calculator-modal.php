<!-- Gold/Silver Calculator Modal (Preline) -->
<div id="goldCalculatorModal" class="hs-overlay hidden w-full h-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto bg-black bg-opacity-50">
    <div class="hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-100 transition-all sm:max-w-lg md:max-w-2xl sm:w-full m-3 sm:mx-auto flex items-center min-h-[calc(100%-3.5rem)] lg:min-h-screen justify-center">
        <div class="relative flex flex-col bg-white border shadow-sm rounded-xl w-full transform hs-overlay-open:translate-y-0 translate-y-3 transition-all duration-300">
            <div class="flex justify-between items-center py-3 px-4 border-b">
                <h3 id="goldCalculatorModal-modalTitle" class="font-bold text-gray-800">স্বর্ণ এবং রূপার বর্তমান বাজার মূল্য</h3>
                <button type="button" class="size-8 inline-flex justify-center items-center gap-x-2 rounded-full border border-transparent bg-gray-100 text-gray-800 hover:bg-gray-200 focus:outline-hidden focus:bg-gray-200 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#goldCalculatorModal">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            
            <div class="p-4 overflow-y-auto">
                <!-- Rest of your modal content -->
                <?php include 'modal-content.php'; ?>
            </div>
            
            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#goldCalculatorModal">
                    বাতিল করুন
                </button>
                <button type="button" id="confirmGoldValue" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                    বিক্রয় মূল্য নিশ্চিত করুন
                </button>
            </div>
        </div>
    </div>
</div>