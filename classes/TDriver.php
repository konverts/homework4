<?php

trait TDriver
{
    protected $driver = false;

    public function driverOn()
    {
        $this->driver = true;
    }

    public function hasDriver()
    {
        return $this->driver;
    }
}
