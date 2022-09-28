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
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href="_admin-idrequest.php" title="All ID Request"><i class="fa fa-id-card-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="_admin-idvalidation.php" title="All ID Validation Request"><i class="fa fa-id-card" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="_admin-goodmoral.php" title="All Good Moral Request"><i class="fa fa-user" aria-hidden="true"></i><span>5</span></a>
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
                        <li><a href="_admin-idrequest.php" ><i class="fa fa-id-card-o" aria-hidden="true"></i> ID Request</a>
                        </li>
                        <li><a href="_admin-idvalidation.php"  ><i class="fa fa-id-card" aria-hidden="true"></i> ID Validation</a>
                        </li>
                        <li><a href="_admin-goodmoral.php" ><i class="fa fa-handshake-o" aria-hidden="true"></i> Good Moral</a>
                        </li>
                        <li><a href="_admin-voting.php"><i class="fa fa-university" aria-hidden="true"></i> USG Voting</a>
                        </li>
                        <li><a href="_admin-scholarship.php" class="menu-active"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Scholarship</a>
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
                        <li class="active-bre"><a href="#"> Scholarship Request</a>
                        </li>
                    </ul>
                </div>

                <!--== Scholarship ==-->
                <div class="sb2-2-3" id="newlist">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Scholarship (New Request)</h4>
                                </div>
                                <div class="box-body tab-inn">
                                    <table id="example1" class="table table-bordered table-hover table-sm">
                                      <thead>
                                        <tr class="table-secondary">
                                            <th>#</th>
                                            <th>TUPC-ID</th>
                                            <th>Full Name</th>
                                            <th>Address</th>
                                            <th>Course</th>
                                            <th>Reason</th>
                                            <th>Request Date</th>
                                            <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><span class="list-enq-name">TUPC-18-0779</span>
                                            </td>
                                            <td>Marsha Hogan
                                            </td>
                                            <td>Dasmarinas Cavite</td>
                                            <td>BSME</td>
                                            <td>Pesonal Purposes</td>
                                            <td>03 Jun 2022</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="_admin-scholarship-setdate.php" class="btn btn-success waves-light btn-sm">Accept</a>
                                                    <a href="#" class="btn btn-danger waves-light  btn-sm">Decline</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><span class="list-enq-name">TUPC-18-0723</span>
                                            </td>
                                            <td>Lucas Caden
                                            </td>
                                            <td>Imus Cavite</td>
                                            <td>BSIE</td>
                                            <td>Pesonal Purposes</td>
                                            <td>04 Jun 2022</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="_admin-scholarship-setdate.php" class="btn btn-success waves-light btn-sm">Accept</a>
                                                    <a href="#" class="btn btn-danger waves-light  btn-sm">Decline</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><span class="list-enq-name">TUPC-18-0727</span>
                                            </td>
                                            <td>Ethan Oliver
                                            </td>
                                            <td>Silang Cavite</td>
                                            <td>COET</td>
                                            <td>Pesonal Purposes</td>
                                            <td>05 Jun 2022</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="_admin-scholarship-setdate.php" class="btn btn-success waves-light btn-sm">Accept</a>
                                                    <a href="#" class="btn btn-danger waves-light  btn-sm">Decline</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><span class="list-enq-name">TUPC-18-0723</span>
                                            </td>
                                            <td>Lucas Caden
                                            </td>
                                            <td>Molino</td>
                                            <td>BSIE</td>
                                            <td>Pesonal Purposes</td>
                                            <td>04 Jun 2022</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="_admin-scholarship-setdate.php" class="btn btn-success waves-light btn-sm">Accept</a>
                                                    <a href="#" class="btn btn-danger waves-light  btn-sm">Decline</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><span class="list-enq-name">TUPC-18-0727</span>
                                            </td>
                                            <td>Ethan Oliver
                                            </td>
                                            <td>GMA</td>
                                            <td>COET</td>
                                            <td>Pesonal Purposes</td>
                                            <td>05 Jun 2022</td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="_admin-scholarship-setdate.php" class="btn btn-success waves-light btn-sm">Accept</a>
                                                    <a href="#" class="btn btn-danger waves-light  btn-sm">Decline</a>
                                                </div>
                                            </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				
                <!--== Scholarship ongoing ==-->
                <div class="sb2-2-3" id="ongoinglist">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Scholarship (Ongoing)</h4>
                                </div>
                                <div class="box-body tab-inn">
                                    <table id="example2" class="table table-bordered table-hover table-sm">
                                      <thead>
                                        <tr class="table-secondary">
                                            <th>#</th>
                                            <th>TUPC-ID</th>
                                            <th>Full Name</th>
                                            <th>Address</th>
                                            <th>Course</th>
                                            <th>Reason</th>
                                            <th>Request Date</th>
                                            <th>Scheduled Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><span class="list-enq-name">TUPC-18-0779</span>
                                            </td>
                                            <td>Marsha Hogan
                                            </td>
                                            <td>Imus Cavite</td>
                                            <td>BSME</td>
                                            <td>Financial Problems</td>
                                            <td>03 Jun 2022</td>
                                            <td>05 Jun 2022</td>
                                            <td>
                                                <span class="label label-default">Pending</span>
                                            </td>
                                            <td>
                                                <div class="btn-group">
                                                    <a class="btn waves-effect btn-info" href="_admin-scholarship-viewinfo.php">View Info</a>
                                                </div>
                                            </td>
                                        </tr>
                                      </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--== Scholarship history ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Scholarship (History)</h4>
                                </div>
                                <div class="box-body tab-inn">
                                    <table id="example3" class="table table-bordered table-hover table-sm">
                                      <thead>
                                        <tr class="table-secondary">
                                            <th>#</th>
                                            <th>TUPC-ID</th>
                                            <th>Full Name</th>
                                            <th>Address</th>
                                            <th>Course</th>
                                            <th>Reason</th>
                                            <th>Request Date</th>
                                            <th>Status</th>
                                        </tr>
                                      </thead>
                                      <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><span class="list-enq-name">TUPC-18-0779</span>
                                            </td>
                                            <td>Cardo Dalisay
                                            </td>
                                            <td>Imus Cavite</td>
                                            <td>BSME</td>
                                            <td>Financial Problems</td>
                                            <td>03 Jun 2022</td>
                                            <td>
                                                <span class="label label-success">Success</span>
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