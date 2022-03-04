
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
					<a href="index.php"><img src="images/hms_logo.png"></a>
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
				      <li><img src="images/new-slider.jpg" alt=""></li>
				      <li><img src="images/new-slider-1.jpg" alt=""></li>
				      <li><img src="images/new-slider-2.jpg" alt=""></li>
				    </ul>
				</div>
		    <div class="clear"> </div>
		    <div class="content-grids">
		    	<div class="container">
		    		<div class="row">
		    			<div class="col-md-4">
		    				<div class="card">
		    					<div class="card-body login-card">
		    						 <img src="images/pesent.png">
		    						 <h3>Patients <span>(Register & Book Appointment)</span></h3>
								  <div class="button"><span><a href="hms/user-login.php">Click Here</a></span></div>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4">
		    				<div class="card">
		    					<div class="card-body login-card">
		    						<img src="images/docter.jpg">
		    						<h3>Doctors Login</h3>
						  			<div class="button"><span><a href="hms/doctor/">Click Here</a></span></div>
		    					</div>
		    				</div>
		    			</div>
		    			<div class="col-md-4">
		    				<div class="card">
		    					<div class="card-body login-card">
		    						<img src="images/admin-2.png">
		    					  	<h3>Admin Login</h3>
						  			<div class="button"><span><a href="hms/admin">Click Here</a></span></div>
		    					</div>
		    				</div>
		    			</div>
		    		</div>
		    	</div>
		   </div>
		   <div class="about-main-div">
		   		<div class="container">
		   			<h3 class="text-center py-5 font-weight-bold">About Us</h3>
		   			<div class="row">
		   				<div class="col-md-6">
		   					<p>web based hospital management system and is the Ultimate solution for managing single : Hospital Diagnostic Center Clinic Nursing Home. Every essential part of a hospital is included in the system. Different user group can access this system. Admin can see others activities. Doctor can take control of patient information. Other groups like nurse, accountant, receptionist, pharmacist and laboratorist has their own window from where they can control and work. Appoinment, schedule module help both doctor and patient to manage their appoinment information. There is a notice where admin will post notices and other groups will see those notices on his/her wall. Admin can send sms and bulk email to other groups from this system to notify them about other activities. This system contains a POS which help to management invoice and remove any kind of calculation error. This software is built on CodeIgniter. This is a web software. So,you can run it online. Also you can run locally in you computer or LAN through local server software like XAMPP or WAMP server.</p>
		   				</div>
		   				<div class="col-md-6">
		   					<img src="images/about.jpg">
		   				</div>
		   			</div>
		   		</div>
		   </div>
		   <div class="Features-main-div">
		   		<div class="container">
		   			<h3 class="text-center py-5 font-weight-bold">Core Features of Complete  Multi HMS</h3>
		   			<div class="row">
		   				<div class="col-md-6 pb-3">
		   					<p><b>1 : </b>Doctor Database <span class="complete">(Complete)</span></p>
		   					<p><b>2 : </b>Prescription Management <span class="pending">(pending)</span></p>
		   					<p><b>3 : </b>Appointment Management <span class="complete">(Complete)</span></p>
		   					<p><b>4 : </b>Human Resource Database <span class="pending">(Pending)</span></p>
		   					<p><b>5 : </b>9 Types Of Login Access (Super Admin<span class="working">(working)</span>, Admin<span class="working">(working)</span>, Doctor<span class="complete">(Complete)</span>, Patient<span class="complete">(Complete)</span>, Nurse<span class="pending">(Pending)</span>, Accountant<span class="pending">(Pending)</span>, Pharmacist<span class="pending">(Pending)</span>, Laboratorist<span class="pending">(Pending)</span>, Receptionist<span class="pending">(Pending)</span> )</p>
		   					<p><b>6 : </b>Hospital Accounting <span class="pending">(Pending)</span></p>
		   					<p><b>7 : </b>Financial Reporting <span class="pending">(Pending)</span></p>
		   					<p><b>8 : </b>Invoicing <span class="pending">(Pending)</span></p>
		   					<p><b>9 : </b>Pharmacy Management <span class="pending">(Pending)</span></p>
		   					<p><b>10 : </b>SMS Management <span class="pending">(Pending)</span></p>
		   					<p><b>11 : </b>Dynamic Language <span class="pending">(Pending)</span></p>
		   					<p><b>12 : </b>Multi Language English, French, Italian, Portuguese , Spanish <span class="pending">(Pending)</span></p>
		   					<p><b>13 : </b>Frontend Website <span class="working">(Working)</span></p>
		   					<p><b>14 : </b>Schedule Management for Doctors <span class="complete">(Complete)</span></p>
		   					<p><b>15 : </b>Payment Gateway <span class="pending">(Pending)</span></p>
		   					
		   					
		   				</div>
		   				<div class="col-md-6 pb-3">
		   					<p><b>16 : </b>Email Module <span class="pending">(Pending)</span></p>
		   					<p><b>17 : </b>Notice Module <span class="pending">(Pending)</span></p>
		   					<p><b>18 : </b>Quantity in Pos <span class="pending">(Pending)</span></p>
		   					<p><b>19 : </b>Dynamic medicine selection during prescription creation <span class="pending">(Pending)</span></p>
		   					<p><b>20 : </b>New dashboard<span class="working">(Working)</span></p>
		   					<p><b>21 : </b>Patient Timeline<span class="working">(Working)</span></p>
		   					<p><b>22 : </b>Template for Lab report creation<span class="pending">(Pending)</span></p>
		   					<p><b>23 : </b>Easy Process to Translate Into any Language<span class="working">(working)</span></p>
		   					<p><b>24 : </b>Patient Medical History<span class="complete">(Complete)</span></p>
		   					<p><b>25 : </b>Patient Medical Files Archive<span class="pending">(Pending)</span></p>
		   					<p><b>26 : </b>Prescription<span class="pending">(Pending)</span></p>
		   					<p><b>27 : </b>Patient Payment History<span class="pending">(Pending)</span></p>
		   					<p><b>28 : </b>User Activity Report<span class="pending">(Pending)</span></p>
		   					<p><b>29 : </b>Doctor’s Commission calculator for Diagnosis Reference<span class="pending">(Pending)</span></p>
		   					<p><b>30 : </b>sms Gateway<span class="pending">(Pending)</span></p>
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

