<?php
/*
  //database connection parameters
  define(SERVERNAME, "localhost");
  define(USERNAME, "root");
  define(PASSWORD, "");
*/
  //initialising database connection
  $connection = new mysqli("localhost", "user","password",'scotchbox');
  if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
  }

  function closeDatabaseConnection($connection){
    mysqli_close($connection);
  }
/*
  function addEntryToDatabase($entry){

    //preparing statement
    $query = 'INSERT INTO entry (password, username, date, locale, browser, platform, submitMethod)
              VALUES (?,?,?,?,?,?)';
    $preparedStatement = $connection->prepare($query);
    $preparedStatement->bind_param("ssissss", $password, $username, $date, $locale, $browser, $platform,
                                    $submitMethod, $username);

    //setting parameters
    $password = $entry['password'];
    $username = htmlspecialchars($entry['username']);
    $date = $entry['date'];
    $locale = $entry['locale'];
    $browser = $entry['browser'];
    $platform = $entry['platform'];
    $submitMethod = $entry['submitMethod'];

    //executing query
    $preparedStatement->execute();
    
    return getEntryId($username);
  }

  function getEntryId($username){
    $query = 'SELECT MAX(id) FROM entry WHERE username = ?';
    $preparedStatement = $conn->prepare($query);
    $preparedStatement->bind_param("s", $username);
    $res = $preparedStatement->execute();
    if ($res->num_rows > 0) {
      return $res->fetch_assoc()[0];
    }
    else return -1;
  }
*/
  function getDisplayedPassword($connection){
      $query = 'SELECT password FROM passwords';
      if(      $res = $connection->query($query)){
        $numRows = $res->num_rows;
        $id = rand(0,$numRows-1);
        $res->data_seek($id);
        $values =  $res->fetch_assoc();

          return $values["password"];
      }else{
          return $connection->error;
      }
  }
