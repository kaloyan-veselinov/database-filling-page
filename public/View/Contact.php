<script type="text/javascript" src="../Javascript/contact.js"></script>

<div class="dark-background img-thumbnail" id="contact_section">
        <div>
            <h1><?=CONTACT_TITLE?></h1>
        </div>
        <div>
            <p><?=CONTACT_PRE?></p>
        </div>
        <div>
            <form id="contact_form">
                <div class="form-group">
                    <div>
                    <label><?=CONTACT_NAME?></label>
                    </div>
                    <input type="text" maxlength="200" style="width: 60%" required id="contact_name">
                </div>
                <div class="form-group">
                    <div>
                    <label><?=CONTACT_EMAIL?></label>
                    </div>
                    <input type="email" maxlength="500" style="width: 60%" required id="contact_email">
                </div>
                <div class="form-group">
                    <div>
                        <label><?=CONTACT_SUBJECT?></label>
                    </div><input type="text" maxlength="200" style="width: 60%" required id="contact_subject">
                </div>
                <div class="form-group">
                    <div>
                    <label><?=CONTACT_MESSAGE?></label>
                    </div>
                    <textarea maxlength="2000" cols="60" rows="8" required id="msg_field"></textarea>
                </div>
                <div class="text-right"><?=CONTACT_COUNTER?><label id="char_counter">2000</label></div>
                <div class="form-group">
                    <input type="submit" value="<?=CONTACT_SUBMIT?>">
                </div>
            </form>
        </div>
    </div>

