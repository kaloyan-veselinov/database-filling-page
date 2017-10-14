<?php require_once dirname(__FILE__).'/../Model/NavbarLang.php';
require_once dirname(__FILE__).'/../Model/GlobalLang.php';
?>
<script type="text/javascript" src="../Javascript/footer.js"></script>
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4">
                <ul>
                    <li>
                        <a class="footer_link" href="home"><?=HOME_TXT?></a>
                    </li>
                    <li>
                        <a class="footer_link" href="help"><?=HELP_TXT?></a>
                    </li>
                    <li>
                        <a class="footer_link" href="contact"><?=CONTACT_TXT?></a>
                    </li>
                </ul>
            </div>
            <div class="col-sm-4">
                <ul>
                    <li>
                        <a class="footer_link" href="#"><?=LEGAL_TEXT?></a>
                    </li>
                    <li>
                        <a class="footer_link" href="#"><?=CREDITS_TXT?></a>
                    </li>
                </ul>            </div>
            <div class="col-sm-4">
                <select id="lang" onchange="changeLang(this.value)" name="language"
                        class="form-control" >
                    <option value="en" <?php if($_SESSION['preferred_lang'] == 'en') echo 'selected'?>>English</option>
                    <option value="fr" <?php if($_SESSION['preferred_lang'] == 'fr') echo 'selected'?>>Français</option>
                </select>
            </div>
        </div>
    </div>
</div>
