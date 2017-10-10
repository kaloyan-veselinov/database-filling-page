
<script type="text/javascript" src="Javascript/main.js"></script>


<center>

  <div class="vertical-align-section img-thumbnail dark-background" id="passwordForm">

    <form id="form">

      <div class="form-group">
        <label><?=PASSWORD_COUNTER_TXT_1 ?>
            <label id="passwordCounter"></label>
            <?=PASSWORD_COUNTER_TXT_2 ?></label>

          <pre id="displayedPassword"><?=$displayedPassword ?></pre>
      </div>

      <div class="form-group">
        <label for="username"><?=USERNAME_TXT ?></label>
        <input type="text" name="username" class="form-control" id="usernameField">
      </div>

      <div class="form-group " id="password-group">
        <label for="password"><?=Password_TXT ?></label>
        <input type="password" name="password" class="form-control"
        id="passwordField">
      </div>

      <input type="submit" value="<?=SUBMIT_TXT ?>" class="btn btn-block">

    </form>

  </div>

</center>
