<?php include 'core/int.php';
admin_protect();
protect_page(); 
 ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Rail Ticket Query | Destination Unlimited Travels</title>
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="dist/css/font-awesome.min.css">
<link rel="stylesheet" href="dist/css/ionicons.min.css">
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
<link rel="stylesheet" type="text/css" href="formvalidation/vendor/formvalidation/css/formValidation.min.css">
<link rel="stylesheet" href="dist/css/pnotify.custom.min.css">
<link rel="stylesheet" href="dist/css/jquery-ui.min.css">

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
       Rail Ticket Query
        <small>Optional description</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="dashboard.php"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active"> View All Queries</li>
        <li class="active"> Rail Query</li>
      </ol>
    </section>

    <!-- Main content -->
   <section class="content">
    
      <div class="row"> 
        <!-- left column -->
        
        <div class="col-md-12"> 
          <!-- general form elements -->
          <div class="nav-tabs-custom">
                <ul class="nav nav-tabs">
                  <li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="false">Pending Queries</a></li>
                  <li><a style="background-color:#3c8dbc; color:rgba(255,255,255,1);" href="#tab_2" data-toggle="tab" aria-expanded="true">Closed Queries</a></li>
                </ul>
                <div class="tab-content">
                
                
                
                  <div class="tab-pane active" id="tab_1">
                  
                  
                  
                  <div id="view_week">
                    <table id="example1" data-paging="true" data-sorting="true" data-filtering="true" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th data-type="html">#</th>
                        <th data-type="html">Name</th>
                        <th data-type="html" data-breakpoints="xs sm md ">Mobile</th>
                        <th data-type="html" data-breakpoints="xs sm md ">Email</th>
                        <th data-type="html" data-breakpoints="xs sm md ">From</th>
                        <th data-type="html" data-breakpoints="xs sm md ">To</th>
                        <th data-type="html" data-breakpoints="xs sm md ">Booking Date</th>
                        <th data-type="html" data-breakpoints="xs sm md ">Description</th>
                        <th data-type="html" data-breakpoints="xs sm md ">Date</th>
                        <th data-type="html" data-breakpoints="xs sm md ">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
          $count = 1;
          $get = mysqli_query($con, "select * from rail_ticket where Status = 0 order by id desc");
          while($show = mysqli_fetch_array($get)) { ?>
            
                        <tr>
                          <td><?php echo $count++; ?></td>
                            <td><?php echo $show['Name']; ?></td>
                            <td><i class="fa fa-mobile"></i>&nbsp;<?php echo $show['Mobile']; ?></td>
                             <td><?php echo $show['Email']; ?></td>
                             <td><?php echo $show['From_City']; ?></td>
                             <td><?php echo $show['To_City']; ?></td>
                           
                              <td><?php echo date('d M Y ', strtotime($show['Date'])); ?></td>
                                <td><?php echo $show['Message']; ?></td>
                             <td><?php echo date('d M Y h:i:s a', strtotime($show['Time'])); ?></td>
                             <td><label style="cursor:pointer;" class="label label-danger" id="close<?php echo $show[0]; ?>">Close</label>
                             <script>
               $(document).ready(function() {
                 
                  $('#close<?php echo $show[0]; ?>').click(function() {
                        
                    var ID = <?php echo $show[0]; ?>;
                    
                    var dataUpdate = 'ID=' + ID;
                    
                    $.ajax({
                      type:"POST",
                      data: dataUpdate,
                      url:"ajax/Active/rail-ticket-active.php",
                      success: function() {
                        location.reload();
                      }
                    });
                    
                     });
                                
                            });
               </script>
                             </td>
                        </tr>
            
          <?php } ?>
                     </tbody>
                </table>
                  </div>
                
                  </div><!-- /.tab-pane -->
                  
                  
                  
                  <div class="tab-pane" id="tab_2">
                  
                
                  
                  
                  <div id="view_week1">
                  
                    <table id="example2" data-paging="true" data-sorting="true" data-filtering="true" class="table table-bordered table-striped">
                    <thead>
                     <tr>
                      <th data-type="html">#</th>
                        <th data-type="html">Name</th>
                        <th data-type="html" data-breakpoints="xs sm md ">Mobile</th>
                        <th data-type="html" data-breakpoints="xs sm md ">Email</th>
                        <th data-type="html" data-breakpoints="xs sm md ">From</th>
                        <th data-type="html" data-breakpoints="xs sm md ">To</th>
                        <th data-type="html" data-breakpoints="xs sm md ">Booking Date</th>
                        <th data-type="html" data-breakpoints="xs sm md ">Description</th>
                        <th data-type="html" data-breakpoints="xs sm md ">Date</th>
                        <th data-type="html" data-breakpoints="xs sm md ">Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
          $count = 1;
          $get = mysqli_query($con, "select * from Rail_ticket where Status = 1 order by id desc");
          while($show = mysqli_fetch_array($get)) { ?>
            
                        <tr>
                          <th data-type="html">#</th>
                       <td><?php echo $show['Name']; ?></td>
                            <td><i class="fa fa-mobile"></i>&nbsp;<?php echo $show['Mobile']; ?></td>
                             <td><?php echo $show['Email']; ?></td>
                             <td><?php echo $show['From_City']; ?></td>
                             <td><?php echo $show['To_City']; ?></td>
                           
                              <td><?php echo date('d M Y ', strtotime($show['Date'])); ?></td>
                                <td><?php echo $show['Message']; ?></td>
                             <td><?php echo date('d M Y h:i:s a', strtotime($show['Time'])); ?></td>
                        <td><label class="label label-success">Done</label></td>
                    </tr>
            
          <?php } ?>
                     </tbody>
                </table>
                

                  </div>
                
                 
                
                  </div><!-- /.tab-pane -->
                  
                 
                </div><!-- /.tab-content -->
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
<script>
jQuery(function($){
    $('#example1').footable();
     $('#example2').footable();
    $('[data-toggle="tooltip"]').tooltip();
  });
</script>


</body>
</html>
