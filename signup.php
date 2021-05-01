<?php
  session_start();
  include("connection.php");
  include("function.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
  {
    //if something was posted..
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    if(!empty($email) && !empty($username) && !emtpy($password) && !is_numeric($username))
    {
      //save to db
      $query = "insert into users (email, username, password) values ('$email', $username','$password')";

      mysqli_query($con,$query);

      header("Location:login.php");
    }
    else{
      echo "Please, Enter Valid Information";
    }
  }

?>
<?php include 'header.php';?>
      <div class="containter">
          <div class="container col-md-12">
              <div class="row">
                  <div class="col-md-4">
                  <div class="box">
                        <legend><h4>Please, Fill in Your Details</h4></legend>
                      <form method="POST">
                          <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputUsername1" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="exampleInputUsername1">
                            
                          </div>
                          <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Your Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" aria-describedby="passwordHelp">
                            <div id="passwordHelp" class="form-text">We'll never share your password with anyone else.</div>
                          </div>
                          <button type="submit" class="btn btn-primary btn-sm">Sign Up</button>
                          
                          <a href="login.php">Click to Login</a>
                        </form>
                      </div>
                  </div>
              </div>
          </div>

      </div>

      <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    
    
    <script src="js/bootstrap.min.js"></script>
</body>
</html>