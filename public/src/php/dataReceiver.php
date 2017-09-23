<?php
    include "databaseConnector.php";
    include "logger.php";
    if(isset($_POST['data'])) {
        $entryData = $_POST['data'];
        foreach ($entryData as $entry) {
            processEntry($entry,$connection);
        }
    }

  function processEntry($entry,$connection){
    $entryId = addEntryToDatabase($entry,$connection);
    logEntry($entryId);
    //processKeyEvents($entryId, $entry['keyUpEvents']);
    //processKeyEvents($entryId, $entry['keyDownEvents']);
  }
/*
  function processKeyUpEvents($entryId, $keyEvents){
    processKeyEvents($entryId, "keyup", $keyEvents);
  }

  function processKeyEvents($entryId, $entryEventType, $keyEvents){
    foreach ($keyEvents as $key) {
      processKey($entryId, $entryEventType, $key);
    }
  }

  function processKey($entryId, $entryEventType, $key){
    echo "\n";
    foreach ($key as $property => $value) {
      echo "$property => $value \n";
    }
  }
*/