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
                        <li><a href="_admin-idrequest.php" ><i class="fa fa-id-card-o" aria-hidden="true"></i> ID Request</a>
                        </li>
                        <li><a href="_admin-idvalidation.php"><i class="fa fa-id-card" aria-hidden="true"></i> ID Validation</a>
                        </li>
                        <li><a href="_admin-goodmoral.php"><i class="fa fa-handshake-o" aria-hidden="true"></i> Good Moral</a>
                        </li>
                        <li><a href="_admin-voting.php"><i class="fa fa-university" aria-hidden="true"></i> USG Voting</a>
                        </li>
                        <li><a href="_admin-scholarship.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Scholarship</a>
                        </li>
                        <li><a href="_admin-violation.php" class="menu-active"><i class="fa fa-ban" aria-hidden="true"></i> Violations</a>
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
                        <li class="active-bre"><a href="#"> Violations - Add Violators</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp admin-form">
                                <div class="sb2-2-add-blog sb2-2-1">
                                    <h2>Update Violator</h2>
                                    <ul class="nav nav-tabs tab-list">
                                        <li class="active"><a data-toggle="tab" href="#home" aria-expanded="true"><i class="fa fa-info" aria-hidden="true"></i> <span>Details</span></a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade active in">
                                            <div class="box-inn-sp">
                                                <div class="inn-title">
                                                    <h4>Student Information</h4>
                                                </div>
                                                <div class="bor">
                                                    <form method="POST" action="process.php">
                                                        <h4>Modify Remaining Hours:</h4>
                                                        <div class="row">
                                                            <?php 
                                                                $id = $_GET['id'];
                                                                $query = "SELECT * FROM violations WHERE id='$id'";
                                                                $result = mysqli_query($conn, $query);
                                                                while ($row = mysqli_fetch_array($result)) {
                                                            ?>
                                                            <div class="input-field col s6">
                                                                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                                                                <input  type="number" placeholder="<?php echo $row['td'] ?>" value=1 min=1 name="remaining" class="validate" required>
                                                            </div>
                                                            <?php } ?>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s2">
                                                                <button type="submit" name="update_violation" class="btn btn-info"><strong>Save</strong></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="bor">
                                                    <form>
                                                        <h4>Personal Information</h4>

                                                        <?php 
                                                            $id = $_GET['id'];
                                                            $query = "SELECT * FROM violations WHERE id='$id'";
                                                            $result = mysqli_query($conn, $query);
                                                            while ($row = mysqli_fetch_array($result)) {
                                                        ?>

                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input id="t5-n1" type="text" value="<?php echo $row['student_id'] ?>"  readonly>
                                                                <label for="t5-n1">TUPC ID Number</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input id="t5-n2" type="text" value="<?php echo $row['name'] ?>" readonly>
                                                                <label for="t5-n2">Full Name</label>
                                                            </div>
                                                        </div>  
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input id="t5-n2" type="text" value="<?php echo $row['course'] ?>"readonly>
                                                                <label for="t5-n2">Course</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input id="t5-n2" type="text" value="<?php echo $row['yr_section'] ?>"  readonly>
                                                                <label for="t5-n2">Year & Section</label>
                                                            </div>
                                                        </div>
                                                        <h4>Violation Details</h4>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input id="t5-n2" type="text" value="<?php echo $row['offense1'] ?>" readonly>
                                                                <label for="t5-n2">Offense</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input id="t5-n2" type="text" value="<?php echo $row['offense2'] ?>"  readonly>
                                                                <label for="t5-n2">Offense2</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input id="t5-n2" type="text" value="<?php echo $row['offense3'] ?>"  readonly>
                                                                <label for="t5-n2">Offense3</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input id="t5-n2" type="text" value="<?php echo $row['offense4'] ?>"  readonly>
                                                                <label for="t5-n2">Offense4</label>
                                                            </div>
                                                        </div>

                                                    </form>
                                                </div>
                                                <a href="_admin-violation.php" class="btn waves-effect btn-primary"><strong>Go Back</strong></a>
                                                <a href="process.php?completed=<?php echo $row['id'] ?>" class="btn waves-effect btn-success"><strong>Mark as completed</strong></a>
                                                <?php } ?>
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
    </div>
    
    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>