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
                    <a class='waves-effect btn-noti' href="_admin-idrequest.php" title="All ID Request"><i class="fa fa-id-card-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="_admin-idvalidation.php" title="All ID Validation Request"><i class="fa fa-id-card" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="_admin-goodmoral.php" title="All Good Moral Request"><i class="fa fa-user" aria-hidden="true"></i><span>5</span></a>
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
                        <li><a href="_admin-scholarship.php"><i class="fa fa-graduation-cap" aria-hidden="true"></i> Scholarship</a>
                        </li>
                        <li><a href="_admin-violation.php" class="menu-active"><i class="fa fa-ban" aria-hidden="true"></i> Violations</a>
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
                        <li class="active-bre"><a href="#"> Violations - Add Violators</a>
                        </li>
                    </ul>
                </div>

                <!--== List of Candidates ==-->
                <div id="candidatelist" class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <a href="_admin-violation.php" style="margin-right: 10px; margin-top: 10px;" class="btn btn-primary waves-light right">Go Back</a>
                                <div class="inn-title">
                                    <h4>Dates Rendered & Hours/Day Rendered</h4>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table id="myTable" class="table table-hover centered">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Last Date Modified</th>
                                                    <th>Rendered Hours or Day</th>
                                                    <th>Remaining Time</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>3</td>
                                                    <td><span class="list-enq-name">01/05/2022</span>
                                                    </td>
                                                    <td>1 Day</td>
                                                    <td>12 Days</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td><span class="list-enq-name">01/04/2022</span>
                                                    </td>
                                                    <td>1 Day</td>
                                                    <td>13 Days</td>
                                                </tr>
                                                <tr>
                                                    <td>1</td>
                                                    <td><span class="list-enq-name">01/03/2022</span>
                                                    </td>
                                                    <td>1 Day</td>
                                                    <td>14 Days</td>
                                                </tr> 
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                                    <form>
                                                        <h4>Modify Remaining Time/Days:</h4>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input  type="text" value="12 Days" class="validate">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s2">
                                                                <button type="submit" class="btn btn-info"><strong>Save</strong></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>

                                                <div class="bor">
                                                    <form>
                                                        <h4>Personal Information</h4>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input id="t5-n1" type="text" value="TUPC-18-0779"  readonly>
                                                                <label for="t5-n1">TUPC ID Number</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input id="t5-n2" type="text" value="Marsha Hogan" readonly>
                                                                <label for="t5-n2">Full Name</label>
                                                            </div>
                                                        </div>  
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input id="t5-n2" type="text" value="BSME"readonly>
                                                                <label for="t5-n2">Course</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input id="t5-n2" type="text" value="BSME 3B"  readonly>
                                                                <label for="t5-n2">Year & Section</label>
                                                            </div>
                                                        </div>
                                                        <h4>Violation Details</h4>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input id="t5-n2" type="text" value="Major Offense" readonly>
                                                                <label for="t5-n2">Offense</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input id="t5-n2" type="text" value="Threats and Coercion"  readonly>
                                                                <label for="t5-n2">Offense2</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input id="t5-n2" type="text" value="First Offense"  readonly>
                                                                <label for="t5-n2">Offense3</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input id="t5-n2" type="text" value="Suspension up to 15 school days"  readonly>
                                                                <label for="t5-n2">Offense4</label>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                                <a href="_admin-violation.php" class="btn waves-effect btn-primary"><strong>Go Back</strong></a>
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