<?php

  $entryData = $_POST['data'];

  foreach ($entryData as $entry) {
    processEntry($entry);
  }

  function processEntry($entry){
    processKeyEvents($entry['keyUpEvents']);
    processKeyEvents($entry['keyDownEvents']);
  }

  function processKeyEvents($keyEvents){
    foreach ($keyEvents as $key) {
      processKey($key);
    }
  }

  function processKey($key){
    echo "\n";
    foreach ($key as $property => $value) {
      echo "$property => $value \n";
    }
  }
