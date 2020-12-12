
getCategory();

function getCategory(){
	$.post('server/stone/list_category.php', function(category){
		$("#view_category").html(category);
	});
}

getProduct();

function getProduct(){
	$.post('server/stone/list_product.php', function(product){
		$("#view_product").html(product);
	});
}
