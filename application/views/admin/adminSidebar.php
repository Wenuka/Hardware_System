<?php ?>

<aside class="main-sidebar" style="" >
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar" style="">
    <!-- Sidebar user panel -->
    <div class="user-panel" style="margin-bottom:5%;height:auto;text-align:center">
      <div class= "image" style="margin-bottom:5%;text-align:center;margin-top:10%;">
        <img src="<?php echo (isset($admindata))?'../../'.$admindata->image_path:'../../assets/images/admin/avatar.png';?>"  style='border-radius: 100%;max-height:105px;max-width:105px;' class="img-circle" alt="Admin Image">
      </div>
      <div class="info" style="left:0;position:relative;padding:0;">
        <p style="display:inline-block;"><?php  echo (isset($admindata))?$admindata->name:'Welcome!';?></p>
      </div>
    </div>
      <ul class="sidebar-menu">
       <li>
        <a title="My home" href="<?php echo base_url ('index.php/LoginController/viewHomePage'); ?>">
          <i class="fa fa-calendar"></i> <span>Home Page</span>
         </a>
       </li>
       <li>
        <a title="My customers" href="<?php echo base_url ('index.php/AdminController/viewCustomer'); ?>">
          <i class="fa fa-calendar"></i> <span>All Customers</span>
         </a>
       </li>
       <li>
        <a title="My filter" href="<?php echo base_url ('index.php/AdminController/viewFilter'); ?>">
          <i class="fa fa-calendar"></i> <span>All Filters </span>
         </a>
       </li>
       <li>
        <a title="My filter" href="<?php echo base_url ('index.php/AdminController/viewAgents'); ?>">
          <i class="fa fa-calendar"></i> <span>All Agents </span>
         </a>
       </li>
       <!--  <li>
            <a title="Upload Photos" href="<?php echo base_url ('index.php/AdminController/newWork'); ?>">
                <i class="fa fa-calendar"></i> <span>New Work</span>
            </a>
        </li>-->
       <li>
         <a title="My account" href="<?php echo base_url ('index.php/AdminController/viewAdmin'); ?>">
          <i class="fa fa-calendar"></i> <span>My Account</span>
        </a>
       </li>
       <li>
         <a title="Inquiries" href="<?php echo base_url ('index.php/AdminController/viewInquiries'); ?>">
          <i class="fa fa-calendar"></i> <span>All Inquiries</span>
        </a>
       </li> 
       <li>
         <a title="My Works" href="<?php echo base_url ('index.php/AdminController/viewWork'); ?>">
          <i class="fa fa-calendar"></i> <span>All Works</span>
        </a>
       </li> 
       <li>
         <a title="My parts" href="<?php echo base_url ('index.php/AdminController/allpartscodes'); ?>">
          <i class="fa fa-calendar"></i> <span>All Parts and Codes</span>
        </a>
       </li> 
       <li>
         <a title="My Delete" href="<?php echo base_url ('index.php/AdminController/deleteEntries'); ?>">
          <i class="fa fa-calendar"></i> <span>Add/ Delete Entries</span>
        </a>
       </li> 
       <!-- <li>
        <a title="Inquiry" href="<?php echo base_url ('index.php/AdminController/viewContact'); ?>">
          <i class="fa fa-calendar"></i> <span>Contact Us</span>
         </a>
       </li> -->

</ul>
</section>
<!-- /.sidebar -->
</aside>

