<?php
session_start();

$database_name = "ocms";
    $connection = mysqli_connect("localhost","root","",$database_name);
if(!isset($_SESSION['admin_id']))
                        {
							header("Location:admin_login.php");
						}
else if(isset($_SESSION['admin_id']))
		{
			if($_SESSION['admin_checker']!=1)
                        {
                            header("Location:admin_home.php");
						}
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    

    <meta charset="utf-8">
    <title>GARAGE ADMIN-AREA</title>
    <link rel="shortcut icon" href="img/NDS.png" >
    
</head>


<body background="img/home-page-background.png" class="respon-img" >


 <?php include 'admin_navbar.php'; ?>

		<br><br><br><br>
   
    <div class="container">
        <br>
        
        <div class="row">
            <div class="col-4">
            </div>

            <div class="col-lg-4 col-sm-12 animated bounceInDown" style="background:rgba(0,0,0,0.7); overflow: hidden;">
                <br>
                <div class="text" align="center" style="color: white">
            <h2>ADD SUB-ADMIN</h2>
        </div>
                <form id="registration_form" action="admin_login.php" method="post">
                    <br>
                   
                    
                    <input class="form-control" type="text" name="name"  placeholder="Name"  id="form_username" aria-label="Username" aria-describedby="basic-addon1">
                   <span class="error_form" id="username_error_message" style="color: #D4393B"></span>
                    <br><br>
                    
                    
                    <input class="form-control" type="text" name="email" placeholder="Email" id="form_email" onFocusOut="checkname();" aria-label="Username" aria-describedby="basic-addon1">
                   <span class="error_form" id="email_error_message" style="color: #D4393B"></span>
                    <br><br>
                    
                    
                    <input class="form-control" type="password" name="password"  placeholder="Password" id="form_password" aria-label="Username" aria-describedby="basic-addon1">
                 <span class="error_form" id="password_error_message" style="color: #D4393B"></span>
                  <br><br>
                  
                  
                    <input class="form-control" type="password" name="cpassword"  placeholder="Confirm Password"  id="form_retype_password" aria-label="Username" aria-describedby="basic-addon1" >
                   <span class="error_form" id="retype_password_error_message" style="color: #D4393B"></span>
                    <br><br>
                   
                    
                    <input class="form-control" type="text" name="contact" placeholder="Contact No." id="form_phone" aria-label="Username" aria-describedby="basic-addon1">
                     <span class="error_form" id="phone_error_message" style="color: #D4393B"></span>
                     
                    <input type="hidden" name="admin_checker" value="0">
                    <input type="hidden" name="designation" value="Sub-Admin">

                    <br><br>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" id="chk" required>
                           <div style="color: #BBBBBB">Agree terms & conditions</div> <br>
                          </label>
                    </div>

                    <br>

                    <button type="submit" name="admin_register" class="btn btn-success btn-block"  id="registration_form"> Register</button>
                    <br><br>
                </form>
            </div>

            <div class="col-4">
            </div>
        </div>
    </div>
    <br><br>

    <script src="file:///F|/Courses/WD Project 5th Semester/js 2/bootstrap.min.js"></script>
    <script src="file:///F|/Courses/WD Project 5th Semester/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    
    
    
</body>

</html>