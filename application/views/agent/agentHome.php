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
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.5.0/css/all.css'
          integrity='sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU' crossorigin='anonymous'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <!--alerts-->
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
    <script src="../../assets/tank-bootstrap-slider-initial/js/jssor.slider-27.4.0.min.js"
            type="text/javascript"></script>
    <script type="text/javascript">

        $(document).ready(function () {
            resizeDiv();
        });

        window.onresize = function (event) {
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
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
        }

        /*jssor slider bullet skin 051 css*/
        .jssorb051 .i {
            position: absolute;
            cursor: pointer;
        }

        .jssorb051 .i .b {
            fill: #fff;
            fill-opacity: 0.5;
        }

        .jssorb051 .i:hover .b {
            fill-opacity: .7;
        }

        .jssorb051 .iav .b {
            fill-opacity: 1;
        }

        .jssorb051 .i.idn {
            opacity: .3;
        }

        /*jssor slider arrow skin 051 css*/
        .jssora051 {
            display: block;
            position: absolute;
            cursor: pointer;
        }

        .jssora051 .a {
            fill: none;
            stroke: #fff;
            stroke-width: 360;
            stroke-miterlimit: 10;
        }

        .jssora051:hover {
            opacity: .8;
        }

        .jssora051.jssora051dn {
            opacity: .5;
        }

        .jssora051.jssora051ds {
            opacity: .3;
            pointer-events: none;
        }
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
                <small>Control panel</small>
                Admin ID #<?php echo $_SESSION['agent_no']; ?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>

        <section class="content">
            <div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0;">
                <div class="col-lg-3 col-md-3 col-xs-6">
                    <div class="small-box " style="padding: 1%;">
                        <div class="inner" style="color: #555555;background-color: white;padding: 10px;">
                            <h3 id="orders" style="color: black"></h3>
                            <p style="margin-bottom: 0;">No Of Confirmed Orders</p>
                            <p style="font-size:35px;margin-bottom: 0;">1</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-md-3 col-xs-6">
                    <div class="small-box " style="padding: 1%;">
                        <div class="inner" style="color: #555555;background-color: white;padding: 10px;">
                            <h3 id="orders" style="color: black"></h3>
                            <p style="margin-bottom: 0;">No Of Pending Orders</p>
                            <p style="font-size:35px;margin-bottom: 0;">2</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-md-3 col-xs-6">
                    <div class="small-box " style="padding: 1%;">
                        <div class="inner" style="color: #555555;background-color: white;padding: 10px;">
                            <h3 id="orders" style="color: black"></h3>
                            <p style="margin-bottom: 0;">No Of Received Inquiries</p>
                            <p style="font-size:35px;margin-bottom: 0;">2</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-md-3 col-xs-6">
                    <div class="small-box " style="padding: 1%;">
                        <div class="inner" style="color: #555555;background-color: white;padding: 10px;">
                            <h3 id="orders" style="color: black"></h3>
                            <p style="margin-bottom: 0;">No Of Sent Inquiries</p>
                            <p style="font-size:35px;margin-bottom: 0;">3</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0;">
                <div class="col-lg-6 col-md-6">
                    <!-- small box -->
                    <div class="small-box " style="padding: 1%;">
                        <div class="inner" style="color: #555555;background-color: white;padding: 10px;">
                            <h3 id="orders" style="color: black"></h3>
                            <p style="margin-bottom: 0;">No Of Reps</p>
                            <p style="font-size:35px;margin-bottom: 0;">7</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <!-- small box -->
                    <div class="small-box " style="padding: 1%;">
                        <div class="inner" style="color: #555555;background-color: white;padding: 10px;">
                            <h3 id="orders" style="color: black"></h3>
                            <p style="margin-bottom: 0;">No Of Shops</p>
                            <p style="font-size:35px;margin-bottom: 0;">7</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer"> <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0;">
                <div class="col-lg-4 col-md-4">
                    <!-- small box -->
                    <div class="small-box " style="padding: 1%;">
                        <div class="inner" style="color: #555555;background-color: white;">
                            <div class="col-md-12">
                                <p style="font-size: 32px;">Rep</p>
                            </div>
                            <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                            <div class="row" style="padding:0 20px 0 20px;">
                                <div class="col-md-4">
                                    <a href="#addAgent" data-toggle="modal"><i class='fas fa-user-plus'
                                                                               style='font-size:48px;color:red'></i></a>
                                </div>
                                <div class="col-md-4">
                                    <i class='fas fa-user-edit' style='font-size:48px;color:red'></i>
                                </div>
                                <div class="col-md-4">
                                    <i class='fas fa-user-minus' style='font-size:48px;color:red'></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <!-- small box -->
                    <div class="small-box " style="padding: 1%;">
                        <div class="inner" style="color: #555555;background-color: white;">
                            <div class="col-md-12">
                                <p style="font-size: 32px;">Inquiry</p>
                            </div>
                            <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                            <div class="row" style="padding:0 20px 0 20px;">
                                <div class="col-md-4">
                                    <a href="#addInquiry" data-toggle="modal"><i class="fa fa-plus"
                                                                                 style="font-size:48px;color:red"></i></a>
                                </div>
                                <div class="col-md-4">
                                    <i class="fa fa-check" style="font-size:48px;color:red"></i>
                                </div>
                                <div class="col-md-4">
                                    <i class="fa fa-times" style="font-size:48px;color:red"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <!-- small box -->
                    <div class="small-box " style="padding: 1%;">
                        <div class="inner" style="color: #555555;background-color: white;">
                            <div class="col-md-12">
                                <p style="font-size: 32px;">Shops</p>
                            </div>
                            <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                            <div class="row" style="padding:0 20px 0 20px;">
                                <div class="col-md-4">
                                    <a href="#addInquiry" data-toggle="modal">
                                        <i class="fa fa-plus-square-o"
                                           style="font-size:48px;color:red"></i></a>
                                </div>
                                <div class="col-md-4">
                                    <i class="fa fa-check-square-o" style="font-size:48px;color:red"></i>
                                </div>
                                <div class="col-md-4">
                                    <i class="fa fa-minus-square-o" style="font-size:48px;color:red"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <section class="content" id="content" style="padding-right:2%;padding-left:2%;">
            <div class="col-lg-12 col-md-12 col-sm-12" id="content_lg" style="padding: 0;">
                <div class="col-lg-12 col-md-12 col-sm-12" id="content_10">
                    <?php //include 'adminTop.php'; ?>
                    <div class="row">
                        <div class="col-md-12">
                            <div id="about_web" class="box box-solid"
                                 style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
                                <div class="box-header with-border" style="text-align: center;">
                                    <h3 class="box-title"
                                        style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">
                                        Recent Orders Group by Agent and Equipment </h3>
                                </div>
                                <div class="box-body" style="padding:0 4%;">
                                    <br>
                                    <table id="groupOrdersTable" class="table table-striped nowrap table-responsive"
                                           cellspacing="0" width="100%">
                                        <thead class="no-border">
                                        <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">
                                            <th data-priority="2">Rep Code</th>
                                            <th data-priority="2">Equipment Code</th>
                                            <th data-priority="2">Equipment Name</th>
                                            <th data-priority="2">Order Count</th>
                                            <th data-priority="1">Status</th>
                                            <th data-priority="1" style="max-width:90px;">More Details</th>
                                        </tr>
                                        </thead>
                                        <tbody id="workorderTable" style="text-align: center;font-size:13px;">
                                        <?php
                                        if (sizeof($grouporderdata) > 0) {
                                            for ($i = 0; $i < sizeof($grouporderdata); $i++) {

//	                                                    ?>
                                                <tr style="text-align:left;">
                                                    <td style="border-right:1px solid #f4f4f4;"><?php echo $grouporderdata[$i]->repCode; ?></td>
                                                    <td style="border-right:1px solid #f4f4f4;"><?php echo $grouporderdata[$i]->equipID . "  -  " . $grouporderdata[$i]->equipCode; ?></td>
                                                    <td style="border-right:1px solid #f4f4f4;"><?php echo $grouporderdata[$i]->equipName; ?></td>
                                                    <td style="border-right:1px solid #f4f4f4;"><?php echo $grouporderdata[$i]->orderCount; ?></td>
                                                    <?php if($grouporderdata[$i]->status == "Order_Placed"){?>
                                                        <td style="border-right:1px solid #f4f4f4;margin: 5px;background-color: cornflowerblue;width:20px;">IN_PROGRESS-AD</td>
                                                    <?php }else if($grouporderdata[$i]->status == "Deliver-Ad"){ ?>
                                                        <td style="border-right:1px solid #f4f4f4;margin: 5px;background-color: yellowgreen;width:20px;">DELIVERED-AD</td>
                                                    <?php }else if($grouporderdata[$i]->status == "Deliver-Ag"){ ?>
                                                        <td style="border-right:1px solid #f4f4f4;margin: 5px;background-color: darkgreen;width:20px;">DELIVERED-AG</td>
                                                    <?php }else if($grouporderdata[$i]->status == "Rejected-Ad"){ ?>
                                                        <td style="border-right:1px solid #f4f4f4;margin: 5px;background-color: orangered;width:20px;">REJECTED-AD</td>
                                                    <?php }else if($grouporderdata[$i]->status == "Rejected-Ag"){ ?>
                                                        <td style="border-right:1px solid #f4f4f4;margin: 5px;background-color: darkred;width:20px;">REJECTED-AG</td>
                                                    <?php } ?>
                                                    <td style="border-right:1px solid #f4f4f4;">
                                                        <button type="button" style="margin-bottom: 3%;" class="btn btn-default"
                                                                data-toggle="modal" data-status="<?php echo $grouporderdata[$i]->status; ?>" data-todo="<?php echo $grouporderdata[$i]->equipID; ?>" data-id='<?php echo $grouporderdata[$i]->agentID; ?>'
                                                                data-target="#exampleModalGroupData">More details</button>
                                                    </td>
                                                </tr>
                                            <?php }
                                        } ?>
                                        </tbody>
                                    </table>
                                    <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </section>

    </div>
    <?php
    include 'footer.html';
    ?>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalGroupData" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="float: left;font-size: 20px;">Order Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="box-body" style="padding:0 4%;">
                    <br>
                    <div class="table-responsive">
                        <table id="groupOrdersTableModal" class="table table-striped nowrap table-responsive"
                               cellspacing="0" width="100%">
                            <thead class="no-border">
                            <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">
                                <th data-priority="2" style="width: 5px;">Agent ID</th>
                                <th data-priority="2" style="width: 5px;">Equipment ID</th>
                                <th data-priority="2">Equipment Name</th>
                                <th data-priority="2" style="width: 5px;">Order Detail ID</th>
                                <th data-priority="1" >Order Count</th>
                                <th data-priority="1" >More Details</th>
                                <th data-priority="1">Status</th>
                            </tr>
                            </thead>
                            <tbody id="modalTableBody" style="text-align: center;font-size:13px;">

                            </tbody>
                        </table>
                        <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="float: left;font-size: 20px;">Order Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" style="font-size: 15px;">
                    <div class="col-lg-12 col-md-12" style="font-size: 16px;">
                        Order Details
                        <hr style="border: 0.5px solid rgba(0, 0, 0, 0.2);margin-top: 0;">
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <img src="../../assets/images/admin/avatar.png" id="equipImage"
                             style='border-radius: 100%;max-height:40px;max-width:40px;' class="img-circle"
                             alt="Equipment Image">
                    </div>
                    <br>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Equip Code
                    </div>
                    <div class="col-lg-3 col-md-3" id="equipCode">

                    </div>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Equip Name
                    </div>
                    <div class="col-lg-3 col-md-3" id="equipName">

                    </div>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Unit Price
                    </div>
                    <div class="col-lg-3 col-md-3" id="unitPrice">

                    </div>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Order Count
                    </div>
                    <div class="col-lg-3 col-md-3" id="orderCount">

                    </div>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Deliver Date
                    </div>
                    <div class="col-lg-3 col-md-3" id="deliverTimestamp">

                    </div>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Description
                    </div>
                    <div class="col-lg-3 col-md-3" id="description">

                    </div>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Order ID
                    </div>
                    <div class="col-lg-3 col-md-3" id="orderID">

                    </div>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Bill Value(LKR)
                    </div>
                    <div class="col-lg-3 col-md-3" id="billValue">

                    </div>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Ordered Date
                    </div>
                    <div class="col-lg-3 col-md-3" id="orderTimestamp">

                    </div>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Order Status
                    </div>
                    <div class="col-lg-3 col-md-3" id="orderStatus">

                    </div>
                </div>
                <br>
                <div class="row" style="font-size: 15px;">
                    <div class="col-lg-12 col-md-12" style="font-size: 16px;">
                        Agent Details
                        <hr style="border: 0.5px solid rgba(0, 0, 0, 0.2);margin-top: 0;">
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <img src="../../assets/images/admin/avatar.png" id="agentImage"
                             style='border-radius: 100%;max-height:40px;max-width:40px;' class="img-circle"
                             alt="Agent Image">
                    </div>
                    <br>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Agent Code
                    </div>
                    <div class="col-lg-3 col-md-3" id="agentCode">

                    </div>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Agent Name
                    </div>
                    <div class="col-lg-3 col-md-3" id="agentName">

                    </div>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Agent Address
                    </div>
                    <div class="col-lg-3 col-md-3" id="agentAddress">

                    </div>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Agent Contact
                    </div>
                    <div class="col-lg-3 col-md-3" id="agentContact">

                    </div>
                </div>
                <br>
                <div class="row" style="font-size: 15px;">
                    <div class="col-lg-12 col-md-12" style="font-size: 16px;">
                        Rep Details
                        <hr style="border: 0.5px solid rgba(0, 0, 0, 0.2);margin-top: 0;">
                    </div>
                    <div class="col-lg-12 col-md-12">
                        <img src="../../assets/images/admin/avatar.png" id="repImage"
                             style='border-radius: 100%;max-height:40px;max-width:40px;' class="img-circle"
                             alt="Rep Image">
                    </div>
                    <br>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Rep Name
                    </div>
                    <div class="col-lg-3 col-md-3" id="repName">
                    </div>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Nic Number
                    </div>
                    <div class="col-lg-3 col-md-3" id="nic">

                    </div>
                </div>
                <br>
                <div class="row" style="font-size: 15px;">
                    <div class="col-lg-12 col-md-12" style="font-size: 16px;">
                        Shop Details
                        <hr style="border: 0.5px solid rgba(0, 0, 0, 0.2);margin-top: 0;">
                    </div>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Shop Code
                    </div>
                    <div class="col-lg-3 col-md-3" id="shopCode">
                    </div>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Shop Name
                    </div>
                    <div class="col-lg-3 col-md-3" id="shopName">
                    </div>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Shop Contact
                    </div>
                    <div class="col-lg-3 col-md-3" id="tele">
                    </div>
                    <div class="col-lg-3 col-md-3 modalLbl">
                        Risk Score
                    </div>
                    <div class="col-lg-3 col-md-3" id="riskScore">
                    </div>
                    <div class="col-lg-12 col-md-12 modalLbl">
                        Shop Address
                    </div>
                    <div class="col-lg-12 col-md-12" id="shopAddress">
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
<div class="modal fade" id="addAgent" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content"
             style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="float: left;font-size: 20px;">Add Agent</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-right:5%;padding-left:5%;">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0;">
                        <div id="about_web" class="box box-solid">

                            <!-- edit form column -->
                            <div class="box-body">
                                <form class="is-readonly" method="POST"
                                      action="<?php echo site_url(); ?>/AdminController/addNewAgent" id="form2"
                                      role="form" data-toggle="validator">
                                    <div class="col-md-12" style="padding: 0;">
                                        <div class="col-md-6">
                                            <!-- <br> -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Agent Code</label>
                                                <input type="text" name="agentCode" class="form-control"
                                                       placeholder="Agent Code"
                                                       required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="fullname">Full Name</label>
                                                <input type="text" class="form-control" id="fullname" name="fullname"
                                                       placeholder="Full Name" required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="fullname">Province</label>
                                                <input type="text" class="form-control" id="province" name="province"
                                                       placeholder="Province" required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="mobile">Mobile</label>
                                                <input type="tel" data-maxlength="10" data-minlength="10"
                                                       class="form-control" id="mobile" name="mobile"
                                                       placeholder="Telephone number format 0711234567 (length: 10 numbers)"
                                                       pattern="[0-9]{10}" required/>
                                                <div class="help-block with-errors">Format of the telephone number
                                                    should be [0711234567] <!-- (length - 10 numbers.) --></div>
                                                <!-- <div class="help"></div> -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- <br> -->
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Address</label>
                                                <input type="text" class="form-control" id="address" name="address"
                                                       placeholder="Address" data-error="Bruh, that address is invalid"
                                                       required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Town</label>
                                                <input type="text" class="form-control" id="town" name="town"
                                                       placeholder="Town" data-error="Bruh, that town is invalid"
                                                       required/>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Email address</label>
                                                <input type="email" class="form-control" id="email" name="email"
                                                       placeholder="Email"
                                                       data-error="Bruh, that email address is invalid" required/>
                                            </div>

                                            <!-- <input type="submit" class="form-control" name="submit"> -->
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <input type="submit" id="save_btn"
                                               class="btn btn-default btn-lg btn-save js-save"
                                               style='float:right;background-color: #8892d6;color:white;font-size: inherit;margin-top: 5px;'/>

                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addInquiry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content"
             style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel" style="float: left;font-size: 20px;">Add Agent</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row" style="padding-right:5%;padding-left:5%;">
                    <div class="col-lg-12 col-md-12 col-sm-12" style="padding: 0;">
                        <div id="about_web" class="box box-solid">

                            <!-- edit form column -->
                            <div class="box-body">
                                <form class="is-readonly"
                                      onsubmit="return confirm('Do you really want place this Inquiry?');" method="POST"
                                      action="<?php echo site_url(); ?>/AdminController/addInquiry" id="addInquiry"
                                      role="form" data-toggle="validator">
                                    <div class="form-group">
                                        <label for="part">Agent ID</label><br>
                                        <select class="form-control" id="agent_id_option" name="agent_id" required>
                                            <!--                                            <option disabled selected value="">Select A Agent ID</option>-->
                                            <!--                                            --><?php //foreach ($agentdata as $value) {
                                            //                                                echo "<option>".$value->agent_id."</option>";
                                            //                                            } ?>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="Description">Message</label><br>
                                        <textarea class="form-control" rows="2" id="comment" name="description"
                                                  required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" class="btn btn-default btn-lg btn-save js-save"
                                               style='background-color: #8892d6;color:white;font-size: inherit;'/>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Do you want to change the status PROGRESS to DELEIVERED-AD for the clicked order record?
            </div>
            <div class="modal-footer">
                <button type="button" onclick="changeStatus(this)" id="save" class="btn btn-secondary" data-dismiss="modal">Save</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
        <script>
            $(document).ready(function () {
                $('#confirmModal').on('show.bs.modal', function (event) {
                    var orderDetailID = $(event.relatedTarget).data('id');
                    var id = "save"+orderDetailID;
                    alert(id);
                    $('#save').attr('id', id);
                });
            });
            $(document).ready(function () {
                $('#exampleModalGroupData').on('show.bs.modal', function (event) {
                    var agentID =  $(event.relatedTarget).data('id');
                    var equipID = $(event.relatedTarget).data('todo');
                    var status = $(event.relatedTarget).data('status');

                    $.ajax({
                        type: "POST",
                        url: "<?php echo site_url(); ?>/AdminController/viewOrderDetail",
                        data: {
                            'agentID': agentID,
                            'equipID': equipID,
                            'status':status
                        },
                        success: function (data) {
                            var obj = JSON.parse(data);
                            console.log(obj);
                            $('#modalTableBody').empty();
                            for (var i = 0; i < obj.length; i++) {

                                $('#modalTableBody').append('<tr style="text-align:left;">');
                                $('#modalTableBody').append('<td style="border-right:1px solid #f4f4f4;width: 5px;">'+agentID+'</td>');
                                $('#modalTableBody').append('<td style="border-right:1px solid #f4f4f4;width: 5px;">'+equipID+'</td>');
                                $('#modalTableBody').append('<td style="border-right:1px solid #f4f4f4;">'+obj[i].equipName+'</td>');
                                $('#modalTableBody').append('<td style="border-right:1px solid #f4f4f4;width: 5px;">'+obj[i].orderDetailID+'</td>');
                                $('#modalTableBody').append('<td style="border-right:1px solid #f4f4f4;">'+obj[i].orderCount+'</td>');
                                $('#modalTableBody').append('<td style="border-right:1px solid #f4f4f4;padding:5px;"><button type="button" style="margin-bottom: 3%;" class="btn btn-default" id ="modal"'+obj[i].orderDetailID+' data-id="'+obj[i].orderDetailID+'" data-toggle="modal" data-todo="'+obj[i]+'" data-target="#exampleModal">More details</button></td>');
                                if(obj[i].status == 'Order_Placed')
                                {
                                    $('#modalTableBody').append('<td style="border-right:1px solid #f4f4f4;padding:5px;"><button data-toggle="modal" data-id="'+obj[i].orderDetailID+'" type="button" style="background-color: cornflowerblue;color: black;font-weight: bolder;" class="btn btn-default" data-target="#confirmModal">Progress-AD</button></td>');
                                }
                                else if(obj[i].status == 'Deliver-Ad')
                                {
                                    $('#modalTableBody').append('<td style="border-right:1px solid #f4f4f4;padding: 5px;"><button type="button" style="background-color: greenyellow;color: black;font-weight: bolder;" class="btn btn-default">Delivered-AD</button></td>');
                                }
                                else if(obj[i].status == 'Deliver-Ag')
                                {
                                    $('#modalTableBody').append('<td style="border-right:1px solid #f4f4f4;padding: 5px;"><button  type="button" style="background-color: darkgreen;color: black;font-weight: bolder;" class="btn btn-default">Delivered-AG</button></td>');
                                }
                                else if(obj[i].status == 'Rejected-Ad')
                                {
                                    $('#modalTableBody').append('<td style="border-right:1px solid #f4f4f4;padding: 5px;"><button type="button" style="background-color: orangered;color: black;font-weight: bolder;" class="btn btn-default">REJECTED-AD</button></td>');
                                }
                                else if(obj[i].status == 'Rejected-Ag')
                                {
                                    $('#modalTableBody').append('<td style="border-right:1px solid #f4f4f4;padding: 5px;"><button type="button" style="background-color: darkred;color: black;font-weight: bolder;" class="btn btn-default">REJECTED-AG</button></td>');
                                }

                                $('#modalTableBody').append('</tr>');
                            }

                        }
                    });
                });
            });

            $(document).ready(function () {
                // $('[data-toggle="modal"]').on('click', function (e) {
                $('#exampleModal').on('show.bs.modal', function (event) {
                    var bookId = $(event.relatedTarget).data('id');
                    var variable = "#modal" + bookId;
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

                    var repName = $(variable).data('todo').repName;
                    $('#repName').empty();
                    $('#repName').append('<p>' + repName + '</p>');

                    var nic = $(variable).data('todo').nic;
                    $('#nic').empty();
                    $('#nic').append('<p>' + nic + '</p>');

                    var shopCode = $(variable).data('todo').shopCode;
                    $('#shopCode').empty();
                    $('#shopCode').append('<p>' + shopCode + '</p>');

                    var shopCode = $(variable).data('todo').shopCode;
                    $('#shopCode').empty();
                    $('#shopCode').append('<p>' + shopCode + '</p>');

                    var shopName = $(variable).data('todo').shopName;
                    $('#shopName').empty();
                    $('#shopName').append('<p>' + shopName + '</p>');

                    var tele = $(variable).data('todo').tele;
                    $('#tele').empty();
                    $('#tele').append('<p>' + tele + '</p>');

                    var riskScore = $(variable).data('todo').riskScore;
                    $('#riskScore').empty();
                    $('#riskScore').append('<p>' + riskScore + '</p>');

                    var longitude = $(variable).data('todo').longitude;
                    $('#longitude').empty();
                    $('#longitude').text(longitude);

                    var latitude = $(variable).data('todo').latitude;
                    $('#latitude').empty();
                    $('#latitude').text(latitude);

                    var orderID = $(variable).data('todo').orderID;
                    $('#orderID').empty();
                    $('#orderID').append('<p>' + orderID + '</p>');

                    var billValue = $(variable).data('todo').billValue;
                    $('#billValue').empty();
                    $('#billValue').append('<p>' + billValue + '</p>');

                    var orderedTimestamp = $(variable).data('todo').orderTimestamp;
                    $('#orderTimestamp').empty();
                    $('#orderTimestamp').append('<p>' + orderedTimestamp + '</p>');

                    var status = $(variable).data('todo').status;
                    $('#orderStatus').empty();
                    if (status == "Order_Placed") {
                        $('#orderStatus').append('<p style="padding: 5px;background-color: cornflowerblue;width: fit-content;">INPROGRESS-AD</p>');
                    }
                    else if(status == "Deliver-Ad") {
                        $('#orderStatus').append('<p style="padding: 5px;background-color: yellowgreen;width: fit-content;">DELIVERED-AD</p>');
                    }
                    else if(status == "Deliver-Ag") {
                        $('#orderStatus').append('<p style="padding: 5px;background-color: darkgreen;width: fit-content;">DELIVERED-AG</p>');
                    }
                    else if(status == "Rejected-Ad") {
                        $('#orderStatus').append('<p style="padding: 5px;background-color: orange;width: fit-content;">REJECTED-AD</p>');
                    }
                    else if(status == "Rejected-Ag") {
                        $('#orderStatus').append('<p style="padding: 5px;background-color: darkred;width: fit-content;">REJECTED-AG</p>');
                    }

                    var equipCode = $(variable).data('todo').equipCode;
                    $('#equipCode').empty();
                    $('#equipCode').append('<p>' + equipCode + '</p>');

                    var equipName = $(variable).data('todo').equipname;
                    $('#equipName').empty();
                    $('#equipName').append('<p>' + equipName + '</p>');

                    var unitPrice = $(variable).data('todo').unitPrice;
                    $('#unitPrice').empty();
                    $('#unitPrice').append('<p>' + unitPrice + '</p>');

                    var description = $(variable).data('todo').description;
                    $('#description').empty();
                    $('#description').append('<p>' + description + '</p>');

                    var deliverTimestamp = $(variable).data('todo').deliverTimestamp;
                    $('#deliverTimestamp').empty();
                    $('#deliverTimestamp').append('<p>' + deliverTimestamp + '</p>');

                    var orderCount = $(variable).data('todo').orderCount;
                    $('#orderCount').empty();
                    $('#orderCount').append('<p>' + orderCount + '</p>');
                });
            });

            $(document).ready(function () {
                // $('[data-toggle="modal"]').on('click', function (e) {
                $('#addInquiry').on('show.bs.modal', function (event) {
                    $.ajax({
                        type: 'POST',
                        url: "<?php echo base_url(); ?>index.php/InquiryController/getAgents",
                        success: function (data) {
                            $('#agent_id_option').empty();
                            var obj = JSON.parse(data);
                            $('#agent_id_option').append('<option>-- Select --</option>');
                            for (var i = 0; i < obj.length; i++) {
                                $('#agent_id_option').append('<option>' + obj[i].agentCode + '</option>');
                            }
                        }
                    });
                });
            });

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
        -<!-- AdminLTE for demo purposes -->
        <script src="../../assets/dist/js/demo.js"></script>
        <!--datatables-->
        <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
        <script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>
        <script>

            $(document).ready(function () {
                $('#orderDetailTable').DataTable({
                    responsive: true
                });
            });
            $(document).ready(function () {
                $('#nonGroupedDetailTable').DataTable({
                    responsive: true
                });
            });
            $(document).ready(function () {
                $('#groupOrdersTableModal').DataTable({
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

            function changeStatus(element) {
                var id =$(element).attr('id');
                id = id.substr(4, id.length);
                $.ajax({
                    type: 'POST',
                    data: 'orderDetailID=' + id,
                    url: "<?php echo base_url(); ?>index.php/AdminController/changeStatus",
                    success: function () {
                        location.reload();
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
