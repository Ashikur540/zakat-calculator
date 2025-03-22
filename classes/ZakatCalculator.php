<?php
class ZakatCalculator {
    private $rate = 0.025; // 2.5% Zakat Rate

    public function calculate($savings, $gold) {
        return ($savings + $gold) * $this->rate;
    }
}
?>