
<?php
    session_start();
    $database_name = "ocms";
    $con = mysqli_connect("localhost","root","",$database_name);

?>


<!doctype html>
<html>
<link rel="stylesheet" href="css 1/bootstrap.css" type="text/css">
<link rel="stylesheet" href="js 1/bootstrap.js" type="text/css">
<link rel="stylesheet" href="Mycss/my FYP.css" type="text/css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
<link rel="shortcut icon" href="image/NDS.png" >
<head>
<meta charset="utf-8">
<title>The Garage</title>
 <style>
       
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
        }
        table, th, tr{
            text-align: ;
        }
	 .td_col{
		 color: #CF9924;
		 text-align: center;
	 }
        .title2{
            text-align: center;
            color: #CF9924;
            
            padding: 2%;
        }
        h2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
</head>

<body background="image/2015_ford_mustang_convertible_18_1920x1080.jpg" class="respon-img">
<?php include 'Navbar.php'; ?>
<br><br><br><br><br><br><br><br><br><br>
<?php
    if (isset($_SESSION["cart"])){
		?>
<div class="container" style="width:65%; background: rgba(0,0,0,0.7);">
<div style="clear: both"></div>
       <br><br>
        <h3 class="title2">Shopping Cart Details&nbsp;</h3>
        <br>
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th style="text-align: center" width="27%">Product Name</th>
                <th style="text-align: center" width="10%">Quantity</th>
                <th style="text-align: center" width="15%">Price Details</th>
                <th style="text-align: center" width="17%">Total Price</th>
                <th style="text-align: center" width="15%">Remove Item</th>
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td class="td_col"><?php echo $value["item_name"]; ?></td>
                            <td class="td_col"><?php echo $value["item_quantity"]; ?></td>
                            <td class="td_col">Rs.<?php echo $value["product_price"]; ?></td>
                            <td class="td_col">Rs.<?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
                            <td style="text-align: center"><a href="add_to_cart_action.php?action=delete&id=<?php echo $value["product_id"]; ?>"><button 
                                        class=" btn btn-danger btn-xs">Remove Item</button></a></td>

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
                    }
                        ?>
                        <tr>
                            <td colspan="3" align="right" style="color: #CF9924;">Total</td>
                            <th align="right" style="text-align: center">Rs.<?php echo number_format($total, 2); ?></th>
                            <td></td>
                        </tr>
                        <?php
                    }
                ?>
            </table>
        </div>
        <br><br>
        <div align="right">
        	<form action="add_to_cart_action.php" method="post">
        		<input type="submit" class="btn btn-primary" name="buy" value="Buy Product">
        		<input type="submit" class="btn btn-success" name="install" value="Install Product">
        	</form>
			
        </div>
        <br><br>
        <div align="center">
			<a href="shop_product.php" style="text-decoration: none;"><button class="btn btn-warning">Continue Shopping</button></a>
        </div>
        <br><br>
</div>
<?php } else{ ?>

	<div class="container" style="width:65%; background: rgba(0,0,0,0.7);">
<div style="clear: both"></div>
       <br><br>
        <h3 class="title2">Shopping Cart Details&nbsp;</h3>
        <br>
        <?php
        echo "<h2 style='background: rgba(0,0,0,0); color:#CF9924; align-content: center;'>No Products In The Cart!</h2>";
		echo "<div align='center'><a class='btn btn-success' href='Home.php' style='text-decoration: none; width: 25%;'>Home</a></div>";
			 ?>
			 <br>
	</div>

 <?php }?>
 
 <br><br>
 
</body>
</html>
