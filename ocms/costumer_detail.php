<?php
 $conn = mysqli_connect('localhost','root','','store_chk');
if(isset($_POST['upload']))
{
	
	$pname = $_POST['car_name'];
	$price = $_POST['car_model'];
	$filename = $_FILES["car_img"]["name"];
	$tempname = $_FILES["car_img"]["tmp_name"];
	
	if($pname == '' || $price == '' || $filename == ''){
		echo "<script>alert('please fill all the fields!')</script>";
	exit();
	}
	else
	{
		
	
	
	$folder = "products_images/".$filename;
	move_uploaded_file($tempname,$folder);
	
		
	$query = "INSERT INTO cars (car_name,car_model,car_img) VALUES ('{$pname}','{$price}','{$folder}')";
	$data = mysqli_query($conn, $query);
	}
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
<link rel="shortcut icon" href="image/NDS.png" >
<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    

    <meta charset="utf-8">
    <title>The Garage</title>
    <link rel="shortcut icon" href="image/NDS.png" >
    
</head>


<body background="image/2015_ford_mustang_convertible_18_1920x1080.jpg" class="respon-img" >

<?php include 'Navbar.php'; ?>
		<br><br><br><br>
   
    <div class="container">
        <br>
        
        <div class="row">
            <div class="col-4">
            </div>

            <div class="col-lg-4 col-sm-12 animated bounceInDown" style="background:rgba(0,0,0,0.8); overflow: hidden;">
                <br>
                <div class="text" align="center" style="color: white">
            <h2>YOUR DETAIL</h2>
        </div>
                <form id="registration_form" action="login.php" method="post">
                    <br>
                    <p class="txtfeild">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="name"  placeholder="Name"  aria-label="Username" aria-describedby="basic-addon1">
					</p>
                    <br>
                    <p class="txtfeild">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="text" name="email" placeholder="Email"  aria-label="Username" aria-describedby="basic-addon1">
					</p>
                     <br>
                    <p class="txtfeild">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="text" name="contact" placeholder="Contact No." aria-label="Username" aria-describedby="basic-addon1">
					</p>
                     
                    <br>
                    <p class="txtfeild">
                    <i class="fa fa-address-card-o" aria-hidden="true"></i>
                    <input type="password" name="address"  placeholder="Address"  aria-label="Username" aria-describedby="basic-addon1">
					</p>
               		<br>
                	<p class="txtfeild">
                    <i class="fa fa-location-arrow" aria-hidden="true"></i>
                    <input type="text" name="city"  placeholder="City"  aria-label="Username" aria-describedby="basic-addon1">
					</p>
                    <br>
                    <p class="txtfeild">
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <input type="text" name="postalcode"  placeholder="Postal Code"  aria-label="Username" aria-describedby="basic-addon1">
					</p>
                    <br>
                   
                   
                   

                    <br><br>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" id="chk" required>
                           <div style="color: #BBBBBB">Agree terms & conditions</div> <br>
                          </label>
                    </div>

                    <br>

                    <button type="submit" name="register" class="btn btn-success btn-block"  id="registration_form">GENERATE INVOICE</button>
                    <br><br>
                </form>
            </div>

            <div class="col-4">
            </div>
        </div>
    </div>
    <br><br>
    
 <?php include 'Footer.php'; ?>
    <script src="file:///F|/Courses/WD Project 5th Semester/js 2/bootstrap.min.js"></script>
    <script src="file:///F|/Courses/WD Project 5th Semester/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    
    
    
</body>

</html>