<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agent Data:: Home</title>
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

        $(document).ready(function(){
            resizeDiv();
        });

        window.onresize = function(event) {
            resizeDiv();
        }


        window.onload = resizeDiv();

        function resizeDiv() {
            vpw = $(window).width();
            vph = $(window).height();
            content_lg = $('#content_10').height();
            main_header = $('.main-header').height();
            content_header = $('section.content-header').height();
            main_header_top = $('nav.navbar.navbar-static-top').height();

            //$('#slider_id').height(vph);
            $('#ads').height(content_lg);
            $('section#content.content').height(content_lg);
        }
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
<div class="wrapper">
    <header class="main-header">
        <!-- Logo -->
        <!-- Header Navbar: style can be found in header.less -->
        <?php include 'agentTopMost.php'; ?>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'agentSidebar.php'; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color:ghostwhite;">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="padding-right:5%;padding-left:5%;padding-top:2%;">
            <h1 style="font-size: 1em;font-weight: bold;text-transform: capitalize;">
                <small>Control panel</small> Agent ID #<?php echo $_SESSION['agent_no']; ?>
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
                    <?php include 'agentTop.php'; ?>





                        <div class="row">
                            <div class="col-md-12">
                                <div id="about_web" class="box box-solid"
                                     style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
                                    <div class="box-header with-border" style="text-align: center;">
                                        <h3 class="box-title"
                                            style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;"><?php echo "New Inquiries<br>"; ?></h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body" style="padding:0 4%;">
                                        <br>
                                        <table id="inquirytable" class="table table-striped nowrap table-responsive"
                                               cellspacing="0" width="100%">
                                            <thead class="no-border">
                                            <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">
                                                <th data-priority="1">Order ID</th>
                                                <th data-priority="1">Filter ID</th>
                                                <th data-priority="4">Message</th>
                                                <th data-priority="5">Date</th>
                                                <th data-priority="2" style="max-width:30px;" data-orderable="false">Confirm</th>
                                                <th data-priority="3" style="max-width:30px;" data-orderable="false">Ignore</th>
                                            </tr>
                                            </thead>
                                            <!-- <tfoot>
                                            <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">
                                                <th>Order ID</th>
                                                <th>Message</th>
                                                <th>Date</th>
                                                <th>Confirm</th>
                                                <th>Ignore</th>
                                            </tr>
                                            </tfoot> -->
                                            <tbody id="orderTable" style="text-align: center;">
                                            <?php
                                            if (sizeof($inquirydata) > 0) {
                                                for ($i = 0; $i < sizeof($inquirydata); $i++) {
                                                    ?>
                                                    <tr style="text-align:left;" id="<?php echo $inquirydata[$i]->inquiry_id; ?>">
                                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $inquirydata[$i]->inquiry_id; ?></td>
                                                        <td style="border-right:1px solid #f4f4f4;"><?php echo ($inquirydata[$i]->filter_id == 0)?"By Admin":$inquirydata[$i]->filter_id; ?></td>
                                                        <!-- <td style="border-right:1px solid #f4f4f4;"><?php echo $inquirydata[$i]->filter_id; ?></td> -->
                                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $inquirydata[$i]->message; ?></td>
                                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $inquirydata[$i]->last_edittime; ?></td>
                                                        <td style="max-width: 30px">
                                                            <button type="button" onclick="setConfirm(this.id)"
                                                                    id="<?php echo $inquirydata[$i]->inquiry_id . 'c'; ?>"
                                                                    style="border-radius:10px;background-color:#60C060;color:white;font-size: 13px;padding:6px;cursor: pointer;"
                                                                    class="btn btn-default">
                                                                <span class="glyphicon glyphicon-thumbs-up"></span>
                                                            </button>
                                                        </td>
                                                        <td>
                                                            <button type="button" onclick="setIgnored(this.id)"
                                                                    id="<?php echo $inquirydata[$i]->inquiry_id . 'i'; ?>"
                                                                    style="border-radius:10px;background-color:#DA4932;color:white;font-size: 13px;padding:6px;cursor: pointer;"
                                                                    class="btn btn-default">
                                                                <span class="glyphicon glyphicon-thumbs-down"></span>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                <?php }
                                            } ?>
                                            </tbody>
                                        </table>
                                        <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>
                            <div class="col-md-12">
                                <div id="about_web" class="box box-solid"
                                     style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
                                    <div class="box-header with-border" style="text-align: center;">
                                        <h3 class="box-title"
                                            style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">Upcoming Scheduled Work</h3>
                                    </div>
                                    <!-- /.box-header -->
                                    <div class="box-body" style="padding:0 4%;">
                                        <br>
                                        <table id="worktable" class="table table-striped nowrap table-responsive"
                                               cellspacing="0" width="100%">
                                            <thead class="no-border">
                                            <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">
                                                <th data-priority="1">Next Service Date</th>
                                                <th data-priority="1">Filter ID</th>
                                                <th data-priority="4">Customer ID</th>
                                                <th data-priority="4">Customer Name</th>
                                                <th data-priority="5">Capacity</th>
                                                <th data-priority="2">Status</th>
                                                <!-- <th data-priority="3" style="max-width:30px;" data-orderable="false">Ignore</th> -->
                                            </tr>
                                            </thead>
                                            <!-- <tfoot>
                                            <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">
                                                <th>Order ID</th>
                                                <th>Message</th>
                                                <th>Date</th>
                                                <th>Confirm</th>
                                                <th>Ignore</th>
                                            </tr>
                                            </tfoot> -->
                                            <tbody id="workorderTable" style="text-align: center;">
	                                            <?php

	                                            if (sizeof($filterdata) > 0) {
	                                                for ($i = 0; $i < sizeof($filterdata); $i++) {
	                                                    ?>
	                                                    <tr style="text-align:left;" id="<?php echo $filterdata[$i]->filter_id; ?>">
	                                                        <!-- <td style="border-right:1px solid #f4f4f4;"> -->
	                                                        	<?php 

	                                            				$nxtdate = strtotime($filterdata[$i]->next_service) - time();
	                                                        	if ($nxtdate > 86400) {
	                                                        	    echo "<td style='border-right:1px solid #f4f4f4;background-color:#daefdc;'>";
	                                                        	}
	                                                        	elseif ($nxtdate > -72000) {
	                                                        	    echo "<td style='border-right:1px solid #f4f4f4;background-color:#FCF3CF;'>";
	                                                        	}
	                                                        	else{
	                                                        	    echo "<td style='border-right:1px solid #f4f4f4;background-color:#d8a9a5;'>";
	                                                        	} 
	                                                        	echo $filterdata[$i]->next_service; ?></td>
	                                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $filterdata[$i]->filter_id; ?></td>
                                                            <td style="border-right:1px solid #f4f4f4;"><?php echo $filterdata[$i]->customer_id; ?></td>
	                                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $filterdata[$i]->name; ?></td>
	                                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $filterdata[$i]->capacity; ?></td>
	                                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $filterdata[$i]->status; ?></td>
	                                                    </tr>
	                                                <?php }
	                                            } ?>
                                            </tbody>
                                        </table>
                                        <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                                    </div>
                                    <!-- /.box-body -->
                                </div>
                                <!-- /.box -->
                            </div>

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
    <?php
    include 'footer.html';
    ?>
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
<!--datatables-->
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        var table_checkin = $('#inquirytable').DataTable({
            responsive: true
        });
    });
    $(document).ready(function () {
        var table_checkin = $('#worktable').DataTable({
            responsive: true
        });
    });
</script>
<script type="text/javascript">
    function setConfirm(clicked_id) {
        $.ajax({
            type: 'POST',
            data: 'inquiryid=' + clicked_id,
            url: "<?php echo base_url(); ?>index.php/AgentController/setConfirm",
            success: function (data) {

                document.getElementById(clicked_id).disabled = true;
                document.getElementById(clicked_id).value = "CONFIRMED"
                clicked_id = clicked_id.substring(0, clicked_id.length - 1);
                document.getElementById(clicked_id).style.backgroundColor = "#daefdc";
                document.getElementById(clicked_id + 'i').style.visibility = "hidden";

            }
        });
    }

    function setIgnored(clicked_id) {
        $.ajax({
            type: 'POST',
            data: 'inquiryid=' + clicked_id,
            url: "<?php echo base_url(); ?>index.php/AgentController/setIgnore",
            success: function (data) {

                document.getElementById(clicked_id).disabled = true;
                document.getElementById(clicked_id).value = "IGNORED"
                clicked_id = clicked_id.substring(0, clicked_id.length - 1);
                document.getElementById(clicked_id).style.backgroundColor = "#d8a9a5";
                document.getElementById(clicked_id + 'c').style.visibility = "hidden";

            }
        });
    }
</script>
</body>
</html>
