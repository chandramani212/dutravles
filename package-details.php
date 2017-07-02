<?php include('sm-admin/core/int.php'); 
$id = base64_decode($_GET['tour']);
$get = mysqli_query($con, "select * from package where P_ID = '$id'");
$show = mysqli_fetch_array($get);
$tour_id = $show['D_ID'];
$gett = mysqli_query($con, "select * from destination where Dest_Rand = '$tour_id'");
$showt = mysqli_fetch_array($gett);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Domestic Packages | Packages Unlimited Travels</title>

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
  	background: url(sm-admin/dist/img/package-images/<?php echo $show['Package_Image']; ?>) ;
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
			<h2 class="destination-title"><?php echo $show['Package_Name']; ?></h2>
			<ol class="breadcrumb" align="center">
		      <li><a href="index.php">Home</a></li>
		      <li><a href="<?php echo $showt['Dest_Type']; ?>.php"><?php echo $showt['Dest_Type']; ?></a></li>
		        <li><a href="<?php echo $showt['Dest_Name']; ?>.php"><?php echo $showt['Dest_Name']; ?></a></li>
		      <li class="active"><?php echo $show['Package_Name']; ?></li>
		    </ol>
		</div>
		</div>
	</div>
</section>
 <section id="special-tour section">
	<div class="section-padding"></div>
	
		<div class="container">
		<div  class="col-lg-8">
		         <ul class="nav nav-tabs responsive" id="myTab">
		        <li class=" active"><a class="deco-none red-class" href="#resp-tab1">Description</a></li>
		        <li ><a class="deco-none" href="#resp-tab2"> Price & Date</a></li>
		        <li><a class="deco-none" href="#resp-tab3"> Itinerary</a></li>
             <li><a class="deco-none" href="#resp-tab4"> Inclusions</a></li>
              <li><a class="deco-none" href="#resp-tab5"> Exclusions</a></li>
		      </ul>

		      <div class="tab-content responsive">
		        <div class="tab-pane active" id="resp-tab1">
		            <div class="block1">
			            <div class="block1-heading">
			            	Description
			            </div>
			            <hr>
			            <p><?php echo $show['Des']; ?></p>
		            </div>
		        </div>
		        <!--.tab-pane-->
		        <div class="tab-pane" id="resp-tab2">
		             <div class="block1">
			            <div class="block1-heading">
			            	Price & Date
			            </div>
			            <hr>
			            <form class="form-horizontal " id="package-form" method="post" action="sm-admin/ajax/query/package-query.php" >
                          
                           
                             <div class="form-group">
                              <label class="control-label col-md-3">Package Name</label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control"  name="pack_name" value="<?php echo $show['Package_Name']; ?>" readonly/>
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="control-label col-md-3">Full Name</label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control" placeholder="Name" name="name" />
                                </div>
                            </div>
                        
                          <div class="form-group">
                              <label class="col-md-3 control-label">Adult</label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control adult-text" name="adult" placeholder="13 years above">
                                </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-md-3 control-label">Child</label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control child-text" name="child" placeholder="5 - 12 years">
                                </div>
                            </div>
                           
                            <div class="form-group">
                              <label class="col-md-3 control-label">Sr. Citizen</label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control citizen-text" name="sr_citizen" placeholder="65 years above">
                                </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="control-label col-md-3">deprature</label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control" name="deprature"  placeholder="Select Date" />
                                </div>
                            </div>
                             <div class="form-group">
                              <label class="control-label col-md-3">Return</label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control" name="return" placeholder="Select Date" />
                                </div>
                            </div>
                           
                            <div class="form-group">
                              <label class="col-md-3 control-label">Mobile</label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control" name="mobile" placeholder="Mobile Number">
                                </div>
                            </div>
                            
                            <div class="form-group">
                              <label class="col-md-3 control-label">Email</label>
                                <div class="col-md-9">
                                  <input type="text" class="form-control" name="email" placeholder="Email Address">
                                </div>
                            </div>
                            <div class="form-group">
                              <label class="col-md-3 control-label">Description</label>
                                <div class="col-md-9">
                                  <textarea rows="5" class="form-control" name="des" placeholder="Description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="col-md-4 col-md-offset-3">
                                  <button type="submit" class="btn btn-primary custom-button" id="weekand_button"><i class="fa fa-send"></i> Submit</button>
                                </div>
                            </div>

                        </form>
		            </div>
		        </div>
		         <!--.tab-pane-->
		        <div class="tab-pane" id="resp-tab3">
		            <div class="block1">
			            <div class="block1-heading">
			            	Itinerary
			            </div>
			            <hr>
                  <?php echo $show['Itinerary']; ?>
		            </div>
		        </div>
		         <!--.tab-pane-->
              <div class="tab-pane" id="resp-tab4">
                <div class="block1">
                  <div class="block1-heading">
                    Inclusions
                  </div>
                  <hr>
                  <?php echo $show['Inclusions']; ?>
                </div>
            </div>
             <!--.tab-pane-->
              <div class="tab-pane" id="resp-tab5">
                <div class="block1">
                  <div class="block1-heading">
                    Exclusions
                  </div>
                  <hr>
                  <?php echo $show['Exclusions']; ?>
                </div>
            </div>
             <!--.tab-pane-->
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

$(document).ready(function() {
  
 var notr = function(){
    new PNotify({
        title: 'Success',
    text: 'Data Successfully Saved',
    type: 'success',
    });
  }

   

  $('#package-form')
  .find('[name="return"]')
  .datepicker({
    changeMonth: true,
      changeYear: true,
      dateFormat: 'dd-mm-yy',
      onSelect: function(date, inst) {
          /* Revalidate the field when choosing it from the datepicker */
          $('#package-form').formValidation('revalidateField', 'return');
      }
  });
  $('#package-form')
  .find('[name="deprature"]')
  .datepicker({
    changeMonth: true,
      changeYear: true,
      dateFormat: 'dd-mm-yy',
      onSelect: function(date, inst) {
          /* Revalidate the field when choosing it from the datepicker */
          $('#package-form').formValidation('revalidateField', 'deprature');
      }
  });
  
    $('#package-form').formValidation({
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
           adult: {
               
                validators: {
                    notEmpty: {
                        message: 'The adult is required'
                    }
                }
            },
           deprature: {
               
                validators: {
                    notEmpty: {
                        message: 'The deprature is required'
                    }
                }
            },
             return: {
               
                validators: {
                    notEmpty: {
                        message: 'The return is required'
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
             $('#package-form button').html('<i class="fa fa-spinner fa-spin"></i>');
            },
            success: function(result) {
               $('#package-form button').html(result);
          notr();
         setTimeout(function(){ window.location.href = 'package-details.php' }, 1200);
        
            }
          });
        })
      
});
</script>
<script type="text/javascript">
	 $( 'ul.nav.nav-tabs  a' ).click( function ( e ) {
        e.preventDefault();
        $( this ).tab( 'show' );
      } );

      ( function( $ ) {
          // Test for making sure event are maintained
          $( '.js-alert-test' ).click( function () {
            alert( 'Button Clicked: Event was maintained' );
          } );
          fakewaffle.responsiveTabs( [ 'xs', 'sm' ] );
      } )( jQuery );
</script>
  </body>
</html>