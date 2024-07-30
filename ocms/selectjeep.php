   

   <?php 
session_start();

     $connection = mysqli_connect('localhost','root','','ocms');
    ?>




<!doctype html>
<html>
<link rel="stylesheet" href="css 1/bootstrap.css" type="text/css">
<link rel="stylesheet" href="js 1/bootstrap.js" type="text/css">
<link rel="stylesheet" href="Mycss/my FYP.css" type="text/css">
<link rel="stylesheet" href="Mycss/animatedcss.css" type="text/css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
<script src="validation javascripts/sweetalert.min.js"></script>
<head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script>

	function brand() {
            var bran = document.getElementById('bran').value;
			
			if(bran == 'JEEP BRAND' )
				{
					swal({
				  title: "Please Select Brand",
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
<title>The Garage</title>
<link rel="shortcut icon" href="image/NDS.png" >
</head>

<body background="image/Original image_ 1920x1200.jpg" class="respon-img">
<?php include 'Navbar.php'; ?>
 
 <br><br><br><br><br><br><br><br><br><br>
 
 <div class="container">
        <br>
        
        <div class="row">
            <div class="col-3">
            </div>

            <div class="col-lg-6  animated fadeInDownBig" style="background:rgba(0,0,0,0.7); overflow: hidden;">
                <br>
                <div class="text" align="center" style="color: white">
            <h2>SELECT BRAND</h2>
        </div>
                <form id="select_car_form" onsubmit="return brand()" action="checkdata.php" method="post">
                    <br>
                    <p class="glyphIconMethod" style="width: 100%">
                    <select id="bran" name="brand_nam" style="text-transform: uppercase; width: 100%">
                    	<option>JEEP BRAND</option>
                    	
                    	<?php
						
						$q = "SELECT * FROM brands";
						$result = mysqli_query($connection,$q);
						while($row = mysqli_fetch_array($result)){
							$brand_id = $row['brand_id'];
							$brand_name =	$row['brand_name'];
							?>
							<option><?php echo"$brand_name"?></option>
							<?php
						}
							?>
							
						
                    </select>
					</p>
              
                    <input type="hidden" value="jeep" name="jeep"> 
                    <br>
                    <br>

                    
                    <input class="btn btn-success btn-block"  type="submit" name="add_jeep_brand" value="Go To Shop">
                    <br>
                </form>
            </div>

            <div class="col-3">
            </div>
        </div>
    </div>
<br><br><br><br><br><br><br>
 
 
 
 

 <?php include 'Footer.php'; ?>
</body>
</html>
