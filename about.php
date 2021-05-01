<?php
session_start();
include("connection.php");
include("function.php");
$user_data = check_login($con);
?>
<?php include 'header.php';?>
      <div class="containter">
          <div class="container col-lg-12">
              <div class="row">
                  <div class="ab col-lg-8">
                      <div>
                        <h4>About MollazDeliveryServices</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                            Fugiat dolore cum provident nobis natus quia optio, 
                            accusantium quidem iste aliquam repellat harum, 
                            ducimus ab hic animi quod doloribus pariatur eos.
                        </p>
                      </div>
                      
                  </div>
                  <div class="col-lg-4">
                    
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