<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    <!-- Title Page-->
    <title>Driver/Vehicle Owner</title>

    <!-- Fontfaces CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->


    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>


<style>
    
table{
    border-collapse: collapse;
    background-color: white;
    box-shadow: 0px 10px 20px 0 rgba(0,0,0,0.3);
    border-radius: 10px;
    margin: auto;
}

th,td{
    border: 1px solid #f2f2f2;
    padding: 8px 30px;
    text-align: center;
    color: grey;
}

th{
    text-transform: uppercase;
    font-weight: 500;
}

td{font-size: 13px;}

.email-style{
    font-size: 14px;
    color: grey;
    display: inline-block;
    background: #f2f2f2;
    -webkit-border-radius: 2px;
    -moz-border-radius:2px;
    border-radius: 2px;
    line-height: 30px;
    padding: 0 14px;
}

.post-class{
    text-transform: uppercase;
}

.fa{
    font-size:18px;
}

.fa-edit{color: #63c76a}
.fa-trash{color: #ff0000}
a {text-decoration: none; display: flex; justify-content: center;}
</style>
<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER DESKTOP-->
        <header class="header-desktop3 d-none d-lg-block">
            <div class="section__content section__content--p35">
                <div class="header3-wrap">
                    <div class="header__logo">
                        <p style="color: white">PASAKAY</p>
                    </div>
                    <div class="header__navbar">
                        <ul class="list-unstyled" >
                        </ul>
                    </div>
                    <div class="header__tool">
                        <div class="header-button-item has-noti js-item-menu">
                            
                        </div>
                        <div class="header-button-item js-item-menu">
                        </div>
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <i class='glyphicon glyphicon-menu-hamburger' style='font-size:36px'></i>
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">Menu</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                                        <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="dashboard.php">
                                                <i class="fa fa-dashboard"></i>Dashboard</a>
                                        </div>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="passenger.php">
                                            <i class="fa fa-user"></i>Passenger</a>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="driver.php">
                                            <i class="fa fa-drivers-license"></i>Vehicle Owner/Driver</a>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="vehicle.php">
                                            <i class="fas fa-car"></i>Vehicle</a>
                                    </div>
                                    <div class="account-dropdown__footer">
                                        <a href="transactions.php">
                                            <i class="fas fa-check-double"></i>Transactions</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        &emsp;
                        <div class="account-wrap">
                            <div class="account-item account-item--style2 clearfix js-item-menu">
                                <div class="image">
                                    <i class='fas fa-user-circle' style='font-size:36px'></i>
                                </div>
                                <div class="content">
                                    <a class="js-acc-btn" href="#">Administrator</a>
                                </div>
                                <div class="account-dropdown js-dropdown">
                                                        <div class="account-dropdown__body">
                                        <div class="account-dropdown__item">
                                            <a href="#">
                                                <i class="zmdi zmdi-account"></i>Account</a>
                                        </div>
                                        
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
        <!-- END HEADER DESKTOP-->

        <!-- HEADER MOBILE-->
        
        

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
            <!-- BREADCRUMB-->
            <!-- END BREADCRUMB-->

            <div style="margin-top: 2%" class="au-breadcrumb-left">
                                    <span class="au-breadcrumb-span">&emsp;&emsp;You are here:</span>
                                    <ul class="list-unstyled list-inline au-breadcrumb__list">
                                        <li class="list-inline-item active">
                                            <a href="#">Home</a>
                                        </li>
                                        <li class="list-inline-item seprate">
                                            <span>/</span>
                                        </li>
                                        <li class="list-inline-item">Driver/Vehicle Owner</li>
                                    </ul>
                                </div>

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="title-4">Welcome Back
                                <span>Admin!</span>
                            </h1>
                            <hr class="line-seprate">
                        </div>
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->


            <div class="main-div">
        <h1 style="text-align: center; margin-top: 3%; margin-bottom: 3%">Driver/Vehicle Owner</h1>
        <div class="center-div">
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Driver ID</th>
                            <th>Vehicle</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th>Date of Birth</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            require('database.php');

                            $selectquery = "SELECT * FROM driver ";
                            $query = mysqli_query($con,$selectquery);
                            $num = mysqli_num_rows($query);
                        

                            while ($res = mysqli_fetch_array($query)) {
                            ?>
                                <tr>
                                <td> <?php echo $res['Driver_id']; ?></td>
                                <td> <?php echo $res['Vehicle']; ?></td>
                                <td> <?php echo $res['Lastname']; ?>&nbsp;<?php echo $res['Firstname']; ?> &nbsp;<?php echo $res['Middle_initial']; ?></td>
                                <td> <?php echo $res['Address']; ?></td>
                                <td> <span class="email-style"> <?php echo $res['Contact_number']; ?></td>
                                <td> <?php echo $res['Date_of_birth']; ?></span></td>

                                </tr>
                            <?php
                            }
                            ?>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
            

        
            <!-- COPYRIGHT-->
            <section class="p-t-60 p-b-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="copyright">
                                <p>Copyright © 2021 Pasakay. All rights reserved.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END COPYRIGHT-->
        </div>

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
