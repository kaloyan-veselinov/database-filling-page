<?php

  //database connection parameters
  define("HOSTNAME", "zeu.host.name");
  define("USER", "bob");
  define("PASSWORD", "password");
  define("DATABASE", "dbName");

  //initialising database connection
  $connection = new mysqli(HOSTNAME, USER, PASSWORD, DATABASE);
  if ($connection->connect_error) {
      die(logError("Connection failed: " . $connection->connect_error));
  }

    // closes the connection
  function closeDatabaseConnection($connection)
  {
      mysqli_close($connection);
  }


    // adds an entry to the database
  function addEntryToDatabase($entry, $connection)
  {

      //setting parameters
      $password = $entry['password'];
      $username = htmlspecialchars($entry['username']);
      // Converting javascript time to unix time
      $date = (intdiv($entry['date'], 1000));
      $locale = $entry['locale'];
      $browser = $entry['browser'];
      $platform = $entry['platform'];
      $submitMethod = $entry['submitMethod'];

      //preparing statement
      $query = 'INSERT INTO entries (password, username, date, locale, browser, platform, submitMethod)
              VALUES (?,?,FROM_UNIXTIME(?),?,?,?,?)';
      if ($preparedStatement = $connection->prepare($query)) {
          $preparedStatement->bind_param(
            "ssissss",
            $password,
            $username,
            $date,
            $locale,
            $browser,
            $platform,
            $submitMethod
        );


          //executing query
          if (!$preparedStatement->execute()) {
              logError($connection->error);
          }
          $preparedStatement->close();

          return getEntryId($connection, $username, $password);
      } else {
          logError($connection->error);
          return -1;
      }
  }

  function addKeyEventsToEntry($connection, $entry, $downEvents, $upEvents)
  {
      for ($i = 0; $i<sizeof($downEvents);$i++) {
          $query ="INSERT INTO keyEvents (keyId,entryId,keyValue,location,ctrlKey,
              altKey,shiftKey,timeDown,timeUp) VALUES (?,?,?,?,?,?,?,?,?);";
          if ($preparedStatement = $connection->prepare($query)) {
              $preparedStatement->bind_param("iissiiidd", $downEvents[$i]["keyId"], $entry, $downEvents[$i]["key"], $downEvents[$i]["location"], $downEvents[$i]["ctrlKey"], $downEvents[$i]["altKey"], $downEvents[$i]["shiftKey"], $downEvents[$i]["time"], $upEvents[$i]["time"]);
              $preparedStatement->execute();
              if ($connection->affected_rows > 0) {
                  echo "$connection->affected_rows\n";
              } else {
                  logError(htmlspecialchars($connection->error));
              }
          } else {
              logError(htmlspecialchars($connection->error));
              logError(htmlspecialchars($preparedStatement->error));
          }
      }
  }

  // gets last entry index for the specified user and password
  function getEntryId($connection, $username, $password)
  {
      $query = 'SELECT MAX(entryId) FROM entries WHERE username = ? AND password= ?';
      $preparedStatement = $connection->prepare($query);
      $preparedStatement->bind_param("ss", $username, $password);
      if ($preparedStatement->execute()) {
          $res = $preparedStatement->get_result();
          $res->data_seek(0);
          $values =  $res->fetch_assoc();
          $preparedStatement->close();
          return $values["MAX(entryId)"];
      } else {
          logError(htmlspecialchars($connection->error));
          return -1;
      }
  }


  // gets the password to display from database
  function getDisplayedPassword($connection)
  {
      $query = 'SELECT password FROM passwords';
      if ($res = $connection->query($query)) {
          $numRows = $res->num_rows;
          $id = rand(0, $numRows-1);
          $res->data_seek($id);
          $values =  $res->fetch_assoc();

          return $values["password"];
      } else {
          logError(htmlspecialchars($connection->error));
          return $connection->error;
      }
  }
