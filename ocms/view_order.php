<?php
 $connection = mysqli_connect('localhost','root','','ocms');
session_start();

		  				
  if(!isset($_SESSION['id']))
  {
	header("Location:login.php");
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
<script type="text/javascript" language="javascript" src="validation javascripts/script.js"></script>
<script src="validation javascripts/jquery 2.2.0.min.js"></script>
<script src="validation javascripts/sweetalert.min.js"></script>

<head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Orbitron" />

<meta charset="utf-8">
<title>GARAGE ADMIN-AREA</title>
<link rel="shortcut icon" href="img/NDS.png" >
</head>

<body background="image/main2.jpg" class="respon-img">

<?php include 'Navbar.php'; ?>
 <br><br><br><br><br><br><br><br><br><br>

<div class="container">
	
	

	<table class="table table-bordered" align="center" style="background:rgba(0,0,0,0.7);">

		
		<tr>
			<th style="color: white;">Sr #</th>
			<th style="color: white;">Name</th>
			<th style="color: white;">Invoice No.</th>
			<th style="color: white;">Grand Total</th>
			<th style='color: white;'>Date</th>
			<th style='color: white;'>Time</th>
			<th style='color: white;'>Status</th>
			<th style='color: white;'>Shop Status</th>
			<th style='color: white;'>View Detail</th>
		
		</tr>
		<?php
		
			$cos_id = $_SESSION['id'];
			$sr = 1;
		$query = "SELECT * FROM cost_order WHERE cos_id = '$cos_id'";
        $result=mysqli_query($connection,$query);
		while($row = mysqli_fetch_array($result)){
			$invoice = $row['invoice_no'];
			$status = $row['status'];
		?>
		<tr>
			<form method="post" action="delete_function.php">
				<td style="color: white;"><?php echo $sr;?></td>
				<td style="color: white;"><?php echo $row['cos_name'];?></td>
				<td style="color: white;"><?php echo $row['invoice_no'];?></td>
				<td style="color: white;"><?php echo $row['grand_total'];?></td>
				<td style="color: white;"><?php echo $row['date'];?></td>
				<td style="color: white;"><?php echo $row['time'];?></td>
				<td ><?php
					if($status == 'Completed')
					{
						echo "<p style='color: #61b560' ><b> $status </b></p>";
					}
					else
					{
						echo "<p style='color: #f54242' ><b> $status </b></p>";
					}
					?></td>
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
				<td align="center"><?php echo "<a class='btn btn-primary btn-sm' href='invoice_detail.php?invoice=$invoice' >Detail</a>"?></td>

			</form>
		</tr>
		
		<?php	
		 $sr++; }
		
		?>
	</table>
	
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
 <?php include 'Footer.php'; ?>
</body>
</html>
