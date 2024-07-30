<?php
 session_start();

	 if(!isset($_SESSION['id']))
  {
	header("Location:login.php");
  }
   
    $database_name = "ocms";
    $con = mysqli_connect("localhost","root","",$database_name);




if (isset($_GET['invoice'])) {
			$invoice=$_GET['invoice'];
		
		$sql="select * from cost_order where invoice_no ='$invoice'";
		$run_query=mysqli_query($con, $sql);
		while ($row=mysqli_fetch_array($run_query)) {
			$cos_ord_id=$row['cos_ord_id'];
			$cos_id=$row['cos_id'];
			$cos_name=$row['cos_name'];
			$invoice_no=$row['invoice_no'];
			$grand_total=$row['grand_total'];
			$date=$row['date'];
			$time=$row['time'];
			$team_id=$row['team_id'];
			$tax=$row['tax'];
			$mid_total=$row['total'];
			$labour=$row['labour'];
			$car_name= $row['car_name'];
			$car_model= $row['car_model'];
			$brand_name= $row['brand_name'];
			
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
<title>Untitled Document</title>
</head>

<body background="image/bmw_m850i_xdrive_ca1920x1080.jpg" class="respon-img">
<?php include 'Navbar.php'; ?>

<br><br><br><br><br><br><br><br><br><br>

<div class="container" style="width: 65%; background: #FFFFFF" id="HTMLtoPDF">

    
        	<br><br>
		<img src="image/NDS_invoice.png" width="86" height="74" alt="responsive image">
			
       	<br><br>	
		<h1 align="center">Invoice</h1>
			
        
	
        <br><br>
        <div class="row">
        <div class="col-lg-4">
         <?php 
		  				
                        $sql="select * from register where id ='$cos_id'";
						$run_query=mysqli_query($con, $sql);
						while ($row=mysqli_fetch_array($run_query)) {
							$name=$row['name'];
							$email=$row['email'];
							$contact=$row['contact'];
							$address=$row['address'];
							$city=$row['city'];
							

						}
							
                            echo "<p><b>Name :&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </b>$name</p>";
                            echo "<p><b>Email :&nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;   </b>$email</p>";
                            echo "<p><b>Contact :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </b>$contact</p>";
                            echo "<p><b>Address :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   </b>$address</p>";
                            echo "<p><b>City :&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;  </b>$city</p>";
							
						
			?>
        	
        </div>
        <div class="col-lg-5"></div>
        <div class="col-lg-3">
        	<?php
			
			
			
			echo"<p><b>Invoice No. : </b>$invoice_no</p>";
			echo"<p><b>Date : </b>$date</p>";
			echo"<p><b>Time : </b>$time</p>";
			echo"<p><b>Brand : </b>$brand_name</p>";
			echo"<p><b>Car : </b>$car_name</p>";
			echo"<p><b>Model : </b>$car_model</p>";
					
			?>
        </div>
        </div>
        <br><br>
        <br><br>
        <?php
	
		if($team_id > 0)
		{
			$sql="select * from teams where team_id ='$team_id'";
						$run_query=mysqli_query($con, $sql);
						while ($row=mysqli_fetch_array($run_query)) {
							$member1=$row['member_1'];
							$member2=$row['member_2'];
							$member3=$row['member_3'];
							$member4=$row['member_4'];
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
                            <td><?php echo "$member1" ?></td>
                            <td><?php echo "$member2" ?></td>
                            <td><?php echo "$member3" ?></td>
                            <td><?php echo "$member4" ?></td>              
                            <td>Rs. <?php echo "$labour" ?></td>              
                                          

                        </tr>
                       
       
            </table>
        </div>
        <?php
		}
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
                $sql="select * from item_order where invoice_no ='$invoice'";
						$run_query=mysqli_query($con, $sql);
					 while ($row = mysqli_fetch_array($run_query)) {
						    $item_name=$row['item_name'];
							$item_qty=$row['item_qty'];
							$price=$row['price'];
							$sub_total=$row['sub_total'];

						
                        ?>
                        <tr>
                            <td><?php echo "$item_name"; ?></td>
                            <td><?php echo "$item_qty"; ?></td>
                            <td>Rs. <?php echo "$price"; ?></td>
                            <td>Rs. <?php echo "$sub_total" ?></td>
                            

                        </tr>
                        <?php
                        
                    }
                        
                ?>
            </table>
        </div>
        
        <br><br>
        
        <div class="row">
       
			<div class="col-lg-6"></div>
			<div class="col-lg-3"></div>
			<div class="col-lg-3 col-sm-12" >
				<p><b>Total:</b>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo "$mid_total"; ?></p>
				<p><b>Sales Tax:</b>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo $tax ?></p>
				<p><b>Grand Total:</b>&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Rs. <?php echo $grand_total ?></p>
			</div>
        </div>
        
        <br><br>
        <br><br>
        
        <div align="right" style="margin-right: 10px">
        		<input type="submit"  class="btn btn-success" onClick="HTMLtoPDF()" value="Save Ivoice">
        	<br><br>
        </div>
</div>


<br><br><br><br>
 <?php include 'Footer.php'; ?>
</body>
</html>
