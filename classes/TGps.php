<?php

trait TGps
{
 protected $gps = false;

   public function gpsOn()
    {
        $this->gps = true;
    }

    public function hasGps()
    {
        return $this->gps;
    }
}
