<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Inquiries</title>
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
<!--    <script src="../../assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>-->
<!--    <!-- jQuery UI 1.11.4 -->
<!--    <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>-->
<!--    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>-->
<!--    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>-->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <script src="../../assets/photo-slider/jssor.slider-21.1.6.mini.js" type="text/javascript"></script>
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
        <?php
        if (!empty($_SESSION['alert'])) {
            echo "<div class='alert alert-info' style='margin-bottom: 0;'><strong>Alert! </strong> ".$_SESSION['alert']."</div>";
            unset($_SESSION['alert']);
        }
        ?>
        <!-- Content Header (Page header) -->
        <section class="content-header" style="padding-right:5%;padding-left:5%;padding-top:2%;">
            <h1 style="font-size: 1em;font-weight: bold;text-transform: capitalize;">
                <small>Control panel</small> Agent ID #<?php echo $_SESSION['agent_no']; ?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Contact</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <!-- Main content -->
        <section class="content" style="padding-right:5%;padding-left:5%;">
            <div class ="col-lg-12 col-md-12 col-sm-12" style="padding: 0;">

                <div id="about_web" class="box box-solid"
                     style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
                    <div class="box-header with-border" style="text-align: center;">
                        <h3 class="box-title"
                            style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">All Inquiries</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="padding:0 4%;">
                        <br>
                        <table id="inquirytable" class="table table-striped nowrap table-responsive"
                               cellspacing="0" width="100%">
                            <thead class="no-border">
                            <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">
                                <th data-priority="1" style="max-width:50px;">Order ID</th>
                                <th data-priority="1" style="max-width:50px;">Filter ID</th>
                                <th data-priority="4">Message</th>
                                <th data-priority="5">Date</th>
                                <th data-priority="2" style="max-width:90px;">Status</th>
                            </tr>
                            </thead>
                            <tbody id="orderTable" style="text-align: center;">
                            <?php
                            if (sizeof($inquirydata) > 0) {
                                for ($i = 0; $i < sizeof($inquirydata); $i++) {
                                    ?>
                                    <tr style="text-align:left;" id="<?php echo $inquirydata[$i]->inquiry_id; ?>">
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $inquirydata[$i]->inquiry_id; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo ($inquirydata[$i]->filter_id == 0)?"By Admin":$inquirydata[$i]->filter_id; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $inquirydata[$i]->message; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $inquirydata[$i]->last_edittime; ?></td>
                                        <?php if ($inquirydata[$i]->status == "confirm") {
                                            echo "<td style='border-right:1px solid #f4f4f4;background-color:#daefdc;'>".$inquirydata[$i]->status."</td>";
                                        }
                                        elseif ($inquirydata[$i]->status == "ignored") {
                                            echo "<td style='border-right:1px solid #f4f4f4;background-color:#d8a9a5;'>".$inquirydata[$i]->status."</td>";
                                        }
                                        else{
                                            echo "<td style='border-right:1px solid #f4f4f4;background-color:#FCF3CF;'>".$inquirydata[$i]->status."</td>";
                                        } ?>
                                        
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
            <div class ="col-lg-12 col-md-12 col-sm-12" style="padding: 0;">

                <div id="about_web" class="box box-solid" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
                    <div class="box-header with-border" style="text-align: center;">
                        <h3 class="box-title"
                            style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">All Work</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="padding:0 4%;">
                        <br>
                        <table id="worktable" class="table table-striped nowrap table-responsive"
                               cellspacing="0" width="100%">
                            <thead class="no-border">
                            <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">
                                <th data-priority="1" style="max-width:50px;">Work ID</th>
                                <th data-priority="2">Added Date</th>
                                <th data-priority="3" style="max-width:50px;">Filter ID</th>
                                <th data-priority="4">Plumber Name</th>
                                <th data-priority="5">Description</th>
                                <th data-priority="2" style="max-width:50px;" data-orderable="false">Photos</th>
                            </tr>
                            </thead>
                            <tbody id="workorderTable" style="text-align: center;">
                            <?php
                            if (sizeof($workdata) > 0) {
                                for ($i = 0; $i < sizeof($workdata); $i++) {
                                    ?>
                                    <tr style="text-align:left;" id="<?php echo $workdata[$i]->work_id; ?>">
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $workdata[$i]->work_id; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $workdata[$i]->insert_time; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $workdata[$i]->filter_id; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $workdata[$i]->plumbername; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $workdata[$i]->description; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;">
                                        <form method="post" action="<?php echo site_url(); ?>/AgentController/showPhotos">
                                            <button type="submit" name="submit" class="btn hvr-shutter-in-horizontal" style="border:none;width:auto;margin-top:7%;text-align:right;" value="<?php echo $workdata[$i]->work_id; ?>">Check Photos</button>
                                        </form>
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
            <!-- Small boxes (Stat box) -->
            <!-- <br> -->
        </section>
    </div>
    <div>
    <?php
    include 'footer.html';
    ?>
</div>
</div>


<!-- Bootstrap 3.3.6 -->
<!--<script src="../../assets/bootstrap/js/bootstrap.min.js"></script>-->
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


       function showPhotos(workId) {
           $.ajax({
               type: 'POST',
               data: {workId: workId},
               url: "<?php echo base_url(); ?>index.php/AgentController/showPhotos",
               success: function (data) {
                   window.location.href = '<?php echo base_url(); ?>index.php/AgentController/showSliderPage(data='+data+')';
               }
           })
       }
</script>

</body>
</html>


