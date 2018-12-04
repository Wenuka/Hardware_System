<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin Data:: Home</title>
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
        .modalLbl {
            font-weight: bolder;
            color: dimgrey;
            font-size: small;
        }

        .modalTxt {
            color: dimgrey;
            font-size: small;
        }
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
        <?php include 'adminTopMost.php'; ?>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'adminSidebar.php'; ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="background-color:ghostwhite;">
        <!-- Content Header (Page header) -->
        <section class="content-header" style="padding-right:5%;padding-left:5%;padding-top:2%;">
            <h1 style="font-size: 1em;font-weight: bold;text-transform: capitalize;">
                <small>Control panel</small> Admin ID #<?php echo $_SESSION['admin_no']; ?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <!-- Main content -->

        <section class="content" id="content" style="padding-right:2%;padding-left:2%;">
            <div class ="col-lg-12 col-md-12 col-sm-12" id="content_lg" style="padding: 0;">
                <?php foreach ($agentdata as $agent){ ?>
                 <div class="col-lg-3 col-md-3" id="ads">
                    <div id="about_web" class="box box-solid"
                         style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;height: 100%;">
                        <div class="box-header with-border" style="text-align: center;">
                            <h3 class="box-title"
                                style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;"><?php echo "$agent->agentCode<br>"; ?></h3>
                        </div>

                        <div class="box-body" style="padding:4%;">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <img src='<?php  if($agent->imagePath != ""){echo $agent->imagePath; }else{
                                    echo "../../assets/images/admin/avatar.png";
                                } ?>'  style='border-radius: 40%;width: 100%' height="140px" width="140px" class="img-circle" alt="User Image">
                                <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                                <h4 class="box-title"
                                    style="text-align: center;color:black;padding-top:3px;font-weight: bold;"><?php echo "$agent->agentName<br>"; ?></h4>
                                <h5 class="box-title"
                                    style="text-align: center;color:black;padding-top:3px;font-weight: bold;"><?php echo "$agent->contact<br>"; ?></h5>
                                <div style="text-align: center;">
                                    <button type="button" style="margin-bottom: 3%;" class="btn btn-default" data-todo='<?php  echo json_encode($agent) ?>' id='<?php echo $agent->agentID; ?>' data-id='<?php echo $agent->agentID; ?>'  data-toggle="modal" data-target="#agentModal">More details</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <?php } ?>
            </div>
            <!-- Small boxes (Stat box) -->
            <br>
        </section>
        <div class="modal fade" id="agentModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="float: left;font-size: 20px;">Agent Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row" style="font-size: 15px;">
                            <div class="col-lg-4 col-md-4">
                                <img src="../../assets/images/admin/avatar.png" id="agentImage"
                                     style='border-radius: 100%;max-height:140px;max-width:140px;' class="img-circle"
                                     alt="Agent Image">
                            </div>
                            <div class="col-lg-8 col-md-8">
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Agent Code
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="agentCode">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Agent Name
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="agentName">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Agent Address
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="agentAddress">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Agent Contact
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="agentContact">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Email
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="email">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Status
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="status">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Added Date
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="addedDate">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Town
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="town">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Province
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="province">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include 'footer.html';
    ?>
</div>
<script>
    $(document).ready(function () {
        // $('[data-toggle="modal"]').on('click', function (e) {
        $('#agentModal').on('show.bs.modal', function (event) {
            var bookId = $(event.relatedTarget).data('id');
            var variable = "#"+bookId;
            var agentCode = $(variable).data('todo').agentCode;
            $('#agentCode').empty();
            $('#agentCode').append('<p>' + agentCode + '</p>');

            var agentImage = $(variable).data('todo').imagePath;
            if (agentImage != "") {
                $('#agentImage').attr("src", agentImage);
            }

            var equipImage = $(variable).data('todo').photo;
            if (equipImage != "") {
                $('#equipImage').attr("src", equipImage);
            }

            var repImage = $(variable).data('todo').repImagePath;
            if (repImage != "") {
                $('#repImage').attr("src", repImage);
            }

            var agentName = $(variable).data('todo').agentName;
            $('#agentName').empty();
            $('#agentName').append('<p>' + agentName + '</p>');

            var address = $(variable).data('todo').address;
            $('#agentAddress').empty();
            $('#agentAddress').append('<p>' + address + '</p>');

            var agentContact = $(variable).data('todo').contact;
            $('#agentContact').empty();
            $('#agentContact').append('<p>' + agentContact + '</p>');

            var email = $(variable).data('todo').email;
            $('#email').empty();
            $('#email').append('<p>' + email + '</p>');

            var town = $(variable).data('todo').town;
            $('#town').empty();
            $('#town').append('<p>' + town + '</p>');

            var province = $(variable).data('todo').province;
            $('#province').empty();
            $('#province').append('<p>' + province + '</p>');

            var status = $(variable).data('todo').status;
            $('#status').empty();
            $('#status').append('<p>' + status + '</p>');

            var addedDate = $(variable).data('todo').addedDate;
            $('#addedDate').empty();
            $('#addedDate').append('<p>' + addedDate + '</p>');
        });
    });
</script>
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