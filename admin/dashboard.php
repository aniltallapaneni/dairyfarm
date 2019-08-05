<?php
	include("index.php"); 
if (!isset($_SESSION['aid'])) 
	{
		header('location: login.php');
	}
	$servername = "localhost";
$username = "root";
$password = "";
$dbname = "regform";
$errors = array(); 

// connect to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);
$query = "SELECT * FROM admin WHERE id='".$_SESSION['aid']."'";
			$results = mysqli_query($conn, $query);
			$row = mysqli_fetch_array($results);
		
  ?>
<html>
    <body>
<div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
             <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Sales Cards  -->
                <!-- ============================================================== -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-view-dashboard"></i></h1>
                                <h6 class="text-white">Dashboard</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1><a href="cattleprofile.php" class="font-light text-white"><i class="mdi mdi-github-face"></i></a></h1>
                                <a href="cattleprofile.php" class="text-white">Cattle Profile</a>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1><a href="cattleweight.php" class="font-light text-white"><i class="mdi mdi-octagon"></i></a></h1>
                                <a href="cattleweight.php" class="text-white">Cattle Weight</a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1><a href="cattlefood.php" class="font-light text-white"><i class="mdi mdi-nutrition"></i></a></h1>
                                <a href="cattlefood.php" class="text-white">Cattle Food</a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1><a href="cattlemedicine.php" class="font-light text-white"><i class="mdi mdi-needle"></i></a></h1>
                                <a href="cattlemedicine.php" class="text-white">Cattle Medicine</a>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                     <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1><a href="cattlestage.php" class="font-light text-white"><i class="mdi mdi-flask-empty"></i></a></h1>
                                <a href="cattlestage.php" class="text-white">cattle stage</a>
                            </div>
                        </div>
                    </div>
                   
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-flask-empty"></i></h1>
                                <h6 class="text-white">Milk Production</h6>
                            </div>
                        </div>
                    </div>
                     <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-cyan text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-account-box"></i></h1>
                                <h6 class="text-white">Employee</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-success text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-checkerboard"></i></h1>
                                <h6 class="text-white">Expenses</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-warning text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-equal-box"></i></h1>
                                <h6 class="text-white">Sales</h6>
                            </div>
                        </div>
                    </div>
					
					 <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-danger text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-nutrition"></i></h1>
                                <h6 class="text-white">Maintenance</h6>
								 </div>
                        </div>
                    </div>
                    <!-- Column -->
					
					 <div class="col-md-6 col-lg-2 col-xlg-3">
                        <div class="card card-hover">
                            <div class="box bg-info text-center">
                                <h1 class="font-light text-white"><i class="mdi mdi-equal-box"></i></h1>
                                <h6 class="text-white">Reports</h6>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
               
            
           
            <footer class="footer text-center">
                All Rights Reserved by integra. Designed and Developed by <a href="#">Integra</a>.
            </footer>
</div>
    

     
   
    <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="assets/libs/flot/excanvas.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>

</body>

</html>
