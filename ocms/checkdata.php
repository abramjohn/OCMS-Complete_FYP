<?php
 $connect = mysqli_connect('localhost','root','','ocms');

if(isset($_POST['user_name']))
{
 $name=$_POST['user_name'];

 $checkdata="SELECT * FROM register WHERE email='$name'";

 $query=mysqli_query($connect, $checkdata);

 if(mysqli_num_rows($query)>0)
 {
  echo "E-mail Already Register";
 }
 else
 {
  echo "E-mail Available";
 }
 exit();
}
?>




<?php
 $connect = mysqli_connect('localhost','root','','ocms');

if(isset($_POST['user_email']))
{
 $eamil=$_POST['user_email'];

 $checkdata="SELECT * FROM register WHERE email='$eamil'";

 $query=mysqli_query($connect, $checkdata);

 if(mysqli_num_rows($query)>0)
 {
  echo "E-mail Already Register check";
 }
 else
 {
  echo "E-mail Available check";
 }
 exit();
}
?>



<?php
 $connect = mysqli_connect('localhost','root','','ocms');


if(isset($_POST['user_pass']))
{
 $password=$_POST['user_pass'];
 $epassword=sha1($password);
	

		$user = $_SESSION['email'];
		$query = "SELECT *  FROM register WHERE email='{$user}'";
        $result=mysqli_query($connect,$query);
        $row=mysqli_fetch_assoc($result);
    
        $db_id = $row['id'];
        $db_name = $row['name'];
        $db_password = $row['password'];
	


 if($epassword == $db_password)
 {
  echo "Correct Password";
 }
 else
 {
  echo "Incorrect Password";
 }
 exit();
}
?>







<!-- forget password php -->
   <?php

    $connection = mysqli_connect('localhost','root','','ocms');
	

    if(isset($_POST['forget_pass']))
    {
        
        $email = $_POST['email'];
        $contact = $_POST['contact'];
        
		
		$new_password = $_POST['new_password'];
        $crypt_password2=sha1($new_password);
		
		$con_password = $_POST['con_password'];
        $crypt_password3=sha1($con_password);
		$error = '';
		
    
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
    
       
		if($contact == $db_contact && $email == $db_email)
        {
			
			$q = "UPDATE register SET password = '$crypt_password2', cpassword = '$crypt_password3' WHERE email = '$email'";
			  $result = mysqli_query($connection,$q);
			
            unset($_SESSION["id"]);
			 header("Location:login.php");
			
           
				
        }
			else{
				$error = 'INCORRECT CONTACT 0R EMAIL';
				$_SESSION["forget"] = $error;
				echo '<script>window.location="forget_pssword.php"</script>';
				
			}
			
		
    }
    ?>


<!-- change password php -->
   <?php
	session_start();
    $connection = mysqli_connect('localhost','root','','ocms');
	

    if(isset($_POST['change_pass']))
    {
        $user = $_SESSION['email'];
		
        $old_password = $_POST['old_password'];
        $crypt_password1=sha1($old_password);
		
		$new_password = $_POST['new_password'];
        $crypt_password2=sha1($new_password);
		
		$con_password = $_POST['con_password'];
        $crypt_password3=sha1($con_password);
		$error2 = '';
		
    
        $query = "SELECT *  FROM register WHERE email='{$user}'";
        $result=mysqli_query($connection,$query);
        $row=mysqli_fetch_assoc($result);
    
        $db_id = $row['id'];
        $db_name = $row['name'];
        $db_email = $row['email'];
        $db_address = $row['address'];
        $db_city = $row['city'];
        $db_contact = $row['contact'];
        $db_password = $row['password'];
    
       
		if($crypt_password1 == $db_password && $user == $db_email)
        {
			
			$q = "UPDATE register SET password = '$crypt_password2', cpassword = '$crypt_password3' WHERE email = '$user'";
			  $result = mysqli_query($connection,$q);
			
            unset($_SESSION["id"]);
			 header("Location:login.php");
			
           
				
        }
			else{
				$error2 = 'INCORRECT PASSWORD';
				
			}
			
		
    }
    ?>




<!-- contact message in db -->


<?php
	
			
 $conn = mysqli_connect('localhost','root','','ocms');
	
if(isset($_POST['complain']))
{
	$date = date('d/m/Y');		
	$time = date('H:i:s');
	$cos_name = $_POST['cos_name'];
	$cos_email = $_POST['cos_email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];
	$com_status = $_POST['status'];

	
	if($cos_name == '' || $cos_email == '' || $message == '' || subject == ''){
		echo "<script>alert('please fill all the fields!')</script>";
		echo '<script>window.location="contactus.php"</script>';
	
	}
	else
	{
		
	
	
		
	$query = "INSERT INTO complains (cos_name, cos_email,subject, message, status, date, time ) VALUES ('{$cos_name}','{$cos_email}','{$subject}','{$message}','{$com_status}','{$date}','{$time}')";
	$data = mysqli_query($conn, $query);
		header("Location: contactus.php");
	}
}

?>



<?php

$connection = mysqli_connect('localhost','root','','ocms');


//select car brand //
   if (isset($_POST['add_car_brand'])) {
			$brand=$_POST['brand_nam'];
			$car=$_POST['car'];
			$_SESSION['car']=$car;
						$q = "SELECT * FROM brands WHERE brand_name = '$brand'";
						$result = mysqli_query($connection,$q);
						while($row = mysqli_fetch_array($result)){
							$brnd_id = $row['brand_id'];
							$brnd_name =	$row['brand_name'];
							
            					$_SESSION['brand_id']=$brnd_id;
            					$_SESSION['brand_name']=$brnd_name;
            					
							header("Location:vehicle_model.php");
						}
   }


//select jeep brand //
if (isset($_POST['add_jeep_brand'])) {
			$brand=$_POST['brand_nam'];
			$car=$_POST['jeep'];
			$_SESSION['car']=$car;
						$q = "SELECT * FROM brands WHERE brand_name = '$brand'";
						$result = mysqli_query($connection,$q);
						while($row = mysqli_fetch_array($result)){
							$brnd_id = $row['brand_id'];
							$brnd_name =	$row['brand_name'];
							
            					$_SESSION['brand_id']=$brnd_id;
            					$_SESSION['brand_name']=$brnd_name;
            					
							header("Location:vehicle_model.php");
						}
   }


//select categories //
 if (isset($_POST['add_category'])) {
			$part_name=$_POST['part_name'];
						$q = "SELECT * FROM parts_categories WHERE prt_name = '$part_name'";
						$result = mysqli_query($connection,$q);
						while($row = mysqli_fetch_array($result)){
							$prt_id=$row['prt_id'];
							$prt_title=$row['prt_name'];
			
							session_start();
            					$_SESSION['prt_id'] = $prt_id;
								$_SESSION['prt_name'] = $prt_title;
							header("Location:shop_product.php");
						}
   }
 
//session cart check //  
 if (isset($_POST['unset_cart'])) {
	 unset($_SESSION["cart"]);
	 echo '<script>window.location="vehicle_model.php"</script>';
 }

?>




