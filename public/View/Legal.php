<?php
require_once dirname(__FILE__).'/../Model/LegalLang.php';
?>

<div id="fullpage">
    <div class="section">
        <div class="dark-background img-thumbnail" id="contact_section">
            <h1><?=LEGAL_TITLE?></h1>
            <div>
                <label><?=HOST_TITLE?></label>
                <p><?=HOST_NAME?><br/><?=HOST_ADDRESS?></p>
            </div>
        </div>
    </div>
    <div class="section fp-auto-height" id="footer">
        <?php include "footer.php"?>
    </div>
</div>
