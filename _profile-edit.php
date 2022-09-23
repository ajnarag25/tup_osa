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
                                <li><a href="_idrequest.html">ID Request</a></li>
                                <li><a href="_idvalidation.html">ID Validation</a></li>
                                <li><a href="_goodmoral.html">Good Moral</a></li>
                                <li><a href="_scholarship.html">Scholarship Program</a></li>
                                <li><a href="_voting.html">Voting for USG</a></li>
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
                                <li><a href="_team.html">Team</a></li>
                                <li><a href="_profile-dashboard.php">Profile</a></li>
                                <li><a href="index.html">Logout</a></li>
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
                                                        <a class="course-overlay" href="_idrequest.html">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>ID Request</span>
                                                        </a>
                                                    </div>
                                                    <p>Apply for ID request any time.</p>
                                                    <a href="_idrequest.html" class="mm-r-m-btn">Select</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="_idvalidation.html">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>ID Validation</span>
                                                        </a>
                                                    </div>
                                                    <p>Request for Validation of School ID</p>
                                                    <a href="_idvalidation.html" class="mm-r-m-btn">Select</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="_goodmoral.html">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>Good Moral</span>
                                                        </a>
                                                    </div>
                                                    <p>Request for Good Moral.</p>
                                                    <a href="_goodmoral.html" class="mm-r-m-btn">Select</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="_voting.html">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>Voting for USG</span>
                                                        </a>
                                                    </div>
                                                    <p>Vote for USG election candidates. </p>
                                                    <a href="_voting.html" class="mm-r-m-btn">Select</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="_scholarship.html">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>Scholarship Programs</span>
                                                        </a>
                                                    </div>
                                                    <p>Apply for Scholarship Program. View announcement about scholarship program.</p>
                                                    <a href="_scholarship.html" class="mm-r-m-btn">Select</a>
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
                                <li><a href="_team.html">Team</a>
                                </li>
                                <li><a href="_profile-dashboard.php" style="color: rgb(197,30,58);">Profile</a>
                                </li>
                                <li><a href="index.html">Logout</a>
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
                                            <li><a href="_idrequest.html">ID Request</a></li>
                                            <li><a href="_idvalidation.html">ID Validation</a></li>
                                            <li><a href="_goodmoral.html">Good Moral</a></li>
                                            <li><a href="_voting.html">Voting for USG</a></li>
                                            <li><a href="_scholarship.html">Scholarship Programs</a></li>
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
                        <li><a href="_profile-dashboard.php">My Dashboard</a></li>
                        <li><a href="#" class="pro-act">Profile</a></li>
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
                    <form action="process.php" method="POST" enctype="multipart/form-data">
                        <input type="file" class="form-control" name="profile_pic" required>
                        <br>
                        <div class="text-center">
                            <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                            <button type="submit" name="change_profile" class="btn btn-success">Change Profile</button>
                        </div>
                    </form>
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
                </div>
                <div class="col-md-9">
                    <div class="udb">
                        <div class="udb-sec udb-prof">
                            <h4><img src="images/icon/dbb1.png" alt="" /> My Profile</h4>
                            <div class="n-form-com admiss-form">
                                <form class="form-horizontal" method="POST" action="process.php">
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="username" value="<?php echo $row['username'] ?>" required>
                                        </div>
                                    </div>  
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Phone:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="contact" value="<?php echo $row['contact'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Facebook:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="s1" value="<?php echo $row['social1'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-3">Twitter:</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="s2" value="<?php echo $row['social2'] ?>" required>
                                        </div>
                                    </div>
                                    <div class="sdb-bot-edit">
                                        <button type="button" data-toggle="modal" data-target="#save1<?php echo $row['id'] ?>" class="waves-effect waves-light btn-large sdb-btn sdb-btn-save"><i class="fa fa-pencil"></i> Save Changes</button>
                                    </div>
                            </div>
                        </div>

                        <!-- Modal Update Profile Information -->
                        <div class="modal fade" id="save1<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h3 class="modal-title" id="exampleModalLabel">Update Profile Information</h3>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <h4>Are you sure to Update your Profile Information now?</h4>
                                    </div>
                                    <div class="modal-footer">
                                        <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" name="update_profile" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>

                        <?php } ?>
                    </div>
                    <div class="udb-sec udb-prof">
                        <h4><img src="images/icon/dbb1.png" alt="" /> Change Password</h4>
                        <div class="n-form-com admiss-form">
                            <form class="form-horizontal" method="POST" action="process.php">
                                <div class="form-group">
                                    <label class="control-label col-sm-3">New Password:</label>
                                    <div class="col-sm-9">
                                        <input type="password" id="mypass1" class="form-control" name="newpass1" placeholder="Enter your new password" value="" required>
                                        <input type="checkbox" id="test51" onclick="myFunction1()" />
                                        <label for="test51">Show Password</label>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-3">Confirm New Password:</label>
                                    <div class="col-sm-9">
                                        <input type="password" id="mypass2" class="form-control" name="newpass2" placeholder="Enter confirm password" value="" required>
                                        <input type="checkbox" id="test52" onclick="myFunction2()" />
                                        <label for="test52">Show Password</label>
                                    </div>
                                </div>
                                <div class="sdb-bot-edit">
                                <?php 
                                    $get_email = $_SESSION['get_data']['email'];
                                    $query = "SELECT * FROM student WHERE email='$get_email' ";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {

                                ?>
                                    <button type="button" data-toggle="modal" data-target="#save2<?php echo $row['id'] ?>"  class="waves-effect waves-light btn-large sdb-btn sdb-btn-save"><i class="fa fa-pencil"></i> Save Changes</button>
                                </div>

                                <!-- Modal Update Password -->
                                <div class="modal fade" id="save2<?php echo $row['id'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h3 class="modal-title" id="exampleModalLabel">Update Password</h3>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <h3>Are you sure to Update your Password now?</h3>
                                                <p>You will be automatically logout and simply login your new created password.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button type="submit" name="change_password" class="btn btn-primary">Update Password</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </form>
                            <?php } ?>

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
                        <li><a href="_idrequest.html">ID Request</a></li>
                        <li><a href="_idvalidation.html">ID Validation</a></li>
                        <li><a href="_goodmoral.html">Good Moral</a></li>
                        <li><a href="_scholarship.html">Scholarship Program</a></li>
                        <li><a href="_voting.html">Voting for USG</a></li>
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
    <script>
        function myFunction() {
            var x = document.getElementById("mypass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
        function myFunction1() {
            var x = document.getElementById("mypass1");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
        function myFunction2() {
            var x = document.getElementById("mypass2");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>

    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>

</body>


</html>