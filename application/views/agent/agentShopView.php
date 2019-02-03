<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agent Data:: My Shops</title>
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
                <?php if(sizeof($shopdata)>0){foreach ($shopdata as $shop ){ ?>
                    <div class="col-lg-3 col-md-3" id="ads">
                        <div id="about_web" class="box box-solid"
                             style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
                            <div class="box-header with-border" style="text-align: center;">
                                <h3 class="box-title"
                                    style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;"><?php echo "$shop->shopCode<br>"; ?></h3>
                            </div>
                            <div class="box-body" style="padding:4%;">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                                    <h4 class="box-title"
                                        style="text-align: center;color:black;padding-top:3px;font-weight: bold;"><?php echo "$shop->shopName<br>"; ?></h4>
                                    <h5 class="box-title"
                                        style="text-align: center;color:black;padding-top:3px;font-weight: bold;"><?php echo "$shop->tele<br>"; ?></h5>
                                    <div style="text-align: center;">
                                        <button type="button" style="margin-bottom: 3%;" class="btn btn-default" data-todo='<?php  echo json_encode($shop) ?>' id='<?php echo $shop->shopID; ?>' data-id='<?php echo $shop->shopID;  ?>' data-toggle="modal" data-target="#shopModal">More details</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                <?php }} ?>
            </div>
            <!-- Small boxes (Stat box) -->
            <br>
        </section>
        <div class="modal fade" id="shopModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel" style="float: left;font-size: 20px;">Shop Details</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">

                        <div class="row" style="font-size: 15px;">

                            <div class="col-lg-12 col-md-12">
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Shop Code
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="shopCode">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Shop Name
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="shopName">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Rep ID
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="repID">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Tele
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="tele">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Mobile
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="mobile">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl" id="emailLbl" >
                                    Email
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="email">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Risk Score
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="riskScore">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Size
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="size">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl" id="ownerNameLbl">
                                    Owner Name
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="ownerName">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Status
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="status">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl" id="addedDateLbl">
                                    Added Date
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="addedDate">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl" id="chequeReturnLbl">
                                    Cheque Return
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="chequeReturn">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl" id="creditLimitLbl">
                                    Credit Limit
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="creditLimit">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl" id="lastPendingBillLbl">
                                    Last Pending Bill
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="lastPendingBill">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl" id="lastPendingBillDateLbl">
                                    Last Pending Bill Date
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="lastPendingBillDate">

                                </div>
                                <div class="col-lg-6 col-md-6 modalLbl">
                                    Shop Address
                                </div>
                                <div class="col-lg-6 col-md-6 modalTxt" id="shopAddress">

                                </div>
                                <div class="col-lg-12 col-md-12 modalTxt">
                                    <p id="longitude" style="display: none;"></p>
                                    <p id="latitude" style="display: none;"></p>
                                    <button id="mapBtn" style="margin: 10px 0;">Load Map</button>
                                    <br>
                                    <!-- <iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7922.625388456117!2d79.908538633914!3d6.8530716618097545!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNsKwNTEnMTEuMSJOIDc5wrA1NCc0Ni41IkU!5e0!3m2!1sen!2slk!4v1463212794605"></iframe><br><small><a href="https://www.google.lk/maps/place/6%C2%B051'11.1%22N+79%C2%B054'46.5%22E/@<?php //echo $commondetails->longitude; ?>,<?php //echo $commondetails->latitude; ?>,16z/data=!4m5!3m4!1s0x0:0x0!8m2!3d6.853069!4d79.912916" ><b></b></a></small> -->
                                    <div id="MapDiv"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="bottom: 0; position: absolute;">
            <?php
            include 'footer.html';
            ?></div>
    </div>

</div>
<script>
    $(document).ready(function () {
        // $('[data-toggle="modal"]').on('click', function (e) {
        $('#shopModal').on('show.bs.modal', function (event) {
            var bookId = $(event.relatedTarget).data('id');
            var variable = "#"+bookId;
            var shopCode = $(variable).data('todo').shopCode;
            $('#shopCode').empty();
            $('#shopCode').append('<p>' + shopCode + '</p>');

            var shopName = $(variable).data('todo').shopName;
            $('#shopName').empty();
            $('#shopName').append('<p>' + shopName + '</p>');

            var repID = $(variable).data('todo').repID;
            $('#repID').empty();
            $('#repID').append('<p>' + repID + '</p>');

            var address = $(variable).data('todo').address;
            $('#shopAddress').empty();
            $('#shopAddress').append('<p>' + address + '</p>');

            var longitude = $(variable).data('todo').longitude;
            $('#longitude').empty();
            $('#longitude').text(longitude);

            var latitude = $(variable).data('todo').latitude;
            $('#latitude').empty();
            $('#latitude').text(latitude);

            //
            var tele = $(variable).data('todo').tele;
            $('#tele').empty();
            $('#tele').append('<p>' + tele + '</p>');

            var mobile = $(variable).data('todo').mobile;
            $('#mobile').empty();
            $('#mobile').append('<p>' + mobile + '</p>');
            //
            var email = $(variable).data('todo').email;
            if(email == "")$('emailLbl').attr("display", "none");
            $('#email').empty();
            $('#email').append('<p>' + email + '</p>');
            //
            var nic = $(variable).data('todo').nic;
            $('#nic').empty();
            $('#nic').append('<p>' + nic + '</p>');

            var status = $(variable).data('todo').status;
            $('#status').empty();
            $('#status').append('<p>' + status + '</p>');

            var addedDate = $(variable).data('todo').addedDate;
            $('#addedDate').empty();
            $('#addedDate').append('<p>' + addedDate + '</p>');

            var riskScore = $(variable).data('todo').riskScore;
            $('#riskScore').empty();
            $('#riskScore').append('<p>' + riskScore + '</p>');

            var size = $(variable).data('todo').size;
            $('#size').empty();
            $('#size').append('<p>' + size + '</p>');

            var ownerName = $(variable).data('todo').ownerName;
            if(ownerName == "")$('ownerNameLbl').attr("display", "none");
            $('#ownerName').empty();
            $('#ownerName').append('<p>' + ownerName + '</p>');

            var chequeReturn = $(variable).data('todo').chequeReturn;
            if(chequeReturn == "")$('chequeReturnLbl').attr("display", "none");
            $('#chequeReturn').empty();
            $('#chequeReturn').append('<p>' + chequeReturn + '</p>');

            var creditLimit = $(variable).data('todo').creditLimit;
            if(creditLimit == "")$('creditLimitLbl').attr("display", "none");
            $('#creditLimit').empty();
            $('#creditLimit').append('<p>' + creditLimit + '</p>');

            var lastPendingBill = $(variable).data('todo').lastPendingBill;
            if(lastPendingBill == "")$('lastPendingBillLbl').attr("display", "none");
            $('#lastPendingBill').empty();
            $('#lastPendingBill').append('<p>' + lastPendingBill + '</p>');

            var lastPendingBillDate = $(variable).data('todo').lastPendingBillDate;
            if(lastPendingBillDate == "")$('lastPendingBillDateLbl').attr("display", "none");
            $('#lastPendingBillDate').empty();
            $('#lastPendingBillDate').append('<p>' + lastPendingBillDate + '</p>');


        });
    });
</script>
<script>
    $('#mapBtn').click(function () {
        $('#MapDiv').html('<div id="googleMap" style="width:100%;height:400px;"></div>');
        myMap();
// alert('done');
    });

    function myMap() {

        var bounds = new google.maps.LatLngBounds();
        var latitude = $('#latitude').text();
        var longitude = $('#longitude').text();

        var mapProp = {
            center: new google.maps.LatLng(latitude, longitude),
            zoom: 14,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
        var position = new google.maps.LatLng(latitude, longitude);
        bounds.extend(position);
        marker = new google.maps.Marker({
            position: position,
            map: map,
            title: "markers"
        });
// map.fitBounds(bounds);
    }

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlFwHhg15iNpuqL5psZs8TVXMbtrwRUJo"></script>
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