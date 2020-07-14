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
        <title>F&S Stores | About</title>
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <!--jQuery library--> 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!--Latest compiled and minified JavaScript--> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <link ref="stylesheet" href="stylesheet.css" type="text/css"/> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        #content{
            max-widht: 960px;
            margin: 0 auto;
            background: #f9f9f9;
            font-size: 24px;
            padding: 25px;
        }
        .parallax {
            background: url('img/main.jpg') no-repeat center;
            background-size: cover;
            background-attachment: fixed;
            height: 500px;
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
        require 'includes/header.php';
        ?>
        <br>
    
        <div id="content">
            <h1 style="text-align:center; color:#331a00"><b>F&S Stores</b></h1>
            <div class="row">
                <div class="col-lg-6" style="text-align: center">
                    <h3 style="color:rgb(39, 94, 79)">Decorate And Design</h3>
                </div>
                <div class="col-lg-6" style="text-align: center">
                    <h3 style="color:rgb(39, 94, 79)">Your World Of Living</h3>
                </div>
            </div>  
            <div class="parallax"> 
            </div>
            <div class="row">
                    <div class="col-lg-5">
                        <h2>Get to know about us</h2>
                        <h4> F&S stores is an Indian Furniture,exterior and interior desinging.<br><br>
                             F&S stores's vision is to create India's most realiable and frictionless 
                             commerce ecosystem that creates life-changing experience for buyers and sellers.<br><br><br>
                             We are a huge family of <br><br>
                             <ul>
                                 <li><span class="glyphicon glyphicon-home">  Orders are delivered to more than 6000 cites and towns </span></li><br><br>
                                 <li><span class="glyphicon glyphicon-map-marker"> 3 lakhs sellers from over all india</span></li><br><br>
                                 <li><span class="glyphicon glyphicon-gift">  More than 1 million furnishing products for your living</span></li><br><br>
                                 <li><span class="glyphicon glyphicon-thumbs-up">  10 lakhs daily page vistes over all the world </span></li><br><br>
                                 <li><span class="glyphicon glyphicon-credit-card">  Technology that enables 8 million shipments/month</span></li><br><br>
                             </ul>
                        </h4>
                    </div>
                    <div class="col-lg-4">
                        <h2>History of F&S Stores</h2>
                        <ul>
                            <li> 2010 - Gets launched as the investors</li><br><br>
                            <li> 2010 - Intitaes marketpalce as 10 to 12 come on board to sell their wares</li><br><br>
                            <li>2012 - Closes the year with 1000 sellers on board selling their products</li><br><br>
                            <li>2013 - Launches new trust development schemes and services for protection</li><br><br>
                            <li>2014 - Hits a milstone with 20k+ seller on board now</li><br><br>
                            <li>2015 - Debuts in Tv commerce with launch of F&S TV shop</li><br><br>
                            <li>2016 - F&S unevils a new brand identity with unbox Zindagi</li><br><br>
                        </ul>
                    </div>
                        <div class="col-lg-3">
                            <h3>Opportunities</h3>
                            <h5><b>Available roles</b></h5>
                            
                                <ol>
                                <li>Jr/Sr web development<br>[Full Time Role + also available as a 6 moths Internship</li><br>
                                <li>Bussiness Apprentice[6 Month internship]</li><br>
                                <li>Manger at backend operations<br>[Full Time Role + also available as a 6 moths Internship</li>
                                </ol>
                            
                        </div> 
                    </div>
             <h2 style="text-align: center"><span class="glyphicon glyphicon-handshake"> And Our Journey Continuous .....</span></h2>
                </div>
        <br></div>
             
            <?php
            require 'includes/footer.php';
            ?>
        
    </body>
</html>
