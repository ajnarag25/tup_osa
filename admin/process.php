<?php 
include('connection.php');
error_reporting(0);

// ID REQUEST
if (isset($_POST['update_sched_claim'])) {
    $id = $_POST['id'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    
    
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
                    window.location.href = "_admin-idrequest-setdate.php";
                    }else{
                        window.location.href = "_admin-idrequest-setdate.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE id_request SET status='ONGOING', sched_claim='$date $time' WHERE id='$id'") or die($conn->error);
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
                    window.location.href = "_admin-idrequest-setdate.php";
                    }else{
                        window.location.href = "_admin-idrequest-setdate.php";
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
                    window.location.href = "_admin-idrequest-decline.php";
                    }else{
                        window.location.href = "_admin-idrequest-decline.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE id_request SET status='DECLINED' WHERE id='$id'") or die($conn->error);
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
                    window.location.href = "_admin-idvalidate-setdate.php";
                    }else{
                        window.location.href = "_admin-idvalidate-setdate.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE id_validation SET status='ONGOING', date_claim='$date $time' WHERE id='$id'") or die($conn->error);
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
                    window.location.href = "_admin-idvalidate-setdate.php";
                    }else{
                        window.location.href = "_admin-idvalidate-setdate.php";
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
                    window.location.href = "_admin-idrequest-decline.php";
                    }else{
                        window.location.href = "_admin-idrequest-decline.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE id_validation SET status='DECLINED' WHERE id='$id'") or die($conn->error);
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
                    window.location.href = "_admin-goodmoral-setdate.php";
                    }else{
                        window.location.href = "_admin-goodmoral-setdate.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE good_moral SET status='ONGOING', date_claim='$date $time' WHERE id='$id'") or die($conn->error);
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
                    window.location.href = "_admin-goodmoral-setdate.php";
                    }else{
                        window.location.href = "_admin-goodmoral-setdate.php";
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
                    window.location.href = "_admin-goodmoral-decline.php";
                    }else{
                        window.location.href = "_admin-goodmoral-decline.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE good_moral SET status='DECLINED' WHERE id='$id'") or die($conn->error);
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

    if($course == null && $o1 == null && $o2 == null && $o3 == null && $o4 == null ){
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
                    window.location.href = "_admin-violation-add.php";
                    }else{
                        window.location.href = "_admin-violation-add.php";
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
                    window.location.href = "_admin-violation-add.php";
                    }else{
                        window.location.href = "_admin-violation-add.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        if($hrs == null){
            $conn->query("INSERT INTO violations (student_id, name, course, yr_section, offense1, offense2, offense3, offense4, td, status) 
            VALUES('$studentid', '$names', '$course', '$yrsection', '$o1', '$o2', '$o3', '$o4', 'N/A', 'ONGOING')") or die($conn->error);
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

    if($getid == null){
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
                    window.location.href = "_admin-violation-modify.php";
                    }else{
                        window.location.href = "_admin-violation-modify.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE violations SET td='$remain' WHERE id='$getid'") or die($conn->error);
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
                    window.location.href = "_admin-violation-modify.php";
                    }else{
                        window.location.href = "_admin-violation-modify.php";
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
?>