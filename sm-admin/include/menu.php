 <?php $id = $user_data['user_id'];
      $get = mysqli_query($con, "select * from users where user_id = '$id'");
      $show = mysqli_fetch_array($get); ?>  
 <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $user_data['First_Name'].' '.$user_data['Last_Name']; ?></p>
          <!-- Status -->
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">HEADER</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="active"><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        
         <li class="treeview">
              <a href="#">
                <i class="fa fa-suitcase"></i>
                <span>Package</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="add-destination.php"><i class="fa fa-circle-o"></i> Add Destination</a></li>
                <li><a href="add-package.php"><i class="fa fa-circle-o"></i> Add Package</a></li>
                <li><a href="manage-package.php"><i class="fa fa-circle-o"></i> Manage Package</a></li>
              </ul>
          </li>
           <li class="treeview">
              <a href="#">
                <i class="fa fa-suitcase"></i>
                <span>Home Spot</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="special-packages.php"><i class="fa fa-circle-o"></i> Special Packages</a></li>
                <li><a href="popular-destination.php"><i class="fa fa-circle-o"></i> Popular Destination</a></li>
                
              </ul>
          </li>
          <li ><a href="contact-query.php"><i class="fa fa-address-book"></i> <span>Contact Query</span></a></li>
           <li ><a href="package-query.php"><i class="fa fa-eye"></i> <span>Package Query</span></a></li>
          <li class="treeview">
              <a href="#">
                <i class="fa fa-eye"></i>
                <span>View All Query</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="car-query.php"><i class="fa fa-circle-o"></i> Car On Rent</a></li>
                <li><a href="visa-query.php"><i class="fa fa-circle-o"></i> Visa Services</a></li>
                <li><a href="bus-query.php"><i class="fa fa-circle-o"></i> Bus Ticket</a></li>
                <li><a href="rail-query.php"><i class="fa fa-circle-o"></i> Rail Ticket</a></li>
                 <li><a href="passport-query.php"><i class="fa fa-circle-o"></i>Passport Application</a></li>
                  <li><a href="pancard-query.php"><i class="fa fa-circle-o"></i>Pan Card</a></li>
                   <li><a href="travel-insurance-query.php"><i class="fa fa-circle-o"></i>Travel Insurance</a></li>
              </ul>
          </li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>