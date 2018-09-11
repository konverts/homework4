<?php

abstract class Product
{
    public $pricePerKM;
    public $pricePerMinutes;
    public $km;
    public $time;
    const MIN_AGE = 18;
    const MAX_AGE = 65;

    public function howOld()
    {
        return ($this->years >= static::MIN_AGE && $this->years <= static::MAX_AGE); //для валидизации. Вместо него нужно сделать метод get Bonus
    }

    public function highPrice()
    {
        $this->howOld();
        if ($this->years >= 15 && ($this->years <= 21)) {
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
        var_dump($this->howOld());
        if (!$this->howOld()){
            throw new Exception('Неверно указан возраст');
        }
    }

}
