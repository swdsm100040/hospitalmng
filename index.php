
<!DOCTYPE HTML>
<html>
	<head>
		<title>Hospital Management System</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="css/responsiveslides.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="js/responsiveslides.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.min.js"></script>
		  <script>
		    // You can also use "$(window).load(function() {"
			    $(function () {
			
			      // Slideshow 1
			      $("#slider1").responsiveSlides({
			        maxwidth: 1600,
			        speed: 600
			      });
			});
		  </script>
	</head>
	<body>
			<div class="header">
				<div class="container">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png"></a>
				</div>
				<div class="top-nav">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						
						<li><a href="contact.php">contact</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<div class="clear"> </div>
				<div class="image-slider">
				    <ul class="rslides" id="slider1">
				      <li><img src="images/slider-image1.jpg" alt=""></li>
				      <li><img src="images/slider-image2.jpg" alt=""></li>
				      <li><img src="images/slider-image1.jpg" alt=""></li>
				    </ul>
				</div>
		    <div class="clear"> </div>
		    <div class="content-grids">
		    	<div class="container">
		    		<div class="row">
		    			<div class="col-md-4">
		    				<div class="card">
		    					<div class="card-body login-card">
		    						 <img src="images/grid-img3.png">
		    						 <h3>Patients <span>(Register & Book Appointment)</span></h3>
								  <div class="button"><span><a href="hms/user-login.php">Click Here</a></span></div>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4">
		    				<div class="card">
		    					<div class="card-body login-card">
		    						<img src="images/grid-img1.png">
		    						<h3>Doctors Login</h3>
						  			<div class="button"><span><a href="hms/doctor/">Click Here</a></span></div>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4">
		    				<div class="card">
		    					<div class="card-body login-card">
		    						<img src="images/grid-img2.png">
		    					  	<h3>Admin Login</h3>
						  			<div class="button"><span><a href="hms/admin">Click Here</a></span></div>
		    					</div>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
		   </div>
		   <div class="wrap">
		   <div class="content-box">
		   <div class="section group">
				<div class="col_1_of_3 span_1_of_3 frist">
				
				</div>
				<div class="col_1_of_3 span_1_of_3 second">
					
				</div>
				<div class="col_1_of_3 span_1_of_3 frist">
					
					
				</div>
			</div>
		   </div>
		   </div>
		   <div class="clear"> </div>
		   <div class="footer">
		   	 <div class="container">
		   	<div class="footer-left">
		   			<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="contact.php">contact</a></li>
					</ul>
		   	</div>
		   
		   	<div class="clear"> </div>
		   </div>
		   </div>
		<!--end-wrap-->
	</body>
</html>
