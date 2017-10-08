<script type="text/javascript" src="Javascript/home.js"></script>

<div id="fullpage">

        <?php foreach ($sections as $section): ?>

            <div class="section container" id=<?= $section['id'] ?>>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="main_title"><h2><?= $section['title'] ?></h2></div>
                        <div class="main_description"><p><?= $section['description'] ?></p></div>
                    </div>
                </div>
            </div>

        <?php endforeach; ?>

</div>
