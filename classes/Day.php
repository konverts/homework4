<?php

class Day extends Product implements IProduct
{
    const MAX_AGE = 21;
    use TGps;
    use TDriver;
    const PRICE_PER_KM = 1;
    const PRICE_PER_TIME = 1000;

    public function rounding()
    {
        if (($this->time / 1440 - intdiv($this->time, 1440)) * 1440 < 29) {
            $res = round($this->time / 1440);
            return $res;
        } else {
            $res = ceil($this->time / 1440);
            return $res;
        }

    }

    public function getResult()
    {
        $result = $this->km * self::PRICE_PER_KM + $this->rounding() * self::PRICE_PER_TIME;
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