<?php
session_start();
$database_name = "ocms";
    $con = mysqli_connect("localhost","root","",$database_name);


if(!isset($_SESSION['admin_id']))
  {
	header("Location:admin_login.php");
  }

//check admin is exist in the database//	
 if(isset($_SESSION['admin_id']))
 {
	 $id_admin = $_SESSION['admin_id'];
	 
	 $query= "SELECT * FROM admin_register WHERE admin_id = '$id_admin'";
	 $result = mysqli_query($con,$query);
	 $row=mysqli_fetch_assoc($result);
    
        $db_id = $row['admin_id'];
	 
	 if($db_id != $id_admin)
	 {
		 
		unset($_SESSION["name"] , $_SESSION["designation"] , $_SESSION["admin_id"] , $_SESSION["email"] , $_SESSION["contact"]);
		 header("Location:admin_login.php");
	 }
	 
 }

if (isset($_POST["status_val"])){
			  $invoice_no = $_POST["invoice_no"];
			  $status = $_POST["status"];
			  $q = "UPDATE cost_order SET status = '$status' WHERE invoice_no = '$invoice_no'";
			  $result = mysqli_query($con,$q);
							
				  header("Location:admin_view_order.php");
			  
		  }


?>
