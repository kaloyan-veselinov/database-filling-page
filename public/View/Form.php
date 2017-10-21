
<script type="text/javascript" src="Javascript/main.js"></script>

<div class="alert alert-success alert-dismissible fade" role="alert" id="success_alert">
    <?=SUCCESS_TXT?>
</div >
<div id="fullpage">
    <div class="section">
      <div class="vertical-align-section img-thumbnail dark-background" id="passwordForm">
        <div class="loader" id="loader"></div>
          <div id="form_div" class="hidden">
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

      </div>
    </div>
    <div class="section fp-auto-height" id="footer">
        <?php include "footer.php"?>
    </div>
</div>

