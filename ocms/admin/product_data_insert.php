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

$car_id_fil = $_SESSION['car_id_pro'];
$car_type_fil =$_SESSION['car_type'];
$car_name_fil =$_SESSION['car_name'];
$car_model_fil = $_SESSION['car_model'];

?>
<!doctype html>
<html>
<link rel="stylesheet" href="css 1/bootstrap.css" type="text/css">

<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">

<link rel="stylesheet" href="Mycss/animatedcss.css" type="text/css">
<script type="text/javascript" language="javascript" src="validation javascripts/jquery.js"></script>
<script type="text/javascript" language="javascript" src="validation javascripts/script.js"></script>
<script src="validation javascripts/jquery 2.2.0.min.js"></script>
<script src="validation javascripts/sweetalert.min.js"></script>

<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

   <style>
	   .colour{
		   color: white;
	   }
	</style>
    

    <meta charset="utf-8">
    <title>GARAGE ADMIN-AREA</title>
    <link rel="shortcut icon" href="img/NDS.png" >
    
</head>


<body background="img/home-page-background.png" class="respon-img" >

 <?php include 'admin_navbar.php'; ?>
<br><br><br>
		<br>
   
    <div class="container">
        <br>
        
        <div class="row">
            <div class="col-3">
            
            </div>

            <div class="col-lg-6 col-sm-12 animated bounceInDown" style="background:rgba(0,0,0,0.7); overflow: hidden;">
                <br>
                <div class="text" align="center" style="color: white">
            <h2>ADD PRODUCT</h2>
        </div>
        
        <p style="text-transform: uppercase; color:#CF9924; font-size: 20px;"><b>CAR NAME :</b> <?php echo" $car_name_fil"; ?></p>
        <p style="text-transform: uppercase; color:#CF9924; font-size: 20px;"><b>CAR MODEL :</b> <?php echo" $car_model_fil"; ?></p>
        <p style="text-transform: uppercase; color:#CF9924; font-size: 20px;"><b>CAR TYPE :</b> <?php echo" $car_type_fil"; ?></p>
                
                 <form  action="insert_product_process.php" method="post" enctype="multipart/form-data">
                    <br>
                     <div class="form-group">
						  
						  <div class="  colour">
							<label for="exampleFormControlFile1">Product Display Image</label>
							<input type="file" class="form-control-file" name="product_img1" >
						  </div>
						  <br>
						   <input type="hidden" value="<?php echo $car_id_fil ; ?>" class="form-control" name="car_id" >
						   <input type="hidden" value="<?php echo $car_model_fil; ?>" class="form-control" name="car_model" >
						   <input type="hidden" value="<?php echo $car_type_fil ; ?>" class="form-control" name="car_options" >
						  
						  <input type="text" placeholder="Product name" class="form-control" name="pname" >
						  <br>
						  <input type="text" placeholder="Company" class="form-control" name="company" >
						  <br>
						  <input type="text" placeholder="Price" class="form-control" name="price">
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
						  <div class="row">
						  
						  <div class="form-group col-6 colour">
							<label for="exampleFormControlFile1">Detail Display Image 1</label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1" name="product_img2">
						  </div>
						  <br>
						  <div class="form-group col-6 colour">
							<label for="exampleFormControlFile1">Detail Display Image 1</label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1" name="product_img3">
						  </div>
						  </div>
						  <br>
						   <div class="form-group">
							  <textarea placeholder="Detail of Product 1" class="form-control" rows="5" id="comment" name="descript1"></textarea>
						   </div> 
						  <br>
						  <div class="form-group colour">
							<label for="exampleFormControlFile1">Install Part Image 1</label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1" name="product_img4">
						  </div>
						  <br>
						  <div class="form-group colour">
							<label for="exampleFormControlFile1">Install Part Image 1</label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1" name="product_img5">
						  </div>
						  <br>
						  <div class="form-group colour">
							<label for="exampleFormControlFile1">Install Part Image 3</label>
							<input type="file" class="form-control-file" id="exampleFormControlFile1" name="product_img6">
						  </div>
						  <br>
						  <div class="form-group">
							  <textarea placeholder="Detail of Product 2" class="form-control" rows="5" id="comment" name="descript2"></textarea>
						   </div> 
						  
						  
						</div>
						
                    <br>
                    

                    <button type="submit" name="upload" class="btn btn-success btn-block"  id="registration_form">Upload Product Detail</button>
                    <br><br>
                </form>
            </div>

            <div class="col-3">
            </div>
        </div>
    </div>
	</div>
    <br><br>
    
 
    <script src="file:///F|/Courses/WD Project 5th Semester/js 2/bootstrap.min.js"></script>
    <script src="file:///F|/Courses/WD Project 5th Semester/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    

</body>

</html>