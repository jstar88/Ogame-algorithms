<?php

/**
 * @author jstar88
 * @copyright 2013
 */
 
class Plunder
{
    /**
     * splitResources()
     * This function return the stolen resources implementing the "plunder algorithm".
     * 
     * from http://board.ogame.org/board703-miscellaneous/board156-archive-version-2-0/board705-help-questions-archive/board631-faq-s-guides/576831-formula-thread-v3/ 
     * 1. Fill up to 1/3 of cargo capacity with metal
     * 2. Fill up to half remaining capacity with crystal
     * 3. The rest will be filled with deuterium
     * 4. If there is still capacity available fill half of it with metal
     * 5. Now fill the rest with crystal
     *
     * 
     * @param int $capacity: the amount of current fleet capacity 
     * @param int $metal: the amount of metal in the attacked planet 
     * @param int $crystal: the amount of crystal in the attacked planet 
     * @param int $deuterium: the amount of deuterium in the attacked planet
     * @param int $percentage: the percentage of capturable resources.
     * @return array(metal => amount, crystal => amount, deuterium => amount)
     */
    public static function splitResources($capacity, $metal, $crystal, $deuterium, $percentage = 0.5)
    {
        //stolen resources
        $steal = array(
            'metal'     => 0,
            'crystal'   => 0,
            'deuterium' => 0);
            
        //max resources that can be take
        $metal     *= $percentage;
        $crystal   *= $percentage;
        $deuterium *= $percentage;

        //Fill up to 1/3 of cargo capacity with metal
        $stolen = min($capacity / 3, $metal);
        $steal['metal'] += $stolen;
        $metal          -= $stolen;
        $capacity       -= $stolen;

        //Fill up to half remaining capacity with crystal
        $stolen = min($capacity / 2, $crystal);
        $steal['crystal'] += $stolen;
        $crystal          -= $stolen;
        $capacity         -= $stolen;

        //The rest will be filled with deuterium
        $stolen = min($capacity, $deuterium);
        $steal['deuterium'] += $stolen;
        $deuterium          -= $stolen;
        $capacity           -= $stolen;

        //If there is still capacity available fill half of it with metal
        $stolen = min($capacity / 2, $metal);
        $steal['metal'] += $stolen;
        $metal          -= $stolen;
        $capacity       -= $stolen;

        //Now fill the rest with crystal
        $stolen = min($capacity, $crystal);
        $steal['crystal'] += $stolen;
        $crystal          -= $stolen;
        $capacity         -= $stolen;

        return $steal;
    }

    /**
     * splitResourcesAcs()
     * This function return the stolen resources 
     * 
     * @param int $totalCapacity: the amount of capacity of all attacking fleets
     * @param int $capacity: the amount of current fleet capacity 
     * @param int $metal: the amount of metal in the attacked planet 
     * @param int $crystal: the amount of crystal in the attacked planet 
     * @param int $deuterium: the amount of deuterium in the attacked planet 
     * @return array(metal => amount, crystal => amount, deuterium => amount)
     */
    public static function splitResourcesAcs($totalCapacity, $capacity, $metal, $crystal, $deuterium, $percentage = 0.5)
    {
        $metal     *= $capacity / $totalCapacity;
        $crystal   *= $capacity / $totalCapacity;
        $deuterium *= $capacity / $totalCapacity;

        return Plunder::splitResources($capacity, $metal, $crystal, $deuterium, $percentage);
    }
}

?>