<?php
 $connection = mysqli_connect('localhost','root','','ocms');
session_start();

		  				
  if(!isset($_SESSION['admin_id']))
  {
	header("Location:admin_login.php");
  }

//check admin is exist in the database//
 if(isset($_SESSION['admin_id']))
 {
	 $id_admin = $_SESSION['admin_id'];
	 
	 $query= "SELECT * FROM admin_register WHERE admin_id = '$id_admin'";
	 $result = mysqli_query($connection,$query);
	 $row=mysqli_fetch_assoc($result);
    
        $db_id = $row['admin_id'];
	 
	 if($db_id != $id_admin)
	 {
		 unset($_SESSION["name"] , $_SESSION["designation"] , $_SESSION["admin_id"] , $_SESSION["email"] , $_SESSION["contact"]);
		 header("Location:admin_login.php");
	 }
	 
 }


$name =$_SESSION['name'];
$designation =$_SESSION['designation'];
$admin_id =$_SESSION['admin_id'];
$email =$_SESSION['email'];
$contact =$_SESSION['contact'];


?>


<!doctype html>
<html>
<link rel="stylesheet" href="css 1/bootstrap.css" type="text/css">
<link rel="stylesheet" href="js 1/bootstrap.js" type="text/javascript">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="Mycss/my FYP.css" type="text/css">
<link rel="stylesheet" href="sidebar/tog_style.css" type="text/css">
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

<script>
		
		 $(document).ready(function(){
		setInterval(function(){
			$('#load').load('sidebar/tes.php')
		}, 1500);
	});
	
	
	
	</script>
<!-- code of clock -->

<script>

	function start_time()
	{
		var today = new Date();
		var h = today.getHours();
		var m = today.getMinutes();
		var s = today.getSeconds();
		m = check_time(m);
		s = check_time(s);
		document.getElementById('clock').innerHTML = h + ":" + m + ":" +s;
		var t = setTimeout(start_time, 500);
	}
	
	function check_time(i)
	{
		if(i<10)
			{
				i = "0" + i
			};
		return i;
	}
	
</script>

<!-- code of clock -->

<style>
	
	#clock
	{
		position: absolute;
		left: 5%;
		top: 50%;
		font-family: Orbitron;
		color: #17d4fe;
		letter-spacing: 7px;
		font-weight: bold;
		font-size: 35px;
	}
</style>

<meta charset="utf-8">
<title>GARAGE ADMIN-AREA</title>
<link rel="shortcut icon" href="img/NDS.png" >
</head>
<body background="img/home-page-background.png" class="respon-img" onLoad="start_time()">

<?php include 'admin_navbar.php'; ?>


 <br><br><br> <br><br><br> <br><br><br>
 <div id="load"></div>
 <div class="container">
 <div style="position: absolute; z-index: -1;">
<div class="container">
	<div class="row">
		<div class="col-lg-4 col-sm-12">

			<div class="rounded" style="background:rgba(0,0,0,0.7); border: solid 3px #2A9921; height: 400px;">
				<br>
				<h3 align="center" style="color: #CF9924">Admin Information</h3>
				<br><br><br>
				<p style="margin-left: 10px; color: white; font-size: 15px;"><b>Admin Name :</b> <?php echo"$name"?></p>
				<p style="margin-left: 10px; color: white; font-size: 15px;"><b>Admin Designation :</b> <?php echo"$designation"?></p>
				<p style="margin-left: 10px; color: white; font-size: 15px;"><b>Admin ID :</b> <?php echo"$admin_id"?></p>
				<p style="margin-left: 10px; color: white; font-size: 15px;"><b>Admin Email :</b> <?php echo"$email"?></p>
				<p style="margin-left: 10px; color: white; font-size: 15px;"><b>Admin Contact :</b> <?php echo"$contact"?></p>
				<br>
			</div>

		</div>

		<div class="col-lg-8 col-sm-12">
		
			<div class="rounded" style="background:rgba(0,0,0,0.7); border: solid 3px #2A9921; height: 400px;">
				<div>
				<br>
				<h1 align="center" style="color: #CF9924">Welcome Admin</h1>
					<br>
					<div class="row">
						<div class="col-lg-6 col-sm-12">
							<br>
							<h4 style="margin-left: 25px;" id="clock"></h4>
							<br>
						</div>
						<div class="col-lg-6 col-sm-12">
							<div class="card" style="width: 18rem; margin-left: 5px; margin-top: 30px;">
							  <div class="card-body">
								<h5 class="card-title">View Sub-Admins</h5>
								<p class="card-text">Here you can see the detail of sub admins.</p>
								<a href="admin_data_display.php" class="btn btn-primary">View Data</a>
							  </div>
							</div>
						</div>
					</div>
					<br>
				</div>
			</div>

		</div>
	</div> 
</div>
	<br><br>
<div class="container">	
	<div class="row">
		<div class="col-lg-3 col-sm-12">
			<div class="card" style="background:rgba(0,0,0,0.7); border: solid 3px #2A9921;">
			  <div class="card-body">
				<h3 class="card-title" style="color: #CF9924">View Brands</h3>
				<p class="card-text" style="color: white">Here you can see the detail of Brands.</p>
				<a href="brands_data_display.php" class="btn btn-primary">View data</a>
			  </div>
			</div>
		</div>
		
		<div class="col-lg-3 col-sm-12">
			<div class="card" style="background:rgba(0,0,0,0.7); border: solid 3px #2A9921;">
			  <div class="card-body">
				<h3 class="card-title" style="color: #CF9924">View Cars</h3>
				<p class="card-text" style="color: white">Here you can see the detail of cars.</p>
				<a href="car_data_display.php" class="btn btn-primary">View data</a>
			  </div>
			</div>
		</div>
		
		<div class="col-lg-3 col-sm-12">
			<div class="card" style="background:rgba(0,0,0,0.7); border: solid 3px #2A9921;">
			  <div class="card-body">
				<h3 class="card-title" style="color: #CF9924">View Categories</h3>
				<p class="card-text" style="color: white">Here you can see the detail of categories.</p>
				<a href="categories_data_display.php" class="btn btn-primary">View data</a>
			  </div>
			</div>
		</div>
		
		<div class="col-lg-3 col-sm-12">
			<div class="card" style="background:rgba(0,0,0,0.7); border: solid 3px #2A9921;">
			  <div class="card-body">
				<h3 class="card-title" style="color: #CF9924">View Products</h3>
				<p class="card-text" style="color: white">Here you can see the detail of products.</p>
				<a href="car_brand_product.php" class="btn btn-primary">View data</a>
			  </div>
			</div>
		</div>
		
	</div>

</div>  
 </div>
</div>
</body>
</html>
