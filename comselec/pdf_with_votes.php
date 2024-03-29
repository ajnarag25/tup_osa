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


                
                    <?php 
                        $query = "SELECT * FROM usg_voting ";
                        $result = mysqli_query($conn, $query);
                        while ($row = mysqli_fetch_array($result)) {

                    ?>
                <br>
                <button class="btn btn-primary" id  = "download" >Download PDF</button>
                <!--== List of Candidates President ==-->
                <div id = "invoice">
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>List of Candidates(President)</h4>
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
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $query = "SELECT * FROM candidates  WHERE POSITION = 'president' order by vote desc";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id'] ?></td>
                                                    <td><span class="list-img"><img src="../comselec/<?php echo $row['image'] ?>" alt=""></span></td>
                                                    <td><span class="list-enq-name"><?php echo $row['name'] ?></span></td>
                                                    <td><?php echo $row['course'] ?></td>
                                                    <td><?php echo $row['position'] ?></td>
                                                    <td><?php echo $row['vote'] ?></td>
                                                    
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

                <!--== List of Candidates Vice President ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>List of Candidates(Vice President)</h4>
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
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $query = "SELECT * FROM candidates  WHERE POSITION = 'vice president' order by vote desc";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id'] ?></td>
                                                    <td><span class="list-img"><img src="../comselec/<?php echo $row['image'] ?>" alt=""></span></td>
                                                    <td><span class="list-enq-name"><?php echo $row['name'] ?></span></td>
                                                    <td><?php echo $row['course'] ?></td>
                                                    <td><?php echo $row['position'] ?></td>
                                                    <td><?php echo $row['vote'] ?></td>
                                                   
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



                <!--== List of Candidates Secretary ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>List of Candidates(Secretary)</h4>
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
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $query = "SELECT * FROM candidates  WHERE POSITION = 'secretary' order by vote desc";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id'] ?></td>
                                                    <td><span class="list-img"><img src="../comselec/<?php echo $row['image'] ?>" alt=""></span></td>
                                                    <td><span class="list-enq-name"><?php echo $row['name'] ?></span></td>
                                                    <td><?php echo $row['course'] ?></td>
                                                    <td><?php echo $row['position'] ?></td>
                                                    <td><?php echo $row['vote'] ?></td>
                                                   
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


                <!--== List of Candidates Treasurer ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>List of Candidates(Treasurer)</h4>
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
                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $query = "SELECT * FROM candidates  WHERE POSITION = 'treasurer' order by vote desc";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id'] ?></td>
                                                    <td><span class="list-img"><img src="../comselec/<?php echo $row['image'] ?>" alt=""></span></td>
                                                    <td><span class="list-enq-name"><?php echo $row['name'] ?></span></td>
                                                    <td><?php echo $row['course'] ?></td>
                                                    <td><?php echo $row['position'] ?></td>
                                                    <td><?php echo $row['vote'] ?></td>
                                                    
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

                <!--== List of Candidates Senator ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>List of Candidates(Senator)</h4>
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
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $query = "SELECT * FROM candidates  WHERE POSITION = 'senator' order by vote desc";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id'] ?></td>
                                                    <td><span class="list-img"><img src="../comselec/<?php echo $row['image'] ?>" alt=""></span></td>
                                                    <td><span class="list-enq-name"><?php echo $row['name'] ?></span></td>
                                                    <td><?php echo $row['course'] ?></td>
                                                    <td><?php echo $row['position'] ?></td>
                                                    <td><?php echo $row['vote'] ?></td>
                                                    
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


                <!--== List of Candidates Governor ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>List of Candidates(Governor)</h4>
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
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $query = "SELECT * FROM candidates  WHERE POSITION = 'governor' order by vote desc";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id'] ?></td>
                                                    <td><span class="list-img"><img src="../comselec/<?php echo $row['image'] ?>" alt=""></span></td>
                                                    <td><span class="list-enq-name"><?php echo $row['name'] ?></span></td>
                                                    <td><?php echo $row['course'] ?></td>
                                                    <td><?php echo $row['position'] ?></td>
                                                    <td><?php echo $row['vote'] ?></td>
                                                    
                                                    
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

                <!--== List of Candidates Mayor ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>List of Candidates(Mayor)</h4>
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
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $query = "SELECT * FROM candidates  WHERE POSITION = 'mayor' order by vote desc";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id'] ?></td>
                                                    <td><span class="list-img"><img src="../comselec/<?php echo $row['image'] ?>" alt=""></span></td>
                                                    <td><span class="list-enq-name"><?php echo $row['name'] ?></span></td>
                                                    <td><?php echo $row['course'] ?></td>
                                                    <td><?php echo $row['position'] ?></td>
                                                    <td><?php echo $row['vote'] ?></td>
                                                    
                                                   
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

                <!--== List of Candidates Vice Mayor ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>List of Candidates(Vice Mayor)</h4>
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
                                                
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $query = "SELECT * FROM candidates  WHERE POSITION = 'vice mayor' order by vote desc";
                                                    $result = mysqli_query($conn, $query);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['id'] ?></td>
                                                    <td><span class="list-img"><img src="../comselec/<?php echo $row['image'] ?>" alt=""></span></td>
                                                    <td><span class="list-enq-name"><?php echo $row['name'] ?></span></td>
                                                    <td><?php echo $row['course'] ?></td>
                                                    <td><?php echo $row['position'] ?></td>
                                                    <td><?php echo $row['vote'] ?></td>
                                                    
                                                   
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
                </div>
                

            
        
                <?php  } ?>
        
            </div>
        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
    <script src = "pdf_with_votes.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
</body>


</html>