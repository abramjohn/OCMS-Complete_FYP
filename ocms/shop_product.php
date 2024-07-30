<?php
    error_reporting(0);
    $database_name = "ocms";
    $con = mysqli_connect("localhost","root","",$database_name);
	session_start();
	  if(isset($_SESSION['car_id']) || isset($_SESSION['prt_id']))
	   {
	$shop = $_SESSION['shop_id'];
	$car = $_SESSION['car_id'];
	$car_name = $_SESSION['car_name'];
	$car_model = $_SESSION['car_model'];
	$veh_type = $_SESSION['veh_type'];
	$cate = $_SESSION['prt_id'];
	   

$start=0;
$limit=16;


$t=mysqli_query($con,"SELECT * FROM product WHERE car_id = '$car' AND prt_id = '$cate' AND shop_id = '$shop' AND car_model = '$car_model' AND veh_type = '$veh_type'");
$total=mysqli_num_rows($t);



if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$start=($id-1)*$limit;

}
else
{
	$id=1;
}
$page=ceil($total/$limit);

	   }


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
   
   
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css 1/bootstrap.css" type="text/css">
    <title>Shopping Cart</title>

   

    <style>
       
        .product{
            border: 1px solid #61b560;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            
			height: 400px;
        }
        table, th, tr{
            text-align: center;
        }
        .title2{
            text-align: center;
            color: #66afe9;
            background-color: #efefef;
            padding: 2%;
        }
        h2{
            text-align: center; 
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
</head>
<body background="image/car img 1.jpg" class="respon-img">
<div>
   <?php include 'Navbar.php'; ?>
	</div>
   <br><br><br><br><br><br><br><br><br>
   <div class="container" class="list-group animated bounceInDown" style="background: rgba(0,0,0,0.7);">
   <br>
   
   <?php
	   
	   if(!isset($_SESSION['car_id']) || !isset($_SESSION['prt_id']))
	   {
		   
	   echo "<h2 style='color:#CF9924; align-content: center;'>Please Select Your Vehicle!";
	   }
	   else
	   {
	   
	?>
   
  <div class="row">
	  <div class="col-lg-6">
	  <p style="text-transform: uppercase; color:#CF9924; font-size: 20px;"><b>CAR NAME :</b> <?php echo" $car_name"; ?></p>
	  <p style="text-transform: uppercase; color:#CF9924; font-size: 20px;"><b>CAR MODEL :</b> <?php echo" $car_model"; ?></p>
	  </div>
	  <div class="col-lg-3"></div>
	  <div class="col-lg-3">
		  <form onsubmit="return brand()" action="checkdata.php" method="post">
							
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


							<input class="btn btn-outline-success btn-block" type="submit" name="add_category" value="MORE PRODUCTS">
							<br><br>
							
			</form>
       </div>
  </div>
  <form  method="post" action="shop_product.php">
   <div class="row">
   <div class="col-lg-10 col-sm-12">
   <input class="form-control mr-sm-2" type="text" name="valueToSearch" placeholder="Search" aria-label="Search" >
   </div>
   <div class="col-lg-2 col-sm-4">
   	 <button class="btn btn-outline-success my-2 my-sm-0" name="search" type="submit" style=" margin-right: 100px;">Search</button>
   </div>
    
   
    </div>
  </form>
   
   
   
   <h2 style="color:#CF9924;">PRODUCTS</h2>
      <div class="row">
        
      <?php
		   if(isset($_POST['search']))
{
    		$valueToSearch = $_POST['valueToSearch'];
            $query = "SELECT * FROM product WHERE car_id = '$car' AND prt_id = '$cate' AND shop_id = '$shop' AND car_model = '$car_model' AND veh_type = '$veh_type' AND CONCAT(`pname`) LIKE '%".$valueToSearch."%'";
            $result = mysqli_query($con,$query);
		  
		  	if (mysqli_num_rows($result)==0) {
			echo "<h2 style='color:#CF9924; align-content: center;'>No Products found for this Brand!";
		}
		  
          else  if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {
					$pro_id=$row['pro_id'];
					$pro_title=$row['pname'];
					$pro_price=$row['price'];
					$pro_img=$row['image'];

                    ?>
                    <div class="col-lg-3">

                        <form method="post" action="add_to_cart_action.php?action=add&id=<?php echo $row["pro_id"]; ?>">

                            <div class="product">
                                <?php echo "<img src='admin/products_images/$pro_img' style='width:200px; height:200px; margin-left:2px;' class='img-responsive' /><br>"; ?>
                                <h5 class="text-info" style="font-size: 15px; margin-top: 10px"><?php echo $row["pname"]; ?></h5>
                                <h5 class="text-danger" style="margin-top: 25px;">Rs. <?php echo $row["price"]; ?></h5>
                                <input type="text" style="margin-top: 10px" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <?php echo "<a class='btn btn-primary btn-sm' href='product_detail.php?pro_id=$pro_id' style='text-decoration: none; margin-top: 15px;  width: 45%;'>Detail</a>"?>
                                <input type="submit" name="add" style="margin-top: 15px;  width: 45%;" class="btn btn-success btn-sm" value="Add to Cart">
                                
                            </div>
                        </form>
                        <br>
                    </div>
                    <?php
                }
            }
}
  			
		  else{
            $query = "SELECT * FROM product  WHERE car_id = '$car' AND prt_id = '$cate' AND shop_id = '$shop' AND car_model = '$car_model' AND veh_type = '$veh_type' ORDER BY pro_id DESC LIMIT $start,$limit ";
            $result = mysqli_query($con,$query);
		  	
		  	if (mysqli_num_rows($result)==0) {
			echo "<h2 style='color:#CF9924; align-content: center;'>No Products found for this Brand!";
		}
		  
          else  if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {
					$pro_id=$row['pro_id'];
					$pro_title=$row['pname'];
					$pro_price=$row['price'];
					$pro_img=$row['image'];

                    ?>
                    <div class="col-lg-3">

                        <form method="post" action="add_to_cart_action.php?action=add&id=<?php echo $row["pro_id"]; ?>">

                            <div class="product">
                                <?php echo "<img src='admin/products_images/$pro_img' style='width:200px; height:200px; margin-left:2px;' class='img-responsive' /><br>"; ?>
                                <h5 class="text-info" style="font-size: 15px; margin-top: 10px"><?php echo $row["pname"]; ?></h5>
                                <h5 class="text-danger" style="margin-top: 25px;">Rs. <?php echo $row["price"]; ?></h5>
                                <input type="text" style="margin-top: 10px" name="quantity" class="form-control" value="1">
                                <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">
                                <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
                                <?php echo "<a class='btn btn-primary btn-sm' href='product_detail.php?pro_id=$pro_id' style='text-decoration: none; margin-top: 15px;  width: 45%;'>Detail</a>"?>
                                <input type="submit" name="add" style="margin-top: 15px;  width: 45%;" class="btn btn-success btn-sm" value="Add to Cart">
                                
                            </div>
                        </form>
                        <br>
                    </div>
                    <?php
                }
            }
			  
		  }
        ?>
        
        
        
        
        </div>
   	
   	<?php
		   }
	   if (mysqli_num_rows($result)>0) {
	   if(isset($_SESSION['car_id']) || isset($_SESSION['prt_id']))
	   {
	   if(!isset($_POST['search']))
{
	
	   ?>
	   
	  <br><br><br>
	  
	   <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
   <?php if($id > 1) {?>  <li class="page-item"><a class="page-link" href="?id=<?php echo ($id-1) ?>">Previous</a></li><?php }?>
   <?php
	 for($i=1;$i <= $page;$i++){
	 ?>
    <li class="page-item"><a class="page-link" href="?id=<?php echo $i ?>"><?php echo $i;?></a></li>
    <?php
	 }
	  ?>
    <?php if($id!=$page)
	
	{?> 
    <li class="page-item"><a class="page-link" href="?id=<?php echo ($id+1); ?>">Next</a></li>
    <?php }?>
  </ul>
</nav>
  <br><br>
  <?php } } }?> 
  
   </div>
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include 'Footer.php'; ?>

</body>
</html>

