<?php
  session_start();
  include('include/grn_api_functions.php');

 // print_r($_POST);
 // exit;
 $_SESSION['hotels']['child']= array();
  $_SESSION['hotels']['city'] =$_POST['city'];
  $_SESSION['hotels']['checkin'] =$_POST['checkin'];
  $_SESSION['hotels']['checkout'] =$_POST['checkout'];
  $_SESSION['hotels']['client_nationality'] = 'IN';;
  $_SESSION['hotels']['adult'] =$_POST['adult'];
  //$_SESSION['hotels']['child'] =$_POST['child'];
  
  $_SESSION['hotels']['child'][] = array(isset($_POST['textbox2'])?$_POST['textbox2']:null,isset($_POST['textbox3'])?$_POST['textbox3']:null);
  $_SESSION['hotels']['child'][] = array(isset($_POST['textboxtwo2'])?$_POST['textboxtwo2']:null,isset($_POST['textboxtwo3'])?$_POST['textboxtwo3']:null);
  $_SESSION['hotels']['child'][] = array(isset($_POST['textboxthree2'])?$_POST['textboxthree2']:null,isset($_POST['textboxthree3'])?$_POST['textboxthree3']:null);
  $_SESSION['hotels']['child'][] = array(isset($_POST['textboxfour2'])?$_POST['textboxfour2']:null,isset($_POST['textboxfour3'])?$_POST['textboxfour3']:null);
 
  $_SESSION['hotels']['response'] = 'fast';
  $_SESSION['hotels']['currency'] = 'INR';
  $_SESSION['hotels']['rates'] = 'concise';
  
  $errors = null;
  /*
  
  echo '<pre>';
  print_r($_SESSION);
  echo '</pre>';
  exit;
  
  $city = $_POST['city'];
  $checkin = $_POST['checkin'];
  $checkout = $_POST['checkout'];
  $client_nationality = 'IN';
  $adults = $_POST['adult'];
  $child = $_POST['child'];
  $response = 'fast';
  $currency = 'INR';
  $rates  = 'concise';
  */
  $hotel_search = getSearchRequestArray($_SESSION['hotels']['city'], $_SESSION['hotels']['checkin'], $_SESSION['hotels']['checkout'], $_SESSION['hotels']['client_nationality'], $_SESSION['hotels']['adult'], $_SESSION['hotels']['child'], $_SESSION['hotels']['response'], $_SESSION['hotels']['currency'], $_SESSION['hotels']['rates']);
  
 /* 

  echo '<pre>';
  print_r($hotel_search);
  echo '</pre>';
  exit;
 */


  $all_hotels = getAvailableHotel($hotel_search);
  
  if(isset($all_hotels['errors']) ){
  
    $errors = $all_hotels['errors'][0]->code;
  }
/*  
  echo '<pre>';
  print_r($all_hotels);
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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

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
.padT5 {padding-top: 5px;}
.padL15 {padding-left: 15px;}
.padR5 {padding-right: 5px;}
.dib {display: inline-block;}
.yellow {color: #f7c541;}
 .amenitiesLabel{list-style: none;margin-top: 20px;padding: 0px;}
 .amenitiesLabel li{display:inline-block; }
 .amenitiesLabel li span img{width: 24px;margin-right: 10px}
 .price-label span{background: #666;border: 1px solid #666;color: #fff;padding: 3px 7px;;font-size: 12px !important;border-radius: 2px;}
 .price-label{margin-top: 15px !important;max-width: 140px;min-width: 80px;float: right;margin-bottom: 2px;}
.price-label span:before{border-top: 11px solid #666;border-width: 8px !important;border-left: 11px solid transparent;border-right: 11px solid transparent;right: 15px;top: 100%;content: '';position: absolute; z-index: 1;}
.hotel-price{float:right;margin-top: 5px;font-weight: 500;font-size: 20px;}
.hotel-fake-price{float:right;margin-top: 5px;font-weight: 500;font-size: 14px;color: #999;}
.hotel-fake-price i{text-decoration: line-through;}
.hotel-fake-price span{text-decoration: line-through;}
.btn-link{float: right;margin-top: 20px}
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
@media only screen and (max-width: 767px){
.btn-link{float: left;margin-top: -20px}
}
</style>
</head>
<body>
     <!--.header start-->
    <?php include'include/header.php'; ?>
    <!--/header end-->

<section id="sec-top">
  <div class="destination-img">
    <div class="destination-layer">
    <div class="container-fluid">
      <h2 class="destination-title">Hotel Booking</h2>  
    </div>
    </div>
  </div>
</section>
 <section id="special-tour section">
  <div class="section-padding"></div>
  
    <div class="container">
    <?php if($errors !=null ){
      if($errors == 1501){
        $msg = "No availability for the requested search criteria please search again";
      }else{
        $msg ="This page has expired Please go back";
      }
      
      echo '<h1 class="text-warning">'.$msg.'</h1>';
      exit;
    }
    ?>
    <div class="row">
        <div class="col-lg-3 pad0">
              <div class="block1" align="left">
          
                   <div class="fancy-collapse-panel">
                      <div class="panel ">
                        <div class="panel-heading">
                          <h3 class="panel-title">Search By Hotel Name</h3>
                          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body">
                        <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control" name="hotel_name" placeholder="Search">
                            <div class="input-group-btn">
                              <button class="btn btn-default" name="search_by_name" id="search_by_name">
                                <i class="glyphicon glyphicon-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                        </div>
                      </div>
          
            <input type="hidden" value=<?php echo $all_hotels['search_id']; ?> name="hotel_search_id" id="hotel_search_id"/>
          
          
                      <!--.panel-->
                      <div class="panel ">
                        <div class="panel-heading">
                          <h3 class="panel-title">Price Range</h3>
                          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body padR5">
                           <div class="checkbox">
                              <label style="font-size: 1em">
                                  <input type="radio" name="price_range" value="<999" >
                                 <!--  <span class="cr"><i class="cr-icon fa fa-check"></i></span> -->
                                  Up to <i class="fa fa-inr"></i> 999
                              </label>
                              <!-- <span class="label-count">23</span> -->
                          </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="radio" name="price_range" value="1000&&3000" >
                                   <!--  <span class="cr"><i class="cr-icon fa fa-check"></i></span> -->
                                    <i class="fa fa-inr"></i> 1000 to <i class="fa fa-inr"></i> 3000
                                </label>
                                <!--<span class="label-count">20</span> -->
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="radio" name="price_range" value="3000&&5000" >
                                   <!--  <span class="cr"><i class="cr-icon fa fa-check"></i></span> -->
                                    <i class="fa fa-inr"></i> 3000 to <i class="fa fa-inr"></i> 5000
                                </label>
                                <!--<span class="label-count">14</span> -->
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="radio" name="price_range" value="5000&&10000" >
                                  <!--   <span class="cr"><i class="cr-icon fa fa-check"></i></span> -->
                                    <i class="fa fa-inr"></i> 5000 to <i class="fa fa-inr"></i> 10000
                                </label>
                               <!-- <span class="label-count">10</span> -->
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="radio" name="price_range" value=">=10000" >
                                   <!--  <span class="cr"><i class="cr-icon fa fa-check"></i></span> -->
                                    <i class="fa fa-inr"></i> 10000 +
                                </label>
                                <!--<span class="label-count">3</span> -->
                            </div>
                        </div>
                      </div>

                      <!--.panel-->
            <!--
                      <div class="panel ">
                        <div class="panel-heading">
                          <h3 class="panel-title">Hotel Type</h3>
                          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body scrolling padR5">
                           <div class="checkbox">
                              <label style="font-size: 1em">
                                  <input type="checkbox" value="" checked>
                                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                 Hotel
                              </label>
                              <span class="label-count">519</span>
                          </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="" >
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    Lodge
                                </label>
                                <span class="label-count">233</span>
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="" >
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    Service Appartment
                                </label>
                                <span class="label-count">179</span>
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="" >
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                   Hostel
                                </label>
                                <span class="label-count">23</span>
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="" >
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    Resort
                                </label>
                                <span class="label-count">20</span>
                            </div>
                            <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="" >
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    Guest House
                                </label>
                                <span class="label-count">100</span>
                            </div>
                            <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="" >
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    Bungalow
                                </label>
                                <span class="label-count">50</span>
                            </div>
                            <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="" >
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    BnB
                                </label>
                                <span class="label-count">6</span>
                            </div>
                            <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="" >
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    Villa
                                </label>
                                <span class="label-count">1</span>
                            </div>
                        </div>
                      </div>
          --> 
                      <!--.panel-->
                       <div class="panel ">
                        <div class="panel-heading">
                          <h3 class="panel-title">Amenities</h3>
                          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body scrolling padR5">
                           <div class="checkbox">
                              <label style="font-size: 1em">
                                  <input type="checkbox" value="wi-fi" name="amenities[]" id="amenities">
                                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                 Wi-Fi
                              </label>
                             <!-- <span class="label-count">50</span> -->
                          </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="bar" name="amenities[]" id="amenities">
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    Bar
                                </label>
                              <!--  <span class="label-count">55</span> -->
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="air conditioning" name="amenities[]" id="amenities">
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    Air Conditioning
                                </label>
                              <!--  <span class="label-count">34</span> -->
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="restaurant" name="amenities[]" id="amenities">
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                   Restaurant
                                </label>
                             <!--   <span class="label-count">53</span> -->
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="cafe" name="amenities[]" id="amenities">
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    Cafe
                                </label>
                               <!-- <span class="label-count">50</span> -->
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="room service" name="amenities[]" id="amenities">
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                   Room Service
                                </label>
                             <!--   <span class="label-count">34</span> -->
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="internet access" name="amenities[]" id="amenities">
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    Internet Access
                                </label>
                             <!--   <span class="label-count">45</span> -->
                            </div>
              
              <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="gym" name="amenities[]" id="amenities">
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    Gym
                                </label>
                             <!--   <span class="label-count">45</span> -->
                            </div>
              
              <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="pool" name="amenities[]" id="amenities">
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    Pool
                                </label>
                             <!--   <span class="label-count">45</span> -->
                            </div>
              
                        </div>
                      </div>
                        <!--.panel-->
                      <div class="panel ">
                        <div class="panel-heading">
                          <h3 class="panel-title">Hotel Star Rating</h3>
                          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body padR5">
                           <div class="checkbox">
                              <label style="font-size: 1em">
                                  <input type="radio" value="5" name="star_rating">
                                  <i class="fa fa-star fl yellow  padR5"></i>
                                  <i class="fa fa-star fl yellow  padR5"></i>
                                  <i class="fa fa-star fl yellow  padR5"></i>
                                  <i class="fa fa-star fl yellow  padR5"></i>
                                  <i class="fa fa-star fl yellow  padR5"></i>
                              </label>
                             <!-- <span class="label-count">36</span> -->
                          </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="radio" value="4" name="star_rating">
                                    
                                    <i class="fa fa-star fl yellow  padR5"></i>
                                    <i class="fa fa-star fl yellow  padR5"></i>
                                    <i class="fa fa-star fl yellow  padR5"></i>
                                    <i class="fa fa-star fl yellow  padR5"></i>
                                   
                                </label>
                             <!--   <span class="label-count">31</span> -->
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="radio" value="3" name="star_rating">
                                    
                                    <i class="fa fa-star fl yellow  padR5"></i>
                                  <i class="fa fa-star fl yellow  padR5"></i>
                                  <i class="fa fa-star fl yellow  padR5"></i>
                                 
                                </label>
                              <!--  <span class="label-count">131</span> -->
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="radio" value="2" name="star_rating">
                                 
                                   <i class="fa fa-star fl yellow  padR5"></i>
                                  <i class="fa fa-star fl yellow  padR5"></i>
                                </label>
                             <!--   <span class="label-count">91</span> -->
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="radio" value="1" name="star_rating">
                                   
                                    <i class="fa fa-star fl yellow  padR5"></i>
                                </label>
                             <!--   <span class="label-count">113</span> -->
                            </div>
                        </div>
                      </div>
                      <!--.panel-->
          <!--
                       <div class="panel ">
                        <div class="panel-heading">
                          <h3 class="panel-title">Hotel Chain</h3>
                          <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
                        </div>
                        <div class="panel-body scrolling padR5">
                           <div class="checkbox">
                              <label style="font-size: 1em">
                                  <input type="checkbox" value="" checked>
                                  <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                 Up Tourisim
                              </label>
                              <span class="label-count">50</span>
                          </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="" >
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    Taj Group
                                </label>
                                <span class="label-count">55</span>
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="" >
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    ITC Welcome Group
                                </label>
                                <span class="label-count">34</span>
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="" >
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                   Oberoi Hotels
                                </label>
                                <span class="label-count">53</span>
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="" >
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                    Starwood Hotels
                                </label>
                                <span class="label-count">50</span>
                            </div>
                             <div class="checkbox">
                                <label style="font-size: 1em">
                                    <input type="checkbox" value="" >
                                    <span class="cr"><i class="cr-icon fa fa-check"></i></span>
                                  Sarovar Hotels
                                </label>
                                <span class="label-count">34</span>
                            </div>
                             
                        </div>
                      </div>
          -->
                      <!--.panel-->
                   </div>
                   <!--fancy-collapse-panel-->
              </div>
          </div>
          <!--.col-lg-3-->
        <div  class="col-lg-9">
              <div class="block1">
               
                  <div class="row">  
                    <div class="col-lg-4">
                       <div class="form-group">
                        <h3 style="margin: 0px"><span id="no_of_hotels"><?php echo $all_hotels['no_of_hotels'] ?></span> hotels found</h3>
                        <label class="control-label">in <?php $city = getCitiesByCode($_POST['city']); 
							echo $city['city']->name ;
						?> </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="form-group">
                          <div class="input-group">
                            <input type="text" class="form-control" name="hotel_name" placeholder="Search">
                            <div class="input-group-btn">
                              <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i>
                              </button>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="col-lg-2">
                      <div class="form-group">
                         <select class="form-control select2" name="sort" style="width:100%">
                          <option value="">Sort By</option>
                          <option value="phtl" > High To Low</option>
                          <option value="plth">Low To High</option>            
                        </select>

                      </div>
                    </div>
                  
                  </div>
                  <!--.row-->
              
              </div>  
              <!--block1-->  
              <div class="hotels-list" id="hotel_list">
            <?php foreach($all_hotels['hotels'] as $hotel){ ?>
                        <section class="srpCards ">
                          <div class="col-md-4 col-sm-4 col-xs-12 pad0">
                            <a href="#" target="_blank"><img src="<?php echo GRN_BASE_IMAGE_URL.'/'.$hotel->images->main_image; ?>" class="img-responsive" ></a>
                          </div>
                          <div class="col-md-8 col-sm-8 col-xs-12 padL15"> 
                            <div class="col-md-8 col-sm-8 col-xs-12 pad0">
                                <div class="hotel-title">
                                    <a href="#"><?php echo $hotel->name; ?></a>
                                </div>
                                <div class="hotel-area">Area : <i class="fa fa-map-marker"></i> <?php echo $hotel->address ; ?></div>
                <?php $star = $hotel->category; ?>
                                <span class="dib padT5 padL15" data-toggle="tooltip" data-placement="right" title="<?php echo $star ; ?> Star Hotel">
                <?php for($i=0; $i<$star; $i++) { ?>
                                  <i class="fa fa-star fl yellow  padR5"></i>
                <?php } ?>
                                  <span class="hotel-area">(<?php echo $star ; ?>/5)</span>
                                </span>
                                <div class="width100">
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
                                </div>
                                <div class="width100">
                                    <a href="<?php echo 'hotel-details.php?search_id='.$all_hotels['search_id'].'&h_code='.$hotel->hotel_code.'&star='.$star; ?>" style="text-decoration: none"><i class="fa fa-eye"></i> View Details</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-4 col-xs-12 pad0">
                                <!-- <div class="col-md-12 col-sm-12 col-xs-12 pad0">
                                <div class="price-label">
                                    <span>Price For 14 Nights</span>
                                </div>
                                </div> -->
                                 <div class="col-md-12 col-sm-12 col-xs-12 pad0">
                                   <div class="hotel-price">
                                    <span><i class="fa fa-inr "></i> <?php echo round($hotel->min_rate->price); ?></span>
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
                         
                        </section>
            <?php } ?>
                          
     
              </div>                
        </div>
        <!--.col-lg-9-->
      </div>
      <!--.row-->
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
<script type="text/javascript">
  
</script>
<script>
$(document).ready(function() {
  $(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
  if(!$this.hasClass('panel-collapsed')) {
    $this.parents('.panel').find('.panel-body').slideUp();
    $this.addClass('panel-collapsed');
    $this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
  } else {
    $this.parents('.panel').find('.panel-body').slideDown();
    $this.removeClass('panel-collapsed');
    $this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
  }
})
  $('.select2').select2();
  $('[data-toggle="tooltip"]').tooltip(); 
 var notr = function(){
    new PNotify({
        title: 'Success',
    text: 'Data Successfully Saved',
    type: 'success',
    });
  }

   $('#bus-ticket-form')
  .find('[name="booking_date"]')
  .datepicker({
    changeMonth: true,
      changeYear: true,
      dateFormat: 'dd-mm-yy',
      onSelect: function(date, inst) {
          /* Revalidate the field when choosing it from the datepicker */
          $('#bus-ticket-form').formValidation('revalidateField', 'booking_date');
      }
  });
  
    $('#bus-ticket-form').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
               
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    }
                }
            },
           from: {
               
                validators: {
                    notEmpty: {
                        message: 'The from city is required'
                    }
                }
            },
            to: {
               
                validators: {
                    notEmpty: {
                        message: 'The to city is required'
                    }
                }
            },
      mobile: {
               
                validators: {
                    phone: {
                  country: 'IN',
                  message: 'The value is not valid %s phone number'
                },
                notEmpty: {
                  message: 'The mobile number is required'
                },
                }
            },
     
      email: {
              validators: {
                
                emailAddress: {
                  message: 'The value is not a valid email address'
                },
                regexp: {
                  regexp: '^[^@\\s]+@([^@\\s]+\\.)+[^@\\s]+$',
                  message: 'The value is not a valid email address'
                },
              }
            },
        }
    }).on('success.form.fv', function(e) {
          // Prevent form submission
          e.preventDefault();
    
          var $form = $(e.target),
            fv    = $form.data('formValidation');
    
          // Use Ajax to submit form data
          $.ajax({
            url: $form.attr('action'),
            type: 'POST',
            data: $form.serialize(),
            beforeSend: function(result) {
             $('#bus-ticket-form button').html('<i class="fa fa-spinner fa-spin"></i>');
            },
            success: function(result) {
               $('#bus-ticket-form button').html(result);
          notr();
          setTimeout(function(){ window.location.href = 'bus-ticket.php' }, 1200);
        
            }
          });
        })
      
});
</script>

<script>

$("input[name='price_range']").click(function(){
  grn_filter_hotel();
});

$("input[name='amenities[]']").click(function(){
  grn_filter_hotel();
});

$("input[name='star_rating']").click(function(){
  grn_filter_hotel();
});


$("#search_by_name").click(function(){
  //console.log('search btnn is click');
  grn_filter_hotel();
});


/*$("[type=checkbox]").click(function(){
        
    grn_filter_hotel();
    });
*/
            
function grn_filter_hotel(){
    var price_range = $('input[name=price_range]:radio:checked').val();
    var star_rating = $("input[name='star_rating']:radio:checked").val();
    var hotel_name = $("input[name='hotel_name']").val();
    var amenities = [];
    $("input[name='amenities[]']:checked").each(function(){amenities.push($(this).val());});
    /*
    var city = $('input[name=city]').val();
    var checkin = $('input[name=checkin]').val();
    var checkout = $('input[name=checkout]').val();
    var client_nationality = $('input[name=client_nationality]').val();
    var response = $('input[name=response]').val();
    var currency = $('input[name=currency]').val();
    var rates = $('input[name=rates]').val();
    
    var adult = [];
    $("input[name='adult[]']").each(function(){adult.push($(this).val());});
    var child = [];
    $("input[name='child[]']").each(function(){child.push($(this).val());});
    */
    console.log(price_range +' '+amenities  +' '+ star_rating);
    //console.log(all_hotels);

    
          $.ajax({
            url: 'include/grn_filter.php',
            type: 'POST',
            data: {hotel_name:hotel_name, price_range:price_range, amenities:amenities, star_rating:star_rating
       },
            beforeSend: function(result) {
			 
             $('#hotel_list').html('<i class="fa fa-spinner fa-spin"></i>');
            },
            success: function(result) {
				//$('#bus-ticket-form button').html(result);
				//console.log(result);
				var data = 	JSON.parse(result);
				$('#hotel_list').html(data.content);
				$('#no_of_hotels').html(data.no_of_hotels);
        
            },
      complete: function(){
        //$('#hotel_list').html('');
      }
          });
      
      
}

</script>

  </body>
</html>