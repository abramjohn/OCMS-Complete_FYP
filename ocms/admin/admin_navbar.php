 <?php
    ob_start();
    
    if(isset($_GET['logout']))
    {
        $log=$_GET['logout'];
       
            session_destroy();
            header("Location:admin_home.php");
        
    }
    ?>
<html>
<link rel="stylesheet" href="css 1/bootstrap.css" type="text/css">
<link rel="stylesheet" href="js 1/bootstrap.js" type="text/css">
<link rel="stylesheet" href="Mycss/my FYP.css" type="text/css">

<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css" type="text/css">
<head>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
	
	$(document).ready(function(){
		setInterval(function(){
			$('#show_alert').load('inbox_count.php')
		}, 1500);
	});
	
	$(document).ready(function(){
		setInterval(function(){
			$('#show_order_count').load('order_count.php')
		}, 1500);
	});
	

	</script>
	
<meta charset="utf-8">
<title></title>
</head>

<body>

		<div>
<div class="mynav">
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
  <a class="navbar-brand" href="#">
    <img src="img/admin.png" width="40" height="40" alt="responsive image">
  </a>
  
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <?php echo"<a class='nav-link hover-border' href='admin_home.php'>Home<span class='sr-only'>(current)</span></a>";?>
		</li>
     
      <li class="nav-item">
        <?php 
		  				
                        if(isset($_SESSION['admin_id']))
                        {
							
                            echo "<a class='nav-link  hover-border'>{$_SESSION['name']}</a>";
							?>
							
								<li class="nav-item dropdown" style="margin-bottom: 7px;">
        <a class="nav-link  hover-border" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-sort-desc" aria-hidden="true" style="color: white;"></i>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <div class="row">
         	<div class="col-lg-12">
         	<?php 
                        if(isset($_SESSION['admin_id']))
                        {
                            echo "<a class='nav-link  left-border' style='font-size: 13px' href='?logout= 'true'>logout</a>";
                            echo "<a class='nav-link  left-border' style='font-size: 13px' href='admin_change_password.php'>change password</a>";
						}
				?>
          		
         	</div>
         </div>
        </div>
      </li>
							
                       
                       <?php }
                        else{
                            echo "<a class='nav-link  hover-border' href='admin_login.php'>Login</a>";
                        }
                        ?>
                        
                        <li class="nav-item active">
        <a class="nav-link hover-border" style='text-decoration: none; color: white; ' href='admin_view_order.php' >VIEW ORDERS
			<span id="show_order_count" style="color: #CF9924; "></span>
     </a>
		</li>
                        
       <li class="nav-item active">
        <a class="nav-link hover-border" style='text-decoration: none; color: white;' href='customer_care.php' ><i class="fa fa-envelope" aria-hidden="true"></i> Inbox
       	<span id="show_alert" style="color: #CF9924; "></span>
     </a>
		</li>
		

 
     
     
      
    </ul>
    <br><br><br>
    <div>
    <?php
		if(isset($_SESSION['admin_id']))
		{
			if($_SESSION['admin_checker']==1)
                        {
                            echo "<a class='hover-border' href='admin_register.php' style='text-decoration: none; color:white; margin-right: 20px;'>ADD SUB-ADMIN<img src='img/administrator_add.png' width='40' height='40' alt='responsive image'></a>";
						}
		}
		?>	
    </div>
    
  
  </div>
  
</nav>

</div>
</div>
		
	</div>
</div>
	
</div>








</body>
</html>
