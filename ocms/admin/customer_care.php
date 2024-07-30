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


	if(isset($_GET['inbox'])) {
			$value = $_GET['inbox'];
			
				if($value ==  1)
				{
			 unset($_SESSION['count_mess']);
				}
		}

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

<script type="text/javascript">
	
	$(document).ready(function(){
		setInterval(function(){
			$('#show').load('show_inbox.php')
		}, 1500);
	});

</script>



<meta charset="utf-8">
<title>GARAGE ADMIN-AREA</title>
<link rel="shortcut icon" href="img/NDS.png" >
</head>

<body background="img/home-page-background.png" class="respon-img">
<?php include 'admin_navbar.php'; ?>

<br><br><br><br><br><br>


<div  class="container" style="background:rgba(0,0,0,0.5);">
<br><br>
<h2 align="center" style="color:#CF9924;">Messages</h2>
<br><br>

<div id="show"></div>

		<br>
</div>
<br><br>

</body>
</html>
