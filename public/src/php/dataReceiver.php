<?php

  include 'databaseConnector.php';

  $entryData = $_POST['data'];

  foreach ($entryData as $entry) {
    processEntry($entry);
  }

  function processEntry($entry){
    $entryId = addEntryToDatabase($entry);
    processKeyEvents($entryId, $entry['keyUpEvents']);
    processKeyEvents($entryId, $entry['keyDownEvents']);
  }

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
