<?php ?>

<aside class="main-sidebar" style="" >
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" style="">
    <!-- Sidebar user panel -->
    <div class="user-panel" style="margin-bottom:5%;height:auto;text-align:center">
      <div class= "image" style="margin-bottom:5%;text-align:center;margin-top:10%;">
        <img src="<?php echo (isset($customerdata))?'../../'.$customerdata->image_path:'../../assets/images/customer/avatar.png';?>"  style='border-radius: 100%;max-height:105px;max-width:105px;' class="img-circle" alt="User Image">
      </div>
      <div class="info" style="left:0;position:relative;padding:0;">
        <p style="display:inline-block;"><?php echo (isset($customerdata))?$customerdata->name:'Welcome!';?></p>
      </div>
    </div>
      <ul class="sidebar-menu">
       <li>
        <a title="My home" href="<?php echo base_url ('index.php/LoginController/viewHomePage'); ?>">
          <i class="fa fa-calendar"></i> <span>Home Page</span>
         </a>
       </li>
       <li>
         <a title="My account" href="<?php echo base_url ('index.php/FilterController/viewCustomer'); ?>">
          <i class="fa fa-calendar"></i> <span>My Account</span>
        </a>
       </li>
       <li>
        <a title="My filter" href="<?php echo base_url ('index.php/FilterController/viewFilter'); ?>">
          <i class="fa fa-calendar"></i> <span>Filter Details</span>
         </a>
       </li>
       <li>
        <a title="My agent" href="<?php echo base_url ('index.php/FilterController/viewAgent'); ?>">
          <i class="fa fa-calendar"></i> <span>Agent Details</span>
         </a>
       </li>
       <!-- <li>
        <a title="Inquiry" href="<?php echo base_url ('index.php/FilterController/viewContact'); ?>">
          <i class="fa fa-calendar"></i> <span>Contact Us</span>
         </a>
       </li> -->
</ul>
</section>
<!-- /.sidebar -->
</aside>

