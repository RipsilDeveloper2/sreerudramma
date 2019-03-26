<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<div class="fotter">
	 <div class="container">
	 <div class="col-md-6 contact">
		  <form id="contact-form" method="post" action="mail/footer-contact.php" role="form">
			 <input type="text" name="name" class="text" value="Name..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name...';}">
			 <input type="text" name="email" class="text" value="Email..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email...';}">
			 <textarea name="message" onfocus="if(this.value == 'Message...') this.value='';" onblur="if(this.value == '') this.value='Message...';" >Message...</textarea>	
			 <div class="clearfix"></div>
			 <input type="submit" value="SUBMIT">
		 </form>

	 </div>
	 <div class="col-md-6 ftr-left">
		 <div class="ftr-list">
			 <ul>
				 <li><a href="#">Home</a></li>
				 <li><a href="products.html">Products</a></li>
				 <li><a href="about.html">About</a></li>
				 <li><a href="contact.html">Contact</a></li>
			 </ul>
		 </div>
		 
		 <div class="clearfix" style="margin-top:250px;"></div>
		 <h4>FOLLOW US</h4>
		 <div class="social-icons">
		 <a href="https://www.linkedin.com/in/nithin-kumar-246435155/"><span class="in"><img src="images/in.png"> </span></a>
		 <a href="https://www.youtube.com/channel/UCa311ixsX2bYe_-8CIcgt-w"><span class="you"><img src="images/yb.png"> </span></a>
		 <a href="https://twitter.com/JhumkooRutej"><span class="twt"><img src="images/tw.png"> </span></a>
		 <a href="https://www.facebook.com/Jhumkoo-316710695402726/"><span class="fb"><img src="images/fb.png"> </span></a>
		 </div>
	 </div>	 
	 <div class="clearfix"></div>
	 </div>
</div>
	<!--fotter-->
<div class="fotter-logo">
	 <div class="container">
	 <div class="ftr-logo"><a href="index.php"><img src="images/logo5.png"></a></div>
	 <div class="ftr-info">
	 <p>2017 All Rights Reseverd Design by <a href="http://ripsil.com/">RInteger Technology</a> </p>
	</div>
	 <div class="clearfix"></div>
	 </div>
</div>
<!--fotter//-->

<style type="text/css">
    .contact{
            display: none;
    }
</style>
</body>
</html>