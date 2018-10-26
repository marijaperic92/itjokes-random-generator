<?php
/**
 * Created by PhpStorm.
 * User: maperic
 * Date: 9/23/2018
 * Time: 8:55 AM
 */

class SerbianPersonsBasedExcuses
{
    private $statements = [
        "Sorry but your access is forbidden as entry of Vulin in Croatia.",
        "Too many requests as money Vulin received from his canadian aunt.",
        "The system is secure, as Serbia with Vulin.",
        "The software is maybe harmful but you should not give importance like Ana Brnabic for government.",
        "Any bug it's not our fault, it's fault of people who worked before us on these applications, as Ana Brnabic said is always guilty government before this one.",
        "I'm IT ninja like kung fu Palma in reality.",
        "Be generous with my salary such as Palma giving money to lady.",
        "My code is composition that Palma would like to hear from Mozart.",
        "My code is composition that Palma would like to hear from Mozart."
    ];

    public function getQuote() {
        return $this->statements[mt_rand(0, count($this->statements) - 1)];
    }


}