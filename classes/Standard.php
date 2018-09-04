<?php

class Standard  extends Product implements IProduct
{
    const PRICE_PER_KM = 10;
    const PRICE_PER_TIME = 3;
    use TGps;
    use TDriver;

    public function howOld()
    {
        if (!parent::howOld()) {
            return false;
        }
    }


    public function getResult()
    {
        $result = $this->km * self::PRICE_PER_KM + $this->time * self::PRICE_PER_TIME;
        if($this->hasGps()){
            $result += 15 * $this->time/60;

        }
        if($this->hasDriver()){
            $result += 100;

        }
        if($this->howOld()){
            $result = $result * 1.1;

        }
        echo "Вы выбрали {$this->km}км, и {$this->time} это будет стоить " . $result . " рублей";
    }

}