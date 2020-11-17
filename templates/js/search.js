$(document).ready(function(){
    filterSearch();	
    $('.dogDetail').click(function(){
        filterSearch();
    });	
	$('#priceSlider').slider({		
	}).on('change', priceRange); 	
});

function priceRange(e){
	$('.priceRange').html($(this).val() + " - 500");
	$('#minPrice').val($(this).val());
	filterSearch();	
}
function filterSearch() {
	$('.searchResult').html('<div id="loading">Loading .....</div>');
	var action = 'fetch_data';
	var minPrice = $('#minPrice').val();
	var maxPrice = $('#maxPrice').val();
	var dog_breed = getFilterData('dog_breed');
	var color = getFilterData('color');
	var dog_size = getFilterData('dog_size');
	$.ajax({
		url:"action.php",
		method:"POST",
		dataType: "json",		
		data:{action:action, minPrice:	minPrice, maxPrice:maxPrice, dog_breed:dog_breed, color:color, dog_size:dog_size},
		success:function(data){
			$('.searchResult').html(data.html);
		}
	});
}
function getFilterData(className) {
	var filter = [];
	$('.'+className+':checked').each(function(){
		filter.push($(this).val());
	});
	return filter;
}