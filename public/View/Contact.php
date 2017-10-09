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
                    <input type="text" style="width: 60%" required>
                </div>
                <div class="form-group">
                    <div>
                    <label><?=CONTACT_EMAIL?></label>
                    </div>
                    <input type="text" style="width: 60%" required>
                </div>
                <div class="form-group">
                    <div>
                    <label><?=CONTACT_MESSAGE?></label>
                    </div>
                    <textarea maxlength="2000" cols="60" rows="8" required></textarea>
                </div>
                <div id="char_counter" class="text-right"></div>
                <div class="form-group">
                    <input type="submit" value="<?=CONTACT_SUBMIT?>">
                </div>
            </form>
        </div>
    </div>

