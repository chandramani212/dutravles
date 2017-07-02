<?php include 'core/int.php';
admin_protect();
protect_page(); 
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Update Destination | Destination Unlimited Travels</title>
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
        Update Destination
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        
         <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Package</li>
        <li><a href="add-destination.php">Add Destination</a></li>
        <li class="active">Update Destination</li>
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
              <h3 class="box-title">Update Destination</h3>
            </div>
            <!-- /.box-header --> 
            <!-- form start -->
           <?php $id = $_GET['id'];
      $get = mysqli_query($con, "select * from destination where D_ID = '$id'");
      $show = mysqli_fetch_array($get);
      
       ?>
            <form role="form" id="dest-form" method="post" enctype="multipart/form-data" action="ajax/Update/Update-Destination.php">
              <div class="box-body">
              
                <div class="form-group">
                  <label >Destination Name</label>
                  <input type="text" class="form-control" id="destName" name="destName" placeholder="Enter Destination Name" value="<?php echo $show['Dest_Name']; ?>">
                  <input type="hidden" value="<?php echo $show[0]; ?>" name="dest_id" />
                  <input type="hidden" value="<?php echo $show['Dest_Image']; ?>" name="dest_image" />
                </div>
                <div class="form-group">
                  <label>Select Destination Type</label>
                  <select class="form-control" name="select_dest_type">
                    <option value="">Select Tour Type</option>
                    <?php if($show['Dest_Type'] === 'Domestic') { ?>
                    <option value="Domestic" selected>Domestic</option>
                    <option value="International">International</option>
                    <?php } else if($show['Dest_Type'] === 'International') { ?>
                    <option value="Domestic">Domestic</option>
                    <option value="International" selected>International</option>
                    <?php } else { ?>
                    <option value="Domestic">Domestic</option>
                    <option value="International">International</option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label >Destination Image</label>
                  <input type="file" class="form-control" id="destImage" name="destImage">
                </div>
                <div class="form-group">
                  <label >Description</label>
                  <textarea rows="5" maxlength="100" class="form-control" type="file" id="des" name="des"><?php echo $show['Des']; ?></textarea> 
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
              <h3 class="box-title">Image</h3>
            </div>
              <div class="box-body">
                <img src="dist/img/package-images/<?php echo $show['Dest_Image']; ?>" class="img-responsive img-thumbnail" />
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

<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
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
         $('#dest-form button').html('Save');
          notr();
          setTimeout(function(){ window.location.href = 'add-destination.php' }, 1200);
        }
            });
        });
    });
</script>
</body>
</html>
