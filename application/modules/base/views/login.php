<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Login Form</title>
  <link rel='stylesheet prefetch' href='<?php echo base_url()?>assets/base/css/bootstrap/bootstrap-3.0.2.min.css'>
  <link rel="stylesheet" href="<?php echo base_url()?>assets/base/css/style.css">
</head>
<body>
  <div class="wrapper">
    <?php 
    $class = array('class'=>'form-signin');
    echo form_open('base/login',$class); ?>
      <h2 class="form-signin-heading">Please login</h2>
      <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus=""/>
      <input type="password" class="form-control" name="password" placeholder="Password" required="" autofocus="" />
      <input type="submit" value="Sign In" class="btn btn-lg btn-primary btn-block" />
      <div class="remember-forgot">
        <div class="row">
          <div class="col-md-6">
            <div class="checkbox">
              <label>
                <input type="checkbox" />
                Remember Me
              </label>
            </div>
          </div>
          <div class="col-md-6 forgot-pass-content">
            <a href="javascript:void(0)" class="forgot-pass">Forgot Password</a>
          </div>
        </div>
      </div>
    <?php form_close(); ?>
  </div>
  <script type="text/javascript" src="<?php echo base_url()?>assets/base/js/jquery-1.12.4.min.js"></script>
  <script type="text/javascript">
  $(document).ready(function () {
    $('.forgot-pass').click(function(event) {
      $(".pr-wrap").toggleClass("show-pass-reset");
    }); 
    
    $('.pass-reset-submit').click(function(event) {
      $(".pr-wrap").removeClass("show-pass-reset");
    }); 
  });
  </script>
</body>
</html>
