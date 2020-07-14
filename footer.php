<!DOCTYPE html>
<html>
    <head>
        <title>Furnishing Stores</title>
        <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" type="text/css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .modal-content close{
                padding-right: 30%;
                margin-right: 10%;
            }
        </style>
    </head>
    <body>
        <footer>
           
            <div class="container">
                <div class="navbar-footer">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
               <div class="row" style="text-align: center">
            <div class="col-lg-4">
                <ul>
                    <li><h3>Information</h3></li>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>
            
            <div class="col-lg-4">
                <ul>
                    <li><h3>MY Account</h3></li>
                    <li><a href="#" data-toggle="modal" data-target="#myModal"> Login</a></li>
                    <li><a href="signup.php">Signup</a>
                </ul>
            </div>
            <div class="col-lg-4">
                <ul>
                    <li><h3>Contact us</h3></li>
                    <li><h5>Contact +91 123 0000000</h5></li>
                </ul>
            </div>
    </div>    
         <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span></button><br>
                           <div class="modal-header">
                               
                                <h2 class="modal-title" id="exampleModalLabel">Login</h2>
                          </div>
                          <div class="modal-body">
                                     <form role="form" action="login_submit.php" method="POST">
                                    <div class="form-group">
                                        <input type="email" class="form-control"  placeholder="Email" name="e-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required = "true">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                                    <?php if(isset($_GET['error'])){
                                               echo $_GET['error'];
                                    } ?>
                                </form><br/>
                            </div>
                        <div class="modal-footer" style="text-align:left">
                              <p><h4>Don't have an account? <a href="signup.php">  Register</a></h4></p>   
                     </div>
                </div>
            </div>
                </div>
        
                    </div>    
              
          
        </footer>
      
    </body>
</html>

        
            
