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
        <title>Lifestyle stores</title>
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
                width:80%;
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
    <body>
        <?php
        require 'includes/header.php';
        ?>
        <br><br><br>
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <h2><b>LIVE SUPPORT</b></h2>
                    24 hours | 7 days a week | 365 days a year Live Techincal Support</p><br>
                    It is a long established fact that a reader will be distrected by the readable content of a page when looking at its layout.
                    The paint of using Lorem Ipsum is that it has a more-less normal distribution of letters.These are many variations of passages 
                    of Lorem Ipsum available, but the majority have suffered alternation in some form, by injected humour, or randomed weirds 
                    which don't look even slightly believeable.If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't 
                    anything embrassing hidden in the middle of the text.
                </div>
                <div class="col-lg-3">
                    <img src="img/service.jpg" alt="service">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-9">
                    <form action="contact.php" method="POST">
                        <div class="form-group">
                            <p class="text-warning"><h4>Contact Us</h4>
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" placeholder="name" required/><br>
                        </div>
                        <div class="form-group">
                        <label>email</label>
                        <input type="text" class="form-control" name="email"  placeholder="email" required/><br>
                      <div class="form-group">
                <label>Message</label>
                <textarea  type="text" class="form-control"name="text"  placeholder="message" required></textarea><br>
            <button type="submit" value="Login" name="btn_login" class="btn btn-primary">submit</button>
                    </form>
                </div>
                        </div>
                </div>
                    <div class="col-lg-3">
                        <h3>
                            Company Information
                        </h3>
                        500 Lorem Ipsum Dolor Sit,
                        22-56-2-9  Sitamet,Lorem,
                        India<br>   
                        Phone:(91)222 666 1029;<br>
                        Fax: (91) 000 00 00 0;<br>
                        Email:info@mycompany.com;<br>
                        Follow on:facebook as F&S Stores<br>
                                   Twitter as F&S Stores
                    </div>
                        </div>
            
            </div>
        </div>

    <?php
    require 'includes/footer.php';
    ?>
</body>
</html>
