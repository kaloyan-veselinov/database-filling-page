<?php

function logEntry($entryIndex){
    $currentPath = getcwd();
    $logFile = "$currentPath/../../log/entries.log";
    $handle = fopen($logFile,'a');
    $date = date(DATE_RSS,time());
    $log = "[$date] - logged entry : $entryIndex \n";
    fwrite($handle,$log);
    fclose($handle);
}