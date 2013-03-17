<?php

/**
 * @author jstar88
 * @copyright 2013
 */
require ('Mine.php');
class PlasmaTechnology extends Mine
{

    /**
     * PlasmaTechnology::getMetalPerHour()
     * Return the metal production per hour of this mine
     * 
     * @param int $level: the current plasma tecnology level.
     * @param int $metalMineProduction: the metal mine base production.
     * @return int;
     */
    public static function getMetalPerHour($level, $metalMineProduction)
    {
        return $metalMineProduction * 0.01 * $level;
    }


    /**
     * PlasmaTechnology::getCrystalPerHour()
     * Return the crystal production per hour of this mine
     * 
     * @param int $level: the current plasma tecnology level.
     * @param int $baseCrystalProduction: the crystal mine base production.
     * @return int;
     */
    public static function getCrystalPerHour($level, $baseCrystalProduction)
    {
        return $baseCrystalProduction * 0.0066 * $level;
    }
}

?>