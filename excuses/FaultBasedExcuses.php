<?php
/**
 * Created by PhpStorm.
 * User: maperic
 * Date: 9/23/2018
 * Time: 8:22 AM
 */

class FaultBasedExcuses
{
    private $statements = [
        "It's not my fault",
        "I haven't touched that code",
        "I told you yesterday",
        "Actually",
        "It's version compatibility issue"
    ];
    private $reasons = [
        "your browser is out of date.",
        "it's a bug with the server software.",
        "it's always been like that.",
        "that code was written by an old developer.",
        "you must have done something wrong.",
        "the third-party API is down.",
        "I'm surprised it is even working at all.",
        "I didn't wrote that part.",
        "you must clear your cache.",
        "it's a known bug with the programming language.",
        "somebody must changed my code.",
        "you must have the wrong version."
    ];

//    public function __construct() {
//
//    }

    public function getQuote() {
        $random_statement = $this->statements[mt_rand(0, count($this->statements) - 1)];
        $random_because   = $this->reasons[mt_rand(0, count($this->reasons) - 1)];

        return ($random_statement . ', ' . $random_because);
    }

}