
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Ruthej Clothing</title>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Raleway:400,200,600,800,700,500,300,100,900' rel='stylesheet' type='text/css'/>
<link href='http://fonts.googleapis.com/css?family=Arimo:400,700,700italic' rel='stylesheet' type='text/css'><link rel="stylesheet" type="text/css" href="css/component.css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="New Fashions Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" 
		/>
<script src="js/jquery.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<!-- start menu -->
</head>
<body>
<!--header-->
<?php include("header.php");?>
<!--header//-->
<div class="contact-section-page">
	   <div class="contact_top">					
		   <div class="container">
				<ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Contact</li>
		 </ol>
			  <div class="col-md-6 contact_left">
			 		<h2>Contact Form</h2>
			 		<p>For bluk order you can contact us </p>
				  <form id="contact-form" method="post" action="mail/contact.php" role="form">
					 <div class="form_details">
						   <input type="text" class="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}"/>
						   <input type="text" class="text" name="email" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email Address';}"/>
							<input type="text" class="text" name="phone" value="Phone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Phone';}"/>
							<textarea value="Message" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
							<div class="clearfix"> </div>					   
							<input name="submit" type="submit" value="Send message">
					 </div>					 
				  </form>
			 </div>
			 <div class="col-md-6 company-right">
					<div class="contact-map">
				    <iframe src="https://www.mapsdirections.info/en/custom-google-maps/map.php?width=100%&height=600&hl=ru&coord=12.979708,77.576465&q=Malet%20St%2C%20London%20WC1E%207HU%2C%20United%20Kingdom+(Your%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=A&output=embed"> </iframe>
				    </div>      
				 <div class="company-right">
					   <div class="company_ad">
							<h3>Contact Info</h3>
							<span>RUTEJ CLOTHING <br>#106, RAM NIVAS BUILDING,<br> 1ST FLOOR ,C STREET  6TH CROSS,GHANDHINAGAR <br> BANGALORE 560009</span>
			      			<address>
								<p>email:<a href="mail-to: sales@rutejclotingco.com">sales@rutejclotingco.com</a></p>
								<p>email:<a href="mail-to: rutejclothingco@gmail.com">rutejclothingco@gmail.com</a></p>
								 <p>phone:  +91 8043709772</p>
								 <p>Mobile:  +91 8971476898</p>
																 	 	
							</address>
					  </div>
				 </div>							
			 </div>
		  </div>
	 </div>
</div>
<!--fotter-->
<?php include("footer.php");?>
<!--fotter//-->

</body>
</html>