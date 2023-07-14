<?php 
           
	if(isset($_POST['name']))
	{
			$name = $_POST['name'];
			$price = $_POST['price'];
			$description = $_POST['description'];
			$package = $_POST['package'];
			$photo = $_FILES['photo']['name'];

			$parr=explode(".",$photo);

			$ex=end($parr);

			$pname=  str_replace(" ","_",$name).rand(1,1000).".".$ex; 

			$tmp = $_FILES['photo']['tmp_name'];

			$orgi = "../photo/$pname";


			move_uploaded_file($tmp,$orgi);
			

			require("dbcon.php");

			$sql = "insert into package (package, name,price,description,photo) values ('$package', '$name','$price','$description','$pname') ";

			mysqli_query($con,$sql);

			echo "thank u data saved!!";

			header("location:allpackage.php");

	}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard </title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop4">
            <div class="container">
                <div class="header4-wrap">
                    <div class="header__logo">
                        <a href="#">
                            <img src="images/icon/logo-blue.png" alt="CoolAdmin" />
                        </a>
                    </div>
                    <div class="header__tool">
                        <div class="header-button-item has-noti js-item-menu">
                            
                            <div class="notifi-dropdown js-dropdown">     
                            </div>
                        </div>
                       
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                <img src="images/icon/avatar-08.png" alt="Admin" />
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">Admin</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                    <div class="info clearfix">
                                        <div class="image">
                                           
                                        </div>
                                        <div class="content">
                                            <h5 class="name">
                                                <a href="#">Admin</a>
                                            </h5>
                                            <span class="email">Admin@gmail.com</span>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                       
                                    <div class="account-dropdown__footer">
                                        <a href="logout.php">
                                            <i class="zmdi zmdi-power"></i>Logout</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- END HEADER DESKTOP -->

        <!-- WELCOME-->
        <section class="welcome2 p-t-40 p-b-55">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="au-breadcrumb3">
                            <div class="au-breadcrumb-left">
                                <span class="au-breadcrumb-span">You are here:</span>
                                <ul class="list-unstyled list-inline au-breadcrumb__list">
                                    <li class="list-inline-item active">
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li class="list-inline-item seprate">
                                        <span>/</span>
                                    </li>
                                    <li class="list-inline-item">Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="welcome2-inner m-t-60">
                            <div class="welcome2-greeting">
                                <h1 class="title-6">Hi
                                    <span>Admin</span>, Welcome back</h1>
                                
                            </div>
                            <form class="form-header form-header2" action="" method="post">
                                <input class="au-input au-input--w435" type="text" name="search" placeholder="Search for datas &amp; reports...">
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->

        <!-- PAGE CONTENT-->
        <div class="page-container3">
            <section class="alert-wrap p-t-70 p-b-70">
                <div class="container">
                    <!-- ALERT-->
                    
                    <!-- END ALERT-->
                </div>
            </section>
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3">
                            <!-- MENU SIDEBAR-->
                            <aside class="menu-sidebar3 js-spe-sidebar">
                                <nav class="navbar-sidebar2 navbar-sidebar3">
                                    <ul class="list-unstyled navbar__list">
                                        <li class="active has-sub">
                                            <a class="js-arrow" href="index.php">
                                                <i class="fas fa-tachometer-alt"></i>Dashboard 
                                                
                                            </a>
                                           
                                        </li>
                                        <li>
                                            <a href="inbox.php">
                                                <i class="fas fa-inbox"></i>Contact Info.</a>

                                            
                                        </li>
                                        <li>
                                            <a href="allpackage.php">
                                                <i class="fas fa-shopping-basket"></i>Packages</a>
                                        </li>
                                        <li>
                                        <a href="alluser.php">
                                                <i class="fas fa-user"></i>Customer</a>
                                                
                                        </li>
                                        <li>
                                            <a href="allbooking.php">
                                                <i class="fas fa-shopping-cart"></i>Booking</a>
                                        </li>
                                    
                                       
                                           
                                </nav>
                            </aside>
                            <!-- END MENU SIDEBAR-->
                        </div>
                        <div class="col-xl-9">
                            <!-- PAGE CONTENT-->

        
                            <div class="row">
                  <div class="col-lg-12">
                     <div class="card">
                        <div class="card-header">
                           <h3 class="card-title">Add Package</h3>
                           
                        </div>
                        <!--end card-header-->
                        <div class="card-body">
                           <form class="form-parsley" action="" method="post" enctype="multipart/form-data">
                              <div class="form-group"><label>Name</label>

                               <input type="text" class="form-control" name="name" required placeholder="Package Name">
                               
                               </div>


                            
                               <div class="form-group"><label>Select Category</label>

							   <select name="package" id="" required>
							   		<option value="">Select Category</option>
									<option value="1">India Tour Pacakage</option>
									<option value="2">India Special Pacakage</option>
									<option value="3">International Tour Pacakage</option>
									<option value="4">International Special Pacakage</option>
									<option value="5">Short Break Pacakage</option>
							   </select>
                               
                               <!-- <input type="text" class="form-control" name="package" required placeholder="Select Category" list="Select Category">
                                <datalist id="Select Category">

                                <option value="India Tour Pacakage"><a href="ind.php">India Tour Pacakage</a></option>
                               
                                <option value="India Special Pacakage ">
                                  <option value="International Tour Pacakage ">
                                  <option value="International Special Pacakage ">
                                    <option value="Short Break Pacakage ">
                                   </datalist>-->

                               </div>

                               <div class="form-group"><label>Price</label>
                              
                               <input type="text" class="form-control" name="price" required placeholder="Price">
                               
                               </div>
                              <!--end form-group-->
                              
                              <div class="form-group">
                                 <label>Description</label>
                                 <div><input type="text" name="description" class="form-control" required  placeholder="Enter description" /></div>
                              </div>


                              <div class="form-group">
                                 <label>Photo</label>
                                 <div><input type="file" name="photo" class="form-control" required accept="image/*" ></div>
                              </div>
                              
                              <!--end form-group-->
                              <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </div>                              <!--end form-group-->
                           </form>
                           <!--end form-->
                        </div>
                        <!--end card-body-->
                     </div>
                     <!--end card-->
                  </div>
                 
               </div>
               <!-- end row -->
            </div>
            <!-- container -->
           
         </div>
         <!-- end page content -->
      </div>
<!-- Jquery JS-->
<script src="vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="vendor/bootstrap-4.1/popper.min.js"></script>
<script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="vendor/slick/slick.min.js">
</script>
<script src="vendor/wow/wow.min.js"></script>
<script src="vendor/animsition/animsition.min.js"></script>
<script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="vendor/circle-progress/circle-progress.min.js"></script>
<script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="vendor/chartjs/Chart.bundle.min.js"></script>
<script src="vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
