<!DOCTYPE html>
<html>
  <head>
    <title>Admin Login</title>
    <!-- Bootstrap -->
    <link href="<?php echo base_url(); ?>/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
    <link href="<?php echo base_url(); ?>/assets/styles.css" rel="stylesheet" media="screen">
     <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="<?php echo base_url(); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
  </head>
  <body id="login">
    <div class="container">

      <form class="form-signin" action="<?php echo site_url('login/process'); ?>" method="post">
        <h2 class="form-signin-heading">SUVI</h2>
        
        <?php if($notif):?>
        <div class="alert alert-block alert-error">
          <button type="button" class="close" data-dismiss="alert">&times;</button>
          <h4>ERROR!</h4>
          <?php echo $notif;?>
        </div>
        <?php endif; ?>
        
        <input type="text" name="username"
          class="input-block-level" placeholder="Username" value="<?php if(isset($username)) echo $username; ?>">
        <input type="password" name="password" class="input-block-level" placeholder="Password">
        <!--<label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>-->
        <button class="btn btn-large btn-primary" type="submit">Log in</button>
      </form>
    </div> <!-- /container -->
    
    <script src="<?php echo base_url(); ?>/vendors/jquery-1.9.1.min.js"></script>
    <script src="<?php echo base_url(); ?>/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>