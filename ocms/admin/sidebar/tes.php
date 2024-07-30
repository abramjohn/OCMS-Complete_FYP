

<link rel="stylesheet" href="tog_style.css" type="text/css">
<link rel="stylesheet" href="../Mycss/my FYP.css" type="text/css">

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script type="text/javascript">

	$(document).ready(function(){
		$('.toggle').click(function(){
			$('.toggle').toggleClass('active')
			$('.overlay').toggleClass('active')
			$('.menu').toggleClass('active')
		})
		
	})
	
</script>


<div>
<div class="toggle"></div>

<div class="overlay"></div>

<div class="menu">
	<ul>
		<li class="left-border"><a href="../admin/car_brand_product_add.php">ADD PRODUCT</a></li>
 		<li class="left-border"><a href="../admin/part_categories.php">ADD CATEGORIES</a></li>
 		<li class="left-border"><a href="../admin/add_brands.php">ADD CAR BRANDS</a></li>
 		<li class="left-border"><a href="../admin/add_car.php">ADD CAR</a></li>
 		<li class="left-border"><a href="../admin/add_car_model.php">ADD CAR MODEL</a></li>
	</ul>
</div>
</div>

<div>
