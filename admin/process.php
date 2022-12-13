<?php 
include('connection.php');
// error_reporting(0);

// LOGOUT
if (isset($_GET['logout'])) {
    session_destroy();
    header('location:../index.php');
} 

// ID REQUEST
if (isset($_POST['update_sched_claim'])) {
    $id = $_POST['id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $emails = $_POST['email'];
    $messages = $_POST['msg_idrequest_set'];
    
    if($id == null){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'An Error Occured',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-idrequest.php";
                    }else{
                        window.location.href = "_admin-idrequest.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE id_request SET status='ONGOING', sched_claim='$date $time', message='$messages' WHERE id='$id'") or die($conn->error);
        include '_admin_idrequest_setdate_email.php'
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully Set Schedule',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-idrequest.php";
                    }else{
                        window.location.href = "_admin-idrequest.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }

}

if (isset($_POST['received'])) {
    $id = $_POST['id'];

    if($id == null){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'An Error Occured',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-idrequest.php";
                    }else{
                        window.location.href = "_admin-idrequest.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE id_request SET status='SUCCESS' WHERE id='$id'") or die($conn->error);
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully Updated the Status',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-idrequest.php";
                    }else{
                        window.location.href = "_admin-idrequest.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }


}

if (isset($_POST['decline_id'])) {
    $id = $_POST['id'];
    $emails = $_POST['email'];
    $messages = $_POST['msg_idrequest_decline'];

    if($id == null){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'An Error Occured',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-idrequest.php";
                    }else{
                        window.location.href = "_admin-idrequest.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE id_request SET status='DECLINED', sched_claim='N/A', message='$messages' WHERE id='$id'") or die($conn->error);
        include '_admin_idrequest_decline_email.php'
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully Declined the Request',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-idrequest.php";
                    }else{
                        window.location.href = "_admin-idrequest.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }
}


// ID VALIDATION
if (isset($_POST['update_idvalidate'])) {
    $id = $_POST['id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $emails = $_POST['email'];
    $messages = $_POST['msg_idvalidate_set'];
    
    if($id == null){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'An Error Occured',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-idvalidate.php";
                    }else{
                        window.location.href = "_admin-idvalidate.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE id_validation SET status='ONGOING', date_claim='$date $time', message='$messages' WHERE id='$id'") or die($conn->error);
        include '_admin_idvalidate_setdate_email.php'
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully Set Schedule',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-idvalidation.php";
                    }else{
                        window.location.href = "_admin-idvalidation.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }

}

if(isset($_GET['done'])){
    $id = $_GET['done'];

    if($id == null){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'An Error Occured',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-idvalidate.php";
                    }else{
                        window.location.href = "_admin-idvalidate.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE id_validation SET status='SUCCESS' WHERE id='$id'") or die($conn->error);
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully Updated the Status',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-idvalidation.php";
                    }else{
                        window.location.href = "_admin-idvalidation.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }
}

if (isset($_POST['decline_id_validation'])) {
    $id = $_POST['id'];
    $emails = $_POST['email'];
    $messages = $_POST['msg_idvalidate_decline'];

    if($id == null){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'An Error Occured',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-idrequest.php";
                    }else{
                        window.location.href = "_admin-idrequest.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE id_validation SET status='DECLINED', date_claim='N/A', message='$messages' WHERE id='$id'") or die($conn->error);
        include '_admin_idvalidate_decline_email.php'
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully Declined the Validation Request',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-idvalidation.php";
                    }else{
                        window.location.href = "_admin-idvalidation.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }
}


// GOOD MORAL
if (isset($_POST['update_goodmoral'])) {
    $id = $_POST['id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $emails = $_POST['email'];
    $messages = $_POST['msg_goodmoral_set'];
    
    if($id == null){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'An Error Occured',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-goodmoral.php";
                    }else{
                        window.location.href = "_admin-goodmoral.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE good_moral SET status='ONGOING', date_claim='$date $time', message='$messages' WHERE id='$id'") or die($conn->error);
        include '_admin_goodmoral_setdate_email.php'
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully Set Schedule',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-goodmoral.php";
                    }else{
                        window.location.href = "_admin-goodmoral.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }

}

if (isset($_POST['received_goodmoral'])) {
    $id = $_POST['id'];

    if($id == null){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'An Error Occured',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-goodmoral.php";
                    }else{
                        window.location.href = "_admin-goodmoral.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE good_moral SET status='SUCCESS' WHERE id='$id'") or die($conn->error);
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully Updated the Status',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-goodmoral.php";
                    }else{
                        window.location.href = "_admin-goodmoral.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }


}

if (isset($_POST['decline_goodmoral'])) {
    $id = $_POST['id'];
    $emails = $_POST['email'];
    $messages = $_POST['msg_goodmoral_decline'];

    if($id == null){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'An Error Occured',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-goodmoral.php";
                    }else{
                        window.location.href = "_admin-goodmoral.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE good_moral SET status='DECLINED', date_claim='N/A', message='$messages' WHERE id='$id'") or die($conn->error);
        include '_admin_goodmoral_decline_email.php'
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully Declined the Good Moral Request',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-goodmoral.php";
                    }else{
                        window.location.href = "_admin-goodmoral.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }
}

// VIOLATIONS
if (isset($_POST['violation'])) {
    $studentid = $_POST['studentid'];
    $names = $_POST['name'];
    $course = $_POST['course'];
    $yrsection = $_POST['yrsection'];
    $o1 = $_POST['offense1'];
    $o2 = $_POST['offense2'];
    $o3 = $_POST['offense3'];
    $o4 = $_POST['offense4'];
    $hrs = $_POST['hours'];

    $sql = "SELECT * FROM violations WHERE student_id = '$studentid' AND name = '$names' AND course = '$course' AND yr_section = '$yrsection'";
    $result = mysqli_query($conn, $sql);
    $check = mysqli_num_rows($result);

    if ($check == 1){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'Student already added',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-violation.php";
                    }else{
                        window.location.href = "_admin-violation.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }elseif($course == null && $o1 == null && $o2 == null && $o3 == null && $o4 == null ){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'An Error Occured',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-violation.php";
                    }else{
                        window.location.href = "_admin-violation.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }elseif($course == null || $o1 == null || $o2 == null || $o3 == null || $o4 == null ){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'An Error Occured',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-violation.php";
                    }else{
                        window.location.href = "_admin-violation.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        if($hrs == null){
            $conn->query("INSERT INTO violations (student_id, name, course, yr_section, offense1, offense2, offense3, offense4, td, status) 
            VALUES('$studentid', '$names', '$course', '$yrsection', '$o1', '$o2', '$o3', '$o4', 0, 'ONGOING')") or die($conn->error);
            ?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'success',
                    title: 'Successfully Added',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "_admin-violation.php";
                        }else{
                            window.location.href = "_admin-violation.php";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }else{
            $conn->query("INSERT INTO violations (student_id, name, course, yr_section, offense1, offense2, offense3, offense4, td, status) 
            VALUES('$studentid', '$names', '$course', '$yrsection', '$o1', '$o2', '$o3', '$o4', '$hrs', 'ONGOING')") or die($conn->error);
            ?>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'success',
                    title: 'Successfully Added',
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'Okay'
                    }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "_admin-violation.php";
                        }else{
                            window.location.href = "_admin-violation.php";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }

    }

}   

if (isset($_POST['update_violation'])) {
    $getid = $_POST['id'];
    $remain = $_POST['remaining'];

    $sql = "SELECT * FROM violations WHERE td <= 0 AND id='$getid'";
    $result = mysqli_query($conn, $sql);
    $check = mysqli_num_rows($result);

    if($check == 1){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'An Error Occured',
                text: 'Remaining Hours is Already set to 0',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-violation.php";
                    }else{
                        window.location.href = "_admin-violation.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE violations SET td= td - $remain WHERE id='$getid'") or die($conn->error);
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully Updated',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-violation.php";
                    }else{
                        window.location.href = "_admin-violation.php";
                    }
                })
                
            })
    
        </script>
        <?php
    
       
    }
}

if(isset($_GET['completed'])){
    $id = $_GET['completed'];

    $sql = "SELECT * FROM violations WHERE td > 0";
    $result = mysqli_query($conn, $sql);
    $check = mysqli_num_rows($result);

    if($check == 1){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'There is a remaining time left',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-violation.php";
                    }else{
                        window.location.href = "_admin-violation.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE violations SET status='SUCCESS' WHERE id='$id'") or die($conn->error);
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully Updated the Status',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-violation.php";
                    }else{
                        window.location.href = "_admin-violation.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }
}

if (isset($_POST['decline_scholarship'])) {
    $id = $_POST['id'];
    $emails = $_POST['email'];
    $messages = $_POST['msg_scholar_decline'];
    if($id == null){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'An Error Occured',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-scholarship.php";
                    }else{
                        window.location.href = "_admin-scholarship.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE scholarship SET status='DECLINED', sched_date='N/A', message='$messages' WHERE id='$id'") or die($conn->error);
        include '_admin_scholarship_decline_email.php'
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully Declined the Scholarship Request',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-scholarship.php";
                    }else{
                        window.location.href = "_admin-scholarship.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }
}

if (isset($_POST['update_scholarship'])) {
    $id = $_POST['id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $emails = $_POST['email'];
    $messages = $_POST['msg_scholar_set'];
    
    if($id == null){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'An Error Occured',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-scholarship.php";
                    }else{
                        window.location.href = "_admin-scholarship.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE scholarship SET status='ONGOING', sched_date='$date $time', message='$messages' WHERE id='$id'") or die($conn->error);
        include '_admin_scholarship_setdate_email.php'
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully Set Schedule',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-scholarship.php";
                    }else{
                        window.location.href = "_admin-scholarship.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }

}

if (isset($_POST['received_scholarship'])) {
    $id = $_POST['id'];

    if($id == null){
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'An Error Occured',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-scholarship.php";
                    }else{
                        window.location.href = "_admin-scholarship.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE scholarship SET status='SUCCESS' WHERE id='$id'") or die($conn->error);
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully Updated the Status',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-scholarship.php";
                    }else{
                        window.location.href = "_admin-scholarship.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }


}

// verify account
if (isset($_POST['verify_account'])) {
    $id = $_POST['id'];
    $messages = $_POST['msg'];
    $emails = $_POST['email'];
    
    if ($id == null){
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'An Error Occured!',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-verify-student.php";
                    }else{
                        window.location.href = "_admin-verify-student.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE student SET status='VERIFIED' WHERE id='$id'") or die($conn->error);
        include 'verify_email.php';
        ?>
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
                    window.location.href = "_admin-verify-student.php";
                    }else{
                        window.location.href = "_admin-verify-student.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }


}


// deny account
if (isset($_POST['deny_account'])) {
    $id = $_POST['id'];
    $messages = $_POST['msg'];
    $emails = $_POST['email'];
    
    if ($id == null){
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'An Error Occured!',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-verify-student.php";
                    }else{
                        window.location.href = "_admin-verify-student.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE student SET status='DENIED' WHERE id='$id'") or die($conn->error);
        include 'verify_email.php';
        ?>
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
                    window.location.href = "_admin-verify-student.php";
                    }else{
                        window.location.href = "_admin-verify-student.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }


}

// change profile pic
if (isset($_POST['change_profile'])) {
    $name = $_POST['name'];

    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["profile_pic"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $check = getimagesize($_FILES["profile_pic"]["tmp_name"]);

    if($check !== false) {
    
        $uploadOk = 1;
        if ($uploadOk == 0) {
            echo "<script type=\"text/javascript\">
            alert(\"Sorry, your file was not uploaded.\");
            window.location = \"_admin-settings.php\"
            </script>";
    } else {
      move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file);
    }
        $sql='UPDATE admin SET image="'.$target_file.'", name="'.$name.'" WHERE id=1';
        $result = mysqli_query($conn, $sql);
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully Updated',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-settings.php";
                    }else{
                        window.location.href = "_admin-settings.php";
                    }
                })
                
            })
    
        </script>
        <?php
        
      } else {
        echo "<script type=\"text/javascript\">
        alert(\"File is not an image!\");
        window.location = \"_admin-settings.php\"
        </script>";
        $uploadOk = 0;
      }
}

// change password 
if (isset($_POST['change_pass'])) {
    $pass1 = $_POST['password1'];
    $pass2 = $_POST['password2'];

    if($pass1 != $pass2){
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'error',
                title: 'Password Does not Match',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-settings.php";
                    }else{
                        window.location.href = "_admin-settings.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $sql='UPDATE admin SET password="'.$pass1.'" WHERE id=1';
        $result = mysqli_query($conn, $sql);
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully Updated',
                text: 'You will now automatically logout and kindly login your new created password',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "../index.php";
                    }else{
                        window.location.href = "../index.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }
}

// add announcement

if (isset($_POST['add_scholar'])) {
    $scholar = $_POST['scholarship'];
    $det = $_POST['details'];

    $sql = "SELECT * FROM list_scholar WHERE name = '$scholar' OR description='$det'";
    $result = mysqli_query($conn, $sql);
    $check = mysqli_num_rows($result);

    if($check == 1){
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'warning',
                title: 'Scholarship Already Exists',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-scholarship.php";
                    }else{
                        window.location.href = "_admin-scholarship.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("INSERT INTO list_scholar (name, description) VALUES('$scholar', '$det')") or die($conn->error);
        ?>
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully Added',
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'Okay'
                }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "_admin-scholarship.php";
                    }else{
                        window.location.href = "_admin-scholarship.php";
                    }
                })
                
            })
    
        </script>
        <?php

    }
}



?>
