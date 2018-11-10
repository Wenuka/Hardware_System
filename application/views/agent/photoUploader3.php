<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>New Work:: Photos</title>
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
        <section class="content-header" style="padding-right:5%;padding-left:5%;padding-top:2%;">
            <h1 style="font-size: 1em;font-weight: bold;text-transform: capitalize;">
                <small>Control panel</small> Agent ID #<?php echo $_SESSION['agent_no']; ?>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Photo upload</a></li>
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
                            style="text-align: center;color:dimgrey;padding-top:6px;font-weight: bold;font-size: 18px;">Repairing and Servicing</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body" style="padding:0 4%;">
                        <div class="col-md-12">
                            Warranty Tag and Filter Photo: <br>
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal12" style="background-color: #8892d6;border: #8892d6;">Add New Images </button><br><br>
                            500ml per time before Repairing Photo: <br>
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal13" style="background-color: #8892d6;border: #8892d6;">Add New Images </button><br><br>
                            Replace, Repair parts with Fault Codes Photo: <br>
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal14" style="background-color: #8892d6;border: #8892d6;">Add New Images </button><br><br>
                            500ml per time after Repairing Photo: <br>
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal15" style="background-color: #8892d6;border: #8892d6;">Add New Images </button><br><br>
                            Service Charge Receipt Photo: <br>
                            <button type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal16" style="background-color: #8892d6;border: #8892d6;">Add New Images </button><br><br>
                        </div>
                        <div class="col-md-6">
                            <form method="post" action="<?php echo site_url(); ?>/AgentController/addNewWorkEnd">
                              <div class="form-group">
                                <label for="nextDate">Next Service Date:</label>
                                <input type="date" class="form-control" id="nxtDate" name="nxtDate" required>
                                <input type="hidden" id="wid" name="postwork_id" value="<?php echo $_SESSION['work_id']; ?>">
                                <input type="hidden" id="fid" name="postfilter_id" value="<?php echo $_SESSION['work_filter_id']; ?>">
                                <input type="hidden" id="jobtype" name="jobtype" value="3">
                              </div>
                              <button type="submit" class="btn btn-primary btn-block">Submit</button>
                            </form>
                        </div>
                        <table class="table" id="imgTable">
                            <thead>
                                <th>Time</th>
                                <th>Initial Size</th>
                                <th>Image</th>
                                <th>Upload Size</th>
                                <!-- <th>Uploaded Size</th> -->
                            </thead>
                            <tbody id="tbodyID">
                                <tr>
                                    <!-- <td>-NA-</td>
                                    <td>-NA-</td>
                                    <td>-NA-</td>
                                    <td>Not Any Photos Uploaded Yet</td> -->
                                </tr>
                                
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
    <?php for ($i=12; $i < 17; $i++) { ?>      
        <div id="myModal<?php echo $i; ?>" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Add new Image</h4>
                    </div>
                    <div class="modal-body" id="inputImagesAdd">
                        <div class="form-group">
                            <label for="userfile<?php echo $i; ?>[]">Image File</label>
                            <input type="file" class="form-control" name="userfile<?php echo $i; ?>[]"  id="userfile<?php echo $i; ?>" accept="image/jpeg, image/png" multiple>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-sm"
                                onclick="addImage(<?php echo $i; ?>)">Upload
                        </button>
                    </div>
                </div>

            </div>
        </div>
    <?php } ?>
    <div>
    <?php
    include 'footer.html';
    ?>
</div>
</div>
<!-- image upload -->
<script src="../../assets/js/photoResize/canvas-to-blob.min.js"></script>
<script src="../../assets/js/photoResize/resize.js"></script>
<script src="../../assets/js/photoResize/appmainImages.js"></script>
<script>

    // function deleteImage() {
    //     id = $('#runFunc').val();
    //     $.ajax({
    //         type: 'POST',
    //         data: 'imageid=' + id,
    //         url: "<?php echo base_url(); ?>index.php/EditImagesController/deleteImage",
    //         success: function (data) {
    //             location.reload();
    //         }
    //     });

    // }

    function  confirmDialog(id) {
        $('#runFunc').attr('value',id);
        $("#confirmDialog").modal();
    }

    function addImage(id) {
        var files = document.getElementById("userfile"+id).files;
        var f_id = <?php echo $filter_id;?>;
        var work_id = <?php echo $work_id;?>;
        for (var i in files) {

            if (typeof files[i] !== 'object'){
                // alert ('not object');
                continue;
            }
            // console.log(id);
            // console.log(loc);
            (function () {

                var initialSize = files[i].size;

                resize.photo(files[i], 1020, 566, 'file', function (resizedFile) {

                    //var resizedSize = resizedFile.size;
                    // ds.push(resizedFile);
                    upload3(resizedFile,initialSize,id,f_id,work_id, function (response) {});

                });
                // alert('for loop');
            }());
            // alert('object');
        }
        // alert('Photos have updated successfully. \nChanges may visible once you logged in again.');
        $('#myModal'+id).modal('hide');
    }

    // function addAnotherInput() {
    //     var values = [];
    //     $("input[name='userfile2[]']").each(function () {

    //         if ($(this).val() == "") {
    //             alert("No image location is specified for the given location.");
    //             return false;
    //         }
    //     });
    //     var node_input = document.createElement("input");
    //     node_input.setAttribute("type", "file");
    //     node_input.setAttribute("class", "form-control");
    //     node_input.setAttribute("name", "userfile2[]");
    //     var node = document.createElement("DIV");
    //     node.setAttribute("class", "form-group");
    //     node.appendChild(node_input);
    //     document.getElementById("inputImagesAdd").appendChild(node);

    // }

    function changeImage(imageId, loc) {
        $('#changeId').attr('value', imageId);
        $('#changePath').attr('value', loc);
        $("#myModalChange").modal();
    }

    function saveImage() {
        // e.preventDefault();
        var checkVal = $("input[name='userfile']").val();
        var files = document.getElementById("userfile").files;
        // console.log(files);
        if (checkVal == "") {
            alert("No image location is specified for the given location.");
            return false;
        }
        else{
            var id = $("#changeId").val();
            var loc = $("#changePath").val();
            // if (typeof files[0] !== 'object'){
            //  alert ('not object');
            //     continue;
            // }
            (function () {

                var initialSize = files[0].size;

                resize.photo(files[0], 880, 488, 'file', function (resizedFile) {

                    //var resizedSize = resizedFile.size;
                    // ds.push(resizedFile);
                    upload(resizedFile,initialSize,id, loc,'big', function (response) {
                    });

                });  
                resize.photo(files[0], 250, 200, 'file', function (resizedFile) {
                    upload(resizedFile,initialSize,id, loc,'small', function (response) {
                        alert('Photos have updated successfully. \nChanges may visible once you logged in again.');
                    });
                }); 
                // alert('for loop');
            }());



            $('#myModalChange').modal('hide');

            //upload to the same location
            // $.ajax({
            //     type: 'POST',
            //     data: {"imageid": id, "imageloc": loc},
            //     url: "<?php echo base_url(); ?>index.php/EditImagesController/updateImage",
            //     success: function (data) {
            //         location.reload();
            //     }
            // });
        }
    }

</script>
<!-- atleast check one check box -->
<script type="text/javascript">
$(document).ready(function () {
    $('#submitbtn').click(function() {
      checkedcode = $("input[name='code[]']:checked").length;
      checked = $("input[name='part[]']:checked").length;

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
