<?php
class Logger {
    public static function logEntry($entryIndex,$success){
        $logFile = dirname(__FILE__)."/../log/entries.log";
        $handle = fopen($logFile,'a');
        $date = date(DATE_RSS,time());
        if ($success) {
            $log = "[$date] - logged entry : $entryIndex \n";
            fwrite($handle, $log);
        }else{
            $log = "[$date] - Failed to add entry :  database_error.log may have more info\n";
            fwrite($handle, $log);
        }
        fclose($handle);
    }
    public static function logError($error){
        $logFile = dirname(__FILE__)."/../log/database_errors.log";
        $handle = fopen($logFile,'a');
        $date = date(DATE_RSS,time());
        $log = "[$date] -  $error \n";
        fwrite($handle,$log);
        fclose($handle);
    }
}