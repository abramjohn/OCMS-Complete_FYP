<?php
$con = mysqli_connect('localhost','root','','ocms');
    session_start();
		
  

    if (isset($_POST["add"])){
        if (isset($_SESSION["cart"])){  
			
            $item_array_id = array_column($_SESSION["cart"],"product_id");
            if (!in_array($_GET["id"],$item_array_id)){
                $count = count($_SESSION["cart"]);
                $item_array = array(
                    'product_id' => $_GET["id"],
                    'item_name' => $_POST["hidden_name"],
                    'product_price' => $_POST["hidden_price"],
                    'item_quantity' => $_POST["quantity"],
                );
                $_SESSION["cart"][$count] = $item_array;
                
            }else{
                echo '<script>alert("Product is already Added to Cart")</script>';
                
            }
			
			
        }else{
            $item_array = array(
                'product_id' => $_GET["id"],
                'item_name' => $_POST["hidden_name"],
                'product_price' => $_POST["hidden_price"],
                'item_quantity' => $_POST["quantity"],
            );
            $_SESSION["cart"][0] = $item_array;
        }
		echo '<script>window.location="shop_product.php"</script>';
    }

    if (isset($_GET["action"])){
        if ($_GET["action"] == "delete"){
            foreach ($_SESSION["cart"] as $keys => $value){
                if ($value["product_id"] == $_GET["id"]){
                    unset($_SESSION["cart"][$keys]);
                    
                    echo '<script>window.location="view_cart.php"</script>';
                }
            }
        }
    }

	 if (isset($_POST["buy"])){
	 	 unset($_SESSION["team_id"]);
		 echo '<script>window.location="invoice_cart.php"</script>';
	 }
	if (isset($_POST["install"])){
	 	 
		 echo '<script>window.location="select_team.php"</script>';
	 }





//inserting invoice data to database//



if (isset($_POST["get_invoice"])){
	 $invoice = $_SESSION['invoice_no'];
	 $date = $_SESSION['date'];
	 $time = $_SESSION['time'];
	 $cost_name = $_SESSION['name'];
	 $cost_id = $_SESSION['id'];
	 $total = $_SESSION['total'];
	 $tax = $_SESSION['tax'];
	 $brand_name = $_SESSION['brand_name'];
	 $car_name = $_SESSION['car_name'];
	 $car_model = $_SESSION['car_model'];
	 $status = 'Pending';
	 $grand_total = $_SESSION['grand_total'];
		if(isset($_SESSION['team_id']))
		{
			$team_id = $_SESSION['team_id'];
			$labour = $_SESSION['labour'];
		}
		else
		{
			$team_id = 0;
			$labour = 0;
		}
	
	$query = "INSERT INTO cost_order (cos_id,cos_name, invoice_no,grand_total, date, time, team_id, tax, total, labour, status, car_name, car_model, brand_name) VALUES ('{$cost_id}','{$cost_name}','{$invoice}','{$grand_total}','{$date}','{$time}','{$team_id}','{$tax}','{$total}','{$labour}','{$status}','{$car_name}','{$car_model}','{$brand_name}')";
		$result = mysqli_query($con,$query);
	
	foreach ($_SESSION["cart"] as $key => $value) {
	$val = $value["item_name"];
	$qty = $value["item_quantity"];
	$price = $value["product_price"];
	$sub_total = $qty * $price;
		 
		$query = "INSERT INTO item_order (item_name, invoice_no, item_qty, price , sub_total) VALUES ('{$val}','{$invoice}','{$qty}','{$price}','{$sub_total}')";
		$result = mysqli_query($con,$query);
	}
	
	echo '<script>window.location="exit_web.php"</script>';

}





?>