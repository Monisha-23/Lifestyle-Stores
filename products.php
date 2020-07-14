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
        <title>Products</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            footer{
                padding: 10px 0;
                background-color: #101010;
                color:#9d9d9d;
                bottom: 0;
                width: 100%;

            }
        </style>
    </head>
    <body style="background-color:#cccccc">
        <?php
        require 'includes/header.php';
        require 'includes/check_if_added.php';
        ?>

        <div class="container" style="margin-top: 75px;">
            <div class="jumbotron">
                <h1>Welcome to Furnishing Stores</h1>
                <p> Explore your world . Decorate your living.</p>
            </div> 
        </div>   
        <hr>
        <div class="container">
            <h3>FURNITURE</h3>
            <div class="row text-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/sofa.jpg" alt="sofa">
                            <div choose="captions">
                                <h3>Office Sofa couch Leather Columbia 3 Seater</h3>
                                <p>Price:<i>Rs.18000</i></p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                        <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
          


                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/sofa-2.jpg" alt="sofa">
                            <div choose="captions">
                                <h3>Furny levize Fabric 3 Seater Sofa(grey)</h3>
                                <p>Price:<i>Rs.9800</i></p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                        <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-4 col-sm-6">
                        <div class="thumbnail">
                            <img src="img/sofa-3.jpg" alt="sofa">
                            <div choose="captions">
                                <h3>Woodcasa Urbanway 6 Seater LHS L Shape Sofa  Fabric </h3>
                                <p>Price:<i>Rs.26700</i></p>
                                <?php if (!isset($_SESSION['email'])) { ?>
                                    <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                    <?php
                                } else {
                                    //We have created a function to check whether this particular product is added to cart or not.
                                    if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                                        echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                    } else {
                                        ?>
                                        <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
        </div>

        <div class="container">
            <h3>INTERIOR DECORATIVES</h3>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/interior.jpg" alt="table">
                        <div choose="captions">
                            <h3>Divine Arts Sheesham Wood study Table</h3>
                            <p>Price:<i>Rs.11500</i></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/interior-2.jpg" alt="interior">
                        <div choose="captions">
                            <h3>Contemporary wooden chest</h3>
                            <p>Price:<i>Rs.15400</i></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/interior-4.jpg" alt="interior">
                        <div choose="captions">
                            <h3> Divine Wood Coffee Table</h3>
                            <p>Price:<i>Rs.13000</i></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="container">
            <h3>EXTERIOR DECORATIVES</h3>
            <div class="row text-center">
                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/exterior.jpg" alt="exterior">
                        <div choose="captions">
                            <h3>Outdoor Patio Hanging Chair  Egg Swing </h3>
                            <p>Price:<i>Rs.2200</i></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/exterior-2.jpg" alt="exterior">
                        <div choose="captions">
                            <h3>Wicker bar set with cusioned chairs </h3>
                            <p>Price:<i>Rs.26000</i></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(13)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=13" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="thumbnail">
                        <img src="img/exterior-5.jpg" alt="exterior">
                        <div choose="captions">
                            <h3>Cotton Ball and hangings String</h3>
                            <p>Price:<i>Rs.2900</i></p>
                            <?php if (!isset($_SESSION['email'])) { ?>
                                <p><a href="index.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            } else {
                                //We have created a function to check whether this particular product is added to cart or not.
                                if (check_if_added_to_cart(16)) { //This is same as if(check_if_added_to_cart != 0)
                                    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
                                } else {
                                    ?>
                                    <a href="cart-add.php?id=16" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            

                </div>
            

        
        <?php
        require 'includes/footer.php';
        ?>
    </body>
</html>
