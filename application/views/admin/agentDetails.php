<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Agent Details</title>
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
                <li><a href="#"><i class="fa fa-dashboard"></i> Agent</a></li>
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
                            style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">Add New Agent</h3>
                    </div>
                    <!-- edit form column -->
                    <div class="box-body" >
                        <form class="is-readonly" method="POST" action="<?php echo site_url(); ?>/AdminController/addNewAgent" id="form2" role="form" data-toggle="validator">
                        <div class="col-md-12">
                        <div class="col-md-6" >
                            <!-- <br> -->
                            <div class="form-group">
                              <label for="fullname">Full Name</label>
                              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" required />
                            </div>
                            <div class="form-group">
                              <label for="fullname">Province</label>
                              <input type="text" class="form-control" id="province" name="province" placeholder="Province" required />
                            </div>
                               <div class="form-group">
                                 <label for="exampleInputEmail1">Birth Day</label>
                                 <input type="date" class="form-control" id="bday" name="bday" required />
                                 <div class="help-block with-errors"></div>
                               </div>
                            <div class="form-group">
                              <label for="mobile">Mobile</label>
                              <input type="tel" data-maxlength="10" data-minlength="10" class="form-control" id="mobile" name="mobile" placeholder="Telephone number format 0711234567 (length: 10 numbers)" pattern="[0-9]{10}" required /><div class="help-block with-errors">Format of the telephone number should be [0711234567] <!-- (length - 10 numbers.) --></div>
                              <!-- <div class="help"></div> -->
                            </div>
                           </div>
                           <div class="col-md-6" >
                               <!-- <br> -->
                            <div class="form-group">
                              <label for="exampleInputEmail1">Address</label>
                              <input type="text" class="form-control" id="address" name="address" placeholder="Address"  data-error="Bruh, that address is invalid"  required />
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Town</label>
                              <input type="text" class="form-control" id="town" name="town" placeholder="Town"  data-error="Bruh, that town is invalid"  required />
                            </div>
                            <div class="form-group">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Email"  data-error="Bruh, that email address is invalid"  required />
                            </div>
                            <div class="form-group">
                              <label for="nic">NIC</label>
                              <input type="text" class="form-control" pattern="[0-9]{9}[x|X|v|V]|[0-9]{12}$" data-maxlength="12" data-minlength="10" id="nic" name="nic" placeholder="NIC number format 912452653V or 199343456734" required /><div class="help-block with-errors">Format of the NIC number should be [913650215X/V or 199343456734] <!-- (length - 10 charachters.) --></div>
                              <!-- <div class="help"></div> -->
                            </div>
                               <!-- <input type="submit" class="form-control" name="submit"> -->
                               <input type="submit" id="save_btn" class="btn btn-default btn-lg btn-save js-save" style='float:right;background-color: #8892d6;color:white;font-size: inherit;margin-top: 5px;' />
                              </div>
                          </div>
                         </form>
                    </div>
                </div>
            </div>
        </section>
        <section class="content" style="padding-right:5%;padding-left:5%;">
            <div class ="col-lg-12 col-md-12 col-sm-12" style="padding: 0;">
                <div id="about_web" class="box box-solid"
                     style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
                    <div class="box-header with-border" style="text-align: center;">
                        <h3 class="box-title"
                            style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;"><?php echo "Agent Details<br>"; ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="padding:0 4%;">
                        <br>
                        <table id="agenttable" class="table table-striped nowrap table-responsive"
                               cellspacing="0" width="100%">
                            <thead class="no-border">
                            <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">
                                <th data-priority="1">Agent ID</th>
                                <th data-priority="1">Name</th>
                                <th data-priority="7">Address</th>
                                <th data-priority="7">Province</th>
                                <th data-priority="3">Town</th>
                                <th data-priority="4">Email</th>
                                <th data-priority="5">Mobile Number</th>
                                <th data-priority="5">NIC Number</th>
                                <th data-priority="5">DOB</th>
                                <th data-priority="3">Username</th>
                                <th data-priority="3">Initial Password</th>
                            </tr>
                            </thead>
                            <tbody id="orderTable" style="text-align: center;">
                            <?php
                            if (sizeof($agentdata) > 0) {
                                for ($i = 0; $i < sizeof($agentdata); $i++) {
                                    ?>
                                    <tr style="text-align:left;" id="<?php echo $agentdata[$i]->agent_id; ?>">
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $agentdata[$i]->agent_id; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $agentdata[$i]->name; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $agentdata[$i]->address; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $agentdata[$i]->province; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $agentdata[$i]->town; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $agentdata[$i]->email; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $agentdata[$i]->mobile; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $agentdata[$i]->nic; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $agentdata[$i]->date_of_birth; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $agentdata[$i]->unm; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $agentdata[$i]->pwd; ?></td>
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
<!--datatables-->
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.13/js/dataTables.bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>
<script>
    $(document).ready(function () {
        var table_checkin = $('#agenttable').DataTable({
            responsive: true
        });
    });
</script>
</body>
</html>
