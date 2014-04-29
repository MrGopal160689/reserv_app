<link rel="stylesheet" href="view/css/style_parlor-search-widget.css" type="text/css"/>

<form id="parlor_search_form" method="post" action="search.php">
	<ul id="search_form_fields">
		<!--li class="input_field">
			<input type="hidden" id="city_id" value=""/>
			<input type="text" id="city_search_field" placeholder="Enter your city"  autocomplete="off"/>
		</li-->
		<li class="input_field">
			<span><img src="view/image/icn_india.png"/> West Bengal > </span>
		</li>
		<li class="input_field">
			<input type="hidden" id="area_id" name="area_id" value=""/>
			<input type="text" class="search-input" id="area_search_field" placeholder="Enter your area" autocomplete="off"/>
				<div id="city_suggestion_box" class="city_suggestion_box_hidden">
					<ul id="city_suggestion_list">

						<!--
						Suggestion category:
							1. No suggestion box at all for empty field
							2. No such city exists with colour red - in case no such record is found in the database
							3. List of cities with the search string present in it - this list will be selectable, so that if the user clicks on the list, it will be placed in the text field
						-->

					</ul>
				</div>
		</li>
		<li class="input_field">
			<input type="hidden" id="service_id" name="service_id" value=""/>
			<input type="text" class="search-input" id="service_search_field" placeholder="Enter service" autocomplete="off"/>
			<input type="submit" value="GO"/>
				<div id="service_suggestion_box" class="service_suggestion_box_hidden">
					<ul id="service_suggestion_list">
			
				<!--
					The service needs to be filled up in database.
					And also the parlour details, their services as pseudo name need to be filled up
					Then this page will be complete
					Then I will focus on the UI a little bit more. Because the UI will only make the difference for the 
					real users
					Then little bit of improvement in the database design.
								
					Service is to be searched from the link table, because those are the existing services.
					Even before hitting the search button, my application will know whether there are any service offered by any parlour in that area.
				-->

					</ul>
				</div>
		</li>
	</ul>
</form>
<script type="text/javascript" src="view/js/jquery.js"></script>
<script type="text/javascript" src="view/js/search-parlor.js"></script>