$(function(){
	"use strict";
	brand();
function brand(){
	$.ajax({
		method: 'POST',
		url: 'cart_action.php',
		data: {brand: 1},
		success: function(data){
			$("#get_brand").html(data);
		}
	});
}
		  });