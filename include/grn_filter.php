<?php
session_start();
include('grn_api_functions.php');

	
	$hotel_search = getSearchRequestArray($_SESSION['hotels']['city'], $_SESSION['hotels']['checkin'], $_SESSION['hotels']['checkout'], $_SESSION['hotels']['client_nationality'], $_SESSION['hotels']['adult'], $_SESSION['hotels']['child'], $_SESSION['hotels']['response'], $_SESSION['hotels']['currency'], $_SESSION['hotels']['rates']);
	
	$value = getAvailableHotel($hotel_search);
/*
	echo '<pre>';
	print_r($hotel_search);
	echo '</pre>';
	exit;
*/
$_SESSION['hotels']['price_range'] = isset($_POST['price_range'])?$_POST['price_range']:'';
$_SESSION['hotels']['amenities'] = isset($_POST['amenities'])?$_POST['amenities']: array();
$_SESSION['hotels']['star_rating'] = isset($_POST['star_rating'])?$_POST['star_rating']:'' ;
$_SESSION['hotels']['hotel_name'] = $_POST['hotel_name'];


$price_range = $_SESSION['hotels']['price_range'];
$amenities =  $_SESSION['hotels']['amenities'];
$star_rating = $_SESSION['hotels']['star_rating'];
$hotel_name = $_SESSION['hotels']['hotel_name'];

$filterHotel = json_decode( json_encode($value), true);
	
$filterHotel['hotels'] = array();

foreach($value['hotels'] as $hotel){
	$status=true;
	$priceCondition =true;
	$amenityCondition =true;
	$ratingCondition =true;
	$nameCondition =true;
	
	//echo 'MANI:'.$hotel->name.":".$hotel->min_rate->price;
	
	if(!empty($hotel_name) && $hotel_name!=''){
		
		if (strpos($hotel->name, $hotel_name) !== false) {
			
		}else{
			$nameCondition = false;
		}
		
	}
	//This is for price condition
	if(!empty($price_range) && $price_range!=''){
		
		if (strpos($price_range, '<') !== false) {
			$price_range_con = explode('<',$price_range);
			//print_r($price_range_con);
			if($hotel->min_rate->price < $price_range_con[1]){
				//echo "Inise PRice condition : <br/>";
			}else{
				$priceCondition = false;
			}
			
		}else if(strpos($price_range, '&&') !== false) {
			$price_range_con = explode('&&',$price_range);
			if( ($hotel->min_rate->price >=$price_range_con[0]) && ($hotel->min_rate->price <= $price_range_con[1]) ){
				
			}else{
				$priceCondition = false;
			}
		}else if(strpos($price_range, '>=') !== false) {
			$price_range_con = explode('>=',$price_range);
			if($hotel->min_rate->price >= $price_range_con[1]){
				//echo "Inise PRice condition : <br/>";
			}else{
				$priceCondition = false;
			}
		}

	}
	
	
	//This is for amenities
	foreach($amenities as $amenity){
		if (strpos($hotel->facilities, $amenity) !== false) {
			
		}else{
			$amenityCondition = false;
			continue;
		}
	}
	
	//This is for Star rating
	if(!empty($star_rating) && $star_rating!=''){
		if($star_rating == $hotel->category){
			
		}else{
			$ratingCondition =false;
		}
	}
	
	//checking for all filter condition
	if($priceCondition && $amenityCondition && $ratingCondition && $nameCondition){
		array_push($filterHotel['hotels'] , $hotel);
	}else{
		continue;
	}
	

	

	
}



$price_range_condition = '';

/*
	echo '<pre>';
	print_r($filterHotel);
	echo '</pre>';
	exit;
	*/

$data = array();
$content = '';	

$counter = 0;
	
?>


				<?php foreach($filterHotel['hotels'] as $hotel){ 
						$counter++;
						$star = $hotel->category;
						$facilities = $hotel->facilities;
          $content .=  '<section class="srpCards ">
                          <div class="col-md-4 col-sm-4 col-xs-12 pad0">
                            <a href="#" target="_blank"><img src="'.GRN_BASE_IMAGE_URL.'/'.$hotel->images->main_image.'" class="img-responsive" ></a>
                          </div>
                          <div class="col-md-8 col-sm-8 col-xs-12 padL15"> 
                            <div class="col-md-8 col-sm-8 col-xs-12 pad0">
                                <div class="hotel-title">
                                    <a href="#">'.$hotel->name.'</a>
                                </div>
                                <div class="hotel-area">Area : <i class="fa fa-map-marker"></i> '.$hotel->address .'</div>
								
                                <span class="dib padT5 padL15" data-toggle="tooltip" data-placement="right" title="'.$star.' Star Hotel"> ';
								for($i=0; $i<$star; $i++) { 
                                 $content .= '<i class="fa fa-star fl yellow  padR5"></i>';
								 } 
                                $content .='  <span class="hotel-area">('. $star .'/5)</span>
                                </span>
                                <div class="width100">
                                <ul class="amenitiesLabel">';
								 
								
									 if (strpos($facilities, 'wi-fi') !== false) {
                        $content .='<li>
                                        <span data-toggle="tooltip" title="Wifi"><img src="img/hotel-icons/wifi.png"></span>
                                    </li>';
									 } 
									if (strpos($facilities, 'bar') !== false) {
                         $content .='<li>
                                        <span data-toggle="tooltip" title="Bar"><img src="img/hotel-icons/cup.png"></span>
                                    </li>';
									 } 
									if (strpos($facilities, 'air conditioning') !== false) {
                         $content .='<li>
                                        <span data-toggle="tooltip" title="Air Conditioner"><img src="img/hotel-icons/air-conditioner.png"></span>
                                    </li>';
									 } 
									
									if (strpos($facilities, 'Restaurant') !== false) {
                        $content .='<li>
                                        <span data-toggle="tooltip" title="Restaurent"><img src="img/hotel-icons/restaurent.png"></span>
                                    </li>';
									 } 
									
									if (strpos($facilities, 'cafe') !== false) {
                        $content .='<li>
                                        <span data-toggle="tooltip" title="Cafe"><img src="img/hotel-icons/cafe.png"></span>
                                    </li>';
									} 
									
									if (strpos($facilities, 'room service') !== false) {
                        $content .='<li>
                                        <span data-toggle="tooltip" title="Room Service"><img src="img/hotel-icons/room-service.png"></span>
                                    </li>';
									 } 
									
									 if (strpos($facilities, 'pool') !== false) {
                        $content .='<li>
                                        <span data-toggle="tooltip" title="Pool"><img src="img/hotel-icons/exercise.png"></span>
                                    </li>';
									} 
									
									 if (strpos($facilities, 'gym') !== false) {
                        $content .='<li>
                                        <span data-toggle="tooltip" title="Gym"><img src="img/hotel-icons/gym.png"></span>
                                    </li>';
									 } 
									
									if (strpos($facilities, 'internet access') !== false || strpos($facilities, 'free internet') !== false) {
                        $content .='<li>
                                        <span data-toggle="tooltip" title="Free Internet"><img src="img/hotel-icons/free-internet.png"></span>
                                    </li>';
									 }
									
                   $content .=' </ul>
                                </div>
                                <div class="width100">
                                     <a href="hotel-details.php?search_id='.$value['search_id'].'&h_code='.$hotel->hotel_code.'&star='.$star.'" style="text-decoration: none"><i class="fa fa-eye"></i> View Details</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 pad0">
                                <div class="col-md-12 col-sm-12 col-xs-12 pad0">
                                <div class="price-label">
                                    <span>Price For 14 Nights</span>
                                </div>
                                </div>
                                 <div class="col-md-12 col-sm-12 col-xs-12 pad0">
                                   <div class="hotel-price">
                                    <span><i class="fa fa-inr "></i>'.round($hotel->min_rate->price).'</span>
                                   </div>
                                 </div>
								 <!--
                                 <div class="col-md-12 col-sm-12 col-xs-12 pad0">
                                   <div class="hotel-fake-price">
                                    <span><i class="fa fa-inr "></i> 24570</span>
                                   </div>
                                 </div>
								 -->
                                 <div class="col-md-12 col-sm-12 col-xs-12 pad0">
                                    <div class="btn-link">
                                      <a href="#" style="text-decoration: none">Choose Rooms</a>
                                    </div>
                                 </div>
                             </div>
                          </div>
                         
                        </section>';
						 } 
				
				$data['content'] = $content;
				$data['no_of_hotels'] = $counter;
				echo json_encode($data);
