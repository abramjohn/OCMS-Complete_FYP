<?php 
session_start();

$conn = mysqli_connect('localhost','root','','ocms');


 if(!isset($_SESSION['admin_id']))
  {
	header("Location:admin_login.php");
  }

//check admin is exist in the database//	
 if(isset($_SESSION['admin_id']))
 {
	 $id_admin = $_SESSION['admin_id'];
	 
	 $query= "SELECT * FROM admin_register WHERE admin_id = '$id_admin'";
	 $result = mysqli_query($conn,$query);
	 $row=mysqli_fetch_assoc($result);
    
        $db_id = $row['admin_id'];
	 
	 if($db_id != $id_admin)
	 {
		 
		unset($_SESSION["name"] , $_SESSION["designation"] , $_SESSION["admin_id"] , $_SESSION["email"] , $_SESSION["contact"]);
		 header("Location:admin_login.php");
	 }
	 
 }


 $brand_name = $_SESSION['brand_name']; 
?>



<!doctype html>
<html>
<link rel="stylesheet" href="css 1/bootstrap.css" type="text/css">
<link rel="stylesheet" href="js 1/bootstrap.js" type="text/css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="Mycss/my FYP.css" type="text/css">
<link rel="stylesheet" href="Mycss/animatedcss.css" type="text/css">
<script type="text/javascript" language="javascript" src="validation javascripts/jquery.js"></script>
<script type="text/javascript" language="javascript" src="validation javascripts/script.js"></script>
<script src="validation javascripts/jquery 2.2.0.min.js"></script>
<script src="validation javascripts/sweetalert.min.js"></script>

<head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Orbitron" />

<meta charset="utf-8">
<title>GARAGE ADMIN-AREA</title>
<link rel="shortcut icon" href="img/NDS.png" >
</head>

<body background="img/home-page-background.png" class="respon-img">
<?php include 'admin_navbar.php'; ?>

<div class="container rounded" style="margin-top: 320px; width: 20%; background:rgba(0,0,0,0.7);">
	<form action="delete_function.php" method="post">
						  <br>
						  <select class="form-control" name="car_id" style="padding-left: 10px; margin: 0px;">
								<option>Car Name</option>

								<?php
								$q = "SELECT * FROM cars WHERE brand_name = '$brand_name'";
								$result = mysqli_query($conn,$q);
								while($row = mysqli_fetch_array($result)){
									$car_id=$row['car_id'];
									$car_name=$row['car_name'];
									$car_model=$row['car_model'];
									echo "<option value='$car_id'>$car_name &nbsp;&nbsp;&nbsp; ( $car_model )</option>";
								}
								?>
						  </select>
						  <br>
						  <select class="form-control" name="category_id" style="padding-left: 10px; margin: 0px;">
								<option>Part Category</option>

								<?php
								$q = "SELECT * FROM parts_categories";
								$result = mysqli_query($conn,$q);
								while($row = mysqli_fetch_array($result)){
									$catag_id=$row['prt_id'];
									$catag_title=$row['prt_name'];
									echo "<option value='$catag_id'>$catag_title</option>";
								}
								?>
						  </select>
						  <br>
						  <select class="form-control" name="shop_cate_id" style="padding-left: 10px; margin: 0px;">
								<option>Shop Category</option>

								<?php
								$q = "SELECT * FROM shop_categories";
								$result = mysqli_query($conn,$q);
								while($row = mysqli_fetch_array($result)){
									$cate_id=$row['shop_id'];
									$cate_title=$row['shop_cate'];
									echo "<option value='$cate_id'>$cate_title</option>";
								}
								?>
						  </select>
						  <br>
						  <input class="btn btn-success btn-block" type="submit" name="product_filter" value="GET PRODUCTS">
                    	  <br>
	</form>
</div>


</body>
</html>
