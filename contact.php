<!--INCLUDE NAVIGATION BAR ON ALL PAGES-->
<!--The following PHP code pastes all content within head.php in its place-->
<!--head.php contains the opening body tag, so everything that follows will be within the wsite body-->
<?php 
		$header_referer = __FILE__;
		include ("head.php");?>


<!--BEGIN PAGE CONTENT-->

	<!--#jumbotron is the div that contains each page's title and subtitle text-->
	<div id="jumbotron">
		<h2 class="main-font header-font">
			CONTACT US!
		</h2>
		<h4 class="main-font sub-font">
			We would love to hear from you.
		</h4>
	</div>

	<!--#split-wrap creates a horizontal divider between preceding and following content-->
	<div id="split-wrap"></div>

	<div class="content-wrap">
		<p class="black-font">If you have a question, comment, or suggestion you can contact us here.</br>All fields are required. Messages will be sent to contact@carlmontrobotics.org.</br>&nbsp;
		</p>
		<div class="status alert alert-success" style="display: none"></div>
		<form id="main-contact-form" class="contact-form" name="contact-form" method="post" action="sendemail.php" role="form">
			<div class="row">
				<div class="col-sm-5">
					<div class="form-group">
						<input type="text" class="form-control" required="required" placeholder="Name" name="name" id="name" tabindex="1">
						<span class="error"><?php echo $nameErr;?></span>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" required="required" placeholder="Subject" name="subject" id="subject" tabindex="2">
						<span class="error"><?php echo $subjectErr;?></span>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" required="required" placeholder="Email Address" name="email" id="email" tabindex="3">
						<span class="error"><?php echo $emailErr;?></span>
					</div>
					<div class="form-group">
						<button id="desktop-btn" type="submit" class="btn btn-primary btn-lg " tabindex="5">Send Message</button>
					</div>
				</div>
				<div class="col-sm-5">
					<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message" tabindex="4"></textarea>
					<span class="error"><?php echo $messageErr;?></span>
					<button id="mobile-btn" type="submit" class="btn btn-primary btn-lg " tabindex="5">Send Message</button>
				</div>
			</div>
		</form>
		<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d50641.212174848086!2d-122.32607770293002!3d37.50613125856935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e1!4m0!4m5!1s0x808f9f602d194145%3A0xb01daa4ad6f803af!2sCarlmont+High+School%2C+1400+Alameda+de+las+Pulgas%2C+Belmont%2C+CA+94002!3m2!1d37.506136999999995!2d-122.28917!5e0!3m2!1sen!2sus!4v1434427667937"
			frameborder="0" style="border:0"></iframe>
	</div>

	<!--#split-wrap creates a horizontal divider between preceding and following content-->
	<div id="split-wrap"></div>
<!--END PAGE CONTENT-->
	
<!--INCLUDE FOOTER ON ALL PAGES-->
<!--The following PHP code pastes all content within foot.php in its place-->
<!--foot.php contains the closing body tag, so everything that precedes will be within the wsite body-->
	<?php 
		$header_referer = __FILE__; 
    include ("foot.php");?>