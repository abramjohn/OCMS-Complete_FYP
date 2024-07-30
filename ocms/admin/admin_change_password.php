
   <?php
session_start();
$connection = mysqli_connect('localhost','root','','ocms');
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
		
		function check()
		{
			var old_pass = document.getElementById('old').value;
			var new_pass = document.getElementById('new').value;
			var confirm_pass = document.getElementById('confrim').value;
			
			if(old_pass == '' || new_pass == '' || confirm_pass == '')
				{
					swal({
						  title: "Please Fill Correctly",
						  text: "Inserting Worng Data!!",
						  icon: "error",
						  button: "OK",
						});
					return false;
				}
			else if(new_pass == confirm_pass)
				{
					swal({
						  title: "Password Not Matching",
						  text: "Inserting Worng Data!!",
						  icon: "error",
						  button: "OK",
						});
					return false;
				}
			else
				{
					return true;
				}
		}

    </script>
    
    
    <meta charset="utf-8">
    <title>GARAGE ADMIN-AREA</title>
<link rel="shortcut icon" href="img/NDS.png" >
</head>

<body background="img/home-page-background.png" class="respon-img" >

<?php include 'admin_navbar.php'; ?>

   
   
    
    <br><br><br><br>
     
    <div class="container">
        <br><br><br>
        <div class="row">
          <div class="col-4">
            </div>
           <div class="col-lg-4 col-sm-12 rounded animated bounceInDown" style="background:rgba(0,0,0,0.7)">
                <br>
                <div class="text" style="color: white" align="center">
            <h3>Change Password</h3>
        </div>
                <form onsubmit="return check()" id="registration_form" action="delete_function.php" method="post">
              
               
                <br>

                <p class="txtfeild">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password"  name="old_password" placeholder="Old Password" id="old" style="width: 90%"  aria-label="Username" aria-describedby="basic-addon1">
                </p>
                <br>

                <p class="txtfeild">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password"  name="new_password" placeholder="New Password" style="width: 90%" id="new" aria-label="Username" aria-describedby="basic-addon1">
                </p>
                  	
                <br>

                <p class="txtfeild">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password"  name="con_password" placeholder="Confrim Password" style="width: 90%" id="confrim" aria-label="Username" aria-describedby="basic-addon1">
                </p>
                  
                <br><br>
                
                <div class="span2">
                    <br>
                    <p><button type="submit" name="change_pass"  class="btn btn-success btn-block" id="registration_form">Change Password</button></p>
                    
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

 
    <script src="js 2/bootstrap.min.js"></script>
    <script src="jquery-ui-1.12.1/jquery-ui.min.js"></script>
</body>

</html>
