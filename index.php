<!DOCTYPE html>
<?php include('sm-admin/core/int.php'); 
	  include('include/grn_api_functions.php');
?>
 <?php
		   $getst = mysqli_query($con ,"select * from special_tour where ST_ID = 1");
		   $showst = mysqli_fetch_array($getst);
		   
		   	$fisrt = $showst[1];
			$get1 = mysqli_query($con, "select * from package where P_ID = '$fisrt'");
			$show1 = mysqli_fetch_array($get1);
			
			$second = $showst[2];
			$get2 = mysqli_query($con, "select * from package where P_ID = '$second'");
			$show2 = mysqli_fetch_array($get2);
			
			$third = $showst[3];
			$get3 = mysqli_query($con, "select * from package where P_ID = '$third'");
			$show3 = mysqli_fetch_array($get3);
			
			$forth = $showst[4];
			$get4 = mysqli_query($con, "select * from package where P_ID = '$forth'");
			$show4 = mysqli_fetch_array($get4);
			
			
			$fifth = $showst[5];
			$get5 = mysqli_query($con, "select * from package where P_ID = '$fifth'");
			$show5 = mysqli_fetch_array($get5);
			
			$sixth = $showst[6];
			$get6 = mysqli_query($con, "select * from package where P_ID = '$sixth'");
			$show6 = mysqli_fetch_array($get6);
			
			//this function exists in Grn Api
			$cities = getCities('IN');
		   
		    ?> 

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Destination Unlimited Travels</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/lib.css" rel="stylesheet">
    <link href="css/select2.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    
  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 100%;
      margin: auto;
  }
  .no-padding{padding: 0px}
  .input-group-btn .btn{padding: 9px 12px;}
  #TextBoxesGroup {display: inline-flex;}
  #TextBoxesGroup div {margin-top:10px;margin-right: 30px}
   #TextBoxesGroup2 {display: inline-flex;}
  #TextBoxesGroup2 div {margin-top:10px;margin-right: 30px}
  #TextBoxesGroup3 {display: inline-flex;}
  #TextBoxesGroup3 div {margin-top:10px;margin-right: 30px}
  #TextBoxesGroup4 {display: inline-flex;}
  #TextBoxesGroup4 div {margin-top:10px;margin-right: 30px}
  </style>
  </head>
  <body>
    <!--.header start-->
    <?php include'include/header.php'; ?>
    <!--/header end-->
<section id="sec-slider">

      <div class="container">
		<div class="row">
    		<div class="col-lg-8">
    		<div  class="search-tab">

			  <!-- Nav tabs -->
			  <ul class="nav nav-tabs" role="tablist">
			    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-fighter-jet" aria-hidden="true"></i> Flight</a></li>
			    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><i class="fa fa-bed" aria-hidden="true"></i> Hotel</a></li>
			   
			  </ul>

			  <!-- Tab panes -->
			  <div class="tab-content">
			    <div role="tabpanel" class="tab-pane active" id="home">
			    	<form class="form-flight">
			    		<div class="row">
			    			
			    			<div class="col-lg-12 col-sm-12 col-xs-12">
			    			<h3>Book Domestic & International Flight Tickets</h3>
			    			<fieldset>
			    				<div class="form-group">
			    				<label class="radio-inline"><input class="radioBtn1" type="radio" name="test" checked="" value="oneway">One Way</label>
									<label class="radio-inline"><input class="radioBtn2" type="radio" name="test" value="twoway">Round Trip</label>
									<label class="radio-inline"><input class="radioBtn3" type="radio" name="test">Multicity</label>
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-6 col-sm-6 col-xs-12 fr0">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >FROM</label>
									<input type="text" class="form-control" name="from" placeholder="From">
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-6 col-sm-6 col-xs-12 to0">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >To</label>
									<input type="text" class="form-control" name="to" placeholder="To">
			    				</div>
			    			</fieldset>
			    			</div>
			    			
			    			<div class="col-lg-4 col-sm-6 col-xs-12  C1">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >FROM 1</label>
									<input type="text" class="form-control" name="from" placeholder="From">
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-4 col-sm-6 col-xs-12  C1">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >To 1</label>
									<input type="text" class="form-control" name="to" placeholder="To">
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-4 col-sm-6 col-xs-6  C1">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Date 1</label>
									<div class="input-group">
									  <span class="input-group-addon" ><i class="fa fa-calendar""></i></span>
									  <input type="text" class="form-control datepicker" placeholder="Deprature" aria-describedby="basic-addon1" >
									</div>
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-4 col-sm-6 col-xs-12  C2">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >FROM 2</label>
									<input type="text" class="form-control" name="from" placeholder="From">
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-4 col-sm-6 col-xs-12  C2">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >To 2</label>
									<input type="text" class="form-control" name="to" placeholder="To">
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-4 col-sm-6 col-xs-6 C2">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Date 2</label>
									<div class="input-group">
									  <span class="input-group-addon" ><i class="fa fa-calendar""></i></span>
									  <input type="text" class="form-control datepicker" placeholder="Deprature" aria-describedby="basic-addon1" >
									</div>
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-4 col-sm-6 col-xs-12  C3">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >FROM 3</label>
									<input type="text" class="form-control" name="from" placeholder="From">
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-4 col-sm-6 col-xs-12  C3">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >To 3</label>
									<input type="text" class="form-control" name="to" placeholder="To">
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-4 col-sm-6 col-xs-6  C3">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Date 3</label>
									<div class="input-group">
									  <span class="input-group-addon" ><i class="fa fa-calendar""></i></span>
									  <input type="text" class="form-control datepicker" placeholder="Deprature" aria-describedby="basic-addon1" >
									</div>
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-4 col-sm-6 col-xs-12  C4">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >FROM 4</label>
									<input type="text" class="form-control" name="from" placeholder="From">
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-4 col-sm-6 col-xs-12  C4">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >To 4</label>
									<input type="text" class="form-control" name="to" placeholder="To">
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-4 col-sm-6 col-xs-6  C4">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Date 4</label>
									<div class="input-group">
									  <span class="input-group-addon" ><i class="fa fa-calendar""></i></span>
									  <input type="text" class="form-control datepicker" placeholder="Deprature" aria-describedby="basic-addon1" >
									</div>
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-2 col-sm-12 col-xs-12 fta">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Add City</label>
									<select class="form-control" id="select_city">
										<option value="C1">City 1</option>
										<option value="C2">City 2</option>
										<option value="C3">City 3</option>
										<option value="C4">City 4</option>

									</select>
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-3 col-sm-6 col-xs-6 de">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Deprature</label>
									<div class="input-group">
									  <span class="input-group-addon" ><i class="fa fa-calendar""></i></span>
									  <input type="text" class="form-control datepicker" placeholder="Deprature" aria-describedby="basic-addon1" id="deprature">
									</div>
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-3 col-sm-6 col-xs-6 re">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Return</label>
									<div class="input-group">
									  <span class="input-group-addon" ><i class="fa fa-calendar""></i></span>
									  <input type="text" class="form-control datepicker" placeholder="Return" aria-describedby="basic-addon1" class="radio1" id="return">
									</div>
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-2 col-sm-4 col-xs-4">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Adult </label>
									<input type="number" class="form-control" name="adult" placeholder="1">
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-2 col-sm-4 col-xs-4">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Child</label>
									<input type="number" class="form-control" name="to" placeholder="0">
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-2 col-sm-4 col-xs-4">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Infrant</label>
									<input type="number" class="form-control" name="" placeholder="0">
			    				</div>
			    			</fieldset>
			    			</div>

			    			<div class="col-lg-4 col-sm-12 col-xs-12">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Class</label>
									<select class="form-control">
										<option value="economy">Economy</option>
										<option value="economy">Premium Economy</option>
										<option value="economy">Buisness</option>

									</select>
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-4 col-sm-12 col-xs-12">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Airline</label>
									<select class="form-control">
										<option value="">Select</option>
										<option value="">Air India</option>
										<option value="">Jet Airways</option>
										<option value="">Spice Jet</option>

									</select>
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-12 col-sm-12 col-xs-12">
			    			<fieldset>
			    				<button class="btn btn-style btn-lg">Search Flight</button>
			    			</fieldset>
			    			</div>
			    		</div>
			    	</form>
			    </div>
				
			    <div role="tabpanel" class="tab-pane" id="profile">
			    	<form class="form-flight" action="hotel-search.php" method="post">
			    		<div class="row">
			    			
			    			<div class="col-lg-12 col-sm-12 col-xs-12">
			    			<h3>Book Hotels</h3>
			    			<fieldset>
			    				<div class="form-group">
			    				<label class="radio-inline"><input class="radioHotel1" type="radio" name="test" checked="" value="hotel">Hotels</label>
									<label class="radio-inline"><input class="radioHotel2" type="radio" name="test" value="day-hotel">Day Use Hotels</label>
									
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-6 col-sm-6 col-xs-12">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >City</label>
			    					<div class="input-group">
									  <span class="input-group-addon" ><i class="fa fa-map-marker"></i></span>
									<!--
									<input type="text" class="form-control" name="from" placeholder="City">
									-->
									<select class="form-control select2" name="city" style="width:100%">
										<option ></option>
										<?php foreach($cities['cities'] as $city){ ?>
										<option value="<?php echo $city->code ?>"><?php echo $city->name; ?></option>
										<?php } ?>

									</select>
									
									</div>
			    				</div>
			    			</fieldset>
			    			</div>
			    			
			    			<div class="col-lg-3 col-sm-6 col-xs-6">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Check In</label>
									<div class="input-group">
									  <span class="input-group-addon" ><i class="fa fa-calendar""></i> </span>
									  <input type="text" class="form-control datepicker" name="checkin" placeholder="yyyy-mm-dd" aria-describedby="basic-addon1">
									</div>
									
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-3 col-sm-6 col-xs-6">
			    			<fieldset id="check_out">
			    				<div class="form-group">
			    				<label >Check Out</label>
									<div class="input-group">
									  <span class="input-group-addon" ><i class="fa fa-calendar""></i> </span>
									 <input type="text" class="form-control datepicker" name="checkout" placeholder="yyyy-mm-dd" aria-describedby="basic-addon1">
									</div>
			    				</div>
			    			</fieldset>
			    			</div>
							
			    			<div class="col-lg-3 col-sm-12 col-xs-12" id="time_slot">
			    			<fieldset >
			    				<div class="form-group">
			    				<label >Time Slot</label>
									<select class="form-control" >
										<option value="8 AM - 10 AM">8 AM - 10 AM</option>
										<option value="8 AM - 10 AM">8 AM - 10 AM</option>
										<option value="8 AM - 10 AM">8 AM - 10 AM</option>

									</select>
			    				</div>
			    			</fieldset>
			    			</div>
							
			    			<div class="col-lg-2 col-sm-12 col-xs-12 R1 box">
			    			<fieldset>
			    				<div class="form-group">
			    				<br/><br/>
			    				<label class="label label-primary font18">Room 1</label>
									
			    				</div>
			    			</fieldset>
			    			</div>
							
			    			<div class="col-lg-5 col-sm-6 col-xs-6 R1 box">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Adult (Above 12 years)</label>
									<select class="form-control" name="adult[]" >
										<option value="">Select no of Adult</option>
										<option value="1">1 Adult</option>
										<option value="2">2 Adult</option>
										<option value="3">3 Adult</option>
										<option value="4">4 Adult</option>
									</select> 
			    				</div>
			    			</fieldset>
			    			</div>
							
			    			<div class="col-lg-5 col-sm-6 col-xs-6 R1 box">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Child (Below 12 years)</label>
									<div class="input-group">
								      <span class="input-group-btn">
								        <button class="btn btn-default" type="button" id="addButton"><i class="fa fa-plus"></i></button>
								      </span>
								      <input type="text" class="form-control" placeholder="Maximum 2 child 1 room" disabled="">
								      <span class="input-group-btn">
								        <button class="btn btn-default" type="button" id="removeButton"><i class="fa fa-minus"></i></button>
								      </span>
								    </div><!-- /input-group -->
								    <div id='TextBoxesGroup'>
										
									</div>
			    				</div>
			    			</fieldset>
			    			</div>
			    			
			    			<div class="col-lg-2 col-sm-12 col-xs-12 R2 box">
			    			<fieldset>
			    				<div class="form-group">
			    				<br/><br/>
			    				<label class="label label-primary font18">Room 2</label>
									
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-5 col-sm-6 col-xs-6 R2 box">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Adult (Above 12 years)</label>
									<select class="form-control" name="adult[]" >
										<option value="">Select no of Adult</option>
										<option value="1">1 Adult</option>
										<option value="2">2 Adult</option>
										<option value="3">3 Adult</option>
										<option value="4">4 Adult</option>
									</select> 
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-5 col-sm-6 col-xs-6 R2 box">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Child (Below 12 years)</label>
									<div class="input-group">
								      <span class="input-group-btn">
								        <button class="btn btn-default" type="button" id="addButton2"><i class="fa fa-plus"></i></button>
								      </span>
								      <input type="text" class="form-control" placeholder="Maximum 2 child 1 room" disabled="">
								      <span class="input-group-btn">
								        <button class="btn btn-default" type="button" id="removeButton2"><i class="fa fa-minus"></i></button>
								      </span>
								    </div><!-- /input-group -->
								    <div id='TextBoxesGroup2'>
										
									</div>
			    				</div>
			    			</fieldset>
			    			</div>
			    			
			    			<div class="col-lg-2 col-sm-12 col-xs-12 R3 box">
			    			<fieldset>
			    				<div class="form-group">
			    				<br/><br/>
			    				<label class="label label-primary font18">Room 3</label>
									
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-5 col-sm-6 col-xs-6 R3 box">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Adult (Above 12 years)</label>
									<select class="form-control" name="adult[]" >
										<option value="">Select no of Adult</option>
										<option value="1">1 Adult</option>
										<option value="2">2 Adult</option>
										<option value="3">3 Adult</option>
										<option value="4">4 Adult</option>
									</select> 
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-5 col-sm-6 col-xs-6 R3 box">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Child (Below 12 years)</label>
									<div class="input-group">
								      <span class="input-group-btn">
								        <button class="btn btn-default" type="button" id="addButton3"><i class="fa fa-plus"></i></button>
								      </span>
								      <input type="text" class="form-control" placeholder="Maximum 2 child 1 room" disabled="">
								      <span class="input-group-btn">
								        <button class="btn btn-default" type="button" id="removeButton3"><i class="fa fa-minus"></i></button>
								      </span>
								    </div><!-- /input-group -->
								    <div id='TextBoxesGroup3'>
										
									</div>
			    				</div>
			    			</fieldset>
			    			</div>
			    			
			    			<div class="col-lg-2 col-sm-12 col-xs-12 R4 box">
			    			<fieldset>
			    				<div class="form-group">
			    				<br/><br/>
			    				<label class="label label-primary font18">Room 4</label>
									
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-5 col-sm-6 col-xs-6 R4 box">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Adult (Above 12 years)</label>
									<select class="form-control" name="adult[]" >
										<option value="">Select no of Adult</option>
										<option value="1">1 Adult</option>
										<option value="2">2 Adult</option>
										<option value="3">3 Adult</option>
										<option value="4">4 Adult</option>
									</select> 
			    				</div>
			    			</fieldset>
			    			</div>
			    			<div class="col-lg-5 col-sm-6 col-xs-6 R4 box">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Child (Below 12 years)</label>
									<div class="input-group">
								      <span class="input-group-btn">
								        <button class="btn btn-default" type="button" id="addButton4"><i class="fa fa-plus"></i></button>
								      </span>
								      <input type="text" class="form-control" placeholder="Maximum 2 child 1 room" disabled="">
								      <span class="input-group-btn">
								        <button class="btn btn-default" type="button" id="removeButton4"><i class="fa fa-minus"></i></button>
								      </span>
								    </div><!-- /input-group -->
								    <div id='TextBoxesGroup4'>
										
									</div>
			    				</div>
			    			</fieldset>
			    			</div>
			    			
			    			<div class="col-lg-3 col-sm-12 col-xs-12 ">
			    			<fieldset>
			    				<div class="form-group">
			    				<label >Add Room</label>
									<select class="form-control" id="select" name="room">
										<option value="1">Room 1</option>
										<option value="2">Room 2</option>
										<option value="3">Room 3</option>
										<option value="4">Room 4</option>

									</select>
			    				</div>
			    			</fieldset>
			    			</div>
			    			
			    			
			    			<div class="col-lg-12 col-sm-12 col-xs-12">
			    			<fieldset>
			    				<button type="submit" class="btn btn-style btn-lg">Search Hotel</button>
			    			</fieldset>
			    			</div>
			    			 
        
			    		</div>
			    	</form>
			    </div>
			   		
			  </div>

			</div>
    		</div>
    		<!--/col-lg-8-->
    		<div class="col-lg-4">
    			<br/><br/>
    			<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				    <li data-target="#myCarousel" data-slide-to="3"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
				    <div class="item active">
				      <a href=""><img src="img/slider/slide1.jpg" alt="DU Travels"></a>
				    </div>

				    <div class="item">
				       <a href=""><img src="img/slider/slide2.jpg" alt="DU Travels"></a>
				    </div>

				    <div class="item">
				       <a href=""><img src="img/slider/slide3.jpg" alt="DU Travels"></a>
				    </div>

				   
				  </div>

				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>
				</div>
    		</div>
    		<!--/col-lg-4-->
    	</div>
	</div>
</section>

<section id="special-tour section">
	<div class="section-padding"></div>
	<div class="section-header">
		<h3>Special Packages</h3>
	</div>
		<div class="container">
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="package-list wow fadeInUp animated"  style="visibility: visible; animation-name: fadeInUp;">
						<a href="package-details.php?tour=<?php echo base64_encode($show1[0]); ?>">
							<div class="package-thumb">
								<img src="sm-admin/dist/img/package-images/<?php echo $show1['Package_Image']; ?>" alt="D U Travels">
								<div class="duration">
									<?php echo $show1['Nights']; ?> nights<br><?php echo $show1['Days']; ?> days
								</div>
							</div>
							<div class="package-info">
								<h3><?php echo $show1['Package_Name']; ?></h3>
								<p><?php echo $show1['Des']; ?></p>
								<span class="pull-left price">
									<del><i class="fa fa-inr"></i> <?php echo $show1['Fake_Price']; ?></del>
								</span>
								<span class="pull-right price"><i class="fa fa-inr"></i> <?php echo $show1['Original_Price']; ?></span>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="package-list wow fadeInUp animated"  style="visibility: visible; animation-name: fadeInUp;">
						<a href="package-details.php?tour=<?php echo base64_encode($show2[0]); ?>">
							<div class="package-thumb">
								<img src="sm-admin/dist/img/package-images/<?php echo $show2['Package_Image']; ?>" alt="D U Travels">
								<div class="duration">
									<?php echo $show2['Nights']; ?> nights<br><?php echo $show2['Days']; ?> days
								</div>
							</div>
							<div class="package-info">
								<h3><?php echo $show2['Package_Name']; ?></h3>
								<p><?php echo $show2['Des']; ?></p>
								<span class="pull-left price">
									<del><i class="fa fa-inr"></i> <?php echo $show2['Fake_Price']; ?></del>
								</span>
								<span class="pull-right price"><i class="fa fa-inr"></i> <?php echo $show2['Original_Price']; ?></span>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="package-list wow fadeInUp animated"  style="visibility: visible; animation-name: fadeInUp;">
						<a href="package-details.php?tour=<?php echo base64_encode($show3[0]); ?>">
							<div class="package-thumb">
								<img src="sm-admin/dist/img/package-images/<?php echo $show3['Package_Image']; ?>" alt="D U Travels">
								<div class="duration">
									<?php echo $show3['Nights']; ?> nights<br><?php echo $show3['Days']; ?> days
								</div>
							</div>
							<div class="package-info">
								<h3><?php echo $show3['Package_Name']; ?></h3>
								<p><?php echo $show3['Des']; ?></p>
								<span class="pull-left price">
									<del><i class="fa fa-inr"></i> <?php echo $show3['Fake_Price']; ?></del>
								</span>
								<span class="pull-right price"><i class="fa fa-inr"></i> <?php echo $show3['Original_Price']; ?></span>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="package-list wow fadeInUp animated"  style="visibility: visible; animation-name: fadeInUp;">
						<a href="package-details.php?tour=<?php echo base64_encode($show4[0]); ?>">
							<div class="package-thumb">
								<img src="sm-admin/dist/img/package-images/<?php echo $show4['Package_Image']; ?>" alt="D U Travels">
								<div class="duration">
									<?php echo $show4['Nights']; ?> nights<br><?php echo $show4['Days']; ?> days
								</div>
							</div>
							<div class="package-info">
								<h3><?php echo $show4['Package_Name']; ?></h3>
								<p><?php echo $show4['Des']; ?></p>
								<span class="pull-left price">
									<del><i class="fa fa-inr"></i> <?php echo $show4['Fake_Price']; ?></del>
								</span>
								<span class="pull-right price"><i class="fa fa-inr"></i> <?php echo $show4['Original_Price']; ?></span>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="package-list wow fadeInUp animated"  style="visibility: visible; animation-name: fadeInUp;">
						<a href="package-details.php?tour=<?php echo base64_encode($show5[0]); ?>">
							<div class="package-thumb">
								<img src="sm-admin/dist/img/package-images/<?php echo $show5['Package_Image']; ?>" alt="D U Travels">
								<div class="duration">
									<?php echo $show5['Nights']; ?> nights<br><?php echo $show5['Days']; ?> days
								</div>
							</div>
							<div class="package-info">
								<h3><?php echo $show5['Package_Name']; ?></h3>
								<p><?php echo $show5['Des']; ?></p>
								<span class="pull-left price">
									<del><i class="fa fa-inr"></i> <?php echo $show5['Fake_Price']; ?></del>
								</span>
								<span class="pull-right price"><i class="fa fa-inr"></i> <?php echo $show5['Original_Price']; ?></span>
							</div>
						</a>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="package-list wow fadeInUp animated"  style="visibility: visible; animation-name: fadeInUp;">
						<a href="package-details.php?tour=<?php echo base64_encode($show6[0]); ?>">
							<div class="package-thumb">
								<img src="sm-admin/dist/img/package-images/<?php echo $show6['Package_Image']; ?>" alt="D U Travels">
								<div class="duration">
									<?php echo $show6['Nights']; ?> nights<br><?php echo $show6['Days']; ?> days
								</div>
							</div>
							<div class="package-info">
								<h3><?php echo $show6['Package_Name']; ?></h3>
								<p><?php echo $show6['Des']; ?></p>
								<span class="pull-left price">
									<del><i class="fa fa-inr"></i> <?php echo $show6['Fake_Price']; ?></del>
								</span>
								<span class="pull-right price"><i class="fa fa-inr"></i> <?php echo $show6['Original_Price']; ?></span>
							</div>
						</a>
					</div>
				</div>
			</div>
	
</section> 
 <!--/section-tour-->
 <section id="top-destination section">
	<div class="section-padding"></div>
	<div class="section-header">
		<h3>Popular Destination</h3>
	</div>
		<div class="container-fluid no-padding">
		<?php
		   	$getst2 = mysqli_query($con ,"select * from international_spot where I_ID = 1");
		   	$showst2 = mysqli_fetch_array($getst2);
		   
		   	$fisrt2 = $showst2[1];
			$get111 = mysqli_query($con, "select * from destination where D_ID = '$fisrt2'");
			$show111 = mysqli_fetch_array($get111);
			
			$second2 = $showst2[2];
			$get222 = mysqli_query($con, "select * from destination where D_ID = '$second2'");
			$show222 = mysqli_fetch_array($get222);
			
			$third2 = $showst2[3];
			$get333 = mysqli_query($con, "select * from destination where D_ID = '$third2'");
			$show333 = mysqli_fetch_array($get333);
			
			$forth2 = $showst2[4];
			$get444 = mysqli_query($con, "select * from destination where D_ID = '$forth2'");
			$show444 = mysqli_fetch_array($get444);
		   
		    ?> 
             
			<div class="col-md-3 col-sm-4 col-xs-12 gallery-box no-padding animated bounceIn">
				<img src="sm-admin/dist/img/package-images/<?php echo $show111['Dest_Image'];?>" alt="D U Travels" class="img-responsive">
				<div class="gallery-box-hover">
				<h4><?php echo $show111['Dest_Name'];?></h4>
				<p><?php echo $show111['Des'];?></p>
				<a href="tours.php?tour=<?php echo base64_encode($show111['Dest_Rand']); ?>&back=<?php echo base64_encode($show111['Dest_Image']); ?>&name=<?php echo base64_encode($show111['Dest_Name']); ?>&type=<?php echo base64_encode($show111['Dest_Type']); ?>" title=" View more"> View more</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12 gallery-box no-padding animated bounceIn">
				<img src="sm-admin/dist/img/package-images/<?php echo $show222['Dest_Image'];?>" alt="D U Travels" class="img-responsive">
				<div class="gallery-box-hover">
				<h4><?php echo $show222['Dest_Name'];?></h4>
				<p><?php echo $show222['Des'];?></p>
				<a href="tours.php?tour=<?php echo base64_encode($show222['Dest_Rand']); ?>&back=<?php echo base64_encode($show222['Dest_Image']); ?>&name=<?php echo base64_encode($show222['Dest_Name']); ?>&type=<?php echo base64_encode($show222['Dest_Type']); ?>" title=" View more"> View more</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12 gallery-box no-padding animated bounceIn">
				<img src="sm-admin/dist/img/package-images/<?php echo $show333['Dest_Image'];?>" alt="D U Travels" class="img-responsive">
				<div class="gallery-box-hover">
				<h4><?php echo $show333['Dest_Name'];?></h4>
				<p><?php echo $show333['Des'];?></p>
				<a href="tours.php?tour=<?php echo base64_encode($show333['Dest_Rand']); ?>&back=<?php echo base64_encode($show333['Dest_Image']); ?>&name=<?php echo base64_encode($show333['Dest_Name']); ?>&type=<?php echo base64_encode($show333['Dest_Type']); ?>" title=" View more"> View more</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12 gallery-box no-padding animated bounceIn">
				<img src="sm-admin/dist/img/package-images/<?php echo $show444['Dest_Image'];?>" alt="D U Travels" class="img-responsive">
				<div class="gallery-box-hover">
				<h4><?php echo $show444['Dest_Name'];?></h4>
				<p><?php echo $show444['Des'];?></p>
				<a href="tours.php?tour=<?php echo base64_encode($show444['Dest_Rand']); ?>&back=<?php echo base64_encode($show444['Dest_Image']); ?>&name=<?php echo base64_encode($show444['Dest_Name']); ?>&type=<?php echo base64_encode($show444['Dest_Type']); ?>" title=" View more"> View more</a>
				</div>
			</div>	
			<div class="col-md-3 col-sm-4 col-xs-12 gallery-box no-padding animated bounceIn">
				<img src="img/gallery5.jpg" alt="Gallery" class="img-responsive">
				<div class="gallery-box-hover">
				<h4>Singapure</h4>
				<p>The Love Boat soon will be making another run. The Love Boat something everyone.</p>
				<a href="#" title=" View more"> View more</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12 gallery-box no-padding animated bounceIn">
				<img src="img/gallery6.jpg" alt="Gallery" class="img-responsive">
				<div class="gallery-box-hover">
				<h4>Singapure</h4>
				<p>The Love Boat soon will be making another run. The Love Boat something everyone.</p>
				<a href="#" title=" View more"> View more</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12 gallery-box no-padding animated bounceIn">
				<img src="img/gallery7.jpg" alt="Gallery" class="img-responsive">
				<div class="gallery-box-hover">
				<h4>Singapure</h4>
				<p>The Love Boat soon will be making another run. The Love Boat something everyone.</p>
				<a href="#" title=" View more"> View more</a>
				</div>
			</div>
			<div class="col-md-3 col-sm-4 col-xs-12 gallery-box no-padding animated bounceIn">
				<img src="img/gallery8.jpg" alt="Gallery" class="img-responsive">
				<div class="gallery-box-hover">
				<h4>Singapure</h4>
				<p>The Love Boat soon will be making another run. The Love Boat something everyone.</p>
				<a href="#" title=" View more"> View more</a>
				</div>
			</div>
		</div>
	
</section> 
<!--/section-destination-->
<br/>
<br/>
<!--.footer start-->
<?php include 'include/footer.php';?>
<!--/footer start-->
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>

 
    <script src="js/bootstrap.js"></script>
     <script src="js/select2.js"></script>
     <script src="js/java.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
  $( function() {
   $( ".datepicker" ).datepicker({
    dateFormat: 'yy-mm-dd',
      changeYear:true,
      changeMonth:true
});
  } );
  </script>
<script type="text/javascript">
$(document).ready(function(){
	$('.select2').select2();
    var counter = 2;

    $("#addButton").click(function () {

	if(counter >3){
            alert("Only 2 child Only 1 room allow");
            return false;
	}

	var newTextBoxDiv = $(document.createElement('div'))
	     .attr("id", 'TextBoxDiv' + counter);

	newTextBoxDiv.after().html('<select type="number" name="textbox' + counter +
	      '" id="textbox' + counter + '"  class="text-center" style="width:60px;"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>');

	newTextBoxDiv.appendTo("#TextBoxesGroup");


	counter++;
     });

     $("#removeButton").click(function () {
	if(counter==1){
          alert("No more textbox to remove");
          return false;
       }

	counter--;

        $("#TextBoxDiv" + counter).remove();

     });

    
  });
</script>
<script type="text/javascript">
$(document).ready(function(){

    var counter2 = 2;

    $("#addButton2").click(function () {

	if(counter2 >3){
            alert("Only 2 child Only 1 room allow");
            return false;
	}

	var newTextBoxDivtwo = $(document.createElement('div'))
	     .attr("id", 'TextBoxDivtwo' + counter2);

	newTextBoxDivtwo.after().html('<select type="number" name="textboxtwo' + counter2 +
	      '" id="textboxtwo' + counter2 + '"  class="text-center" style="width:60px;"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>');

	newTextBoxDivtwo.appendTo("#TextBoxesGroup2");


	counter2++;
     });

     $("#removeButton2").click(function () {
	if(counter2==1){
          alert("No more textbox to remove");
          return false;
       }

	counter2--;

        $("#TextBoxDivtwo" + counter2).remove();

     });

    
  });
</script>
<script type="text/javascript">
$(document).ready(function(){

    var counter3 = 2;

    $("#addButton3").click(function () {

	if(counter3 >3){
            alert("Only 2 child Only 1 room allow");
            return false;
	}

	var newTextBoxDivthree = $(document.createElement('div'))
	     .attr("id", 'TextBoxDivthree' + counter3);

	newTextBoxDivthree.after().html('<select type="number" name="textboxthree' + counter3 +
	      '" id="textboxthree' + counter3 + '"  class="text-center" style="width:60px;"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>');

	newTextBoxDivthree.appendTo("#TextBoxesGroup3");


	counter3++;
     });

     $("#removeButton3").click(function () {
	if(counter3==1){
          alert("No more textbox to remove");
          return false;
       }

	counter3--;

        $("#TextBoxDivthree" + counter3).remove();

     });

    
  });
</script>
<script type="text/javascript">
$(document).ready(function(){

    var counter4 = 2;

    $("#addButton4").click(function () {

	if(counter4 >3){
            alert("Only 2 child Only 1 room allow");
            return false;
	}

	var newTextBoxDivfour = $(document.createElement('div'))
	     .attr("id", 'TextBoxDivfour' + counter4);

	newTextBoxDivfour.after().html('<select type="number" name="textboxfour' + counter4 +
	      '" id="textboxfour' + counter4 + '"  class="text-center" style="width:60px;"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option></select>');

	newTextBoxDivfour.appendTo("#TextBoxesGroup4");


	counter4++;
     });

     $("#removeButton4").click(function () {
	if(counter4==1){
          alert("No more textbox to remove");
          return false;
       }

	counter4--;

        $("#TextBoxDivfour" + counter4).remove();

     });

    
  });
</script>
  </body>
</html>