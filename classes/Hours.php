<?php

class Hours  extends Product implements IProduct
{
    const PRICE_PER_KM = 0;
    const PRICE_PER_TIME = 200;
    use TGps;
    use TDriver;

    public function rounding()
    {
            $res = ceil($this->time/60);
            return $res;
    }


    public function getResult()
    {
        $result = $this->km * self::PRICE_PER_KM + $this->rounding() * self::PRICE_PER_TIME;
        if($this->hasGps()){
            $result += 15 * $this->time/60;

        }
        if($this->hasDriver()){
            $result += 100;

        }
        if ($this->highPrice()) {
            $result *= 1.1;
        }
        echo "Вы выбрали {$this->km}км, и {$this->time} это будет стоить " . $result . " рублей";
    }

}