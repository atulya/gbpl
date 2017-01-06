<footer class="footerBckg container-fluid">
	<div class="container footerBg">
		<div class="firstRow row"><!-- firstRow -->
		<ul class="col-md-12">
			<li class="col-md-3 footerNavigation"><span class="footerTitle">Downloads</span>
			<ul>
				<li><a href="javascript:void(0);">Corporate presentation</a></li>
				<li><a href="javascript:void(0);">Brochure</a></li>
				<li><a href="javascript:void(0);">Product Catalogue</a></li>
				<li><a href="javascript:void(0);">Sitemap</a></li>
			</ul>
		</li>
		<li class="col-md-3 footerNavigation"><span class="footerTitle">Contact Us</span>
		<ul>
			<li><a href="ourLocation.php">Our locations</a></li>
			<li><a href="contact-us.php">Reach Us</a></li>
			<li><a href="businessEnquiry.php">Enquiry</a></li>
		</ul>
	</li>
	<li class="col-md-3 footerNavigation"><span class="footerTitle">Policies</span>
	<ul>
		<li><a href="termsAndCondition.php">Terms &amp; Condition</a></li>
<!-- 		<li><a href="javascript:void(0);">Copyright</a></li>
		<li><a href="javascript:void(0);">Privacy Policy</a></li> -->
	</ul>
</li>
<li class="col-md-3">
	<ul>
		<li class="text-right">
			<a href="https://twitter.com/gbennettilife" target="_blank">
				<i class="fa fa-twitter-square"></i>
			</a>
			<a href="https://www.facebook.com/gbennettilife/" target="_blank">
				<i class="fa fa-facebook-square"></i>
			</a>
			<a href="https://plus.google.com/u/2/114115452834607783382" target="_blank">
				<i class="fa fa-google-plus-square"></i>
			</a>
			<a href="javascript:void(0);">
				<i class="fa fa-linkedin-square"></i>
			</a>
		</li>
	</ul>
</li>
</ul>
</div><!-- End firstRow -->
<div class="text-center copyrights">
<small>All rights reserved, copyright &copy; 2016. GBennetti Biolabs (P) Ltd. </small>
</div>
</div>
</footer>
<div id="toggleItems">
	<a href="javascript:void(0);" class="glyphicon glyphicon-chevron-up">
	</a>
</div>
<div id="fixedNewsletter">
<div class="wrapNs container">

<form name="ChronoContact_newsletter_home" id="ChronoContact_newsletter_home" method="POST" action="controller.php">

<div class="form_item">
	<div class="form_element cf_text"> <span class="cf_text">Get the latest product &amp; price updates delivered direct in your inbox</span> </div>
	<div class="cfclear"></div>
</div>
<div class="form_item">
	<div class="form_element cf_checkbox">
		<label class="cf_label" style="display: none;">Click Me to Edit</label>
		<div class="float_left">
			<input value="Promethus" title="" class="radio" id="check00" name="check1" type="checkbox" checked>
			<label for="check00" class="check_label">Promethus</label>
			<input value="Renaissant" title="" class="radio" id="check01" name="check2" type="checkbox" checked>
			<label for="check01" class="check_label">Renaissant</label>
			
			<input value="Hemera" title="" class="radio" id="check02" name="check3" type="checkbox" checked>
			<label for="check02" class="check_label">Hemera</label>

			<input value="Hemera" title="" class="radio" id="check02" name="check4" type="checkbox" checked>
			<label for="check02" class="check_label">Zooker</label>
			<br>
			
		</div>
		
	</div>
	<div class="cfclear"></div>
</div>
<div class="form_item">
	<div class="form_element cf_textbox">
		<label class="cf_label" style="display: none;">Enter Your email address</label>
		<input class="cf_inputbox required validate-email" maxlength="150" size="30" title="" id="email_add" name="email_add" type="text" style="color:#000" value="Enter email address" onfocus="if(this.value == 'Enter email address') { this.value = ''; }" onblur="if(this.value == '') { this.value = 'Enter email address'; }">
		
	</div>
	<div class="cfclear"></div>
</div>
<div class="form_item">
	<div class="form_element cf_button">
		<input value="Submit" name="letter_head" type="submit" onclick="giveMessage()">
	</div>
	<div class="cfclear"></div>
</div>
</form>
</div>
</div>

<a href="#topScroll" id="scrolltoTop" class="glyphicon glyphicon-chevron-up"></a>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-87736486-1', 'auto');
  ga('send', 'pageview');
	function giveMessage(){
		alert("Letter Head is added Successfully.");
	}
</script>

</body>
</html>
