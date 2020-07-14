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
        <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="index.php" class="navbar-brand"><b>F&S</b></a>
                </div>
                    <div class="collapse navbar-collapse" id="mynavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                if (isset($_SESSION['email'])) {
                    ?>
                    <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
                    <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> Settings</a></li>
                    <li><a href = "logout_script.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
                    ?>
                <?php }
                        else{
                    ?>
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a  data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        <li><a href="about.php"><span class="glyphicon glyphicon-tasks"></span> About Us</a></li>
                        <li><a href="contact.php"><span class="glyphicon glyphicon-phone"></span> Contact Us</a></li>
        
                        <?php
                        }
                        ?>
                         </ul>
                    </div>    
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
    </body>
</html>