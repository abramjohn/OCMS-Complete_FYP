<?php 

$con = mysqli_connect('localhost','root','','ocms');
session_start();

?>

<!doctype html>
<html>
<link rel="stylesheet" href="js 1/bootstrap.js" type="text/css">
<link rel="stylesheet" href="css 1/bootstrap.css" type="text/css">
<link rel="stylesheet" href="Mycss/my FYP.css" type="text/css">
<link rel="stylesheet" href="Mycss/animatedcss.css" type="text/css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css" type="text/css">
<link rel="shortcut icon" href="image/NDS.png" >
<head>
<meta charset="utf-8">
<title>The Garage</title>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link href="animination/aos.css" rel="stylesheet">
<script src="animination/aos.js"></script>
  
</head>

<body background="image/708447-popular-wallpaper-hd-2018-for-pc-3840x2160-for-1080p.jpg" class="respon-img">
<?php include 'Navbar.php'; ?>
<br><br><br><br><br><br><br><br><br><br>
<?php
		if (isset($_GET['pro_id'])) {
			$product_id=$_GET['pro_id'];
		$sql="select * from product where pro_id='$product_id'";
		$run_query=mysqli_query($con, $sql);
		while ($row=mysqli_fetch_array($run_query)) {
			$pro_id=$row['pro_id'];
			$pro_title=$row['pname'];
			$pro_price=$row['price'];
			$pro_descript1=$row['descript1'];
			$pro_descript2=$row['descript2'];
			$pro_company=$row['company'];
			$det_img1=$row['det_img1'];
			$det_img2=$row['det_img2'];
			$pro_img1=$row['install_img1'];
			$pro_img2=$row['install_img2'];
			$pro_img3=$row['install_img3'];
		}
	}

		 ?>
<div class="container-fluid" style="background: rgba(0,0,0,0.7);">
<br>
<div class="row">	
	<div class="col-lg-4 col-sm-12" data-aos="zoom-in-right" data-aos-duration="1500">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		  </ol>
		  <div class="carousel-inner">
			<div class="carousel-item active">
			  
			  <?php echo "<img class='d-block w-100' src='admin/products_images/$det_img1' style='height:650px;' alt='First slide' /><br>"; ?>
			</div>
			<div class="carousel-item">
			  
			  <?php echo "<img class='d-block w-100' src='admin/products_images/$det_img2' style='height:650px;' alt='Second slide' /><br>"; ?>
			</div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		  </a>
		</div>
	</div>
	<div class="col-lg-1 col-sm-12">
		
	</div>
	<div class="col-lg-4 col-sm-12" data-aos="zoom-in-down" data-aos-duration="1500">
		<h2 style=" margin-top: 10px; color: #CF9924"><?php echo $pro_title; ?></h2>
		<h5 style=" margin-top: 10px; color: white">by <?php echo $pro_company; ?></h5><br>
		<div style="border-top: 1px solid white;"></div><br>
		<h5 style=" margin-top: 10px; color: white">Price: Rs.<?php echo $pro_price; ?></h5><br><br>
		<h5 style=" margin-top: 10px; color: #CF9924">About Part:</h5>
		<p style=" margin-top: 10px; color: white"><?php echo $pro_descript1; ?></p>
	</div>
	<div class="col-lg-1 col-sm-12">
		
	</div>
	<div class="col-lg-2 col-sm-12" data-aos="zoom-in-left" data-aos-duration="1500">
		<form method="post" action="add_to_cart_action.php?action=add&id=<?php echo $pro_id; ?>">

          
                 	<label style="color: white"><b>Quantity</b>
                  <input type="text" style="margin-top: 10px;" name="quantity" class="form-control" value="1">
                  <input type="hidden" name="hidden_name" value="<?php echo $pro_title; ?>">
                  <input type="hidden"  name="hidden_price" value="<?php echo $pro_price; ?>">
                  <input type="submit" name="add" style="margin-top: 15px; width: 100%;" class="btn btn-success btn-sm" value="Add to Cart">
                  <?php echo "<a class='btn btn-primary btn-sm' href='shop_product.php' style='text-decoration: none; margin-top: 15px;  width: 100%;'>Store</a>" ?>
                  </label>
         
       </form>
	</div>	
</div>
<br>
</div>

<br>

<div class="container-fluid" style="background: rgba(0,0,0,0.7);" data-aos="zoom-in-down" data-aos-duration="1000">
<br>
<h2 align="center" style="color: #CF9924;">AFTER INSTALLATION</h2>
<br>
<div class="row">
	<div class="col-lg-6 col-sm-12">
		<div data-aos="zoom-in-down" data-aos-duration="3000">
			<?php echo "<img class=' ' src='admin/products_images/$pro_img1' style='height:450px; width: 100%; ' alt='First slide' /><br>"; ?>
		</div>
		<br>
	</div>
	<div class="col-lg-6 col-sm-12">
		<div data-aos='zoom-in-down' data-aos-duration='3000'>
			<?php echo "<img class='' src='admin/products_images/$pro_img2' style='height:450px; width: 100%;' alt='First slide' /><br>"; ?>
		</div>
	</div>
</div>
<br>
</div>

<br>

<div class="container-fluid" style="background: rgba(0,0,0,0.7);" data-aos="zoom-in-down" data-aos-duration="1000">
<br>
<h2 align="center" style="color: #CF9924;">PART VIEW &amp; INFORMATION</h2>
<br>
<div class="row">
	<div class="col-lg-6 col-sm-12"  data-aos='zoom-out-up' data-aos-duration='3000'>
		<?php echo "<img class=' ' src='admin/products_images/$pro_img3' style='height:450px; width: 100%; ' alt='First slide' /><br>"; ?>
	</div>
	<div class="col-lg-4 col-sm-12" data-aos="zoom-in-down" data-aos-duration="2000">
		<p style=" margin-top: 180px; color: white; text-align: center"><?php echo $pro_descript2; ?></p>
	</div>
</div>
<br>
</div>

<br><br><br>
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
