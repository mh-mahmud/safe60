<style>
    .list-inline-item {
        margin-left: 0px !important;
        /*margin-top: -7px !important;*/
        margin-bottom: -3px !important;
    }
    /*.list-inline-item:last-child {
      margin-bottom: -12px !important;
    }*/
    .bg-white-custom {
        box-shadow: none;
        border-radius: 0px;
        background-color: #ffffff;
        border: 1px solid #ccc !important;
    }
    .live-match-title {
        -webkit-animation: Font 2.2s infinite alternate;
        font-weight: 700;
        color: red;
    }
    .fixed-width-120 {
        width: auto !important;
    }
    @media (max-width: 420px) {
        .fixed-width-120 {
            /*width: 115px !important;*/
            width: auto !important;
        }
    }
    @media (max-width: 400px) {
        .fixed-width-120 {
            /*width: 129px !important;*/
            width: auto !important;
        }
    }
    @media (max-width: 360px) {
        .fixed-width-120 {
            /*width: 115px !important;*/
            width: auto !important;
        }
        #sportsList .list-inline-item {
            margin-left: 0px;
        }
        .badge {
            display: inline-block;
            min-width: 10px;
            padding: 3px 7px;
            font-size: 10px;
            font-weight: 500;
            line-height: 1;
            color: #fff;
            text-align: center;
            white-space: nowrap;
            vertical-align: baseline;
            background-color: #777;
            border-radius: 10px;
        }

        /*.col-sm-4, .col-xs-4 {
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 5px !important;
            padding-left: 5px !important;
        }*/

        .soft-color {
            margin-left: 0px !important;
            margin-right: 0px !important;
            padding-left: 0px !important;
            padding-right: 0px !important;
        }

    }

    @media (min-width: 480px) and (max-width: 580px) {
        .col-xs-6 {
            width: 50% !important;
        }
    }

    @media (min-width: 320px) and (max-width: 480px) {
        .col-xs-6 {
            width: 50% !important;
        }
    }

</style>

<style>
    /* Firefox old*/
    @-moz-keyframes blink {
        0% {
            opacity:1;
        }
        50% {
            opacity:0;
        }
        100% {
            opacity:1;
        }
    } 

    @-webkit-keyframes blink {
        0% {
            opacity:1;
        }
        50% {
            opacity:0;
        }
        100% {
            opacity:1;
        }
    }
    /* IE */
    @-ms-keyframes blink {
        0% {
            opacity:1;
        }
        50% {
            opacity:0;
        }
        100% {
            opacity:1;
        }
    } 
    /* Opera and prob css3 final iteration */
    @keyframes blink {
        0% {
            opacity:1;
        }
        50% {
            opacity:0;
        }
        100% {
            opacity:1;
        }
    } 
    .blink-image {
        -moz-animation: blink normal 1s infinite ease-in-out; /* Firefox */
        -webkit-animation: blink normal 1s infinite ease-in-out; /* Webkit */
        -ms-animation: blink normal 1s infinite ease-in-out; /* IE */
        animation: blink normal 1s infinite ease-in-out; /* Opera and prob css3 final iteration */
    }
</style>

<?php if(!empty($live)) : ?>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
            <div class="bg-dark card-header collapseBtn liveBtn" style="background-color:#4DB6AC !important;">
                <h5 class="mb-0">
                    <button class="btn btn-link text-khet-yellow text-yellow" style="text-decoration: underline;">
                        <img class="blink-image" width="40px" src="<?php echo base_url(); ?>assets/images/_live.png">
                        <!-- &nbsp;&nbsp;<strong>Live</strong> -->
                    </button>
                    <small class="pull-right text-khet-yellow match-count text-smaller">
                        <strong><?php echo count($live); ?> Matches</strong>
                    </small>
                </h5>
            </div>

            <?php foreach($live as $val) : $match_id = $val->id; ?>
                <div class="collapseBody col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 collapse show" style="">
                    <div class="card-header bg-white col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
                        <div id="match-title-<?= $match_id; ?>" aria-expanded="false" role="button" class="collapseBtnMatchTitle card-body text-gray row col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-5 pb-5 pl-0 pr-0 ml-0 bg-white-grad sport-1" style="background-color:yellow !important">

                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1 m-0 p-0 text-center">

                                <?php if($val->sportscategory_id==6) : ?>
                                    <img src="<?php echo base_url(); ?>assets/images/football.gif" class="img-thumbnail bg-transparent border-0 img_icon">
                                <?php elseif($val->sportscategory_id==13) : ?>
                                    <img src="<?php echo base_url(); ?>assets/images/tennis_ball_white.svg" class="img-thumbnail bg-transparent border-0 img_icon">
                                <?php else: ?>
                                    <!-- <img src="<?php //echo base_url(); ?>assets/images/cricket.gif" class="img-thumbnail bg-transparent border-0 img_icon"> -->
                                    <img style="max-width:50px !important" src="<?php echo base_url(); ?>assets/new_images/99_stamp_new.jpg" class="img-thumbnail bg-transparent border-0 img_icon">
                                <?php endif; ?>

                            </div>

                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10 match-class">
                                <strong class="clearfix">
                                    <?php echo str_replace("vs", " <span class='live-match-title'>VS</span> ", $val->title); ?>
                                </strong>
                                <small class="border-right-solid pr-2"><?php echo $val->league_title; ?></small>
                                <small class="text-green pl-1">
                                    <strong>@ <?php echo date("h:i A", strtotime($val->starting_time)); ?></strong>
                                </small>
                            </div>

                            <?php
                                $get_bet_data = $this->db->query("SELECT * FROM match_option WHERE match_id='{$val->id}' AND status=1 ORDER BY match_option_serial ASC")->result();
                            ?>

                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1 match-time text-center p-0 shots">
                                <small><strong class="text-green"><?php echo count($get_bet_data); ?> Shots</strong></small>
                            </div>
                        </div>

                        <div id="match-data-<?= $match_id; ?>" class="collapse show m-0 p-0 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <?php if(!empty($val->notification)) { ?>
                            <div class="m-0 p-0 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="bg-black-real container m-0 pt-5 pb-10 p-15 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="text-khet-yellow"><b><?php echo $val->notification; ?></b></div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php
                            $i=rand(10, 10000);
                            foreach($get_bet_data as $data) :
                                $options = $this->db->query("SELECT * FROM match_option_details WHERE match_option_id='{$data->id}' ORDER BY option_serial ASC")->result();
                                if( !empty($data->end_time) ) {
                                    if( time() > strtotime($data->end_time) ) {
                                        $this->db->query("UPDATE match_option SET status=2 WHERE status=1 AND id='{$data->id}' LIMIT 1");
                                    }
                                }

                            ?>

                            <div class="bg-white container m-0 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 odd-sport-row">
                                <div class="row">
                                    <div data-match-id="<?php echo $i; ?>" id="question-title-<?php echo $i; ?>" aria-expanded="false" role="button" class="cream-color capitalize col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 under-red cursor-pointer collapseBtnAnswers clearfix">
                                        <strong><?php echo $data->match_option_title; ?></strong>
                                        <span class="badge bg blink-image">Live</span>
                                    </div>

                                    <!-- if you want collapse mode, then set collapse to the below class -->
                                    <div style="background-color:#245479 !important;padding-top:0px;padding-bottom:0px;" id="question-data-<?php echo $i; ?>" class="collapse show col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 under-red clearfix soft-color">

                                        <div class="row">
                                            <?php foreach($options as $op) : ?>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-6" style="border:1px solid #333;color:#00C851;padding:10px;cursor:pointer;" onclick='return showBetModal("<?php echo $op->option_coin; ?>", "<?php echo $op->id; ?>");'>

                                                <div style="" class="">

                                                    <span class="pull-left" style="font-size:11px;overflow:hidden;margin-left:10px;padding-left:4px">
                                                        <b><?php echo $op->option_title; ?></b>
                                                    </span>
                                                    
                                                    <span class="pull-right badge" style="background-color:#00C851 !important;color:yellow;overflow:hidden;margin-right:10px"><?php echo $op->option_coin; ?></span>

                                                </div>

                                            </div>
                                            <?php endforeach; ?>
                                        </div>



                                    </div>

                                </div>
                            </div>

                            <?php $i++; endforeach; ?>

                        </div>

                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    </div>
<?php else: ?>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
            <div class="bg-dark card-header collapseBtn liveBtn">
                <h5 class="mb-0">
                    <button class="btn btn-link text-khet-yellow text-yellow" style="text-decoration: underline;">
                        <img width="40px" src="<?php echo base_url(); ?>assets/images/_live.png">
                        <!-- &nbsp;&nbsp;<strong>Live</strong> -->
                    </button>
                    <small class="pull-right text-khet-yellow match-count text-smaller"><strong>0 Matches</strong></small>
                </h5>
            </div>
            <div class="bg-white col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
                <div class="card-header bg-white col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix border-bottom pt-5 pb-5">
                        <h5 class="mb-0 btn pl-0 match-title text-danger"><strong>No matches available.</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<?php if(!empty($upcoming)) { ?>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pr-0 remove-pl pl-0 mt-5">
            <div style="background-color:#1266F1 !important;" class="bg-dark card-header collapseBtn upcomingBtn">
            <!-- <div style="background-color:#4DB6AC !important;" class="bg-dark card-header collapseBtn upcomingBtn"> -->
                <h5 class="mb-0">
                    <button class="btn btn-link blink-image" style="color:#FFF !important">
                        <img style="width:30px" src="<?php echo base_url(); ?>assets/images/upcoming.png">&nbsp;&nbsp;<strong>Upcoming Matches</strong>
                    </button>
                    <small class="pull-right match-count text-smaller" style="color:#333 !important">
                        <strong><?php echo count($upcoming); ?> Matches</strong>
                    </small>
                </h5>
            </div>

            <?php foreach($upcoming as $val) : $match_id = $val->id; ?>
                <div class="collapseBody col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0 collapse show" style="">
                    <div class="card-header bg-white col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
                        <div id="match-title-<?= $match_id; ?>" aria-expanded="false" role="button" class="collapseBtnMatchTitle card-body text-gray row col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pt-5 pb-5 pl-0 pr-0 ml-0 bg-white-grad sport-1" style="background-color:#01A66A !important;">
                            <!-- background-color:#4DB6AC -->

                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1 m-0 p-0 text-center">

                                <?php if($val->sportscategory_id==6) : ?>
                                    <img src="<?php echo base_url(); ?>assets/images/football.gif" class="img-thumbnail bg-transparent border-0 img_icon">
                                <?php elseif($val->sportscategory_id==13) : ?>
                                    <img src="<?php echo base_url(); ?>assets/images/tennis_ball_white.svg" class="img-thumbnail bg-transparent border-0 img_icon">
                                <?php else: ?>
                                    <!-- <img src="<?php //echo base_url(); ?>assets/images/cricket.gif" class="img-thumbnail bg-transparent border-0 img_icon"> -->
                                    <img style="max-width:50px !important" src="<?php echo base_url(); ?>assets/new_images/99_stamp_new.jpg" class="img-thumbnail bg-transparent border-0 img_icon">
                                <?php endif; ?>

                            </div>

                            <div class="col-xl-10 col-lg-10 col-md-10 col-sm-10 col-xs-10 match-class" style="margin-left:10px;">
                                <strong class="clearfix">
                                    <?php echo str_replace("vs", " <span class='live-match-title'>VS</span> ", $val->title); ?>
                                </strong>
                                <small class="border-right-solid pr-2"><?php echo $val->league_title; ?></small>
                                <small class="text-white pl-1">
                                    <strong><?php echo date("M-d, Y @ h:i A", strtotime($val->starting_time)); ?></strong>
                                </small>
                            </div>

                            <?php
                                $get_bet_data = $this->db->query("SELECT * FROM match_option WHERE match_id='{$val->id}' AND status=1 ORDER BY match_option_serial ASC")->result();
                            ?>

                            <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1 match-time text-center p-0 shots">
                                <small><strong class="text-white"><?php echo count($get_bet_data); ?> Shots</strong></small>
                            </div>
                        </div>

                        <div id="match-data-<?= $match_id; ?>" class="collapse m-0 p-0 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">

                            <?php if(!empty($val->notification)) { ?>
                            <div class="m-0 p-0 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="bg-black-real container m-0 pt-5 pb-10 p-15 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="text-khet-yellow"><b><?php echo $val->notification; ?></b></div>
                                </div>
                            </div>
                            <?php } ?>

                            <?php
                            $i=rand(10, 10000);
                            foreach($get_bet_data as $data) :
                                $options = $this->db->query("SELECT * FROM match_option_details WHERE match_option_id='{$data->id}' ORDER BY option_serial ASC")->result();
                                if( !empty($data->end_time) ) {
                                    if( time() > strtotime($data->end_time) ) {
                                        $this->db->query("UPDATE match_option SET status=2 WHERE status=1 AND id='{$data->id}' LIMIT 1");
                                    }
                                }

                            ?>

                            <div class="bg-white container m-0 col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 odd-sport-row">
                                <div class="row">
                                    <div data-match-id="<?php echo $i; ?>" id="question-title-<?php echo $i; ?>" aria-expanded="false" role="button"
                                         class="cream-color capitalize col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 m-0 under-red cursor-pointer collapseBtnAnswers clearfix">
                                        <strong><?php echo $data->match_option_title; ?></strong>
                                        <span class="badge bg blink-image" style="background-color:#0288D1 !important">Upcoming</span>
                                    </div>
                                    <div style="background-color:#245479 !important;padding-top:0px;padding-bottom:0px;" id="question-data-<?php echo $i; ?>" class=" col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 under-red clearfix soft-color">

                                        


                                        <div class="row">
                                            <?php foreach($options as $op) : ?>
                                            <div id="ans-<?php echo $op->id; ?>" class="col-lg-3 col-md-3 col-sm-3 col-xs-6" style="border:1px solid #333;color:#00C851;padding:10px;cursor:pointer;" onclick='return showBetModal("<?php echo $op->option_coin; ?>", "<?php echo $op->id; ?>");'>

                                                <div style="" class="">

                                                    <span class="pull-left" style="font-size:11px;overflow:hidden;margin-left:10px;padding-left:4px;">
                                                        <b><?php echo $op->option_title; ?></b>
                                                    </span>
                                                    
                                                    <span class="pull-right badge" style="background-color:#00C851 !important;overflow:hidden;margin-right:10px;"><?php echo $op->option_coin; ?></span>

                                                </div>

                                            </div>
                                            <?php endforeach; ?>
                                        </div>


                                    </div>
                                </div>
                            </div>

                            <?php $i++; endforeach; ?>

                        </div>

                    </div>
                </div>
            <?php endforeach; ?>
            


        </div>
    </div>
<?php } else { ?>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pl-0 pr-0">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 pr-0 remove-pl pl-0 mt-5">
            <div style="background-color:#00C851 !important;" class="bg-dark bg-gray card-header collapseBtn upcomingBtn">
                <h5 class="mb-0">
                    <button class="btn btn-link" style="color:#fff !important">
                        <img style="width:30px;" src="<?php echo base_url(); ?>assets/images/upcoming.png">&nbsp;&nbsp;<strong>Upcoming Matches</strong>
                    </button>
                    <small class="pull-right match-count text-smaller" style="color:#fff !important"><strong>0 Matches</strong></small>
                </h5>
            </div>
            <div class="bg-white col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
                <div class="card-header bg-white col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-0">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix border-bottom pt-5 pb-5">
                        <h5 class="mb-0 btn pl-0 match-title text-danger"><strong>No matches available.</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }; ?>