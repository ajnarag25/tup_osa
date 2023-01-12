<link href="css/style.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">

<?php 
    include('connection.php');
    session_start();
    date_default_timezone_set('Asia/Manila');
    // error_reporting(0);


     // logout
    if (isset($_GET['logout'])) {
        session_destroy();
        header('location:index.php');
    } 
    
    // login student
    if (isset($_POST['login_student'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $login="SELECT * FROM student WHERE username='$username'";
        $prompt = mysqli_query($conn, $login);
        $getData = mysqli_fetch_array($prompt);

        $admin="SELECT * FROM admin WHERE username='$username' AND password='$password'";
        $check = mysqli_query($conn, $admin);
        $row_check = mysqli_num_rows($check);
        $getData_admin = mysqli_fetch_array($check);

        
        $comselec="SELECT * FROM comselec WHERE username='$username' AND password='$password'";
        $check2 = mysqli_query($conn, $comselec);
        $row_check2 = mysqli_num_rows($check2);
        $getData_comselec = mysqli_fetch_array($check2);


        if (password_verify($password, $getData['password'])){
            if ($getData['status'] == 'UNVERIFIED'){
                $_SESSION['get_data'] = $getData;
                header('location:unverified.php');
            }elseif($getData['status'] == 'DENIED'){
                $_SESSION['get_data'] = $getData;
                header('location:denied.php');
            }else{
                $_SESSION['get_data'] = $getData;
                header('location:_mainss.php');
            }

        }elseif($row_check == 1){
            $_SESSION['admin_data'] = $getData_admin;
            header('location:./admin/index.php');
        }elseif($row_check2 == 1){
            $dt = date("Y-m-d")." at ".date("h:ia");
            $conn->query("INSERT INTO comselec_activity_log (date_time_login) 
                VALUES('$dt')") or die($conn->error);
            $_SESSION['admin_data'] = $getData_comselec;
            if ($password == 'comselec123') {
                header('location:./comselec/reset_redirect.php');
            }else{
                header('location:./comselec/index.php');

            }
            
        }else{
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
            $(document).ready(function(){
                    Swal.fire({
                    icon: 'error',
                    title: 'Username and/or Password is incorrect',
                    text: 'Something went wrong!',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "index.php";
                        }else{
                            window.location.href = "index.php";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }

    }

    // register student
    if (isset($_POST['register_student'])) {

        $studentid = $_POST['sid'];
        $fullname = $_POST['name'];
        $contact = $_POST['contact'];
        $course = $_POST['course'];
        $emails = $_POST['email'];
        $username = $_POST['username'];
        $pass1 = $_POST['password1'];
        $pass2 = $_POST['password2'];

        $d7 = $_POST['dbirth'];	
        $d8 = $_POST['pbirth'];	
        $d9 = $_POST['age'];	
        $d10 = $_POST['sex'];
        $d11 = $_POST['nationality'];	
        $d12 = $_POST['religion'];	
        $d13 = $_POST['address'];	
        $d14 = $_POST['paddress'];	
        $d15 = $_POST['elementary'];	
        $d16 = $_POST['e_address'];	
        $d17 = $_POST['e_syattend'];	
        $d18 = $_POST['e_awards'];	
        $d19 = $_POST['junior'];	
        $d20 = $_POST['j_address'];	
        $d21 = $_POST['j_syattend'];	
        $d22 = $_POST['j_awards'];
        $d23 = $_POST['senior'];	
        $d24 = $_POST['s_address'];	
        $d25 = $_POST['s_syattend'];	
        $d26 = $_POST['s_awards'];	
        $d27 = $_POST['f_name'];	
        $d28 = $_POST['f_nationality'];	
        $d29 = $_POST['f_occupation'];	
        $d30 = $_POST['f_company'];	
        $d31 = $_POST['f_number'];	
        $d32 = $_POST['f_contact'];	
        $d33 = $_POST['m_name'];	
        $d34 = $_POST['m_nationality'];	
        $d35 = $_POST['m_occupation'];	
        $d36 = $_POST['m_company'];	
        $d37 = $_POST['m_number'];	
        $d38 = $_POST['m_contact'];	
        $d39 = $_POST['siblings'];	
        $d40 = $_POST['birth_order'];	

        $sql = "SELECT * FROM student WHERE email='$emails' OR name='$fullname' AND student_id = '$studentid'";
        $result = mysqli_query($conn, $sql);

        if ($pass1 != $pass2){
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'error',
                    title: 'Your password does not match',
                    text: 'Please check your password',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "index.php";
                        }else{
                            window.location.href = "index.php";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }else{
            if (!$result->num_rows > 0) {
                $conn->query("INSERT INTO student (image, student_id, name, course, email, contact, dbirth, pbirth, age, sex, nationality, religion, address, paddress, elementary, e_address, e_syattend, e_awards, junior, j_address, j_syattend, j_awards, senior, s_address, s_syattend, s_awards, f_name, f_nationality, f_occupation, f_company, f_number, f_contact, m_name, m_nationality, m_occupation, m_company, m_number, m_contact, siblings, birth_order, username, password, social1, social2, otp, status) 
                VALUES('uploads/default.png','$studentid','$fullname', '$course','$emails', '$contact','$d7','$d8','$d9','$d10','$d11','$d12','$d13','$d14','$d15','$d16','$d17','$d18','$d19','$d20','$d21','$d22','$d23','$d24','$d25','$d26','$d27','$d28','$d29','$d30','$d31','$d32','$d33','$d34','$d35','$d36','$d37','$d38','$d39','$d40', '$username', '".password_hash($pass1, PASSWORD_DEFAULT)."','N/A','N/A', 0, 'UNVERIFIED')") or die($conn->error);
                include 'signup_email.php';
                ?>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        Swal.fire({
                        icon: 'success',
                        title: 'Successfully Registered',
                        text: 'Please login your credentials now',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Okay'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "index.php";
                            }else{
                                window.location.href = "index.php";
                            }
                        })
                        
                    })
            
                </script>
                <?php
            }else{
                ?>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        Swal.fire({
                        icon: 'warning',
                        title: 'User is already registered',
                        text: 'Please login your credentials now',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Okay'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "index.php";
                            }else{
                                window.location.href = "index.php";
                            }
                        })
                        
                    })
            
                </script>
                <?php
            }
        }
    }

    // forgot password
    if (isset($_POST['reset_password'])) {
        $emails = $_POST['email'];
        $_SESSION['email'] = $emails;
        $setOTP = rand(0000,9999);

        $sql = "SELECT * FROM student WHERE email='$emails'";
        $result = mysqli_query($conn, $sql);
        $check = mysqli_num_rows($result);
        if ($check == 0){
            ?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'error',
                    title: 'An error occured!',
                    text: 'We could not find your account.',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "index.php";
                        }else{
                            window.location.href = "index.php";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }else{
            $conn->query("UPDATE student SET otp=$setOTP WHERE email='$emails'") or die($conn->error);
            include 'otp_email.php';
            header("Location: verify_otp.php");
        }

    }

    // otp verify
    if (isset($_POST['otp_submit'])) {
        $otp = $_POST['otp'];
        $_SESSION['otp'] = $otp;
        $sql = "SELECT * FROM student WHERE otp='$otp'";
        $result = mysqli_query($conn, $sql);
        $check = mysqli_num_rows($result);

        if ($check == 0){
            ?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'error',
                    title: 'OTP entered is wrong!',
                    text: 'Please check your email for the OTP details',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "verify_otp.php";
                        }else{
                            window.location.href = "verify_otp.php";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }else{
            header("Location: change_pass_forgot.php");
        }
    }


    // change password
    if (isset($_POST['change_pass'])) {
        $password1 = $_POST['newpass1'];
        $password2 = $_POST['newpass2'];
        $get_otp = $_SESSION['otp'];
        
        if ($password1 != $password2){
            ?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'error',
                    title: 'Password does not match!',
                    text: 'Something went wrong',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "change_pass_forgot.php";
                        }else{
                            window.location.href = "change_pass_forgot.php";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }else{
            $conn->query("UPDATE student SET password='".password_hash($password1, PASSWORD_DEFAULT)."' WHERE otp='$get_otp'") or die($conn->error);
            ?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'success',
                    title: 'Successfully changed your password',
                    text: 'Please login your new created password account',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "index.php";
                        }else{
                            window.location.href = "index.php";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }

    }

    // change password
    if (isset($_POST['change_pass'])) {
        $password1 = $_POST['newpass1'];
        $password2 = $_POST['newpass2'];
        $get_otp = $_SESSION['otp'];
        
        if ($password1 != $password2){
            ?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'error',
                    title: 'Password does not match!',
                    text: 'Something went wrong',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "change_pass_forgot.php";
                        }else{
                            window.location.href = "change_pass_forgot.php";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }else{
            $conn->query("UPDATE student SET password='".password_hash($password1, PASSWORD_DEFAULT)."' WHERE otp='$get_otp'") or die($conn->error);
            ?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'success',
                    title: 'Successfully changed your password',
                    text: 'Please login your new created password account',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "index.php";
                        }else{
                            window.location.href = "index.php";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }

    }

    // change profile pic
    if (isset($_POST['change_profile'])) {
        $get_id = $_POST['id'];
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["profile_pic"]["tmp_name"]);

        if($check !== false) {
            $uploadOk = 1;
            if ($uploadOk == 0) {
                echo "<script type=\"text/javascript\">
                alert(\"Sorry, your file was not uploaded.\");
                window.location = \"_profile-edit.php\"
                </script>";
        } else {
        move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file);
        }
            $sql='UPDATE student SET image="'.$target_file.'" WHERE id='.$get_id.'';
            $result = mysqli_query($conn, $sql);
            header('location: _profile-edit.php');
            
        } else {
            echo "<script type=\"text/javascript\">
            alert(\"File is not an image!\");
            window.location = \"_profile-edit.php\"
            </script>";
            $uploadOk = 0;
        }
    }

    // update profile
    if (isset($_POST['update_profile'])) {
        $id_student = $_POST['id'];
        $username = $_POST['username'];
        $contact = $_POST['contact'];
        $social1 = $_POST['s1'];
        $social2 = $_POST['s2'];

        if ($id_student != null){
            $conn->query("UPDATE student SET username='$username', contact='$contact', social1='$social1', social2='$social2' WHERE id='$id_student'") or die($conn->error);
            ?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'success',
                    title: 'Successfully Update your Profile',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "_profile-dashboard.php";
                        }else{
                            window.location.href = "_profile-dashboard.php";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }else{
            ?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'error',
                    title: 'An error occured!',
                    text: 'Something Went Wrong.',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "_profile-edit.php";
                        }else{
                            window.location.href = "_profile-edit.php";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }
    }

    // change password profile
    if (isset($_POST['change_password'])) { 
        $id_pass = $_POST['id'];
        $pass1 = $_POST['newpass1'];
        $pass2 = $_POST['newpass2'];

        if ($pass1 != $pass2){
            ?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'error',
                    title: 'Password does not match!',
                    text: 'Please check your password',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "_profile-edit.php";
                        }else{
                            window.location.href = "_profile-edit.php";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }else{
            $conn->query("UPDATE student SET password='".password_hash($pass1, PASSWORD_DEFAULT)."' WHERE id='$id_pass'") or die($conn->error);
            session_destroy();
            ?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'success',
                    title: 'Successfully changed your password',
                    text: 'Please login your new created password account',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "index.php";
                        }else{
                            window.location.href = "index.php";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }

    }

    /////////////////////////////////////////////////////////// SERVICES PART ///////////////////////////////////////////////////////////////////////////

    // id request
    if (isset($_POST['id_request'])) { 
        $studentid = $_POST['studentid'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $course = $_POST['course'];
        $contact = $_POST['contact'];
        $request = $_POST['request'];
        $birthday = $_POST['birthday'];
        $contact_person = $_POST['contact_person'];
        $contact_number = $_POST['contact_number'];
        $address = $_POST['address'];
        $sched_today = date("Y/m/d");

        
        $target_dir = "uploads/";
        $target_dir_signature = "uploads/signatures/";

        $target_file_signature = $target_dir_signature . time(). basename($_FILES["signa"]["name"]);
        $uploadOk_signature = 1;
        $imageFileType_signature = strtolower(pathinfo($target_file_signature,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["signa"]["tmp_name"]);

        $target_file = $target_dir . time(). basename($_FILES["id_pic"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["id_pic"]["tmp_name"]);

        $sql = "SELECT * FROM id_request WHERE student_id='$studentid' AND name='$name' AND status='PENDING' ";
        $result = mysqli_query($conn, $sql);


        if (!$result->num_rows > 0){
            move_uploaded_file($_FILES["id_pic"]["tmp_name"], $target_file);
            move_uploaded_file($_FILES["signa"]["tmp_name"], $target_file_signature);
            if ($check == false ){
                ?>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        Swal.fire({
                        icon: 'error',
                        title: 'Uploaded file is not an image!',
                        text: 'Please upload an image format',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Okay'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "_idrequest.php";
                            }else{
                                window.location.href = "_idrequest.php";
                            }
                        })
                        
                    })
            
                </script>
                <?php
            }else{
                $conn->query("INSERT INTO id_request (student_id, name, email, req_type, course, contact, birthday, id_pic, signature, contact_person, contact_no, address, status, sched_submit, sched_claim, message) 
                VALUES('$studentid','$name','$email', '$request', '$course', '$contact', '$birthday', '$target_file', '$target_file_signature', '$contact_person', '$contact_number', '$address', 'PENDING', '$sched_today', 'PENDING', 'N/A')") or die($conn->error);
                  ?>
                  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                  <script>
                      $(document).ready(function(){
                          Swal.fire({
                          icon: 'success',
                          title: 'Successfully Submitted your Request',
                          text: 'Please proceed to the cashier for payment',
                          confirmButtonColor: '#3085d6',
                          confirmButtonText: 'Okay'
                          }).then((result) => {
                          if (result.isConfirmed) {
                              window.location.href = "_profile-dashboard.php#idreq";
                              }else{
                                  window.location.href = "_profile-dashboard.php#idreq";
                              }
                          })
                          
                      })
              
                  </script>
                  <?php
            }
        }else{
            ?>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        Swal.fire({
                        icon: 'warning',
                        title: 'You have a pending request',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Okay'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "_profile-dashboard.php#idreq";
                            }else{
                                window.location.href = "_profile-dashboard.php#idreq";
                            }
                        })
                        
                    })
            
                </script>
            <?php
        }
    }

    // id validation
    if (isset($_POST['id_validation'])) { 
        $id = $_POST['studentid'];
        $name = $_POST['name'];
        $course = $_POST['course'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $birthday = $_POST['birthday'];
        $email = $_POST['email'];
        $sched_today = date("Y/m/d");

        $sql = "SELECT * FROM id_validation WHERE student_id='$id' AND name='$name' AND status='PENDING' ";
        $result = mysqli_query($conn, $sql);

        if (!$result->num_rows > 0){
            $conn->query("INSERT INTO id_validation (student_id, name, course, contact, email, address, birthday, status, date_submit, date_claim, message) 
                VALUES('$id','$name','$course', '$contact', '$email', '$address', '$birthday', 'PENDING', '$sched_today', 'PENDING', 'N/A')") or die($conn->error);
                  ?>
                  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                  <script>
                      $(document).ready(function(){
                          Swal.fire({
                          icon: 'success',
                          title: 'Successfully Submitted your Request',
                          confirmButtonColor: '#3085d6',
                          confirmButtonText: 'Okay'
                          }).then((result) => {
                          if (result.isConfirmed) {
                              window.location.href = "_profile-dashboard.php#idval";
                              }else{
                                  window.location.href = "_profile-dashboard.php#idval";
                              }
                          })
                          
                      })
              
                  </script>
                <?php
        }else{
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'warning',
                    title: 'You have a pending request',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "_profile-dashboard.php#idval";
                        }else{
                            window.location.href = "_profile-dashboard.php#idval";
                        }
                    })
                    
                })
        
            </script>
        <?php
        }
    }

    // good moral
    if (isset($_POST['good_moral'])) { 
        $id = $_POST['studentid'];
        $name = $_POST['name'];
        $course = $_POST['course'];
        $contact = $_POST['contact'];
        $email = $_POST['email'];
        $purpose = $_POST['purpose'];
        $yr_attendance = $_POST['yrattendance'];
        $yr_graduate = $_POST['yrgraduate'];
        $sched_today = date("Y/m/d");

        $target_dir = "uploads/";
        
        $target_file = $target_dir . time(). basename($_FILES["proof"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["proof"]["tmp_name"]);

        $sql = "SELECT * FROM good_moral WHERE student_id='$id' AND name='$name' AND status='PENDING' ";
        $result = mysqli_query($conn, $sql);


        if (!$result->num_rows > 0){
            move_uploaded_file($_FILES["proof"]["tmp_name"], $target_file);
            if ($check == false ){
                ?>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        Swal.fire({
                        icon: 'error',
                        title: 'Uploaded file is not an image!',
                        text: 'Please upload an image format',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Okay'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "_goodmoral.php";
                            }else{
                                window.location.href = "_goodmoral.php";
                            }
                        })
                        
                    })
            
                </script>
                <?php
            }else{
                $conn->query("INSERT INTO good_moral (student_id, name, course, contact, email, purpose, yr_attendance, yr_graduate, proof, status, date_submit, date_claim, message) 
                VALUES('$id','$name', '$course', '$contact', '$email', '$purpose', '$yr_attendance', '$yr_graduate', '$target_file', 'PENDING', '$sched_today', 'PENDING', 'N/A')") or die($conn->error);
                  ?>
                  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                  <script>
                      $(document).ready(function(){
                          Swal.fire({
                          icon: 'success',
                          title: 'Successfully Submitted your Request',
                          text: 'Please proceed to the cashier for payment',
                          confirmButtonColor: '#3085d6',
                          confirmButtonText: 'Okay'
                          }).then((result) => {
                          if (result.isConfirmed) {
                              window.location.href = "_profile-dashboard.php#goodmor";
                              }else{
                                  window.location.href = "_profile-dashboard.php#goodmor";
                              }
                          })
                          
                      })
              
                  </script>
                  <?php
            }
        }else{
            ?>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        Swal.fire({
                        icon: 'warning',
                        title: 'You have a pending request',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Okay'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "_profile-dashboard.php#goodmor";
                            }else{
                                window.location.href = "_profile-dashboard.php#goodmor";
                            }
                        })
                        
                    })
            
                </script>
            <?php
        }

    }

    // delete id request
    if (isset($_POST['del_id_req'])) { 
        $get_email = $_POST['email'];

        if ($get_email != null){
            $conn->query("DELETE FROM id_request WHERE email='$get_email'") or die($conn->error);
            header('location:_profile-dashboard.php#idreq');

        }else{
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'error',
                    title: 'An error occured!',
                    text: 'Something Went Wrong.',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "_profile-dashboard.php#idreq";
                        }else{
                            window.location.href = "_profile-dashboard.php#idreq";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }
        
    }
    // delete id validation
    if (isset($_POST['del_id_val'])) { 
        $get_email = $_POST['email'];

        if ($get_email != null){
            $conn->query("DELETE FROM id_validation WHERE email='$get_email'") or die($conn->error);
            header('location:_profile-dashboard.php#idval');

        }else{
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'error',
                    title: 'An error occured!',
                    text: 'Something Went Wrong.',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "_profile-dashboard.php#idval";
                        }else{
                            window.location.href = "_profile-dashboard.php#idval";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }
        
    }
    // delete good moral
    if (isset($_POST['del_goodmoral'])) { 
        $get_email = $_POST['email'];

        if ($get_email != null){
            $conn->query("DELETE FROM good_moral WHERE email='$get_email'") or die($conn->error);
            header('location:_profile-dashboard.php#goodmor');

        }else{
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'error',
                    title: 'An error occured!',
                    text: 'Something Went Wrong.',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "_profile-dashboard.php#goodmor";
                        }else{
                            window.location.href = "_profile-dashboard.php#goodmor";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }
        
    }

    // delete violation
    if (isset($_POST['del_violation'])) { 
        $get_studentid = $_POST['studentid'];

        if ($get_studentid != null){
            $conn->query("DELETE FROM violations WHERE student_id='$get_studentid'") or die($conn->error);
            header('location:_profile-dashboard.php#violationss');

        }else{
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'error',
                    title: 'An error occured!',
                    text: 'Something Went Wrong.',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "_profile-dashboard.php#violationss";
                        }else{
                            window.location.href = "_profile-dashboard.php#violationss";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }
        
    }


    // submit scholarship
    if (isset($_POST['scholarship'])) { 
        $studentid = $_POST['studentid'];
        $d1 = $_POST['apply'];	
        $d2 = $_POST['school_yr'];	
        $d3 = $_POST['name'];	
        $d4 = $_POST['course'];	
        $d5 = $_POST['contact'];	
        $d6 = $_POST['email'];	
        $d7 = $_POST['dbirth'];	
        $d8 = $_POST['pbirth'];	
        $d9 = $_POST['age'];	
        $d10 = $_POST['sex'];
        $d11 = $_POST['nationality'];	
        $d12 = $_POST['religion'];	
        $d13 = $_POST['address'];	
        $d14 = $_POST['paddress'];	
        $d15 = $_POST['elementary'];	
        $d16 = $_POST['e_address'];	
        $d17 = $_POST['e_syattend'];	
        $d18 = $_POST['e_awards'];	
        $d19 = $_POST['junior'];	
        $d20 = $_POST['j_address'];	
        $d21 = $_POST['j_syattend'];	
        $d22 = $_POST['j_awards'];
        $d23 = $_POST['senior'];	
        $d24 = $_POST['s_address'];	
        $d25 = $_POST['s_syattend'];	
        $d26 = $_POST['s_awards'];	
        $d27 = $_POST['academic_probation'];	
        $d28 = $_POST['desciplinary_probation'];	
        $d29 = $_POST['f_name'];	
        $d30 = $_POST['f_nationality'];	
        $d31 = $_POST['f_occupation'];	
        $d32 = $_POST['f_company'];	
        $d33 = $_POST['f_number'];	
        $d34 = $_POST['f_contact'];	
        $d35 = $_POST['m_name'];	
        $d36 = $_POST['m_nationality'];	
        $d37 = $_POST['m_occupation'];	
        $d38 = $_POST['m_company'];	
        $d39 = $_POST['m_number'];	
        $d40 = $_POST['m_contact'];	
        $d41 = $_POST['siblings'];	
        $d42 = $_POST['birth_order'];	
        $d43 = $_POST['hospitalized'];	
        $d44 = $_POST['details'];	
        $d45 = $_POST['essay1'];	
        $d46 = $_POST['essay2'];
        $sched_today = date("Y/m/d");

        
        $sql = "SELECT * FROM scholarship WHERE email='$d6' AND status='PENDING' ";
        $result = mysqli_query($conn, $sql);

        if(!$result->num_rows > 0){
            if ($d1 == null && $d4 == null && $d10 == null && $d43 == null){
                ?>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        Swal.fire({
                        icon: 'error',
                        title: 'An Error Occured',
                        text: 'Please Provide all the Necessary Information Needed',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Okay'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "_scholarship.php";
                            }else{
                                window.location.href = "_scholarship.php";
                            }
                        })
                        
                    })
            
                </script>
                <?php
            }elseif($d1 == null || $d4 == null || $d10 == null || $d43 == null){
                ?>
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        Swal.fire({
                        icon: 'error',
                        title: 'An Error Occured',
                        text: 'Please Provide all the Necessary Information Needed',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Okay'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "_scholarship.php";
                            }else{
                                window.location.href = "_scholarship.php";
                            }
                        })
                        
                    })
            
                </script>
                <?php
            }else{
                $conn->query("INSERT INTO scholarship (student_id, apply, school_yr, name, course, contact, email, dbirth, pbirth, age, sex, nationality, religion, address, paddress, elementary, e_address, e_syattend, e_awards, junior, j_address, j_syattend, j_awards, senior, s_address, s_syattend, s_awards, academic_probation, desciplinary_probation, f_name, f_nationality, f_occupation, f_company, f_number, f_contact, m_name, m_nationality, m_occupation, m_company, m_number, m_contact, siblings, birth_order, hospitalized, details, essay1, essay2, req_date, sched_date, status, message) 
                VALUES('$studentid','$d1','$d2','$d3','$d4','$d5','$d6','$d7','$d8','$d9','$d10','$d11','$d12','$d13','$d14','$d15','$d16','$d17','$d18','$d19','$d20','$d21','$d22','$d23','$d24','$d25','$d26','$d27','$d28','$d29','$d30','$d31','$d32','$d33','$d34','$d35','$d36','$d37','$d38','$d39','$d40','$d41','$d42','$d43','$d44','$d45','$d46', '$sched_today', 'PENDING', 'PENDING', 'N/A')") or die($conn->error);
                 ?>
                 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                 <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                 <script>
                     $(document).ready(function(){
                         Swal.fire({
                         icon: 'success',
                         title: 'Successfully Submitted',
                         confirmButtonColor: '#3085d6',
                         confirmButtonText: 'Okay'
                         }).then((result) => {
                         if (result.isConfirmed) {
                             window.location.href = "_profile-dashboard.php#scho";
                             }else{
                                 window.location.href = "_profile-dashboard.php#scho";
                             }
                         })
                         
                     })
             
                 </script>
                 <?php
            }
        }else{
            ?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'warning',
                    title: 'You have a pending request',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "_profile-dashboard.php#scho";
                        }else{
                            window.location.href = "_profile-dashboard.php#scho";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }
       
    }

     // delete scholarship
     if (isset($_POST['del_scholarship'])) { 
        $get_studentid = $_POST['studentid'];

        if ($get_studentid != null){
            $conn->query("DELETE FROM scholarship WHERE student_id='$get_studentid'") or die($conn->error);
            header('location:_profile-dashboard.php#scho');

        }else{
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'error',
                    title: 'An error occured!',
                    text: 'Something Went Wrong.',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "_profile-dashboard.php#scho";
                        }else{
                            window.location.href = "_profile-dashboard.php#scho";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }
        
    }

    // usg voting form
    if (isset($_POST['submit_vote'])) {
        $studentid = $_POST['studentid'];
        $email = $_POST['email'];

        $president = $_POST['pres'];
        $vicepres = $_POST['vicepres'];
        $secretary = $_POST['sec'];
        $treasure = $_POST['treasure'];
        $senator = $_POST['senator'];
        $governor = $_POST['gov'];
        $mayor = $_POST['may'];
        $vicemayor = $_POST['vicemay'];

        $sql = "SELECT * FROM voters  WHERE student_id='$studentid' AND email='$email' ";
        $result = mysqli_query($conn, $sql);

        if (!$result->num_rows > 0){
            if ($president == null && $vicepres == null && $secretary == null && $treasure == null && $senator == null && $governor == null && $mayor == null && $vicemayor == null){
                ?>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        Swal.fire({
                        icon: 'error',
                        title: 'Please Vote a Candidate',
                        text: 'Something Went Wrong.',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Okay'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "_voting.php";
                            }else{
                                window.location.href = "_voting.php";
                            }
                        })
                        
                    })
            
                </script>
                <?php
            
            }elseif(is_null($president) || is_null($vicepres) || is_null($secretary) || is_null($treasure) || is_null($senator) || is_null($governor) || is_null($mayor) || is_null($vicemayor)){
                $store_data = array($president, $vicepres, $secretary, $treasure, $senator, $governor, $mayor, $vicemayor);

                $conn->query("INSERT INTO voters (student_id, email) 
                VALUES('$studentid', '$email')") or die($conn->error);

                foreach($store_data as $data){
                    if (is_array($data)){
                        $convert = implode(",",$data);
                        $conn->query("UPDATE candidates SET vote = vote + 1 WHERE id in($convert) ") or die($conn->error);
                        ?>
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                        <script>
                            $(document).ready(function(){
                                Swal.fire({
                                icon: 'success',
                                title: 'Successfully Submitted your Vote',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Okay'
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "_voting.php";
                                    }else{
                                        window.location.href = "_voting.php";
                                    }
                                })
                                
                            })
                    
                        </script>
                        <?php
                    }
    
                }
            }else{
                $store_data = array($president, $vicepres, $secretary, $treasure, $senator, $governor, $mayor, $vicemayor);

                $conn->query("INSERT INTO voters (student_id, email) 
                VALUES('$studentid', '$email')") or die($conn->error);

                foreach($store_data as $data){
                    if (is_array($data)){
                        $convert = implode(",",$data);
                
                        $conn->query("UPDATE candidates SET vote = vote + 1 WHERE id in($convert) ") or die($conn->error);
                        ?>
                        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                        <script>
                            $(document).ready(function(){
                                Swal.fire({
                                icon: 'success',
                                title: 'Successfully Submitted your Vote',
                                confirmButtonColor: '#3085d6',
                                confirmButtonText: 'Okay'
                                }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = "_voting.php";
                                    }else{
                                        window.location.href = "_voting.php";
                                    }
                                })
                                
                            })
                    
                        </script>
                        <?php
                    }
    
                };
                ?>
                <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
                <script>
                    $(document).ready(function(){
                        Swal.fire({
                        icon: 'success',
                        title: 'Successfully Submitted your Vote',
                        confirmButtonColor: '#3085d6',
                        confirmButtonText: 'Okay'
                        }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = "_voting.php";
                            }else{
                                window.location.href = "_voting.php";
                            }
                        })
                        
                    })
            
                </script>
                <?php
            }
        }else{
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'warning',
                    title: 'You have already voted',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "_mainss.php";
                        }else{
                            window.location.href = "_mainss.php";
                        }
                    })
                    
                })
        
            </script>
        <?php
        }
  
    }

?>