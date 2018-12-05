<?php ?>

<aside class="main-sidebar" style="" >
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" style="">
    <!-- Sidebar user panel -->
    <div class="user-panel" style="margin-bottom:5%;height:auto;text-align:center">
      <div class= "image" style="margin-bottom:5%;text-align:center;margin-top:10%;">
        <img src="<?php echo (isset($agentdata))?'../../'.$agentdata->imagePath:'../../assets/images/agent/avatar.png';?>"  style='border-radius: 100%;max-height:105px;max-width:105px;' class="img-circle" alt="Agent Image">
      </div>
      <div class="info" style="left:0;position:relative;padding:0;">
        <p style="display:inline-block;"><?php  echo (isset($agentdata))?$agentdata->agentName:'Welcome!';?></p>
      </div>
    </div>
      <ul class="sidebar-menu">
       <li>
        <a title="My home" href="<?php echo base_url ('index.php/LoginController/viewHomePage'); ?>">
          <i class="fa fa-calendar"></i> <span>Home Page</span>
         </a>
       </li>
       <li>
        <a title="My agent" href="<?php echo base_url ('index.php/AgentController/viewCustomer'); ?>">
          <i class="fa fa-calendar"></i> <span>Customer Details</span>
         </a>
       </li>
       <li>
        <a title="My filter" href="<?php echo base_url ('index.php/AgentController/viewFilter'); ?>">
          <i class="fa fa-calendar"></i> <span>Filter Details</span>
         </a>
       </li>
        <li>
            <a title="Upload Photos" href="<?php echo base_url ('index.php/AgentController/newWork'); ?>">
                <i class="fa fa-calendar"></i> <span>New Work</span>
            </a>
        </li>
       <li>
         <a title="My account" href="<?php echo base_url ('index.php/AgentController/viewAgent'); ?>">
          <i class="fa fa-calendar"></i> <span>My Account</span>
        </a>
       </li>
       <li>
         <a title="My account" href="<?php echo base_url ('index.php/AgentController/viewInquiries'); ?>">
          <i class="fa fa-calendar"></i> <span>All Inquiries/ Work</span>
        </a>
       </li>
       <!-- <li>
        <a title="Inquiry" href="<?php echo base_url ('index.php/AgentController/viewContact'); ?>">
          <i class="fa fa-calendar"></i> <span>Contact Us</span>
         </a>
       </li> -->

</ul>
</section>
<!-- /.sidebar -->
</aside>

