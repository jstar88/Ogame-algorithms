<?php

/**
 * @author jstar88
 * @copyright 2013
 */
require ('Mine.php');
class CrystalMine extends Mine
{
    
    /**
     * CrystalMine::getCrystalPerHour()
     * Return the crystal production per hour of this mine
     * 
     * @param int $level: the level of this crystal mine.
     * @return int;
     */
    public static function getCrystalPerHour($level)
    {
        return 20 * $level * pow(1.1, $level);
    }
    
    /**
     * CrystalMine::getEnergyConsumptions()
     * Return the hourly energy consumptions of this mine
     * @param int $level: the level of this crystal mine.
     * @return int;
     */
    public static function getEnergyConsumptions($level)
    {
        return 10 * $level * pow(1.1,$level);
    }
}

?>