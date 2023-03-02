<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link rel="stylesheet" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>">
  <script src="<?php echo base_url().'assets/js/jquery-3.6.0.min.js';?>"></script>
  <script src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
  <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="<?php echo base_url('/assets/css/profile.css');?>">
</head>

<body>
  <div class="wrapper mt-sm-5">
    <?php
        if (!empty($this->session->flashdata('success'))) {
          echo "<div class='alert alert-success m-3 mx-auto'>".$this->session->flashdata('success')."</div>";
        }
        ?>
    <?php
        if (!empty($this->session->flashdata('msg'))) {
          echo "<div class='alert alert-danger m-3 mx-auto'>".$this->session->flashdata('msg')."</div>";
        }
        ?>
    <h4 class="pb-4 border-bottom text-center">Login To Your Account</h4>
    <form action="<?php echo base_url().'login/authenticate' ;?>" name="loginform" id="loginform" method="POST">
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" class="form-control bg-light" name="username" id="username" placeholder="Username">
        <span></span>
      </div>
      <?php echo form_error('username'); ?>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control bg-light" name="password" id="password" placeholder="Password">
        <span></span>
      </div>
      <?php echo form_error('password'); ?>
      <div class="py-3 pb-4 border-bottom">
        <button type="submit" class="btn btn-success mr-3">Login</button>
        <a href="<?php echo base_url().'singup/index' ?>" class="btn btn-danger">Register</a>
        <a href="<?php echo base_url().'admin/login' ?> " class="btn btn-info">Admin Login</a>
        <a href="<?php echo base_url().'home' ?> " class="btn btn-warning">Home Button</a>
      </div>
    </form>
  </div>

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>