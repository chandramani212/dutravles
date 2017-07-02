<?php include('sm-admin/core/int.php'); ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title><?php echo base64_decode($_GET['type']); ?> Packages | Packages Unlimited Travels</title>

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
  	background: url(sm-admin/dist/img/package-images/<?php echo base64_decode($_GET['back']); ?>);
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
			<h2 class="destination-title"><?php echo base64_decode($_GET['name']); ?> Packages</h2>
			<ol class="breadcrumb" align="center">
		      <li><a href="index.php">Home</a></li>
		      <li><a href="<?php echo base64_decode($_GET['type']); ?>.php"><?php echo base64_decode($_GET['type']); ?> Packages</a></li>
		      <li class="active"><?php echo base64_decode($_GET['name']); ?>  Packages</li>
		    </ol>
		</div>
		</div>
	</div>
</section>
 <section id="special-tour section">
	<div class="section-padding"></div>
	<div class="section-header">
		<h3><?php echo base64_decode($_GET['name']); ?> Packages</h3>
	</div>
		<div class="container">
					<?php $id = base64_decode($_GET['tour']);
							$get = mysqli_query($con,"select * from package where D_ID = '$id' order by P_ID desc");
							while($show = mysqli_fetch_array($get)) {
					?>
				<div class="col-xs-12 col-sm-6 col-md-4">
					<div class="package-list wow fadeInUp animated"  style="visibility: visible; animation-name: fadeInUp;">
						<a href="package-details.php?tour=<?php echo base64_encode($show[0]); ?>">
							<div class="package-thumb">
								<img src="sm-admin/dist/img/package-images/<?php echo $show['Package_Image']; ?>" alt="D U Travels">
								<div class="duration">
									<?php echo $show['Nights']; ?> nights<br><?php echo $show['Days']; ?> days
								</div>
							</div>
							<div class="package-info">
								<h3><?php echo $show['Package_Name']; ?></h3>
								<p><?php echo $show['Des']; ?></p>
								<span class="pull-left price">
									<del><i class="fa fa-inr"></i> <?php echo $show['Fake_Price']; ?></del>
								</span>
								<span class="pull-right price"><i class="fa fa-inr"></i> <?php echo $show['Original_Price']; ?></span>
							</div>
						</a>
					</div>
				</div>
				 <?php } ?>
				
			
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

  </body>
</html>