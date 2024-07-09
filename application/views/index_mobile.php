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

              <!-- slider -->
              <?php include(APPPATH . "views/safe2/slider.php"); ?>

              <div class="my-2">
                  <div class="row px-3 py-0 align-items-center">
                      <div class="col-4 p-0">
                          <div class="d-flex align-items-center">
                              <p class="m-0 border border-warning border-1 p-1">All</p>
                              <p class="m-0 border border-warning border-1 p-1">23</p>
                              <p class="m-0 border border-warning border-1 p-1">10</p>
                              <p class="m-0 border border-warning border-1 p-1">13</p>
                          </div>
                      </div>
                      <div class="col-8 px-2">
                          <div class="owl-carousel owl-theme">
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="/sports/game/1">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d993acb06741641649068.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Cricket</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="/sports/game/2">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a05161aff1641455697.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Football</span>
                                  </a>
                                  <h6 class="m-0 p-0">10/13</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="/sports/game/3">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a30bd7c281641456395.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Basketball</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="/sports/game/4">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69b05c24ec1641454341.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Tennis</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="/sports/game/5">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a0c77c2da1641455815.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Table tennis</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="/sports/game/6">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69b96cc03d1641454486.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Volleyball</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="/sports/game/7">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a17fc1b3a1641455999.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Hockey</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="/sports/game/8">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d68eae774be1641451182.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Ice Hochey</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/9">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69c3aaa0e01641454650.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Handball</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/10">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69baf7bd4d1641454511.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Badminton</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/11">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69e88b71b91641455240.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Floorball</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/12">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69c573b6d41641454679.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Horse Racing</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/13">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69a400b48f1641454144.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Boxing</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/14">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69ca5578be1641454757.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Beach Volleyball</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/15">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69a51552b01641454161.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Lottery</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/16">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69c67283bf1641454695.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Rugby</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/17">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a26c7829b1641456236.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Golf</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/18">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d69f70e00941641455472.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Kabaddi</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/19">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a231a48a21641456177.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Bicycle Racying</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/20">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a20b6b9aa1641456139.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Chess</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                              <div class="cricket item">
                                  <a class="m-0 px-2 d-flex align-items-center text-decoration-none" href="<?php echo base_url('safe2') ?>/sports/game/21">
                                      <div class="sports_icon_img me-1">
                                          <img src="<?php echo base_url('safe2') ?>/asset/images/icon/61d6a1e2410c91641456098.png" class="w-150 h-150 white-img" alt="" />
                                      </div>
                                      <span class="text-light font-16">Skiing</span>
                                  </a>
                                  <h6 class="m-0 p-0">0/0</h6>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <ul class="nav nav-tabs row px-3" id="myTab" role="tablist">
                  <li class="nav-item col-6 p-0 BD" role="presentation">
                      <button class="nav-link active w-100 border-0" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">BD Match</button>
                  </li>
                  <li class="nav-item col-6 p-0 BD" role="presentation">
                      <button class="nav-link w-100 border-0" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">International Match</button>
                  </li>
              </ul>
              <div class="tab-content mt-2" id="myTabContent">
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <ul class="nav nav-tabs row mt-1 px-3" id="myTab2" role="tablist">
                          <li class="nav-item col-4 p-0" role="presentation">
                              <button class="nav-link w-100 active" id="home-tab2" data-bs-toggle="tab" data-bs-target="#liveInPlay" type="button" role="tab" aria-controls="liveInPlay" aria-selected="true">In-Play</button>
                          </li>
                          <li class="nav-item col-4 p-0" role="presentation">
                              <button class="nav-link w-100" id="profile-tab2" data-bs-toggle="tab" data-bs-target="#profile2" type="button" role="tab" aria-controls="profile2" aria-selected="false">Upcomming</button>
                          </li>
                          <li class="nav-item col-4 p-0" role="presentation">
                              <button class="nav-link w-100" id="profile-tab3" data-bs-toggle="tab" data-bs-target="#profile3" type="button" role="tab" aria-controls="profile3" aria-selected="false">Live TV</button>
                          </li>
                      </ul>

                      <div class="tab-content" id="myTabContent">
                          <!-- inplay content -->
                          <div class="tab-pane fade show active" id="liveInPlay" role="tabpanel" aria-labelledby="home-tab">

                            <!-- in play data -->
                            <?php include(APPPATH . "views/safe2/inplay.php"); ?>

                          </div>

                          <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab">

                              <!-- upcoming content -->

                          </div>

                          <div class="tab-pane fade" id="profile3" role="tabpanel" aria-labelledby="profile-tab">

                            <!-- youtube content -->

                          </div>

                      </div>
                  </div>
                  <div class="tab-pane fade p-3" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <p>Please Wait for getings new game</p>
                  </div>
              </div>

              <div class="upcomming_game_container py-3">
                  <h5 class="text-warning px-3" style="border-bottom: 1px solid #ffab00; padding-bottom: 2px;">Up Comming Events</h5>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - South Korea K League</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622eee158f3131647242773.png" alt="" />
                                  </div>
                                  <div id="bottom">Daejeon Hana Citizen</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-02-15</span>
                                          <span class="d-block">04:00 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622eee2b1fc501647242795.png" alt="" />
                                  </div>
                                  <div id="bottom">Ansan Greeners FC</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">1.5</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">4</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - South Korea K League</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622eef13a81ea1647243027.png" alt="" />
                                  </div>
                                  <div id="bottom">Gimpo Citizen</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">04:30 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622eef26e2fca1647243046.png" alt="" />
                                  </div>
                                  <div id="bottom">Chungnam Asan FC</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">1.8</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">3.2</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Australia A-League Men</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/62233159b10531646473561.png" alt="" />
                                  </div>
                                  <div id="bottom">Perth Glory</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">05:05 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6225e45dda90a1646650461.png" alt="" />
                                  </div>
                                  <div id="bottom">Central Coast Mariners</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2.5</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">2.5</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Italy Serie B</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213d52343a7e1645466915.png" alt="" />
                                  </div>
                                  <div id="bottom">Como</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">11:30 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6207afcfc93171644670927.png" alt="" />
                                  </div>
                                  <div id="bottom">Ternana</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2.5</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">2.5</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Italy Serie B</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61f551369a7241643467062.png" alt="" />
                                  </div>
                                  <div id="bottom">L.R. Vicenza</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">11:30 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6211dd2d9109c1645337901.png" alt="" />
                                  </div>
                                  <div id="bottom">Parma</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2.5</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">2.5</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Italy Serie B</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/620a262be34831644832299.png" alt="" />
                                  </div>
                                  <div id="bottom">Brescia</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">11:30 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213d511ac2d01645466897.png" alt="" />
                                  </div>
                                  <div id="bottom">Benevento</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">3.2</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Italy Serie B</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/620a261876c221644832280.png" alt="" />
                                  </div>
                                  <div id="bottom">Crotone</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">11:30 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213d464799881645466724.png" alt="" />
                                  </div>
                                  <div id="bottom">Frosinone</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">3.5</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">1.7</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Italy Serie B</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213d676c0ba41645467254.png" alt="" />
                                  </div>
                                  <div id="bottom">Cittadella</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">11:30 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213d477c686c1645466743.png" alt="" />
                                  </div>
                                  <div id="bottom">Reggina</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">1.8</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">4</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Italy Serie B</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213d72e248f91645467438.png" alt="" />
                                  </div>
                                  <div id="bottom">Cosenza</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">11:30 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213d66100c911645467233.png" alt="" />
                                  </div>
                                  <div id="bottom">Lecce</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">4.2</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">1.5</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Poland Ekstraklasa</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef3af7b5f61647244207.png" alt="" />
                                  </div>
                                  <div id="bottom">Legia Warszawa</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-15</span>
                                          <span class="d-block">11:45 PM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6229bd70e42591646902640.png" alt="" />
                                  </div>
                                  <div id="bottom">Bruk-Bet Termalica Nieciecza</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">1.3</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">5</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - France Ligue 2</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef4bd152131647244477.png" alt="" />
                                  </div>
                                  <div id="bottom">Rodez AF</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">12:00 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef4d490c8a1647244500.png" alt="" />
                                  </div>
                                  <div id="bottom">Guingamp</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2.5</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">2.5</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - France Ligue 2</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef57d2f9721647244669.png" alt="" />
                                  </div>
                                  <div id="bottom">Nîmes Olympique</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">12:00 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61f12d8796bee1643195783.png" alt="" />
                                  </div>
                                  <div id="bottom">AJ Auxerre</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2.5</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">2.4</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - France Ligue 2</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef6a03ebf01647244960.png" alt="" />
                                  </div>
                                  <div id="bottom">Dijon</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">12:00 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef6b1cd5fd1647244977.png" alt="" />
                                  </div>
                                  <div id="bottom">Le Havre</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">3</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - France Ligue 2</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef729c58841647245097.png" alt="" />
                                  </div>
                                  <div id="bottom">Valenciennes</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">12:00 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61ec5d4e86f9a1642880334.png" alt="" />
                                  </div>
                                  <div id="bottom">Caen</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2.4</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">2.4</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Italy Serie B</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef7b7001e31647245239.png" alt="" />
                                  </div>
                                  <div id="bottom">Nancy</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">12:00 AM</span>
                                      </div>
                                  </div>
                              </div>

                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61f81a2940f471643649577.png" alt="" />
                                  </div>
                                  <div id="bottom">Paris FC</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">3</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">1.8</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - Italy Serie B</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61f55151850461643467089.png" alt="" />
                                  </div>
                                  <div id="bottom">Alessandria</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">01:30 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6207aff1a3b851644670961.png" alt="" />
                                  </div>
                                  <div id="bottom">Monza</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">3.4</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">1.8</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - England Championship</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61f131c20bb5c1643196866.png" alt="" />
                                  </div>
                                  <div id="bottom">Barnsley</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">01:45 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622ef8ca3b0cb1647245514.png" alt="" />
                                  </div>
                                  <div id="bottom">Bristol City</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2.2</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">2.7</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - England Championship</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6225e335c82131646650165.png" alt="" />
                                  </div>
                                  <div id="bottom">Blackburn Rovers</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">01:45 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/621c65b1dfc571646028209.png" alt="" />
                                  </div>
                                  <div id="bottom">Derby County</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">1.6</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">4.5</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - England Championship</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61f131d414ee51643196884.png" alt="" />
                                  </div>
                                  <div id="bottom">Bournemouth</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">01:45 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622efa87f2e331647245959.png" alt="" />
                                  </div>
                                  <div id="bottom">Reading</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">1.1</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">6</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - England Championship</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622efb3eaed381647246142.png" alt="" />
                                  </div>
                                  <div id="bottom">Birmingham City</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">01:45 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/621c66823df7c1646028418.png" alt="" />
                                  </div>
                                  <div id="bottom">Middlesbrough</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">3.2</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">2</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - England Championship</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/622efbeccf2b41647246316.png" alt="" />
                                  </div>
                                  <div id="bottom">West Bromwich Albion</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">02:00 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6225e078c89da1646649464.png" alt="" />
                                  </div>
                                  <div id="bottom">Fulham</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">3.2</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">1.8</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - UEFA Champions League</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61d6efe2e8a661641476066.png" alt="" />
                                  </div>
                                  <div id="bottom">Manchester United</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">02:00 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/61d59afec48751641388798.png" alt="" />
                                  </div>
                                  <div id="bottom">Atlético Madrid</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">2</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">3</span>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="single_upcomming_game px-2 pt-1 border-bottom">
                      <h6 class="text-center">Football - UEFA Champions League</h6>
                      <div class="upcomming_match_container p-2">
                          <div class="row">
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213db1ab553f1645468442.png" alt="" />
                                  </div>
                                  <div id="bottom">Ajax</div>
                              </div>
                              <div class="col-4">
                                  <div class="up_game_text">
                                      <div>
                                          <span class="d-block">2022-03-16</span>
                                          <span class="d-block">02:00 AM</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-4" style="position: relative; text-align: center;">
                                  <div class="up_game_img">
                                      <img src="<?php echo base_url('safe2') ?>/asset/images/flag/6213db02842cc1645468418.png" alt="" />
                                  </div>
                                  <div id="bottom">SL Benfica</div>
                              </div>
                          </div>
                          <div class="d-flex text-dark text-center mt-2 w-100">
                              <div class="w-25 up_comming_match_score1">
                                  <span class="m-0">1.3</span>
                              </div>
                              <div class="w-50 p-0 bg-light">
                                  <div class="up_comming_match_place_btn">
                                      <a class="text-decoration-none text-light m-0 p-0 fs-6" href="javascript.void(0);"> PLACE A BET</a>
                                  </div>
                              </div>
                              <div class="w-25 up_comming_match_score2">
                                  <span class="m-0">6</span>
                              </div>
                          </div>
                      </div>
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