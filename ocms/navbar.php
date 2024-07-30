 <?php
    ob_start();
    
    
    if(isset($_GET['logout']))
    {
        $log=$_GET['logout'];
       
            session_destroy();
            header("Location:Home.php");
        
    }
    ?>
<html>
<link rel="stylesheet" href="css 1/bootstrap.css" type="text/css">
<link rel="stylesheet" href="Mycss/my FYP.css" type="text/css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
<head>
 

<meta charset="utf-8">
<title></title>
</head>

<body>
<div>


<div class="mynav">
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <a class="navbar-brand" href="#">
    <img src="image/NDS.png" width="86" height="74" alt="responsive image">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link hover-border" href="Home.php">Home<span class="sr-only">(current)</span></a>
      </li>
       <li class="nav-item active">
        <a class="nav-link hover-border" href="shop_product.php">Shop<span class="sr-only">(current)</span></a>
      </li>
      
      <li class="nav-item dropdown">
        <a class="nav-link  hover-border" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          vehicle
        </a>
        <div class="dropdown-menu maga-menu" aria-labelledby="navbarDropdown">
         <div class="row">
         	<div class="col-6">
         		<a class="dropdown-item left-border" href="selectcar.php">Car</a>
          		<a class="dropdown-item left-border" href="selectjeep.php">Jeep</a>
          		
         	</div>
         </div>
        </div>
      </li>
      <li class="nav-item">
        <?php 
		  				
                        if(isset($_SESSION['id']))
                        {
							?>
        <a class="nav-link hover-border" href="view_order.php">Orders</a>
        <?php
						}
		  ?>
      </li>
      <li class="nav-item">
        <?php 
		  				
                        if(isset($_SESSION['id']))
                        {
							
                            echo "<a class='nav-link  hover-border'>{$_SESSION['name']}</a>";
							?>
							
								<li class="nav-item dropdown">
        <a class="nav-link  hover-border" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-sort-desc" aria-hidden="true" style="color: white"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <div class="row">
         	<div class="col-lg-12" >
         	<?php 
                        if(isset($_SESSION['id']))
                        {
                            echo "<a class='nav-link  left-border' style='font-size: 13px' href='?logout= 'true'>logout</a>";
                            echo "<a class='nav-link  left-border' style='font-size: 13px' href='change_password.php'>change password</a>";
						}
				?>
          		
         	</div>
         </div>
        </div>
      </li>
							
                       
                       <?php }
                        else{
                            echo "<a class='nav-link  hover-border' href='login.php'>Login</a>";
                        }
                        ?>
      </li>
      
      
    </ul>
    <div class="form-inline my-2 my-lg-0">
    <?php
    if (isset($_SESSION["cart"])){
		?>
     <p style="color: white; margin-right: 17px; margin-top: 25px;"><a href="view_cart.php" style="text-decoration: none; color: white;"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
     <p style="color: #CF9924; padding-right: 10px"><?php 
		 $items = count($_SESSION["cart"]);
		 echo "$items";?> &nbsp;&nbsp;
     </p>
     </a></p>
     <?php } else{ ?>
     <p style="color: white; margin-right: 17px; margin-top: 25px;"><a href="view_cart.php" style="text-decoration: none; color: white;"><i class="fa fa-shopping-cart fa-2x" aria-hidden="true"></i>
     <p style="color: #CF9924; padding-right: 10px"><?php 
		 $items = 0;
		 echo "$items";?> &nbsp;&nbsp;
     </p>
     </a></p>
     <?php }?>
      
    </div>
  </div>
</nav>
</div>
</div>

</body>
</html>