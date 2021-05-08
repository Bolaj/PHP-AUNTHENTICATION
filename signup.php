  <?php include('./controllers/register.php') ?>
  <?php require_once "header.php" ?>
  <div class="app">
    <div class="vertical-center">
        <div class="inner-block">
          <form action="" method="post">
            <h3>Register</h3>
            <?php echo $success_msg; ?>
            <?php echo $email_exist; ?>
            <?php echo $email_verify_err; ?>
            <?php echo $email_verify_success; ?>

            <div class="form-group">
              <label>First Name</label>
              <input type="text" class="form-control" name="firstname" id="firstname">
              <?php echo $fNameEmptyErr; ?>
              <?php echo $f_NameErr; ?>
            </div>
            <div class="form-group">
              <label>Last Name</label>
              <input type="text" class="form-control" name="lastname" id="lastname">
              <?php echo $lNameEmptyErr; ?>
              <?php echo $l_NameErr; ?>

            </div>
            <div class="form-group">
              <label>Email</label>
              <input type="email" class="form-control" name="email" id="email">
              <?php echo $_emailErr; ?>
              <?php echo $emailEmptyErr; ?>

            </div>
            <div class="form-group">
              <label>Phone Number</label>
              <input type="number" class="form-control" name="mobilenumber" id="mobilenumber">
              <?php echo $_mobileErr; ?>
              <?php echo $mobileEmptyErr; ?>

            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" name="password" id="password">
              <?php echo $_passwordErr; ?>
              <?php echo $passwordEmptyErr; ?>
              
            </div>
            <br>
            <button class="btn btn-outline-primary" name="submit" id="submit">Sign Up</button>
            Already have an account?<a href="login.php">Login</a>
          </form>
        </div>
    </div>
  </div>
<?php require_once "footer.php" ?>