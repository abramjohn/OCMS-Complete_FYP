<!-- getting data from register.php registeration form -->
   <?php
session_start();
    $connection = mysqli_connect('localhost','root','','ocms');
    if(isset($_POST['admin_register']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $password=sha1($password);
        $contact=$_POST['contact'];
		$cpassword=$_POST['cpassword'];
        $cpassword=sha1($cpassword);
		$admin_checker=$_POST['admin_checker'];
		$designation=$_POST['designation'];
        
        $query="INSERT INTO admin_register (name,email,password,cpassword,contact,admin_checker,designation) VALUES('{$name}','{$email}','{$password}','{$cpassword}','{$contact}','{$admin_checker}','{$designation}')";
        
        $result=mysqli_query($connection,$query);
		
		header("Location:admin_home.php");
       
    }

	
?>
   
<!-- getting data to login -->
   <?php
	
    $connection = mysqli_connect('localhost','root','','ocms');
    if(isset($_POST['admin_login']))
    {
	
						
		//login//
        $email=$_POST['email'];
        $password = $_POST['password'];
        $crypt_password=sha1($password);
		$error = '';
		$error2 = '';
    
        $query = "SELECT *  FROM admin_register WHERE email='{$email}'";
        $result=mysqli_query($connection,$query);
        $row=mysqli_fetch_assoc($result);
    
        $db_id = $row['admin_id'];
        $db_name = $row['name'];
        $db_email = $row['email'];
        $db_contact = $row['contact'];
        $db_admin_checker = $row['admin_checker'];
        $db_designation = $row['designation'];
        $db_password = $row['password'];
    
       
		if($crypt_password == $db_password && $email == $db_email)
        {
			
            $_SESSION['admin_id']=$db_id;
            $_SESSION['name']=$db_name;
            $_SESSION['email']=$db_email;
            $_SESSION['contact']=$db_contact;
            $_SESSION['admin_checker']=$db_admin_checker;
            $_SESSION['designation']=$db_designation;
            $_SESSION['password']=$password;
            
          header("Location:admin_home.php");
				
        }
			else{
				$error = 'Invalid Email';
				$error2 = 'Invalid Password';
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
<script type="text/javascript" language="javascript" src="validation javascripts/script_Login.js"></script>
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
<br><br><br><br><br><br><br>
<div align="center">
	<h1>WELCOME TO THE GARAGE</h1>
    <h3>ADMIN AREA</h3>
</div>
   
   
    
    <br><br>
     
    <div class="container">
        <br><br><br>
        <div class="row">
          <div class="col-4">
            </div>
           <div class="col-lg-4 col-sm-12 animated bounceInDown" style="background:rgba(0,0,0,0.8)">
                <br>
                <div class="text" style="color: white" align="center">
            <h3>Login</h3>
        </div>
                <form id="registration_form" action="admin_login.php" method="post">
                    <br>
                    <div class="form-group">
            
                
               <input class="form-control" type="text" name="email" placeholder="Email"  id="form_email" aria-label="Username" aria-describedby="basic-addon1">
            
               
                <br>

                
                
                <input class="form-control" type="password"  name="password" placeholder="Password"  id="form_password" aria-label="Username" aria-describedby="basic-addon1">
              
                <br>
                <a href="admin_forget_password.php" class="hover-border" style="text-decoration: none; color: white; text-transform: none;">Forget Password</a>
                <br
               
         
                    <br><br>
                    <p><button type="submit" name="admin_login"  class="btn btn-success btn-block" id="registration_form">Login</button></p>
                    
                    <br>
                 
                </div>
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
