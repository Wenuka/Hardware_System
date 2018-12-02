<?php ?>
<aside class="main-sidebar" style="">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="">
        <!-- Sidebar user panel -->
        <div class="user-panel" style="margin-bottom:5%;height:auto;text-align:center">
            <div class="image" style="margin-bottom:5%;text-align:center;margin-top:10%;">
                <img src="../../assets/images/admin/avatar.png"
                     style='border-radius: 100%;max-height:105px;max-width:105px;' class="img-circle" alt="Admin Image">
            </div>
            <div class="info" style="left:0;position:relative;padding:0;">
                <p style="display:inline-block;"><?php echo (isset($admindata)) ? $admindata->adminName : 'Welcome!'; ?></p>
            </div>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a title="My home" href="<?php echo base_url('index.php/LoginController/viewHomePage'); ?>">
                    <i class="fa fa-calendar"></i> <span>Home Page</span>
                </a>
            </li>
            <li>
                <a title="My agents" href="<?php echo base_url('index.php/AdminController/viewAgents'); ?>">
                    <i class="fa fa-calendar"></i> <span> My Agents</span>
                </a>
            </li>
            <li>
                <a title="My reps" href="<?php echo base_url('index.php/AdminController/viewReps'); ?>">
                    <i class="fa fa-calendar"></i> <span> My Reps</span>
                </a>
            </li>
            <li>
                <a title="My shops" href="<?php echo base_url('index.php/AdminController/viewShops'); ?>">
                    <i class="fa fa-calendar"></i> <span> My shops</span>
                </a>
            </li>
            <li>
                <a title="My account"
                   href="<?php echo base_url('index.php/AdminController/viewAdmin'); ?>">
                    <i class="fa fa-calendar"></i> <span>My Account</span>
                </a>
            </li>
            <li>
                <a title="Inquiries"
                   href="<?php echo base_url('index.php/AdminController/viewInquiries'); ?>">
                    <i class="fa fa-calendar"></i> <span>All Inquiries</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

