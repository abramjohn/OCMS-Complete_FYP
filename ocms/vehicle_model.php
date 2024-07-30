   <?php
    
    $database_name = "ocms";
    $con = mysqli_connect("localhost","root","",$database_name);
	session_start();
	$brand = $_SESSION['brand_name'];
	$car = $_SESSION['car'];
if (isset($_POST['add_car'])) {
			$car=$_POST['car_name'];
			$car_mod=$_POST['car_model'];
						$q = "SELECT * FROM cars WHERE car_name = '$car' AND car_model = '$car_mod'";
						$result = mysqli_query($con,$q);
						while($row = mysqli_fetch_array($result)){
							$car_id = $row['car_id'];
							$car_name =	$row['car_name'];
							$car_model = $row['car_model'];
							$veh_type = $row['veh_type'];
							$car_img =	$row['car_img'];
							
            					$_SESSION['car_id']=$car_id;
            					$_SESSION['car_name']=$car_name;
            					$_SESSION['car_model']=$car_model;
								$_SESSION['veh_type']=$veh_type;
            					$_SESSION['car_img']=$car_img;
							header("Location:shop.php");
						}
}
?>

<!doctype html>
<html>
<link rel="stylesheet" href="css 1/bootstrap.css" type="text/css">
<link rel="stylesheet" href="js 1/bootstrap.js" type="text/css">
<link rel="stylesheet" href="Mycss/my FYP.css" type="text/css">
<link rel="stylesheet" href="Mycss/animatedcss.css" type="text/css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css" type="text/css">
<link rel="stylesheet" href="Mycss/animatedcss.css" type="text/css">
<link rel="shortcut icon" href="image/NDS.png" >
<head>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   <link href="animination/aos.css" rel="stylesheet">
<script src="animination/aos.js"></script>

   
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css 1/bootstrap.css" type="text/css">
    <title>Select Model</title>

   

    <style>
       
        .product{
            
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            
			height: 400px;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center; 
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
</head>
<body background="image/Audi-A6-Interior-114438.jpg" class="respon-img">
<div>
 <?php include 'Navbar.php'; ?>
	</div>
   <br><br><br><br><br><br><br><br><br>
   <div class="animated fadeInDownBig">
   <div class="container"  style="background: rgba(0,0,0,0.7);">
   <br>
   
   <?php
	   if(isset($_SESSION['cart'])){	   
	   
	?>
  <div align="center" data-aos="zoom-in-down" data-aos-duration="3000">
  	<h1 align="center" style="color:#CF9924">WARNING!!</h1>
  	<br><br>
  	<h3 class="text-warning">" You have already selected the car and its products. "</h3>
  	<br>
  	<h5 style="color: white">If you want to change the car your old car product will be removed from the cart.</h5>
  	<h5 style="color: white">Would you like to continue !!</h5>
  	
  	<br><br>
  	<form action="checkdata.php" method="post">
  	<a class="btn btn-warning" style="width: 20%" href="shop_product.php">Cancel</a>
  		<input type="submit" name="unset_cart" style="width: 20%" class="btn btn-success" value="Continue">
  	</form>
  	<br><br>
  </div>
  
  <?php
	
	   }
	   else
	   {
		   
	   
		   
  ?>
  <p style="text-transform: uppercase; color:#CF9924; font-size: 20px; margin-left: 45px;"><b>BRAND NAME :</b> <?php echo" $brand"; ?></p>
   
   <h2 style="color:#CF9924;">MODELS</h2>
      <div class="row">
      <?php
       $query = "SELECT * FROM cars WHERE brand_name = '$brand' AND veh_type = '$car'";
            $result = mysqli_query($con,$query);
		  
		  	if (mysqli_num_rows($result)==0) {
			echo "<h2 style='color:#CF9924; align-content: center;'>No Products found for this Brand!";
		}
		  
          else  if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {
					$car_id=$row['car_id'];
					$car_name=$row['car_name'];
					$car_img=$row['car_img'];
					$car_model=$row['car_model'];

                    ?>
                    <div class="col-md-4" style="background: rgba(0,0,0,0);">

                        <form method="post" action="vehicle_model.php">

                            <div class="product">
                                <?php echo "<img src='admin/$car_img' style='width:100%; height:200px; margin-left:2px;' class='img-responsive' /><br>"; ?>
                                <h5 class="text-info" style="font-size: 15px; margin-top: 10px"><?php echo "$car_name"; ?></h5>
                                <h5 class="text-danger" style="margin-top: 25px;"><?php echo "$car_model"; ?></h5>
                                
                                <input type="hidden" name="car_name" value="<?php echo "$car_name"; ?>">
                                <input type="hidden" name="car_model" value="<?php echo "$car_model"; ?>">
                                
                                <input type="submit" name="add_car" style="margin-top: 15px;  width: 100%;" class="btn btn-success btn-sm" value="Select">
                                
                            </div>
                        </form>
                        <br>
                    </div>
                    <?php
                }
            }
		  
	   }
       ?> 
        
        
        
        </div>
   	
   </div>
   </div>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include 'Footer.php'; ?>

  <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    
    <script>   
            AOS.init();
    </script>


</body>
</html>

