
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Batapola Hardware Management System</title>
  <link rel="shortcut icon" href="assets/images/favicon.ico"/>

  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

  <![endif]-->
    <style>
        /* ---- reset ---- */ body{ margin:0; font:normal 75% Arial, Helvetica, sans-serif; } canvas{ display: block; vertical-align: bottom; } /* ---- particles.js container ---- */ #particles-js{ position:absolute; width: 100%; height: 100%; background-color: maroon; background-image: url(""); background-repeat: no-repeat; background-size: cover; background-position: 50% 50%; } /* ---- stats.js ---- */
    </style>
</head>

<body class="hold-transition login-page " style="background-color: aliceblue;">
<!-- particles.js container --> <div id="particles-js"></div> <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script> <!-- stats.js lib --> <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
<?php
if (!empty($_SESSION['error'])) {
    echo "<div class='alert alert-info' style='margin-bottom: 0;'><strong>Warning! </strong> ".$_SESSION['error']."</div>";
    unset($_SESSION['error']);
}

if (!empty($_SESSION['alert'])) {
    echo "<div class='alert alert-info' style='margin-bottom: 0;'><strong>Alert! </strong> ".$_SESSION['alert']."</div>";
    unset($_SESSION['alert']);
}
?>
  <?php $errors = "";?>
<div class="login-box" style="background: black;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);margin-top: 0;">
    <div class="login-logo" >
        <a href="" style="color:white;text-align: left;"><b>Batapola Group</b><br><span style="font-size:20px;">Hardware Management System</span></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body" style="position:relative;background: none;">
      <div class="login-logo" >
          <a href="" style="color:white;text-align: left;"><b>Batapola Group</b><br><span style="font-size:20px;">Hardware Management System</span></a>
      </div>
    <p class="login-box-msg" id="message" style="color:blanchedalmond;font-size:15px ;"><?php echo $errors ?></p>

    <form action="<?php echo base_url(); ?>index.php/LoginController/login" method="post">

      <div class="form-group has-feedback">
          <input type="text" style="cursor: pointer;" class="form-control" placeholder="UserName" name="username" onfocus="this.value = '';" onclick="setMess()" autocomplete="off">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
          <input type="password" style="cursor: pointer;" class="form-control" placeholder="Password" onfocus="this.value = '';" name="password" autocomplete="off">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" id="signin"  name="submit" class="btn btn-primary btn-block btn-flat" style="background-color: black;border: none;">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
<!--    <a href="#">I forgot my password</a><br>-->
  </div>
  <!-- /.login-box-body -->
</div>



<script>
    particlesJS("particles-js", {"particles":{"number":{"value":80,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
</script>
<!-- /.login-box -->
<!-- jQuery 2.2.0 -->
<script src="assets/plugins/jQuery/jQuery-2.2.0.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="assets/plugins/iCheck/icheck.min.js"></script>
<script>
    $(function () {
        $('input').iCheck({
            checkboxClass: 'icheckbox_square-blue',
            radioClass: 'iradio_square-blue',
            increaseArea: '20%' // optional
        });
    });

    function setMess(){
        document.getElementById('message').innerHTML="Sign in to continue";
    }
</script>

</body>
</html>
