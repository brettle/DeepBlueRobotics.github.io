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
			GOODIES
		</h2>
	<h4 class="main-font sub-font">
			Our own private team shop.
		</h4>
</div>

<!--#split-wrap creates a horizontal divider between preceding and following content-->
<div id="split-wrap"></div>
<div class="content-wrap">
	<p class="title-font">
		
	</p>
	<p class="body-font">
		Click on a product to customize and make your own!
	</p>
	
	<div id="shop-container" style="width: 100%">
	<?php
		$promoCode = '';
		$doc = new DomDocument;
		// We need to validate our document before refering to the id
		$doc->validateOnParse = true;
		$doc->loadHtml(file_get_contents('http://www.zazzle.com/carlmontrobotics/products?rf=238592051156730649&tc=mainwebsite9283409&pm=' . $promoCode));
		//$doc->loadHtml(file_get_contents('http://www.zazzle.com/s/robot+clothing?rf=238592051156730649&tc=mainwebsite9283409'));

		echo $doc->getElementById('page_productsSearch_collection-itemsContainer')->C14N();
		?>
		<script>
		$promoCode = '';
		$(".ZazzleCollectionItemCell a[href^='http://']").attr("target","_blank");
		$(".ZazzleCollectionItemCell a").each(function() {
			 var $this = $(this);       
			 var _href = $this.attr("href"); 
			 $this.attr("href", _href + '?rf=238592051156730649&tc=mainwebsite9283409&pm=' + $promoCode);
		});
		$(".ZazzleCollectionItemCellProduct-price").each(function() {
			 var $this = $(this);       
			 var _html = $this.html(); 
			// $this.html(_html + ' | <b>30% OFF</b>');
			 $this.html(_html + '');
		});
		$(".ZazzleWwwCollectionItemCellProductMarketplaceGrid-promoLabel").css("display","none");
		</script>
	</div>
	<p class="body-font topmargin-font">
		</br>
		100% OF ALL PROCEEDS GO TO STEM-RELATED COMMUNITY PROGRAMS. 
	</p>
</div>

<div id="split-wrap"></div>
<!--END PAGE CONTENT-->

<!--INCLUDE FOOTER ON ALL PAGES-->
<!--The following PHP code pastes all content within foot.php in its place-->
<!--foot.php contains the closing body tag, so everything that precedes will be within the wsite body-->
<?php 
		$header_referer = __FILE__; 
    include ("foot.php");?>