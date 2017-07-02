<?php include 'core/int.php';
admin_protect();
protect_page(); 
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Add Destination | Destination Unlimited Travels</title>
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
        Add Destination
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        
         <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Package</li>
        <li class="active">Add Destination</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row"> 
        <!-- left column -->
        <div class="col-md-6"> 
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add Destination</h3>
            </div>
            <!-- /.box-header --> 
            <!-- form start -->
            
            <form role="form" id="dest-form" method="post" enctype="multipart/form-data" action="ajax/Add/Add-Destination.php">
              <div class="box-body">
              
                <div class="form-group">
                  <label >Destination Name</label>
                  <input type="text" class="form-control" id="destName" name="destName" placeholder="Enter Destination Name">
                </div>
                <div class="form-group">
                  <label>Select Destination Type</label>
                  <select class="form-control" name="select_dest_type">
                    <option value="">Select Destination Type</option>
                    <option value="Domestic">Domestic</option>
                    <option value="International">International</option>
                  </select>
                </div>
                <div class="form-group">
                  <label >Destination Image</label>
                  <input type="file" class="form-control" id="destImage" name="destImage">
                </div>
                <div class="form-group">
                  <label >Description</label>
                  <textarea rows="5" maxlength="70" class="form-control"   name="des"></textarea> 
                </div>
              </div>
              <!-- /.box-body -->
              
              <div class="box-footer">
                <button type="submit" name="save" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box --> 
        </div>
        
        <div class="col-md-6"> 
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Manage Destinations</h3>
            </div>
              <div class="box-body">
              <table class="table table-bordered table-striped" data-sorting="true" data-filtering="true" data-pageing="true" id="example1">
                    <thead>
                    <tr>
                      <th data-type="html" >#</th>
                        <th data-type="html" data-breakpoints="xs sm md ">Image</th>
                        <th data-type="html" >Name</th>
                        <th data-type="html" data-breakpoints="xs sm md ">Type</th>
                        <th data-type="html" data-breakpoints="xs sm md lg">Description</th>
                        <th data-type="html" data-breakpoints="xs sm  ">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
          $count = 1;
          $get = mysqli_query($con, "select * from destination order by D_ID desc");
          while($show = mysqli_fetch_array($get)) { ?>
            
                        <tr>
                          <td><?php echo $count++; ?></td>
                            <td>
                            <img style="cursor:pointer;" src="dist/img/package-images/<?php echo $show['Dest_Image']; ?>" data-toggle="modal" data-target="#Dest_Image<?php echo $show[0]; ?>" class="img-responsive img-thumbnail" width="50" />
                            
                            <div class="modal" id="Dest_Image<?php echo $show[0]; ?>">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                    <h4 class="modal-title"><?php echo $show['Dest_Name']; ?></h4>
                                  </div>
                                  <div class="modal-body">
                                    <img src="dist/img/package-images/<?php echo $show['Dest_Image']; ?>" class="img-responsive img-thumbnail"/>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                                  </div>
                                </div><!-- /.modal-content -->
                              </div><!-- /.modal-dialog -->
                            </div>
                            
                            </td>
                            <td><?php echo $show['Dest_Name']; ?></td>
                            <td><?php echo $show['Dest_Type']; ?></td>
                            <td><?php echo $show['Des']; ?></td>
                            <td>
                            <a class="label label-primary" href="update-destination.php?id=<?php echo $show[0]; ?>" ><i class="fa fa-pencil"></i></a>
                            
                            <a class="label label-danger" data-toggle="modal" data-target="#Dest_Delete<?php echo $show[0]; ?>"><i class="fa fa-close"></i></a>
                            
                            <div class="modal" id="Dest_Delete<?php echo $show[0]; ?>">
                              <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                  <div class="modal-body" style="background-color:#ecf0f5; padding:0;">
                                    
                                    <div class="box box-primary">
                                        <div class="box-header with-border">
                                          <h3 class="box-title text-center"><?php echo $show['Dest_Name']; ?></h3>
                                        </div>
                                        <div class="box-body">
                                          <h4 align="center"><i class="fa fa-trash"></i>&nbsp;Do You Want To Delete This Destinaton</h4>
                                            <input type="hidden" value="<?php echo $show[0]; ?>" id="dest_id<?php echo $show[0]; ?>" />
                                            <input type="hidden" value="<?php echo $show['Dest_Image']; ?>" id="dest_img<?php echo $show[0]; ?>" />
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" id="delete_dest_event<?php echo $show[0]; ?>" class="btn btn-primary">Yes</button>
                                            <button type="submit" data-dismiss="modal" class="btn btn-danger pull-right">No</button>
                                          </div>
                                      </div>
                                    <script>
                    $(document).ready(function() {
                                            
                      $('#delete_dest_event<?php echo $show[0]; ?>').click(function() {
                                                
                        var ID = $('#dest_id<?php echo $show[0]; ?>').val();
                        var TI = $('#dest_img<?php echo $show[0]; ?>').val();
                        
                        var dataDel = 'ID=' + ID + '&TI=' + TI;
                        
                        $.ajax({
                          type:"POST",
                          url:"ajax/Delete/Delete-Destination.php",
                          data: dataDel,
                          beforeSend: function() {
                            $('#delete_dest_event<?php echo $show[0]; ?>').html('<i class="fa fa-spinner fa-spin"></i>');
                          },success: function() {
                            $('#delete_dest_event<?php echo $show[0]; ?>').html('Yes');
                            setTimeout(function(){ window.location.href = "add-destination.php" }, 500);
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
          </div>
          <!-- /.box --> 
        </div>
        <!--/.col (right) --> 
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
<script src="plugins/select2/select2.full.min.js"></script>
<script src="plugins/footable/js/footable.min.js"></script>
<script>
jQuery(function($){
    $('#example1').footable();
     
    $('[data-toggle="tooltip"]').tooltip();
  });
</script>
<script>
$(document).ready(function() {
  
  var notr = function(){
    new PNotify({
        title: 'Success',
    text: 'Data Successfully Saved',
    type: 'success',
    });
  }
        
    $('#dest-form')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                destName: {
                    validators: {
                        notEmpty: {
                            message: 'The Destination name is required'
                        }
                    }
                },
                select_dest_type: {
                    validators: {
                        notEmpty: {
                            message: 'Please choose a Destination type'
                        }
                    }
                },

                destImage: {
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
                }
            }
        })
    .on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();

            var $form    = $(e.target),
                formData = new FormData(),
                params   = $form.serializeArray(),
                files    = $form.find('[name="destImage"]')[0].files;

            $.each(files, function(i, file) {
                // Prefix the name of uploaded files with "uploadedFiles-"
                // Of course, you can change it to any string
                formData.append('destImage', file);
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
          $('#dest-form button').html('<i class="fa fa-spinner fa-spin"></i>');
        },
        success: function(result) {
         $('#dest-form button').html(result);
          notr();
        //setTimeout(function(){ window.location.href = 'add-destination.php' }, 1200);
        }
            });
        });
    });
</script>
</body>
</html>
