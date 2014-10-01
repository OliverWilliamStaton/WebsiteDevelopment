<?php

	// Get the current city
	$city=$_GET['city'];
	
	// Remove the spaces in the variable
	$city=str_replace(" ", "", $city);

	// Get the current contents
	$contents = file_get_contents("http://www.weather-forecast.com/locations/".$city."/forecasts/latest");
	
	// Extract matched portion
	preg_match('/3 Day Weather Forecast Summary:<\/b> \n        <span class="phrase">(.*?)<\/span>/s', $contents, $matches);
	
	// Print matched portion	
	echo $matches[1];
	
?>