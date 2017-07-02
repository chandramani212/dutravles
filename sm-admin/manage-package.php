<?php include 'core/int.php';
admin_protect();
protect_page(); 
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Manage Package | Destination Unlimited Travels</title>
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
        Manage Package
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        
         <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Package</li>
        <li class="active">Manage Package</li>
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
              <h3 class="box-title">Manage Package</h3>
            </div>
            <!-- /.box-header --> 
            <!-- form start -->
              <table class="table table-bordered table-striped" data-sorting="true" data-filtering="true" data-pageing="true" id="example1">
                    <thead>
                    <tr>
                      <th data-type="html" >#</th>
                        <th data-type="html" data-breakpoints="xs sm ">Image</th>
                        <th data-type="html" >Package Name</th>
                        <th data-type="html" data-breakpoints="xs sm md ">Package Name</th>
                        <th data-type="html" data-breakpoints="xs sm md ">Destination Type</th>
                        <th data-type="html" data-breakpoints="xs sm md ">Date</th>
                        <th data-type="html" data-breakpoints="xs sm md lg">Fake Price</th>
                        <th data-type="html" data-breakpoints="xs sm md lg">Original Price</th>
                        <th data-type="html" data-breakpoints="xs sm  ">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
          $count = 1;
          $get = mysqli_query($con, "select * from package order by P_ID desc");
          while($show = mysqli_fetch_array($get)) { ?>
            
                        <tr>
                          <td><?php echo $count++; ?></td>
                            <td>
                            <img style="cursor:pointer;" src="dist/img/package-images/<?php echo $show['Package_Image']; ?>" data-toggle="modal" data-target="#Package_Image<?php echo $show[0]; ?>" class="img-responsive img-thumbnail" width="50" />
                            
                            <div class="modal" id="Package_Image<?php echo $show[0]; ?>">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title"><?php echo $show['Package_Name']; ?></h4>
                                  </div>
                                  <div class="modal-body">
                                    <img src="dist/img/package-images/<?php echo $show['Package_Image']; ?>" class="img-responsive img-thumbnail"/>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div>
                            
                            </td>
                            <td><?php echo $show['Package_Name']; ?></td>
                            <td><?php 
              $dest_id = $show['D_ID'];
              $getdest = mysqli_query($con, "select * from destination where Dest_Rand = '$dest_id'");
              $showdest = mysqli_fetch_array($getdest);
              echo $showdest['Dest_Name'];
               ?></td>
                             <td><?php echo $showdest['Dest_Type']; ?></td>
                             <td><?php echo date('d M Y', strtotime($show['Date'])); ?></td>
                             <td><?php echo $show['Fake_Price']; ?></td>
                             <td><?php echo $show['Original_Price']; ?></td>
                            <td>
                            <a class="label label-primary" href="update-package.php?id=<?php echo $show[0]; ?>" ><i class="fa fa-pencil"></i></a>
                            
                            <a class="label label-danger" data-toggle="modal" data-target="#Package_Delete<?php echo $show[0]; ?>"><i class="fa fa-close"></i></a>
                            <a class="label label-info" data-toggle="modal" data-target="#Package_Info<?php echo $show[0]; ?>"><i class="fa fa-info-circle"></i></a>
                           
                            
                            <div class="modal" id="Package_Info<?php echo $show[0]; ?>">
                              <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                  <div class="modal-body" style="background-color:#ecf0f5; padding:0;">
                                    
                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                          <h3 class="box-title text-center"><?php echo $show['Package_Name']; ?></h3>
                                        </div>
                                        <div class="box-body">
                                          
                                           <table class="table table-bordered">
                                              <tr>
                                                  <th>Package Name</th>
                                                    <th style="font-weight:normal;"><?php echo $show['Package_Name']; ?></th>
                                                </tr>
                                                <tr>
                                                  <th>Tour</th>
                                                    <th style="font-weight:normal;"><?php echo $showdest['Dest_Name']; ?></th>
                                                </tr>
                                                <tr>
                                                  <th>Tour Type</th>
                                                    <th style="font-weight:normal;"><?php echo $showdest['Dest_Type']; ?></th>
                                                </tr>
                                                <tr>
                                                  <th>Fake Price</th>
                                                    <th style="font-weight:normal;"><i class="fa fa-rupee"></i>&nbsp;<?php echo $show['Fake_Price']; ?></th>
                                                </tr>
                                                <tr>
                                                  <th>Original Price</th>
                                                    <th style="font-weight:normal;"><i class="fa fa-rupee"></i>&nbsp;<?php echo $show['Original_Price']; ?></th>
                                                </tr>
                                               
                                                  <th>Description</th>
                                                    <th style="font-weight:normal;"><?php echo $show['Des']; ?></th>
                                                </tr>
                                                <tr>
                                                  <th>Inclusions</th>
                                                    <th style="font-weight:normal;">
                          <?php 
                          echo $a = str_replace('<td>','<th>',$show['Inclusions']); 
                          ?>
                                                    </th>
                                                </tr>
                                                <tr>
                                                  <th>Exclusions</th>
                                                    <th style="font-weight:normal;"><?php echo $show['Exclusions']; ?></th>
                                                </tr>
                                                <tr>
                                                  <th>Itinerary</th>
                                                    <th style="font-weight:normal;"><?php echo $show['Itinerary']; ?></th>
                                                </tr>
                                               
                                           </table>
                                            
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" data-dismiss="modal" class="btn btn-danger pull-right">Close</button>
                                          </div>
                                      </div>
                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div>
                            
                            <div class="modal" id="Package_Delete<?php echo $show[0]; ?>">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                  <div class="modal-body" style="background-color:#ecf0f5; padding:0;">
                                    
                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                          <h3 class="box-title text-center"><?php echo $show['Package_Name']; ?></h3>
                                        </div>
                                        <div class="box-body">
                                          <h4 align="center"><i class="fa fa-trash"></i>&nbsp;Do You Want To Delete This Package</h4>
                                            <input type="hidden" value="<?php echo $show[0]; ?>" id="package_id<?php echo $show[0]; ?>" />
                                            <input type="hidden" value="<?php echo $show['Package_Image']; ?>" id="package_img<?php echo $show[0]; ?>" />
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" id="delete_package<?php echo $show[0]; ?>" class="btn btn-primary">Yes</button>
                                            <button type="submit" data-dismiss="modal" class="btn btn-danger pull-right">No</button>
                                          </div>
                                      </div>
                                    <script>
                    $(document).ready(function() {
                                            
                      $('#delete_package<?php echo $show[0]; ?>').click(function() {
                                                
                        var ID = $('#package_id<?php echo $show[0]; ?>').val();
                        var TI = $('#package_img<?php echo $show[0]; ?>').val();
                        
                        var dataDel = 'ID=' + ID + '&TI=' + TI;
                        
                        $.ajax({
                          type:"POST",
                          url:"ajax/Delete/Delete-Package.php",
                          data: dataDel,
                          beforeSend: function() {
                            $('#delete_package<?php echo $show[0]; ?>').html('<i class="fa fa-spinner fa-spin"></i>');
                          },success: function() {
                            $('#delete_package<?php echo $show[0]; ?>').html('Yes');
                            setTimeout(function(){ window.location.href = "manage-package.php" }, 500);
                          }
                        });
                        
                                            });
                      
                                        });
                  </script>
                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div>
                            
                            </td>
                        </tr>
            
          <?php } ?>
                    
                </table>
            
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
                        notEmpty: {
                            message: 'Please choose a file to upload'
                        },
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
