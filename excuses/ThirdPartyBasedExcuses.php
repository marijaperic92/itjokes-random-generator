<?php
/**
 * Created by PhpStorm.
 * User: maperic
 * Date: 9/23/2018
 * Time: 8:18 AM
 */

class ThirdPartyBasedExcuses
{
    private $statements = [
        "Wait a few minutes ",
        "That's weird",
        "It's never done that before",
        "That is not possible",
        "Well,"
    ];
    private $reasons = [
        "the code is still compiling.",
        "you can ignore that.",
        "it's a config problem.",
        "it takes a lot of time to run.",
        "it is difficult to simulate.",
        "I thought we agreed that was going in phase 2.",
        "it was working fine just a while ago.",
    ];

    public function getQuote() {
        $random_statement = $this->statements[mt_rand(0, count($this->statements) - 1)];
        $random_because   = $this->reasons[mt_rand(0, count($this->reasons) - 1)];

        return ($random_statement . ', ' . $random_because);
    }

}