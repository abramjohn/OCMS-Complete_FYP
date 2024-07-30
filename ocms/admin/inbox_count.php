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



$status = 'Unread';
		$q = "SELECT * FROM complains WHERE status = '$status'";
						$result2 = mysqli_query($connection,$q);
						$data = array();
					if(mysqli_num_rows($result2) > 0)
					{
						while($row = mysqli_fetch_assoc($result2)){
							$data[] = $row;
						}			
					}
							$count_mess = count($data);
							
							echo "$count_mess"

?>