<!-- getting data from register.php registeration form -->   
   <?php 
    $connection = mysqli_connect('localhost','root','','ocms');
    if(isset($_POST['register']))
    {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        $password=sha1($password);
        $contact=$_POST['contact'];
        $address=$_POST['address'];
        $city=$_POST['city'];
		$cpassword=$_POST['cpassword'];
        $cpassword=sha1($cpassword);
        
        $query="INSERT INTO register (name,email,password,contact,cpassword,address,city) VALUES('{$name}','{$email}','{$password}','{$contact}','{$cpassword}','{$address}','{$city}')";
        
        $result=mysqli_query($connection,$query);
		
       echo '<script>window.location="login.php"</script>';
    }

	
?>
   
<!-- getting data to login -->
   <?php
    $connection = mysqli_connect('localhost','root','','ocms');
    if(isset($_POST['login']))
    {
        $email=$_POST['email'];
        $password = $_POST['password'];
        $crypt_password=sha1($password);
		$error = '';
		$error2 = '';
    
        $query = "SELECT *  FROM register WHERE email='{$email}'";
        $result=mysqli_query($connection,$query);
        $row=mysqli_fetch_assoc($result);
    
        $db_id = $row['id'];
        $db_name = $row['name'];
        $db_email = $row['email'];
        $db_address = $row['address'];
        $db_city = $row['city'];
        $db_contact = $row['contact'];
        $db_password = $row['password'];
    
       
		if($crypt_password == $db_password && $email == $db_email)
        {
			
			session_start();
            $_SESSION['id']=$db_id;
            $_SESSION['name']=$db_name;
            $_SESSION['email']=$db_email;
            $_SESSION['address']=$db_address;
            $_SESSION['city']=$db_city;
            $_SESSION['contact']=$db_contact;
            $_SESSION['password']=$password;
            
			if (isset($_SESSION["cart"]))
				{
					header("Location:view_cart.php");
				}
			else
				{
					header("Location:Home.php");
				}
			
           
				
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

    <script>
        function hn() {
            window.open("register.php", "_self");
        }

    </script>
    
    
    <meta charset="utf-8">
    <title>The Garage</title>
    <link rel="shortcut icon" href="image/NDS.png" >
</head>

<body background="image/cjjcjc.jpg" class="respon-img" >

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
            <h3>Login</h3>
        </div>
                <form class="" id="registration_form" action="login.php" method="post">
                    <br>
                    
                <p class="txtfeild">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" name="email" value="" placeholder="Email" style="width: 90%" id="form_email" aria-label="Username" aria-describedby="basic-addon1" >
                </p>
               
                <br>

                <p class="txtfeild">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password"  name="password" placeholder="Password" style="width: 90%" id="form_password" aria-label="Username" aria-describedby="basic-addon1">
                </p>
                
                <br>
                <a href="forget_password.php" class="hover-border" style="text-decoration: none; color: white; text-transform: none;">Forget Password</a>
                <br>
                
                <div class="span2">
                    <br>
                    <p><button type="submit" name="login"  class="btn btn-success btn-block" id="registration_form">Login</button></p>
                    <button type="button" class="btn btn-light btn-block" onClick="hn()">Register Now</button>
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
