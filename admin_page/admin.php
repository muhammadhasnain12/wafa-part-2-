<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Bootstrap 3.3.5 -->
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="dist/css/AdminLTE.min.css">

<!-- <link rel="stylesheet" href="dist/css/skins/my-color.min.css"> -->
<link rel="stylesheet" href="dist/css/skins/my-color.css">
<title>Title</title>
</head>
<body class="hold-transition my-color sidebar-mini">
    <div class="wrapper">

      <!-- Main Header -->
      <header class="main-header">

        <!-- Logo -->
        <a href="" class="logo" style="background-color: #222d32;" >
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <!-- <span class="logo-mini" ><b>A</b>LT</span> -->
          <!-- logo for regular state and mobile devices -->
          <!-- <span class="logo-lg"><b>Admin</b>LTE</span> -->
          <span ><b>Zeeshan Abbas</b></span>
        </a>
    
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" id="my-color" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu"id="my-color">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <!-- Menu toggle button -->
                
                <ul class="dropdown-menu">
                  
                  </li>
                  <!-- <li class="footer"><a href="#">See All Messages</a></li> -->
                </ul>
              </li><!-- /.messages-menu -->

              <!-- Notifications Menu -->
              <li class="dropdown notifications-menu">
                <!-- Menu toggle button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- <i class="fa fa-bell-o"></i> -->
                  <!-- <span class="label label-warning">10</span> -->
                </a>
                <ul class="dropdown-menu">
                
                  <li class="footer"><a href="#">View all</a></li>
                </ul>
              </li>
              <!-- Tasks Menu -->

              <!-- User Account Menu -->
                                              <!-- user profile -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                 
                       <!-- The user image in the navbar-->
                  <img src="https://seeklogo.com/images/W/WHO-logo-04FEF5660B-seeklogo.com.png" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">Zeeshan Abbas</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="https://seeklogo.com/images/W/WHO-logo-04FEF5660B-seeklogo.com.png" class="img-circle" alt="User Image">
                    <p>
                      Zeeshan Abbas
                      <!-- <small>Member since Nov. 2012</small> -->
                    </p>
                  </li>
                  
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="#" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
              <!-- Control Sidebar Toggle Button -->
         
        </nav>
      </header>


      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
                <!-- sidebar profile -->
              <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image"> -->
            </div>
            <div class="pull-left info">
              <p></p>
              <!-- Status -->
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- search form (Optional) -->
          <!-- <form action="#" method="get" class="sidebar-form">
        
          </form> -->
          <!-- /.search form -->

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <!-- <li class="header">HEADER</li> -->
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="#"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="#wrapping"><i class="fa fa-user"></i> <span>Administration</span></a></li>
            <li class="treeview">
              <a href="#"><i class="fa fa-gears"></i> <span>Record</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="../all_record.php"><i class="fa fa-bell-o"></i> All Record</a></li>
                <li><a href="../selected_record.php">Search Record</a></li>
              </ul>
            </li>
            <li><a href="#"><i class="fa fa-envelope-o "></i> <span>Reports</span></a></li>
            <li>
              <!-- <a href="pages/calendar.html"> -->
              <a href="">
              <i class="fa fa-calendar"></i> <span>Calendar</span>
                <!-- <small class="label pull-right bg-red">3</small> -->
              </a>
            </li>
          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper" >
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            DASHBOARD
            <small> description</small>
          </h1>
         
        </section>
         
         
             <!-- Provence cases box Section    -->
         
          
          <div class="row" id="wrapping">
            <div class="col-lg-3 col-xs-6" style="margin-left: 5px;">
             
            <!-- Balochistan cases box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                <?php
                  $link = mysqli_connect("localhost", "root", "", "covid-19");
                $search = "balochistan";
                $sql = "SELECT count(*) As total FROM patient_record WHERE Province='$search'";
                  $result = mysqli_query($link,$sql);
                  $values=mysqli_fetch_assoc($result);
                  $num_rows=$values['total']; ?>
                <h3><?php echo $num_rows; ?></h3>
                  <p>Balochistan Cases</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag" style="color: white;"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
             
            <!-- Punjab cases box -->
              <div class="small-box bg-green">
                <div class="inner">
                  
                  <?php
                  $link = mysqli_connect("localhost", "root", "", "covid-19");
                $search = "punjab";
                $sql = "SELECT count(*) As total FROM patient_record WHERE Province='$search'";
                  $result = mysqli_query($link,$sql);
                  $values=mysqli_fetch_assoc($result);
                  $num_rows=$values['total']; ?>
                <h3><?php echo $num_rows; ?></h3>
                  <p>Punjab Cases</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars" style="color: white;"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div>
                <!-- Sindh cases box -->
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-yellow">
                <div class="inner">
                <?php
                  $link = mysqli_connect("localhost", "root", "", "covid-19");
                $search = "sindh";
                $sql = "SELECT count(*) As total FROM patient_record WHERE Province='$search'";
                  $result = mysqli_query($link,$sql);
                  $values=mysqli_fetch_assoc($result);
                  $num_rows=$values['total']; ?>
                <h3><?php echo $num_rows; ?></h3>
                  <p>Sindh Cases</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add" style="color: white;"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->

                <!-- Kpk cases box -->
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-red">
                <div class="inner">
                    <?php
                  $link = mysqli_connect("localhost", "root", "", "covid-19");
                $search = "kpk";
                $sql = "SELECT count(*) As total FROM patient_record WHERE Province='$search'";
                  $result = mysqli_query($link,$sql);
                  $values=mysqli_fetch_assoc($result);
                  $num_rows=$values['total']; ?>
                <h3><?php echo $num_rows; ?></h3>
                  <p>Khyber pakhtukhawan cases</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph" style="color: white;"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
        
          <section class="content">

          <!-- Your Page Content Here -->

        </section>
      </div><!-- /.content-wrapper -->

      <!-- Main Footer -->
      <footer class="main-footer">
        <!-- To the right -->
        <div class="pull-right hidden-xs">
          Anything you want
        </div>
        <!-- Default to the left -->
        <strong>Copyright &copy; 2020 by <b>Muhammad Hasnain </b><a href="#">Company</a>.</strong> All rights reserved.
      </footer>

               <!-- Control Sidebar -->
                 <!-- Create the tabs -->
      <!-- <aside class="control-sidebar control-sidebar-dark">
        <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
          <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
          <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
        </ul> -->
      
        <!-- Tab panes -->
          <!-- Home tab content -->
        <!-- <div class="tab-content">
          <h3 class="control-sidebar-heading">Tasks Progress</h3>
            <ul class="control-sidebar-menu">
              <li>
                <a href="javascript::;">
                  <h4 class="control-sidebar-subheading">
                    Custom Template Design
                    <span class="label label-danger pull-right">70%</span>
                  </h4>
                  <div class="progress progress-xxs">
                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                  </div>
                </a>
              </li>
            </ul>

          </div> -->
          <!-- /.tab-pane -->
          <!-- Stats tab content -->
          <!-- Settings tab content -->
          <!-- <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
          
          <div class="tab-pane" id="control-sidebar-settings-tab">
            <form method="post">
              <h3 class="control-sidebar-heading">General Settings</h3>
              <div class="form-group">
                <label class="control-sidebar-subheading">
                  Report panel usage
                  <input type="checkbox" class="pull-right" checked>
                </label>
                <p>
                  Some information about this general settings option
                </p>
              </div>
              
            </form>
          </div>
        </div>
      </aside> -->
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <!-- <div class="control-sidebar-bg"></div>
    </div> -->
    <!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>

 
  

</body>
</html>