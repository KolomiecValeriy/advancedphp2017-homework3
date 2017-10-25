<?php

require_once __DIR__.'/vendor/autoload.php';


use Application\Write;

$write = new Write();

$write->writeToFile($someFile, $someData);
$write->writeToDatabase($someFile, $someData);
