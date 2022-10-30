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
                        <li><a href="_admin-idvalidation.php"><i class="fa fa-id-card" aria-hidden="true"></i> ID Validation</a>
                        </li>
                        <li><a href="_admin-goodmoral.php"><i class="fa fa-handshake-o" aria-hidden="true"></i> Good Moral</a>
                        </li>
                        <li><a href="_admin-voting.php"><i class="fa fa-university" aria-hidden="true"></i> USG Voting</a>
                        </li>
                        <li><a href="_admin-scholarship.php"  class="menu-active"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Scholarship</a>
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
                        <li><a href="index.php"><i class="fa fa-home" aria-hidden="true"></i> Home /</a>
                        </li>
                        <li ><a href="_admin-scholarship.php"> Scholarship</a>
                        </li>
                        <li class="active-bre"><a href="#"> Scholarship - View Info</a>
                        </li>
                    </ul>
                </div>

                 <!--== Checklist ==-->
                 <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Requirements Checklist</h4>
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s3">
                                                <strong><p>Duly Accomplished application form</p></strong>
                                                <select type="" placeholder="Duly" class="validate" required>
                                                        <option value="No" selected>No</option>
                                                        <option value="Yes">Yes</option>                  
                                                </select>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Endorsement from the Shop Adviser/Previous Professor in the campus</p></strong>
                                                <select type="" placeholder="Duly" class="validate" required>
                                                        <option value="No" selected>No</option>
                                                        <option value="Yes">Yes</option>               
                                                </select>
                                            </div>
                                            <div class="input-field col s12">
                                                <strong><p>Certified True Copy of Evaluation of Grades (for students with atleast one semester residency) or High School Card (Form-138)(for new students)</p></strong>
                                                <select type="" placeholder="Duly" class="validate" required>
                                                        <option value="No" selected>No</option>
                                                        <option value="Yes">Yes</option>                  
                                                </select>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Latest income Tax Return / Certificate of non-filing of ITR</p></strong>
                                                <select type="" placeholder="Duly" class="validate" required>
                                                        <option value="No" selected>No</option>
                                                        <option value="Yes">Yes</option>                  
                                                </select>
                                            </div>
                                            <div class="input-field col s3">
                                                <strong><p>2x2 Picture(1pc)</p></strong>
                                                <select type="" placeholder="Duly" class="validate" required>
                                                        <option value="No" selected>No</option>
                                                        <option value="Yes">Yes</option>                  
                                                </select>
                                            </div>
                                            <div class="input-field col s3">
                                                <strong><p>Photocopy of Latest Registration Form</p></strong>
                                                <select type="" placeholder="Duly" class="validate" required>
                                                        <option value="No" selected>No</option>
                                                        <option value="Yes">Yes</option>                  
                                                </select>
                                            </div>
                                        </div>                        
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <a href="_admin-scholarship.php" class="btn waves-effect btn-primary"><strong>Go Back</strong></a>
                                                <button class="btn waves-effect btn-success"><strong>Save Changes</strong></button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!--== View Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Student Information</h4>
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            <h4>Basic Information</h4>
                                            <div class="input-field col s6">
                                                <strong><p>Scholarship Applied for:</p></strong>
                                                <input type="text" value="Tuition" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>School Year:</p></strong>
                                                <input id="name" type="text" value="2022-2023" class="validate" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Full name:</p></strong>
                                                <input id="name" type="text" value="Juan Dela Cruz" class="validate" required>
                                                <label class="">Enter your full name</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Course:</p></strong>
                                                <input type="text" value="BET-AT" class="validate">
                                                <label class="">Enter your course</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Course:</p></strong>
                                                <input type="text" value="BET-AT" class="validate">
                                                <label class="">Enter your course</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Phone Number:</p></strong>
                                               <input type="number" value="09985752412" class="validate" required>
                                               <label class="">Enter your phone number</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Email:</p></strong>
                                                <input type="email" class="validate" value="john_smith@gmail.com" required>
                                                <label class="">Enter your email</label>
                                            </div>
                                        </div>   
                                        
                                        <div class="row">
                                            <h4>Personal Information</h4>
                                            <div class="input-field col s6">
                                                <strong><p>Date of Birth:</p></strong>
                                               <input type="text" value="03/01/2000" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Place of Birth:</p></strong>
                                                <input type="text" value="Imus Cavite" class="validate">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Age:</p></strong>
                                               <input type="text" value="22" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Sex:</p></strong>
                                                <input type="text" value="Male" class="validate">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Nationality:</p></strong>
                                               <input type="text" value="Filipino" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Religion:</p></strong>
                                                <input type="text" value="Roman Catholic" class="validate">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Complete Address:</p></strong>
                                               <input type="text" value="Blk12 Lot12, Imus, Cavite" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Complete Provincial Address:</p></strong>
                                                <input type="text" value="Blk12 Lot12, Imus, Cavite" class="validate">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <h4>Educational History</h4>
                                            <div class="input-field col s6">
                                                <strong><p>Elementary (School Name):</p></strong>
                                               <input type="text" value="Bucandala Elementary School" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Elementary (Address):</p></strong>
                                               <input type="text" value="Bucandala 1, City of Imus, Cavite" class="validate" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Elementary (S.Y. Attended):</p></strong>
                                               <input type="text" value="2006-2012" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Awards Received:</p></strong>
                                               <input type="text" value="With Honors" class="validate" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Junior High (School Name):</p></strong>
                                               <input type="text" value="Imus National High School" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Junior High (Address):</p></strong>
                                               <input type="text" value="Bucandala 1, City of Imus, Cavite" class="validate" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Junior High (S.Y. Attended):</p></strong>
                                               <input type="text" value="2012-2016" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Awards Received:</p></strong>
                                               <input type="text" value="With Honors" class="validate" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Senior High (School Name):</p></strong>
                                               <input type="text" value="Gen. Pantaleon Garcia Senior School" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Senior High (Address):</p></strong>
                                               <input type="text" value="Bucandala 1, City of Imus, Cavite" class="validate" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Senior High (S.Y. Attended):</p></strong>
                                               <input type="text" value="2016-2018" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Awards Received:</p></strong>
                                               <input type="text" value="With Honors" class="validate" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Have you been placed under academic probation or any given sanction for poor academics? If yes, please provide details.</p></strong>
                                               <textarea type="text" class="validate" required>No po</textarea>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Have you been placed under desciplinary probation or given any sanction for misbehavior? If yes, please provide details.</p></strong>
                                               <textarea type="text" class="validate" required>No po</textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h4>Family Information</h4>
                                            <div class="input-field col s6">
                                                <strong><p>Father's Name:</p></strong>
                                               <input type="text" value="John Dela Cruz" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Father's Nationality:</p></strong>
                                               <input type="text" value="Filipino" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Father's Highest Educational Attainment:</p></strong>
                                               <input type="text" value="College Level" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Father's Occupation:</p></strong>
                                               <input type="text" value="None" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Company Address:</p></strong>
                                               <input type="text" value="N/A" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Office Number:</p></strong>
                                               <input type="text" value="N/A" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Father's Number:</p></strong>
                                               <input type="text" value="09092566294" class="validate" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Mother's Name:</p></strong>
                                               <input type="text" value="Juana Dela Cruz" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Mother's Nationality:</p></strong>
                                               <input type="text" value="Filipino" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Mother's Highest Educational Attainment:</p></strong>
                                               <input type="text" value="College Level" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Mother's Occupation:</p></strong>
                                               <input type="text" value="None" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Company Address:</p></strong>
                                               <input type="text" value="N/A" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Office Number:</p></strong>
                                               <input type="text" value="N/A" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Mother's Number:</p></strong>
                                               <input type="text" value="09062655924" class="validate" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Number of Siblings:</p></strong>
                                               <input type="text" value="4" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Birth Order:</p></strong>
                                               <input type="text" value="2nd" class="validate" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h4>Medical Information</h4>
                                            <div class="input-field col s6">
                                                <strong><p>Have you been hospitalized?</p></strong>
                                               <input type="text" value="Yes" class="validate" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>If so, for what?:</p></strong>
                                               <input type="text" value="Dengue" class="validate" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <h4>Essay</h4>
                                            <div class="input-field col s6">
                                                <strong><p>Tell me something about yourself.</p></strong>
                                               <textarea type="text" class="validate" required>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</textarea>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Why did you apply for scholarhip assistance?</p></strong>
                                               <textarea type="text" class="validate" required>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</textarea>
                                            </div>
                                        </div>                                  
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <a href="_admin-scholarship.php" class="btn waves-effect btn-primary"><strong>Go Back</strong></a>
                                                <button class="btn waves-effect btn-success" hidden><strong>Click this if Student Received his/her Scholarship</strong></button>
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