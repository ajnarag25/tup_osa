<?php 
    include('connection.php');
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
                    <div class="wed-logo">
                        <a href="index.php"><img src="images/logo.png" alt="" />
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
                                <li><a href="#" data-toggle="modal" data-target="#modal1">ID Request</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#modal1">ID Validation</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#modal1">Good Moral</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#modal1">Scholarship Program</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#modal1">Voting for USG</a></li>
                                <li><a href="#" data-toggle="modal" data-target="#modal1">Student Violation</a></li>
                            </ul>
                            <h4>Student Account</h4>
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a></li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Register</a></li>
                            </ul>
                            <h4>Admin Account</h4>
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#">Sign In</a></li>
                            </ul>
                            <h4>All Pages</h4>
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="_team.php" data-toggle="modal" data-target="#modal1">Team</a></li>
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
                        <div class="ed-com-t1-right">
                            <ul>
                                <li><a href="#!" data-toggle="modal" data-target="#modal1">Sign In</a>
                                </li>
                                <li><a href="#!" data-toggle="modal" data-target="#modal2">Sign Up</a>
                                </li>
                            </ul>
                        </div>
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
                            <a href="index.php"><img src="images/gear-spin.gif" alt="" /><span style="font-weight: bold; font-size: larger;">  TUPC OSA Services</span></a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                <li><a href="index.php">Home</a>
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
                                                        <a class="course-overlay" href="#"  data-toggle="modal" data-target="#modal1">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>ID Request</span>
                                                        </a>
                                                    </div>
                                                    <p>Apply for ID request any time.</p>
                                                    <a href="#" class="mm-r-m-btn"  data-toggle="modal" data-target="#modal1">Select</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="#"  data-toggle="modal" data-target="#modal1">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>ID Validation</span>
                                                        </a>
                                                    </div>
                                                    <p>Request for Validation of School ID</p>
                                                    <a href="#" class="mm-r-m-btn"  data-toggle="modal" data-target="#modal1">Select</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="#"  data-toggle="modal" data-target="#modal1">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>Good Moral</span>
                                                        </a>
                                                    </div>
                                                    <p>Request for Good Moral.</p>
                                                    <a href="#" class="mm-r-m-btn"  data-toggle="modal" data-target="#modal1">Select</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="#"  data-toggle="modal" data-target="#modal1">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>Voting for USG</span>
                                                        </a>
                                                    </div>
                                                    <p>Vote for USG election candidates. </p>
                                                    <a href="#" class="mm-r-m-btn"  data-toggle="modal" data-target="#modal1">Select</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s1">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="#"  data-toggle="modal" data-target="#modal1">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>Scholarship Programs</span>
                                                        </a>
                                                    </div>
                                                    <p>Apply for Scholarship Program. View announcement about scholarship program.</p>
                                                    <a href="#" class="mm-r-m-btn" data-toggle="modal" data-target="#modal1">Select</a>
                                                </div>
                                                <div class="mm2-com mm1-com mm1-s4">
                                                    <div class="ed-course-in">
                                                        <a class="course-overlay" href="#"  data-toggle="modal" data-target="#modal1">
                                                            <img src="images/h-about1.jpg" alt="">
                                                            <span>Student Violation</span>
                                                        </a>
                                                    </div>
                                                    <p>Check if has violation. View remaining time for doing community service.</p>
                                                    <a href="#" class="mm-r-m-btn"  data-toggle="modal" data-target="#modal1">Select</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
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
                                            <li><a href="#" data-toggle="modal" data-target="#modal1">ID Request</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal1">ID Validation</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal1">Good Moral</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal1">Voting for USG</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal1">Scholarship Programs</a></li>
                                            <li><a href="#" data-toggle="modal" data-target="#modal1">Student Violation</a></li>
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

    <!-- SLIDER -->
    <section>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slider1 active">
                    <img src="images/slider/1.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Welcome to <span>TUPC OSA</span></h2>
                        <p>The official Facebook page of TUP Cavite's Office of Student Affairs (OSA). Please like for more updates on admissions, scholarships and etc.</p>
                        <a href="#" class="bann-btn-1">All Services</a><a href="https://www.tupcavite.edu.ph/support-osa.html" class="bann-btn-2" target="_blank">Read More</a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/2.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>Admission <span>Open</span></h2>
                        <p>The official Facebook page of TUP Cavite's Office of Student Affairs (OSA). Please like for more updates on admissions, scholarships and etc.</p>
                        <a href="https://www.tupcavite.edu.ph/admission.html" target="_blank" class="bann-btn-1">Admission</a><a href="https://www.tupcavite.edu.ph/support-osa.html" class="bann-btn-2" target="_blank">Read More</a>
                    </div>
                </div>
                <div class="item">
                    <img src="images/slider/3.jpg" alt="">
                    <div class="carousel-caption slider-con">
                        <h2>All Programs <span>Offered</span></h2>
                        <p>The official Facebook page of TUP Cavite's Office of Student Affairs (OSA). Please like for more updates on admissions, scholarships and etc.</p>
                        <a href="https://www.tupcavite.edu.ph/programs.html" target="_blank" class="bann-btn-1">All Courses</a><a href="https://www.tupcavite.edu.ph/support-osa.html" class="bann-btn-2" target="_blank">Read More</a>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <i class="fa fa-chevron-left slider-arr"></i>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <i class="fa fa-chevron-right slider-arr"></i>
            </a>
        </div>
    </section>

    <!-- QUICK LINKS -->
    <section>
        <div class="container">
            <div class="row">
                <div class="wed-hom-ser">
                    <ul>
                        <li>
                            <a href="#" class="waves-effect waves-light btn-large wed-pop-ser-btn"  data-toggle="modal" data-target="#modal1"><img src="images/icon/h-ic1.png" alt=""> Good Moral</a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect waves-light btn-large wed-pop-ser-btn"  data-toggle="modal" data-target="#modal1"><img src="images/icon/h-ic2.png" alt=""> Scholarship</a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect waves-light btn-large wed-pop-ser-btn"  data-toggle="modal" data-target="#modal1"><img src="images/icon/h-ic4.png" alt=""> Courses</a>
                        </li>
                        <li>
                            <a href="#" class="waves-effect waves-light btn-large wed-pop-ser-btn"  data-toggle="modal" data-target="#modal1"><img src="images/icon/h-ic3.png" alt=""> USG Voting</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <div class="con-title">
        <h2>Announcements</h2>
        <p>Welcome to TUPC OSA Services</p>
    </div>
    <?php 
        $query = "SELECT * FROM usg_voting ";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result)) {
    ?>
    <?php 
     if ($row['status'] == 'Open'){
    ?>
    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1>Voting of USG Officers is now open</h1>
                    <p>Please Check the Voting Form.</p>
                    <a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-primary">Vote Now</a>
                </div>
            </div>
        </div>
    </section>

    <?php } else {
    ?>
    <section>
        <div class="head-2">
            <div class="container">
                <div class="head-2-inn head-2-inn-padd-top">
                    <h1>Voting of USG Officers is not yet opened</h1>
                    <p>Please wait for further announcement regarding of voting for incoming USG candidates.</p>
                </div>
            </div>
        </div>
    </section>
    <?php } } ?>
    <br>
    <!-- ANNOUNCEMENT -->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Scholarship <span>Programs</span> </h2>
                </div>
            </div>
            <div class="row">
                <div class="ed-course">
                <?php 
                    $query = "SELECT * FROM list_scholar ";
                    $result = mysqli_query($conn, $query);
                    while ($row = mysqli_fetch_array($result)) {
                ?>
                    <div class="col-md-4">
                        <div class="ed-course-in">
                            <div class="card-body text-center">
                                <h2 class="card-title"><?php echo $row['name'] ?></h2>
                                <p class="card-text"><?php echo $row['description'] ?></p>
                                
                            </div>
                        </div>
                    </div>
                <?php } ?>
                </div>
            </div>

            <div class="row">
                <div class="con-title">
                    <a href="#" data-toggle="modal" data-target="#modal1" class="btn btn-primary">Apply Scholarship</a>
                </div>
            </div>
   
        </div>
    </section>
    <!-- DISCOVER MORE -->
    <section>
        <div class="container com-sp pad-bot-70">
            <div class="row">
                <div class="con-title">
                    <h2>Discover <span>More</span></h2>
                    <p>Welcome to TUPC OSA Services</p>
                </div>
            </div>
            <div class="row">
                <div class="ed-course">
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#"  data-toggle="modal" data-target="#modal1">
                                <img src="images/h-about.jpg" alt="">
                                <span>ID Request</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#"  data-toggle="modal" data-target="#modal1">
                                <img src="images/h-about.jpg" alt="">
                                <span>ID Validation</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#"  data-toggle="modal" data-target="#modal1">
                                <img src="images/h-about.jpg" alt="" >
                                <span>Good Moral</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#"  data-toggle="modal" data-target="#modal1">
                                <img src="images/h-about.jpg" alt="" >
                                <span>Voting for USG</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#"  data-toggle="modal" data-target="#modal1">
                                <img src="images/h-about.jpg" alt="">
                                <span>Scholarship for Program</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#" data-toggle="modal" data-target="#modal1">
                                <img src="images/h-about.jpg" alt="">
                                <span>Student Violation</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#" data-toggle="modal" data-target="#modal1">
                                <img src="images/h-about.jpg" alt="">
                                <span>Students Profile</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="ed-course-in">
                            <a class="course-overlay" href="#">
                                <img src="images/h-about.jpg" alt="">
                                <span>Team</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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

    <!--SECTION LOGIN, REGISTER AND FORGOT PASSWORD-->
    <section>
    
        <!-- LOGIN SECTION -->
        <div id="modal1" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello...</h1>
                    <p>Don't have an account? Create your account. It's take less than a minutes</p>
                    <h4>Create  your account here</h4>
                    <ul>
                        <li><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal2"><i class="fa fa-sign-out"></i> Create your account</a>
                        </li>
                        
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Login</h4>
                    <p>Welcome to TUPC OSA Services</p>
                    <form class="s12" action="process.php" method="POST">
                        <div>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name" name="username" class="validate" required>
                                <label>Username</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" name="password" class="validate" required>
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="s12 log-ch-bx">
                                <p>
                                    <input type="checkbox" id="test5" />
                                    <label for="test5">Remember me</label>
                                </p>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" name="login_student" class="waves-effect waves-light log-in-btn" value="Login"> </div>
                        </div>
                        <div>
                            <div class="input-field s12"> 
                                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal3">Forgot password?</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- REGISTER SECTION -->
        <div id="modal2" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello...</h1>
                    <p>Already have an account? Login your account. It's take less than a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1"><i class="fa fa-sign-in "></i> Login your account</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Create an Account</h4>
                    <form class="s12" action="process.php" method="POST">
                        <div>
                            <p>Personal Information</p>
                            <div class="input-field s12 ">
                                <input type="text" name="sid" data-ng-model="name1" class="validate" required>
                                <label>TUPC-ID Number</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="text" name="name" class="validate" required>
                                <label>Full Name</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="text" name="contact" class="validate" required>
                                <label>Contact</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                            <select name="course" class="form-select" id="" required>
                                <option value="" selected disabled>Select Course</option>
                                <option value="BSCE">BSCE - Bachelor of Science in Civil Engineering</option>
                                <option value="BSEE">BSEE - Bachelor of Science in Electrical Engineering</option>
                                <option value="BSME">BSME - Bachelor of Science in Mechanical Engineering</option>
                                <option value="BGT-AT">BGT-AT - Architecture Technology </option>
                                <option value="BET-ET">BET-ET - Electrical Technology</option>
                                <option value="BET-ESET">BET-ESET - Industrial Automation Technology</option>
                                <option value="BET-COET">BET-COET - Computer Engineering Technology</option>
                                <option value="BET-CT-1">BET-CT - Contruction Technology</option>
                                <option value="BET-CT-2">BET-CT - Civil Technology</option>
                                <option value="BET-MT">BET-MT - Mechanical Technology</option>
                                <option value="BET-AT">BET-AT - Automotive Technology</option>
                                <option value="BET-PPT">BET-PPT - Power Plant Technology</option>
                                <option value="BSIE-HE">BSIE-HE - Home Economics</option>
                                <option value="BSIE-IA">BSIE-IA - Industrial Arts</option>
                                <option value="BSIE-ICT">BSIE-ICT - Information and Communication Technology</option>
                                <option value="BTTE-CP">BTTE-CP - Computer Programming</option>
                                <option value="BTTE-E">BTTE-E - Electrical</option>
                            </select>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="email" name="email" onkeyup="gsfeOnly(this)" class="validate" required>
                                <label>Email</label>
                            </div>
                            <label id="check_gsfe" class="text-danger"></label>
                        </div>
                        <hr>
                        <div>
                            <p>Account Information</p>
                            <div class="input-field s12">
                                <input type="text" name="username" class="validate" required>
                                <label>Username</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" name="password1" class="validate" required>
                                <label>Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s12">
                                <input type="password" name="password2" class="validate" required>
                                <label>Retype Password</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" name="register_student" value="Register" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- FORGOT SECTION -->
        <div id="modal3" class="modal fade" role="dialog">
            <div class="log-in-pop">
                <div class="log-in-pop-left">
                    <h1>Hello...</h1>
                    <p>Already have an account? Login your account. It's take less than a minutes</p>
                    <h4>Login with social media</h4>
                    <ul>
                        <li><a href="#" data-dismiss="modal" data-toggle="modal" data-target="#modal1"><i class="fa fa-sign-in "></i> Login your account</a>
                        </li>
                    </ul>
                </div>
                <div class="log-in-pop-right">
                    <a href="#" class="pop-close" data-dismiss="modal"><img src="images/cancel.png" alt="" />
                    </a>
                    <h4>Forgot password</h4>
                    <form class="s12" action="process.php" method="POST">
                        <div>
                            <p>We will send an otp verification code to your email</p>
                            <div class="input-field s12">
                                <input type="text" data-ng-model="name3" name="email" class="validate" required>
                                <label>Email</label>
                            </div>
                        </div>
                        <div>
                            <div class="input-field s4">
                                <input type="submit" value="Submit" name="reset_password" class="waves-effect waves-light log-in-btn"> </div>
                        </div>
                       
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
    <script>
        function gsfeOnly(input) {
            let regex = new RegExp('[a-z0-9]+@gsfe.tupcavite.edu.ph');
            check = regex.test(input.value)
            if(check == false){
                console.log('Not gsfe account')
                document.getElementById("check_gsfe").innerText = "Please use your gsfe account only";
            }else{
                console.log('Your using gsfe account')
                document.getElementById("check_gsfe").innerText = "";
            }
        }
    </script>
</body>

</html>