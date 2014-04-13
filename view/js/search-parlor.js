$('#area_search_field').keyup(function(){
	
	if($.trim(this.value).length){
		var value = $(this).val();
		$('#city_suggestion_box').attr('class','city_suggestion_box');			
		$.post("model/helper/search_area.php",{area:value},function(data){
			$('#city_suggestion_list').html(data);
		});
	}
	else{
		$('#city_suggestion_box').attr('class','city_suggestion_box_hidden');
	}
	
});
$('#area_search_field').focusout(function(){
		$('#city_suggestion_box').attr('class','city_suggestion_box_hidden');			
	}
);
$("#city_suggestion_list").on('mouseenter','.area_list', function(){
	var area_selected = $(this).text();
	var area_id = $(this).children('.fetched_areaid').val();
	var areaname_only = area_selected.substr(0,area_selected.indexOf(','));
	$("#area_search_field").val(areaname_only);
	$("#area_id").attr("value",area_id);
});
$('#service_search_field').keyup(function(){
	if($.trim(this.value).length){
		var value = $(this).val();
		$('#service_suggestion_box').attr('class','service_suggestion_box');
		$.post("model/helper/search_service.php",{service:value},function(data){
			$('#service_suggestion_list').html(data);
		});
	}
	else{
		$('#service_suggestion_box').attr('class','service_suggestion_box_hidden');
	}
});
$('#service_search_field').focusout(function(){
		$('#service_suggestion_box').attr('class','service_suggestion_box_hidden');			
	}
);
$("#service_suggestion_list").on('mouseenter','.service_list', function(){
	var service_selected = $(this).text();
	var service_id = $(this).children('.fetched_service_id').val();
	$("#service_search_field").val(service_selected);
	$("#service_id").attr("value", service_id);
});