<?php include(APPPATH . "views/safe2/header.php"); ?>


<body>
  <div class="container-scroller">
      <?php include(APPPATH . "views/safe2/nav.php"); ?>
      <div class="container-fluid page-body-wrapper">
          <div class="fixed-top">
              <nav class="navbar p-3 row align-items-center">
                  <div class="col-5">
                      <a class="text-decoration-none m-0 p-0 text-warning home_logo_name" href="<?php echo base_url() ?>/"><img width="100" height="40" src="<?php echo base_url('safe2') ?>/asset/images/logoIcon/logo.png" /></a>
                  </div>
                  <div class="col-7 d-flex align-items-center p-0 justify-content-end">
                      <ul class="d-flex align-items-center">
                          <li class="mx-1">
                              <a class="nav-link btn-warning register_btn px-2 py-1 rounded" href="<?php echo base_url('user-register') ?>/">Register</a>
                          </li>
                          <li class="mx-1">
                              <a class="nav-link btn-warning log_btn px-2 py-1 rounded" href="<?php echo base_url('user-login') ?>/">Login</a>
                          </li>

                          <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle btn-dark log_btn px-2 py-1 rounded" id="messageDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false" style="">
                                  <i class="mdi mdi-email"></i>
                                  <span class="count bg-success"></span>
                              </a>
                              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                                  <h6 class="p-3 mb-0">Messages</h6>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item preview-item">
                                      <div class="preview-thumbnail"></div>
                                      <div class="preview-item-content">
                                          <p class="preview-subject ellipsis mb-1">Mark send you a message</p>
                                          <p class="text-muted mb-0">1 Minutes ago</p>
                                      </div>
                                  </a>
                                  <div class="dropdown-divider"></div>
                                  <p class="p-3 mb-0 text-center">4 new messages</p>
                              </div>
                          </li>
                      </ul>
                      <button class="mx-1 navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                          <i class="text-light fs-3 fas fa-bars"></i>
                      </button>
                  </div>
              </nav>
              <!-- notice panel -->
              <?php include(APPPATH . "views/safe2/notice.php"); ?>
          </div>

          <div class="main-panel">

                    <div class="main-panel">

                        <?php include(APPPATH . "views/customer/common/flash.php"); ?>

                        <div class="input_container">
                            <div class="registration_image">
                                <a href="<?php echo base_url() ?>/" class="text-decoration-none">
                                    <h3 class="text-warning">Welcome back to SAFE 60</h3>
                                </a>
                            </div>
                            <form action="" method="POST" class="w-100 h-100">
                                <input type="hidden" name="_token" value="TLviDQzFs0RPl2yMNNgu4qIxFUwsOYxaazMz85Nj" />
                                <div class="input_item">
                                    <label for="username">Username</label>
                                    <input required type="text" class="form-control bg-transparent" id="username" name="username" placeholder="Enter User Name" />
                                </div>
                                <div class="input_item">
                                    <label for="password">Password</label>
                                    <input required type="password" class="form-control bg-transparent" id="password" name="password" placeholder="Enter Password" />
                                </div>
                                <!-- <p><a href="<?php //echo base_url('password-reset') ?>/" class="text-white">Forgot password?</a></p> -->
                                <button type="submit" class="p-2 border-0 w-100 rounded-pill">Login</button>
                                <p class="text-start text-light mt-1">New here?<a class="ms-2 text-warning" href="<?php echo base_url('user-register') ?>/">Register</a></p>
                            </form>
                        </div>
                    </div>

              <!-- footer content -->
              <?php include(APPPATH . "views/safe2/footer.php"); ?>

          </div>
      </div>
  </div>

  <?php include(APPPATH . "views/safe2/footer_files.php"); ?>

</body>
</html>