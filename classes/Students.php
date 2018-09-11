<?php

class Students extends Product implements IProduct
{
    use TGps;
    use TDriver;
    const PRICE_PER_KM = 4;
    const PRICE_PER_TIME = 1;

    public function getResult()
    {
        $result = $this->km * self::PRICE_PER_KM + $this->time * self::PRICE_PER_TIME;
        if ($this->hasGps()) {
            $result += 15 * $this->time / 60;

        }
        if ($this->hasDriver()) {
            $result += 100;

        }

        if ($this->highPrice()) {
            $result *= 1.1;
        }
        echo "Вы выбрали {$this->km}км, и {$this->time} это будет стоить " . round($result) . " рублей";
    }

}