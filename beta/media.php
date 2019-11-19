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
			MEDIA.
		</h2>
	<h4 class="main-font sub-font">
			Our posts, vids, and pics. Follow us!
		</h4>
</div>

<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap"></div>
<div class="content-wrap">
	
	<!-- Youtube Player -->
	<div class="embed-container">
		<iframe src="https://www.youtube.com/embed?listType=playlist&list=PL_uLVutPGMwP0qteV-TlLQf2oyapuls5k" frameborder="0" allowfullscreen style="border: solid 3px #4FC1FF"></iframe>
	</div>

	<h3 class="main-font title-font black-font topmargin-font bottommargin-font">
		Social Media
	</h3>
		
	<!-- Go to www.addthis.com/dashboard to customize your tools --> 
	<div class="addthis_inline_follow_toolbox"></div>

	<!-- Facebook Feed -->
	<div class="fb-page" data-href="https://www.facebook.com/frcteam199" data-tabs="timeline" data-width="600" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
		<blockquote cite="https://www.facebook.com/frcteam199" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/frcteam199">Deep Blue Robotics</a></blockquote>
	</div>
</div>

<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap"></div>
<!--END PAGE CONTENT-->

<!-- Required Social Media Embed Code -->
<div id="fb-root"></div>
<script>
	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s);
		js.id = id;
		js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>
<!-- Go to www.addthis.com/dashboard to customize your tools --> 
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-581619e1467c26dc"></script> 


<!--INCLUDE FOOTER ON ALL PAGES-->
<!--The following PHP code pastes all content within foot.php in its place-->
<!--foot.php contains the closing body tag, so everything that precedes will be within the wsite body-->
<?php 
		$header_referer = __FILE__; 
    include ("foot.php");?>