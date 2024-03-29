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
    <!-- <link href="css/bootstrap.css" rel="stylesheet" /> -->
    <link href="css/style.css" rel="stylesheet" />

    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.css">

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
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Appointment Request</a>
                        </li>
                        <div class="sb2-2-2 right">
                            <ul>
                                <li><a href="_admin-idrequest.php" class="btn btn-primary" style="color:white">I.D REQUEST</a></li>
                                <li><a href="_admin-idvalidation.php" class="btn btn-secondary" style="color:white">I.D VALIDATION</a></li>
                                <li><a href="_admin-goodmoral.php" class="btn btn-primary" style="color:white">GOOD MORAL</a></li>
                            </ul>
                        </div>
                    </ul>
                </div>

                <!--== ID Validation new request ==-->
                <div class="sb2-2-3" id="newlist">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>ID Validation (New Request)</h4>
                                    <p>List of students who request for validation of TUPC-ID</p>
                                </div>
                                <div class="box-body tab-inn">
                                    <table id="example1" class="table table-bordered table-hover table-sm">
                                      <thead>
                                        <tr class="table-secondary">
                                            <th>#</th>
                                            <th>TUPC-ID</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Course</th>
                                            <th>Request Date</th>
                                            <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <?php 
                                            $query = "SELECT * FROM id_validation WHERE status='PENDING' AND date_claim='PENDING'";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {
                                        ?>

                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><span class="list-enq-name"><?php echo $row['student_id'] ?></span></td>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['course'] ?></td>
                                            <td><?php echo $row['date_submit'] ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="_admin-idvalidate-setdate.php?id=<?php echo $row['id'] ?>" class="btn btn-success waves-light btn-sm">Accept</a>
                                                    <!-- <a href="_admin-idvalidate-decline.php?id=<?php echo $row['id'] ?>" class="btn btn-danger waves-light  btn-sm">Decline</a> -->
                                                </div>
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
				
                <!--== ID Validation ongoing ==-->
                <div class="sb2-2-3" id="ongoinglist">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>ID Validation (Ongoing)</h4>
                                    <p>List of students who request for validation of TUPC-ID</p>
                                </div>
                                <div class="box-body tab-inn">
                                    <table id="example2" class="table table-bordered table-hover table-sm">
                                      <thead>
                                        <tr class="table-secondary">
                                            <th>#</th>
                                            <th>TUPC-ID</th>
                                            <th>Full Name</th>
                                            <th>Course</th>
                                            <th>Request Date</th>
                                            <th>Scheduled Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                      <?php 
                                            $query = "SELECT * FROM id_validation WHERE status='ONGOING'";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {
                                        ?>

                                        <tr>
                                            <td><?php echo $row['id'] ?></td>
                                            <td><span class="list-enq-name"><?php echo $row['student_id'] ?></span></td>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['date_submit'] ?></td>
                                            <td><?php echo $row['date_claim'] ?></td>
                                            <td><?php echo $row['status'] ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="process.php?done=<?php echo $row['id'] ?>" class="btn btn-success waves-light btn-sm">Done</a>
                                                </div>
                                                <div class="btn-group">
                                                    <a href="_admin-idvalidation-resched.php?id=<?php echo $row['id'] ?>" class="btn btn-warning waves-light btn-sm">Resched</a>
                                                </div>
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

                <!--== ID Validation history ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>ID Validation (History)</h4>
                                    <p>List of students who request for validation TUPC-ID</p>
                                    <a href="table_idvalidation.php" class="btn btn-primary">Print</a>
                                </div>
                                <div class="box-body tab-inn">
                                    <table id="example3" class="table table-bordered table-hover table-sm">
                                      <thead>
                                        <tr class="table-secondary">
                                            <th>#</th>
                                            <th>TUPC-ID</th>
                                            <th>Full Name</th>
                                            <th>Email</th>
                                            <th>Course</th>
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
                                            <td><span class="list-enq-name"><?php echo $row['student_id'] ?></span></td>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['course'] ?></td>
                                            <td><?php echo $row['date_submit'] ?></td>
                                            <td>
                                                <?php 
                                                    if($row['status'] == 'PENDING'){
                                                        echo '
                                                        <span class="label label-warning">Pending</span>
                                                        ';
                                                    }elseif($row['status'] == 'DECLINED'){
                                                        echo '
                                                        <span class="label label-danger">Declined</span>
                                                        ';
                                                    }elseif($row['status'] == 'ONGOING'){
                                                        echo '
                                                        <span class="label label-success">Ongoing</span>
                                                        ';
                                                    }
                                                    else{
                                                        echo '
                                                        <span class="label label-primary">Success</span>
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
        </div>
    </div>

    <!-- jQuery 3 -->
    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="js/main.min.js"></script>
    <!-- DataTables -->
    <script src="bower_components/datatables.net/js/jquery.dataTables.js"></script>
    <script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="bower_components/fastclick/lib/fastclick.js"></script>
    <script>
    $(function () {
        $('#example1').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
        })
        $('#example2').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
        })
        $('#example3').DataTable({
        'paging'      : true,
        'lengthChange': true,
        'searching'   : true,
        'ordering'    : true,
        'info'        : true,
        'autoWidth'   : true
        })
    })
    </script>
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- <script src="js/materialize.min.js"></script> -->
    
    <script src="js/custom.js"></script>
</body>


</html>