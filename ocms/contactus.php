
<!doctype html>
<html>
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

	function show_hide()
		{
			var sh = document.getElementsById('frm_hide');
			
			
					sh.style.display='none';
		};
	
	function brand()
		{
			var name = document.forms["vforms"]["cos_name"];
			var email = document.forms["vforms"]["cos_email"];
			var subject = document.forms["vforms"]["subject"];
			var message = document.forms["vforms"]["message"];
			var pattern = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
			
			
			if(name.value == '' || email.value == '' || message.value == '' || subject.value == '')
				{
				 swal({
				  title: "Please Fill Correctly",
				  text: "Inserting Worng Data!!",
				  icon: "error",
				  button: "OK",
					 });
					return false;
				}
			if (pattern.test(email.value) == false)
				{
					 swal({
				  title: "In-correct Email",
				  text: "Inserting Worng Data!!",
				  icon: "error",
				  button: "OK",
					 });
					return false;
				}
		
					return true;
				
		};
	
</script>


<meta charset="utf-8">
<title>The Garage</title>
<link rel="shortcut icon" href="image/NDS.png" >
</head>

<body>
<?php include 'Navbar.php'; ?>

<section class="intro box section-my">
<div class="overlay-con">
   
   	
   	
   	<a href="#cont_us" style="text-decoration: none; outline: none" class="scroll-dwn"><br><br><br><i class="fa fa-angle-down scrollToDown" style="font-size: 150px; color: #CF9924; display:inline-flex; " aria-hidden="true"></i></a>
   	
   	
   </div>
   
   
	
			<div class="container">
				<div class="row">
				<br><br><br><br>
					<div class="col-lg-6 col-sm-6">
					<br><br><br><br><br>
					
					<div>
						<span class="pos" style="color: rgb(255, 255, 255);"><strong class="ng-binding">CONTACT US</strong> </span>
						<br>
					<span class="fon_cust" style=" float: right; visibility: visible; background-color: rgb(255, 255, 255); color: #4B4B4B; left: 28rem;">CUSTOMER CARE</span>
					</div>
					<br><br><br><br><br>
					<div>
					<p style="font-size: 29px; color: white;">The Garage is pleased to offer attentive service that meets all your needs.</p>
					</div>
					</div>
					<div class="col-6"></div>
				</div>
			
	</div>
</section>
 
 
  
  <div>
  	<div id="cont_us"  style="background:rgba(0,0,0,0.2); overflow: hidden;">
  	<br><br><br><br><br>
  	<h1 align="center">CUSTOMER CONTACT CENTER</h1>
  	<div class="row">
  		
  		<div class="col-lg-3 col-sm-12">
  		<br>
  		<div align="center">
  			<h3>Head Office</h3>
  			<h4>PHONE +92 305 4199 387</h4>
  			<p>Netsol Avenue, Main Ghazi Road,<br>
  			 Near Netsol Head office, Ring Road<br>
  			 Service Lane, Near Defence and Bhatta<br>
  			 Chowk, Lahore Cantt, Pakistan.</p>
  		</div>
  		</div>
  		<div class="col-lg-3 col-sm-12">
  		<br>
  		<div align="center">
  			<h3>Islamabad Office</h3>
  			<h4>PHONE +92 301 2888 533</h4>
  			<p>Shop # 3, Block # 58, Street # 36<br>
			   IT Centre, G-10/4, Islamabad,<br>
 		       Pakistan.</p>
  		</div>
  		</div>
  		<div class="col-lg-3 col-sm-12">
  		<br>
  		<div align="center">
  			<h3>Multan Office</h3>
  			<h4>PHONE +92 302 4517 533</h4>
  			<p>Vehari Rd, Ghausia Chowk, Mumtazabad,<br>
  			   Multan, Punjab, pakistan.</p>
  		</div>
  		</div>
  		<div class="col-lg-3 col-sm-12">
  		<br>
  		<div align="center">
  			<h3>Karachi Office</h3>
  			<h4>PHONE +92 306 6125 105</h4>
  			<p>Karachi City, D.H.A. Phase 7 Seher<br>
  			 Commercial Area Phase 7 Defence Housing<br> 
  			 Authority, Karachi, Karachi City, Sindh,<br>
  			 Pakistan </p>
  			 <br><br><br><br><br>
  		</div>
  		</div>
  		
  	</div>
  	</div>
  </div>
  
   <div >
  <br><br><br><br><br>
  <div class="container-fluid">
 	 <div class="row">
        <div class="col-lg-10 col-sm-12">
         <div style="margin-left: 80px">
          <h3>CONTACT FORM</h3>
          <p>Please write to us by filling the contact form.</p>
           <button type="submit" name="register" onClick="show_hide()" class="btn btn-outline-success" id="show">Contact Form</button>
           <br><br><br>
            </div>
            </div>
        <div class="col-2">
            </div>
	  </div>
	  </div>
	  <br><br>
	  <div id="content" style="background:rgba(0,0,0,0.7); overflow: hidden; display: none;">
  	 <div class="container">
        <br>
        <div class="row">
            <div class="col-4">
            </div>

            <div class="col-lg-4 col-sm-12" >
              
               <i class="fa fa-times" aria-hidden="true" id="hide" style="color: white;"></i>
                <br>
                
                <div class="text" align="center" style="color: white">
            <h2>CONTACT FORM</h2>
        </div>
                <form onsubmit="return brand()" action="checkdata.php" method="post" name="vforms">
                    <br>
                    <p class="txtfeild">
                    <input style="color: white" type="text" name="cos_name"  placeholder="Name"  aria-label="Username" aria-describedby="basic-addon1">
					</p>
                    <br>
                    <p class="txtfeild">
                    <input style="color: white" type="text" name="cos_email"  placeholder="Email"  aria-label="Username" aria-describedby="basic-addon1">
					</p>
                    <br>
                    <p class="txtfeild">
                    <input style="color: white" type="text" name="subject"  placeholder="Subject"  aria-label="Username" aria-describedby="basic-addon1">
					</p>
                    <br>
                    <div class="txtfeild">
                    <textarea style="color: white" rows="4" name="message"  placeholder="Message"></textarea>
                    </div>
                    <br><br>
                    <input type="hidden" name="status" value="Unread">
                 
                    <input class="btn btn-outline-success btn-block"  type="submit" name="complain" value="Send">
                    <br><br>
                </form>
            
            </div>

            <div class="col-4">
            </div>
        </div>
    </div>
    </div>
  	
  </div>
 
 
  <br><br><br>
  
   
<?php include 'Footer.php'; ?>


<script>

	$('#hide').click(function()
				   {
		$('#content').hide('blind');
		
	});
	
	$('#show').click(function()
				   {
		$('#content').show('blind');
		
	});
	
</script>



<script>
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1900, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
	
	</script>


</body>
</html>
