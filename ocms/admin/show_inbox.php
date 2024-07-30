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


	 $query = "SELECT * FROM complains ORDER BY com_id DESC";
            $result = mysqli_query($con,$query);
	
	 while ($row = mysqli_fetch_array($result)) {
					$com_id=$row['com_id'];
					$cos_name=$row['cos_name'];
					$cos_email=$row['cos_email'];
					$subject=$row['subject'];
					$message=$row['message'];
					$status=$row['status'];
					$date=$row['date'];
		 
	
	?>

<table class="table table-bordered" align="center" style="background:rgba(0,0,0,0);">
		
		
		<tr>
			<td align="left" style="color: white; width: 20%; border: hidden;">
		<?php
		if($status == 'Unread')
		{
			echo"<p><b>$cos_name</b></p>";
		}
		else
		{
			echo"<p>$cos_name</p>";
		}
		?>
			
		</td>
		
		<td align="left" style="color: white;  width: 50%; border: hidden;">
		<?php
		if($status == 'Unread')
		{
			echo"<p><b>$subject</b></p>";
		}
		else
		{
			echo"<p>$subject</p>";
		}
		?>
			
		</td>
		<td align="left" style="color: white;  width: 10%; border: hidden;">
			<?php
		if($status == 'Unread')
		{
			echo"<p><b>$date</b></p>";
		}
		else
		{
			echo"<p>$date</p>";
		}
		?>
			
		</td>
		<td align="center" style="width: 6%; border: hidden;">
		<?php
		if($status == 'Unread')
		{
			echo"<i class='fa fa-check' style='color: #7C7C7C;' aria-hidden='true'></i>";
		}
		else
		{
			echo"<i class='fa fa-check' style='color: #61b560;' aria-hidden='true'></i>";
		}
		?>
			
		</td>
		
			
				<td style="width: 7%; border: hidden;">
				 	<form method="post" action="delete_function.php">
				 	<input type="hidden" value="Read" name="status">
				 	<input type="hidden" value="<?php echo $com_id; ?>" name="com_id">
					 <input type="submit" name="read" class="btn btn-info btn-sm" value="Read">
					 </form>	
				</td>
				<td style="width: 7%; border: hidden;">
					 <form method="post" action="delete_function.php">
				 	<input type="hidden" value="<?php echo $com_id; ?>" name="com_id">
					 <input type="submit" name="del" class="btn btn-danger btn-sm" value="Delete">
					 </form>
				</td>
		</tr>
	
	</table>
<hr style="background-color: #61b560">


	<?php
	 }
	
	?>