<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Passport Application | Destination  Unlimited Travels</title>

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
  	background: url(img/passport.png) ;
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
			<h2 class="destination-title">Passport Application</h2>
			<ol class="breadcrumb" align="center">
		      <li><a href="index.php">Home</a></li>
		      <li class="active">More Services</li>
		      <li class="active">Passport Application</li>
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
                   Passport Application
                  </div>
                  <hr>
                  <form class="form-horizontal " id="passport-form" method="post" action="sm-admin/ajax/query/passport-query.php" >
                          
                           
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
                              <label class="col-md-3 control-label">Message</label>
                              <div class="col-md-9">
                                <textarea class="form-control" name="message"  placeholder="Message" style="resize:vertical;"></textarea>
                              </div>
                            </div>
                            

                            <div class="form-group">
                              <div class="col-md-4 col-md-offset-3">
                                  <button type="submit" class="btn btn-primary custom-button" id="weekand_button"><i class="fa fa-send"></i> Submit</button>
                                </div>
                            </div>

                        </form>
                      <div class="block1-heading text-center">
                   LIST OF DOCUMENTS REQUIRED FOR PASSPORT
                  </div>
                  <hr>
                  <b>RESIDENCE PROOF (ANY 2 OF FOLLOWING)</b>
                  <ol>
                    <li>RATION CARD</li>
                    <li>ELECTRIC BILL (PREVIOUS YEAR + CURRENT YEAR)</li>
                    <li>MTNL BILL (PREVIOUS YEAR + CURRENT YEAR)</li>
                    <li>WATER BLL</li>
                    <li>MAINTANACE BILL</li>
                  </ol>
                  <br/>
                  <b>IDENTITY PROOF</b>
                  <ol>
                    <li>PASSPORT (FOR RENEWAL/RE ISSUE)</li>
                    <li>PAN CARD</li>
                  </ol>
                  <br/>
                  <b>AGE PROOF (ANY 1 OF FOLLOWING)</b>
                  <ol>
                    <li>BIRTH CERTIFICATE</li>
                    <li>SCHOOL LEAVING CERTIFICATE</li>
                  </ol>
                  <br/>
                  <b>COMPULSORY</b>
                  <ol>
                    <li>BANK STATEMENT (LAST 1 YEAR) – NATIONALISE BANK ONLY </li>
                    <li>NOC FROM SOCIETY</li>
                    <li>2 REFERENCES (NAME, ADDRESS & CONTACT NO.)</li>
                  </ol>
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
  
    $('#passport-form').formValidation({
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
                notEmpty: {
                  message: 'The email address is required'
                },
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
             $('#passport-form button').html('<i class="fa fa-spinner fa-spin"></i>');
            },
            success: function(result) {
               $('#passport-form button').html(result);
          notr();
          setTimeout(function(){ window.location.href = 'passport-application.php' }, 1200);
        
            }
          });
        })
      
});
</script>
  </body>
</html>