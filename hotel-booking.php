<?php 
include('sm-admin/core/int.php'); 
include('include/grn_api_functions.php');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Hotel Booking | Destination Unlimited Travels</title>

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
.breadcrumb{margin-top: 20px}
.no-padding{padding: 0px}
.destination-img{
    background: url(img/destination.jpg) ;
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
			<h2 class="destination-title">Hotel Name</h2>
			<ol class="breadcrumb" align="center">
		      <li><a href="index.php">Home</a></li>
		      <li class="active">Hotel Booking</li>
		    </ol>
		</div>
		</div>
	</div>
</section>
 <section id="special-tour section">
	<div class="section-padding"></div>
	
		<div class="container">
    <form action="" id="hotel_booking_form" method="post">
  		<div  class="col-lg-6">
  		      <div class="block1">
                  <div class="block1-heading text-center">
                  Passenger Details
                  </div>
                  <hr>
                  <div class="form-group">
                    <input type="text" name="title" class="form-control" placeholder="Title">
                  </div>
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input type="text" name="surname" class="form-control" placeholder="Surname">
                  </div>
                  <div class="form-group">
                    <input type="text" name="type" class="form-control" placeholder="Type">
                  </div>
                  <div class="form-group">
                    <input type="text" name="age" class="form-control" placeholder="Age">
                  </div>
                </div>                      
  		</div><!--col-lg-6-->
       <div  class="col-lg-6">
            <div class="block1">
                  <div class="block1-heading text-center">
                  Account Holder Details
                  </div>
                  <hr>
                  <div class="form-group">
                    <input type="text" name="holder_title" class="form-control" placeholder="Holder Title">
                  </div>
                  <div class="form-group">
                    <input type="text" name="holder_name" class="form-control" placeholder="Holder Name">
                  </div>
                  <div class="form-group">
                    <input type="text" name="holder_surname" class="form-control" placeholder="Holder Surname">
                  </div>
                  <div class="form-group">
                    <input type="text" name="holder_email" class="form-control" placeholder="Holder Email">
                  </div>
                  <div class="form-group">
                    <input type="text" name="holder_phone" class="form-control" placeholder="Holder Phone No.">
                  </div>
                   <div class="form-group">
                    <input type="text" name="nationality" class="form-control" placeholder="Nationality">
                  </div>
                </div>                      
      </div><!--col-lg-6-->
      <div  class="col-lg-12">
            <div class="block1 col-lg-12 ">
                  <div class="block1-heading text-center">
                  Credit Card Details
                  </div>
                  <hr>
                  <div class="row">
                    <div  class="col-lg-6">
                      <div class="form-group">
                      <input type="text" name="address_line1" class="form-control" placeholder="Address 1">
                      </div>
                    </div>
                    <div  class="col-lg-6">
                      <div class="form-group">
                        <input type="text" name="address_line1" class="form-control" placeholder="Address 2">
                      </div>
                    </div>
                    <div  class="col-lg-6">
                      <div class="form-group">
                        <input type="text" name="address_line3" class="form-control" placeholder="Address 3">
                      </div>
                    </div>
                    <div  class="col-lg-6">
                      <div class="form-group">
                        <input type="text" name="amount" class="form-control" placeholder="Amount">
                      </div>
                    </div>
                   
                    <div  class="col-lg-6">
                      <div class="form-group">
                        <input type="text" name="card_holder_name" class="form-control" placeholder="Card Holder Name">
                      </div>
                    </div>
                     <div  class="col-lg-6">
                      <div class="form-group">
                        <input type="text" name="card_number" class="form-control" placeholder="Card No.">
                      </div>
                    </div>
                     <div  class="col-lg-6">
                      <div class="form-group">
                        <input type="text" name="card_cv2" class="form-control" placeholder="Card Cv No.">
                      </div>
                    </div>
                    <div  class="col-lg-6">
                      <div class="form-group">
                        <input type="text" name="card_issue_number" class="form-control" placeholder="Card Issue No.">
                      </div>
                    </div>
                   
                    <div  class="col-lg-6">
                      <div class="form-group">
                        <input type="text" name="card_type" class="form-control" placeholder="Card Type">
                      </div>
                    </div>
                    <div  class="col-lg-6">
                      <div class="form-group">
                        <input type="text" name="city_name" class="form-control" placeholder="City Name">
                      </div>
                    </div>
                    <div  class="col-lg-6">
                      <div class="form-group">
                        <select class="form-control" name="countrySelectBox">
                        <option value="United States">United States</option>
                        <option value="Austria">Austria</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Canada">Canada</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="French">French</option>
                        <option value="Germany">Germany</option>
                        <option value="India" selected="">India</option>
                        <option value="Italy">Italy</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Spain">Spain</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="United Kingdom">United Kingdom</option>
                    </select>

                      </div>
                    </div>
                    <div  class="col-lg-3">
                      <div class="form-group">
                        <input type="text" name="expMonth" class="form-control" placeholder="Expiry Month">
                      </div>
                    </div>
                    <div  class="col-lg-3">
                      <div class="form-group">
                        <input type="text" name="expYear" class="form-control" placeholder="Expiry Year">
                      </div>
                    </div>
                    <div  class="col-lg-6">
                      <div class="form-group">
                        <input type="text" name="issuing_bank" class="form-control" placeholder="Issuing Bank">
                      </div>
                    </div>
                    <div  class="col-lg-3">
                      <div class="form-group">
                        <input type="text" name="state" class="form-control" placeholder="State Name  ">
                      </div>
                    </div>
                    <div  class="col-lg-3">
                      <div class="form-group">
                        <input type="text" name="postalCode" class="form-control" placeholder="Zip No.">
                      </div>
                    </div>
                     <div class="col-lg-12 ">
                        <div class="form-group ">
                            <button type="submit" class="btn btn-primary custom-button pull-right" ><i class="fa fa-send"></i> Submit</button>
                          </div>
                      </div>
                  </div><!--.row-->
              </div> <!--block1-->                     
      </div><!--col-lg-12-->
      </form>
			</div><!--.container-->
	
</section> 
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
     <script src="sm-admin/formvalidation/vendor/formvalidation/js/formValidation.min.js"></script>
<script src="sm-admin/formvalidation/vendor/formvalidation/js/framework\bootstrap.min.js"></script>
<script>
$(document).ready(function() {
  
 var notr = function(){
    new PNotify({
        title: 'Success',
    text: 'Data Successfully Saved',
    type: 'success',
    });
  }
  
    $('#hotel_booking_form').formValidation({
        framework: 'bootstrap',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
        title: {
               
                validators: {
                    notEmpty: {
                        message: 'The title is required'
                    }
                }
            },
        name: {
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    }
                }
            },
        surname: {
                validators: {
                    notEmpty: {
                        message: 'The surname is required'
                    }
                }
            },
        type: {
                validators: {
                    notEmpty: {
                        message: 'The type is required'
                    }
                }
            },
        age: { 
                validators: {
                  integer: {
                            message: 'The value is not an integer',
                            // The default separators
                            thousandsSeparator: '',
                            decimalSeparator: '.'
                        },
                    notEmpty: {
                        message: 'The age is required'
                    }
                }
            },
        holder_title: {
               
                validators: {
                    notEmpty: {
                        message: 'The holder title is required'
                    }
                }
            },
        holder_name: { 
                validators: {
                    notEmpty: {
                        message: 'The holder name is required'
                    }
                }
            },
        holder_surname: { 
                validators: {
                    notEmpty: {
                        message: 'The holder surname is required'
                    }
                }
            },
        nationality: { 
                validators: {
                    notEmpty: {
                        message: 'The nationality is required'
                    }
                }
            },
        address_line1: { 
                validators: {
                    notEmpty: {
                        message: 'The address is required'
                    }
                }
            },
        amount: { 
                validators: {
                  numeric: {
                            message: 'The value is not a number',
                            // The default separators
                            thousandsSeparator: '',
                            decimalSeparator: '.'
                        },
                    notEmpty: {
                        message: 'The amount is required'
                    },
                }
            },
         card_number: {
                validators: {
                    creditCard: {
                        message: 'The credit card number is not valid'
                    },
                    notEmpty: {
                        message: 'The credit card number is required'
                    },
                }
            },
          card_cv2: {
                validators: {
                    cvv: {
                        creditCardField: 'ccNumber',
                        message: 'The CVV number is not valid'
                    },
                     notEmpty: {
                        message: 'The CVV number is required'
                    },
                }
            },
        card_type: { 
                validators: {
                    notEmpty: {
                        message: 'The card type is required'
                    }
                }
            },
         city_name: { 
                validators: {
                    notEmpty: {
                        message: 'The city name is required'
                    }
                }
            },
         state: { 
                validators: {
                    notEmpty: {
                        message: 'The state name is required'
                    }
                }
            },
        expMonth: {
               
                validators: {
                    notEmpty: {
                        message: 'The expiration month is required'
                    },
                    digits: {
                        message: 'The expiration month can contain digits only'
                    },
                    callback: {
                        message: 'Expired',
                        callback: function(value, validator, $field) {
                            value = parseInt(value, 10);
                            var year         = validator.getFieldElements('expYear').val(),
                                currentMonth = new Date().getMonth() + 1,
                                currentYear  = new Date().getFullYear();
                            if (value < 0 || value > 12) {
                                return false;
                            }
                            if (year == '') {
                                return true;
                            }
                            year = parseInt(year, 10);
                            if (year > currentYear || (year == currentYear && value >= currentMonth)) {
                                validator.updateStatus('expYear', 'VALID');
                                return true;
                            } else {
                                return false;
                            }
                        }
                    }
                }
            },
         expYear: {
               
                validators: {
                    notEmpty: {
                        message: 'The expiration year is required'
                    },
                    digits: {
                        message: 'The expiration year can contain digits only'
                    },
                    callback: {
                        message: 'Expired',
                        callback: function(value, validator, $field) {
                            value = parseInt(value, 10);
                            var month        = validator.getFieldElements('expMonth').val(),
                                currentMonth = new Date().getMonth() + 1,
                                currentYear  = new Date().getFullYear();
                            if (value < currentYear || value > currentYear + 10) {
                                return false;
                            }
                            if (month == '') {
                                return false;
                            }
                            month = parseInt(month, 10);
                            if (value > currentYear || (value == currentYear && month >= currentMonth)) {
                                validator.updateStatus('expMonth', 'VALID');
                                return true;
                            } else {
                                return false;
                            }
                        }
                    }
                }
            },
         postalCode: {
                    validators: {
                        zipCode: {
                            country: 'countrySelectBox',
                            message: 'The value is not valid %s postal code'
                        }
                    }
                },
        holder_phone: {
               
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
     
        holder_email: {
              validators: {
                notEmpty: {
                  message: 'The email address is required'
                },
                emailAddress: {
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
             $('#hotel_booking_form button').html('<i class="fa fa-spinner fa-spin"></i>');
            },
            success: function(result) {
               $('#hotel_booking_form button').html(result);
          notr();
         
        
            }
          });
        })
      
});
</script>

  </body>
</html>