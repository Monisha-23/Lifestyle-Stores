<?php
require 'includes/common.php';
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
        <title>F&S Stores | Success</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link ref="stylesheet" href="stylesheet.css" type="text/css"/> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            footer{
                padding: 10px 0;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%; 
               position: absolute;
            }
        </style>
    <body>
        <?php
        require'includes/header.php'?>
        
        <div class="container">
            <div class="jumbotron" style="margin-top:10%">
                <h2><span class="glyphicon glyphicon-thumbs-up">    Your Item As Been Successfully Ordered...!!</span></h2>
            </div><br>
            <br>
            <center>
             <h3>Thank for shopping in <b>F&S</b> online shoppee. Yor order will be delivered shortly.</h3><br><hr>
             <h3><a href="products.php" class="active">Click here</a> to order some more items.</h3>
            </center>
        </div>
      <?php
        require 'includes/footer.php';
        ?>
    </body>
</html>
