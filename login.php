<?php include('./controllers/loginp.php'); ?>

<?php require_once "header.php" ?>
  <div class="app">
    <div class="vertical-center">
        <div class="inner-block">
          <form action="" method="post">
            <h3>Login</h3>
                <?php echo $accountNotExistErr; ?>
                <?php echo $emailPwdErr; ?>
                <?php echo $verificationRequiredErr; ?>
                <?php echo $email_empty_err; ?>
                <?php echo $pass_empty_err; ?>

            <div class="form-group">
              <label>Enter Your Email</label>
              <input type="email" class="form-control" name="email_signin" id="email_signin">
            </div>
            <div class="form-group">
              <label>Enter Password</label>
              <input type="password" class="form-control" name="password_signin" id="password_signin">
            </div>
            <br>
            <button class="btn btn-outline-primary" type="submit" name="login" id="sign_in">Login</button>
            Don't have an account?<a href="signup.php">Register</a>
          </form>
        </div>
    </div>
  </div>
<?php require_once "footer.php" ?>