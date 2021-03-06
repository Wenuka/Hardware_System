<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Filter Data:: Home</title>
    <link rel="shortcut icon" href="../../assets/images/favicon.ico"/>

    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.6 -->
    <link rel="stylesheet" href="../../assets/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../assets/dist/css/AdminLTE.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="../../assets/dist/css/skins/_all-skins.min.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="../../assets/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="../../assets/plugins/daterangepicker/daterangepicker-bs3.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="../../assets/dist/css/bootstrap-dialog.css" rel='stylesheet' type='text/css'/>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/fixedheader/3.1.2/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
    <!-- jQuery 2.2.0 -->
    <script src="../../assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <!--tank-management-slider-->
    <script src="../../assets/tank-bootstrap-slider-initial/js/jssor.slider-27.4.0.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        <?php 
        if (sizeof($workdata)>0) { foreach ($workdata as $value) { ?>
            jssor_<?php echo $value->work_id; ?>_slider_init = function() {

                var jssor_<?php echo $value->work_id; ?>_SlideshowTransitions = [
                    {$Duration:800,$Opacity:2}
                ];

                var jssor_<?php echo $value->work_id; ?>_options = {
                    $AutoPlay: 1,
                    $SlideshowOptions: {
                        $Class: $JssorSlideshowRunner$,
                        $Transitions: jssor_<?php echo $value->work_id; ?>_SlideshowTransitions,
                        $TransitionsOrder: 1
                    },
                    $ArrowNavigatorOptions: {
                        $Class: $JssorArrowNavigator$
                    },
                    $BulletNavigatorOptions: {
                        $Class: $JssorBulletNavigator$
                    }
                };

                var jssor_<?php echo $value->work_id; ?>_slider = new $JssorSlider$("jssor_<?php echo $value->work_id; ?>", jssor_<?php echo $value->work_id; ?>_options);

                /*#region responsive code begin*/

                var MAX_WIDTH = 980;

                function ScaleSlider() {
                    var containerElement = jssor_<?php echo $value->work_id; ?>_slider.$Elmt.parentNode;
                    var containerWidth = containerElement.clientWidth-15-7.5;
                    if (containerWidth) {

                        var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                        jssor_<?php echo $value->work_id; ?>_slider.$ScaleWidth(expectedWidth);
                    }
                    else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }

                ScaleSlider();

                $Jssor$.$AddEvent(window, "load", ScaleSlider);
                $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                /*#endregion responsive code end*/
            };
        <?php }} ?>
        
        // jssor_2_slider_init = function() {

        //     var jssor_2_SlideshowTransitions = [
        //         {$Duration:800,$Opacity:2}
        //     ];

        //     var jssor_2_options = {
        //         $AutoPlay: 1,
        //         $SlideshowOptions: {
        //             $Class: $JssorSlideshowRunner$,
        //             $Transitions: jssor_2_SlideshowTransitions,
        //             $TransitionsOrder: 1
        //         },
        //         $ArrowNavigatorOptions: {
        //             $Class: $JssorArrowNavigator$
        //         },
        //         $BulletNavigatorOptions: {
        //             $Class: $JssorBulletNavigator$
        //         }
        //     };

        //     var jssor_2_slider = new $JssorSlider$("jssor_2", jssor_2_options);

        //     /*#region responsive code begin*/

        //     var MAX_WIDTH = 980;

        //     function ScaleSlider() {
        //         var containerElement = jssor_2_slider.$Elmt.parentNode;
        //         var containerWidth = containerElement.clientWidth-15-7.5;
        //         if (containerWidth) {

        //             var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

        //             jssor_2_slider.$ScaleWidth(expectedWidth);
        //         }
        //         else {
        //             window.setTimeout(ScaleSlider, 30);
        //         }
        //     }

        //     ScaleSlider();

        //     $Jssor$.$AddEvent(window, "load", ScaleSlider);
        //     $Jssor$.$AddEvent(window, "resize", ScaleSlider);
        //     $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
        //     /*#endregion responsive code end*/
        // };

        // $(document).ready(function(){
        //     resizeDiv();
        // });

        // window.onresize = function(event) {
        //     resizeDiv();
        // }


        // window.onload = resizeDiv();

        // function resizeDiv() {
        //     vpw = $(window).width();
        //     vph = $(window).height();
        //     content_lg = $('#content_10').height();
        //     main_header = $('.main-header').height();
        //     content_header = $('section.content-header').height();
        //     main_header_top = $('nav.navbar.navbar-static-top').height();

            //$('#slider_id').height(vph);
            // $('#ads').height(content_lg);
            // $('section#content.content').height(content_lg);
        // }
    </script>

    <style>
        /*jssor slider loading skin spin css*/
        .jssorl-009-spin img {
            animation-name: jssorl-009-spin;
            animation-duration: 1.6s;
            animation-iteration-count: infinite;
            animation-timing-function: linear;
        }

        @keyframes jssorl-009-spin {
            from { transform: rotate(0deg); }
            to { transform: rotate(360deg); }
        }

        /*jssor slider bullet skin 051 css*/
        .jssorb051 .i {position:absolute;cursor:pointer;}
        .jssorb051 .i .b {fill:#fff;fill-opacity:0.5;}
        .jssorb051 .i:hover .b {fill-opacity:.7;}
        .jssorb051 .iav .b {fill-opacity: 1;}
        .jssorb051 .i.idn {opacity:.3;}

        /*jssor slider arrow skin 051 css*/
        .jssora051 {display:block;position:absolute;cursor:pointer;}
        .jssora051 .a {fill:none;stroke:#fff;stroke-width:360;stroke-miterlimit:10;}
        .jssora051:hover {opacity:.8;}
        .jssora051.jssora051dn {opacity:.5;}
        .jssora051.jssora051ds {opacity:.3;pointer-events:none;}
    </style>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<?php //print_r($filterdata); ?><!--<br>-->
<?php //print_r($customerdata); ?><!--<br>-->
<?php //print_r($agentdata); ?>
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <!-- Header Navbar: style can be found in header.less -->
        <?php include 'filterTopMost.php'; ?>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'filterSidebar.php'; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color:ghostwhite;">
        <?php
        if (!empty($_SESSION['alert'])) {
            echo "<div class='alert alert-info' style='margin-bottom: 0;'><strong>Alert! </strong> ".$_SESSION['alert']."</div>";
            unset($_SESSION['alert']);
        }
        ?>
        <!-- Content Header (Page header) -->
        <section class="content-header" style="padding-right:5%;padding-left:5%;padding-top:2%;">
            <h1 style="font-size: 1em;font-weight: bold;text-transform: capitalize;">
                <small>Control panel</small> Filter ID #<?php echo $_SESSION['filter_no']; ?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <!-- Main content -->

        <section class="content" id="content" style="padding-right:2%;padding-left:2%;">
            <div class ="col-lg-12 col-md-12 col-sm-12" id="content_lg" style="padding: 0;">
                <div class="col-lg-12 col-md-12 col-sm-12" id="content_10">
                    <?php include 'filterTop.php'; ?>

                    <div class="col-md-12" style="padding: 0;">
                        <div class="col-md-4" id="slider_id" style="padding-left: 0; ">
                            <?php 
                            if (sizeof($workdata)>0) {
                                foreach ($workdata as $value) { ?>
                                Work ID #<?php echo $value->work_id; ?> 
                                <div id="jssor_<?php echo $value->work_id; ?>" style="position:relative;margin:0;top:0px;left:0px;width:980px;height:380px;overflow:hidden;visibility:hidden;">
                                    <!-- Loading Screen -->
                                    <div data-u="loading" class="jssorl-009-spin" style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;" src="img/spin.svg" />
                                    </div>
                                    <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:980px;height:380px;overflow:hidden;">
                                        <?php if (sizeof($workproof[$value->work_id])>0) { foreach ($workproof[$value->work_id] as $subvalue) { ?>
                                            <div>
                                                <img data-u="image" src="../../<?php echo $subvalue->image_path; ?>" />
                                            </div>
                                        <?php }}else {echo "<div class='col-md-12'><div class='alert alert-danger' role='alert'>Something is wrong. There are no photos to show for this Work.</div></div>";} ?>
                                    </div>
                                    <!-- Bullet Navigator -->
                                    <div data-u="navigator" class="jssorb051" style="position:absolute;bottom:12px;right:12px;" data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                                        <div data-u="prototype" class="i" style="width:16px;height:16px;">
                                            <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                                            </svg>
                                        </div>
                                    </div>
                                    <!-- Arrow Navigator -->
                                    <div data-u="arrowleft" class="jssora051" style="width:55px;height:55px;top:0px;left:25px;" data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                                        </svg>
                                    </div>
                                    <div data-u="arrowright" class="jssora051" style="width:55px;height:55px;top:0px;right:25px;" data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                                        <svg viewbox="0 0 16000 16000" style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                                        </svg>
                                    </div>
                                </div>
                                <script type="text/javascript">jssor_<?php echo $value->work_id; ?>_slider_init();</script>
                                <br>
                            <?php }}else { echo "<div class='col-md-12'><div class='alert alert-warning' role='alert'>There are no work add for this filter yet.</div></div>";} ?>
                            <script type="text/javascript">jssor_2_slider_init();</script>
                            <br>
                        </div>
                        <div class="col-md-8" style="padding-right: 7.5px;padding-left: 7.5px;">
                            <div id="about_web" class="box box-solid"
                                 style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
                                <div class="box-header with-border" style="text-align: center;">
                                    <h3 class="box-title"
                                        style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">New Inquiry</h3>
                                </div>
                                <!-- /.box-header -->
                                <div class="box-body" style="padding:0 4%;">
                                    <br>
                                    <form method="POST" action="<?php echo site_url(); ?>/LoginController/addInquiry" role="form" data-toggle="validator">
                                        <div class="form-group">
                                          <label for="inquiry">Add a new Inquiry:</label>
                                          <!-- <input type="text" class="form-control is-disabled" id="inquiry" name="inquiry" placeholder="Enter your inquiry here." required> -->
                                          <input type="hidden" name="agent_id" value="<?php echo $filterdata->agent_id;?>">
                                          <input type="hidden" name="filter_id" value="<?php echo $filterdata->filter_id;?>">
                                          <textarea class="form-control" rows="3" id="comment" name="description" required></textarea>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-default" style='float:right;background-color:#8892d6;color:white;font-size: inherit;'>Submit</button><br><br>
                                        </div>
                                    </form>
                                    <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                                </div>
                                <!-- /.box-body -->
                            </div>
                            <!-- /.box -->
                        </div>
                        <!-- <div class="col-md-3" style="padding-right: 0;padding-left: 22.5px;">
                            <div id="about_web" class="box box-solid"
                                 style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
                                <div class="box-header with-border" style="text-align: center;">
                                    <h3 class="box-title"
                                        style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;"><?php echo "New orders<br>"; ?></h3>
                                </div>
                                <div class="box-body" style="padding:0 4%;">
                                    <br>

                                    <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                                </div>
                            </div>
                        </div> -->
                        <!-- /.col -->

                    </div>
                </div>
                <!-- <div class="col-lg-2 col-md-2 col-sm-2" id="ads">
                    <div id="about_web" class="box box-solid"
                         style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;height: 100%;">
                        <div class="box-header with-border" style="text-align: center;">
                            <h3 class="box-title"
                                style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;"><?php echo "New orders<br>"; ?></h3>
                        </div>
                        <div class="box-body" style="padding:0 4%;">
                            <br>

                            <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        </div>
                    </div>

                </div> -->
            </div>
            <!-- Small boxes (Stat box) -->
            <br>
        </section>
    </div>
    <div>
    <?php
    include 'footer.html';
    ?>
</div>
</div>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="../../assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="../../assets/plugins/datepicker/bootstrap-datepicker.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="../../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="../../assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../assets/dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../assets/dist/js/demo.js"></script>

</body>
</html>
