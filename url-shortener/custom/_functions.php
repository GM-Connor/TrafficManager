<?php 

// Functions
// --------------------------------------------------

// Get country code
function get_client_country_code(){
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = @$_SERVER['REMOTE_ADDR'];
    if(filter_var($client, FILTER_VALIDATE_IP)){
        $ip = $client;
    }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
        $ip = $forward;
    }else{
        $ip = $remote;
    }
    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));    
    if($ip_data && $ip_data->geoplugin_countryName != null){
        return $ip_data->geoplugin_countryCode;
    }
    return false;
}


// Return random value from array
function array_rand_value( $arr ) {
	return $arr[array_rand($arr)];
}

// Link picker
function pick_link_from_array( $arr ) {
	while ( is_array($arr) ) {
		$arr = array_rand_value($arr);
	}
	return $arr;
}

?>