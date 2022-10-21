<?php
    include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>TUPC OSA Services - Admin Site</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- FONTAWESOME ICONS -->
    <!-- <link rel="stylesheet" href="css/font-awesome.css"> -->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />

    <!-- <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"> -->

    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/style-mob.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <div class="wed-logo">
                    <a href="index.php"><img src="images/gear-spin.gif" alt="" /><span style="font-weight: bold; font-size: larger;"></span></a>
                </div>
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href="_admin-idrequest.php" title="All ID Request"><i class="fa fa-id-card-o" aria-hidden="true"></i>
                    <span>
                    <?php 
                        $sql = "SELECT * FROM id_request ";
                        $result=mysqli_query($conn, $sql);
                        $row1 = mysqli_num_rows($result);
                    ?>
                    <?php echo $row1 ?>
                    </span>
                    </a>
                    <a class='waves-effect btn-noti' href="_admin-idvalidation.php" title="All ID Validation Request"><i class="fa fa-id-card" aria-hidden="true"></i>
                    <span>
                    <?php 
                        $sql = "SELECT * FROM id_validation ";
                        $result=mysqli_query($conn, $sql);
                        $row2 = mysqli_num_rows($result);
                    ?>
                    <?php echo $row2 ?>
                    </span>
                    </a>
                    <a class='waves-effect btn-noti' href="_admin-goodmoral.php" title="All Good Moral Request"><i class="fa fa-user" aria-hidden="true"></i>
                    <span>
                    <?php 
                        $sql = "SELECT * FROM id_validation ";
                        $result=mysqli_query($conn, $sql);
                        $row3 = mysqli_num_rows($result);
                    ?>
                    <?php echo $row3 ?>
                    </span>
                    </a>
                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='_admin-settings.php' data-activates='top-menu'><img src="images/user.jpg" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="images/user.jpg" alt="">
                        </li>
                        <li>
                            <h5>Bermon Batario <span> TUPC OSA</span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="index.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
                        <li><a href="_admin-idrequest.php"><i class="fa fa-id-card-o" aria-hidden="true"></i> ID Request</a>
                        </li>
                        <li><a href="_admin-idvalidation.php"><i class="fa fa-id-card" aria-hidden="true"></i> ID Validation</a>
                        </li>
                        <li><a href="_admin-goodmoral.php"><i class="fa fa-handshake-o" aria-hidden="true"></i> Good Moral</a>
                        </li>
                        <li><a href="_admin-voting.php"><i class="fa fa-university" aria-hidden="true"></i> USG Voting</a>
                        </li>
                        <li><a href="_admin-scholarship.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Scholarship</a>
                        </li>
                        <li><a href="_admin-violation.php"><i class="fa fa-ban" aria-hidden="true"></i> Violations</a>
                        </li>
						<li><a href="_admin-settings.php"   class="menu-active"><i class="fa fa-cogs" aria-hidden="true"></i> Admin Settings</a>
                        </li>
                        <li><a href="#"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home /</a>
                        </li>
                        <li class="active-bre"><a href="#"> Admin Settings</a>
                        </li>
                    </ul>
                </div>

                <!--== Change Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Change Password</h4>
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Name:</p></strong>
                                                <input type="text" value="Bermon Batario" class="validate" readonly>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Change Picture:</p></strong>
                                                <input type="file" class="validate" required>
                                            </div>
                                        </div>                          
                                        <div class="row">
                                            <div class="input-field col s2">
                                                <button type="submit" class="btn waves-effect btn-success"><strong>Save Changes</strong></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--== Change Password ==-->
                <div class="sb2-2-3">
                <div class="row">
                    <div class="col-md-12">
                    <div class="box-inn-sp admin-form">
                            <div class="inn-title">
                                <h4>Change Password</h4>
                            </div>
                            <div class="tab-inn">
                                <form>
                                    <div class="row">
                                        <div class="input-field col s6">
                                            <strong><p>New Password:</p></strong>
                                            <input type="password" class="validate" required>
                                        </div>
                                        <div class="input-field col s6">
                                            <strong><p>Confirm New Password:</p></strong>
                                            <input type="password" class="validate" required>
                                        </div>
                                    </div>                          
                                    <div class="row">
                                        <div class="input-field col s3">
                                            <button type="submit" class="btn waves-effect btn-success"><strong>Change Password</strong></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- SlimScroll -->
    <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="bower_components/fastclick/lib/fastclick.js"></script>
</body>


</html>