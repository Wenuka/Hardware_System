<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Work</title>
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
                <li><a href="#"><i class="fa fa-dashboard"></i> New Work</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </section>
        <!-- Main content -->

        <section class="content" id="content" style="padding-right:2%;padding-left:2%;">
            <div class ="col-lg-12 col-md-12 col-sm-12" id="contetn_lg" style="padding: 0;">
                <div id="about_web" class="box box-solid"
                     style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);border-top: 3px solid #d2d6de;">
                    <div class="box-header with-border" style="text-align: center;">
                        <h3 class="box-title"
                            style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;"><?php echo "Work Details<br>"; ?></h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="padding:0 4%;">
                        <br>
                        <div class="form-group">
                            <form method="post" action="<?php echo site_url(); ?>/AgentController/addNewWork">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="selFIlt">Select Filter ID:</label>
                                            <select class="form-control" id="filter_id" name="filter_id" required>
                                                <option disabled selected value="">Select A Filter ID</option>
                                                <?php foreach ($filterdata as $value) { 
                                                    echo "<option>".$value->filter_id."</option>";
                                                } ?>
                                            </select> 
                                        </div>
                                        <div class="form-group">
                                          <label for="comment">Plumber Name:</label>
                                          <input type="text" class="form-control"  id="plumbername" name="plumbername">
                                        </div>
                                        <div class="form-group">
                                          <label for="comment">Comment:</label>
                                          <textarea class="form-control" rows="3" id="comment" name="description"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row" >
                                    <div class="col-md-12" id="infodiv"></div>
                                </div>
                                <div class="row" id="servicediv" style="display: none;">
                                    <div class="col-md-6 ">
                                        <div class="col-md-12"><label for="selJob">Select Job Type(s):</label></div>
                                        <div class="col-md-6">
                                            <input type="hidden" name="jobtype" id="jobtype">
                                            <?php for ($j=0; $j < ceil(sizeof($codedata)/2); $j++) { ?>
                                                <div class="checkbox">
                                                  <label><?php echo "<input type='checkbox' class='codeCB' id='code".$codedata[$j*2]->code_id."' name='code[]'  value='".$codedata[$j*2]->code_id."'>".$codedata[$j*2]->code." - ".$codedata[$j*2]->description;?></label>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-6">
                                            <?php for ($j=0; $j < floor(sizeof($codedata)/2); $j++) { ?>
                                                <div class="checkbox">
                                                  <label><?php echo "<input type='checkbox'class='codeCB' id='code".$codedata[$j*2]->code_id."' name='code[]' value='".$codedata[$j*2+1]->code_id."'>".$codedata[$j*2+1]->code." - ".$codedata[$j*2+1]->description;?></label>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="col-md-12"><label for="sel1">Select Part(s):</label></div>
                                        <div class="col-md-6">
                                            <?php for ($j=0; $j < ceil(sizeof($partdata)/2); $j++) { ?>
                                                <div class="checkbox">
                                                  <label><?php echo "<input type='checkbox' id='part".$partdata[$j*2]->part_id."' name='part[]' value='".$partdata[$j*2]->part_id."'>".$partdata[$j*2]->part." - ".$partdata[$j*2]->description;?></label>
                                                </div>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-6">
                                            <?php for ($j=0; $j < floor(sizeof($partdata)/2); $j++) { ?>
                                                <div class="checkbox">
                                                  <label><?php echo "<input type='checkbox' id='part".$partdata[$j*2]->part_id."' name='part[]' value='".$partdata[$j*2+1]->part_id."'>".$partdata[$j*2+1]->part." - ".$partdata[$j*2+1]->description;?></label>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group"> 
                                            <!-- <div class="col-sm-offset-2 col-sm-10"> -->
                                              <button id="submitbtn" type="submit" class="btn btn-info btn-block">Submit</button>
                                            <!-- </div> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
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
<!-- select the current filter id -->
<script type="text/javascript">
    document.getElementsByTagName('select')[0].onchange = function() {
        var index = this.selectedIndex;
        var inputText = this.children[index].innerHTML.trim();
        var filterData = <?php echo json_encode($filterdata); ?>;
        // alert(filterData[inputText]['status']);
        if (filterData[inputText]['status'] == "entryadded") {
            $("#jobtype").val("entryadded");
            $('#infodiv').css('display', 'inline-block');
            $('#servicediv').css('display', 'none');
            $("input[name='code[]'][value='1']").attr("checked", true);
            $("input[name='part[]'][value='1']").attr("checked", true);
            document.getElementById('infodiv').innerHTML = 'This Filter has just added to the System.<br>Please hit "Submit" and add initial photos of the place.';
        }
        else if (filterData[inputText]['status'] == "initialcheck") {
            $("#jobtype").val("initialcheck");
            $('#infodiv').css('display', 'inline-block');
            $('#servicediv').css('display', 'none');
            $("input[name='code[]'][value='2']").attr("checked", true);
            $("input[name='part[]'][value='1']").attr("checked", true);
            document.getElementById('infodiv').innerHTML = 'Please add installed photos to the system by pressing "Submit" button';
        }
        else if (filterData[inputText]['status'] == "inoperation") {
            $("#jobtype").val("inoperation");
            $('#servicediv').css('display', 'inline-block');
            $('#infodiv').css('display', 'none');
        }
        else{
            $("#jobtype").val("rejected");
            $('#infodiv').css('display', 'none');
            $('#servicediv').css('display', 'none');
            document.getElementById('infodiv').innerHTML = 'A Rejected Filter ID Selected. Please select another Filter!';
        }
        $('#code0').attr("disabled", true);
        $('#part0').attr("disabled", true);
    }
</script>
<!-- atleast check one check box -->
<script type="text/javascript">
$(document).ready(function () {
    $('#submitbtn').click(function() {
      checkedcode = $("input[name='code[]']:checked").length;
      checked = $("input[name='part[]']:checked").length;
      plumbrname = $("#plumbername").val();
      if (plumbrname == "") {
          alert("Plumber name must be filled out.");
          return false;
      }
      if(!checkedcode) {
        alert("You must check at least one JOB TYPE.");
        return false;
      }
      if(!checked) {
        alert("You must check at least one PART.");
        return false;
      }

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
</body>
</html>
