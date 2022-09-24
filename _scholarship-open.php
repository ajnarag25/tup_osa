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
                                <li><a href="index.php">Logout</a></li>
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
                                <li><a href="_profile-dashboard.php">Profile</a>
                                </li>
                                <li><a href="index.php">Logout</a>
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
    <section class="c-all h-quote">
        <div class="container">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="all-title quote-title qu-new">
                    <h2>Apply for scholarship</h2>
                    <p>Send a request form for scholarship program.</p>
                    <p>After sending the form, wait for the update and further instructions. Once approved, please prepare the following list below.</p>
                    <p><strong>Requirements List<br>-> Duly Accomplied Application Form<br>-> Endorsement from the Shop Adviser/Previous Professor in the campus<br>
                        -> Certified True Copy of Evaluation of Grades (for students with atleast one semester residency) or High School Card (Form-138)(for new students)<br>
                        -> Latest income Tax Return / Certificate of non-filing of ITR<br>-> 2x2 Picture(1pc)<br>-> Photocopy of Latest Registration Form</strong></p>
                    <a class="btn btn-secondary btn-block" href="_profile-dashboard.php#scho" role="button">View Status</a>
                    <p class="help-line">Help Line <span>(046) 416 4920</span> </p> <span class="help-arrow pulse"><i class="fa fa-angle-right" aria-hidden="true"></i></span> 
                </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="n-form-com admiss-form">
                    <div class="col s12">
                        <form class="form-horizontal">
                            <div class="form-group">
                                <h4 style="color: gray;">Basic Information</h4>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-5">Scholarship Applied For:</label>
                                <div class="col-sm-7">
                                    <select size="5" id="sel">
                                        <option selected disabled>-- Select Option --</option>
                                        <option value="Option1">Option 1</option>
                                        <option value="Option2">Option 2</option>
                                        <option value="Option3">Option 3</option>		
							        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">School Year:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter S.Y (ex. 2022-2023)" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Full Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Course:</label>
                                <div class="col-sm-9">
                                    <select size="5" id="sel">
                                        <option selected disabled>-- Select Course --</option>
                                        <option value="BGT-AT">BGT-AT</option>
                                        <option value="BET-ET">BET-ET</option>			
                                        <option value="BET-ESET">BET-ESET</option>
                                        <option value="BET-COET">BET-COET</option>		
                                        <option value="BET-CT">BET-CT</option>
                                        <option value="BET-MT">BET-MT</option>
                                        <option value="BET-AD">BET-AD</option>
                                        <option value="BET-PPT">BET-PPT</option>
                                        <option value="BSIE-IA">BSIE-IA</option>		
                                        <option value="BSIE-ICT">BSIE-ICT</option>	
                                        <option value="BSCE">BSCE</option>	
                                        <option value="BSEE">BSEE</option>	
                                        <option value="BSME">BSME</option>					
							        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Phone #:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your phone number (ex. 09091234567)" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Email:</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" placeholder="Enter your email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4 style="color: gray;">Personal Information</h4>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Date of Birth:</label>
                                <div class="col-sm-8">
                                    <input type="date" class="form-control" placeholder="Enter your complete address" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">Place of Birth:</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Enter your birth place" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Age:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your age" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Sex:</label>
                                <div class="col-sm-9">
                                    <select>
                                        <option selected disabled>-- Select Sex --</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
							        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Nationality:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your nationality" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Religion:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your religion" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-5">Complete Address:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Enter your complete address" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-5">Provincial Address:</label>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" placeholder="Enter your complete provincial address" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4 style="color: gray;">Educational History</h4>
                            </div>
                            <div class="form-group">
                                <p>Elementary Level</p>
                                <label class="control-label col-sm-3">Elementary</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your name of your school" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your address of school" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">S.Y Attended</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your school year attended" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Awards</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your awards received" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <p>Junior High Level</p>
                                <label class="control-label col-sm-3">Junior High</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your name of your school" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your address of school" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">S.Y Attended</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your school year attended" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Awards</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your awards received" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <p>Senior High Level</p>
                                <label class="control-label col-sm-3">Senor High</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your name of your school" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your address of school" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">S.Y Attended</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your school year attended" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Awards</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your awards received" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-12">Have you been placed under academic probation or any given sanction for poor academics? If yes, please provide details.</label>
                                <div class="col-sm-12">
                                    <textarea type="text" class="form-control" placeholder="Type N/A if not" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-12">Have you been placed under desciplinary probation or given any sanction for misbehavior? If yes, please provide details.</label>
                                <div class="col-sm-12">
                                    <textarea type="text" class="form-control" placeholder="Type N/A if not" required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4 style="color: gray;">Family Information</h4>
                            </div>
                            <div class="form-group">
                                <p>Father's Information</p>
                                <label class="control-label col-sm-3">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your father's name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Nationality</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your father's nationality" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Occupation</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your father's occupation" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Company Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Company address (type N/A if not applicable)" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Office Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Office Number (type N/A if not applicable)" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Mobile Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your father's mobile number" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <p>Mother's Information</p>
                                <label class="control-label col-sm-3">Name</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your mother's name" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Nationality</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your mother's nationality" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Occupation</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your mother's occupation" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Company Address</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Company address (type N/A if not applicable)" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Office Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Office Number (type N/A if not applicable)" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Mobile Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your mother's mobile number" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <p>Siblings</p>
                                <label class="control-label col-sm-5">Number of Siblings</label>
                                <div class="col-sm-7">
                                    <input type="text" class="form-control" placeholder="Ex. 2 sister 3 brother" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Birth Order</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter your birth order (ex. 2nd)" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4 style="color: gray;">Medical Information</h4>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-6">Have you been hospitalized?</label>
                                <div class="col-sm-6">
                                    <select>
                                        <option selected disabled>-- Select Option --</option>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
							        </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-4">If so, for what?</label>
                                <div class="col-sm-8">
                                    <input type="text" class="form-control" placeholder="Enter your birth order (ex. 2nd)" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <h4 style="color: gray;">Essay</h4>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-12">Tell me something about yourself.</label>
                                <div class="col-sm-12">
                                    <textarea type="text" class="form-control" placeholder="..." required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-12">Why did you apply for scholarhip assistance?</label>
                                <div class="col-sm-12">
                                    <textarea type="text" class="form-control" placeholder="..." required></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <p class="control-label col-sm-12">I hereby certify that all information stated is true and correct.</p>
                            </div>
                            <div class="form-group">
                                <div class="control-label col-sm-12">
                                    <i class="waves-effect waves-light light-btn waves-input-wrapper"><input type="submit" value="Submit Form" class="waves-button-input"></i>
                                </div>
                            </div>
                        </form>
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