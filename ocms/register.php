



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
    <title>The Garage</title>
    <link rel="shortcut icon" href="image/NDS.png" >
    
</head>


<body background="image/Original image_ 1920x1080.jpg" class="respon-img" >

<?php include 'Navbar.php'; ?>
		<br><br><br><br>
    <form id="registration_form" action="login.php" method="post">
    <div class="container  animated bounceInDown" style="background:rgba(0,0,0,0.7); overflow: hidden;">
        <br>
         <div class="text" align="center" style="color: white">
            <h2>REGISTER NOW</h2>
        </div>
        <div class="row">
            <div class="col-2">
            </div>

            <div class="col-lg-4 col-sm-12" >
                <br>
               
               
                    <br>
                    <p class="txtfeild">
                    <i class="fa fa-user" aria-hidden="true"></i>
                    <input type="text" name="name"  placeholder="Name"  id="form_username" aria-label="Username" aria-describedby="basic-addon1">
					</p>
                   	<span class="error_form" id="username_error_message" style="color: #D4393B"></span>
                    <br>
                    <p class="txtfeild">
                    <i class="fa fa-envelope-o" aria-hidden="true"></i>
                    <input type="text" name="email" placeholder="Email" id="form_email" onFocusOut="checkname();" aria-label="Username" aria-describedby="basic-addon1">
					</p>
                   	<span class="error_form" id="email_error_message" style="color: #D4393B"></span>
                    <br>
                    <p class="txtfeild">
                    <i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" name="password"  placeholder="Password" id="form_password" aria-label="Username" aria-describedby="basic-addon1">
					</p>
                 	<span class="error_form" id="password_error_message" style="color: #D4393B"></span>
                  	<br>
                   	<p class="txtfeild">
                   	<i class="fa fa-lock" aria-hidden="true"></i>
                    <input type="password" name="cpassword"  placeholder="Confirm Password"  id="form_retype_password" aria-label="Username" aria-describedby="basic-addon1" >
					</p>
                   	<span class="error_form" id="retype_password_error_message" style="color: #D4393B"></span>
                    <br>
                    <p class="txtfeild">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="text" name="contact" placeholder="Contact No." id="form_phone" aria-label="Username" aria-describedby="basic-addon1">
					</p>
                     <span class="error_form" id="phone_error_message" style="color: #D4393B"></span>
                     <br>
                    <p class="txtfeild">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="text" name="address" placeholder="Address" id="form_phone" aria-label="Username" aria-describedby="basic-addon1">
					</p>
                     <span class="error_form" id="phone_error_message" style="color: #D4393B"></span>
                     <br>
                    <p class="txtfeild">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                    <input type="text" name="city" placeholder="City" id="form_phone" aria-label="Username" aria-describedby="basic-addon1">
					</p>
                     <span class="error_form" id="phone_error_message" style="color: #D4393B"></span>

                    <br><br>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" value="" id="chk" required>
                           <div style="color: #BBBBBB">Agree terms & conditions</div> <br>
                          </label>
                    </div>

                    
                
            </div>

            <div class="col-lg-4 col-sm-12">
            <br><br><br>
            	<div style="margin-left: 10px">
					<h3 style="color: #CF9924" align="center">Terms & Conditions</h3>
					<br>
					<p style="color: white"><i class="fa fa-check" style="color: #61b560;" aria-hidden="true"></i> Please insert the correct information.</p>
					<br>
					<p style="color: white"><i class="fa fa-check" style="color: #61b560;" aria-hidden="true"></i> The Garage will contact you on this information you registered.</p>
					<br>
					<p style="color: white"><i class="fa fa-check" style="color: #61b560;" aria-hidden="true"></i> if you enter the worng information you are unable to get your order or installation process.</p>
					<br>
					<p style="color: white"><i class="fa fa-check" style="color: #61b560;" aria-hidden="true"></i> This information will be use by the garage only.</p>
            	</div>
            </div>
            
            <div class="col-2">
            </div>
        </div>
        
        <br>
		<div align="center">
        <button type="submit" name="register" class="btn btn-success btn-block" style="width: 30%" id="registration_form"> Register</button>
        </div>
        <br><br>
        
    </div>
    
    </form>
    <br><br>
    
 <?php include 'Footer.php'; ?>
    <script src="file:///F|/Courses/WD Project 5th Semester/js 2/bootstrap.min.js"></script>
    <script src="file:///F|/Courses/WD Project 5th Semester/jquery-ui-1.12.1/jquery-ui.min.js"></script>
    
    
    
</body>

</html>