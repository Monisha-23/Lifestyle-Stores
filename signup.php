<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="en">
    <head>
        <title>F&S Stores | signup</title>
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        #banner_image{
            padding-top: 75px;
            padding-bottom: 300px;
            text-align: center;
            color: rgb(13, 13, 13);
            background: url(img/main.jpg) no-repeat center center;
            background-size: cover;
            padding-left: 300px;
            margin-top: auto;
            widht:500px;
           }
           #inner_banner_image{
              padding-top: 12%; 
              width:80%; 
             margin: auto;
           }
           #banner_content {
               position: relative;
               padding-top: 6%;
               padding-bottom: 6%;
               margin-top: 12%;
               margin-bottom: 12%;
               background-color:rgba(230, 230, 230,0.7);
               max-width: 660px; 
               margin-bottom: 110px;
           }
         footer{
              padding: 10px 0;
              background-color: #101010;
              color:#9d9d9d;
              bottom: 0;
              width: 100%;
              
           }
    </style>  
    </head>
    <body>
  <?php       
  include 'includes/header.php';
  ?>
        <div id="banner_image">
                <div id="inner_banner_image">
                    <div id="banner_content">
                       <center>
        <div class="container" style="max-width:500px;max-height:700px;margin-left:auto;margin-right:auto;margin-top:75px;">
       
       <div class="row">
           
                <h2>SIGN UP</h2><br>
                <form name="signup" action="signup_script.php"  method="POST">
                    <div class="form-group">
                       <input name="name" placeholder="Name" type="text" class="form-control input-offset" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$"required="true"><br>
                    </div>
                    <div class="form-group">
                       <input name="email" placeholder="Email" type="email" class="form-control input-offset" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required="true">
                        <?php if(isset($_GET['m1'])){
                                               echo $_GET['m1'];
                                    } ?><br>
                    </div>
                    <div class="form-group">
                        <input name="password" placeholder="Password" type="password" class="form-control input-offset"  pattern=".{6,}" required="true"><br>
                    </div>
                    <div class="form-group">
                            <input name="contact" placeholder="Contact" type="text" size="10" class="form-control input-offset" required="true"> <?php if(isset($_GET['m2'])){
                                               echo $_GET['m2'];
                                    } ?><br>
                    </div>
                    <div class="form-group">
                       <input name="city" placeholder="City" type="text" class="form-control input-offset" required="true"><br>
                    </div>
                    <div class="form-group">
                        <input name="address" placeholder="Address" type="text" class="form-control input-offset" required="true"><br>
                    </div>
                    <button name="submit" type="submit" value="submit" class="btn btn-primary btn-md">Sign up</button>
                </form> <br><br>
            </div>
           </div>
      <div class="panel-footer">
          Already have an account ? Click <a href="index.php">here</a>.
				</div>
    </center>
</div>
</div>
</div>
                    
               
        
        
        
    
    
        <?php
  require 'includes/footer.php';
  ?>
    </body>
</html>
