<?php

/**
 * @author jstar88
 * @copyright 2013
 */
require ('Mine.php');
class SolarSatellites extends Mine
{

    /**
     * SolarSatellites::getEnergyPerHour()
     * Return the energy production per hour of this mine
     * 
     * @param int $count: the Solar Satellites amount.
     * @param int $maxTemperature: the max temperature of the planet.
     * @return int;
     */
    public static function getEnergyPerHour($count, $maxTemperature)
    {
        return $count * floor(($maxTemperature + 140) / 6);
    }
}

?>