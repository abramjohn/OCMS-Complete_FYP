<?php
$connection = mysqli_connect('localhost','root','','ocms');
session_start();

				if (isset($_POST['mode'])) {
					
					$modification=$_POST['modification'];
						
						$q = "SELECT * FROM shop_categories WHERE shop_cate = '$modification'";
						$result = mysqli_query($connection,$q);
						while($row = mysqli_fetch_array($result)){
							$shop_id = $row['shop_id'];
							$shop_cate =	$row['shop_cate'];
							$_SESSION['shop_id']=$shop_id;
							
							header("Location:shop_categories.php");
						}
				}

				else if (isset($_POST['cos'])) {
					
					$costom=$_POST['costom'];
						
						$q = "SELECT * FROM shop_categories WHERE shop_cate = '$costom'";
						$result = mysqli_query($connection,$q);
						while($row = mysqli_fetch_array($result)){
							$shop_id = $row['shop_id'];
							$shop_cate =	$row['shop_cate'];
							$_SESSION['shop_id']=$shop_id;
							
							header("Location:shop_categories.php");
						}
				}
?>



<?php

	$img = $_SESSION['car_img'];
		//header("Content-type:image/jpg");
?>
<!DOCTYPE HTML>
<html>
<link rel="stylesheet" href="Mycss/animatedcss.css" type="text/css">

<script>
        function slt_car() {
            window.open("shop_product.php", "_self");
        }

    </script>
<script>
        function slt_jeep() {
            window.open("shop_product.php", "_self");
        }

    </script>
	


<head>
<link href="animination/aos.css" rel="stylesheet">
<script src="animination/aos.js"></script>
<meta charset="utf-8">
<title>Shop</title>
<link rel="shortcut icon" href="image/NDS.png" >
</head>

<body background="image/audi-full-size-cars-line-up-for-photoshoot-127981_1.jpg" class="respon-img" >
 
 <?php include 'Navbar.php'; ?>
 
<br><br><br><br><br><br><br>

<div class="container-fluid">
	<?php
		echo "<img src='admin/$img' style='width:100%; height:750px;' class='img-responsive' /><br>"
	?>

</div>

 <div id="select">	 
	<div class="container">
	<br><br><br><br><br><br><br><br>

		<div class="row">
		
		
		
		
		
		
		
			
			<div class="col-lg-5 col-sm-12" style="background:rgba(0,0,0,0.7); padding-top: 10px;height: 100%" onClick="slt_car()"  data-aos="zoom-in-right" data-aos-duration="1500">
				<form method="post" action="shop.php">
					<input type="hidden" name="costom" value="costom">
					<img src="image/costom.jpg" style="border: thick;height:;overflow: hidden;" class="img-fluid img-responsive" alt="Responsive image">
					<br><input type="submit" name="cos" class="btn btn-outline-success btn-block btn-sm" style="margin-top: 10px; margin-bottom: 10px; text-transform: uppercase;" value="costom parts">
				</form>
			</div>
			
			
			
			
			
			<div class="col-2"></div>
			
			
			
			
			<div class="col-lg-5 col-sm-12 " style="background:rgba(0,0,0,0.7); padding-top: 10px;height: 100%;" data-aos="zoom-in-left" data-aos-duration="1500">
				<form method="POST" action="shop.php">
					<input type="hidden" name="modification" value="modification">
					<img src="image/modification.jpg" style="border: thick;height:;" class="img-fluid img-responsive" alt="Responsive image">
					<br><input type="submit" name="mode" class="btn btn-outline-success btn-block btn-sm" style="margin-top: 10px; margin-bottom: 10px; text-transform: uppercase;" value="modification parts">
				</form>
			</div>
			
			
		</div>
	
	</div>
	</div>
    
    
   
		<br><br>
  <?php include 'Footer.php'; ?>


  <!-- Script to Activate the Carousel -->
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
