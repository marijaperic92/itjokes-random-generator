<?php
/**
 *  It excuses is dummy nonsense text generator
 */
require_once('excuses/ThirdPartyBasedExcuses.php');
require_once('excuses/FaultBasedExcuses.php');
require_once('excuses/SingleStatementsExcuses.php');
require_once('excuses/SerbianPersonsBasedExcuses.php');

$excuseClasses = [ThirdPartyBasedExcuses::class, FaultBasedExcuses::class, SingleStatementsExcuses::class, SerbianPersonsBasedExcuses::class];

$quote = new $excuseClasses[mt_rand(0, count($excuseClasses) - 1)];
?><!DOCTYPE html>
<html lang="sr">
    <head>
        <meta charset="UTF-8">
        <title>Gospodar Ipsum</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <div id="page-wrapper">
            <div id="background-overly">
                
                <main>
                    <p id="quote"><?php echo $quote->getQuote(); ?></p>
                    <strong><a id="next-btn" href="#vomit">Give me another</a></strong>
                </main>
                
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script>
            $(document).ready(function(){
                $("#next-btn").click(function(e) {
                    e.preventDefault();
                    location.reload();
                });
            });
        </script>
    </body>
</html>