<?php

session_start();

	if(!isset($_SESSION['grand_total']))
                        {
							header("Location: home.php");	
						}
$contact = $_SESSION['contact'];

 if (isset($_POST["exit_web"])){
	 unset($_SESSION["cart"] , $_SESSION["brand_name"] , $_SESSION["shop_id"] , $_SESSION["car_id"] , $_SESSION["car_name"] , $_SESSION["car_model"] ,$_SESSION["veh_type"] , $_SESSION["prt_id"]);
	 echo '<script>window.location="home.php"</script>';
 }

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
<meta charset="utf-8">
<title>The Garage</title>
</head>

<body style="background: #000000">
<br><br><br><br><br><br><br><br><br>
<h1 align="center" style="font-size: 150px; color: #CF9924;">THANK YOU</h1>
<h3 align="center" style="font-size: 50px; color: white;">FOR VISITING GARAGE</h3>
<br><br>
<div class="container">
	
	<h3 style="color: #A2A2A2;"><i class="fa fa-check" style="color: #61b560;" aria-hidden="true"></i> &nbsp;&nbsp; The Garage will contact you soon on <b><?php echo"$contact"?></b> , to confrim your order.</h3>
	<h3 style="color: #A2A2A2;"><i class="fa fa-check" style="color: #61b560;" aria-hidden="true"></i> &nbsp;&nbsp; Note you have register with correct information, because The Garage will contact &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;you on that.</h3>
	<h3 style="color: #A2A2A2;"><i class="fa fa-check" style="color: #61b560;" aria-hidden="true"></i> &nbsp;&nbsp; Note product will be change or replace, but shall be return after buying.</h3>
	<h3 style="color: #A2A2A2;"><i class="fa fa-check" style="color: #61b560;" aria-hidden="true"></i> &nbsp;&nbsp; We hope that you like our products and our online service.</h3>
	
	<br><br><br>
	
	<div align="center">
		<form action="exit_web.php" method="post">
			<input type="submit" name="exit_web" class="btn btn-success" style="width: 30%;" value="GO TO HOME">
		</form>
		
	</div>
</div>

</body>
</html>
