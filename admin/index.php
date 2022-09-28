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
    <!-- FONTAWESOME ICONS -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
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
                        <li><a href="index.php" class="menu-active"><i class="fa fa-bar-chart" aria-hidden="true"></i> Dashboard</a>
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
						<li><a href="_admin-settings.php"><i class="fa fa-cogs" aria-hidden="true"></i> Admin Settings</a>
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
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Dashboard</a>
                        </li>
                    </ul>
                </div>
                <!--== DASHBOARD INFO ==-->
                <div class="sb2-2-1">
                    <h2>Admin Dashboard</h2>
                    <div class="db-2">
                        <ul>
                            <li>
                                <div class="dash-book dash-b-1">
                                <?php 
                                    $sql = "SELECT * FROM id_request ";
                                    $result=mysqli_query($conn, $sql);
                                    $row1 = mysqli_num_rows($result);
                                ?>
                                    <h5>ID Request</h5>
                                    <h4><?php echo $row1; ?></h4>
                                    <a href="_admin-idrequest.php">View more</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-2">
                                <?php 
                                    $sql = "SELECT * FROM id_validation ";
                                    $result=mysqli_query($conn, $sql);
                                    $row2 = mysqli_num_rows($result);
                                ?>
                                    <h5>ID Validation</h5>
                                    <h4><?php echo $row2; ?></h4>
                                    <a href="_admin-idvalidation.php">View more</a>
                                </div>
                            </li>
                            <li>
                                <?php 
                                    $sql = "SELECT * FROM good_moral ";
                                    $result=mysqli_query($conn, $sql);
                                    $row3 = mysqli_num_rows($result);
                                ?>
                                <div class="dash-book dash-b-3">
                                    <h5>Good Moral</h5>
                                    <h4><?php echo $row3; ?></h4>
                                    <a href="_admin-goodmoral.php">View more</a>
                                </div>
                            </li>
                            <li>
                                <div class="dash-book dash-b-4">
                                    <h5>Violations</h5>
                                    <h4>12</h4>
                                    <a href="_admin-violation.php">View more</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <!--== ID Request ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>ID Request</h4>
                                    <p>List of students who request new TUPC-ID</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover centered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>TUPC-ID</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Course</th>
                                                    <th>Type</th>
                                                    <th>Request Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $query = "SELECT * FROM id_request ";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id'] ?></td>
                                                    <td><span class="list-enq-name"><?php echo $row['student_id'] ?></span>
                                                    </td>
                                                    <td><?php echo $row['name'] ?>
                                                    </td>
                                                    <td><?php echo $row['email'] ?></td>
                                                    <td><?php echo $row['course'] ?></td>
                                                    <td><?php echo $row['req_type'] ?></td>
													<td><?php echo $row['sched_submit'] ?></td>
                                                    <td>
                                                        <?php 
                                                            if ($row['status'] == 'PENDING'){
                                                                echo '
                                                                <span class="label label-default">PENDING</span>
                                                                ';
                                                            }elseif ($row['status'] == 'DECLINED'){
                                                                echo '
                                                                <span class="label label-danger">DECLINED</span>
                                                                ';
                                                            }else{
                                                                echo'
                                                                <span class="label label-success">SUCCESS</span>
                                                                ';
                                                            }
                                                        
                                                        ?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
                <!--== ID Validation ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>ID Request</h4>
                                    <p>List of students who needs to verify their TUPC-ID</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover centered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>TUPC-ID</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Course</th>
                                                    <th>ID Condition</th>
                                                    <th>Request Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $query = "SELECT * FROM id_validation ";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id'] ?></td>
                                                    <td><span class="list-enq-name"><?php echo $row['student_id'] ?></span>
                                                    </td>
                                                    <td><?php echo $row['name'] ?>
                                                    </td>
                                                    <td><?php echo $row['email'] ?></td>
                                                    <td><?php echo $row['course'] ?></td>
                                                    <td><?php echo $row['id_condition'] ?></td>
													<td><?php echo $row['date_submit'] ?></td>
                                                    <td>
                                                        <?php 
                                                            if ($row['status'] == 'PENDING'){
                                                                echo '
                                                                <span class="label label-default">PENDING</span>
                                                                ';
                                                            }elseif ($row['status'] == 'DECLINED'){
                                                                echo '
                                                                <span class="label label-danger">DECLINED</span>
                                                                ';
                                                            }else{
                                                                echo'
                                                                <span class="label label-success">SUCCESS</span>
                                                                ';
                                                            }
                                                        
                                                        ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--== Good Moral ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Good Moral Request</h4>
                                    <p>List of students who request for Good Moral Certificate</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover centered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>TUPC-ID</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Course</th>
                                                    <th>Purpose</th>
                                                    <th>Request Date</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $query = "SELECT * FROM good_moral ";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id'] ?></td>
                                                    <td><span class="list-enq-name"><?php echo $row['student_id'] ?></span>
                                                    </td>
                                                    <td><?php echo $row['name'] ?>
                                                    </td>
                                                    <td><?php echo $row['email'] ?></td>
                                                    <td><?php echo $row['course'] ?></td>
                                                    <td><?php echo $row['purpose'] ?></td>
													<td><?php echo $row['date_submit'] ?></td>
                                                    <td>
                                                        <?php 
                                                            if ($row['status'] == 'PENDING'){
                                                                echo '
                                                                <span class="label label-default">PENDING</span>
                                                                ';
                                                            }elseif ($row['status'] == 'DECLINED'){
                                                                echo '
                                                                <span class="label label-danger">DECLINED</span>
                                                                ';
                                                            }else{
                                                                echo'
                                                                <span class="label label-success">SUCCESS</span>
                                                                ';
                                                            }
                                                        
                                                        ?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--== Violation ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Violators</h4>
                                    <p>List of students who violate the school rules</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover centered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Picture</th>
                                                    <th>TUPC-ID</th>
                                                    <th>Full Name</th>
                                                    <th>Email</th>
                                                    <th>Course</th>
                                                    <th>Violation</th>
                                                    <th>Remaining Time</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">TUPC-18-0779</span>
                                                    </td>
                                                    <td>Marsha Hogan
                                                    </td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>BSME</td>
                                                    <td>Improper Haircut</td>
													<td>12 Hour/s</td>
                                                    <td>
                                                        <span class="label label-default">Pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">TUPC-18-0723</span>
                                                    </td>
                                                    <td>Lucas Caden
                                                    </td>
                                                    <td>lucas@gmail.com</td>
                                                    <td>BSIE</td>
                                                    <td>Improper Haircut</td>
													<td>1 Hour/s</td>
                                                    <td>
                                                        <span class="label label-default">Pending</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><span class="list-img"><img src="images/user/4.png" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">TUPC-18-0727</span>
                                                    </td>
                                                    <td>Ethan Oliver
                                                    </td>
                                                    <td>Ethan@gmail.com</td>
                                                    <td>COET</td>
                                                    <td>Improper Haircut</td>
													<td>8 Hour/s</td>
                                                    <td>
                                                        <span class="label label-default">Pending</span>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
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
</body>


</html>