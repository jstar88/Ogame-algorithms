<?php

/**
 * @author jstar88
 * @copyright 2013
 */

// as http://board.ogame.org/board703-miscellaneous/board156-archive-version-2-0/board705-help-questions-archive/board631-faq-s-guides/576831-formula-thread-v3/#costs

class Cost
{
    /**
     * getCumulativeCost()
     * This function return the sum of all costs until specific level(included)
     * 
     * @param int $baseCost: the base cost(level = 1) of current builds
     * @param int $costIncreaseFactor: the cost increase factor
     * @param int $level: the desired level
     * @return int cost;
     */
    public static function getCumulativeCost($baseCost, $costIncreaseFactor, $level)
    {
        return floor($baseCost * (1 - pow($costIncreaseFactor, $level)) / (1 - $costIncreaseFactor));
    }

    /**
     * getCost()
     * This function return the cost of the corrispective builds at specific level
     * 
     * @param int $baseCost: the base cost(level = 1) of current builds
     * @param int $costIncreaseFactor: the cost increase factor
     * @param int $level: the desired level
     * @return int cost;
     */
    public static function getCost($baseCost, $costIncreaseFactor, $level)
    {
        return floor($baseCost * pow($costIncreaseFactor, ($level - 1)));
    }

    /**
     * getDeconstructionCost()
     * This function return the cost to deconstruct the current builds.
     * 
     * Note: Terraformers and Lunar Bases cannot be deconstructed.
     * Note: Deconstruction will be free if you have level 25 Ion Technology or higher.
     * Note: The Ion Technology cost reduction does not affect the deconstruct time.
     * 
     * @param int $baseCost: the base cost(level = 1) of current builds
     * @param int $costIncreaseFactor: the cost increase factor
     * @param int $levelIonTechnology: the user ion tecnology level 
     * @param int $level: the current level -1
     * @return int cost;
     */
    public static function getDeconstructionCost($baseCost, $costIncreaseFactor, $levelIonTechnology, $level)
    {
        return floor($baseCost * pow($costIncreaseFactor, ($level - 1)) * (1 - 0.04 * $levelIonTechnology));
    }
}

?>