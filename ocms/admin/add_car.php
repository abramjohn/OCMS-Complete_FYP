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



if(isset($_POST['upload']))
{
	
	$pname = $_POST['car_name'];
	$brand_nam = $_POST['brand_name'];
	$price = $_POST['car_model'];
	$type_1 = $_POST['type_1'];
	$type_2 = $_POST['type_2'];
	$car_options = $_POST['car_options'];
	$filename = $_FILES["car_img"]["name"];
	$tempname = $_FILES["car_img"]["tmp_name"];
	
	if($pname == '' || $price == '' || $filename == ''){
		echo "<script>alert('please fill all the fields!')</script>";
	exit();
	}
	else
	{
		
	
	
	$folder = "products_images/add_cars/".$filename;
	move_uploaded_file($tempname,$folder);
	
		
	$query = "INSERT INTO cars (car_name,car_model,car_img,type_1,type_2,veh_type,brand_name) VALUES ('{$pname}','{$price}','{$folder}','{$type_1}','{$type_2}','{$car_options}','{$brand_nam}')";
	$data = mysqli_query($conn, $query);
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
            <h2>NEW CAR</h2>
        </div>
                <form  action="add_car.php" method="post" enctype="multipart/form-data">
                    <br>
                     <div class="form-group">
						  
						  <div class="form-group  colour">
							<label for="exampleFormControlFile1">CAR IMAGE</label>
							<input type="file" class="form-control-file" name="car_img" >
						  </div>
						  <br>
						  <select class="form-control" name="brand_name" style="padding-left: 10px; margin: 0px;">
								<option>Brand Name</option>

								<?php
								$q = "SELECT * FROM brands";
								$result = mysqli_query($conn,$q);
								while($row = mysqli_fetch_array($result)){
									$brand_id=$row['brand_id'];
									$brand_name=$row['brand_name'];
									echo "<option value='$brand_name'>$brand_name</option>";
								}
								?>
						  </select>
						  <br><br>
						  <input type="text" placeholder="Car Name" class="form-control" name="car_name" requied>
						  <br>
						 
						  <br>
						  <input type="text" placeholder="Model" class="form-control" name="car_model" requied>
						  <br>
						  <br>
							
							<select class="form-control" name="car_options" style="padding-left: 10px; margin: 0px;" requied>
								<option>Select Type</option>
								<option value="Car">Car</option>
								<option value="Jeep">Jeep</option>
							</select>
							<br>
						  <div class="row">
						
						   <div class="col-lg-6 col-sm-12">
						   		 <div class="form-check">
									<label class="form-check-label">
										<div>		  
										  <input type="checkbox" class="form-check-input" value='costom' name='type_1' required>
										   <div style="color: #BBBBBB"> Costom </div>
									  </div>
									</label>
								</div>
						   </div>
						   <div class="col-lg-6 col-sm-12">
						   		<div class="form-check">
									<label class="form-check-label">
										<div>		  
										  <input type="checkbox" class="form-check-input" value='Modification' name='type_2' required>
										   <div style="color: #BBBBBB"> Modification </div>
									  </div>
									</label>
								</div>
						   </div>
						  
						  
						</div>
						
                    <br>
                    

                    <button type="submit" name="upload" class="btn btn-success btn-block"  id="registration_form">ADD CAR</button>
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
