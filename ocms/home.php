<?php
	session_start();
?>
<!doctype html>
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
<link href="animination/aos.css" rel="stylesheet">
<script src="animination/aos.js"></script>
<script>
        function slt_car() {
            window.open("selectcar.php", "_self");
        }

    </script>
<script>
        function slt_jeep() {
            window.open("selectjeep.php", "_self");
        }

    </script>
	
	

<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
<title>The Garage</title>
<link rel="shortcut icon" href="image/NDS.png" >
</head>

<body background="image/,cv.PNG" class="respon-img">

<?php include 'Navbar.php'; ?>

 
 
   <header class="section-my">
   <div class="overlay-con">
   
   	
   	
   	<a href="#select" style="text-decoration: none; outline: none" class="scroll-dwn"><i class="fa fa-angle-down scrollToDown" style="font-size: 150px; color: #CF9924; display:inline-flex; " aria-hidden="true"></i></a>
   	
   	
   </div>
   	<video class="video-r" autoplay loop muted>
   		<source src="video/web vid fin.mp4" type="video/mp4">
   		<source src="video/web vid fin.mov" type="video/mov">
   	</video>
   	
   </header>
    
 <br>
	<br>
    
    
    <div id="select">	 
	<div class="container">
	<br><br><br><br>

		<div class="row">	
 	<div class="col-lg-5 col-sm-12" style="background:rgba(0,0,0,0.7); padding-top: 10px;height: 100%" onClick="slt_car()" data-aos="zoom-in-right" data-aos-duration="1500">
 	<img src="image/main i.jpg" style="border: thick;height:;overflow: hidden" class="img-fluid img-responsive" alt="Responsive image">
 	<br><button class="btn btn-outline-success btn-block btn-sm" style="margin-top: 10px; margin-bottom: 10px; text-transform: uppercase;" >Select Car</button>
			</div>
			<div class="col-2"></div>
			<div class="col-lg-5 col-sm-12" style="background:rgba(0,0,0,0.7); padding-top: 10px;height: 100%;" onClick="slt_jeep()" data-aos="zoom-in-left" data-aos-duration="1500">
 	<img src="image/main 2.jpg" style="border: thick;height:;" class="img-fluid img-responsive" alt="Responsive image">
			<br><button class="btn btn-outline-success btn-block btn-sm" style="margin-top: 10px; margin-bottom: 10px; text-transform: uppercase;" >Select Jeep</button>
			</div>
			
		</div>
	</div>
	</div>
    
    
   
		<br><br>
  <?php include 'Footer.php'; ?>
    
        
           
           
  <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    
    <script>   
            AOS.init();
    </script>
           
            
<!-- ****** effect to slide down the page ****** -->                    
    
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
