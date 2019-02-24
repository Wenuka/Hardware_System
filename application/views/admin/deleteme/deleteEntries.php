<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add or Delete Entries</title>
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
        <?php
        if (!empty($_SESSION['alert'])) {
            echo "<div class='alert alert-info' style='margin-bottom: 0;'><strong>Alert! </strong> ".$_SESSION['alert']."</div>";
            unset($_SESSION['alert']);
        }
        ?>
        <section class="content-header" style="padding-right:5%;padding-left:5%;padding-top:2%;">
            <h1 style="font-size: 1em;font-weight: bold;text-transform: capitalize;">
                <small>Control panel</small> Admin ID #<?php echo $_SESSION['admin_no']; ?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Delete</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content" style="padding-right:5%;padding-left:5%;">
            <div class ="col-lg-12 col-md-12 col-sm-12" style="padding: 0;">
                <div class="col-md-12">

                    <div id="about_web" class="box box-solid"
                         style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
                        <div class="box-header with-border" style="text-align: center;">
                            <h3 class="box-title"
                                style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">Delete Work</h3>
                        </div>
                        
                        <!-- /.box-header -->
                        <div class="box-body" style="padding:0 4%;">
                            <form class="is-readonly" onsubmit="return confirm('Do you really want to remove this work?');" method="POST" action="<?php echo site_url(); ?>/AdminController/deleteWork" id="delWork" role="form" data-toggle="validator"><br>
                                Work ID: 
                                <input type="number" name="work_id" required>
                                <input type="submit" class="btn btn-default btn-lg btn-save js-save" style='background-color: #8892d6;color:white;font-size: inherit;' />
                            </form>
                            <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        </div>
                        <!-- /.box-body -->
                        <div class="box-header with-border" style="text-align: center;">
                            <h3 class="box-title"
                                style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">Delete Filter</h3>
                        </div>
                        
                        <!-- /.box-header -->
                        <div class="box-body" style="padding:0 4%;">
                            <form class="is-readonly" onsubmit="return confirm('Do you really want to remove this filter?');" method="POST" action="<?php echo site_url(); ?>/AdminController/deleteFilter" id="delFilter" role="form" data-toggle="validator"><br>
                                Filter ID: 
                                <input type="number" name="filter_id" required>
                                <input type="submit" class="btn btn-default btn-lg btn-save js-save" style='background-color: #8892d6;color:white;font-size: inherit;' />
                            </form>
                            <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        </div>
                        <!-- /.box-body -->
                        <div class="box-header with-border" style="text-align: center;">
                            <h3 class="box-title"
                                style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">Delete Agent</h3>
                        </div>
                        
                        <!-- /.box-header -->
                        <div class="box-body" style="padding:0 4%;">
                            <form class="is-readonly" onsubmit="return confirm('Do you really want to remove this agent?');" method="POST" action="<?php echo site_url(); ?>/AdminController/deleteAgent" id="delAgent" role="form" data-toggle="validator"><br>
                                Agent ID: 
                                <input type="number" name="agent_id" required>
                                <input type="submit" class="btn btn-default btn-lg btn-save js-save" style='background-color: #8892d6;color:white;font-size: inherit;' />
                            </form>                        
                            <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <div class="col-md-4">
                    <div id="about_web" class="box box-solid"
                         style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
                        <div class="box-header with-border" style="text-align: center;">
                            <h3 class="box-title"
                                style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">Add Codes</h3>
                        </div>
                        
                        <!-- /.box-header -->
                        <div class="box-body" style="padding:0 4%;">
                            <form class="is-readonly" onsubmit="return confirm('Do you really want add this Code?');" method="POST" action="<?php echo site_url(); ?>/AdminController/addCode" id="addCode" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="code">Code</label><br>
                                    <input type="text" name="code" placeholder="eg. PD" required>
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label><br>
                                    <input type="text" name="description" placeholder="eg. Part Damaged" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-default btn-lg btn-save js-save" style='background-color: #8892d6;color:white;font-size: inherit;' />
                                </div>
                            </form>
                            <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="about_web" class="box box-solid"
                         style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
                        <div class="box-header with-border" style="text-align: center;">
                            <h3 class="box-title"
                                style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">Add Parts</h3>
                        </div>
                        
                        <!-- /.box-header -->
                        <div class="box-body" style="padding:0 4%;">
                            <form class="is-readonly" onsubmit="return confirm('Do you really want add this Part?');" method="POST" action="<?php echo site_url(); ?>/AdminController/addPart" id="addPart" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="part">Part</label><br>
                                    <input type="text" name="part" placeholder="eg. Filter" required>
                                </div>
                                <div class="form-group">
                                    <label for="Description">Description</label><br>
                                    <input type="text" name="description" placeholder="eg. Filter" required>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-default btn-lg btn-save js-save" style='background-color: #8892d6;color:white;font-size: inherit;' />
                                </div>
                            </form>
                            <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div id="about_web" class="box box-solid"
                         style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
                        <div class="box-header with-border" style="text-align: center;">
                            <h3 class="box-title"
                                style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">Add Inquiry</h3>
                        </div>
                        
                        <!-- /.box-header -->
                        <div class="box-body" style="padding:0 4%;">
                            <form class="is-readonly" onsubmit="return confirm('Do you really want place this Inquiry?');" method="POST" action="<?php echo site_url(); ?>/AdminController/addInquiry" id="addInquiry" role="form" data-toggle="validator">
                                <div class="form-group">
                                    <label for="part">Agent ID</label><br>
                                    <select class="form-control" id="agent_id" name="agent_id" required>
                                        <option disabled selected value="">Select A Agent ID</option>
                                        <?php foreach ($agentdata as $value) { 
                                            echo "<option>".$value->agent_id."</option>";
                                        } ?>
                                    </select> 
                                </div>
                                <div class="form-group">
                                    <label for="Description">Message</label><br>
                                    <textarea class="form-control" rows="2" id="comment" name="description" required></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-default btn-lg btn-save js-save" style='background-color: #8892d6;color:white;font-size: inherit;' />
                                </div>
                            </form>
                            <hr style="border: 1px solid rgba(0, 0, 0, 0.3);">
                        </div>
                    </div>
                </div>
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
