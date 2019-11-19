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
			SHOP.
		</h2>
	<h4 class="main-font sub-font">
			Support and buy a cool shirt!
		</h4>
</div>

<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap"></div>

<div class="parallax-window" data-parallax="scroll" data-image-src="images/denim.jpg" data-position="center center" data-speed="0.7"></div>

<div class="content-wrap secondary-background">
	<h3 class="main-font title-font white-font">
				Coming Soon!
			</h3>
</div>
<div class="content-wrap">

</div>
<!--END PAGE CONTENT-->

<!--INCLUDE FOOTER ON ALL PAGES-->
<!--The following PHP code pastes all content within foot.php in its place-->
<!--foot.php contains the closing body tag, so everything that precedes will be within the wsite body-->
<?php 
		$header_referer = __FILE__; 
    include ("foot.php");?>