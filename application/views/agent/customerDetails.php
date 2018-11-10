<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Customer Details</title>
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
        <?php include 'agentTopMost.php'; ?>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <?php include 'agentSidebar.php'; ?>
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
                <small>Control panel</small> Agent ID #<?php echo $_SESSION['agent_no']; ?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Customer</a></li>
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
                            style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;"><?php echo "Add New Customer<br>"; ?></h3>
                    </div>
                    <!-- edit form column -->
                    <div class="box-body" >
                        <form class="is-readonly" method="POST" action="<?php echo site_url(); ?>/AgentController/addNewCustomer" id="form2" role="form" data-toggle="validator">
                      <div class="row" style="padding:10px">
                        <div class="col-md-6" style="padding:5px 12px">
                              <label for="fullname">Full Name</label>
                              <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Full Name" required />
                        </div>
                        <div class="col-md-6" style="padding:5px 12px">
                              <label for="filename">File Name</label>
                              <input type="text" class="form-control" id="filename" name="filename" placeholder="File Name"  data-error="Bruh, that file name is invalid"  required />
                              <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-md-6" style="padding:5px 12px">
                              <label for="tel">Land Number</label>
                              <input type="tel" class="form-control" id="tele" name="tele" placeholder="Telephone number format 0711234567 (length: 10 numbers)" data-maxlength="10" data-minlength="9" pattern="[0-9]{10}" />
                        </div>
                        <div class="col-md-6" style="padding:5px 12px">
                              <label for="mobile">Mobile</label>
                              <input type="tel" class="form-control" id="mobile" name="mobile" placeholder="Telephone number format 0711234567 (length: 10 numbers)" data-maxlength="10" data-minlength="9" pattern="[0-9]{10}" />
                        </div>                        
                        <div class="col-md-6" style="padding:5px 12px">
                              <label for="address">Address</label>
                              <input type="text" class="form-control" id="address" name="address" placeholder="Address" required/>
                        </div>
                        <div class="col-md-6" style="padding:5px 12px">
                              <label for="exampleInputEmail1">Email address</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Email"  data-error="Bruh, that email address is invalid"  />
                              <div class="help-block with-errors"></div>
                        </div>
                        <div class="col-md-6" style="padding:5px 12px">
                                 <label for="capacity">Capacity (in Liters)</label><br>
                              <input type="number" class="form-control" id="capacity" name="capacity" placeholder="Capacity" min="0" required />
                       </div>
                      <div class="col-md-6" style="padding:5px 12px">
                                 <label for="exampleInputEmail1">Rep Name</label>
                                 <input type="text" class="form-control" id="repname" name="repname" placeholder="Rep Name" required />
                                 <div class="help-block with-errors"></div>
                       </div>
                      <div class="col-md-6" style="padding:5px 12px">
                                 <label for="exampleInputEmail1">Planned Installed Date</label>
                                 <input type="date" class="form-control" id="installDate" name="installDate" required />
                                 <div class="help-block with-errors"></div>
                       </div>
                      <div class="col-md-6" style="padding:5px 12px">
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
                            style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;"><?php echo "Customer Details<br>"; ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="padding:0 4%;">
                        <br>
                        <table id="customertable" class="table table-striped nowrap table-responsive"
                               cellspacing="0" width="100%">
                            <thead class="no-border">
                            <tr style="text-align:center;color:#404040;font-size: 13px;font-weight: 200;">
                                <th data-priority="1">Customer ID</th>
                                <th data-priority="2">Name</th>
                                <th data-priority="5">Address</th>
                                <th data-priority="6">Email</th>
                                <th data-priority="3">Land Number</th>
                                <th data-priority="4">Mobile Number</th>
                            </tr>
                            </thead>
                            <tbody id="orderTable" style="text-align: center;">
                            <?php
                            if (sizeof($customerdata) > 0) {
                                for ($i = 0; $i < sizeof($customerdata); $i++) {
                                    ?>
                                    <tr style="text-align:left;" id="<?php echo $customerdata[$i]->customer_id; ?>">
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $customerdata[$i]->customer_id; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $customerdata[$i]->name; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $customerdata[$i]->address; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $customerdata[$i]->email; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $customerdata[$i]->landline; ?></td>
                                        <td style="border-right:1px solid #f4f4f4;"><?php echo $customerdata[$i]->mobile; ?></td>
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
        var table_checkin = $('#customertable').DataTable({
            responsive: true
        });
    });
</script>
</body>
</html>
