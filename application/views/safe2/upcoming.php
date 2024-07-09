<div id="upcommingsports">
  <?php if(!empty($upcoming)) { ?>

    <?php
    $i=1;
    foreach($upcoming as $val) :
        $match_id = $val->id;
        $divider = explode("=", $val->title);
        $league_title = "";

        if(!empty($divider[1])) {
            $match_title = explode("vs", strtolower($divider[0]));
            $league_title = $divider[1];
        }
        else {
            $match_title = explode("vs", strtolower($val->title));
        }
    ?>

    <div>
        <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">

            <img src="<?php echo base_url('safe2') ?>/asset/images/icon/<?php echo $val->image; ?>" alt="" class="sports_icon_img me-1 white-img" />
            <?php echo $val->name; ?>
        </div>


        <div class="col-12 p-0" style="background-color: #6c757d;">
        <?php
        if(!empty($val->league_title)) {
            $img_data = $this->db->query("SELECT filename FROM league_names WHERE id='{$val->league_title}'")->row();
        ?>
            <!-- <img width="60" class="img-circle img-small" /> -->

            <img src="<?php echo base_url(); ?>uploads/<?php echo $img_data->filename; ?>" alt="" class="sports_icon_img me-1" /><?php echo $val->league_title ?>

        <?php } else { ?>
            <?php if($val->sportscategory_id==6) : ?>
                <!-- <img src="<?php echo base_url(); ?>assets/images/football.gif" class="img-thumbnail bg-transparent border-0 img_icon"> -->

                <img src="<?php echo base_url(); ?>assets/images/football.gif" alt="" class="sports_icon_img me-1" />
            <?php elseif($val->sportscategory_id==13) : ?>
                <!-- <img src="<?php echo base_url(); ?>assets/images/tennis_ball_white.svg" class="img-thumbnail bg-transparent border-0 img_icon"> -->

                <img src="<?php echo base_url(); ?>assets/images/tennis_ball_white.svg" alt="" class="sports_icon_img me-1" />
            <?php else: ?>
                <!-- <img src="<?php //echo base_url(); ?>assets/images/cricket.gif" class="img-thumbnail bg-transparent border-0 img_icon"> -->
                <!-- <img style="max-width:50px !important" src="<?php echo base_url(); ?>assets/new_images/99_stamp_new.jpg" class="img-thumbnail bg-transparent border-0 img_icon"> -->

                <img src="<?php echo base_url(); ?>assets/new_images/99_stamp_new.jpg" alt="" class="sports_icon_img me-1" />
            <?php endif; ?>
        <?php } ?>
        </div>

        

        


        <div class="matches_and_games row align-items-center justify-content-between border-bottom border-light">
            <a href="<?php echo base_url('safe2') ?>/match/details/mobile/600" class="col-8 py-0 text-decoration-none px-3 d-block text-light">
                <span class="col-3 fs-6">Rodez AF</span> <span class="text-warning col-2">VS</span> <span class="col-3 fs-6">Guingamp</span>
            </a>
            <a href="#" class="col-4 py-0 text-decoration-none px-3 d-flex align-items-center text-light">
                <marquee direction="left" class="text-warning fs-10">16/03/2022...12:00 am</marquee>
            </a>
        </div>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingOne">
                    <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-323" aria-expanded="  true " aria-controls="c-323">
                        1st Half Win?
                    </p>
                </h2>
                <div id="c-323" class="accordion-collapse collapse show" aria-labelledby="h-323">
                    <div class="accordion-body bg-dark text-light">
                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5240"
                            data-optionid="14742"
                        >
                            <p class="m-0">Rodez AF</p>
                            <span class="input-group-text" id="basic-addon2">2.9</span>
                        </a>

                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5240"
                            data-optionid="14743"
                        >
                            <p class="m-0">Draw</p>
                            <span class="input-group-text" id="basic-addon2">2</span>
                        </a>

                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5240"
                            data-optionid="14744"
                        >
                            <p class="m-0">Guingamp</p>
                            <span class="input-group-text" id="basic-addon2">2.9</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingOne">
                    <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-324" aria-expanded="  false " aria-controls="c-324">
                        2nd Half Win?
                    </p>
                </h2>
                <div id="c-324" class="accordion-collapse collapse show" aria-labelledby="h-324">
                    <div class="accordion-body bg-dark text-light">
                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5241"
                            data-optionid="14745"
                        >
                            <p class="m-0">Rodez AF</p>
                            <span class="input-group-text" id="basic-addon2">2.7</span>
                        </a>

                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5241"
                            data-optionid="14746"
                        >
                            <p class="m-0">Draw</p>
                            <span class="input-group-text" id="basic-addon2">3</span>
                        </a>

                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5241"
                            data-optionid="14747"
                        >
                            <p class="m-0">Guingamp</p>
                            <span class="input-group-text" id="basic-addon2">2.7</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingOne">
                    <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-325" aria-expanded="  false " aria-controls="c-325">
                        Full Time Win?
                    </p>
                </h2>
                <div id="c-325" class="accordion-collapse collapse show" aria-labelledby="h-325">
                    <div class="accordion-body bg-dark text-light">
                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5242"
                            data-optionid="14748"
                        >
                            <p class="m-0">Rodez AF</p>
                            <span class="input-group-text" id="basic-addon2">2.5</span>
                        </a>

                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5242"
                            data-optionid="14749"
                        >
                            <p class="m-0">Draw</p>
                            <span class="input-group-text" id="basic-addon2">3</span>
                        </a>

                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5242"
                            data-optionid="14750"
                        >
                            <p class="m-0">Guingamp</p>
                            <span class="input-group-text" id="basic-addon2">2.5</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingOne">
                    <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-326" aria-expanded="  false " aria-controls="c-326">
                        Who Will Score 1st Goal?
                    </p>
                </h2>
                <div id="c-326" class="accordion-collapse collapse show" aria-labelledby="h-326">
                    <div class="accordion-body bg-dark text-light">
                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5243"
                            data-optionid="14751"
                        >
                            <p class="m-0">Rodez AF</p>
                            <span class="input-group-text" id="basic-addon2">1.82</span>
                        </a>

                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5243"
                            data-optionid="14752"
                        >
                            <p class="m-0">Guingamp</p>
                            <span class="input-group-text" id="basic-addon2">1.82</span>
                        </a>

                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5243"
                            data-optionid="14753"
                        >
                            <p class="m-0">No Goal</p>
                            <span class="input-group-text" id="basic-addon2">5</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingOne">
                    <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-327" aria-expanded="  false " aria-controls="c-327">
                        Both Teams To Score?
                    </p>
                </h2>
                <div id="c-327" class="accordion-collapse collapse show" aria-labelledby="h-327">
                    <div class="accordion-body bg-dark text-light">
                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5244"
                            data-optionid="14754"
                        >
                            <p class="m-0">Yes</p>
                            <span class="input-group-text" id="basic-addon2">2.2</span>
                        </a>

                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5244"
                            data-optionid="14755"
                        >
                            <p class="m-0">No</p>
                            <span class="input-group-text" id="basic-addon2">1.5</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingOne">
                    <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-328" aria-expanded="  false " aria-controls="c-328">
                        Total Goals?
                    </p>
                </h2>
                <div id="c-328" class="accordion-collapse collapse show" aria-labelledby="h-328">
                    <div class="accordion-body bg-dark text-light">
                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5245"
                            data-optionid="14756"
                        >
                            <p class="m-0">1 Goal</p>
                            <span class="input-group-text" id="basic-addon2">3</span>
                        </a>

                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5245"
                            data-optionid="14757"
                        >
                            <p class="m-0">2 Goals</p>
                            <span class="input-group-text" id="basic-addon2">2.5</span>
                        </a>

                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5245"
                            data-optionid="14758"
                        >
                            <p class="m-0">3 Goals</p>
                            <span class="input-group-text" id="basic-addon2">2.5</span>
                        </a>

                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5245"
                            data-optionid="14759"
                        >
                            <p class="m-0">4+ Goals</p>
                            <span class="input-group-text" id="basic-addon2">3</span>
                        </a>

                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5245"
                            data-optionid="14760"
                        >
                            <p class="m-0">No Goal</p>
                            <span class="input-group-text" id="basic-addon2">5</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="accordion-item border-0">
                <h2 class="accordion-header" id="headingOne">
                    <p class="accordion-button m-0" data-bs-toggle="collapse" data-bs-target="#c-329" aria-expanded="  false " aria-controls="c-329">
                        Total Match Goals-Under Or Over?
                    </p>
                </h2>
                <div id="c-329" class="accordion-collapse collapse show" aria-labelledby="h-329">
                    <div class="accordion-body bg-dark text-light">
                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5246"
                            data-optionid="14761"
                        >
                            <p class="m-0">Under 2.5 Goals</p>
                            <span class="input-group-text" id="basic-addon2">1.4</span>
                        </a>

                        <a
                            href="javascript:void(0)"
                            class="bg-light d-flex align-items-center justify-content-between text-decoration-none ps-3 text-dark optionBetHistory"
                            data-gameid="600"
                            data-questionid="5246"
                            data-optionid="14762"
                        >
                            <p class="m-0">Over 2.5 Goals</p>
                            <span class="input-group-text" id="basic-addon2">2.5</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
  <?php } else { ?>

    <div>
        <div class="col-12 p-0" style="margin-top: 3px; background: darkgray;">
            <h4 style="padding:10px">No matches available.</h4>
        </div>
    </div>

  <?php } ?>
</div>