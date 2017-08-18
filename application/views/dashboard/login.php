<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>UNCIA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/css/bootstrap.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/css/style.default.css" id="theme-stylesheet">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dashboard/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url() ?>assets/images/logo.jpg">
    <!-- Font Awesome CDN-->
    <!-- you can replace it by local Font Awesome-->
    <script src="https://use.fontawesome.com/99347ac47f.js"></script>
    <!-- Font Icons CSS-->
    <link rel="stylesheet" href="https://file.myfontastic.com/da58YPMQ7U5HY8Rb6UxkNf/icons.css">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="page login-page">
      <div class="container">
        <div class="form-outer text-center d-flex align-items-center">
          <div class="form-inner">
            <div class="logo text-uppercase"><span>Un</span><strong class="text-primary">CIA</strong></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
           
            	<?php echo form_open('User/signin');?>
               <div class="form-group">
                  <label for="login-username" class="label-custom">Usuario</label>
              	 <?php echo form_input(['name' => 'username', 'placeholder' => '','class' => 'textbox']);?>
               </div>
               <div class="form-group">
                  <label for="login-password" class="label-custom">Contraseña</label>
                	<?php echo form_password(['name' => 'password', 'placeholder' => '','class' => 'textbox']);?>
               </div>
                
              <?php echo form_submit(['name' => 'submit', 'value' => 'INICIAR SESION','class' => 'btn btn-primary']);?>
             
              <!-- This should be submit button but I replaced it with <a> for demo purposes-->
          
              <?php echo form_close();?>
            <a href="#" class="forgot-pass">Forgot Password?</a>
          </div>
          <div class="copyrights text-center">
            <p>Design by <a href="https://bootstrapious.com" class="external">SmayDif</a></p>
            <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript files-->
    <script language="JavaScript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dashboard/js/tether.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dashboard/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dashboard/js/jquery.cookie.js"> </script>
    <script src="<?php echo base_url() ?>assets/dashboard/js/grasp_mobile_progress_circle-1.0.0.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dashboard/js/jquery.nicescroll.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dashboard/js/jquery.validate.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dashboard/js/front.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>