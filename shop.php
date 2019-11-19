<!--INCLUDE NAVIGATION BAR ON ALL PAGES-->
<!--The following PHP code pastes all content within head.php in its place-->
<!--head.php contains the opening body tag, so everything that follows will be within the wsite body-->
<?php 
		header("Location: https://www.zazzle.com/deepbluerobotics");
		die();
		$header_referer = __FILE__;
		include ("head.php");?>

<!--BEGIN PAGE CONTENT-->

<!--#jumbotron is the div that contains each page's title and subtitle text-->
<div id="jumbotron">
	<h2 class="main-font header-font">
			SHOP
		</h2>
	<h4 class="main-font sub-font">
		  ALL PROFITS FUND STEM EDUCATION PROGRAMS. 
		</h4>
</div>

<div class="content-wrap secondary-background">
	<h3 id="discount-title" class="main-font title-font white-font">
	</h3>
</div>
<div class="content-wrap">
	<p class="body-font">
		Click on a product to customize colors, sizes, and more!
	</p>

	<div id="shop-container" style="width: 100%"><div align="center"><i class="fa-4x fa fa-cog fa-spin"></i></div></div>
</div>

<div id="split-wrap"></div>
<!--END PAGE CONTENT-->

<!--INCLUDE FOOTER ON ALL PAGES-->
<!--The following PHP code pastes all content within foot.php in its place-->
<!--foot.php contains the closing body tag, so everything that precedes will be within the wsite body-->
<?php 
		$header_referer = __FILE__; 
    include ("foot.php");?>