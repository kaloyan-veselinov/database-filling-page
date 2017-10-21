<?php
require_once 'Model/NavbarLang.php';
?>

<script type="text/javascript" src="../Javascript/newsletter.js"></script>
<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">Woodpeckey</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item ">
                  <a class="nav-link" href="home" target="_self"><?=HOME_TXT?> <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="help"><?=HELP_TXT ?> </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="contact"><?=CONTACT_TXT ?></a>
              </li>
          </ul>
          <div class="form-inline">
              <li>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#newsletterModal">
                  <?=SUBSCRIBE_NEWS?>
              </button>

              <!-- Modal -->

                  <div class="modal fade" id="newsletterModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"><?=SUBSCRIBE_TITLE?></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <form id="newsletter_form" name="newsletter_form">
                                  <div class="form-group">
                                      <label style="color: black"><?=SUBSCRIBE_EMAIL?> </label>
                                      <input id="email" name="email" class="form-control" type="email" required>
                                  </div>
                                  <div class="form-group">
                                      <label style="color: black"><?=SUBSCRIBE_LANG?> </label>
                                      <select id="lang" name="language" class="form-control">
                                          <option value="en">English</option>
                                          <option value="fr">Français</option>
                                      </select>
                                  </div>
                                  <input type="submit" value="<?=SUBSCRIBE_BTN ?>" class="btn btn-primary">

                              </form>
                          </div>
                      </div>
                  </div>
              </div>
              </li>
              </ul>
          </div>
      </div>
  </nav>
</header>


