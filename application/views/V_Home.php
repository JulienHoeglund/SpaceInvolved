<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link rel="stylesheet" href="css/custom.css">
  <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet"> 
  <title>SpaceInvolved</title>
</head>
<body>
  <div class="container">
    <div class="navBar">
      <div class="text-center">
        <h1 id="titleText">SpaceInvolved</h1>
      </div>
      <hr>
      <div class="col-md-12 text-center">
        <h4 id="subtitle">- The last frontier. With ambition -  </h4>
      </div>
    </div>
    <div class="row d-flex justify-content-center formstyle">
      <div class="col-md-4 reg-login">
        <form action="" method="post"">
          <div></div>
          <h3 class="text-center">Register</h3>
          <div class="form-group">
            <?php 
            echo form_error('username'); ?>
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" aria-describedby="username"  value="<?php echo set_value('username'); ?>">
          </div>
          <?php echo form_error('email'); ?>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp"  value="<?php echo set_value('email'); ?>">
          </div>
          <div class="form-group">
            <?php echo form_error('password'); ?>
            <label for="password">Password</label>
            <input type="password" class="form-control" name="password"  value="<?php echo set_value('password'); ?>">
          </div>
          <div class="form-group">
            <?php echo form_error('passconf'); ?>
            <label for="passconf">Confirm password</label>
            <input type="password" class="form-control" name="passconf" value="<?php echo set_value('passconf'); ?>">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <div class="col-sm-4"></div>  
      <div class="col-sm-4 reg-login">
        <h3 class="text-center">Login</h3>
        <form action="index.php/Welcome/login" method="post" class="formstyle">
          <div class="form-group">
            <?php echo form_error('logusername'); ?>
            <label for="logusername">Username</label>
            <input type="text" class="form-control" name="logusername" aria-describedby="username" value="<?php echo set_value('username'); ?>">
          </div>
          <div class="form-group">
            <?php echo form_error('logpassword'); ?>
            <label for="logpassword">Password</label>
            <input type="password" class="form-control" name="logpassword" value="<?php echo set_value('password'); ?>">
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary text-center">Submit</button>
          </div>
        </form>
      </div>
      <div class="col-md-12 text-center fixed-bottom">
        <h4 id="disclaimer-title">- Disclaimer -</h4>
        <p>
          This website is a student project.
        </p>
      </div>
    </div>
  </div> 
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
