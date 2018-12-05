<?php
// if ((isset($_SESSION['login_hotel'])) && !empty($_SESSION['login_hotel'])) {
    
// } else {
//     header("location: ../../index.php");
// }
?>
<!-- Logo -->
<a href="<?php echo base_url();?>index.php/LoginController/viewHomePage" class="logo" style="background-color: #222d32;">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>B</b>G</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Batapola </b>Group</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" id="nav" style="background-color:#222d32;padding-bottom:0;">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>

    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- Messages: style can be found in dropdown.less-->

            <!-- Notifications: style can be found in dropdown.less -->
<!--            <li class="dropdown notifications-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i>
                    <span class="label label-warning">10</span>
                </a>
                <ul class="dropdown-menu">
                    <li class="header">You have 10 notifications</li>
                    <li>
                         inner menu: contains the actual data 
                        <ul class="menu">
                            <li>
                                <a href="#">
                                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the
                                    page and may cause design problems
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-users text-red"></i> 5 new members joined
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-user text-red"></i> You changed your username
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="footer"><a href="#">View all</a></li>
                </ul>
            </li>-->
            <!-- Tasks: style can be found in dropdown.less -->

            <!-- User Account: style can be found in dropdown.less -->
            <li class="dropdown user user-menu" >
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="text-align: center;background-color: #222d32;">
                    <span class="hidden-xs"><?php //echo $_SESSION['login_hotel'] . "      " ?></span><i class="fa fa-gears"></i>
                </a>
                <ul class="dropdown-menu">
                    <!-- User image -->
                    <li class="user-header" style="text-align: center;background-color: #222d32;">
                        <img src="<?php echo (isset($agentdata))?'../../'.$agentdata->imagePath:'../../assets/images/agent/avatar.png';?>"  style='border-radius: 40%;' class="img-circle" alt="User Image">

                        <p>
                            <?php echo (isset($agentdata))?$agentdata->agentName:'';?>
                            <small>Agent ID #<?php echo (isset($agentdata))?$agentdata->agentID:'';?></small>
                        </p>
                    </li>
                    <!-- Menu Body -->

                    <!-- Menu Footer-->
                    <li class="user-footer" style="text-align: center;background-color: #222d32;">
                        <!--                <div class="pull-left">
                                          <a href="#" class="btn btn-default btn-flat">Profile</a>
                                        </div>-->

                        <a href="<?php echo base_url();?>index.php/LoginController/logout" class="btn btn-default btn-flat" style='background-color: #555555;color:white;'>Sign out</a>

                    </li>
                </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->

        </ul>
    </div>
</nav>
<script>

    // function logout() {

    //     $.ajax({
    //         type: 'GET',
    //         url: '<?php //echo base_url();?>/index.php/LogoutController/logout',
    //         datatype: "html",
    //         success: function (data) { 
    //             $('#rooms').html(data);
    //         }
    //         // type: 'POST',
    //         // url: '../logout.php',
    //         // success: function (data) {

    //         //     BootstrapDialog.alert("You have successfully updated hotel description.")
    //         //     window.location.href = '../../index.php'

    //         // }
    //     });
    // }

</script>