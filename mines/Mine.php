<?php

/**
 * @author jstar88
 * @copyright 2013
 */
class Mine
{

    /**
     * Mine::getMetalPerHour()
     * Return the metal production per hour of this mine
     * 
     * @param int $level
     * @return 0;
     */
    public static function getMetalPerHour($level)
    {
        return 0;
    }


    /**
     * Mine::getCrystalPerHour()
     * Return the crystal production per hour of this mine
     * 
     * @param int $level
     * @return 0;
     */
    public static function getCrystalPerHour($level)
    {
        return 0;
    }


    /**
     * Mine::getDeuteriumPerHour()
     * Return the deuterium production per hour of this mine
     * 
     * @param int $level
     * @return 0;
     */
    public static function getDeuteriumPerHour($level)
    {
        return 0;
    }

    /**
     * Mine::getEnergyPerHour()
     * Return the energy production per hour of this mine
     * 
     * @param int $level
     * @return 0;
     */
    public static function getEnergyPerHour($level)
    {
        return 0;
    }


    /**
     * Mine::getStorageCapacity()
     * The storage capacity of the current mine
     * @param int $level
     * @return int;
     */
    public static function getStorageCapacity($level)
    {
        return floor(2.5 * exp(20 * $level / 33)) * 5000;
    }


    /**
     * Mine::getEnergyConsumptions()
     * Return the hourly energy consumptions of this mine
     * @param int $level
     * @return int;
     */
    public static function getEnergyConsumptions($level)
    {
        return 0;
    }


    /**
     * Mine::getDeuteriumConsumptions()
     * Return the hourly deuterium consumptions of this mine
     * @param int $level
     * @return int;
     */
    public static function getDeuteriumConsumptions($level)
    {
        return 0;
    }

    /**
     * Mine::constructionTime()
     * 
     * @param int $metal: the metal required for the build
     * @param int $crystal: the crystal required for the build
     * @param int $level: the builds level
     * @param int $roboticsFactoryLevel
     * @param int $naniteFactoryLevel
     * @return int.
     */
    public static function constructionTime($metal, $crystal, $level, $roboticsFactoryLevel, $naniteFactoryLevel)
    {
        return ($metal + $crystal) / (2500 * max(4 - $level / 2, 1) * (1 + $roboticsFactoryLevel) * pow(2, $naniteFactoryLevel));
    }

}

?>