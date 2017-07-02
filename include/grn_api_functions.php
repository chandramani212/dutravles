<?php

define("GRN_API_KEY","4a6911b85aeabe47545733cf7436f88c");
define("GRN_BASE_URL","http://api-sandbox.grnconnect.com");
define("GRN_BASE_IMAGE_URL","https://cdn.grnconnect.com");

//Getting Cities by country code
function getCities($countyCode) {
		
	$base_url = GRN_BASE_URL;

	$data = "country=".$countyCode;
	$url = $base_url."/api/v3/cities?".$data;
	$headers = getCommonHeader() ; 
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$output = curl_exec($ch);
	
	curl_close($ch);
	
	$response = (array)(json_decode($output));
	/*
	echo '<pre>';
	print_r($response);
	echo '</pre>';
	*/
	return $response;

}


function getCitiesByCode($cityCode) {
		
	$base_url = GRN_BASE_URL;

	//$data = "country=".$countyCode;
	$url = $base_url."/api/v3/cities/".$cityCode;
	$headers = getCommonHeader() ; 
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$output = curl_exec($ch);
	
	curl_close($ch);
	
	$response = (array)(json_decode($output));
	/*
	echo '<pre>';
	print_r($response);
	echo '</pre>';
	*/
	return $response;

}

function getCommonHeader(){
	$api_key = GRN_API_KEY ;
	return array("api-key: $api_key",'Accept: application/json','Content-Type: application/json');
}


function getAvailableHotel($data, $hcode=''){
	
	
	if(is_array($data) ){
		return getAvailableHotelByFilter($data);
	}else{
		if($hcode!=''){
			return getAvailableHotelById($data , $hcode);
		}else{
			return getAvailableHotelById($data);
		}
		
		
	}
	
}


function getAvailableHotelByFilter($data){
	

	$base_url = GRN_BASE_URL;

	$data = json_encode($data);
	$url = $base_url."/api/v3/hotels/availability";
	$headers = getCommonHeader() ; 

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$output = curl_exec($ch);
	
	curl_close($ch);
	
	$response = (array)(json_decode($output));
	
	
	/*
		echo '<pre>';
	print_r( $response);
	echo '</pre>';
	*/
	
	return $response;


}


function getAvailableHotelById($data, $hcode=''){
	
		
	$base_url = GRN_BASE_URL;

	//$data = "country=".$countyCode;
	
	$url = $base_url."/api/v3/hotels/availability/".$data;
	if($hcode!=''){
		$url .= '?hcode='.$hcode;
	}
	$headers = getCommonHeader() ; 
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$output = curl_exec($ch);
	
	curl_close($ch);
	
	$response = (array)(json_decode($output));
	/*
	echo '<pre>';
	print_r($response);
	echo '</pre>';
	*/
	return $response;

}

function getHotelImages($hcode){
	
	$base_url = GRN_BASE_URL;
	$url = $base_url."/api/v3/hotels/".$hcode."/images";
	$headers = getCommonHeader() ; 
	
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$output = curl_exec($ch);
	
	curl_close($ch);
	
	$response = (array)(json_decode($output));
	/*
	echo '<pre>';
	print_r($response);
	echo '</pre>';
	*/
	return $response;
	
}


function getSearchRequestArray($city,$checkin,$checkout,$client_nationality,$adults,$child='',$response='',$currency='',$rates=''){
	
		//print_r($_POST);
	
	$hotel_search = array();
	$room =array();
	//$children_ages = array();
	$hotel_category = array(2,7);
	
	/*
	for($j=0; $j<count($adults); $j++){
		if(isset($adults[$j]) && $adults[$j]!='' ){
			if(isset($child[$j]) && $child[$j]!='' ){
				for($i=0;$i<$child[$j]; $i++){
					array_push($children_ages,5);
				}
				$room[] = array('adults'=>$adults[$j],'children_ages' => $children_ages);
			}else{
				$room[] = array('adults'=>$adults[$j]);
			}	
		}
	}
	*/
	
	for($j=0; $j<count($adults); $j++){
		$children_ages = array();
		if(isset($adults[$j]) && $adults[$j]!='' ){
			
			for($i=0; $i<count($child[$j]); $i++){
				if(isset($child[$j][$i]) && $child[$j][$i]!='' ){
					array_push($children_ages,$child[$j][$i]);
				}
			}
			
			if(count($children_ages) > 0){
				$room[] = array('adults'=>$adults[$j],'children_ages' => $children_ages);
			}else{
				$room[] = array('adults'=>$adults[$j]);
			}	
		}
	}
	
	
	
	
	$hotel_search['destination_code'] = $city;
	$hotel_search['checkin'] = $checkin;
	$hotel_search['checkout'] = $checkout;
	$hotel_search['client_nationality'] = $client_nationality;
	//Optional start
	$hotel_search['response'] = $response; //full will result complete result set whereas fast will return on some properties
	$hotel_search['currency'] = $currency;
	$hotel_search['rates'] =  $rates ; //concise return only lowest rate whereas comprehensive return full
	//Optional End
	$hotel_search['hotel_category'] = $hotel_category; //Star rating hotel 
	$hotel_search['rooms'] = $room;
	
	return $hotel_search;
}
/*
$room =array();

$data = array();
$hotel_category = array(2,7);
$children_ages = array(5,6);
$room[] = array('adults'=>1);
$room[] = array('adults'=>2,'children_ages' => $children_ages);

$data['destination_code'] = 'C!000555';
$data['checkin'] = '2017-12-29';
$data['checkout'] = '2017-12-30';
$data['client_nationality'] = 'IN';
//Optional start
$data['response'] = 'fast'; //full will result complete result set whereas fast will return on some properties
$data['currency'] = 'INR';
$data['rates'] = 'concise'; //concise return only lowest rate whereas comprehensive return full
//Optional End
$data['hotel_category'] = $hotel_category; //Star rating hotel 
$data['rooms'] = $room;
*/
/*	echo '<pre>';
	print_r( json_encode($data));
	echo '</pre>';
*/




//getAvailableHotel($data)

//getCitiesByCode('C!000001');



?>