<?php

/**
 * @author jstar88
 * @copyright 2013
 */
//http://board.ogame.org/board703-miscellaneous/board156-archive-version-2-0/board705-help-questions-archive/board631-faq-s-guides/576831-formula-thread-v3/#espionage

class Espionage
{

    /**
     * getSpyLevel()
     * 
     * @param int $probes: amount of espionage probes sent to spy
     * @param int $yourEspionageTechnology
     * @param int $opponentEspionageTechnology
     * @return
     *       >= 2 for resources, activity, and ships
     *       >= 3 for resources, activity, ships, and defense
     *       >= 5 for resources, activity, ships, defense, and buildings
     *       >= 7 for resources, activity, ships, defense, buildings, and research
     */
    public static function getSpyLevel($probes, $yourEspionageTechnology, $opponentEspionageTechnology)
    {
        $diff = $yourEspionageTechnology - $opponentEspionageTechnology;
        if ($diff > 0)
        {
            return $probes + pow($diff, 2);
        }
        return $probes - pow($diff, 2);
    }

    /**
     * getCounterEspionage()
     * This function return the probability to be discovered.
     * 
     * @param int $probes: amount of espionage probes sent to spy
     * @param int $ships: amount of enemy ships
     * @param int $yourEspionageTechnology
     * @param int $opponentEspionageTechnology
     * @return int between 0 and 1
     */
    public static function getCounterEspionage($probes, $ships, $yourEspionageTechnology, $opponentEspionageTechnology)
    {
        $theoric = $probes * $ships / (pow(100, ($yourEspionageTechnology - $opponentEspionageTechnology))) + 2;
        return mt_rand(0, floor($theoric)) / 100;
    }
}

?>