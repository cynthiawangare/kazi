<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Mosaddek">
    <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <link rel="shortcut icon" href="<?php echo base_url();?>assets/back/img/favicon.png">

    <title>Kazi</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url();?>assets/back/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/front/css/bootstrap-reset.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url();?>assets/back/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>assets/back/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/back/css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="<?php echo base_url();?>assets/back/js/html5shiv.js"></script>
    <script src="<?php echo base_url();?>assets/back/js/respond.min.js"></script>
    <![endif]-->
</head>

  <body class="login-body">

    <div class="container">

      <form class="form-signin" action="<?php echo site_url('user/signin');?>" method="post">
        <h2 class="form-signin-heading">sign in now</h2>
        <div class="login-wrap">
  <?php 
$incorrect = $this->session->flashdata('incorrect');
 if($incorrect==1)
  {?>
<p  style="font-size: 13px; color: orange;">Wrong Username / Password. Try again !</p>
  <?php }
                             ?>

            <input type="text" class="form-control" name="username" placeholder="User ID" autofocus>
            <input type="password" class="form-control" placeholder="Password" name="password">


            <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                    <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                </span>
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Sign in</button>
            <p>or you can sign in via social network</p>
            <!--<div class="login-social-link">
                <a href="index.html" class="facebook">
                    <i class="icon-facebook"></i>
                    Facebook
                </a>
                <a href="index.html" class="google">
                    <i class="icon-google"></i>
                    Google
                </a>
            </div>-->
            <div class="registration">
                <br/><br/>Don't have an account yet?  <br/><br/>
                <a type="button" href="<?php echo site_url('user/registration');?>" style="color:white;" class="btn btn-lg btn-success btn-block">Employer</a>
                <a type="button" href="<?php echo site_url('user/registration2');?>" style="color:white;" class="btn btn-lg btn-warning btn-block">Worker</a>
            </div>

        </div>

          <!-- Modal -->
          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                          <h4 class="modal-title">Forgot Password ?</h4>
                      </div>
                      <div class="modal-body">
                          <p>Enter your e-mail address below to reset your password.</p>
                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                      </div>
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                          <button class="btn btn-success" type="button">Submit</button>
                      </div>
                  </div>
              </div>
          </div>
          <!-- modal -->

      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo base_url();?>assets/back/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/back/js/bootstrap.min.js"></script>


  </body>
</html>
