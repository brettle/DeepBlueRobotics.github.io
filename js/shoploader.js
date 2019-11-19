$promoCode = "promo";
$discount = "FUNDS OUR TEAM";
$highestdiscount = "0% OFF";

//Loads shop products into #shop-container
$.post('grabshopHTML.php', {
	url: 'http://www.zazzle.com/deepbluerobotics/products?st=date_created&ps=128&rf=238592051156730649&tc=mainwebsite9283409',
	element: 'page_productsSearch_collection-itemsContainer'
}, function(data) {
	//Loads promo bar highest discount percent
	//$tempdiscount = data.split(' off with code ')[0].split('>');
	//$discount = $tempdiscount[$tempdiscount.length - 1] + " OFF";
	//document.getElementById('promotext').innerHTML += " <strong>" + $discount + " TODAY!</strong>";

	document.getElementById('shop-container').innerHTML = data;
	$(".ZazzleCollectionItemCell a").attr("target", "_blank");
	$(".ZazzleWwwCollectionItemCellProductMarketplaceGrid-promoLabel").css("display", "none");
	$(".ZazzleCollectionItemCellProduct-titleLink").each(function() {
		if ($(this).html().length > 20) $(this).html($(this).html().substr(0, 17) + "…");
	});

	//Updates shop links with affiliate code and promo code
	$promoCode = data.split(' off with code ')[1].split('<')[0];
	$(".ZazzleCollectionItemCell a").each(function() {
		$(this).attr("href", $(this).attr("href") + '?rf=238592051156730649&tc=mainwebsite9283409&pm=' + $promoCode);
	});

	//Sets respective discount prices and rates for each product
	var i = 0;
	$(".ZazzleWwwCollectionItemCellProductMarketplaceGrid-promoLabel").each(function() {
		$tempdiscount = $(this).html().split(' off with code ')[0].split('>');
		$discount = $tempdiscount[$tempdiscount.length - 1] + " OFF";
		if (parseInt($discount.split('%')[0]) > parseInt($highestdiscount.split('%')[0])) $highestdiscount = $discount;

		var $this = $(".ZazzleCollectionItemCellProduct-price").eq(i);
		var _html = $this.html();
		var discountedPrice = _html.split('$')[1] * (100 - parseInt($discount.split('%')[0])) / 100;
		if (discountedPrice.toString().split('.')[1].length >= 3) discountedPrice = discountedPrice.toString().split('.')[0] + "." + discountedPrice.toString().split('.')[1].substr(0, 2);
		$this.html('$' + discountedPrice + ' | ' + '<font color="red"><strike>' + _html + '</strike></font> | <font color=""><strong>' + $discount + '</strong></font>');
		i++;
	});

	//Loads shop subtitle with highest discount percent
	document.getElementById('discount-title').innerHTML = "EVERYTHING UP TO <font color='white'>" + $highestdiscount + " TODAY!</font>";

});