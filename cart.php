<?php
    require 'includes/common.php';
    // check if logged in
    if(!isset($_SESSION["email"])){
        header("location:index.php");
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
        <title>F&s Stores | Cart</title>
        <!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to fontawesome CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="index.css">
                
    </head>
    <style>
        footer{
              padding: 10px 0;
              background-color: #101010;
              color:#9d9d9d;
              bottom: 0;
              width:100%;
             position: absolute;
           }
    
    </style>
    <body>
        <?php
            require 'includes/header.php';
          ?>
        <div class="container" style="margin-top:100px">
           <?php
            // get the products purchased by the user
            $user_id = $_SESSION["user_id"];
            $query = "SELECT p.id, p.name, p.cost FROM products p INNER JOIN users_items up ON up.item_id = p.id WHERE up.user_id = '$user_id' AND up.status = 'Added to cart'";

            $result = mysqli_query($con, $query) or die(mysqli_error($con));

            if(mysqli_num_rows($result) == 0){
                echo '<h4 class="container panel-margin">Add products to cart first. Goto <a href="products.php">Products</a> page.</h4>';
            }else{
                $total = 0;
        ?>
        </div>
        <div class="container panel-margin">
            <table class="table table-hover" style="margin-top:100px">
                <tr>
                    <th>Item Number</th>
                    <th>Item Name</th>
                    <th>Price</th>
                    <th></th>
                </tr>
                <?php while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo "Rs" . $row["id"] ?></td>
                    <td><?php echo "Rs" . $row["name"] ?></td>
                    <td><?php $total += $row["cost"]; echo "Rs" . $row["cost"] ?></td>
                    <td><a href='cart-remove.php?id=<?php echo $row["id"];?> '> Remove</a></td>
                </tr>
                <?php
                    }
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total: <i class="fa fa-rupee"></i> <?php echo $total; ?></td>
                    <td><a href="success.php" class="btn btn-primary">Confirm Order</a></td>
                </tr>
            </table>
        </div>
        
        <?php
            }
            require 'includes/footer.php';
        ?>
    </body>
</html>