<?php

/**
 * @author jstar88
 * @copyright 2013
 */
require ('Mine.php');
class FusionReactor extends Mine
{

    /**
     * FusionReactor::getEnergyPerHour()
     * Return the energy production per hour of this mine
     * 
     * @param int $fusionReactorLevel: the fusion reactor level.
     * @param int $energyTechnologyLevel: the energy technology level.
     * @return int;
     */
    public static function getEnergyPerHour($fusionReactorLevel, $energyTechnologyLevel)
    {
        return 30 * $fusionReactorLevel * pow((1.05 + $energyTechnologyLevel * 0.01), $fusionReactorLevel);
    }


    /**
     * FusionReactor::getDeuteriumConsumptions()
     * Return the hourly deuterium consumptions of this mine
     * @param int $level
     * @return int;
     */
    public static function getDeuteriumConsumptions($level)
    {
        return 10 * $level * pow(1.1, $level);
    }
}

?>