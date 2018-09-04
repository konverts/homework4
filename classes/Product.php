<?php

abstract class  Product
{
    public $pricePerKM;
    public $pricePerMinutes;
    public $km;
    public $time;
    const MIN_AGE = 18;
    const MAX_AGE = 21;

    public function howOld()
    {
        if ($this->years < 18) {
            echo 'Вам недоступна аренда автомобиля';
            exit;
        } elseif ($this->years >= static::MIN_AGE && ($this->years <= static::MAX_AGE)) {
            return true;
        } else {
            return false;
        }
    }


    public function __construct($years, $km, $time)
    {
        $this->years = $years;
        $this->km = $km;
        $this->time = $time;
    }

}
