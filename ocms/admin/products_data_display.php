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

	$car_id = $_SESSION['car_id'];
	$category_id = $_SESSION['category_id'];
	$shop_cate_id = $_SESSION['shop_cate_id'];


$start=0;
$limit=10;


$t=mysqli_query($connection,"SELECT * FROM product WHERE car_id = '$car_id' AND prt_id = '$category_id' AND shop_id = '$shop_cate_id'");
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

<body background="img/home-page-background.png" class="respon-img">

<?php include 'admin_navbar.php'; ?>

 <br><br><br><br><br><br>

<div class="container">
	
	

	<table class="table table-bordered" align="center" style="background:rgba(0,0,0,0.7);">
		<tr>
			<th style="color: white;">Sr #</th>
			<th style="color: white;">Image</th>
			<th style="color: white;">Name</th>
			<th style="color: white;">Model</th>
			<th style="color: white;">Price</th>
			<th style='color: white;'>Select</th>
			<th style='color: white;'>Delete</th>
		
		</tr>
		
		<?php
		
			$sr = 1;
		$query = "SELECT * FROM product WHERE car_id = '$car_id' AND prt_id = '$category_id' AND shop_id = '$shop_cate_id' ORDER BY pro_id DESC LIMIT $start,$limit";
        $result=mysqli_query($connection,$query);
		while($row = mysqli_fetch_array($result)){
			$pro_img=$row['image']
		?>
		<tr>
			<form method="post" action="delete_function.php">
				<td style="color: white;"><?php echo $sr;?></td>
				<td style="color: white;"><?php echo "<img src='products_images/$pro_img' style='width:50px; height:50px; ' class='img-responsive' /><br>"; ?></td>
				<td style="color: white;"><?php echo $row['pname'];?></td>
				<td style="color: white;"><?php echo $row['company'];?></td>
				<td style="color: white;"><?php echo $row['price'];?></td>
				<td><input type='checkbox' value="<?php echo $row['id'];?>" name='delete_pro_key' required></td>
				<td><input class='btn btn-danger btn-sm' type='submit' name='delete_pro' value='Delete'></td>

			</form>
		</tr>
		
		<?php	
		 $sr++; }
		
		?>
	</table>
	
	
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
	
	
</div>


</body>
</html>
