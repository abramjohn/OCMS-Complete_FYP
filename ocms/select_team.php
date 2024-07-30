
<?php
    
    $database_name = "ocms";
    $con = mysqli_connect("localhost","root","",$database_name);
	session_start();
	
    
?>

<?php
 

	if(!isset($_SESSION['id']))
                        {
							header("Location:login.php");	
						}
?>

<!doctype html>
<html>
<link rel="stylesheet" href="js 1/bootstrap.js" type="text/css">
<link rel="stylesheet" href="css 1/bootstrap.css" type="text/css">
<link rel="stylesheet" href="Mycss/my FYP.css" type="text/css">
<link rel="stylesheet" href="Mycss/animatedcss.css" type="text/css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css" type="text/css">
<script src="validation javascripts/sweetalert.min.js"></script>
<link rel="shortcut icon" href="image/NDS.png" >
<head>
<meta charset="utf-8">
<title>Untitled Document</title>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link href="animination/aos.css" rel="stylesheet">
<script src="animination/aos.js"></script>
  <script>
	
	  function check_box()
	  {
		  var a = document.getElementsByName('check_team');
		  var temp = 0;
		  
		 for(var count=0; count<a.length; count++)
			 {
		  if(a[count].checked == true) 
			  {
				  
				  temp = temp + 1;
			  }
			 }
		  if(temp >= 2)
			 {
				  swal({
					  title: "Only One Team You Can Select!",
					  text: "Thank You!!",
					  icon: "error",
					  button: "OK",
					  });
				  return false;
			  }
			if(temp == 0)
			  {
				  
				  swal({
					  title: "Please Select One Team!",
					  text: "Thank You!!",
					  icon: "error",
					  button: "OK",
					  });
				  return false;
			  }
			 
		  
	  }
	
	</script>
  
<meta charset="utf-8">
<title>The Garage</title>
</head>

<body  background="image/wp2298315.jpg" class="respon-img">
<?php include 'Navbar.php'; ?>
<br><br><br><br><br><br><br><br>
<?php
	$items = count($_SESSION["cart"]);
	   if($items == 0){	   
	   
	?>
	<div class="container"  style="background: rgba(0,0,0,0.7);">
  <div align="center" data-aos="zoom-in-down" data-aos-duration="3000">
  	<br><br>
  	<h1 align="center" style="color:#CF9924">WARNING!!</h1>
  	<br><br>
  	<h3 class="text-warning">" No item Selected "</h3>
  	<br>
  	<h5 style="color: white">Please Select the items to get invoice</h5>
  	<h5 style="color: white">Would you like to continue !!</h5>
  	
  	<br><br>
  	
  	<a class="btn btn-warning" style="width: 20%" href="shop_product.php">Continue</a>
  		
  	<br><br>
  </div>
	</div>
	<br><br><br>
  <?php
	
	   }
	   else
	   {
		    
  ?>
<form action="invoice_cart.php" method="post">
<div class="container"  style="background: rgba(0,0,0,0.7);">
<br><br>
	<h2 align="center" style="color: #CF9924;">SELECT TEAM</h2>
	
	<?php
	
	$query = "SELECT * FROM teams";
	$result = mysqli_query($con,$query);
	
	if(mysqli_num_rows($result) > 0) {
		 while ($row = mysqli_fetch_array($result)) {
					$team_id=$row['team_id'];
					$member_1=$row['member_1'];
					$member_2=$row['member_2'];
					$member_3=$row['member_3'];
					$member_4=$row['member_4'];
	
	?>
	
	<div class="row">
		<div class="col-md-1"></div>
		<div align="center" class="col-md-2" style="margin-left: 5px;">
			<br>
			<img src="image/team_member.png" height="150px" width="150px">
			<br>
			<h4 style="margin-top: 5px; color: #CF9924;"><?php echo"$member_1"; ?></h4>
		
		</div>
		
		<div align="center" class="col-md-2" style="margin-left: 5px;">
			<br>
			<img src="image/team_member.png" height="150px" width="150px">
			<br>
			<h4 style="margin-top: 5px; color: #CF9924;"><?php echo"$member_2"; ?></h4>
		
		</div>
		
		<div align="center" class="col-md-2" style="margin-left: 5px;">
			<br>
			<img src="image/team_member.png" height="150px" width="150px">
			<br>
			<h4 style="margin-top: 5px; color: #CF9924;"><?php echo"$member_3"; ?></h4>
		
		</div>
		
		<div align="center" class="col-md-2" style="margin-left: 5px;">
			<br>
			<img src="image/team_member.png" height="150px" width="150px">
			<br>
			<h4 style="margin-top: 5px; color: #CF9924;"><?php echo"$member_4"; ?></h4>
		
		</div>
		
		<div align="center" class="col-md-1" style="margin-left: 5px;">
			
			<input type="radio" style="margin-top: 100px; width: 20px; height: 20px" name="check_team" onClick="return check_box()" value="<?php echo"$team_id"; ?>">
			
		</div>
	</div>
	<br>
	 <?php
                }
            }
	?>
	
	<br>
	 <div align="right" style="margin-right: 150px;">
			<input type="submit" class="btn btn-success" onClick="return check_box()" value="Get Ivoice" name="invoice_team">
        </div>
	<br><br>
</div>

	

</form>
<?php } ?>
<br><br>
  <?php include 'Footer.php'; ?>
  
  
  
  
             
  <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    
    <script>   
            AOS.init();
    </script>
  
</body>
</html>
