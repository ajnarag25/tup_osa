<?php
    include('connection.php');
    session_start();
    if (!isset($_SESSION['admin_data']['email'])) {
      header("Location: ../index.php");
  }
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
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href="_admin-idrequest.php" title="All ID Request"><i class="fa fa-id-card-o" aria-hidden="true"></i>
                    <span>
                    <?php 
                        $sql = "SELECT * FROM id_request WHERE status='PENDING'";
                        $result=mysqli_query($conn, $sql);
                        $row1 = mysqli_num_rows($result);
                    ?>
                    <?php echo $row1 ?>
                    </span>
                    </a>
                    <a class='waves-effect btn-noti' href="_admin-idvalidation.php" title="All ID Validation Request"><i class="fa fa-id-card" aria-hidden="true"></i>
                    <span>
                    <?php 
                        $sql = "SELECT * FROM id_validation WHERE status='PENDING'";
                        $result=mysqli_query($conn, $sql);
                        $row2 = mysqli_num_rows($result);
                    ?>
                    <?php echo $row2 ?>
                    </span>
                    </a>
                    <a class='waves-effect btn-noti' href="_admin-goodmoral.php" title="All Good Moral Request"><i class="fa fa-user" aria-hidden="true"></i>
                    <span>
                    <?php 
                        $sql = "SELECT * FROM id_validation WHERE status='PENDING'";
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
                <?php 
                    $query = "SELECT * FROM admin ";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                <a class='waves-effect dropdown-button top-user-pro' href='_admin-settings.php' data-activates='top-menu'><img src="<?php echo $row['image'] ?>" alt="" />My Account <i class="fa fa-angle-down" aria-hidden="true"></i>
                <?php } ?>
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
                    <?php 
                        $query = "SELECT * FROM admin ";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {
                    ?>

                    <ul>
                        <li><img src="<?php echo $row['image'] ?>" alt="">
                        </li>
                        <li>
                            <h5><?php echo $row['name'] ?> <span> TUPC OSA</span></h5>
                        </li>
                        <li></li>
                    </ul>
                    <?php } ?>
                </div>
                <!--== LEFT MENU ==-->
                <div class="sb2-13">
                    <ul class="collapsible" data-collapsible="accordion">
                        <li><a href="index.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
                        </li>
                        <li><a href="_admin-verify-student.php"><i class="fa fa-user" aria-hidden="true"></i> Verify Student</a>
                        </li>
                        <li><a href="_admin-idvalidation.php"  class="menu-active"><i class="fa fa-id-card-o" aria-hidden="true"></i> Appointment Request</a>
                        </li>
                        <li><a href="_admin-voting.php"><i class="fa fa-university" aria-hidden="true"></i> USG Voting</a>
                        </li>
                        <li><a href="_admin-scholarship.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Scholarship</a>
                        </li>
                        <li><a href="_admin-violation.php"><i class="fa fa-ban" aria-hidden="true"></i> Violations</a>
                        </li>
						<li><a href="_admin-settings.php"><i class="fa fa-cogs" aria-hidden="true"></i> Admin Settings</a>
                        </li>
                        <li><a href="process.php?logout"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>
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
                        <li ><a href="_admin-idvalidation.php"> ID Validation</a>
                        </li>
                        <li class="active-bre"><a href="#"> ID Validation - Decline</a>
                        </li>
                    </ul>
                </div>

                <!--== View Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Decline Student</h4>
                                </div>
                                <div class="tab-inn">
                                    <?php 
                                        $id = $_GET['id'];
                                        $query = "SELECT * FROM id_validation WHERE id='$id'";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                    <form method="POST" action="process.php">
                                        <div class="text-center">
                                            <h3>Are you sure to decline this student id validation?</h3>
                                            <h3>Declining Student: <?php echo $row['name'] ?></h3>
                                            <strong><p>Compose Message:</p></strong>
                                            <textarea name="msg_idvalidate_decline" id="" class="form-control" cols="30" rows="5" required></textarea>
                                            <br><br>
                                            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                                            <?php 
                                                $get_id = $_GET['id'];
                                                $query = "SELECT * FROM id_validation WHERE id='$get_id'";
                                                $result = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                            <input type="hidden" name="email" value="<?php echo $row['email'] ?>">
                                            <?php } ?>
                                            <a href="_admin-idvalidation.php" class="btn waves-effect btn-primary"><strong>Cancel</strong></a>
                                            <button class="btn waves-effect btn-danger" name="decline_id_validation"><strong>Decline</strong></button>
                                        </div>

                                    </form>
                                    <?php } ?>
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