<?php
/**
 * Created by PhpStorm.
 * User: maperic
 * Date: 9/23/2018
 * Time: 8:32 AM
 */

class SingleStatementsExcuses
{
    private $statements = [
        "Your browser must be caching the old content.",
        "Are you using Internet Explorer Web Browser?",
        "It must be a firewall issue.",
        "Did you check for a virus on your system?",
        "Oh, that was just a temporary fix.",
        "It seems to be working well in my machine!",
        "I can't understand why?",
        "Doesn't work? Maybe you can try restarting it! :)",
        "Are you currently using the latest build?",
        "It works, but it hasn't be tested.",
        "Where were you when the program blew up?",
        "That isn't covered by my job description.",
        "That error means it was successful.",
        "I haven't had a chance to run that code yet.",
        "It probably won't happen again.",
        "It was working in my head."
    ];

    public function getQuote() {
        return $this->statements[mt_rand(0, count($this->statements) - 1)];
    }

}