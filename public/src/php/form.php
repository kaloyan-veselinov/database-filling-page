<?php include "src/php/dataReceiver.php";
 $displayedPassword =  getDisplayedPassword($connection);?>

<center>

  <div class="vertical-align-section img-thumbnail" id="passwordForm">

    <form id="form" method="post">

      <div class="form-group">
        <label id="welcomeMessage"></label>
        <pre id="displayedPassword"><?php echo $displayedPassword ?></pre>
      </div>

      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" name="username" class="form-control" id="usernameField">
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" class="form-control"
        id="passwordField">
      </div>

      <input type="submit" value="Submit" class="btn btn-block">

    </form>

  </div>

</center>
