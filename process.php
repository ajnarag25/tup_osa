<link href="css/style.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">

<?php 
    include('connection.php');
    session_start();
    error_reporting(0);

    // login student
    if (isset($_POST['login_student'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $login="SELECT * FROM student WHERE username='$username'";
        $prompt = mysqli_query($conn, $login);
        $getData = mysqli_fetch_array($prompt);

        if (password_verify($password, $getData['password'])){
            $_SESSION['get_data'] = $getData;
            header('location:_mainss.php');
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
        $email = $_POST['email'];
        $username = $_POST['username'];
        $pass1 = $_POST['password1'];
        $pass2 = $_POST['password2'];

        $sql = "SELECT * FROM student WHERE email='$email' OR name='$fullname' AND student_id = '$studentid'";
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
                $conn->query("INSERT INTO student (image, student_id, name, course, email, contact, username, password, social1, social2, otp) 
                VALUES('uploads/default.png','$studentid','$fullname', '$course','$email', '$contact', '$username', '".password_hash($pass1, PASSWORD_DEFAULT)."','N/A','N/A', 0)") or die($conn->error);
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
        $address = $_POST['address'];
        $sched_today = date("Y/m/d");

        
        $target_dir = "uploads/";
        
        $target_file = $target_dir . time(). basename($_FILES["id_pic"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["id_pic"]["tmp_name"]);

        $sql = "SELECT * FROM id_request WHERE student_id='$studentid' AND name='$name' AND status='PENDING' ";
        $result = mysqli_query($conn, $sql);


        if (!$result->num_rows > 0){
            move_uploaded_file($_FILES["id_pic"]["tmp_name"], $target_file);
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
                $conn->query("INSERT INTO id_request (student_id, name, email, req_type, course, contact, birthday, id_pic, contact_person, address, status, sched_submit, sched_claim) 
                VALUES('$studentid','$name','$email', '$request', '$course', '$contact', '$birthday', '$target_file', '$contact_person', '$address', 'PENDING', '$sched_today', 'PENDING')") or die($conn->error);
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


?>