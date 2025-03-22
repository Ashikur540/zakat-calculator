document.addEventListener('DOMContentLoaded', function() {
    // Form navigation
    document.querySelector('.next-step').addEventListener('click', function() {
        document.getElementById('step1').classList.add('hidden');
        document.getElementById('step2').classList.remove('hidden');
    });

    document.querySelector('.prev-step').addEventListener('click', function() {
        document.getElementById('step2').classList.add('hidden');
        document.getElementById('step1').classList.remove('hidden');
    });

    // Form submission
    document.getElementById('zakatForm').addEventListener('submit', function(e) {
        e.preventDefault();

        // Get form values
        const nisabType = document.getElementById('nisab_type').value;
        const goldValue = parseFloat(document.querySelector('input[name="gold_value"]').value) || 0;
        const silverValue = parseFloat(document.querySelector('input[name="silver_value"]').value) || 0;
        const bankBalance = parseFloat(document.querySelector('input[name="bank_balance"]').value) || 0;
        const businessValue = parseFloat(document.querySelector('input[name="business_value"]').value) || 0;

        // Calculate total assets
        const totalAssets = goldValue + silverValue + bankBalance + businessValue;

        // Get nisab threshold based on selection
        const goldNisab = 87.48 * 250; // Approximate gold price per gram in your currency
        const silverNisab = 612.36 * 3; // Approximate silver price per gram in your currency
        const nisabThreshold = nisabType === 'gold' ? goldNisab : silverNisab;

        // Calculate Zakat
        let zakatAmount = 0;
        if (totalAssets >= nisabThreshold) {
            zakatAmount = totalAssets * 0.025; // 2.5% of total assets
        }

        // Display results
        document.getElementById('totalZakat').textContent = '৳' + zakatAmount.toFixed(2);
        document.getElementById('zakatResults').classList.remove('hidden');
    });
});