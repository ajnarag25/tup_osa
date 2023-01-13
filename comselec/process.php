<link href="css/style.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700%7CJosefin+Sans:600,700" rel="stylesheet">

<?php
  include('connection.php');
  session_start();
  error_reporting(0);
  date_default_timezone_set('Asia/Manila');

  // LOGOUT
    if (isset($_GET['logout'])) {
        session_destroy();
        header('location:../index.php');
    } 

    // add candidates
    if (isset($_POST['candidate'])) {
        $name = $_POST['names'];
        $course = $_POST['course'];
        $position = $_POST['position'];
        $partylist = $_POST['partylist'];

        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["pic"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $check = getimagesize($_FILES["pic"]["tmp_name"]);

        $sql = "SELECT * FROM candidates WHERE name='$name' AND course='$course' AND position='$position' ";
        $result = mysqli_query($conn, $sql);

        if (!$result->num_rows > 0){
            if ($course == null && $position == null){
                ?>
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
                            window.location.href = "index.php";
                            }else{
                                window.location.href = "index.php";
                            }
                        })
                        
                    })
            
                </script>
                <?php
            }elseif($course == null || $position == null){
                ?>
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
                            window.location.href = "index.php";
                            }else{
                                window.location.href = "index.php";
                            }
                        })
                        
                    })
            
                </script>
                <?php
            }else{
                if($check !== false) {
            
                    $uploadOk = 1;
                    if ($uploadOk == 0) {
                        echo "<script type=\"text/javascript\">
                        alert(\"Sorry, your file was not uploaded.\");
                        window.location = \"index.php\"
                        </script>";
                } else {
                    move_uploaded_file($_FILES["pic"]["tmp_name"], $target_file);
                    if ($partylist == null){
                        $conn->query("INSERT INTO candidates (name, image, course, position, partylist, vote) 
                        VALUES('$name', '$target_file', '$course', '$position', 'N/A', 0)") or die($conn->error);
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
                                    window.location.href = "index.php";
                                    }else{
                                        window.location.href = "index.php";
                                    }
                                })
                                
                            })
                    
                        </script>
                        <?php
                    }else{
                        $conn->query("INSERT INTO candidates (name, image, course, position, partylist, vote) 
                        VALUES('$name', '$target_file', '$course', '$position', '$partylist', 0)") or die($conn->error);
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
                    
                } else {
                    echo "<script type=\"text/javascript\">
                    alert(\"File is not an image!\");
                    window.location = \"index.php\"
                    </script>";
                    $uploadOk = 0;
                }
            }
        }else{
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'warning',
                    title: 'Candidate Already Added',
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

    // delete candidate
    if (isset($_POST['delete_candidate'])) {
        $id = $_POST['id'];
        
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
                        window.location.href = "index.php";
                        }else{
                            window.location.href = "index.php";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }else{
            $conn->query("DELETE FROM candidates WHERE id='$id'") or die($conn->error);
            ?>
            <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <script>
                $(document).ready(function(){
                    Swal.fire({
                    icon: 'success',
                    title: 'Successfully Deleted',
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

    // usg voting
    if (isset($_POST['change_stat'])) {
        $stat = $_POST['stat'];
        
        if ($stat == null){
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
                        window.location.href = "index.php";
                        }else{
                            window.location.href = "index.php";
                        }
                    })
                    
                })
        
            </script>
            <?php
        }else{
            $conn->query("UPDATE usg_voting SET status='$stat' WHERE id=1") or die($conn->error);
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

    // reset votes
    if(isset($_GET['reset_vote'])){

        $conn->query("TRUNCATE voters;") or die($conn->error);
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
                    window.location.href = "index.php";
                    }else{
                        window.location.href = "index.php";
                    }
                })
                
            })

        </script>
        <?php
        
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
        $sql='UPDATE comselec SET image="'.$target_file.'", name="'.$name.'" WHERE id=1';
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
        $sql='UPDATE comselec SET password="'.$pass1.'" WHERE id=1';
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

?>

<?php

// change password_reset
if (isset($_POST['change_pass_res'])) {
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];

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
                    window.location.href = "reset_redirect.php";
                    }else{
                        window.location.href = "reset_redirect.php";
                    }
                })
                
            })
    
        </script>
        <?php
    }else{
        $conn->query("UPDATE comselec SET password='$password2' WHERE id=1") or die($conn->error);
        ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Successfully changed default password',
                text: 'Please login again with your new password',
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
?>

<?php
if (isset($_POST['del_all_candid'])) {
    $conn->query("DELETE FROM candidates") or die($conn->error);
    ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Successfully Delete all Candidates',
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

?>