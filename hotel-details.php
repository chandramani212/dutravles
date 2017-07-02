<?php 
session_start();
include('include/grn_api_functions.php');

$search_id = $_GET['search_id'];
$hcode = $_GET['h_code'] ; 
$star = $_GET['star'] ; 
$errors = null;

$hotelDetails = getAvailableHotel($search_id, $hcode);
/*
echo '<pre>';
  print_r($hotelDetails );
  echo '</pre>';
  exit;
 */ 
$hotel = $hotelDetails['hotel'];
if(isset($hotelDetails['errors']) ){
  
  $errors = $hotelDetails['errors'][0]->code;
}
$hotelImg = getHotelImages($hcode);

/*
  echo '<pre>';
  print_r($errors );
  echo '</pre>';
  exit;
*/

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hotel Search | Destination Unlimited Travels</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/lib.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
     <link rel="stylesheet" type="text/css" href="sm-admin/formvalidation/vendor/formvalidation/css/formValidation.min.css">
    <link rel="stylesheet" href="sm-admin/dist/css/pnotify.custom.min.css">
<link rel="stylesheet" href="sm-admin/dist/css/jquery-ui.min.css">
<link href="css/select2.css" rel="stylesheet">
<link rel="stylesheet" href="css/easy-responsive-tabs.css">
<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
<link rel='stylesheet' href='unitegallery/dist/css/unite-gallery.css' type='text/css' />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  
  <style>
       #map {
        height: 400px;
        width: 100%;
       }
    </style>

<style>
.block1{color: #666}
.no-padding{padding: 0px}
.destination-img{background: url(img/destination.jpg) ;background-size: 100% 100%;-webkit-background-size: 100% 100%;-o-background-size: 100% 100%;-ms-background-size: 100% 100%;-moz-background-size: 100% 100%;min-height: 100px;font-family: 'Oxygen', sans-serif;text-shadow: 0 2px 2px rgba(0,0,0,0.2);font-weight: 700;}
.destination-layer {padding: 20px 0px;background: rgba(51, 51, 51, 0.3);min-height: 100px;}
.destination-title{margin-top:10px;}} 
.breadcrumb{margin-top: 20px}
section.srpCards{width: 100%;float: left;padding: 15px;border: 1px solid #e6e6e6;margin-top: 5px;background: #fff;
box-shadow: 0 1px #FFFFFF inset, 0 1px 3px rgba(34, 25, 25, 0);}
section.srpCards:hover{box-shadow: 0 1px #FFFFFF inset, 0 1px 3px rgba(34, 25, 25, 0.4);}
.width100 {width: 100%;}
.pad0 {padding: 0 !important;}
.padL15 { padding-left: 15px;}
.hotel-title{margin-top: 10px}
.hotel-title a{text-decoration: none;font-size: 16px;font-weight: 600}
.hotel-area{color: #a2a0a0;}
.marginT15 {padding-top: 15px;}
.padT5 {padding-top: 5px;}
.padL15 {padding-left: 15px;}
.padR5 {padding-right: 5px;}
.dib {display: inline-block;}
.yellow {color: #f7c541;}
 .amenitiesLabel{list-style: none;margin-top: 20px;padding: 0px;}
 .amenitiesLabel li{display:inline-block;margin-bottom: 20px}
 .amenitiesLabel li span{background: #f5f5f5;padding: 10px}
 .amenitiesLabel li span img{width: 24px;margin-right: 10px;}
 .price-label span{background: #666;border: 1px solid #666;color: #fff;padding: 3px 7px;;font-size: 12px !important;border-radius: 2px;}
 .price-label{margin-top: 15px !important;max-width: 140px;min-width: 80px;float: right;margin-bottom: 2px;}
.price-label span:before{border-top: 11px solid #666;border-width: 8px !important;border-left: 11px solid transparent;border-right: 11px solid transparent;right: 15px;top: 100%;content: '';position: absolute; z-index: 1;}
.hotel-price{float:right;margin-top: 20px;font-weight: 500;font-size: 30px;}
.hotel-fake-price{float:right;margin-top: 5px;font-weight: 500;font-size: 14px;color: #999;}
.hotel-fake-price i{text-decoration: line-through;}
.hotel-fake-price span{text-decoration: line-through;}
.btn-link{float: right;margin-top: 30px}
.btn-link a{background: #F34F4F;border: 1px solid #F34F4F; color: #fff;padding: 10px 15px;text-decoration: none;border-radius: 5px}
.btn-link a:hover{text-decoration: none;background: #EA2330}
.search-blcok{text-align: left;border-bottom: 1px solid #e2e2e2;}
.search-title{line-height: 30px}

/* FANCY COLLAPSE PANEL STYLES */
.fancy-collapse-panel .panel{padding: 10px 0px 10px 0px;}
.fancy-collapse-panel .panel-heading a.collapsed:after {content: "\f196";}
.clickable{cursor: pointer;   }
.fancy-collapse-panel .panel-heading span {margin-top: -20px;font-size: 15px;}
.fancy-collapse-panel .panel-heading{padding: 10px 0px}
.fancy-collapse-panel .panel{box-shadow: none;border-bottom: 1px solid #ddd;margin-bottom: 0px;border-radius: 0px}
.fancy-collapse-panel .panel .panel-body {padding: 10px 0px 0px 0px;}
.fancy-collapse-panel .panel .panel-body.padR5 {padding-right: 5px;}
.scrolling{padding: 10px 0px 0px 0px;height: 165px;overflow: scroll;overflow-x: auto;}
.label-count{float: right;color: #999;font-size: 13px}
.checkbox label {padding-left: 0px}
.checkbox label:after, 
.radio label:after {content: '';display: table;clear: both;}
.checkbox .cr,
.radio .cr {position: relative;display: inline-block;border: 1px solid #a9a9a9;border-radius: .25em;width: 1.3em;height: 1.3em;float: left;margin-right: .5em;}
.radio .cr {border-radius: 50%;}
.checkbox .cr .cr-icon,
.radio .cr .cr-icon { position: absolute;font-size: .8em;line-height: 0;top: 50%;left: 20%;}
.radio .cr .cr-icon {margin-left: 0.04em;}
.checkbox label input[type="checkbox"],
.radio label input[type="radio"] {display: none;}
.checkbox label input[type="checkbox"] + .cr > .cr-icon,
.radio label input[type="radio"] + .cr > .cr-icon {transform: scale(3) rotateZ(-20deg);opacity: 0;transition: all .3s ease-in;}
.checkbox label input[type="checkbox"]:checked + .cr > .cr-icon,
.radio label input[type="radio"]:checked + .cr > .cr-icon {transform: scale(1) rotateZ(0deg);opacity: 1;}
.checkbox label input[type="checkbox"]:disabled + .cr,
.radio label input[type="radio"]:disabled + .cr {opacity: .5;}
.side-ul{padding: 0px;list-style: none;text-transform: uppercase;}
.side-ul li {margin-bottom: 10px}
.side-ul li i{padding: 15px;margin-right: 10px;color: #545454;background: #f5f5f5;text-align: center }
.span-title{font-size: 13px;font-weight: 600;color: #666}
.ul-inclusion{list-style: none;font-size: 12px;padding: 0px;color: #4c4b4b}
.ul-inclusion .marginT15{margin-top: 15px}
.ul-amities{padding: 0px;list-style: none}
.ul-amities .li-amities {border-bottom: 1px solid #e4e4e4;padding-bottom: 20px;margin-bottom: 10px}
.ul-amities li label{color: #333;font-size: 16px;font-weight: 600}
.ul-amities li .ul-amities-inner{list-style: none;padding: 0px}
.ul-amities li .ul-amities-inner li{display: inline-block;margin-right: 10px}
.ul-hotel-policies{list-style: none;padding: 0px}
.ul-hotel-policies li{display: inline-block;margin-right: 10px}
.ul-hotel-policies li i{padding: 15px;margin-right: 10px;color: #545454;background: #f5f5f5;}
.ul-policies{list-style: none;padding: 0px}
.ul-policies li:before{content:"\f00c";font-family: FontAwesome;display: inline-block;width: 1.3em }
@media only screen and (max-width: 767px){
.btn-link{float: left;margin-top: 30px}
.col-xs-7 .btn-link{float: left;margin-top: 30px}
.col-xs-7 .price-label{float: left}
.col-xs-7 .hotel-price{float: left}
.col-xs-7 .price-label span:before{right:60px;}
}
</style>
</head>
<body>
     <!--.header start-->
    <?php include'include/header.php'; ?>
    <!--/header end-->

<section id="sec-top">
  
</section>
 <section id="special-tour section">
  
  
    <div class="container">
    <?php if($errors !=null ){
      if($errors == 1504){
        $msg = "This document has been expired Please go back and choose hotel again";
      }else{
        $msg ="This page has expired Please go back";
      }
      
      echo '<h1 class="text-warning">'.$msg.'</h1>';
      exit;
    }
    ?>
      <div class="row">
      <div class="col-lg-12">
        <div class="col-lg-8 col-sm-6 pad0">
          <h3><?php echo $hotel->name ; ?></h3>
          <p><?php echo $hotel->address ; ?></p>
        </div>
        <div class="col-lg-2 col-sm-3 pad0">
           <div class="hotel-price">
             <!-- <span><i class="fa fa-inr "></i> 45780</span> -->
            </div>
        </div>
        <div class="col-lg-2 col-sm-3 pad0">
            <div class="btn-link">
              <a href="">Choose Room</a>
            </div>
        </div>
        </div>
        <!--col-lg-12-->
      </div>
      <!--.row-->
      <br>
      <div class="row">
        <div class="col-lg-12">
        <div class="demo">

          <div id="horizontalTab">
          <ul class="resp-tabs-list col-lg-12" style="">
            <li><a href="">Photos</a></li>
            <li><a href="#sectionRooms">Rooms</a></</li>
            <li onclick="initGMap()"><a href="#sectionMap">Map</a> </li>
            <!-- <li>Amities</li>-->
            <li><a href="#sectionPolicy">Hotel Policies</a> </li>
          </ul>
          <div class="resp-tabs-container">
          <div class="resp-tabs-body">
          <h3>Photos</h3>
            <div class="row">
              <div class="col-lg-9">
                <div id="gallery" style="display:none;">
          <?php 
          $i=0;
          foreach($hotelImg['images']->regular as $image ) {
            $i++;
            if($i == 5){
            break;  
            }
          ?>
                    <img alt="Preview Image 1"
                     src="<?php echo GRN_BASE_IMAGE_URL.'/'.$image->path; ?>"
                     data-image="<?php echo GRN_BASE_IMAGE_URL.'/'.$image->path; ?>"
                     data-description="<?php echo $hotelDetails['hotel']->name.' Images' ; ?>">
                  
          <?php } ?>
                </div>
              </div>
              <!--col-lg-9-->
        
              <div class="col-lg-3">
                  <ul class="side-ul">
                      <li><i class="fa fa-hotel"></i> <?php echo $star; ?> Star Hotels</li> 
                     
                  </ul>
                  <hr>
                  <span class="dib padT5 padL15" data-toggle="tooltip" data-placement="right" title="<?php echo $star; ?> Star Hotel">
                    <i class="fa fa-star fl yellow  padR5"></i>
                    <i class="fa fa-star fl yellow  padR5"></i>
                    <i class="fa fa-star fl yellow  padR5"></i>
                    <i class="fa fa-star fl yellow  padR5"></i>
                    <span class="hotel-area">(<?php echo $star; ?>/5)</span>
                  </span>
                  <hr>
                   <ul class="side-ul">
                      <li><i class="fa fa-clock-o"></i> <b>CHECKIN</b> <?php echo $hotelDetails['checkin'] ;?></li> 
                      <li><i class="fa fa-clock-o"></i> <b>CHECKOUT</b> <?php echo $hotelDetails['checkout'] ;?></li>
                  </ul>
              </div>
              <!--col-lg-3-->
            </div>
            <!--.row-->
            <div class="row">

              <div class="col-lg-12">
                  <br>
                  <label><b>AMENITIES HIGHLIGHTS</b></label>
                 <ul class="amenitiesLabel">
          <?php $facilities = $hotel->facilities;
          ?>
            <?php if (strpos($facilities, 'wi-fi') !== false) {?>
            <li>
              <span data-toggle="tooltip" title="Wifi"><img src="img/hotel-icons/wifi.png"></span>
            </li>
            <?php } ?>
            <?php if (strpos($facilities, 'bar') !== false) {?>
             <li>
              <span data-toggle="tooltip" title="Bar"><img src="img/hotel-icons/cup.png"></span>
            </li>
            <?php } ?>
            <?php if (strpos($facilities, 'air conditioning') !== false) {?>
            <li>
              <span data-toggle="tooltip" title="Air Conditioner"><img src="img/hotel-icons/air-conditioner.png"></span>
            </li>
            <?php } ?>
            
            <?php if (strpos($facilities, 'Restaurant') !== false) {?>
            <li>
              <span data-toggle="tooltip" title="Restaurent"><img src="img/hotel-icons/restaurent.png"></span>
            </li>
            <?php } ?>
            
            <?php if (strpos($facilities, 'cafe') !== false) {?>
            <li>
              <span data-toggle="tooltip" title="Cafe"><img src="img/hotel-icons/cafe.png"></span>
            </li>
            <?php } ?>
            
            <?php if (strpos($facilities, 'room service') !== false) {?>
            <li>
              <span data-toggle="tooltip" title="Room Service"><img src="img/hotel-icons/room-service.png"></span>
            </li>
            <?php } ?>
            
            <?php if (strpos($facilities, 'pool') !== false) {?>
            <li>
              <span data-toggle="tooltip" title="Pool"><img src="img/hotel-icons/exercise.png"></span>
            </li>
            <?php } ?>
            
            <?php if (strpos($facilities, 'gym') !== false) {?>
            <li>
              <span data-toggle="tooltip" title="Gym"><img src="img/hotel-icons/gym.png"></span>
            </li>
            <?php } ?>
            
            <?php if (strpos($facilities, 'internet access') !== false || strpos($facilities, 'free internet') !== false) {?>
            <li>
              <span data-toggle="tooltip" title="Free Internet"><img src="img/hotel-icons/free-internet.png"></span>
            </li>
            <?php } ?>
            
          </ul>
                <!--ul end-->
                <br>
                  <div >
                  <label><b>OVERVIEW</b></label>
          <?php $descriptions = explode('   ',$hotel->description);
          foreach($descriptions as $desc){
          ?>
                    <p><?php echo $desc; ?></p>
          <?php } ?>
                  </div>
                  <!--.overview-->
              </div>
            </div>
            <!--.row --> 
          </div>
           <!--resp-tabs-body-->
          <div class="resp-tabs-body" id="sectionRooms">
              <h3>Rooms</h3>
              <div class="row">
        <?php foreach($hotel->rates as $room){ ?>
                <div class="col-lg-6">
                    <section class="srpCards">
                      <div class="col-md-12 col-sm-4 col-xs-12 pad0">
                        <label class="span-title"><?php echo $room->rooms['0']->description ; ?> </label>
                      </div>
                      <!-- <div class="col-md-4 col-sm-4 col-xs-12 pad0">
                          
                            <div class="col-md-7 col-sm-7 col-xs-12 pad0">
                            <a href="#" target="_blank"><img src="img/hotel.jpg" class="img-responsive" ></a>
                            </div>
                            <div class="col-md-5 col-sm-5 col-xs-12 ">
                            <br>
                              <ul class="ul-inclusion marginT15">
                
                              <li><i class="fa fa-check" aria-hidden="true"></i> Max Adult 4</li>
                
                            </ul>
                            </div>
                      </div> -->
                       <div class="col-md-4 col-sm-4 col-xs-6  ">
                          <label class="span-title">Inclusion</label>
                            <ul class="ul-inclusion">
              <?php if($room->includes_boarding ==1) { 
                foreach($room->boarding_details as $boarding){
              ?>
                              <li><i class="fa fa-check" aria-hidden="true"></i> <?php echo $boarding ;?></li>
                             
              <?php }
              }
              ?>
			  
			  <?php if(isset($room->other_inclusions)) { 
                foreach($room->other_inclusions as $otherInclusion){
              ?>
                              <li><i class="fa fa-check" aria-hidden="true"></i> <?php echo $otherInclusion ;?></li>
                             
              <?php }
              }
              ?>
			  
                             <!-- <li><i class="fa fa-check" aria-hidden="true"></i> Complimentary Wi-Fi Internet</li> -->
                            </ul>
                      </div>
            <!--
                       <div class="col-md-2 col-sm-2 col-xs-6  ">
                          <label class="span-title">Amities</label>
                            <ul class="ul-inclusion">
                
              
            
                              <li><i class="fa fa-check" aria-hidden="true"></i> Air conditioning</li>
                              <li><i class="fa fa-check" aria-hidden="true"></i> Refrigerator</li>
                               <li><i class="fa fa-check" aria-hidden="true"></i> Kitchenette</li>
                              <li><i class="fa fa-check" aria-hidden="true"></i> Internet Access</li>
                               <li><i class="fa fa-check" aria-hidden="true"></i> City view</li>
                              <li><i class="fa fa-check" aria-hidden="true"></i> Refrigerator</li>
                            </ul>
                      </div>
            -->
                      <div class="col-md-4 col-sm-4 col-xs-7 pad0">
            <!--
                          <div class="col-md-12 col-sm-12 col-xs-12 pad0">
                                <div class="price-label">
                                    <span>Price For 14 Nights</span>
                                </div>
                          </div>
             -->
                          <div class="col-md-12 col-sm-12 col-xs-12 pad0">
                                   <div class="hotel-price">
                                    <span><i class="fa fa-inr "></i><?php echo round($room->price) ;?></span>
                                   </div>
                          </div>
                          <div class="col-md-12 col-sm-12 col-xs-12 pad0">
                             <ul class="ul-inclusion pull-right">
               <?php 
               $cancel_ploicy = '';
               foreach($room->cancellation_policy->details as $details){
                 if(isset($details->percent) ){
                  $cancel_ploicy = "Cancellation amount is $details->percent percent " ;
                 }
               }
               
               if (isset($room->cancellation_policy->cancel_by_date)){
                $cancel_ploicy .= "Cancel By date ". str_replace('T',' ',$room->cancellation_policy->cancel_by_date);
               }
               
               ?>
                              <li data-toggle="tooltip" title="<?php echo $cancel_ploicy; ?>"><i class="fa fa-check" aria-hidden="true"></i> Cancellation Conditional   </li>
                            </ul>
                          </div>
                      </div>
                      <div class="col-md-3 col-sm-3 col-xs-5 pad0">
                        <div class="btn-link">
                          <a href="#" style="text-decoration: none">Book Now</a>
                        </div>
                      </div>
                    </section>
                    <!--.section-->
                </div>
        <?php } ?>
                <!--.col-lg-12-->
                 
              </div>
              <!--row-->
          </div>
           <!--resp-tabs-body-->
          <div class="resp-tabs-body" id="sectionMap">
          <h3>Map View</h3>
            <div class="row">
              <div class="col-md-12">
               <div id="map"></div>
         
              </div>
            </div>
          </div>
             <!--resp-tabs-body-->
       <!--
          <div class="resp-tabs-body">
            <h3>Amities</h3>
            <div class="row">
                <div class="col-md-12">
                  <ul class="ul-amities">
                    <li class="li-amities">
                      <label>Allowed</label>
                      <ul class="ul-amities-inner">
                        <li><i class="fa fa-check"></i> Bachelors</li>
                      </ul>
                    </li>

                    <li class="li-amities">
                    <label>Bathroom</label>
                      <ul class="ul-amities-inner">
                        <li><i class="fa fa-check"></i> Linens</li>
                      </ul>
                    </li>

                    <li class="li-amities">
                    <label>Bedroom</label>
                      <ul class="ul-amities-inner">
                        <li><i class="fa fa-check"></i> Wardrobe/Closet</li>
                         <li><i class="fa fa-check"></i> Walk-in closet</li>
                      </ul>
                    </li>

                    <li class="li-amities">
                    <label>Dining</label>
                      <ul class="ul-amities-inner">
                        <li><i class="fa fa-check"></i> Restaurant with Dining Menu</li>
                         <li><i class="fa fa-check"></i> Buffet-Style Restaurant</li>
                      </ul>
                    </li>

                  </ul>
                </div>
            </div>
          </div>
      -->
          <!--resp-tabs-body-->
          <div class="resp-tabs-body" id="sectionPolicy">
              <h3>Hotel Policies</h3>
              <ul class="ul-hotel-policies">
      
                <li><i class="fa fa-clock-o"></i> CHECKIN : <?php echo $hotelDetails['checkin'] ;?></li> 
                <li><i class="fa fa-clock-o"></i> CHECKOUT : <?php echo $hotelDetails['checkout'] ;?></li>
                <li><i class="fa fa-key"></i> ROOMS : <?php echo $hotelDetails['no_of_rooms'] ;?></li> 
               <!-- <li><i class="fa fa-signal"></i> FLOORS : 4</li> -->
              </ul>
              <ul class="ul-policies" style="">
                   <li> The primary guest must be at least 18 years of age to check into this hotel(s).</li>
                    <li> As per Government regulations, It is mandatory for all guests above 18 years of age to carry a valid photo identity card & address proof at the time of check-in. In case, check-in is denied by the hotel(s) due to lack of required documents, you cannot claim for the refund & the booking will be considered as NO SHOW.</li>
              </ul>
          </div>
          <!--resp-tabs-body-->
          </div>
             <!--resp-tabs-container-->
          </div>
        
      </div>
      <!--demo-->
      </div>
      </div>
      <!--row-->
    </div>
   <!--container-->
</section> 
 <!--/section-tour-->
<br/>
<br/>
<!--.footer start-->
<?php include'include/footer.php';?>
<!--/footer end-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
     <script src="js/java.js"></script>
     <script src="js/responsive-tabs.js"></script>
 <script src="js/pnotify.custom.min.js"></script>
 <script src="js/jquery-ui.min.js"></script>
     <script src="sm-admin/formvalidation/vendor/formvalidation/js/formValidation.min.js"></script>
<script src="sm-admin/formvalidation/vendor/formvalidation/js/framework\bootstrap.min.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/easy-responsive-tabs.js"></script>
<script src="unitegallery/dist/js/unitegallery.min.js"></script>
<script src="unitegallery/dist/themes/compact/ug-theme-compact.js"></script>
<script type="text/javascript">

    jQuery(document).ready(function(){

      jQuery("#gallery").unitegallery();

    });
    
  </script>
<script>
$(document).ready(function () {
$('#horizontalTab').easyResponsiveTabs({
type: 'default', //Types: default, vertical, accordion           
width: 'auto', //auto or any width like 600px
fit: true,   // 100% fit in a container
closed: 'accordion', // Start closed if in accordion view
activate: function(event) { // Callback function if tab is switched
var $tab = $(this);
var $info = $('#tabInfo');
var $name = $('span', $info);
$name.text($tab.text());
$info.show();
}
});
$('#verticalTab').easyResponsiveTabs({
type: 'vertical',
width: 'auto',
fit: true
});
 console.log('init  MAp');

 //initGMap();
});
</script>
<script>
function initGMap(){
   //initMap();
   // initMap();
   
  console.log('This is data');
  
  setTimeout(function(){
    console.log("Boom!");
    initMap();
  }, 4000);
}

</script>

  <script>
      function initMap() {
      console.log('inside actual map');
        var uluru = {lat: <?php echo $hotel->geolocation->latitude ?>, lng: <?php echo $hotel->geolocation->longitude ?>};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 6,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    
  
    </script>
    <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDByNI-F1ixK-tStELpIraK1PTdVSvW87o&callback=initMap">
  </script>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
</script>

  </body>
</html>