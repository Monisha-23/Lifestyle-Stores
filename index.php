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
<html>
    <head>
        <head>
        <title>F&S stores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link ref="stylesheet" href="stylesheet.css" type="text/css"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>

          #banner_image{
            padding-top: 75px;
            padding-bottom: 250px;
            text-align: center;
            color: rgb(13, 13, 13);
            background: url(img/main.jpg) no-repeat center center;
            background-size: cover;
            padding-left: 300px;
            margin:auto;
            widht:500px;
            
           }
           #inner_banner_image{
              padding-top: 12%; 
              width:90%;
              margin-bottom: 500px;
              padding-right: 250px;
              margin:auto; 
           }
           #banner_content {
               position: relative;
               padding-top: 6%;
               padding-bottom: 6%;
               margin-top: 12%;
               margin-bottom: 12%;
               background-color:rgba(230, 230, 230,0.5);
               max-width: 660px;    
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
     <body style="padding-top: 50px;">
        <?php
        require 'includes/header.php';
        ?>
        
        <div id="banner_image">
                <div id="inner_banner_image">
                    <center>
                    <div id="banner_content">
                        <h1>Furnishing Stores</h1><br>
                        <h3>Design The Way You Desire</h3><br>
                        <a href="products.php" class="btn btn-danger">Shop Now</a>
                    </div>
                    </center>
                </div>
            </div>
        
        <div class="container">
        <div class="row text-center">
            <div class="col-lg-4">
              <a href="products.php#Furniture">
                <div class="thumbnail">
                    <img src="img/sofa.jpg" alt="furniture">
                    <div class="caption">
                        <p><h3>Furniture</h3></p>
                    </div>
                </div>
              </a>
            </div>
                
       
            <div class="col-lg-4">
                <a href="products.php#Interior decoratives">
                <div class="thumbnail">
                    <img src="img/interior.jpg" alt="interior">
                    <div class="caption">
                        <p><h3>Interior decoratives</h3></p>
                    </div>
                </div>
                </a>
            </div>
        
        
        
            <div class="col-lg-4">
                <a href="products.php#Exterior decoratives">
                <div class="thumbnail">
                    <img src="img/exterior.jpg" alt="furniture">
                    <div class="caption">
                        <p><h3>Exterior decoratives</h3></p>
                    </div>
                </div>
                </a>
             </div>
        </div>
        </div>
        <?php
        require 'includes/footer.php';
        ?>
    </body>
</html>
