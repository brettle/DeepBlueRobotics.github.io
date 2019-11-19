<!--INCLUDE NAVIGATION BAR ON ALL PAGES-->
<!--The following PHP code pastes all content within head.php in its place-->
<!--head.php contains the opening body tag, so everything that follows will be within the wsite body-->
<?php 
		$header_referer = __FILE__;
		include ("head.php");?>


<!--BEGIN PAGE CONTENT-->

<!--#jumbotron is the div that contains each page's title and subtitle text-->
<div id="jumbotron">
	<h2 class="main-font header-font">MORE THAN JUST THE ROBOT.</h2>
	<h4 class="main-font sub-font">Carlmont High School FRC Team 199</h4>
</div>

<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap"></div>
<!--#redirect-wrap creates a horizontal banner with some text and a button to redirect viewer to another page
<div id="redirect-wrap" style="background-color: #ff79c6; color: #010304;">
	<div id="redirect-text">
		<h3 class="sub-font">
			 Track our team's progress in competition!
			</h3>
	</div>
	<div id="redirect-btn">
		<a class="wsite-button wsite-button-large" href="thebluealliance.com/event/2017cc">
			<span class="wsite-button-inner"><strong>COMPETITION STATUS</strong></span>
		</a>
	</div>
</div>-->

<div class="parallax-window" data-parallax="scroll" data-image-src="images/Team2018.JPG" data-position="center center"></div>

<!--#redirect-wrap creates a horizontal banner with some text and a button to redirect viewer to another page-->
<div id="redirect-wrap">
	<div id="redirect-text">
		<h3 class="sub-font">
			 Promoting STEM and Community Service. Meet our team!
			</h3>
	</div>
	<div id="redirect-btn">
		<a class="wsite-button wsite-button-large" href="about.php">
			<span class="wsite-button-inner"><strong>OUR STORY</strong></span>
		</a>
	</div>
</div>

<div class="parallax-window" data-parallax="scroll" data-image-src="images/Davis/DSC02293.JPG" data-position="center center"></div>

<!--#redirect-wrap creates a horizontal banner with some text and a button to redirect viewer to another page-->
<div id="redirect-wrap">
	<div id="redirect-text">
		<h3 class="sub-font">
			 Become an official sponsor!
			</h3>
	</div>
	<div id="redirect-btn">
		<a class="wsite-button wsite-button-large" href="sponsor-us">
			<span class="wsite-button-inner"><strong>SPONSOR US</strong></span>
		</a>
	</div>
</div>

<div class="parallax-window" data-parallax="scroll" data-image-src="images/Davis/DSC01952.JPG" data-position="center center"></div>

<!--#redirect-wrap creates a horizontal banner with some text and a button to redirect viewer to another page-->
<div id="redirect-wrap">
	<div id="redirect-text">
		<h3 class="sub-font">
			 Shop at our online store!
			</h3>
	</div>
	<div id="redirect-btn">
		<a class="wsite-button wsite-button-large" href="shop.php">
			<span class="wsite-button-inner"><strong>SHOP</strong></span>
		</a>
	</div>
</div>
<!--END PAGE CONTENT-->

<!--INCLUDE FOOTER ON ALL PAGES-->
<!--The following PHP code pastes all content within foot.php in its place-->
<!--foot.php contains the closing body tag, so everything that precedes will be within the wsite body-->
<?php 
		$header_referer = __FILE__; 
    include ("foot.php");?>