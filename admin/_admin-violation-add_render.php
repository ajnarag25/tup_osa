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
                        <li><a href="_admin-idrequest.php"><i class="fa fa-id-card-o" aria-hidden="true"></i> Appointment Request</a>
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
                <div class="sb2-2-3" class="rendered">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp admin-form">
                                <div class="sb2-2-add-blog sb2-2-1">
                                    <h2>Add New Violator</h2>
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


                                                <?php
                                                if (isset($_GET['render_violation'])) {
                                                    
                                                ?>

                                                <div class="bor">
                                                    <form method="GET" action="process.php">
                                                        <h4>Personal Information</h4>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <input id="t5-n1" type="text" class="validate" name="studentid" value="<?php echo $_GET['studentid']?>" readonly>
                                                                <label for="t5-n1">TUPC ID Number</label>
                                                            </div>
                                                            <div class="input-field col s6">
                                                                <input id="t5-n2" type="text" class="validate" name="name" value="<?php echo $_GET['name']?>" readonly>
                                                                <label for="t5-n2">Full Name</label>
                                                            </div>
                                                        </div>  
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <select name="course" required>
                                                                    <option value= "<?php echo $_GET['course'] ?>"><?php echo $_GET['course'] ?></option>	
                                                                </select>
                                                            </div>
                                                           
                                                            <div class="input-field col s6">
                                                                <input id="t5-n2" type="text" class="validate" name="yrsection"value="<?php echo $_GET['yrsection']?>" readonly>
                                                                <label for="t5-n2">Year & Section</label>
                                                            </div>
                                                        </div>
                                                        <h4>Violation Details</h4>
                                                        <div class="row">
                                                            <div class="input-field col s6">
                                                                <select id="choices" onLoad="update()" name="offense1" value="<?php echo $_GET['offense1']?>" required>
                                                                    <option selected><?php echo $_GET['offense1']?></option>			
                                                                </select>
                                                            </div>
                                                            <div id="majorr" class="input-field col s6" hidden>
                                                                <select name="offense2" onchange="if($(this).val()=='customOption1')showCustomInput('offense2')" required>
                                                                    <option selected value = "<?php echo $_GET['offense2']?>"><?php echo $_GET['offense2']?></option>
                                                

                                                        
                                                                    <!-- <option value="Unautorized Activities/Illegal Assemblies">Unautorized Activities/Illegal Assemblies</option>			
                                                                    <option value="Deadly and Dangerous Weapons">Deadly and Dangerous Weapons</option>
                                                                    <option value="Threats/Coercion">Threats/Coercion</option>		
                                                                    <option value="Swindling">Swindling</option>
                                                                    <option value="Misuse of / Failure to Account Funds">Misuse of / Failure to Account Funds</option>
                                                                    <option value="Violence and Physical Assault/Injury">Violence and Physical Assault/Injury</option>
                                                                    <option value="Robbery/Theft">Robbery/Theft</option>
                                                                    <option value="Damage to Property">Damage to Property</option>		
                                                                    <option value="Forcible or unauthorized entry into the TUP premises">Forcible or unauthorized entry into the TUP premises</option>	
                                                                    <option value="Commission of cyber crimes as defined under R.A. No. 10175">Commission of cyber crimes as defined under R.A. No. 10175</option>	
                                                                    <option value="Slander/Libel/Gossip">Slander/Libel/Gossip</option>	
                                                                    <option value="Falsification of documents,records and credentials">Falsification of documents,records and credentials</option>
                                                                    <option value="Academic Dishonesty">Academic Dishonesty</option>
                                                                    <option value="Immoral Acts">Immoral Acts</option>		
                                                                    <option value="Gambling">Gambling</option>	    
                                                                    <option value="False representation or Misrepresentation">False representation or Misrepresentation</option>	
                                                                    <option value="Acts of Disrespect">Acts of Disrespect</option>	
                                                                    <option value="Offering or Giving Bribes">Offering or Giving Bribes</option>	
                                                                    <option value="Smoking within the University premises of any type of cigarette or tobacco product">Smoking within the University premises of any type of cigarette or tobacco product</option>	
                                                                    <option value="Littering within the University premises">Littering within the University premises</option>	
                                                                    <option value="Entering the University premises with a borrowed ID or registration form">Entering the University premises with a borrowed ID or registration form</option>	
                                                                    <option value="Lending of ID/ registration form to facilitate the entry of another student into the University premises">Lending of ID/ registration form to facilitate the entry of another student into the University premises</option>	
                                                                    <option value="Commission of the same or any minor offense for the 4th time">Commission of the same or any minor offense for the 4th time</option>				
                                                                    <option value="Commission of a major offense while under academic probation">Commission of a major offense while under academic probation</option>	
                                                                    <option value="Final conviction of any offense punishable under the Revised Penal Code, special penal laws or ordinances">Final conviction of any offense punishable under the Revised Penal Code, special penal laws or ordinances</option>	 -->
                                                                    
                                                                   
                                                                     
                                                                </select>
                                                                <input name="offense2" style="display:none;" disabled="disabled" onblur="if($(this).val()=='')showOptions('offense2')">
                                                            </div>
                                                            <div id="minorr" class="input-field col s6" hidden>
                                                                <select name="offense2" onchange="if($(this).val()=='customOption1')showCustomInput('offense2')" required>
                                                                    <option selected value = "<?php echo $_GET['offense2']?>"><?php echo $_GET['offense2']?></option>
                                                                    <!-- <option value="Loitering or causing disturbance during class hours">Loitering or causing disturbance during class hours</option> -->
                                                                    <!-- <option value="Not wearing the prescribed uniform/haircut/University identification card while inside the University premises">Not wearing the prescribed uniform/haircut/University identification card while inside the University premises</option>
                                                                    <option value="Cross dressing during uniform days and wash days">Cross dressing during uniform days and wash days</option>
                                                                    <option value="Violation of the dress code regulation or the footwear regulation during wash days">Violation of the dress code regulation or the footwear regulation during wash days</option>
                                                                    <option value="For male students, sporting of inappropriate or unwanted facial hair, as may be determined by the proper University officials">For male students, sporting of inappropriate or unwanted facial hair, as may be determined by the proper University officials</option>
                                                                    <option value="Wearing earrings for male students and multiple earrings for female students within the University premises or during school activities">Wearing earrings for male students and multiple earrings for female students within the University premises or during school activities</option>
                                                                    <option value="Wearing caps or hats inside the classroom or covered facilities">Wearing caps or hats inside the classroom or covered facilities</option>
                                                                    <option value="Entering the classroom (students from other classes) without permission from the instructor while the class is going on">Entering the classroom (students from other classes) without permission from the instructor while the class is going on</option>
                                                                    <option value="Leaving the room without permission (cutting classes) from the instructor while the class is on going">Leaving the room without permission (cutting classes) from the instructor while the class is on going</option>
                                                                    <option value="Attempting to join any fraternity, sorority or student organization that is not recognized or accredited by the University. An attempt is present when a student has signed an application form to join a fraternity, a sorority or unaccredited organization">Attempting to join any fraternity, sorority or student organization that is not recognized or accredited by the University. An attempt is present when a student has signed an application form to join a fraternity, a sorority or unaccredited organization</option>
                                                                    <option value="Posting printed materials in the University premises without prior written approval from the proper University officials">Posting printed materials in the University premises without prior written approval from the proper University officials</option>
                                                                    <option value="Using the University facilities without prior written permission from the proper University officials">Using the University facilities without prior written permission from the proper University officials</option>
                                                                    <option value="Unauthorized removal of official notices and posters from the bulletin board">Unauthorized removal of official notices and posters from the bulletin board</option>
                                                                    <option value="Possession of gambling paraphernalia">Possession of gambling paraphernalia</option>
                                                                    <option value="Unauthorized use of the cellphone,mini video / audio or other related IT gadgets/devices during classes">Unauthorized use of the cellphone,mini video / audio or other related IT gadgets/devices during classes</option>
                                                                    <option value="Irresponsible use of water and/or electricity within the University premises">Irresponsible use of water and/or electricity within the University premises</option>
                                                                    <option value="Making lewd gestures or uttering lustful word/s to offend or provoke another person or group within the campus">Making lewd gestures or uttering lustful word/s to offend or provoke another person or group within the campus</option>
                                                                    <option value="Accidental damage of property within the University premises">Accidental damage of property within the University premises</option>
                                                                    <option value="Public and indecent display of physical intimacy with another person within the University premises or during an official school activity">Public and indecent display of physical intimacy with another person within the University premises or during an official school activity</option>
                                                                    <option value="Possession of any type of cigarette or tobacco product inside the campus">Possession of any type of cigarette or tobacco product inside the campus</option> -->
                                                                    
                                                                    
                                                                </select>
                                                                <input name="offense2" style="display:none;" disabled="disabled" onblur="if($(this).val()=='')showOptions('offense2')">
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s6" >
                                                                <?php
                                                                if (isset($_GET['offense2'])) {
                                                                    $stuid =  $_GET['studentid'];
                                                                    $name = $_GET['name'];
                                                                    $otwo =$_GET['offense2'];
                                                                    $sql = "SELECT offense3 FROM violations WHERE student_id = '$stuid' AND name = '$name' AND offense2 = '$otwo' ";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    $check = mysqli_num_rows($result);
                                                                }else{
                                                                    $stuid =  $_GET['studentid'];
                                                                    $name = $_GET['name'];
                                                                    $otwo =$_GET['offense2_maj'];
                                                                    $yrsection = $_GET['yrsection'];
                                                                    $sql = "SELECT offense3 FROM violations WHERE student_id = '$stuid' AND name = '$name' AND offense2 = '$otwo'";
                                                                    $result = mysqli_query($conn, $sql);
                                                                    $check = mysqli_num_rows($result);
                                                                    
                                                                }
                                                                ?>
                                                                <?php
                                                                if ($check == 0) {
                                                                    ?>
                                                                    <select id="choices2" onLoad="update()" name="offense3" required>
                                                                        <option value="First">First Offense</option>
                                                                    </select>
                                                                <?php
                                                                }else{
                                                                ?>

                                                                <?php
                                                                $fet = mysqli_fetch_array($result);
                                                                if($fet['offense3'] == "First"){
                                                                ?>
                                                                <select id="choices2" onLoad="update()" name="offense3" required>
                                                                    <option value="Second">Second Offense</option>
                                                                </select>
                                                                <?php
                                                                }elseif($fet['offense3'] == "Second"){
                                                                ?>
                                                                <select id="choices2" onLoad="update()" name="offense3" required>
                                                                    <option value="Third">Third Offense</option>
                                                                </select>
                                                                 <?php   
                                                                }elseif($fet['offense3'] == "Third"){
                                                                ?>
                                                                <select id="choices2" onLoad="update()" name="offense3" required>
                                                                    <option value="Third">Third Offense</option>
                                                                </select>
                                                                <?php
                                                                }
                                                            }
                                                                ?>
                                                            </div>
                                                            <!-- For First offense Major-->
                                                            <div id="firstoff" class="input-field col s6" hidden>
                                                                <select name="offense4" required>
                                                                    <option selected disabled>-- Sanction (for major) --</option>
                                                                    <option value="Suspension up to 15 school days">Suspension up to 15 school days</option>
                                                                    <option value="Suspension up to 30 school days">Suspension up to 30 school days</option>
                                                                    <option value="Suspension up to 30 school days and restitution of the amount or property,if any">Suspension up to 30 school days and restitution of the amount or property,if any</option>
                                                                    <option value="Suspension up to 30 school days and restitution of the funds,if any">Suspension up to 30 school days and restitution of the funds,if any</option>
                                                                    <option value="Suspension up to 30 school days and replacement of the stolen item">Suspension up to 30 school days and replacement of the stolen item</option>
                                                                    <option value="Dismissal">Suspension up to 30 days, repair/replacement of damaged property</option>
                                                                    <option value="Suspension for one semester">Suspension for one semester</option>
                                                                    <option value="Expulsion">Expulsion</option>
                                                                    <option value="Dismissal">Dismissal</option>				
                                                                </select>
                                                            </div>
                                                            <!-- For Second offense Major-->
                                                            <div id="secondoff" class="input-field col s6" hidden>
                                                                <select name="offense4" required>
                                                                    <option selected disabled>-- Sanction (for major) --</option>
                                                                    <option value="Suspension up to 30 school days">Suspension up to 30 school days</option>
                                                                    <option value="Suspension for one semester">Suspension for one semester</option>
                                                                    <option value="Suspension for one semester and restitution of the amount or property,if any">Suspension for one semester and restitution of the amount or property,if any</option>
                                                                    <option value="Suspension for one semester and restitution of the funds,if any">Suspension for one semester and restitution of the funds,if any</option>
                                                                    <option value="Suspension for one semester and replacement of the stolen item">Suspension for one semester and replacement of the stolen item</option>
                                                                    <option value="Suspension for one semester, repair/replacement of damaged property">Suspension for one semester, repair/replacement of damaged property</option>
                                                                    <option value="Expulsion">Expulsion</option>
                                                                    <option value="Dismissal">Dismissal</option>				
                                                                </select>
                                                            </div>
                                                            <!-- For Third offense Major-->
                                                            <div id="thirdoff" class="input-field col s6" hidden>
                                                                <select name="offense4" required>
                                                                    <option selected disabled>-- Sanction (for major) --</option>
                                                                    <option value="Suspension for one semester">Suspension for one semester</option>
                                                                    <option value="Dismissal">Dismissal</option>
                                                                    <option value="Dismissal and restitution of the amount or property,if any">Dismissal and restitution of the amount or property,if any</option>
                                                                    <option value="Dismissal and restitution of the funds,if any">Dismissal and restitution of the funds,if any</option>
                                                                    <option value="Dismissal and replacement of the stolen item">Dismissal and replacement of the stolen item</option>
                                                                    <option value="Dismissal, repair/replacement of damaged property">Dismissal, repair/replacement of damaged property</option>
                                                                    <option value="Expulsion">Expulsion</option>	
                                                                </select>
                                                            </div>

                                                            <!-- For First offense Minor-->
                                                            <div id="firstoffminor" class="input-field col s6" hidden>
                                                                <select name="offense4" required>
                                                                    <option selected disabled>-- Sanction (for minor) --</option>
                                                                    <option value="Warning and a Letter of Apology">Warning and a Letter of Apology</option>
                                                                    <option value="Warning and a Letter of Apology with the understanding that the student will no longer attempt to join such organization">Warning and a Letter of Apology with the understanding that the student will no longer attempt to join such organization</option>
                                                                    <option value="Warning, a Letter of Apology and forfeiture of gambling parapher">Warning, a Letter of Apology and forfeiture of gambling parapher</option>
                                                                    <option value="Warning, a Letter of Apology and confiscation of gadget. The gadget is returned after submission of the said letter of apology">Warning, a Letter of Apology and confiscation of gadget. The gadget is returned after submission of the said letter of apology</option>
                                                                    <option value="Warning, a Letter of Apology and replacement or repair of damaged property">Warning, a Letter of Apology and replacement or repair of damaged property</option>					
                                                                </select>
                                                            </div>
                                                            <!-- For Third offense Minor-->
                                                            <div id="secondoffminor" class="input-field col s6" hidden>
                                                                <select name="offense4" required>
                                                                    <option selected disabled>-- Sanction (for minor) --</option>
                                                                    <option value="10 to 20 hours of community service">10 to 20 hours of community service</option>
                                                                    <option value="10 to 20 hours of community service and replacement or repair of  the damaged property">10 to 20 hours of community service and replacement or repair of  the damaged property</option>
                                                                </select>
                                                            </div>
                                                            <!-- For Third offense Minor-->
                                                            <div id="thirdoffminor" class="input-field col s6" hidden>
                                                                <select name="offense4" required>
                                                                    <option selected disabled>-- Sanction (for minor) --</option>
                                                                    <option value="30 to 50 hours of community service">30 to 50 hours of community service</option>
                                                                    <option value="30 to 50 hours of community service and replacement or repair of  the damaged property">30 to 50 hours of community service and replacement or repair of  the damaged property</option>
                                                                </select>
                                                            </div>
                                                            <div id="hours" class="input-field col s6" hidden>
                                                                <input id="t5-n2" type="number" class="validate" name="hours">
                                                                <label for="t5-n2">How many hours of community service ?</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <button type="submit" class="btn btn-success" name="violation"><strong>Add Violator</strong></button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                    
                                                </div>
                                                <a href="_admin-violation-add_render.php" class="btn waves-effect btn-danger"><strong>Cancel</strong></a>
                                                <?php
                                                }else{
                                                ?>
                                                    <div class="bor">

                                                        <form method="GET" action="">
                                                            <h4>Personal Information</h4>
                                                            <div class="row">
                                                                <div class="input-field col s6">
                                                                    <input id="t5-n1" type="text" class="validate" name="studentid" required>
                                                                    <label for="t5-n1">TUPC ID Number</label>
                                                                </div>
                                                                <div class="input-field col s6">
                                                                    <input id="t5-n2" type="text" class="validate" name="name" required>
                                                                    <label for="t5-n2">Full Name</label>
                                                                </div>
                                                            </div>  
                                                            <div class="row">
                                                                <div class="input-field col s6">
                                                                    <select name="course" required>
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
                                                                    <input id="t5-n2" type="text" class="validate" name="yrsection" required>
                                                                    <label for="t5-n2">Year & Section</label>
                                                                </div>
                                                            </div>
                                                            <h4>Violation Details</h4>
                                                            <div class="row">
                                                                <div class="input-field col s6">
                                                                    <select id="choices_render" onChange="update_1()" name="offense1" required>
                                                                        <option selected disabled>-- Major or Minor --</option>
                                                                        <option value="Major">Major Offense</option>
                                                                        <option value="Minor">Minor Offense</option>				
                                                                    </select>
                                                                </div>
                                                                <div id="majorr_render" class="input-field col s6" hidden>
                                                                    <select name="offense2" onchange="if($(this).val()=='customOption1')showCustomInput('offense2')" required>
                                                                        <option selected disabled>-- Select Violation (Major) --</option>
                                                                        <?php 
                                                                            $sql = "SELECT * FROM violation_data WHERE typee='major'";
                                                                            $result=mysqli_query($conn, $sql);
                                                                            $row = mysqli_num_rows($result);
                                                                            while ($row = mysqli_fetch_array($result)) {
                                                                        ?>

                                                                        <option value="<?php echo $row['violations_col'] ?>"><?php echo $row['violations_col'] ?></option>
                                                                        <!-- <option value="Unautorized Activities/Illegal Assemblies">Unautorized Activities/Illegal Assemblies</option>			
                                                                        <option value="Deadly and Dangerous Weapons">Deadly and Dangerous Weapons</option>
                                                                        <option value="Threats/Coercion">Threats/Coercion</option>		
                                                                        <option value="Swindling">Swindling</option>
                                                                        <option value="Misuse of / Failure to Account Funds">Misuse of / Failure to Account Funds</option>
                                                                        <option value="Violence and Physical Assault/Injury">Violence and Physical Assault/Injury</option>
                                                                        <option value="Robbery/Theft">Robbery/Theft</option>
                                                                        <option value="Damage to Property">Damage to Property</option>		
                                                                        <option value="Forcible or unauthorized entry into the TUP premises">Forcible or unauthorized entry into the TUP premises</option>	
                                                                        <option value="Commission of cyber crimes as defined under R.A. No. 10175">Commission of cyber crimes as defined under R.A. No. 10175</option>	
                                                                        <option value="Slander/Libel/Gossip">Slander/Libel/Gossip</option>	
                                                                        <option value="Falsification of documents,records and credentials">Falsification of documents,records and credentials</option>
                                                                        <option value="Academic Dishonesty">Academic Dishonesty</option>
                                                                        <option value="Immoral Acts">Immoral Acts</option>		
                                                                        <option value="Gambling">Gambling</option>	    
                                                                        <option value="False representation or Misrepresentation">False representation or Misrepresentation</option>	
                                                                        <option value="Acts of Disrespect">Acts of Disrespect</option>	
                                                                        <option value="Offering or Giving Bribes">Offering or Giving Bribes</option>	
                                                                        <option value="Smoking within the University premises of any type of cigarette or tobacco product">Smoking within the University premises of any type of cigarette or tobacco product</option>	
                                                                        <option value="Littering within the University premises">Littering within the University premises</option>	
                                                                        <option value="Entering the University premises with a borrowed ID or registration form">Entering the University premises with a borrowed ID or registration form</option>	
                                                                        <option value="Lending of ID/ registration form to facilitate the entry of another student into the University premises">Lending of ID/ registration form to facilitate the entry of another student into the University premises</option>	
                                                                        <option value="Commission of the same or any minor offense for the 4th time">Commission of the same or any minor offense for the 4th time</option>				
                                                                        <option value="Commission of a major offense while under academic probation">Commission of a major offense while under academic probation</option>	
                                                                        <option value="Final conviction of any offense punishable under the Revised Penal Code, special penal laws or ordinances">Final conviction of any offense punishable under the Revised Penal Code, special penal laws or ordinances</option>	 -->
                                                                        <?php
                                                                        }?>
                                                                        <option value="customOption1">[Type Specific Violation]</option>
                                                                        
                                                                    </select>
                                                                    <input name="offense2" style = "display:none;" disabled="disabled" onblur="if($(this).val()=='')showOptions('offense2_maj')">
                                                                </div>


                                                                <div id="minorr_render" class="input-field col s6" hidden>
                                                                    <select name="offense2" onchange="if($(this).val()=='customOption1')showCustomInput('offense2')" required>
                                                                        <option selected disabled>-- Select Violation (Minor) --</option>
                                                                        <?php 
                                                                            $sql = "SELECT * FROM violation_data WHERE typee='minor'";
                                                                            $result=mysqli_query($conn, $sql);
                                                                            $row = mysqli_num_rows($result);
                                                                            while ($row = mysqli_fetch_array($result)) {
                                                                        ?>

                                                                        <option value="<?php echo $row['violations_col'] ?>"><?php echo $row['violations_col'] ?></option>
                                                                        <!-- <option value="Loitering or causing disturbance during class hours">Loitering or causing disturbance during class hours</option> -->
                                                                        <!-- <option value="Not wearing the prescribed uniform/haircut/University identification card while inside the University premises">Not wearing the prescribed uniform/haircut/University identification card while inside the University premises</option>
                                                                        <option value="Cross dressing during uniform days and wash days">Cross dressing during uniform days and wash days</option>
                                                                        <option value="Violation of the dress code regulation or the footwear regulation during wash days">Violation of the dress code regulation or the footwear regulation during wash days</option>
                                                                        <option value="For male students, sporting of inappropriate or unwanted facial hair, as may be determined by the proper University officials">For male students, sporting of inappropriate or unwanted facial hair, as may be determined by the proper University officials</option>
                                                                        <option value="Wearing earrings for male students and multiple earrings for female students within the University premises or during school activities">Wearing earrings for male students and multiple earrings for female students within the University premises or during school activities</option>
                                                                        <option value="Wearing caps or hats inside the classroom or covered facilities">Wearing caps or hats inside the classroom or covered facilities</option>
                                                                        <option value="Entering the classroom (students from other classes) without permission from the instructor while the class is going on">Entering the classroom (students from other classes) without permission from the instructor while the class is going on</option>
                                                                        <option value="Leaving the room without permission (cutting classes) from the instructor while the class is on going">Leaving the room without permission (cutting classes) from the instructor while the class is on going</option>
                                                                        <option value="Attempting to join any fraternity, sorority or student organization that is not recognized or accredited by the University. An attempt is present when a student has signed an application form to join a fraternity, a sorority or unaccredited organization">Attempting to join any fraternity, sorority or student organization that is not recognized or accredited by the University. An attempt is present when a student has signed an application form to join a fraternity, a sorority or unaccredited organization</option>
                                                                        <option value="Posting printed materials in the University premises without prior written approval from the proper University officials">Posting printed materials in the University premises without prior written approval from the proper University officials</option>
                                                                        <option value="Using the University facilities without prior written permission from the proper University officials">Using the University facilities without prior written permission from the proper University officials</option>
                                                                        <option value="Unauthorized removal of official notices and posters from the bulletin board">Unauthorized removal of official notices and posters from the bulletin board</option>
                                                                        <option value="Possession of gambling paraphernalia">Possession of gambling paraphernalia</option>
                                                                        <option value="Unauthorized use of the cellphone,mini video / audio or other related IT gadgets/devices during classes">Unauthorized use of the cellphone,mini video / audio or other related IT gadgets/devices during classes</option>
                                                                        <option value="Irresponsible use of water and/or electricity within the University premises">Irresponsible use of water and/or electricity within the University premises</option>
                                                                        <option value="Making lewd gestures or uttering lustful word/s to offend or provoke another person or group within the campus">Making lewd gestures or uttering lustful word/s to offend or provoke another person or group within the campus</option>
                                                                        <option value="Accidental damage of property within the University premises">Accidental damage of property within the University premises</option>
                                                                        <option value="Public and indecent display of physical intimacy with another person within the University premises or during an official school activity">Public and indecent display of physical intimacy with another person within the University premises or during an official school activity</option>
                                                                        <option value="Possession of any type of cigarette or tobacco product inside the campus">Possession of any type of cigarette or tobacco product inside the campus</option> -->
                                                                        <?php
                                                                            }
                                                                        ?>
                                                                        <option value="customOption1">[Type Specific Violation]</option>
                                                                    </select>
                                                                    <input name="offense2" style = "display:none;" disabled="disabled" onblur="if($(this).val()=='')showOptions('offense2')">
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="input-field col s12">
                                                                    <button type="submit" class="btn btn-info" name="render_violation"><strong>Next</strong></button>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        </div>
                                                        <a href="_admin-violation.php" class="btn waves-effect btn-danger"><strong>Go Back</strong></a>
                                                <?php
                                                }
                                                ?>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-----rendered---------->
            </div>

        </div>
    </div>
    <script type="text/javascript">
        function update() {
            var select = document.getElementById('choices');
            var select2 = document.getElementById('choices2');
            var option = select.options[select.selectedIndex];
            var option2 = select2.options[select2.selectedIndex];
            // document.getElementById('try').value = option.value;
            if(option.value == "Major"){
                document.getElementById('majorr').hidden = false;
                document.getElementById('minorr').hidden = true;
                if(option2.value == "First"){
                    document.getElementById('firstoff').hidden = false;
                    document.getElementById('secondoff').hidden = true;
                    document.getElementById('thirdoff').hidden = true;

                    document.getElementById('firstoffminor').hidden = true;
                    document.getElementById('secondoffminor').hidden = true;
                    document.getElementById('thirdoffminor').hidden = true;
                    document.getElementById('hours').hidden = true;
                }
                else if(option2.value == "Second"){
                    document.getElementById('firstoff').hidden = true;
                    document.getElementById('secondoff').hidden = false;
                    document.getElementById('thirdoff').hidden = true;

                    document.getElementById('firstoffminor').hidden = true;
                    document.getElementById('secondoffminor').hidden = true;
                    document.getElementById('thirdoffminor').hidden = true;
                    document.getElementById('hours').hidden = true;
                }
                else if(option2.value == "Third"){
                    document.getElementById('firstoff').hidden = true;
                    document.getElementById('secondoff').hidden = true;
                    document.getElementById('thirdoff').hidden = false;

                    document.getElementById('firstoffminor').hidden = true;
                    document.getElementById('secondoffminor').hidden = true;
                    document.getElementById('thirdoffminor').hidden = true;
                    document.getElementById('hours').hidden = true;
                }
                else{
                    document.getElementById('firstoff').hidden = true;
                    document.getElementById('secondoff').hidden = true;
                    document.getElementById('thirdoff').hidden = true;

                    document.getElementById('firstoffminor').hidden = true;
                    document.getElementById('secondoffminor').hidden = true;
                    document.getElementById('thirdoffminor').hidden = true;
                    document.getElementById('hours').hidden = true;
                }
            }

            else if(option.value == "Minor"){
                document.getElementById('majorr').hidden = true;
                document.getElementById('minorr').hidden = false;
                if(option2.value == "First"){
                    document.getElementById('firstoffminor').hidden = false;
                    document.getElementById('secondoffminor').hidden = true;
                    document.getElementById('thirdoffminor').hidden = true;
                    document.getElementById('hours').hidden = true;

                    document.getElementById('firstoff').hidden = true;
                    document.getElementById('secondoff').hidden = true;
                    document.getElementById('thirdoff').hidden = true;
                }
                else if(option2.value == "Second"){
                    document.getElementById('firstoffminor').hidden = true;
                    document.getElementById('secondoffminor').hidden = false;
                    document.getElementById('thirdoffminor').hidden = true;
                    document.getElementById('hours').hidden = false;

                    document.getElementById('firstoff').hidden = true;
                    document.getElementById('secondoff').hidden = true;
                    document.getElementById('thirdoff').hidden = true;
                }
                else if(option2.value == "Third"){
                    document.getElementById('firstoffminor').hidden = true;
                    document.getElementById('secondoffminor').hidden = true;
                    document.getElementById('thirdoffminor').hidden = false;
                    document.getElementById('hours').hidden = false;

                    document.getElementById('firstoff').hidden = true;
                    document.getElementById('secondoff').hidden = true;
                    document.getElementById('thirdoff').hidden = true;
                }
                else{
                    document.getElementById('firstoffminor').hidden = true;
                    document.getElementById('secondoffminor').hidden = true;
                    document.getElementById('thirdoffminor').hidden = true;
                    document.getElementById('hours').hidden = true;

                    document.getElementById('firstoff').hidden = true;
                    document.getElementById('secondoff').hidden = true;
                    document.getElementById('thirdoff').hidden = true;
                }
            }
            else{
                document.getElementById('majorr').hidden = true;
                document.getElementById('minorr').hidden = true;
            }
        }
        update();

        function update_1() { 
            var select = document.getElementById('choices_render');
            var option = select.options[select.selectedIndex];
            if(option.value == "Major"){
                document.getElementById('majorr_render').hidden = false;
                document.getElementById('minorr_render').hidden = true;
            }
            else if(option.value == "Minor"){
                document.getElementById('majorr_render').hidden = true;
                document.getElementById('minorr_render').hidden = false;

            }


        }
        update_1();
        function toggle($toBeHidden, $toBeShown) {
            $toBeHidden.hide().prop('disabled', true);
            $toBeShown.show().prop('disabled', false).focus();
        }

        function showOptions(inputName) {
            var $select = $(`select[name=${inputName}]`);
            toggle($(`input[name=${inputName}]`), $select);
            $select.val(null);
        }

        function showCustomInput(inputName) {
            toggle($(`select[name=${inputName}]`), $(`input[name=${inputName}]`));
        }
        
    </script>
    <!--Import jQuery before materialize.js-->
    <script src="js/main.min.js"></script>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src="js/custom.js"></script>
</body>


</html>