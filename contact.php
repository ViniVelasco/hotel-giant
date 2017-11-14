<?php require_once("includes/header.php"); ?>
<div class="banner">
	</div>
    <div class="header">
		<div class="container">
			<div class="header-menu">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <div class="navbar-brand logo">
							<h1><a href="index.php"><span>Best  </span> Hotel</a></h1>
							</div>
						</div>
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						   <ul class="nav navbar-nav">
							<li><a href="index.php" data-hover="Home">Home </a></li>
							<li><a href="about.php" data-hover="About">About</a></li>
							<li><a data-hover="Restaurant" href="restaurant.php">Restaurant</a></li>
							<li><a data-hover="Gallery" href="gallery.php">Gallery</a></li>
							<li><a data-hover="Rooms" href="rooms.php">Rooms</a></li>
							  <li><a  href="codes.html" data-hover="codes">Codes</a></li>
							 <li class="active"><a data-hover="Contact" href="contact.html">Contact</a></li>
							 
						  </ul>
						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			<div class="clearfix"></div>
			</div>	
		</div> 
	</div>
		<!---header--->		
		<div class="content">
			<!---contact--->
			<div class="contact">
				<div class="container">
					<h2 class="tittle">How To Find Us</h2>
					<div class="contact-bottom">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24208.257297137407!2d-74.00459896044924!3d40.673260299999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25afeeec2a7c9%3A0xad18759baca1029a!2sHotel+Le+Bleu!5e0!3m2!1sen!2sin!4v1459521299656"  frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-md-4 contact-left">
						<h4>Address</h4>
						<p>Est eligendi optio cumque nihil impedit quo minus id quod maxime
							<span>26 56D Rescue,US</span></p>
						<ul>
							<li>Free Phone :+1 078 4589 2456</li>
							<li>Telephone :+1 078 4589 2456</li>
							<li>Fax :+1 078 4589 2456</li>
							<li><a href="mailto:info@example.com">info@example.com</a></li>
						</ul>
					</div>
					<div class="col-md-8 contact-left cont">
						<h4>Contact Form</h4>
						<form action="#" method="post">
							<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
							<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
							<input type="text" name="Phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}" required="">
							<textarea type="text" name="Message"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
							<input type="submit" value="Submit" >
							<input type="reset" value="Clear" >
						</form>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<!---contact--->
		</div>
<?php require_once("includes/footer.php"); ?>