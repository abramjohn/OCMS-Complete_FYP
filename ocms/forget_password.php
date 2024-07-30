

   <?php
session_start();
   
    ?>


<!doctype html>
<html>
<link rel="stylesheet" href="css 1/bootstrap.css" type="text/css">
<link rel="stylesheet" href="js 1/bootstrap.js" type="text/css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="Mycss/my FYP.css" type="text/css">
<link rel="stylesheet" href="Mycss/animatedcss.css" type="text/css">
<script type="text/javascript" language="javascript" src="validation javascripts/jquery.js"></script>
<script type="text/javascript" language="javascript" src="validation javascripts/script -forgot_change.js"></script>
<script src="validation javascripts/jquery 2.2.0.min.js"></script>
<script src="validation javascripts/sweetalert.min.js"></script>

<head>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <script>
        function hn() {
            window.open("register.php", "_self");
        }

    </script>
    
    
    <meta charset="utf-8">
    <title>The Garage</title>
    <link rel="shortcut icon" href="image/NDS.png" >
</head>

<body background="image/mclaren-senna-015.jpg" class="respon-img" >

 <?php include 'Navbar.php'; ?>
   
   
    
    <br><br><br><br>
     
    <div class="container">
        <br><br><br>
        <div class="row">
          <div class="col-4">
            </div>
           <div class="col-lg-4 col-sm-12 animated bounceInDown" style="background:rgba(0,0,0,0.8)">
                <br>
                <div class="text" style="color: white" align="center">
            <h3>Forget Password</h3>
        </div>
                <form class="" id="registration_form" action="checkdata.php" method="post">
              
               
                <br>

                <p class="txtfeild">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text"  name="email" placeholder="Email"  style="width: 90%"  aria-label="Username" aria-describedby="basic-addon1">
                </p>
                <span class="error_form" id="email_error_message" style="color: #D4393B"></span>
                <br>
                <p class="txtfeild">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text"  name="contact" placeholder="Phone No."  style="width: 90%"  aria-label="Username" aria-describedby="basic-addon1">
                </p>
                <br>

                <p class="txtfeild">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password"  name="new_password" placeholder="New Password" style="width: 90%" id="form_password" aria-label="Username" aria-describedby="basic-addon1">
                </p>
                <span class="error_form" id="password_error_message" style="color: #D4393B"></span>
                  	
                <br>

                <p class="txtfeild">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password"  name="con_password" placeholder="Confrim Password" style="width: 90%" id="form_retype_password" aria-label="Username" aria-describedby="basic-addon1">
                </p>
                <span class="error_form" id="retype_password_error_message" style="color: #D4393B"></span>
                  
                <br><br>
                
                <div class="span2">
                    <br>
                    <p><button type="submit" name="forget_pass"  class="btn btn-success btn-block" id="registration_form">Change Password</button></p>
                    
                    <br>
                    <br>
                </div>
                </form>
            </div>
            
            <div class="col-4">
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>

 <?php include 'Footer.php'; ?>
    <script src="js 2/bootstrap.min.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.min.js"></script>
</body>

</html>
