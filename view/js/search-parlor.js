document.getElementById('input_select_location').onkeyup = function(e){
	var value = this.value.replace(/(^\s+|\s+$)/g,'');
	if(value.length){
		document.getElementById('city_suggestion_box').className="city_suggestion_box";
		// alert(value);
		
			var xmlhttp;
			if (window.XMLHttpRequest)
			{
				// code for IE7+, Firefox, Chrome, Opera, Safari
				xmlhttp=new XMLHttpRequest();
			}
			else
			{
				// code for IE6, IE5
				xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
			}
			xmlhttp.onreadystatechange=function()
			{
				if (xmlhttp.readyState==4 && xmlhttp.status==200)
				{
					document.getElementById("city_suggestion_list").innerHTML=xmlhttp.responseText;
				}
			}
			xmlhttp.open("POST","model/helper/search_area.php",true);
			xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
			xmlhttp.send("area="+value);
		
	}
	else{
		document.getElementById('city_suggestion_box').className="city_suggestion_box_hidden";
	}
};

document.getElementById('input_select_location').addEventListener("blur",function(e){
	document.getElementById('city_suggestion_box').className="city_suggestion_box_hidden";
});

document.getElementById('city_suggestion_list').addEventListener("mouseover",function(e){
	if (e.target.tagName.toLowerCase() == 'li') {
		var id = e.target.childNodes[0].value;
		var value = e.target.childNodes[1].textContent;
		var areaname = value.substr(0,value.indexOf(','));
		document.getElementById('area_id').setAttribute('value',id);
		document.getElementById('input_select_location').value = areaname;
	}
});

document.getElementById('input_select_service').onkeyup = function(e){
	var value = this.value.replace(/(^\s+|\s+$)/g,'');
	if(value.length){
		document.getElementById('service_suggestion_box').className="service_suggestion_box";
		// alert(value);
		
		var xmlhttp;
		if (window.XMLHttpRequest)
		{
			// code for IE7+, Firefox, Chrome, Opera, Safari
			xmlhttp=new XMLHttpRequest();
		}
		else
		{
			// code for IE6, IE5
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
		xmlhttp.onreadystatechange=function()
		{
			if (xmlhttp.readyState==4 && xmlhttp.status==200)
			{
				document.getElementById("service_suggestion_list").innerHTML=xmlhttp.responseText;
			}
		}
		xmlhttp.open("POST","model/helper/search_service.php",true);
		xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
		xmlhttp.send("service="+value);
		
	}
	else{
		document.getElementById('service_suggestion_box').className="service_suggestion_box_hidden";
	}
};

document.getElementById('input_select_service').addEventListener("blur",function(e){
	document.getElementById('service_suggestion_box').className="service_suggestion_box_hidden";
});

document.getElementById('service_suggestion_list').addEventListener("mouseover",function(e){
	if (e.target.tagName.toLowerCase() == 'li') {
		var id = e.target.childNodes[0].value;
		var servicename = e.target.childNodes[1].textContent;
		document.getElementById('service_id').setAttribute('value',id);
		document.getElementById('input_select_service').value = servicename;
	}
});
/*
// $('#area_search_field').keyup(function(){
	
	// if($.trim(this.value).length){
		// var value = $(this).val();
		// $('#city_suggestion_box').attr('class','city_suggestion_box');			
		// $.post("model/helper/search_area.php",{area:value},function(data){
			// $('#city_suggestion_list').html(data);
		// });
	// }
	// else{
		// $('#city_suggestion_box').attr('class','city_suggestion_box_hidden');
	// }
	
// });

// $('#area_search_field').focusout(function(){
		// $('#city_suggestion_box').attr('class','city_suggestion_box_hidden');			
	// }
// );



// $("#city_suggestion_list").on('mouseenter','.area_list', function(){
	// var area_selected = $(this).text();
	// var area_id = $(this).children('.fetched_areaid').val();
	// var areaname_only = area_selected.substr(0,area_selected.indexOf(','));
	// $("#area_search_field").val(areaname_only);
	// $("#area_id").attr("value",area_id);
// });

// $('#service_search_field').keyup(function(){
	// if($.trim(this.value).length){
		// var value = $(this).val();
		// $('#service_suggestion_box').attr('class','service_suggestion_box');
		// $.post("model/helper/search_service.php",{service:value},function(data){
			// $('#service_suggestion_list').html(data);
		// });
	// }
	// else{
		// $('#service_suggestion_box').attr('class','service_suggestion_box_hidden');
	// }
// });
// $('#service_search_field').focusout(function(){
		// $('#service_suggestion_box').attr('class','service_suggestion_box_hidden');			
	// }
// );
// $("#service_suggestion_list").on('mouseenter','.service_list', function(){
	// var service_selected = $(this).text();
	// var service_id = $(this).children('.fetched_service_id').val();
	// $("#service_search_field").val(service_selected);
	// $("#service_id").attr("value", service_id);
// });

*/