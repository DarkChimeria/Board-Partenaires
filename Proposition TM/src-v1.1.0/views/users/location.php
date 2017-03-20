<?php
/**
 * @Author: antho
 * @Date:   2017-03-19 23:00:08
 * @Last Modified by:   antho
 * @Last Modified time: 2017-03-20 01:25:03
 */
// echo '<pre>';
// print_r($viewmodel);
// echo '</pre>';

$adress = array();
$geo_url = array();
$latLong = array();
foreach($viewmodel as $key => $item) {
	$adress[] = $item['adress'].',+'.$item['cp'].',+'.$item['city'];
	$geo_url[] = "http://maps.google.com/maps/api/geocode/json?address=$adress[$key]&sensor=false";

		echo $key . ' ' . $adress[$key] . '<br>';
		$latLong[$key] = getLatLong($adress[$key]);
		$latitude = $latLong[$key]['latitude']?$latLong[$key]['latitude']:'Not found';
		$longitude = $latLong[$key]['longitude']?$latLong[$key]['longitude']:'Not found';

	
}

function getLatLong($adress){
	if(!empty($adress)){
        //Formatted adress
		$formattedAddr = str_replace(' ','+',$adress);
        //Send request and receive json data by adress
		$geocodeFromAddr = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='.$formattedAddr.'&sensor=false'); 
		$output = json_decode($geocodeFromAddr);
        //Get latitude and longitute from json data
		$data['latitude']  = $output->results[0]->geometry->location->lat; 
		$data['longitude'] = $output->results[0]->geometry->location->lng;
        //Return latitude and longitude of the given adress
		if(!empty($data)){
			return $data;
		}else{
			return false;
		}
	}else{
		return false;   
	}
}


echo '<pre>';
print_r($latLong);
echo '</pre>';

echo '<pre>';
print_r($geo_url);
echo '</pre>';

echo '<pre>';
print_r($adress);
echo '</pre>';

?>


<div id="map_markers_div" style="width: 400px; height: 300px"></div>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">


	google.charts.load("current", {packages:["map"]});
	google.charts.setOnLoadCallback(drawChart);
	function drawChart() {
		var data = google.visualization.arrayToDataTable([
			['Latitude', 'Long'],
			[37.4232, -122.0853],
			[37.4289, -122.1697],
			[37.6153, -122.3900],
			[37.4422, -122.1731]
			]);

		var options = {
			icons: {
				default: {
					normal: 'https://icons.iconarchive.com/icons/icons-land/vista-map-markers/48/Map-Marker-Ball-Azure-icon.png',
					selected: 'https://icons.iconarchive.com/icons/icons-land/vista-map-markers/48/Map-Marker-Ball-Right-Azure-icon.png'
				}
			}
		};

		var map = new google.visualization.Map(document.getElementById('map_markers_div'));
		map.draw(data, options);
	}

</script>

