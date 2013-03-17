<?php

/**
 * @author jstar88
 * @copyright 2013
 */
require ('Mine.php');
class DeuteriumSynthesizer extends Mine
{
    /**
     * DeuteriumSynthesizer::getDeuteriumPerHour()
     * Return the deuterium production per hour of this mine.
     * @param int $level: the level of deuterium synthesizer.
     * @param int $maxTemperature: the max temperature of this planet.
     * @return int;
     */
    public static function getDeuteriumPerHour($level, $maxTemperature)
    {
        return 10 * $level * pow(1.1, $level) * (1.44 - 0.004 * $maxTemperature);
    }
    
    
    /**
     * DeuteriumSynthesizer::getEnergyConsumptions()
     * Return the hourly energy consumptions of this mine
     * @param int $level: the level of this Deuterium Synthesizer .
     * @return int;
     */
    public static function getEnergyConsumptions($level)
    {
        return 20 * $level * pow(1.1,$level);
    }
}

?>