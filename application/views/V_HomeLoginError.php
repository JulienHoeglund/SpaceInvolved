<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>SpaceInvolved</title>
  </head>
  <body>
    <h1>SpaceInvolved</h1>
    <button type="button" class="btn btn-primary">Register</button>
    <form action="" method="post">
      <div class="form-group">
        <?php echo form_error('username'); ?>
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" aria-describedby="username" placeholder="username" value="<?php echo set_value('username'); ?>">
      </div>
      <?php echo form_error('email'); ?>
      <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="<?php echo set_value('email'); ?>">
      </div>
      <div class="form-group">
        <?php echo form_error('password'); ?>
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
      </div>
      <div class="form-group">
        <?php echo form_error('passconf'); ?>
        <label for="passconf">Confirm password</label>
        <input type="password" class="form-control" name="passconf" placeholder="Password" value="<?php echo set_value('passconf'); ?>">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    Wrong username or password, please try again.
    <form action="index.php/Welcome/login" method="post">
      <div class="form-group">
        <?php echo form_error('username'); ?>
        <label for="username">Username</label>
        <input type="text" class="form-control" name="username" aria-describedby="username" placeholder="username" value="<?php echo set_value('username'); ?>">
      </div>
      <div class="form-group">
        <?php echo form_error('password'); ?>
        <label for="password">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo set_value('password'); ?>">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
