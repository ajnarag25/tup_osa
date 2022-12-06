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
    <title>TUPC OSA Services - Comselec Site</title>
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
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
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
                        $query = "SELECT * FROM comselec ";
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
                        <li><a href="index.php" class="menu-active"><i class="fa fa-university" aria-hidden="true"></i> USG Voting</a>
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
                        <li class="active-bre"><a href="#"> USG Voting</a>
                        </li>
                    </ul>
                </div>

                <!--== Status ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                        <div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Change Voting Status</h4>
                                </div>
                                <div class="tab-inn">
                                    <form method="POST" action="process.php">
                                        <div class="row">
                                            <?php 
                                                $query = "SELECT * FROM usg_voting ";
                                                $result = mysqli_query($conn, $query);
                                                while ($row = mysqli_fetch_array($result)) {

                                            ?>
                                            <div class="input-field col s6">
                                                <p>Current Status:</p>
                                                <input type="text" value="<?php echo $row['status'] ?>" readonly>
                                            </div>
                                            <div class="input-field col s6">
                                                <p>Change Status:</p>
                                                <select name="stat" required>
                                                    <option selected disabled value="">-- Select Status --</option>
                                                    <option value="Open">Open</option>
                                                    <option value="Close">Close</option>				
                                                </select>
                                            </div>
                                            <button type="submit" name="change_stat" class="btn btn-primary">Change Status</button>

                                            <?php } ?>
                                        </div>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                
                    <?php 
                        $query = "SELECT * FROM usg_voting ";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {

                    ?>
                <?php 
                    if($row['status'] == 'Close'){
                    ?>
                    <div class="sb2-2-3" >
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box-inn-sp admin-form">
                                    <div class="sb2-2-add-blog sb2-2-1">
                                        <div class="text-center">
                                            <h2>USG VOTING IS CLOSED</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               <?php } else{
                ?>
                <!--== Add Candidate ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp admin-form">
                                <div class="sb2-2-add-blog sb2-2-1">
                                    <h2>Add New Candidate</h2>
                                    <ul class="nav nav-tabs tab-list">
                                        <li class="active"><a data-toggle="tab" href="#home" aria-expanded="true"><i class="fa fa-info" aria-hidden="true"></i> <span>Details</span></a>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade active in">
                                            <div class="box-inn-sp">
                                                <div class="inn-title">
                                                    <h4>Candidate Information</h4>
                                                </div>
                                                <div class="bor">
                                                    <form method="POST" action="process.php" enctype="multipart/form-data">
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <p>Full Name of the Candidate:</p>
                                                                <input id="t5-n2" type="text" name="names" class="validate" required>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <p>Upload Image:</p>
                                                                <input id="t5-n2" type="file" name="pic" class="validate" required>
                                                            </div>
                                                        </div>  
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <p>Course:</p>
                                                                <select name="course" value="" required>
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
                                                            <div class="input-field col s6">
                                                                <p>Position:</p>
                                                                <select name="position" value="" required>
                                                                    <option selected disabled>-- Select Position --</option>
                                                                    <option value="President">President</option>
                                                                    <option value="Vice President">Vice President</option>
                                                                    <option value="Secretary">Secretary</option>
                                                                    <option value="Treasurer">Treasurer</option>
                                                                    <option value="Senator">Senator</option>
                                                                    <option value="Governor">Governor</option>
                                                                    <option value="Mayor">Mayor</option>
                                                                    <option value="Vice Mayor">Vice Mayor</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s3">
                                                                <button type="submit" class="btn btn-success" name="candidate"><strong>Add Candidate</strong></button>
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
                </div>

                <!--== List of Candidates ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>List of Candidates</h4>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table id="myTable" class="table table-hover centered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Picture</th>
                                                    <th>Full Name</th>
                                                    <th>Course</th>
                                                    <th>Position</th>
                                                    <th>Vote Count</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $query = "SELECT * FROM candidates";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id'] ?></td>
                                                    <td><span class="list-img"><img src="<?php echo $row['image'] ?>" alt=""></span></td>
                                                    <td><span class="list-enq-name"><?php echo $row['name'] ?></span></td>
                                                    <td><?php echo $row['course'] ?></td>
                                                    <td><?php echo $row['position'] ?></td>
                                                    <td><?php echo $row['vote'] ?></td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <a href="_admin-voting-delete.php?id=<?php echo $row['id'] ?>" style="color:white" class="btn waves-effect btn-danger">Delete</a>
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
                </div>

                  <!--== List of Voters ==-->
                  <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <a href="_admin-voting-reset.php" style="margin-right: 10px; margin-top: 15px;" class="btn btn-primary waves-light right">Reset Voters</a>
                                <div class="inn-title">
                                    <h4>Voters</h4>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table id="myTable" class="table table-hover centered">
                                            <thead>
                                                <tr>
                                                    <th>Student I.D</th>
                                                    <th>Email</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $query = "SELECT * FROM voters";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['student_id'] ?></td>
                                                    <td><?php echo $row['email'] ?></td>
                                                    <td>VOTED</td>
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
                <?php } } ?>
        
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