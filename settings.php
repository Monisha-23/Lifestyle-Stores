<?php
	require 'includes/common.php';
	// check  if logged in
	if(!isset($_SESSION["email"])){
		header("location: index.php");
	}
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <title>F&S stores | settings</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
         footer{
              padding: 10px 0;
              background-color: #101010;
              color:#9d9d9d;
              bottom: 0;
              width: 100%;
              position:absolute;
           }
    </style>
    </head>
    <body>
     <?php
     require 'includes/header.php';
     ?>
        
        <center>
       <div class="container" style="max-width:500px;max-height:700px;margin-left:auto;margin-right:auto;margin-top:75px;">
            <div class="row text-left row-fluid">
                <h2>Change Password</h2><br>
                <form name="settings" action="settings_script.php" method="POST" >
                    <div class="form-group">
                        <input name="old Password" placeholder="Old Password" type="text" class="form-control input-offset" required="true"><br>
                    </div>
                    <div class="form-group">
                    <input name="password" placeholder="New Password" type="text" class="form-control input-offset" required="true"><br>
                    </div>
                    <div class="form-group">
                    <input name="password1" placeholder="Re-Type New Password" type="text" class="form-control input-offset" required="true"><br>
                    </div>
                    <button type="submit" value="Login" class="btn btn-primary btn-md">Change</button>
                      <?php
                      if(isset($_GET['error'])){
                        echo "<br><br><b class='red'>" . $_GET['error'] . "</b>";
                      }
                        ?>
                </form>
            </div>
       </div>
        </center>
  
           
        
        <?php 
     require 'includes/footer.php';
     ?>
    </body>
</html>

