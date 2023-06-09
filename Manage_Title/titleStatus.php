<?php

/*
BCS 2243 WEB ENGINEERING
GROUP : 2B-2
PROJECT : UMP-FK FINAL YEAR PROJECT MANAGEMENT SYSTEM (StudFYP)
MODULE : No.3 (Student)
NAME : NUR IZZLIN BINTI AZMAN 
MATRIC NO : CB20012
*/

/* CONNECTION DATABASE */
include('includes/config.php');

/* SESSION */
session_start();
if(isset($_SESSION['User'])){
    $User = $_SESSION['User'];
}else{
    header("location:/studfyp/login.php");
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Report | Student</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet" />
    </head>

    <body>
        <!-- HEADER SECTION -->
        <?php include('includes/header.php');?>
        <!--  SIDEBAR SECTION -->
        <?php include('includes/menubar.php');?>
        <!-- DASHBOARD SECTION -->
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"><h1 class="page-head-line">TITLE STATUS </h1></div>
                </div>
                <div class="row" >
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                    <div class="panel panel-default">
                            <div class="panel-heading"><center>STATUS TITLE PSM</center></div>
                            <font color="black" align="center">
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Student Name</th>
                                                <th>Student Matric No.</th>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- DISPLAY LIST OF LOGBOOK SECTION -->
                                            <?php                  
                                                $query = "SELECT * FROM title";
                                                $cnt=1;
                                                $result = mysqli_query($bd, $query) or die (mysqli_error($bd));
                                                while ($row = mysqli_fetch_assoc($result)) {
                                                $id=$row["title_id"];
                                            ?>

                                            <tr>
                                                <td><?php echo $row['stud_name']; ?></td>
                                                <td><?php echo $row['stud_matric']; ?></td>
                                                <td><?php echo $row['title']; ?></td>
                                                <td><?php echo $row['title_description']; ?></td>
                                                <td><?php echo $row['status']; ?></td>
                                            </tr>

                                            <?php 
                                                $cnt++;
                                                } 
                                            ?>
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

        <!-- FOOTER SECTION -->
        <?php include('includes/footer.php');?>

        <!-- SCRIPT SECTION -->
        <script src="assets/js/jquery-1.11.1.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>