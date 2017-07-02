<?php include('sm-admin/core/int.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Domestic Destination | Destination Unlimited Travels</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/lib.css" rel="stylesheet">
    <link rel="stylesheet" href="http://cdn.bootcss.com/animate.css/3.5.1/animate.min.css">
  
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
  	background: url(img/domestic.jpg) ;
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
			<h2 class="destination-title">Domestic Destination</h2>
			<ol class="breadcrumb" align="center">
		      <li><a href="index.php">Home</a></li>
		      <li class="active">Domestic Destination</li>
		    </ol>
		</div>
		</div>
	</div>
</section>
 <section id="top-destination section">
	<div class="section-padding"></div>
	<div class="section-header">
		<h3>Domestic Destination</h3>
	</div>
		<div class="container-fluid no-padding">
			<?php 
				$get = mysqli_query($con,"select * from destination where Dest_Type = 'Domestic'");
				 while($show = mysqli_fetch_array($get)) { ?>
					
				
			<div class="col-md-3 col-sm-4 col-xs-12 gallery-box no-padding animated bounceIn">
				<img src="sm-admin/dist/img/package-images/<?php echo $show['Dest_Image'];?>" alt="D U Travels" class="img-responsive">
				<div class="gallery-box-hover">
				<h4><?php echo $show['Dest_Name'];?></h4>
				<p><?php echo $show['Des'];?></p>
				<a href="tours.php?tour=<?php echo base64_encode($show['Dest_Rand']); ?>&back=<?php echo base64_encode($show['Dest_Image']); ?>&name=<?php echo base64_encode($show['Dest_Name']); ?>&type=<?php echo base64_encode($show['Dest_Type']); ?>" title=" View more"> View more</a>
				</div>
			</div>
			<?php } ?>
			
		</div>
	
</section> 
<!--/section-destination-->
<br/>
<br/>
<!--.footer start-->
<?php include 'include/footer.php';?>
<!--/footer start-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.1.1.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
     <script src="js/java.js"></script>
<script type="text/javascript">

</script>
  </body>
</html>