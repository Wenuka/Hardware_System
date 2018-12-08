<?php ?>

<aside class="main-sidebar" style="" >
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="">
        <!-- Sidebar user panel -->
        <div class="user-panel" style="margin-bottom:5%;height:auto;text-align:center">
            <div class="image" style="margin-bottom:5%;text-align:center;margin-top:10%;">
                <?php if(isset($agentdata->imagePath) && $agentdata->imagePath!=null)
                {
                    $image = '../../'.$agentdata->imagePath;
                }
                else{
                    $image = '../../assets/images/agent/avatar.png';
                }?>
                <img src="<?php echo $image?>"  style='border-radius: 40%;' class="img-circle" alt="Agent Image">
            </div>
            <div class="info" style="left:0;position:relative;padding:0;">
                <p style="display:inline-block;"><?php echo (isset($agentdata)) ? $agentdata->agentName : 'Welcome!'; ?></p>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a title="My home" href="<?php echo base_url('index.php/LoginController/viewHomePage'); ?>">
                    <i class="fa fa-calendar"></i> <span>Home Page</span>
                </a>
            </li>
            <li>
                <a title="My reps" href="<?php echo base_url('index.php/AgentController/viewReps'); ?>">
                    <i class="fa fa-calendar"></i> <span> My Reps</span>
                </a>
            </li>
            <li>
                <a title="My shops" href="<?php echo base_url('index.php/AgentController/viewShops'); ?>">
                    <i class="fa fa-calendar"></i> <span> My shops</span>
                </a>
            </li>
            <li>
                <a title="My account"
                   href="<?php echo base_url('index.php/AgentController/viewAgent'); ?>">
                    <i class="fa fa-calendar"></i> <span>My Account</span>
                </a>
            </li>
            <li>
                <a title="Inquiries"
                   href="<?php echo base_url('index.php/AgentController/viewInquiries'); ?>">
                    <i class="fa fa-calendar"></i> <span>All Inquiries</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

