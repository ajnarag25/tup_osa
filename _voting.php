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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
    <style>
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

    </style>
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
                                <li><a href="_profile-dashboard.php">Profile</a>
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
    

    <?php 
        $query = "SELECT * FROM usg_voting ";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result)) {

    ?>
    <!--SECTION START-->
    <?php 
        if($row['status'] == 'Open'){
        ?>
        <section>
            <div class="container">
                <div class="ed-res-bg">

                    <div class="com-sp ed-res-bg">
                        <div class="con-title">
                            <h2>Welcome to USG <span>Online Voting</span></h2>
                            <p>Below is all the list of candidates. Please vote wisely</p>
                        </div>
                   
                    </div>
                    <!-- Voting Form -->
                    <div id="votingform" class="com-sp pad-bot-20 ed-res-bg">
                        <div class="con-title">
                            <strong><h2>USG Voting <span>Form</span></h2></strong>
                        </div>
                        <div class="marketing" style="text-align: center;">
                            <div class="con-title">
                                <h2>Running for <span>President</span></h2>
                                <small><p>Please choose one president</p></small>
                            </div>
                            <!-- Three columns of text below the carousel -->
                            <div class="row text-center">
                                <?php 
                                    $query = "SELECT * FROM candidates WHERE position='President' ";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {

                                ?>
                                <div class="col-lg-4 com-sp">
                                    <img class="materialboxed bd-placeholder-img rounded-circle" width="200" height="200" src="./comselec/<?php echo $row['image'] ?>" role="img" aria-label="Placeholder: 130x130" preserveAspectRatio="xMidYMid slice" focusable="false">
                                    <p style="font-size: large; padding-top: 10px;"><strong><?php echo $row['name'] ?></strong> </p>
                                    <p><?php echo $row['course'] ?></p>
                                    <p>Partylist: <?php echo $row['partylist'] ?></p>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <form class="form-horizontal" method="POST" action="process.php">
                            <div class="form-group">
                                <label class="control-label col-sm-3">President:</label>
                                <div class="col-sm-9">
                                    <select name="pres[]">
                                    <option disabled selected>-- Select one candidate --</option>
                                    <?php 
                                        $query = "SELECT * FROM candidates WHERE position='President' ";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($result)) {

                                    ?>
                                        <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>	
                                    <?php } ?>					
                                    </select>
                         
                                </div>
                            </div>
                         
                            <div class="text-center">
                                <div class="con-title">
                                    <h2>Running for <span>Vice President</span></h2>
                                    <small><p class="text-center">Please choose one vice president</p></small>
                                </div>
                                <div class="row text-center">
                                    <?php 
                                        $query = "SELECT * FROM candidates WHERE position='Vice President' ";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($result)) {

                                    ?>
                                    <div class="col-lg-4 com-sp">
                                        <img class="materialboxed bd-placeholder-img rounded-circle" width="200" height="200" src="./comselec/<?php echo $row['image'] ?>" role="img" aria-label="Placeholder: 130x130" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <p class="text-center" style="font-size: large; padding-top: 10px; "><strong><?php echo $row['name'] ?></strong> </p>
                                        <p class="text-center"><?php echo $row['course'] ?></p>
                                        <p class="text-center">Partylist: <?php echo $row['partylist'] ?></p>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-3">Vice President:</label>
                                <div class="col-sm-9">
                                    <select name="vicepres[]">
                                        <option disabled selected>-- Select one candidate --</option>
                                        <?php 
                                            $query = "SELECT * FROM candidates WHERE position='Vice President' ";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {

                                        ?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>	
                                        <?php } ?>						
                                    </select>
                                </div>
                            </div>
                            <div class=" marketing" style="text-align: center;">
                                <div class="con-title">
                                    <h2>Running for <span>Secretary</span></h2>
                                    <small><p class="text-center">Please choose two secretary</p></small>
                                </div>
                                <div class="row text-center">
                                    <?php 
                                        $query = "SELECT * FROM candidates WHERE position='Secretary' ";
                                        $result = mysqli_query($conn, $query);
                                        while ($row = mysqli_fetch_array($result)) {

                                    ?>
                                    <div class="col-lg-4 com-sp">
                                        <img class="materialboxed bd-placeholder-img rounded-circle" width="200" height="200" src="./comselec/<?php echo $row['image'] ?>" role="img" aria-label="Placeholder: 130x130" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <p class="text-center" style="font-size: large; padding-top: 10px;"><strong><?php echo $row['name'] ?></strong> </p>
                                        <p class="text-center"><?php echo $row['course'] ?></p>
                                        <p class="text-center">Partylist: <?php echo $row['partylist'] ?></p>
                                    </div>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Secretary:</label>
                                <div class="col-sm-9">
                                    <select name="sec[]" id="limitsecretary" multiple onchange="secretary()">
                                        <option disabled >-- Select two candidate--</option>
                                        <?php 
                                            $query = "SELECT * FROM candidates WHERE position='Secretary' ";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {

                                        ?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>	
                                        <?php } ?>					
                                    </select>
                                    <span id="invalidsec" style="color:red;" hidden>Please select only two candidates</span>
                                </div>
                            </div>
                            <div class=" marketing" style="text-align: center;">
                                <div class="con-title">
                                    <h2>Running for <span>Treasurer</span></h2>
                                    <small><p class="text-center">Please choose one treasurer</p></small>
                                </div>

                                <div class="row text-center">
                                <?php 
                                    $query = "SELECT * FROM candidates WHERE position='Treasurer' ";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {

                                ?>
                                    <div class="col-lg-4 com-sp">
                                        <img class="materialboxed bd-placeholder-img rounded-circle" width="200" height="200" src="./comselec/<?php echo $row['image'] ?>" role="img" aria-label="Placeholder: 130x130" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <p class="text-center" style="font-size: large; padding-top: 10px;"><strong><?php echo $row['name'] ?></strong> </p>
                                        <p class="text-center"><?php echo $row['course'] ?></p>
                                        <p class="text-center">Partylist: <?php echo $row['partylist'] ?></p>
                                    </div>

                                <?php } ?>

                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Treasurer:</label>
                                <div class="col-sm-9">
                                    <select name="treasure[]">
                                        <option disabled selected>-- Select one candidate --</option>
                                        <?php 
                                            $query = "SELECT * FROM candidates WHERE position='Treasurer' ";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {

                                        ?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>	
                                        <?php } ?>					
                                    </select>
                                </div>
                            </div>
                            <div class=" marketing" style="text-align: center;">
                                <div class="con-title">
                                    <strong><h2>Running for <span>Senator</span></h2></strong>
                                    <small><p class="text-center">Please choose six senator</p></small>
                                </div>

                                <div class="row text-center">
                                <?php 
                                    $query = "SELECT * FROM candidates WHERE position='Senator' ";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {

                                ?>
                                    <div class="col-lg-4 com-sp">
                                        <img class="materialboxed bd-placeholder-img rounded-circle" width="200" height="200" src="./comselec/<?php echo $row['image'] ?>" role="img" aria-label="Placeholder: 130x130" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <p class="text-center" style="font-size: large; padding-top: 10px;"><strong><?php echo $row['name'] ?></strong> </p>
                                        <p class="text-center"><?php echo $row['course'] ?></p>
                                        <p class="text-center">Partylist: <?php echo $row['partylist'] ?></p>
                                    </div>
                                <?php } ?>

                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Senator:</label>
                                <div class="col-sm-9">
                                    <select name="senator[]" id="limitsix1" multiple onchange="six1()">
                                        <option disabled >-- Select six candidate--</option>
                                        <?php 
                                            $query = "SELECT * FROM candidates WHERE position='Senator' ";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {

                                        ?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>	
                                        <?php } ?>						
                                    </select>
                                    <span id="invalidsix1" style="color:red;" hidden>Please select only six candidates</span>
                                </div>
                            </div>
                            <div class=" marketing" style="text-align: center;">
                                <div class="con-title">
                                    <strong><h2>Running for <span>Governor</span></h2></strong>
                                    <small><p class="text-center">Please choose six governor</p></small>
                                </div>
                                <div class="row text-center">
                                <?php 
                                    $query = "SELECT * FROM candidates WHERE position='Governor' ";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {

                                ?>
                                    <div class="col-lg-4 com-sp">
                                        <img class="materialboxed bd-placeholder-img rounded-circle" width="200" height="200" src="./comselec/<?php echo $row['image'] ?>" role="img" aria-label="Placeholder: 130x130" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <p class="text-center" style="font-size: large; padding-top: 10px;"><strong><?php echo $row['name'] ?></strong> </p>
                                        <p class="text-center"><?php echo $row['course'] ?></p>
                                        <p class="text-center">Partylist: <?php echo $row['partylist'] ?></p>
                                    </div>
                                <?php } ?>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Governor:</label>
                                <div class="col-sm-9">
                                    <select name="gov[]" id="limitsix2" multiple onchange="six2()">
                                        <option disabled >-- Select six candidate--</option>
                                        <?php 
                                            $query = "SELECT * FROM candidates WHERE position='Governor' ";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {

                                        ?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>	
                                        <?php } ?>						
                                    </select>
                                    <span id="invalidsix2" style="color:red;" hidden>Please select only six candidates</span>
                                </div>
                            </div>
                            <div class=" marketing" style="text-align: center;">
                                <div class="con-title">
                                    <strong><h2>Running for <span>Mayor</span></h2></strong>
                                    <small><p class="text-center">Please choose six mayor</p></small>
                                </div>
                                <div class="row text-center">
                                <?php 
                                    $query = "SELECT * FROM candidates WHERE position='Mayor' ";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {

                                ?>
                                    <div class="col-lg-4 com-sp">
                                        <img class="materialboxed bd-placeholder-img rounded-circle" width="200" height="200" src="./comselec/<?php echo $row['image'] ?>" role="img" aria-label="Placeholder: 130x130" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <p class="text-center" style="font-size: large; padding-top: 10px;"><strong><?php echo $row['name'] ?></strong> </p>
                                        <p class="text-center"><?php echo $row['course'] ?></p>
                                        <p class="text-center">Partylist: <?php echo $row['partylist'] ?></p>
                                    </div>
                                <?php } ?>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Mayor:</label>
                                <div class="col-sm-9">
                                    <select name="may[]" id="limitsix3" multiple onchange="six3()">
                                        <option disabled >-- Select six candidate--</option>
                                        <?php 
                                            $query = "SELECT * FROM candidates WHERE position='Mayor' ";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {

                                        ?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>	
                                        <?php } ?>						
                                    </select>
                                    <span id="invalidsix3" style="color:red;" hidden>Please select only six candidates</span>
                                </div>
                            </div>
                            <div class=" marketing" style="text-align: center;">
                                <div class="con-title">
                                    <strong><h2>Running for <span>Vice Mayor</span></h2></strong>
                                    <small><p class="text-center">Please choose six vice senator</p></small>
                                </div>
                                <div class="row text-center">
                                <?php 
                                    $query = "SELECT * FROM candidates WHERE position='Vice Mayor' ";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {

                                ?>
                                    <div class="col-lg-4 com-sp">
                                        <img class="materialboxed bd-placeholder-img rounded-circle" width="200" height="200" src="./comselec/<?php echo $row['image'] ?>" role="img" aria-label="Placeholder: 130x130" preserveAspectRatio="xMidYMid slice" focusable="false">
                                        <p class="text-center" style="font-size: large; padding-top: 10px;"><strong><?php echo $row['name'] ?></strong> </p>
                                        <p class="text-center"><?php echo $row['course'] ?></p>
                                        <p class="text-center">Partylist: <?php echo $row['partylist'] ?></p>
                                    </div>
                                <?php } ?>
                                </div>

                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-3">Vice Mayor:</label>
                                <div class="col-sm-9">
                                    <select name="vicemay[]" id="limitsix4" multiple onchange="six4()">
                                        <option disabled >-- Select six candidate--</option>
                                        <?php 
                                            $query = "SELECT * FROM candidates WHERE position='Vice Mayor' ";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {

                                        ?>
                                            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>	
                                        <?php } ?>							
                                    </select>
                                    <span id="invalidsix4" style="color:red;" hidden>Please select only six candidates</span>
                                </div>
                            </div>
                            <div class="form-group mar-bot-0">
                                <div class="col-sm-offset-3 col-sm-9">
                                <?php 
                                    $get_email = $_SESSION['get_data']['email'];
                                    $query = "SELECT * FROM student WHERE email='$get_email' ";
                                    $result = mysqli_query($conn, $query);
                                    while ($row = mysqli_fetch_array($result)) {

                                ?>
                                <input type="hidden" value="<?php echo $row['student_id'] ?>" name="studentid">
                                <input type="hidden" value="<?php echo $row['email'] ?>" name="email">
                                <?php } ?>
                                    <button type="submit" name="submit_vote" class="waves-effect waves-light light-btn waves-input-wrapper w-100">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>    
            </div>
        </section>
    <!--SECTION END-->
    <?php
        }else{
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
        <?php
        }
    
    }
    ?>
 


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
    <script type="text/javascript">
        function secretary() {
        var valuess = $('#limitsecretary').val().length;
            if (valuess > 2){
                document.getElementById("invalidsec").hidden = false
            } else {
                document.getElementById("invalidsec").hidden = true
            }
        }

        function six1() {
        var valuess = $('#limitsix1').val().length;
            if (valuess > 6){
                document.getElementById("invalidsix1").hidden = false
            } else {
                document.getElementById("invalidsix1").hidden = true
            }
        }

        function six2() {
        var valuess = $('#limitsix2').val().length;
            if (valuess > 6){
                document.getElementById("invalidsix2").hidden = false
            } else {
                document.getElementById("invalidsix2").hidden = true
            }
        }

        function six3() {
        var valuess = $('#limitsix3').val().length;
            if (valuess > 6){
                document.getElementById("invalidsix3").hidden = false
            } else {
                document.getElementById("invalidsix3").hidden = true
            }
        }
        function six4() {
        var valuess = $('#limitsix4').val().length;
            if (valuess > 6){
                document.getElementById("invalidsix4").hidden = false
            } else {
                document.getElementById("invalidsix4").hidden = true
            }
        }
    </script>
    <script src="js/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
    
</body>

</html>