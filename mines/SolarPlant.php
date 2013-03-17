<?php

/**
 * @author jstar88
 * @copyright 2013
 */
require ('Mine.php');
class SolarPlant extends Mine
{
    /**
     * SolarPlant::getEnergyPerHour()
     * Return the energy production per hour of this mine
     * 
     * @param int $level: the solar plant level.
     * @return int;
     */
    public static function getEnergyPerHour($level)
    {
        return 20 * $level * pow(1.1, $level);
    }
}

?>