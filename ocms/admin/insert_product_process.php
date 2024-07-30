<?php 
session_start();
 if(!isset($_SESSION['admin_id']))
  {
	header("Location:admin_login.php");
  }

$conn = mysqli_connect('localhost','root','','ocms');

//check admin is exist in the database//
 if(isset($_SESSION['admin_id']))
 {
	 $id_admin = $_SESSION['admin_id'];
	 
	 $query= "SELECT * FROM admin_register WHERE admin_id = '$id_admin'";
	 $result = mysqli_query($conn,$query);
	 $row=mysqli_fetch_assoc($result);
    
        $db_id = $row['admin_id'];
	 
	 if($db_id != $id_admin)
	 {
		 unset($_SESSION["name"] , $_SESSION["designation"] , $_SESSION["admin_id"] , $_SESSION["email"] , $_SESSION["contact"]);
		 header("Location:admin_login.php");
	 }
	 
 }



?>

<?php 
	

if (isset($_POST['upload'])) {
	$pname = $_POST['pname'];
	$price = $_POST['price'];
	$company = $_POST['company'];
	$car_id = $_POST['car_id'];
	$car_model = $_POST['car_model'];
	$car_options = $_POST['car_options'];
	$category_id = $_POST['category_id'];
	$shop_cate_id = $_POST['shop_cate_id'];
	$descript1 = $_POST['descript1'];
	$descript2 = $_POST['descript2'];
	
	//image Names
	$product_img1=$_FILES['product_img1']['name'];
	$product_img2=$_FILES['product_img2']['name'];
	$product_img3=$_FILES['product_img3']['name'];
	$product_img4=$_FILES['product_img4']['name'];
	$product_img5=$_FILES['product_img5']['name'];
	$product_img6=$_FILES['product_img6']['name'];

	//image temp names

	$temp_name1=$_FILES['product_img1']['tmp_name'];
	$temp_name2=$_FILES['product_img2']['tmp_name'];
	$temp_name3=$_FILES['product_img3']['tmp_name'];
	$temp_name4=$_FILES['product_img4']['tmp_name'];
	$temp_name5=$_FILES['product_img5']['tmp_name'];
	$temp_name6=$_FILES['product_img6']['tmp_name'];
	$target_file = "products_images/" . basename($_FILES["product_img1"]["name"]);
	$target_file = "products_images/" . basename($_FILES["product_img2"]["name"]);
	$target_file = "products_images/" . basename($_FILES["product_img3"]["name"]);
	$target_file = "products_images/" . basename($_FILES["product_img4"]["name"]);
	$target_file = "products_images/" . basename($_FILES["product_img5"]["name"]);
	$target_file = "products_images/" . basename($_FILES["product_img6"]["name"]);
	//text data variables
	

	if ($pname=='' || $car_id=='' || $category_id=='' || $price=='' || $company=='' || $product_img1=='' || $shop_cate_id=='') {
		
	echo "<script>alert('please fill all the fields!')</script>";
	exit();
	}else{

		//uploading images to its folder
		move_uploaded_file($temp_name1, "products_images/$product_img1");
		move_uploaded_file($temp_name2, "products_images/$product_img2");
		move_uploaded_file($temp_name3, "products_images/$product_img3");
		move_uploaded_file($temp_name4, "products_images/$product_img4");
		move_uploaded_file($temp_name5, "products_images/$product_img5");
		move_uploaded_file($temp_name6, "products_images/$product_img6");

		$insert_product="insert into product (image, pname, company, price, car_id, prt_id, det_img1, det_img2, descript1, install_img1, install_img2, install_img3, descript2, shop_id, car_model, veh_type) values('".$_FILES["product_img1"]["name"]."', '".$pname."', '".$company."', '".$price."', '".$car_id."', '".$category_id."',  '".$_FILES["product_img2"]["name"]."', '".$_FILES["product_img3"]["name"]."', '".$descript1."', '".$_FILES["product_img4"]["name"]."', '".$_FILES["product_img5"]["name"]."', '".$_FILES["product_img6"]["name"]."', '".$descript2."', '".$shop_cate_id."', '".$car_model."', '".$car_options."')";
		
		$run_query=mysqli_query($conn, $insert_product);
		if ($run_query) {
				echo '<script>'; 
				echo 'alert("Data Inserted Successfully!");'; 
				echo 'window.location.href = "/ocms/admin/product_data_insert.php";';
				echo '</script>';

			
			//echo "<script>alert('Product inserted successfull!')</script>";
			
		}else{
			echo mysqli_error($conn);
		}
	}
}
 ?>