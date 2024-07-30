<?php
    session_start();
    $database_name = "ocms";
    $con = mysqli_connect("localhost","root","",$database_name);

	
?>


<!doctype html>
<html>
<link rel="stylesheet" href="css 1/bootstrap.css" type="text/css">
<link rel="stylesheet" href="js 1/bootstrap.js" type="text/css">
<link rel="stylesheet" href="Mycss/my FYP.css" type="text/css">
<link rel="stylesheet" href="Mycss/animatedcss.css" type="text/css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css" type="text/css">
<script src="validation javascripts/sweetalert.min.js"></script>
<link rel="shortcut icon" href="image/NDS.png" >
<head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>

	function brand() {
            var bran = document.getElementById('bran').value;
			
			if(bran == 'SELECT CATEGORY' )
				{
					swal({
				  title: "Please Select Category",
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
<title>Untitled Document</title>
</head>

<body background="image/RealDash_Virtual_Cockpit.jpg" class="respon-img">
<?php include 'Navbar.php'; ?>
<br><br><br><br><br><br><br><br><br><br><br><br>

<div class="container">

	<div class="row">
		<div class="col-lg-4"></div>


		<div class="col-lg-4 animated fadeInLeftBig">
				<h5 class="list-group-item heading-txt" style="background-color: rgba(0,0,0,0); "><b>Categories</b></h5>
				<br>
				   <form onsubmit="return brand()" action="checkdata.php" method="post">
							<br>
							<p class="glyphIconMethod"  style="width: 100%">
							<select id="bran" name="part_name" style="text-transform: uppercase; width: 100%" >
								<option>SELECT CATEGORY</option>

								<?php
								  $sql="SELECT * FROM parts_categories";
								$result=mysqli_query($con, $sql);
								while ($row=mysqli_fetch_array($result)) {
									$prt_id=$row['prt_id'];
									$prt_title=$row['prt_name'];

									?>
									<option><?php echo"$prt_title"?></option>
									<?php
								}
									?>


							</select>
							</p>


							<br>
							<br>


							<input class="btn btn-success btn-block" type="submit" name="add_category" value="GET PRODUCTS">
							<br>
						</form>


					<br>
			</div>
		<div class="col-lg-4"></div>
	</div>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include 'Footer.php'; ?>

</body>
</html>
