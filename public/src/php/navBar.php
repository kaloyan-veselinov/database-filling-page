<?php
include "navbarLang.php";
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">GraphPass</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="#"><?php echo HOME_TXT?> <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#"><?php echo HELP_TXT ?> </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link " href="#"><?php echo CONTACT_TXT ?></a>
              </li>
          </ul>
      </div>
  </nav>