<?php
 session_start();

	if(!isset($_SESSION['id']))
                        {
							header("Location:login.php");	
						}
	 $brand_name = $_SESSION['brand_name'];
	 $car_name = $_SESSION['car_name'];
	 $car_model = $_SESSION['car_model'];
   
    $database_name = "ocms";
    $con = mysqli_connect("localhost","root","",$database_name);


		  if (isset($_POST["invoice_team"])){
			  $team_id = $_POST["check_team"];
			  $q = "SELECT * FROM teams WHERE team_id = '$team_id'";
			  $result = mysqli_query($con,$q);
			  while($row = mysqli_fetch_array($result)){
							$team_id = $row['team_id'];
				  			$_SESSION['team_id']  = $team_id;
							$_SESSION['member_1'] = $row['member_1'];
							$_SESSION['member_2'] = $row['member_2'];
							$_SESSION['member_3'] = $row['member_3'];
							$_SESSION['member_4'] = $row['member_4'];
							
				  header("Location:invoice_cart.php");
			  }
		  }

	

?>


<!doctype html>
<html>
<link rel="stylesheet" href="js 1/bootstrap.js" type="text/css">
<link rel="stylesheet" href="css 1/bootstrap.css" type="text/css">
<link rel="stylesheet" href="Mycss/my FYP.css" type="text/css">
<link rel="stylesheet" href="Mycss/animatedcss.css" type="text/css">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css" type="text/css">
<link href="animination/aos.css" rel="stylesheet">
<script src="animination/aos.js"></script>
<script src="HTMLToPDF/jquery-2.1.3.js"></script>
<script src="HTMLToPDF/jspdf.js"></script>
<link rel="shortcut icon" href="image/NDS.png" >

<head>
 <style>
        @import url('https://fonts.googleapis.com/css?family=Titillium+Web');

        *{
            font-family: 'Titillium Web', sans-serif;
        }
        .product{
            border: 1px solid #eaeaec;
            margin: -1px 19px 3px -1px;
            padding: 10px;
            text-align: center;
            background-color: #efefef;
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
            color: #66afe9;
            padding: 2%;
        }
        table th{
            background-color: #efefef;
        }
    </style>
    
    <script>
	
		function HTMLtoPDF(){
			var pdf = new jsPDF('p', 'pt', 'letter');
			source = $('#HTMLtoPDF')[0];
			specialElementHandlers = {
				'#bypassme': function(element, renderer){
					return true
				}
			}
			margins = {
				top: 50,
				left: 60,
				width: 545
			  };
			
			pdf.fromHTML(
				source // HTML string or DOM elem ref.
				, margins.left // x coord
				, margins.top // y coord
				, {
					'width': margins.width // max width of content on PDF
					, 'elementHandlers': specialElementHandlers
				},
				function (dispose) {
				  // dispose: object with X, Y of the last line add to the PDF
				  //          this allow the insertion of new lines after html
					pdf.save('THE GARAGE Invoice.pdf');
				  }
			  )		
			}
	
	</script>
    

<meta charset="utf-8">
<title>The Garage</title>
</head>

<body background="image/JWHhi0.jpg" class="respon-img">
<?php include 'Navbar.php'; ?>

<br><br><br><br><br><br><br><br><br><br>

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
  <?php
	
	   }
	   else
	   {
		    
  ?>
<form action="add_to_cart_action.php" method="post">
<div class="container" style="width: 65%; background-color: white" id="HTMLtoPDF">

    
        <br><br>	
		<img src="image/NDS_invoice.png" width="86" height="74" alt="responsive image">
			
       	<br><br>	
		<h1 align="center">Invoice</h1>
			
        
	
        <br><br>
        <div class="row">
        <div class="col-lg-4">
         <?php 
		  				
                        if(isset($_SESSION['id']))
                        {
							
                            echo "<p><b>Name :&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </b>{$_SESSION['name']}</p>";
                            echo "<p><b>Email :&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;   </b>{$_SESSION['email']}</p>";
                            echo "<p><b>Contact :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </b>{$_SESSION['contact']}</p>";
                            echo "<p><b>Address :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </b>{$_SESSION['address']}</p>";
                            echo "<p><b>City :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  </b>{$_SESSION['city']}</p>";
							
						}
			?>
        	
        </div>
        <div class="col-lg-5"></div>
        <div class="col-lg-3">
        	<?php
			 if(isset($_SESSION['id']))
                        {
			$invoice_no=mt_rand();
			$_SESSION['invoice_no'] = $invoice_no;
			$date = date('d/m/Y');
			$_SESSION['date'] = $date;
			$time = date('H:i:s');
			$_SESSION['time'] = $time;
			
			echo"<p><b>Invoice No. : </b>$invoice_no</p>";
			echo"<p><b>Date : </b>$date</p>";
			echo"<p><b>Time : </b>$time</p>";
			echo"<p><b>Brand : </b>$brand_name</p>";
			echo"<p><b>Car : </b>$car_name</p>";
			echo"<p><b>Model : </b>$car_model</p>";
						}
			?>
        </div>
        </div>
        <br><br>
        <?php
	
		if(isset($_SESSION['team_id']))
		{
			?>
	
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th  style="text-align: center" width="20%">Mechanic No.1</th>
                <th  style="text-align: center" width="20%">Mechanic No.2</th>
                <th  style="text-align: center" width="20%">Mechanic No.3</th>
                <th  style="text-align: center" width="20%">Mechanic No.4</th>
                <th  style="text-align: center" width="15%">Labour</th>
                
            </tr>

                        <tr>
                            <td><?php echo "{$_SESSION['member_1']}" ?></td>
                            <td><?php echo "{$_SESSION['member_2']}" ?></td>
                            <td><?php echo "{$_SESSION['member_3']}" ?></td>
                            <td><?php echo "{$_SESSION['member_4']}" ?></td>              
                            <td>Rs. <?php echo "{$_SESSION['labour']}" ?></td>              
                                          

                        </tr>
                       
       
            </table>
        </div>
        <?php
		}
		?>
        
        <br><br>
        
        <div class="table-responsive">
            <table class="table table-bordered">
            <tr>
                <th  style="text-align: center" width="25%">Product Name</th>
                <th  style="text-align: center" width="10%">Quantity</th>
                <th  style="text-align: center" width="18%">Price Details</th>
                <th  style="text-align: center" width="20%">Total Price</th>
                
            </tr>

            <?php
                if(!empty($_SESSION["cart"])){
                    $total = 0;
                    foreach ($_SESSION["cart"] as $key => $value) {
                        ?>
                        <tr>
                            <td><?php echo $value["item_name"]; ?></td>
                            <td><?php echo $value["item_quantity"]; ?></td>
                            <td>Rs. <?php echo $value["product_price"]; ?></td>
                            <td>Rs. <?php echo number_format($value["item_quantity"] * $value["product_price"] ); ?></td>
                            

                        </tr>
                        <?php
                        $total = $total + ($value["item_quantity"] * $value["product_price"]);
						$_SESSION['total'] = $total;
						$tax = 1 / 100;
						$s_tax = $total * $tax;
						$_SESSION['tax'] = $s_tax;
						$labour = 3.5 / 100;
						$s_labour = $total * $labour;
						$_SESSION['labour'] = $s_labour;
						if(isset($_SESSION['team_id']))
							{
								$grand_total = $total + $s_tax + $s_labour;
							}
						else{
								$grand_total = $total + $s_tax;
							}
						$_SESSION['grand_total'] = $grand_total;
                    }
                        
                    }
                ?>
            </table>
        </div>
        
        <br><br>
        
        <div class="row">
       
			<div class="col-lg-6"></div>
			<div class="col-lg-3"></div>
			<div class="col-lg-3 col-sm-12" >
				<p><b>Total:</b>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo number_format($total); ?></p>
				<p><b>Sales Tax:</b>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo number_format($s_tax); ?></p>
				<p><b>Grand Total:</b>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo number_format($grand_total); ?></p>
			</div>
        </div>
        
        <br><br>
        <br><br>
        
        <div align="right" style="margin-right: 10px">
        	<input type="submit" class="btn btn-success" onClick="HTMLtoPDF()" value="Save Ivoice" name="get_invoice">
        </div>
        <br><br>
</div>
	</form>
		<?php } ?>
<br><br><br><br>





           
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
