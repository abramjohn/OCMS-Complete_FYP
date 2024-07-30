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
	 $result = mysqli_query($connection,$query);
	 $row=mysqli_fetch_assoc($result);
    
        $db_id = $row['admin_id'];
	 
	 if($db_id != $id_admin)
	 {
		 unset($_SESSION["name"] , $_SESSION["designation"] , $_SESSION["admin_id"] , $_SESSION["email"] , $_SESSION["contact"]);
		 header("Location:admin_login.php");
	 }
	 
 }



if(isset($_POST['add_brand']))
{
	
	$brand_name = $_POST['brand_name'];
	
		
	$query = "INSERT INTO brands (brand_name) VALUES ('{$brand_name}')";
	$data = mysqli_query($conn, $query);
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
   <style>
	   .colour{
		   color: white;
	   }
	</style>
<head>
<meta charset="utf-8">
<title>GARAGE ADMIN-AREA</title>
<link rel="shortcut icon" href="img/NDS.png" >
</head>

<body background="img/home-page-background.png" class="respon-img">
<?php include 'admin_navbar.php'; ?>
<br><br><br><br>
<div class="container">
      
		<br>
        <br><br><br><br>
        
        <div class="row">
            <div class="col-3">
            </div>

            <div class="col-lg-6 col-sm-12 animated bounceInDown" style="background:rgba(0,0,0,0.7); overflow: hidden;">
                <br>
                <div class="text" align="center" style="color: white">
            <h2>NEW Brand</h2>
        </div>
                <form  action="add_brands.php" method="post" enctype="multipart/form-data">
                    <br>
                     <div class="form-group">
						  
						  
						  <br>
						  <input type="text" placeholder="Brand Name" class="form-control" name="brand_name" requied>
						  <br>
						 
					
						
                    <br>
                    

                    <button type="submit" name="add_brand" class="btn btn-success btn-block">ADD BRAND</button>
                    <br><br>
                </form>
            </div>
            </div>

            <div class="col-3">
            </div>
        </div>
    </div>


</body>
</html>
