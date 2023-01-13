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
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
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
                        <li><a href="_admin-idrequest.php" ><i class="fa fa-id-card-o" aria-hidden="true"></i> Appointment Request</a>
                        </li>
                        <li><a href="_admin-voting.php"><i class="fa fa-university" aria-hidden="true"></i> USG Voting</a>
                        </li>
                        <li><a href="_admin-scholarship.php" class="menu-active"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Scholarship</a>
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
                        <li ><a href="_admin-scholarship.php"> Scholarship</a>
                        </li>
                        <li class="active-bre"><a href="#"> Scholarship - Set Date</a>
                        </li>
                    </ul>
                </div>

                 <!--== Set Date ==-->
                 <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
						<div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Set Date for Student to go to the Office</h4>
                                </div>
                                <div class="tab-inn">
                                    <form method="POST" action="process.php">
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Scheduled Date:</p></strong>
                                                <input type="date" class="validate" id="dateSelect" name="date" required>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Scheduled Time:</p></strong>
                                                <select name="time" id="" class="">
                                                    <option value="8am-9am">8am-9am</option>
                                                    <option value="9am-10am">9am-10am</option>
                                                    <option value="10am-11am">10am-11am</option>
                                                    <option value="11am-12nn">11am-12nn</option>
                                                    <option value="12nn-1pm">12nn-1pm</option>
                                                    <option value="1pm-2pm">1pm-2pm</option>
                                                    <option value="3pm-4pm">3pm-4pm</option>
                                                    <option value="4pm-5pm">4pm-5pm</option>
                                                </select>
                                            </div>
                                            <div class="input-field col s12">
                                                <strong><p>Compose Message:</p></strong>
                                                <textarea name="msg_scholar_set" id="" class="form-control" cols="30" rows="5"></textarea>
                                            </div>
                                        </div>                          
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                                                <?php 
                                                    $get_id = $_GET['id'];
                                                    $query = "SELECT * FROM scholarship WHERE id='$get_id'";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <input type="hidden" name="email" value="<?php echo $row['email'] ?>">
                                                <?php } ?>
                                                <a href="_admin-scholarship.php" class="btn waves-effect btn-primary"><strong>Go Back</strong></a>
                                                <button class="btn waves-effect btn-success" name="update_scholarship"><strong>Submit</strong></button>
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
						<div class="box-inn-sp admin-form" id="scholarship_print">
                                <div class="inn-title">
                                    <h4>Student Information</h4>
                                    <br>
                                    <button class="btn btn-primary" onclick="printDiv()">Print</button>
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <?php 
                                            $id = $_GET['id'];
                                            $query = "SELECT * FROM scholarship WHERE id='$id'";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_array($result)) {
                                        ?>
                                        <div class="row">
                                            <h4>Basic Information</h4>
                                            <div class="input-field col s6">
                                                <strong><p>Scholarship Applied for: <?php echo $row['apply'] ?></p></strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>School Year:</p> <?php echo $row['school_yr'] ?></strong>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Student I.D:</p> <?php echo $row['student_id'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Full name:</p> <?php echo $row['name'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Course:</p> <?php echo $row['course'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Phone Number:</p> <?php echo $row['contact'] ?> </strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Email:</p> <?php echo $row['email'] ?> </strong>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <h4>Personal Information</h4>
                                            <div class="input-field col s6">
                                                <strong><p>Date of Birth:</p> <?php echo $row['dbirth'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Place of Birth:</p> <?php echo $row['pbirth'] ?> </strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Age:</p> <?php echo $row['age'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Sex:</p> <?php echo $row['sex'] ?> </strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Nationality:</p> <?php echo $row['nationality'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Religion:</p> <?php echo $row['religion'] ?> </strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Complete Address:</p> <?php echo $row['address'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Complete Provincial Address:</p> <?php echo $row['paddress'] ?> </strong>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <h4>Educational History</h4>
                                            <div class="input-field col s6">
                                                <strong><p>Elementary (School Name):</p> <?php echo $row['elementary'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Elementary (Address):</p> <?php echo $row['e_address'] ?> </strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Elementary (S.Y. Attended):</p> <?php echo $row['e_syattend'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Awards Received:</p> <?php echo $row['e_awards'] ?> </strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Junior High (School Name):</p> <?php echo $row['junior'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Junior High (Address):</p> <?php echo $row['j_address'] ?> </strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Junior High (S.Y. Attended):</p> <?php echo $row['j_syattend'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Awards Received:</p> <?php echo $row['j_awards'] ?> </strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Senior High (School Name):</p> <?php echo $row['senior'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Senior High (Address):</p> <?php echo $row['s_address'] ?> </strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Senior High (S.Y. Attended):</p> <?php echo $row['s_syattend'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Awards Received:</p> <?php echo $row['s_awards'] ?> </strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Have you been placed under academic probation or any given sanction for poor academics? If yes, please provide details.</p> <?php echo $row['academic_probation'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Have you been placed under desciplinary probation or given any sanction for misbehavior? If yes, please provide details.</p> <?php echo $row['desciplinary_probation'] ?> </strong>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <h4>Family Information</h4>
                                            <div class="input-field col s6">
                                                <strong><p>Father's Name:</p> <?php echo $row['f_name'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Father's Nationality:</p> <?php echo $row['f_nationality'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Father's Occupation:</p> <?php echo $row['f_occupation'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Company Address:</p> <?php echo $row['f_company'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Office Number:</p> <?php echo $row['f_number'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Father's Number:</p> <?php echo $row['f_contact'] ?> </strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Mother's Name:</p> <?php echo $row['m_name'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Mother's Nationality:</p> <?php echo $row['m_nationality'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Mother's Occupation:</p> <?php echo $row['m_occupation'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Company Address:</p> <?php echo $row['m_company'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Office Number:</p> <?php echo $row['m_number'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Mother's Number:</p> <?php echo $row['m_contact'] ?> </strong>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <strong><p>Number of Siblings:</p> <?php echo $row['siblings'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Birth Order:</p> <?php echo $row['birth_order'] ?> </strong>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <h4>Medical Information</h4>
                                            <div class="input-field col s6">
                                                <strong><p>Have you been hospitalized?</p> <?php echo $row['hospitalized'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>If so, for what?:</p> <?php echo $row['details'] ?> </strong>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="row">
                                            <h4>Essay</h4>
                                            <div class="input-field col s6">
                                                <strong><p>Tell me something about yourself.</p> <?php echo $row['essay1'] ?> </strong>
                                            </div>
                                            <div class="input-field col s6">
                                                <strong><p>Why did you apply for scholarhip assistance?</p> <?php echo $row['essay2'] ?> </strong>
                                            </div>
                                        </div>
                                        <br>
                                        <h4 class="text-center">Requirements:</h4>
                                        <br>
                                        <div class="cor about-sp h-gal ed-pho-gal">
                                            <div class="row">
                                                <div class="col text-center">
                                                    <strong><p>Certificate of Registration</p></strong>
                                                    <img class="materialboxed" style="width: 110px; height:110px;" src="../<?php echo $row['cor'] ?>" alt="">
                                                </div>
                                                <div class="col text-center">
                                                    <strong><p>Latest Grades:</p></strong>
                                                    <img class="materialboxed" style="width: 110px; height:110px;" src="../<?php echo $row['grades'] ?>" alt="">
                                                </div>
                                                <div class="col text-center">
                                                    <strong><p>Income Tax Return:</p></strong>
                                                    <img class="materialboxed" style="width: 110px; height:110px;" src="../<?php echo $row['itr'] ?>" alt="">
                                                </div>
                                                <div class="col text-center">
                                                    <strong><p>Letter of Endorsement:</p></strong>
                                                    <img class="materialboxed" style="width: 110px; height:110px;" src="../<?php echo $row['loe'] ?>" alt="">
                                                </div>
                                                <div class="col text-center">
                                                    <strong><p>Good Moral:</p></strong>
                                                    <img class="materialboxed" style="width: 110px; height:110px;" src="../<?php echo $row['gm'] ?>" alt="">
                                                </div>
                                                <div class="col text-center">
                                                    <strong><p>2x2 Picture:</p></strong>
                                                    <img class="materialboxed" style="width: 110px; height:110px;" src="../<?php echo $row['pic'] ?>" alt="">
                                                </div>
                                            </div>
                                            
                                        </div>      
            
                                    <?php } ?>
                                    </form>
                                    <iframe name="print_frame" width="0" height="0" frameborder="0" src="about:blank"></iframe>
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <a href="_admin-scholarship.php" class="btn waves-effect btn-primary"><strong>Go Back</strong></a>
                                        </div>
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
    <!-- SlimScroll -->
    <script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script>
        function printDiv() {
            window.frames["print_frame"].document.body.innerHTML = document.getElementById("scholarship_print").innerHTML;
            window.frames["print_frame"].window.focus();
            window.frames["print_frame"].window.print();
        }
    </script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script>
        $("#dateSelect").datepicker({
            showOtherMonths: true,
            selectOtherMonths: true,
            changeMonth: true,
            changeYear: true,
            showButtonPanel: true,
            dateFormat: 'yy-mm-dd',
            minDate: 0
        });
    </script>
</body>


</html>