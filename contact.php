<?php
include_once('hms/include/config.php');
if(isset($_POST['submit']))
{
$name=$_POST['fullname'];
$email=$_POST['emailid'];
$mobileno=$_POST['mobileno'];
$dscrption=$_POST['description'];
$query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");
echo "<script>alert('Your information succesfully submitted');</script>";
echo "<script>window.location.href ='contact.php'</script>";

}


?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>HMS | Contact us</title>
		<link href="css/style.css" rel="stylesheet" type="text/css"  media="all" />
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
		<link href='http://fonts.googleapis.com/css?family=Ropa+Sans' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
			<div class="header">
				<div class="container">
				<div class="logo">
					<a href="index.php"><img src="images/hms_logo.png"></a> 
				</div>
				<div class="top-nav">
					<ul>
						<li><a href="index.php">Home</a></li>
					
						<li class="active"><a href="contact.php">contact</a></li>
					</ul>					
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		    <div class="clear"> </div>
		   <div class="container">
		   	<div class="contact contact-space mb-5">
		   		<div class="card">
		   			<div class="card-body">
		   				<div class="row">
		   					<div class="col-md-12 text-center pb-5">
		   					<h2>Contact Us</h2>
		   				</div>
		   				<div class="col-md-4">
		   					<div class="card text-white contact-card mb-4 text-center">
		   						<div class="card-body">
		   							<div class="company-detail">
		   								<i class="fa fa-hospital-o" aria-hidden="true"></i>
		   								<p>Rao Saheb, Achutrao Patwardhan Marg, Four Bungalows, Andheri West, Mumbai, Maharashtra 400053</p>
		   							</div>
		   						</div>
		   					</div>
		   				</div>
		   				<div class="col-md-4">
		   					<div class="card text-white contact-card mb-4 text-center">
		   						<div class="card-body pb-5">
		   							<div class="company-detail">
		   								<i class="bi bi-telephone-fill"></i>
		   								<p class="mb-0">Phone:(022)200511202055 </p>
		   								<p>    </p>
		   							</div>
		   						</div>
		   					</div>
		   				</div>
		   				<div class="col-md-4">
		   					<div class="card text-white contact-card mb-4 text-center">
		   						<div class="card-body pb-5">
		   							<div class="company-detail">
		   								<i class="bi bi-envelope-fill"></i>
		   								<p>Email: <span>info@Hospital.com</span></p>
		   							</div>
		   						</div>
		   					</div>
		   				</div>
		   				<div class="col-md-6">
		   					<form name="contactus" method="post" class="contact-form">
							  <div class="form-group">
							    <label>NAME</label>
							    <input type="text" class="form-control" name="fullname" required="true" value="" placeholder="Enter Name">
							  </div>
							  <div class="form-group">
							    <label>E-MAIL</label>
							    <input type="email" class="form-control" name="emailid" required="ture" value="" placeholder="Enter Email Id">
							  </div>
							  <div class="form-group">
							    <label>MOBILE.NO</label>
							    <input type="number" class="form-control" name="mobileno" required="true" value="" placeholder="Enter Mobile No.">
							  </div>
							  <div class="form-group">
							    <label> Any Queries?</label>
							    <textarea  class="form-control" name="description" required="true" rows="3"></textarea>
							  </div>
							  <div class="text-center">
							  	<button type="submit" class="btn contact-form-btn">Submit</button>
							  </div>
							</form>
		   				</div>
		   				<div class="col-md-6">
		   					<div class="map">
		   						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d230611.62353660242!2d72.80450514209802!3d19.051941726010714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b61ed7e04c69%3A0x3860c51257a72c24!2sKokilaben%20Dhirubhai%20Ambani%20Hospital%20and%20Medical%20Research%20Institute!5e0!3m2!1sen!2sin!4v1648644855540!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		   					</div>
		   				</div>
		   				</div>
		   			</div>
		   		</div>
			  	 <div class="clear"> </div>
	</div>
	<div class="clear"> </div>
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

