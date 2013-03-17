<?php

/**
 * @author jstar88
 * @copyright 2013
 */
require ('Mine.php');
class MetalMine extends Mine
{
    
    /**
     * MetalMine::getMetalPerHour()
     * Return the metal production per hour of this mine
     * 
     * @param int $level: the level of this metal mine.
     * @return int;
     */
    public static function getMetalPerHour($level)
    {
        return 30 * $level * pow(1.1, $level);
    }
    
    /**
     * MetalMine::getEnergyConsumptions()
     * Return the hourly energy consumptions of this mine
     * @param int $level: the level of this metal mine.
     * @return int;
     */
    public static function getEnergyConsumptions($level)
    {
        return 10 * $level * pow(1.1,$level);
    }
}

?>