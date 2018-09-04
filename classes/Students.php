<?php

class Students extends Product implements IProduct
{
    use TGps;
    use TDriver;
    const PRICE_PER_KM = 4;
    const PRICE_PER_TIME = 1;

    public function howOld()
    {
        if ($this->years > 25) {
           echo 'вам не подойдет студенческий тариф, выберите другой';
            exit;
        } elseif (!parent::howOld()) {
            false;
        }
    }

    public function getResult()
    {
        $result = $this->km * self::PRICE_PER_KM + $this->time * self::PRICE_PER_TIME;
        if ($this->hasGps()) {
            $result += 15 * $this->time / 60;

        }
        if ($this->hasDriver()) {
            $result += 100;

        }
        if ($this->howOld()) {
            $result *= 1.1;
        }
        echo "Вы выбрали {$this->km}км, и {$this->time} это будет стоить " . round($result) . " рублей";
    }

}