
<div class="">
    <h2 class="text-xl font-bold mb-4">Frequently Asked Questions</h2>
    <div class="space-y-4">
        <div class="border p-4 bg-white shadow">
            <h3 class="font-semibold cursor-pointer">What is Zakat?</h3>
            <p class="hidden">Zakat is a form of almsgiving in Islam, required for eligible Muslims.</p>
        </div>
        <div class="border p-4 bg-white shadow">
            <h3 class="font-semibold cursor-pointer">How is Zakat calculated?</h3>
            <p class="hidden">Zakat is generally calculated as 2.5% of an individual's savings and wealth.</p>
        </div>
    </div>
</div>
<script>
    document.querySelectorAll('.border').forEach(item => {
        item.addEventListener('click', () => {
            item.querySelector('p').classList.toggle('hidden');
        });
    });
</script>
