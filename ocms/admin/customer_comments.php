<?php
	session_start();
    if(!isset($_SESSION['admin_id']))
  {
	header("Location:admin_login.php");
  }

    $database_name = "ocms";
    $con = mysqli_connect("localhost","root","",$database_name);

//check admin is exist in the database//
 if(isset($_SESSION['admin_id']))
 {
	 $id_admin = $_SESSION['admin_id'];
	 
	 $query= "SELECT * FROM admin_register WHERE admin_id = '$id_admin'";
	 $result = mysqli_query($con,$query);
	 $row=mysqli_fetch_assoc($result);
    
        $db_id = $row['admin_id'];
	 
	 if($db_id != $id_admin)
	 {
		 unset($_SESSION["name"] , $_SESSION["designation"] , $_SESSION["admin_id"] , $_SESSION["email"] , $_SESSION["contact"]);
		 header("Location:admin_login.php");
	 }
	 
 }


    $email_cos = $_SESSION['cos_email'];
	
		
		
?>



<!doctype html>
<html>
<link rel="stylesheet" href="../../ocms/css 1/bootstrap.css" type="text/css">
<link rel="stylesheet" href="../../ocms/js 1/bootstrap.js" type="text/css">
<link rel="stylesheet" href="../../ocms/font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">

<link rel="stylesheet" href="../../ocms/Mycss/animatedcss.css" type="text/css">
<script type="text/javascript" language="javascript" src="../../ocms/validation javascripts/jquery.js"></script>
<script type="text/javascript" language="javascript" src="../../ocms/validation javascripts/script.js"></script>
<script src="../../ocms/validation javascripts/jquery 2.2.0.min.js"></script>
<script src="../../ocms/validation javascripts/sweetalert.min.js"></script>
<head>
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<meta charset="utf-8">
<title>GARAGE ADMIN-AREA</title>
<link rel="shortcut icon" href="img/NDS.png" >
</head>

<body background="img/home-page-background.png" class="respon-img">
<?php include 'admin_navbar.php'; ?>

<br><br><br><br><br><br><br><br><br>
<div class="container" style="background:rgba(0,0,0,0.5); width: 55%;">
<br><br>
		<h2 align="center" style="color:#CF9924;">Message</h2>

<br><br>

<?php
	 $query = "SELECT * FROM complains WHERE com_id = '$email_cos'";
            $result = mysqli_query($con,$query);
		 while ($row = mysqli_fetch_array($result)) {
					$cos_name=$row['cos_name'];
					$cos_email=$row['cos_email'];
					$subject=$row['subject'];
					$message=$row['message'];
					$date=$row['date'];
					$time=$row['time'];
					

	

	
	?>
<div>
	<div align="right">
		<p><?php echo $date ?> , <?php echo $time ?></p>
	</div>
	<div style="width: 100%; height: 25px; border-bottom: 1px solid #61b560;  color: white">
		<p><b>Name: </b><?php echo $cos_name ?></p>
	</div>
	<br>
	<div style="width: 100%; height: 25px; border-bottom: 1px solid #61b560;  color: white">
		<p><b>Email: </b><?php echo $cos_email ?></p>
	</div>
	<br>
	<div style="width: 100%; height: 25px; border-bottom: 1px solid #61b560;  color: white">
		<p><b>Subject:</b> <?php echo $subject ?></p>
	</div>
	<br><br>
	<div style="width: 100%; color: white">
		<p><?php echo $message ?></p>
		<br><br>
	</div>
</div>	
	<?php
	 }
	?>

	
</div>


</body>
</html>
