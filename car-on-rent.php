<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Car On Rent | Destination  Unlimited Travels</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/lib.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
    <link rel="stylesheet" type="text/css" href="sm-admin/formvalidation/vendor/formvalidation/css/formValidation.min.css">
    <link rel="stylesheet" href="sm-admin/dist/css/pnotify.custom.min.css">
<link rel="stylesheet" href="sm-admin/dist/css/jquery-ui.min.css">
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
  .destination-img{
  	background: url(img/car.jpg) ;
    background-size: 100% 100%;
    -webkit-background-size: 100% 100%;
    -o-background-size: 100% 100%;
    -ms-background-size: 100% 100%;
    -moz-background-size: 100% 100%;
    min-height: 300px;
    font-family: 'Oxygen', sans-serif;
    text-shadow: 0 2px 2px rgba(0,0,0,0.2);
    font-weight: 700;
    
  }
  
.breadcrumb{
	margin-top: 20px
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
			<br/>
			<h2 class="destination-title">Car On Rent</h2>
			<ol class="breadcrumb" align="center">
		      <li><a href="index.php">Home</a></li>
		      <li class="active">More Services</li>
		      <li class="active">Car On Rent</li>
		    </ol>
		</div>
		</div>
	</div>
</section>
 <section id="special-tour section">
	<div class="section-padding"></div>
	
		<div class="container">
  		<div  class="col-lg-8">
  		      <div class="block1">
                  <div class="block1-heading text-center">
                   Car On Rent
                  </div>
                  <hr>
                  <form class="form-horizontal " id="car-rent-form" method="post" action="sm-admin/ajax/query/car-rent-query.php" >
                          
                           
                             <div class="form-group">
                              <label class="col-md-3 control-label">Full Name</label>
                              <div class="col-md-9">
                                <input type="text" name="name" class="form-control"  placeholder="Full Name">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-3 control-label">Contact</label>
                              <div class="col-md-9">
                                <input type="text" name="mobile" class="form-control"  placeholder="Contact">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-3 control-label">Email Id</label>
                              <div class="col-md-9">
                                <input type="email" name="email" class="form-control"  placeholder="Email Id">
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-md-3 control-label">From</label>
                              <div class="col-md-9">
                                <input type="text" name="from" class="form-control"  placeholder="City Name">
                              </div>
                            </div>
                             
                             <div class="form-group">
                              <label class="col-md-3 control-label">To</label>
                              <div class="col-md-9">
                                <input type="text" name="to" class="form-control"  placeholder="City Name">
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-9 col-md-offset-3">
                                <label class="radio-inline"><input class="radioBtn1" type="radio" name="test" value="oneway">One Way</label>
                              <label class="radio-inline"><input class="radioBtn2" type="radio" name="test" value="twoway">Round Trip</label>
                              </div>
                              </div>
                              <div class="form-group">
                              <label class="col-md-3 control-label">Deprature</label>
                              <div class="col-md-9">
                              <div class="input-group ">
                                <span class="input-group-addon" ><i class="fa fa-calendar""></i></span>
                                <input type="text" class="form-control" placeholder="Deprature" name="deprature">
                              </div>
                              </div>
                              </div>
                              <div class="form-group">
                              <label class="col-md-3 control-label">Return</label>
                              <div class="col-md-9">
                              <div class="input-group">
                                <span class="input-group-addon" ><i class="fa fa-calendar""></i></span>
                                <input type="text" class="form-control" placeholder="Return" name="return" class="radio1" id="return">
                              </div>
                              </div>
                              </div>
                            <div class="form-group">
                              <label class="col-md-3 control-label">Address</label>
                              <div class="col-md-9">
                                <textarea class="form-control" name="address"  placeholder="Address" style="resize:vertical;"></textarea>
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-3 control-label">Vehicle</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="vehicle"  placeholder="Vehicle Name">
                              </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-3 control-label">Paseenger</label>
                              <div class="col-md-9">
                                <input type="text" class="form-control" name="passenger"  placeholder="Paseenger">
                              </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-md-3 control-label">Message</label>
                              <div class="col-md-9">
                                <textarea class="form-control" name="message"  placeholder="Message" style="resize:vertical;"></textarea>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="col-md-4 col-md-offset-3">
                                  <button type="submit" class="btn btn-primary custom-button" ><i class="fa fa-send"></i> Submit</button>
                                </div>
                            </div>

                        </form>

                         <div class="block1-heading text-center">
                            Vehicle List
                          </div>
                          <hr>
                          <div class="table-responsive">
                          <table class="table table-bordered">
                              <tr>
                                  <th>Vehicle Type</th>
                                  <th>Xylo Car</th>
                                  <th>Tata Safari</th>
                                  <th>Innova</th>
                                  <th>Swift Dezire</th>
                              </tr>
                              <tr>
                                  <th>Sitting Capacity</th>
                                  <td>7 Pax</td>
                                  <td>6 Pax</td>
                                  <td>7 Pax</td>
                                  <td>4 Pax</td>
                              </tr>
                               <tr>
                                  <th>Outstation</th>
                                  <td>INR 11/km</td>
                                  <td>INR 11/km</td>
                                  <td>INR 12.50/km</td>
                                  <td>INR 10/km</td>
                              </tr>
                               <tr>
                                  <th>Minimum KM Charge</th>
                                  <td>300 KM/Day</td>
                                  <td>300 KM/Day</td>
                                  <td>300 KM/Day</td>
                                  <td>300 KM/Day</td>
                              </tr>
                               <tr>
                                  <th>Local</th>
                                  <td>INR 2,500/-</td>
                                  <td>INR 2,500/-</td>
                                  <td>INR 2,500/-</td>
                                  <td>INR 2,200/-</td>
                              </tr>
                               <tr>
                                  <th>Minimum KM Charge</th>
                                  <td>100 KM/10 Hrs</td>
                                  <td>100 KM/10 Hrs</td>
                                  <td>100 KM/10 Hrs</td>
                                  <td>100 KM/10 Hrs</td>
                              </tr>
                              <tr>
                                  <th>Airport / Railway <br/>Station Transfer</th>
                                  <td>INR 1,200/- 1 way <br/>Transfer </td>
                                  <td>INR 1,200/- 1 way  <br/>Transfer </td>
                                  <td>INR 1,200/- 1 way  <br/>Transfer </td>
                                  <td>INR 1,200/- 1 way  <br/>Transfer </td>
                              </tr>
                          </table>
                          </div>

                          
                          <b>Note:</b>
                          <br/>A) Toll & Parking charges as applicable
                          <br/>B) Driver Allowance as applicable INR - 300/Day

                </div>                      
  		</div>
      <div class="col-lg-4">
          <div class="block1" align="center">
              <div class="block1-heading text-center">
                   Contact Details
              </div>
              <hr>
              <i class="fa fa-map-marker ico-co"></i>
              <p style="text-align:center" >Shop No. 6  Lord's Plaza ,<br/> Nr. Rassaz Cinema
opp. Umrao Hospital ,<br/> Mira Road (E) ,<br/> Thane – 401 107.
              </p>
                <hr style="border-top:1px solid #fcf8e3">
                <i class="fa fa-mobile-phone ico-co"></i>
                <p style="text-align:center" >+91-9172789996<br/> +91-9223242108
              </p>
                <hr style="border-top:1px solid #fcf8e3">
                <i class="fa fa-envelope-o ico-co"></i>
                <p style="text-align:center" >info@dutravels.com<br/> contact@dutravels.com
              </p>
          </div>
      </div>
			</div>
	
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
<script src="sm-admin/dist/js/pnotify.custom.min.js"></script>
 <script src="sm-admin/dist/js/jquery-ui.min.js"></script>
     <script src="sm-admin/formvalidation/vendor/formvalidation/js/formValidation.min.js"></script>
<script src="sm-admin/formvalidation/vendor/formvalidation/js/framework\bootstrap.min.js"></script>
<script>
function eraseText() {
    document.getElementById("#return").value = "";
}
$(document).ready(function() {
  
 var notr = function(){
    new PNotify({
        title: 'Success',
    text: 'Data Successfully Saved',
    type: 'success',
    });
  }

   $('#car-rent-form')
  .find('[name="deprature"]')
  .datepicker({
    changeMonth: true,
      changeYear: true,
      dateFormat: 'dd-mm-yy',
      onSelect: function(date, inst) {
          /* Revalidate the field when choosing it from the datepicker */
          $('#car-rent-form').formValidation('revalidateField', 'deprature');
      }
  });

  $('#car-rent-form')
  .find('[name="return"]')
  .datepicker({
    changeMonth: true,
      changeYear: true,
      dateFormat: 'dd-mm-yy',
      onSelect: function(date, inst) {
          /* Revalidate the field when choosing it from the datepicker */
          $('#car-rent-form').formValidation('revalidateField', 'return');
      }
  });
  
    $('#car-rent-form').formValidation({
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
             $('#car-rent-form button').html('<i class="fa fa-spinner fa-spin"></i>');
            },
            success: function(result) {
               $('#car-rent-form button').html(result);
          notr();
         // setTimeout(function(){ window.location.href = 'car-on-rent.php' }, 1200);
        
            }
          });
        })
      
});
</script>
  </body>
</html>