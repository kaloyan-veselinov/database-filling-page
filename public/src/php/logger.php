<?php

function logEntry($entryIndex,$success){
    $currentPath = getcwd();
    $logFile = "$currentPath/../../log/entries.log";
    $handle = fopen($logFile,'a');
    $date = date(DATE_RSS,time());
    if ($success) {
        $log = "[$date] - logged entry : $entryIndex \n";
        fwrite($handle, $log);
    }else{
        $log = "[$date] - Failed to add entry : $entryIndex database_error.log may have more info\n";
        fwrite($handle, $log);
    }
    fclose($handle);
}

function logError($error){
    $currentPath = getcwd();
    $logFile = "$currentPath/../../log/database_errors.log";
    $handle = fopen($logFile,'a');

    $date = date(DATE_RSS,time());
    $log = "[$date] -  $error \n";
    fwrite($handle,$log);
    fclose($handle);
}