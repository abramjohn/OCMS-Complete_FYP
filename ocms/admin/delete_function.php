<!-- delete car from data base-->
<?php
session_start();
if(!isset($_SESSION['admin_id']))
                        {
							header("Location:admin_login.php");
						}

 $connection = mysqli_connect('localhost','root','','ocms');

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



if(isset($_POST['delete_brand']))
	{
		$key = $_POST['delete_brand_key'];
		$query = "SELECT *  FROM brands WHERE brand_id='{$key}'";
        $result=mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0)
		{
			$query_delete = "DELETE FROM brands WHERE brand_id='{$key}'";
			$result_delete=mysqli_query($connection,$query_delete);
			
			header("Location: brands_data_display.php");
		}
		
	
		
	}



if(isset($_POST['delete_car']))
	{
		$key = $_POST['delete_car_key'];
		$query = "SELECT *  FROM cars WHERE car_id='{$key}'";
        $result=mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0)
		{
			$query_delete = "DELETE FROM cars WHERE car_id='{$key}'";
			$result_delete=mysqli_query($connection,$query_delete);
			
			header("Location: car_data_display.php");
		}
		
	
		
	}




if(isset($_POST['delete_pro']))
	{
		$key = $_POST['delete_pro_key'];
		$query = "SELECT *  FROM product WHERE id='{$key}'";
        $result=mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0)
		{
			$query_delete = "DELETE FROM product WHERE id='{$key}'";
			$result_delete=mysqli_query($connection,$query_delete);
			
			header("Location: products_data_display.php");
		}
		
	
		
	}





if(isset($_POST['delete_prt']))
	{
		$key = $_POST['delete_prt_key'];
		$query = "SELECT *  FROM parts_categories WHERE prt_id='{$key}'";
        $result=mysqli_query($connection,$query);
        if(mysqli_num_rows($result)>0)
		{
			$query_delete = "DELETE FROM parts_categories WHERE prt_id='{$key}'";
			$result_delete=mysqli_query($connection,$query_delete);
			
			header("Location: categories_data_display.php");
		}
		
		
	}

if(isset($_GET['delete_ord']))
	{
		$key = $_GET['delete_ord'];
		$query = "SELECT *  FROM cost_order WHERE invoice_no='{$key}'";
		$query2 = "SELECT *  FROM item_order WHERE invoice_no='{$key}'";
        $result=mysqli_query($connection,$query);
        $result2=mysqli_query($connection,$query2);
        if(mysqli_num_rows($result)>0)
		{
			$query_delete = "DELETE FROM cost_order WHERE invoice_no='{$key}'";
			$result_delete=mysqli_query($connection,$query_delete);
			
			
		}
		if(mysqli_num_rows($result2)>0)
		{
			$query_delete2 = "DELETE FROM item_order WHERE invoice_no='{$key}'";
			$result_delete2=mysqli_query($connection,$query_delete2);
			
			header("Location: admin_view_order.php");
		}
		
		
	}


if (isset($_POST['product_filter'])) {
			$car_id=$_POST['car_id'];
			$category_id=$_POST['category_id'];
			$shop_cate_id=$_POST['shop_cate_id'];
			$_SESSION['car_id'] = $car_id;
			$_SESSION['category_id'] = $category_id;
			$_SESSION['shop_cate_id'] = $shop_cate_id;
	header("Location: products_data_display.php");
}

if (isset($_POST['brand_filter'])) {
			$brand_name = $_POST['brand_name'];
			
			$_SESSION['brand_name'] = $brand_name;
			
	header("Location: product_data_filter.php");
}



?>

<!-- filter for add product -->
<?php
if (isset($_POST['car_filter'])) {
			$car_id=$_POST['car_id'];
			$car_option=$_POST['car_option'];
			
	$q = "SELECT * FROM cars WHERE car_id = '$car_id'";
						$result = mysqli_query($connection,$q);
						while($row = mysqli_fetch_array($result)){
							
							$car_id_pro =	$row['car_id'];
							$car_name =	$row['car_name'];
							$car_model = $row['car_model'];
							$car_type = $row['veh_type'];
							
            					
            				$_SESSION['car_id_pro']=$car_id_pro;
            				$_SESSION['car_name']=$car_name;
            				$_SESSION['car_type']=$car_type;
            				$_SESSION['car_model']=$car_model;
								
							
						}
	header("Location: product_data_insert.php");
}

if (isset($_POST['brand_filter_pro'])) {
			$brand_name = $_POST['brand_name'];
			$type = $_POST['type'];
			
			$_SESSION['brand_name'] = $brand_name;
			$_SESSION['type'] = $type;
			
	header("Location: car_filter_product_add.php");
}



?>




<!-- admin forget password php -->
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
			 header("Location: admin_login.php");
			
           
				
        }
			else{
				$error = 'INCORRECT PASSWORD';
				
			}
			
		
    }
    ?>


<!-- admin change password php -->
   <?php

    $connection = mysqli_connect('localhost','root','','ocms');
	$user = $_SESSION['email'];

    if(isset($_POST['change_pass']))
    {
        
        $old_password = $_POST['old_password'];
        $crypt_password1=sha1($old_password);
		
		$new_password = $_POST['new_password'];
        $crypt_password2=sha1($new_password);
		
		$con_password = $_POST['con_password'];
        $crypt_password3=sha1($con_password);
		$error = '';
		
    
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
			 header("Location: admin_login.php");
			
           
				
        }
			else{
				$error = 'INCORRECT PASSWORD';
				
			}
			
		
    }
    ?>

<!-- raed customer_comments php -->
<?php
$conn = mysqli_connect('localhost','root','','ocms');

if(isset($_POST['read']))
		{
			$status = $_POST['status'];
			$mail = $_POST['com_id'];
			
			$querya = "SELECT * FROM complains WHERE com_id = '$mail'";
            $result = mysqli_query($conn,$querya);
			$row=mysqli_fetch_assoc($result);
			$cos_email=$row['com_id'];
			$_SESSION['cos_email'] = $cos_email;
			
			
			$query = "UPDATE complains SET status = '$status' WHERE com_id = '$mail'";
			$data = mysqli_query($conn, $query);
				header("Location: customer_comments.php");
		}

?>


<!-- delete customer_comments php -->
<?php
$conn = mysqli_connect('localhost','root','','ocms');

if(isset($_POST['del']))
		{
			
			$id = $_POST['com_id'];
			
			$query = "SELECT *  FROM complains WHERE com_id = '$id'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)>0)
		{
			$query_delete = "DELETE FROM complains WHERE com_id = '$id'";
			$result_delete=mysqli_query($conn,$query_delete);
			
			header("Location: customer_care.php");
		}
		
				
		}

?>
