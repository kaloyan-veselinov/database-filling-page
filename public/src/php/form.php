<?php include "src/php/dataReceiver.php";
include "src/php/formLang.php";
 $displayedPassword =  getDisplayedPassword($connection);?>

<center>

  <div class="vertical-align-section img-thumbnail" id="passwordForm">

    <form id="form">

      <div class="form-group">
        <label><?php echo PASSWORD_COUNTER_TXT_1 ?>
            <label id="passwordCounter"></label>
            <?php echo PASSWORD_COUNTER_TXT_2 ?></label>

          <pre id="displayedPassword"><?php echo $displayedPassword ?></pre>
      </div>

      <div class="form-group">
        <label for="username"><?php echo USERNAME_TXT ?></label>
        <input type="text" name="username" class="form-control" id="usernameField">
      </div>

      <div class="form-group " id="password-group">
        <label for="password"><?php echo Password_TXT ?></label>
        <input type="password" name="password" class="form-control"
        id="passwordField">
      </div>

      <input type="submit" value="<?php echo SUBMIT_TXT ?>" class="btn btn-block">

    </form>

  </div>

</center>
