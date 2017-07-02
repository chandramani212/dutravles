<?php include('sm-admin/core/int.php'); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Contact Us | Destination Unlimited Travels</title>

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
			<h2 class="destination-title">Contact Us</h2>
			<ol class="breadcrumb" align="center">
		      <li><a href="index.php">Home</a></li>
		      <li class="active">Contact Us</li>
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
                   Contact Us
                  </div>
                  <hr>
                  <form class="form-horizontal " id="contatform" method="post" action="sm-admin/ajax/query/contact-query.php" >
                          
                           
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
                                <textarea rows="5" class="form-control" name="message"  placeholder="Message" style="resize:vertical;"></textarea>
                              </div>
                            </div>
                            

                            <div class="form-group">
                              <div class="col-md-4 col-md-offset-3">
                                  <button type="submit" class="btn btn-primary custom-button" ><i class="fa fa-send"></i> Submit</button>
                                </div>
                            </div>

                        </form>
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
<section id="section-map section">
  <div class="section-padding"></div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3765.9544537484703!2d72.86112751447172!3d19.28434678696862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7b6eb8fffffff%3A0x88d0193979a3f880!2sRassaz+Multiplex!5e0!3m2!1sen!2sin!4v1479381410805" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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
  
    $('#contatform').formValidation({
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
             $('#contatform button').html('<i class="fa fa-spinner fa-spin"></i>');
            },
            success: function(result) {
               $('#contatform button').html(result);
          notr();
          setTimeout(function(){ window.location.href = 'contact.php' }, 1200);
        
            }
          });
        })
      
});
</script>
  </body>
</html>