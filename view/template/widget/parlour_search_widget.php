<link rel="stylesheet" href="view/css/style_parlor-search-widget.css" type="text/css"/>
<form id="parlor_search_form" method="post" action="search.php">
<div id="search_wrap">
	<div id="select_state">West Bengal</div>
	<div id="state_arrow"></div>
	<input type="hidden" id="area_id" name="area_id" value=""/>
	<input placeholder="Select Location" type="text" id="input_select_location" autocomplete="off"/>
		<div id="city_suggestion_box" class="city_suggestion_box_hidden">
			<ul id="city_suggestion_list"></ul>
		</div>
	<input type="hidden" id="service_id" name="service_id" value=""/>
	<input placeholder="Select Service" type="text" id="input_select_service" autocomplete="off"/>
		<div id="service_suggestion_box" class="service_suggestion_box_hidden">
			<ul id="service_suggestion_list"></ul>
		</div>
	<input type="submit" value="" id="btn_search_parlour"/>
</div>
</form>

<script type="text/javascript" src="view/js/search-parlor.js"></script>