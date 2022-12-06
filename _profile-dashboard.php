<?php 
  include('connection.php');
  session_start();
  if (!isset($_SESSION['get_data']['email'])) {
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <title>TUPC OSA Services</title>
    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- FAV ICON(BROWSER TAB ICON) -->
    <link rel="shortcut icon" href="images/fav.ico" type="image/x-icon">
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">
    <!-- FONTAWESOME ICONS -->
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


    <!-- MOBILE MENU -->
    <section>
        <div class="ed-mob-menu">
            <div class="ed-mob-menu-con">
                <div class="ed-mm-left">
                    <div class="wed-logo2">
                        <a href="_mainss.php"><img src="images/gear-spin.gif" alt="" />
						</a>
                    </div>
                </div>
                <div class="ed-mm-right">
                    <div class="ed-mm-menu">
                        <a href="#!" class="ed-micon"><i class="fa fa-bars"></i></a>
                        <div class="ed-mm-inn">
                            <a href="#!" class="ed-mi-close"><i class="fa fa-times"></i></a>
                            <h4 id="serv">All Services</h4>
                            <ul>
                                <li><a href="_idrequest.php">ID Request</a></li>
                                <li><a href="_idvalidation.php">ID Validation</a></li>
                                <li><a href="_goodmoral.php">Good Moral</a></li>
                                <li><a href="_scholarship.php">Scholarship Program</a></li>
                                <li><a href="_voting.php">Voting for USG</a></li>
                                <li><a href="_profile-dashboard.php#violationss">Student Violation</a></li>
                            </ul>
                            <!-- <h4>Student Account</h4>
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a></li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Register</a></li>
                            </ul>
                            <h4>Admin Account</h4>
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a></li>
                            </ul> -->
                            
                            <h4>Other Pages</h4>
                            <ul>
                                <li><a href="_mainss.php">Home</a></li>
                                <li><a href="_team.php">Team</a></li>
                                <li><a href="_profile-dashboard.php">Profile</a></li>
                                <li><a href="process.php?logout">Logout</a></li>
                            </ul>
                            <h4>About</h4>
                            <ul>
                                <li><a href="https://www.tupcavite.edu.ph/tupc-regents.html" target="_blank">Board of Regents</a></li>
                                <li><a href="https://www.tupcavite.edu.ph/tupc-officials.html" target="_blank">Campus Officials</a></li>
                                <li><a href="https://www.tupcavite.edu.ph/tupc-mandate.html" target="_blank">Vision and Mission</a></li>
                                <li><a href="https://www.tupcavite.edu.ph/tupc-mission-vision.html" target="_blank">TUP Seal History</a></li>
                                <li><a href="https://www.tupcavite.edu.ph/tupc-transparency-seal.html" target="_blank">Transparency Seal</a></li>
                                <li><a href="https://www.tupcavite.edu.ph/programs.html" target="_blank">All Programs Offered</a></li>
                                <li><a href="https://ers.tup.edu.ph/aims/applicants/" target="_blank">Application</a></li>
                                <li><a href="https://www.tupcavite.edu.ph/admission.html" target="_blank">Admission Procedures</a></li>
                                <li><a href="https://www.tupcavite.edu.ph/student-handbook.html" target="_blank">Student Handbook</a></li>
                                <li><a href="https://www.tupcavite.edu.ph/student-scholarship.html" target="_blank">Apply for Scholarship</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--HEADER SECTION-->
    <section>
        <!-- TOP BAR -->
        <div class="ed-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="ed-com-t1-left">
                            <ul>
                                <li><a href="#">Address: Carlos Trinidad Ave, Salawag, Dasmariñas, Cavite</a>
                                </li>
                                <li><a href="#">Phone: (046) 416 4920</a>
                                </li>
                            </ul>
                        </div>
                        <!-- <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a>
                                </li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Sign Up</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- LOGO AND MENU SECTION -->
        <div class="top-logo" data-spy="affix" data-offset-top="250">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="wed-logo">
                            <a href="_mainss.php"><img src="images/gear-spin.gif" alt="" /><span style="font-weight: bold; font-size: larger;">  TUPC OSA Services</span></a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="_mainss.php">Home</a>
                                </li>
                                <li class="about-menu">
                                    <a href="#" class="mm-arr">About</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="about-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay menu-about" href="#">
                                                            <img src="images/h-about.jpg" alt="">
                                                            <span>TUP Cavite</span>
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="mm1-com mm1-s2">
                                                    <p>Technological University of the Philippines Cavite Campus was established in 1979 as one of the three prototype 
                                                        technician institutes in the Philippines. It is a satellite campus located at Salawag, Damariñas, Cavite. At present, 
                                                        TUP Cavite offers programs in pre-baccalaureate and baccalaureate level.</p>
                                                    <a href="https://en.wikipedia.org/wiki/Technological_University_of_the_Philippines_%E2%80%93_Cavite" target="_blank" class="mm-r-m-btn">Read more</a>
                                                </div>
                                                <div class="mm1-com mm1-s3">
                                                    <ul>
                                                        <li><a href="https://www.tupcavite.edu.ph/tupc-regents.html" target="_blank">Board of Regents</a></li>
                                                        <li><a href="https://www.tupcavite.edu.ph/tupc-officials.html" target="_blank">Campus Officials</a></li>
                                                        <li><a href="https://www.tupcavite.edu.ph/tupc-mandate.html" target="_blank">Vision and Mission</a></li>
                                                        <li><a href="https://www.tupcavite.edu.ph/tupc-mission-vision.html" target="_blank">TUP Seal History</a></li>
                                                        <li><a href="https://www.tupcavite.edu.ph/tupc-transparency-seal.html" target="_blank">Transparency Seal</a></li>
                                                    </ul>
                                                </div>
                                                <div class="mm1-com mm1-s4">
                                                    <ul>
                                                        <li><a href="https://www.tupcavite.edu.ph/programs.html" target="_blank">All Programs Offered</a></li>
                                                        <li><a href="https://ers.tup.edu.ph/aims/applicants/" target="_blank">Application</a></li>
                                                        <li><a href="https://www.tupcavite.edu.ph/admission.html" target="_blank">Admission Procedures</a></li>
                                                        <li><a href="https://www.tupcavite.edu.ph/student-handbook.html" target="_blank">Student Handbook</a></li>
                                                        <li><a href="https://www.tupcavite.edu.ph/student-scholarship.html" target="_blank">Apply for Scholarship</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="admi-menu">
                                    <a href="#servi" class="mm-arr">Services</a>
                                    <!-- MEGA MENU 1 -->
                                    <div class="mm-pos">
                                        <div class="admi-mm m-menu">
                                            <div class="m-menu-inn">
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="_idrequest.php">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>ID Request</span>
                                                        </a>
                                                    </div>
                                                    <p>Apply for ID request any time.</p>
                                                    <a href="_idrequest.php" class="mm-r-m-btn">Select</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="_idvalidation.php">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>ID Validation</span>
                                                        </a>
                                                    </div>
                                                    <p>Request for Validation of School ID</p>
                                                    <a href="_idvalidation.php" class="mm-r-m-btn">Select</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="_goodmoral.php">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>Good Moral</span>
                                                        </a>
                                                    </div>
                                                    <p>Request for Good Moral.</p>
                                                    <a href="_goodmoral.php" class="mm-r-m-btn">Select</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="_voting.php">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>Voting for USG</span>
                                                        </a>
                                                    </div>
                                                    <p>Vote for USG election candidates. </p>
                                                    <a href="_voting.php" class="mm-r-m-btn">Select</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="_scholarship.php">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>Scholarship Programs</span>
                                                        </a>
                                                    </div>
                                                    <p>Apply for Scholarship Program. View announcement about scholarship program.</p>
                                                    <a href="_scholarship.php" class="mm-r-m-btn">Select</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s4">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="_profile-dashboard.php#violationss">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>Student Violation</span>
                                                        </a>
                                                    </div>
                                                    <p>Check if has violation. View remaining time for doing community service.</p>
                                                    <a href="_profile-dashboard.php#violationss" class="mm-r-m-btn">Select</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="_team.php">Team</a>
                                </li>
                                <li><a href="_profile-dashboard.php" style="color: rgb(197,30,58);">Profile</a>
                                </li>
                                <li><a href="process.php?logout">Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="all-drop-down-menu">

                    </div>

                </div>
            </div>
        </div>
        <div class="search-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="search-form">
                            <form>
                                <div class="sf-type">
                                    <div class="sf-input">
                                        <input type="text" id="sf-box" placeholder="Search different services">
                                    </div>
                                    <div class="sf-list">
                                        <ul>
                                            <li><a href="_idrequest.php">ID Request</a></li>
                                            <li><a href="_idvalidation.php">ID Validation</a></li>
                                            <li><a href="_goodmoral.php">Good Moral</a></li>
                                            <li><a href="_voting.php">Voting for USG</a></li>
                                            <li><a href="_scholarship.php">Scholarship Programs</a></li>
                                            <li><a href="_profile-dashboard.php#violationss">Student Violation</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sf-submit">
                                    <input type="submit" value="Search Services">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--END HEADER SECTION-->

    <!--SECTION START-->
    <section>
        <div class="pro-cover">
        </div>
        <div class="pro-menu">
            <div class="container">
                <div class="col-md-9 col-md-offset-3">
                    <ul>
                        <li><a href="_profile-dashboard.php" class="pro-act">My Dashboard</a></li>
                        <li><a href="_profile.php">Profile</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="stu-db">
            <div class="container pg-inn">
                <div class="col-md-3">
                    <div class="pro-user">
                    <?php 
                        $get_email = $_SESSION['get_data']['email'];
                        $query = "SELECT * FROM student WHERE email='$get_email' ";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {

                    ?>
                        <img src="<?php echo $row['image'] ?>" alt="user">
                    
                    </div>
                    <div class="pro-user-bio">
                        <ul>
                            <li>
                                <h4><?php echo $row['name'] ?></h4>
                            </li>
                            <li>Student ID: <?php echo $row['student_id'] ?></li>
                            <li><a href="#!"><i class="fa fa-facebook"></i>: <?php echo $row['social1'] ?></a></li>
                            <li><a href="#!"><i class="fa fa-google"></i>: <?php echo $row['email'] ?></a></li>
                            <li><a href="#!"><i class="fa fa-twitter"></i>: <?php echo $row['social2']?></a></li>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
                <div class="col-md-9">
                    <div class="udb" id="idreq">
                        <div class="udb-sec udb-cour-stat">
                            <h4><img src="images/icon/db3.png" alt="" /> ID Request</h4>
                            <p>You can see all your pending and done <strong>ID request</strong> here </p>
                            <small>Note: <strong>Scheduled date</strong> is the date where you need to go to the campus. If status is <strong>declined</strong>, it means that you did not go 
                                on the correct scheduled date.
                            </small>
                            
                            <div class="pro-con-table">
                                <table class="bordered responsive-table">
                                    <thead >
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Request Date</th>
                                            <th>Request Type</th>
                                            <th>Scheduled Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    <?php 
                                        $get_email = $_SESSION['get_data']['email'];
                                        $query = "SELECT * FROM id_request WHERE email='$get_email' ";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($result)) {

                                    ?>
                                        <tr>
                                            <td><?php echo $row['student_id'] ?></td>
                                            <td><?php echo $row['sched_submit'] ?></td>
                                            <td><?php echo $row['req_type'] ?></td>
                                            <td><?php echo $row['sched_claim'] ?></td>
                                            <td>
                                                <?php 
                                                    if ($row['status'] == 'PENDING'){
                                                        $pending = $row['status'];
                                                        echo "
                                                        <span class='pro-user-de-act'>$pending</span>
                                                        ";
                                                    }elseif ($row['status'] == 'DECLINED'){
                                                        $declined = $row['status'];
                                                        echo "
                                                        <span class='pro-user-danger'>$declined</span>
                                                        ";
                                                    }else{
                                                        $done = $row['status'];
                                                        echo "
                                                        <span class='pro-user-act'>$done</span>
                                                        ";
                                                    }
                                                
                                                ?>
                                            
                                            </td>
                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
                                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#delete_idreq" >Delete All</button>

                                <!-- Modal Delete ID Validation -->
                                <div class="modal fade" id="delete_idreq" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form method="POST" action="process.php">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="exampleModalLabel">Delete ID Request</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>Are you sure to Delete all of your ID Request?</h4>
                                                    <p>This action is deleting all of your data!</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" value="<?php echo $_SESSION['get_data']['email']; ?>" name="email">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="del_id_req" class="btn btn-danger">Delete All</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="udb" id="idval">
                        <div class="udb-sec udb-cour-stat">
                            <h4><img src="images/icon/db3.png" alt="" /> ID Validation</h4>
                            <p>You can see all your pending and done <strong>ID validation</strong> here </p>
                            <small>Note: <strong>Scheduled date</strong> is the date where you need to go to the campus. If status is <strong>declined</strong>, it means that you did not go 
                                on the correct scheduled date or your ID is severely damaged and need to be replace.
                            </small>
                            <div class="pro-con-table">
                                <table class="bordered responsive-table">
                                    <thead >
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Request Date</th>
                                            <th>Scheduled Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php 
                                            $get_email = $_SESSION['get_data']['email'];
                                            $query = "SELECT * FROM id_validation WHERE email='$get_email' ";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {

                                        ?>
                                        <tr>
                                            <td><?php echo $row['student_id'] ?></td>
                                            <td><?php echo $row['date_submit'] ?></td>
                                            <td><?php echo $row['date_claim'] ?></td>
                                            <td>
                                                <?php 
                                                    if ($row['status'] == 'PENDING'){
                                                        $pending = $row['status'];
                                                        echo "
                                                        <span class='pro-user-de-act'>$pending</span>
                                                        ";
                                                    }elseif ($row['status'] == 'DECLINED'){
                                                        $declined = $row['status'];
                                                        echo "
                                                        <span class='pro-user-danger'>$declined</span>
                                                        ";
                                                    }else{
                                                        $done = $row['status'];
                                                        echo "
                                                        <span class='pro-user-act'>$done</span>
                                                        ";
                                                    }
                                                
                                                ?>
                                            
                                            </td>
                                        </tr>

                                    <?php } ?>

                                    </tbody>
                                </table>
                                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#delete_idval">Delete All</button>

                                <!-- Modal Delete ID Validation -->
                                <div class="modal fade" id="delete_idval" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form method="POST" action="process.php">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="exampleModalLabel">Delete ID Validation</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>Are you sure to Delete all of your ID Validation?</h4>
                                                    <p>This action is deleting all of your data!</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" value="<?php echo $_SESSION['get_data']['email']; ?>" name="email">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="del_id_val" class="btn btn-danger">Delete All</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <div class="udb" id="goodmor">
                        <div class="udb-sec udb-cour-stat">
                            <h4><img src="images/icon/db3.png" alt="" /> Good Moral</h4>
                            <p>You can see all your pending and done <strong>Good moral request</strong> here </p>
                            <small>Note: <strong>Scheduled date</strong> is the date where you need to go to the campus. If status is <strong>declined</strong>, it means that you did not go 
                                on the correct scheduled date.
                            </small>
                            <div class="pro-con-table">
                                <table class="bordered responsive-table">
                                    <thead >
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Request Date</th>
                                            <th>Purpose</th>
                                            <th>Scheduled Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php 
                                            $get_email = $_SESSION['get_data']['email'];
                                            $query = "SELECT * FROM good_moral WHERE email='$get_email' ";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {

                                        ?>
                                        <tr>
                                            <td><?php echo $row['student_id'] ?></td>
                                            <td><?php echo $row['date_submit'] ?></td>
                                            <td><?php echo $row['purpose'] ?></td>
                                            <td><?php echo $row['date_claim'] ?></td>
                                            <td>
                                                <?php 
                                                    if ($row['status'] == 'PENDING'){
                                                        $pending = $row['status'];
                                                        echo "
                                                        <span class='pro-user-de-act'>$pending</span>
                                                        ";
                                                    }elseif ($row['status'] == 'DECLINED'){
                                                        $declined = $row['status'];
                                                        echo "
                                                        <span class='pro-user-danger'>$declined</span>
                                                        ";
                                                    }else{
                                                        $done = $row['status'];
                                                        echo "
                                                        <span class='pro-user-act'>$done</span>
                                                        ";
                                                    }
                                                
                                                ?>
                                            
                                            </td>
                                        </tr>
   
                                    <?php } ?>

                                    </tbody>
                                </table>
                                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#delete_goodmoral">Delete All</button>

                                <!-- Modal Delete Good Moral -->
                                <div class="modal fade" id="delete_goodmoral" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form method="POST" action="process.php">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="exampleModalLabel">Delete Good Moral</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>Are you sure to Delete all of your Good Moral Request/s?</h4>
                                                    <p>This action is deleting all of your data!</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" value="<?php echo $_SESSION['get_data']['email']; ?>" name="email">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="del_goodmoral" class="btn btn-danger">Delete All</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="udb" id="violationss">
                        <div class="udb-sec udb-cour-stat">
                            <h4><img src="images/icon/db3.png" alt="" /> Violations</h4>
                            <p>You can see all your pending and done <strong>violations</strong> here</p>
                            <small>Note: You need to go and comply if you have a violation. After comply, you need to do the sanction and return to the office to submit or update your status.
                            </small>
                            <div class="pro-con-table">
                                <table class="bordered responsive-table">
                                    <thead >
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Offenses</th>
                                            <th>Violation</th>
                                            <th>Offense #</th>
                                            <th>Sanction</th>
                                            <th>Remaining Time</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php 
                                            $get_id = $_SESSION['get_data']['student_id'];
                                            $query = "SELECT * FROM violations WHERE student_id='$get_id' ";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {

                                        ?>

                                        <tr>
                                            <td><?php echo $row['student_id'] ?></td>
                                            <td><?php echo $row['offense1'] ?></td>
                                            <td><?php echo $row['offense2'] ?></td>
                                            <td><?php echo $row['offense3'] ?></td>
                                            <td><?php echo $row['offense4'] ?></td>
                                            <td><?php echo $row['td'] ?></td>
                                            <td>
                                                <?php 
                                                    if($row['status'] == 'ONGOING'){
                                                        $set_status = $row['status'];
                                                        echo "
                                                        <span class='pro-user-de-act'>$set_status</span>
                                                        ";
                                                    }else{
                                                        $set_status = $row['status'];
                                                        echo "
                                                        <span class='pro-user-act'>$set_status</span>
                                                        ";
                                                    }
                                                ?>
                                            </td>
                                        </tr>

                                        <?php } ?>

                                    </tbody>
                                </table>
                                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#delete_violation">Delete All</button>

                                <!-- Modal Delete Violations -->
                                <div class="modal fade" id="delete_violation" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form method="POST" action="process.php">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="exampleModalLabel">Delete Violation</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>Are you sure to Delete all of your Violation/s?</h4>
                                                    <p>This action is deleting all of your data!</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" value="<?php echo $_SESSION['get_data']['student_id']; ?>" name="studentid">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="del_violation" class="btn btn-danger">Delete All</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="udb" id="scho">
                        <div class="udb-sec udb-cour-stat">
                            <h4><img src="images/icon/db3.png" alt="" /> Scholarship</h4>
                            <p>You can see all your pending and done <strong>Scholarship application</strong> here </p>
                            <small>Note: <strong>Scheduled date</strong> is the date where you need to go to the campus. If status is <strong>declined</strong>, it means that you did not go 
                                on the correct scheduled date.
                            </small>
                            <div class="pro-con-table">
                                <table class="bordered responsive-table">
                                    <thead >
                                        <tr>
                                            <th>Student ID</th>
                                            <th>Request Date</th>
                                            <th>Reason</th>
                                            <th>Scheduled Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php 
                                            $get_email = $_SESSION['get_data']['email'];
                                            $query = "SELECT * FROM scholarship WHERE email='$get_email' ";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {

                                        ?>
                                        <tr>
                                            <td><?php echo $row['student_id'] ?></td>
                                            <td><?php echo $row['req_date'] ?></td>
                                            <td><?php echo $row['essay2'] ?></td>
                                            <td><?php echo $row['sched_date'] ?></td>
                                            <td>
                                                <?php 
                                                    if ($row['status'] == 'PENDING'){
                                                        $pending = $row['status'];
                                                        echo "
                                                        <span class='pro-user-de-act'>$pending</span>
                                                        ";
                                                    }elseif ($row['status'] == 'DECLINED'){
                                                        $declined = $row['status'];
                                                        echo "
                                                        <span class='pro-user-danger'>$declined</span>
                                                        ";
                                                    }else{
                                                        $done = $row['status'];
                                                        echo "
                                                        <span class='pro-user-act'>$done</span>
                                                        ";
                                                    }
                                                
                                                ?>
                                            </td>
                                        </tr>

                                        <?php } ?>

                                    </tbody>
                                </table>
                                <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#delete_scholarship">Delete All</button>

                                 <!-- Modal Delete Scholarship -->
                                 <div class="modal fade" id="delete_scholarship" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <form method="POST" action="process.php">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h3 class="modal-title" id="exampleModalLabel">Delete Scholarship</h3>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <h4>Are you sure to Delete all of your Scholarship/s?</h4>
                                                    <p>This action is deleting all of your data!</p>
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="hidden" value="<?php echo $_SESSION['get_data']['student_id']; ?>" name="studentid">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                    <button type="submit" name="del_scholarship" class="btn btn-danger">Delete All</button>
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
    </section>
    <!--SECTION END-->


    <!-- FOOTER -->
    <section class="wed-hom-footer">
        <div class="container">
            
            <div class="row wed-foot-link">
                <div class="col-md-4 foot-tc-mar-t-o">
                    <h4>Most Popular Links</h4>
                    <ul>
                        <li><a href="_idrequest.php">ID Request</a></li>
                        <li><a href="_idvalidation.php">ID Validation</a></li>
                        <li><a href="_goodmoral.php">Good Moral</a></li>
                        <li><a href="_scholarship.php">Scholarship Program</a></li>
                        <li><a href="_voting.php">Voting for USG</a></li>
                        <li><a href="_profile-dashboard.php#violationss">Student Violation</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Other Links</h4>
                    <ul>
                        <li><a href="https://ers.tup.edu.ph/aims/students/" target="_blank">Student Portal</a></li>
                        <li><a href="https://www.tupcavite.edu.ph/programs.html" target="_blank">Program and Courses</a></li>
                        <li><a href="https://www.google.com/maps/place/Technological+University+of+the+Philippines+%E2%80%93+Cavite/@14.3450591,120.9639132,17z/data=!3m1!4b1!4m5!3m4!1s0x3397d43fdf3bf3d3:0x756d61b3739581bc!8m2!3d14.3450539!4d120.9661019" target="_blank">Visiting the University</a></li>
                        <li><a href="https://www.tupcavite.edu.ph/student-handbook.html" target="_blank">TUP Student Handbook</a></li>
                        <li><a href="https://www.facebook.com/TUPCAA/" target="_blank">Alumni Office</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h4>Government Links</h4>
                    <ul>
                        <li><a href="https://president.gov.ph/" target="_blank">Office of the President</a></li>
                        <li><a href="https://ovp.gov.ph/" target="_blank">Office of the Vice President</a></li>
                        <li><a href="https://legacy.senate.gov.ph/" target="_blank">Senate of the Philippines</a></li>
                        <li><a href="https://www.congress.gov.ph/" target="_blank">House of Representatives</a></li>
                        <li><a href="https://sc.judiciary.gov.ph/" target="_blank">Supreme Courts</a></li>
                        <li><a href="https://ca.judiciary.gov.ph/" target="_blank">Court of Appeals</a></li>
                        <li><a href="https://sb.judiciary.gov.ph/" target="_blank">Sandiganbayan</a></li>
                    </ul>
                </div>
            </div>
            <div class="row wed-foot-link-1">
                <div class="row">
                    <div class="col-md-12">
                        <h4>OFFICE OF STUDENT AFFAIRS (OSA)</h4>
                        <p>The official Facebook page of TUP Cavite's Office of Student Affairs (OSA). Please like for more updates on admissions, scholarships and etc.</p>
                        <p>Address: Carlos Q. Trinidad Avenue, Brgy. Salawag, Dasmariñas City, Cavite <a href="https://www.google.com/maps/place/Technological+University+of+the+Philippines+%E2%80%93+Cavite/@14.3450539,120.9661019,17z/data=!3m1!4b1!4m5!3m4!1s0x3397d43fdf3bf3d3:0x756d61b3739581bc!8m2!3d14.3450539!4d120.9661019" target="_blank"> - Click here to see map</a></p>
                        <p>Phone: <a href="#!">+63 (046) 416 4920</a></p>
                        <p>Email: <a href="#!">tupc_osa@gsfe.tupcavite.edu.ph</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- COPY RIGHTS -->
    <section class="wed-rights">
        <div class="container">
            <div class="row">
                <div class="copy-right">
                   <a target="_blank" href="https://www.tupcavite.edu.ph/">Technological University of the Philippines - Cavite Campus</a>
                </div>
            </div>
        </div>
    </section>


    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>