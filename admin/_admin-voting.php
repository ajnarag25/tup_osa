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
                        <li><a href="_admin-verify-student.php"><i class="fa fa-user" aria-hidden="true"></i> Verify Student</a>
                        </li>
                        <li><a href="_admin-idrequest.php" ><i class="fa fa-id-card-o" aria-hidden="true"></i> ID Request</a>
                        </li>
                        <li><a href="_admin-idvalidation.php"><i class="fa fa-id-card" aria-hidden="true"></i> ID Validation</a>
                        </li>
                        <li><a href="_admin-goodmoral.php"><i class="fa fa-handshake-o" aria-hidden="true"></i> Good Moral</a>
                        </li>
                        <li><a href="_admin-voting.php" class="menu-active"><i class="fa fa-university" aria-hidden="true"></i> USG Voting</a>
                        </li>
                        <li><a href="_admin-scholarship.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Scholarship</a>
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
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <p>Current Status:</p>
                                                <input id="current" type="text" value="Close" class="validate" readonly onload="statt()">
                                            </div>
                                            <div class="input-field col s6">
                                                <p>Change Status:</p>
                                                <select id="stat" onChange="updatestat()">
                                                    <option selected disabled>-- Select Status --</option>
                                                    <option value="Open">Open</option>
                                                    <option value="Close">Close</option>				
                                                </select>
                                            </div>
                                        </div>
                                        <!-- <div class="row">
                                            <div class="input-field col s3">
                                                <button type="submit" class="btn btn-success"><strong>Save Changes</strong></button>
                                            </div>
                                        </div> -->
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>

                <!--== Add Candidate ==-->
                <div id="addcandidate" class="sb2-2-3" hidden>
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
                                                    <form>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <p>Full Name of the Candidate:</p>
                                                                <input id="t5-n2" type="text" class="validate">
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <p>Upload Image:</p>
                                                                <input id="t5-n2" type="file" class="validate">
                                                            </div>
                                                        </div>  
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <p>Course:</p>
                                                                <select>
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
                                                                <select>
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
                                                                <button type="button" class="btn btn-success"><strong>Add Candidate</strong></button>
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
                <div id="candidatelist" class="sb2-2-3" hidden>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <a href="_admin-voting-view.php" style="margin-right: 10px; margin-top: 10px;" class="btn btn-primary waves-light right">Start Voting</a>
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
                                                <tr>
                                                    <td>1</td>
                                                    <td><span class="list-img"><img src="images/user/1.png" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Marsha Hogan</span>
                                                    </td>
                                                    <td>BSME</td>
                                                    <td>President</td>
                                                    <td>0</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn waves-effect btn-danger">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><span class="list-img"><img src="images/user/2.png" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Lucas Caden</span>
                                                    </td>
                                                    <td>BSIE</td>
                                                    <td>Vice President</td>
                                                    <td>0</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn waves-effect btn-danger">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td><span class="list-img"><img src="images/user/4.png" alt=""></span>
                                                    </td>
                                                    <td><span class="list-enq-name">Ethan Oliver</span>
                                                    </td>
                                                    <td>COET</td>
                                                    <td>Secretary</td>
                                                    <td>0</td>
                                                    <td>
                                                        <div class="btn-group">
                                                            <button class="btn waves-effect btn-danger">Delete</button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
            </div>
        </div>
    </div>
    <script type="text/javascript">
        function statt(){
            var current = document.getElementById('current').value
            if(current == 'Close'){
                document.getElementById('addcandidate').hidden = true;
                document.getElementById('candidatelist').hidden = true;
            }
            else if(current == 'Open'){
                document.getElementById('addcandidate').hidden = false;
                document.getElementById('candidatelist').hidden = false;
            }
        }

        function updatestat() {
            var select = document.getElementById('stat');
            var option = select.options[select.selectedIndex];
            if(option.value == "Open"){
                document.getElementById('current').value = "Open"
                document.getElementById('addcandidate').hidden = false;
                document.getElementById('candidatelist').hidden = false;
            }
            else if(option.value == "Close"){
                document.getElementById('current').value = "Close"
                document.getElementById('addcandidate').hidden = true;
                document.getElementById('candidatelist').hidden = true;
            }
        }
        statt();
        updatestat();
    </script>
    
    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>