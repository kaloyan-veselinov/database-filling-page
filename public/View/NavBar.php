<?php
require_once 'Model/NavbarLang.php';
?>
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
                  <a class="nav-link " href="#"><?=CONTACT_TXT ?></a>
              </li>
          </ul>
          <form class="form-inline">
              <li>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  <?=SUBSCRIBE_NEWS?>
              </button>

              <!-- Modal -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel"><?=SUBSCRIBE_TITLE?></h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="modal-body">
                              <form class="vertical-align-section img-thumbnail">
                                  <div class="form-group">
                                      <label><?=SUBSCRIBE_EMAIL?></label>
                                      <input class="form-control" type="email">
                                  </div>
                                  <div class="form-group">
                                      <label><?=SUBSCRIBE_LANG?></label>
                                      <select class="form-control">
                                          <option value="english">English</option>
                                          <option value="french">Français</option>
                                      </select>
                                  </div>
                              </form>
                          </div>
                          <div class="modal-footer">
                              <button type="button" class="btn btn-primary"><?=SUBSCRIBE_BTN?></button>
                          </div>
                      </div>
                  </div>
              </div>
              </li>
              </ul>
          </form>
      </div>
  </nav>
</header>