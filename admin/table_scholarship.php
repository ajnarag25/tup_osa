<?php
    include('connection.php');
    session_start();
    if (!isset($_SESSION['admin_data']['email'])) {
      header("Location: ../index.php");
  }
?>       
            
            
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
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- FONTAWESOME ICONS -->
    <!-- <link rel="stylesheet" href="css/font-awesome.css"> -->
    <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->
    <!-- ALL CSS FILES -->
    <link href="css/materialize.css" rel="stylesheet">
    <!-- <link href="css/bootstrap.css" rel="stylesheet" /> -->
    <link href="css/style.css" rel="stylesheet" />

    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">

    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.css">

    <!-- RESPONSIVE.CSS ONLY FOR MOBILE AND TABLET VIEWS -->
    <link href="css/style-mob.css" rel="stylesheet" />
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
	<script src="js/html5shiv.js"></script>
	<script src="js/respond.min.js"></script>
	<![endif]-->
</head>

<a href="_admin-scholarship.php" type="button" class="btn btn-primary">Go Back</a>
<button type="submit" class="btn btn-primary" id="print" onclick="printPage()">Print</button>
<br><br>

<table class="table table-bordered table-hover table-sm">
    <thead>
    <tr class="table-secondary">
        <th>#</th>
        <th>TUPC-ID</th>
        <th>Full Name</th>
        <th>Address</th>
        <th>Course</th>
        <th>Reason</th>
        <th>Request Date</th>
        <th>Status</th>
    </tr>
    </thead>
    <tbody>
    <?php 
        $query = "SELECT * FROM scholarship ";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
        <td><?php echo $row['id'] ?></td>
        <td><span class="list-enq-name"><?php echo $row['student_id'] ?></span></td>
        <td><?php echo $row['name'] ?></td>
        <td><?php echo $row['address'] ?></td>
        <td><?php echo $row['course'] ?></td>
        <td><?php echo $row['essay2'] ?></td>
        <td><?php echo $row['req_date'] ?></td>
        <td>
            <?php 
                if($row['status'] == 'PENDING'){
                    echo '
                    <span class="label label-warning">Pending</span>
                    ';
                }elseif($row['status'] == 'DECLINED'){
                    echo '
                    <span class="label label-danger">Declined</span>
                    ';
                }elseif($row['status'] == 'ONGOING'){
                    echo '
                    <span class="label label-success">Ongoing</span>
                    ';
                }
                else{
                    echo '
                    <span class="label label-primary">Success</span>
                    ';
                }
            
            ?>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>

<script>
    function printPage() {
        window.print();
    }
</script>
