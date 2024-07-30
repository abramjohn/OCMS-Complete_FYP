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

<table class="table table-bordered" align="center" style="background:rgba(0,0,0,0.7);">
		<tr>
			<th style="color: white;">Sr #</th>
			<th style="color: white;">C_Id</th>
			<th style="color: white;">Name</th>
			<th style="color: white;">Invoice No.</th>
			<th style="color: white;">Grand Total</th>
			<th style='color: white;'>Date</th>
			<th style='color: white;'>Time</th>
			<th style='color: white;'>Status</th>
			<th style='color: white;'>Shop Status</th>
			<th style='color: white;'>Delete</th>
			<th style='color: white;'>View Detail</th>
		
		</tr>
		
		<?php
		
			$sr = 1;
		$query = "SELECT * FROM cost_order ORDER BY cos_ord_id DESC";
        $result=mysqli_query($connection,$query);
		while($row = mysqli_fetch_array($result)){
			$invoice = $row['invoice_no'];
			$status = $row['status'];
		?>
		<tr>
			<form method="post" action="delete_function.php">
				<td style="color: white;"><?php echo $sr;?></td>
				<td style="color: white;"><?php echo $row['cos_id'];?></td>
				<td style="color: white;"><?php echo $row['cos_name'];?></td>
				<td style="color: white;"><?php echo $row['invoice_no'];?></td>
				<td style="color: white;"><?php echo $row['grand_total'];?></td>
				<td style="color: white;"><?php echo $row['date'];?></td>
				<td style="color: white;"><?php echo $row['time'];?></td>
				<td>
				<?php
					if($status == 'Completed')
					{
						echo "<p style='color: #61b560' ><b> $status </b></p>";
					}
					else
					{
						echo "<p style='color: #f54242' ><b> $status </b></p>";
					}
					?>
				</td>
				<td style="color: white;"><?php 
				$team = $row['team_id'];
				if($team == 0)
				{
					echo "Buying";
				}
				else
				{
					echo"Installation";
				}
				?></td>
				<td align="center"><?php echo "<a class='btn btn-danger btn-sm' href='delete_function.php?delete_ord=$invoice' >Delete</a>"?></td>
				<td align="center"><?php echo "<a class='btn btn-primary btn-sm' href='admin_invoice_detail.php?invoice=$invoice' >Detail</a>"?></td>
				

			</form>
		</tr>
		
		<?php	
		 $sr++; }
		
		?>
	</table>

<script type="text/javascript">
	
	$(document).ready(function(){
		setInterval(function(){
			$('#show').load('show_inbox.php')
		}, 1500);
	});

</script>

