<?php include 'core/int.php';
admin_protect();
protect_page(); 
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Update Package | Destination Unlimited Travels</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="dist/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/ionicons.min.css">
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<link rel="stylesheet" type="text/css" href="formvalidation/vendor/formvalidation/css/formValidation.min.css">
<link rel="stylesheet" href="dist/css/pnotify.custom.min.css">
<link rel="stylesheet" href="dist/css/jquery-ui.min.css">

<link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
<link rel="stylesheet" href="plugins/select2/select2.min.css">
<link rel="stylesheet" href="plugins/footable/css/footable.bootstrap.min.css">
<!-- iCheck -->
<link rel="stylesheet" href="plugins/iCheck/flat/blue.css">
<!-- Morris chart -->
<link rel="stylesheet" href="plugins/morris/morris.css">
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

</head>

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <?php include'include/header.php'; ?>
  <!-- Left side column. contains the logo and sidebar -->
 <?php include'include/menu.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Update Package
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        
         <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Package</li>
          <li><a href="manage-package.php"><i class="fa fa-dashboard"></i> Manage Package</a></li>
        <li class="active">Update Package</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row"> 
        <!-- left column -->
        <div class="col-md-12"> 
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Package</h3>
            </div>
            <!-- /.box-header --> 
            <!-- form start -->
           <?php $id = $_GET['id'];
      $get = mysqli_query($con, "select * from package where P_ID = '$id'");
      $show = mysqli_fetch_array($get);
      ?>
            <form role="form" class="form-horizontal" id="package-form" method="post" enctype="multipart/form-data" action="ajax/Update/Update-Package.php">
              <div class="box-body">
                  <div class="col-md-6">
                      <fieldset>
                          <div class="form-group">
                            <label class="col-md-4 control-label">Select Destination</label>
                            <div class="col-md-8">
                                <select class="form-control " name="select_dest" >
                                  <option value="">Select Destination</option>
                                  <?php
                                  $dest_id = $show['D_ID'];
                                  $gett = mysqli_query($con, "select * from destination where Dest_Rand = '$dest_id'");
                                  $showt = mysqli_fetch_array($gett);
                                  ?>
                                              <option value="<?php echo $showt['Dest_Rand']; ?>" selected><?php echo $showt['Dest_Name']; ?></option>
                                              <?php $getour = mysqli_query($con, "select * from destination");
                                              while($showtour = mysqli_fetch_array($getour)) { ?>
                                              <option value="<?php echo $showtour['Dest_Rand']; ?>"><?php echo $showtour['Dest_Name']; ?></option>
                                               <?php } ?>
                                </select>
                            </div>
                          </div>
                      </fieldset>
                  </div>
                  <!--col-md-6-->
                  <div class="col-md-6">
                      <fieldset>
                          <div class="form-group">
                            <label class="col-md-4 control-label" for="package_name">Package Name</label>
                              <div class="col-md-8">
                                <input type="text" class="form-control" name="package_name" placeholder="Enter Package Name" value="<?php echo $show['Package_Name']; ?>"/>
                                <input type="hidden" value="<?php echo $_GET['id']; ?>" name="package_id" />
                        <input type="hidden" value="<?php echo $show['Package_Image']; ?>" name="package_image" />
                              </div>
                          </div>
                      </fieldset>
                  </div>
                  <!--col-md-6-->
                  
                  <div class="col-md-6">
                      <fieldset>
                           <div class="form-group">
                              <label class="col-md-4 control-label" for="packageImage">Package Image</label>
                              <div class="col-md-8">
                               <input type="file" name="packageImage" class="form-control">
                              </div>
                            </div>
                      </fieldset>
                  </div>    
                  <!--col-md-6-->
                  <div class="col-md-6">
                      <fieldset>
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="days">Days</label>
                              <div class="col-md-8">
                                  <select class="form-control " name="days" style="width: 100%;">
                                     <option value="">Select Days</option>
                                      <option value="<?php echo $show['Days']; ?>" selected><?php echo $show['Days']; ?></option>
                                      <option value="0">0</option>
                                      <?php
                                      for($i =1; $i < 20; $i++) {  ?>
                                      <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                       <?php } ?>
                                  </select>
                              </div>
                            </div>
                      </fieldset>
                  </div>    
                  <!--col-md-6-->
                  <div class="col-md-6">
                      <fieldset>
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="nights">Nights</label>
                                <div class="col-md-8">
                                    <select class="form-control" name="nights" >
                                        <option value="">Select Nights</option>
                                     <option value="<?php echo $show['Nights']; ?>" selected><?php echo $show['Nights']; ?></option>
                                    <option value="0">0</option>
                                    <?php
                                    for($i =1; $i < 20; $i++) {  ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                     <?php } ?>
                                    </select>
                                </div>
                            </div>
                      </fieldset>
                  </div>    
                  <!--col-md-6-->
                  <div class="col-md-6">
                      <fieldset>
                            <div class="form-group">
                              <label class="col-md-4 control-label" for="fake_price">Fake Price</label>
                              <div class="col-md-8">
                              <div class="input-group">
                                    <div class="input-group-addon">
                                      <i class="fa fa-rupee"></i>
                                    </div>
                                    <input type="text" class="form-control" name="fake_price" placeholder="Enter a Fake Price" value="<?php echo $show['Fake_Price']; ?>">
                                  </div><!-- /.input group -->
                              </div>
                            </div>
                      </fieldset>
                  </div>    
                  <!--col-md-6-->
                  <div class="col-md-6">
                      <fieldset>
                           <div class="form-group">
                              <label class="col-md-4 control-label" for="original_price">Original Price</label>
                              <div class="col-md-8">
                                  <div class="input-group">
                                        <div class="input-group-addon">
                                          <i class="fa fa-rupee"></i>
                                        </div>
                                        <input type="text" class="form-control" name="original_price" placeholder="Enter a Per Adult Price" value="<?php echo $show['Original_Price']; ?>">
                                      </div><!-- /.input group -->
                              </div>
                            </div>
                      </fieldset>
                  </div>    
                  <!--col-md-6-->
                  <div class="col-md-12">
                      <fieldset>
                            <div class="form-group">
                              <label class="col-md-2 control-label" for="description">Description</label>
                              <div class="col-md-10">
                                <textarea class="form-control" name="description" style="height:100px; resize:vertical;"><?php echo $show['Des']; ?></textarea>
                              </div>
                            </div>
                      </fieldset>
                  </div>    
                  <!--col-md-12-->
                  <div class="col-md-12">
                      <fieldset>
                            <div class="form-group">
                              <label class="col-md-2 control-label" for="inclusions">Inclusions</label>
                              <div class="col-md-10">
                                <textarea class="form-control" name="inclusions" style="height:100px; resize:vertical;"><?php echo $show['Inclusions']; ?></textarea>
                              </div>
                            </div>
                      </fieldset>
                  </div>    
                  <!--col-md-12-->
                  <div class="col-md-12">
                      <fieldset>
                            <div class="form-group">
                              <label class="col-md-2 control-label" for="exclusions">Exclusions</label>
                              <div class="col-md-10">
                                <textarea class="form-control" name="exclusions" style="height:100px; resize:vertical;"><?php echo $show['Exclusions']; ?></textarea>
                              </div>
                            </div>
                      </fieldset>
                  </div>    
                  <!--col-md-12-->
                  <div class="col-md-12">
                      <fieldset>
                            <div class="form-group">
                              <label class="col-md-2 control-label" for="itinerary">Itinerary</label>
                              <div class="col-md-10">
                                <textarea class="form-control" name="itinerary" style="height:100px; resize:vertical;"><?php echo $show['Itinerary']; ?></textarea>
                              </div>
                            </div>
                      </fieldset>
                  </div>    
                  <!--col-md-12-->
              </div>
              <!-- /.box-body -->
              
              <div class="box-footer">
                <button type="submit" name="save" class="btn btn-primary btn-flat pull-right">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box --> 
        </div>
        
         
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <?php include'include/footer.php'; ?>

</div>


<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="dist/js/app.min.js"></script>
<script src="formvalidation/vendor/formvalidation/js/formValidation.min.js"></script>
<script src="formvalidation/vendor/formvalidation/js/framework\bootstrap.min.js"></script>
<script src="dist/js/pnotify.custom.min.js"></script>
<script src="dist/js/jquery-ui.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="plugins/select2/select2.full.min.js"></script>
<script src="plugins/footable/js/footable.min.js"></script>
<script src="//cdn.ckeditor.com/4.6.0/standard/ckeditor.js"></script>
<script src="//cdn.ckeditor.com/4.4.3/standard/adapters/jquery.js"></script>
<script>
jQuery(function($){
    $('#example1').footable();
    
   
  });
</script>
<script>
$(document).ready(function() {
   $(".select2").select2();
  var notr = function(){
    new PNotify({
        title: 'Success',
    text: 'Data Successfully Saved',
    type: 'success',
    });
  }
        
   $('#package-form')
        .formValidation({
            framework: 'bootstrap',
      excluded: [':disabled'],
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                package_name: {
                    validators: {
                        notEmpty: {
                            message: 'The Package name is required'
                        }
                    }
                },
                select_tour: {
                    validators: {
                        notEmpty: {
                            message: 'Please choose a Tour'
                        }
                    }
                },
        days: {
                    validators: {
                        notEmpty: {
                            message: 'Please choose a Days'
                        }
                    }
                },
        nights: {
                    validators: {
                        notEmpty: {
                            message: 'Please choose a Nights'
                        }
                    }
                },
        
                packageImage: {
                    validators: {
                        
                        file: {
                            extension: 'jpg, jpeg, png, gif',
                            type: 'image/jpeg, image/jpg, image/gif, image/png',
                            message: 'The file must be in .jpeg, .jpg, .gif, .png format'
                        }
                    }
                },
        fake_price: {
                  validators: {
                      integer: {
                          message: 'The value is not an integer'
                      },
            notEmpty: {
                            message: 'The Fake Price is required'
                        },
                  }
              },
        original_price: {
                  validators: {
                      integer: {
                          message: 'The value is not an integer'
                      },
            notEmpty: {
                            message: 'The Original Price is required'
                        },
                  }
              },
        
       
       
            }
        })
    .on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();

            var $form    = $(e.target),
                formData = new FormData(),
                params   = $form.serializeArray(),
                files    = $form.find('[name="packageImage"]')[0].files;

            $.each(files, function(i, file) {
                // Prefix the name of uploaded files with "uploadedFiles-"
                // Of course, you can change it to any string
                formData.append('packageImage', file);
            });

            $.each(params, function(i, val) {
                formData.append(val.name, val.value);
            });

            $.ajax({
                url: $form.attr('action'),
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                type: 'POST',
                beforeSend: function() {
          $('#package-form button').html('<i class="fa fa-spinner fa-spin"></i>');
        },
        success: function(result) {
          $('#package-form button').html(result);
          notr();
          setTimeout(function(){ window.location.href = "manage-package.php" }, 800);
        }
            });
        
                });   
    });
</script>
</body>
</html>
