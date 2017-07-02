<?php include 'core/int.php';
admin_protect();
protect_page(); 
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Popular Destination | Destination Unlimited Travels</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="dist/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/ionicons.min.css">
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<link rel="stylesheet" type="text/css" href="formvalidation/vendor/formvalidation/css/formValidation.min.css">
<link rel="stylesheet" href="dist/css/pnotify.custom.min.css">
<link rel="stylesheet" href="dist/css/jquery-ui.min.css">
<link rel="stylesheet" type="text/css" href="plugins/select2/select2.min.css">
<link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">
<link rel="stylesheet" href="dist/css/footable.bootstrap.min.css">
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
        Popular Destination
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        
         <li><a href="dashboard.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li>Home Spot</li>
        <li class="active">Popular Destination</li>
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
              <h3 class="box-title">Popular Destination</h3>
            </div>
            <!-- /.box-header --> 
            <!-- form start -->
            <?php
      $get = mysqli_query($con, "select * from international_spot where I_ID = 1");
      $show = mysqli_fetch_array($get);
      
      $fisrt = $show[1];
      $get1 = mysqli_query($con, "select * from destination where D_ID = '$fisrt'");
      $show1 = mysqli_fetch_array($get1);
      
      $second = $show[2];
      $get2 = mysqli_query($con, "select * from destination where D_ID = '$second'");
      $show2 = mysqli_fetch_array($get2);
      
      $third = $show[3];
      $get3 = mysqli_query($con, "select * from destination where D_ID = '$third'");
      $show3 = mysqli_fetch_array($get3);
      
      $forth = $show[4];
      $get4 = mysqli_query($con, "select * from destination where D_ID = '$forth'");
      $show4 = mysqli_fetch_array($get4);
      
       ?>
            <form role="form" id="tourform" class="form-horizontal" method="post" enctype="multipart/form-data" action="Ajax/Update/Update-Popular-Destination.php">
              <div class="box-body">
              
               <div class="form-group">
                  <label class="control-label col-md-2" for="first">First Place</label>
                  <div class="col-md-4">
                    <select class="form-control select2" name="first" style="width: 100%;">
                        <option value="">Select First Tour</option>
                        <option value="<?php echo $show1[0]; ?>" selected><?php echo $show1[1]; ?></option>
                        <?php
            $gettour = mysqli_query($con, "select * from destination");
            while($showttour = mysqli_fetch_array($gettour)) {  ?>
                        <option value="<?php echo $showttour[0]; ?>"><?php echo $showttour[1]; ?></option>
                         <?php }  ?>
                      </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-2" for="second">Second Place</label>
                  <div class="col-md-4">
                    <select class="form-control select2" name="second" style="width: 100%;">
                        <option value="">Select Second Tour</option>
                        <option value="<?php echo $show2[0]; ?>" selected><?php echo $show2[1]; ?></option>
                         <?php
            $gettour = mysqli_query($con, "select * from destination ");
            while($showttour = mysqli_fetch_array($gettour)) {  ?>
                        <option value="<?php echo $showttour[0]; ?>"><?php echo $showttour[1]; ?></option>
                         <?php }  ?>
                      </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-2" for="third">Third Place</label>
                  <div class="col-md-4">
                    <select class="form-control select2" name="third" style="width: 100%;">
                        <option value="">Select Third Tour</option>
                        <option value="<?php echo $show3[0]; ?>" selected><?php echo $show3[1]; ?></option>
                         <?php
            $gettour = mysqli_query($con, "select * from destination");
            while($showttour = mysqli_fetch_array($gettour)) {  ?>
                        <option value="<?php echo $showttour[0]; ?>"><?php echo $showttour[1]; ?></option>
                         <?php }  ?>
                      </select>
                  </div>
                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-2" for="forth">Forth Place</label>
                  <div class="col-md-4">
                    <select class="form-control select2" name="forth" style="width: 100%;">
                        <option value="">Select Forth Tour</option>
                        <option value="<?php echo $show4[0]; ?>" selected><?php echo $show4[1]; ?></option>
                       <?php
            $gettour = mysqli_query($con, "select * from destination ");
            while($showttour = mysqli_fetch_array($gettour)) {  ?>
                        <option value="<?php echo $showttour[0]; ?>"><?php echo $showttour[1]; ?></option>
                         <?php }  ?>
                      </select>
                  </div>
                
                
              </div>
              <!-- /.box-body -->
              
              <div class="box-footer">
                <div class="col-md-3 col-md-offset-2">
                  <button type="submit" id="add_tour_event" class="btn btn-primary">Submit</button>
                </div>
              </div>
            </form>
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
<script src="dist/js/footable.min.js"></script>
<script src="plugins/select2/select2.full.min.js"></script>
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
  
  $(".select2").select2();
        
    $('#tourform')
        .formValidation({
            framework: 'bootstrap',
            icon: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                first: {
                    validators: {
                        notEmpty: {
                            message: 'Please choose a First place Tour'
                        }
                    }
                },
        second: {
                    validators: {
                        notEmpty: {
                            message: 'Please choose a second place Tour'
                        }
                    }
                },
        third: {
                    validators: {
                        notEmpty: {
                            message: 'Please choose a third place Tour'
                        }
                    }
                },
        forth: {
                    validators: {
                        notEmpty: {
                            message: 'Please choose a forth place Tour'
                        }
                    }
                },
        fifth: {
                    validators: {
                        notEmpty: {
                            message: 'Please choose a fifth place Tour'
                        }
                    }
                },
        sixth: {
                    validators: {
                        notEmpty: {
                            message: 'Please choose a sixth place Tour'
                        }
                    }
                },
            }
        })
    .on('success.form.fv', function(e) {
            // Prevent form submission
            e.preventDefault();

            var $form = $(e.target),
                fv    = $form.data('formValidation');

            $.ajax({
                url: $form.attr('action'),
                type: 'POST',
                data: $form.serialize(),
                beforeSend: function() {
           $('#tourform button').html('<i class="fa fa-spinner fa-spin"></i>');
        },
        success: function(result) {
          $('#tourform button').html(result);
          notr();
        setTimeout(function(){ window.location.href = 'popular-destination.php' }, 1200);
        }
            });
        });
    });
</script>
</body>
</html>
