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
			WHOOPSIE!
		</h2>
	<h4 class="main-font sub-font">
			We can't seem to find what you're looking for. Sorry about that. :/
		</h4>
</div>

<!--#redirect-wrap creates a horizontal banner with some text and a button to redirect viewer to another page-->
<div id="redirect-wrap">
	<div id="redirect-text">
		<h3 class="sub-font">
			 Visit our home page?
			</h3>
	</div>
	<div id="redirect-btn">
		<a class="wsite-button wsite-button-large" href="index.php">
			<span class="wsite-button-inner"><strong>HOME</strong></span>
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