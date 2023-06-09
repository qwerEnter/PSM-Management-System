<?php

include('includes/config.php');

/* SESSION */
session_start();
if(isset($_SESSION['User'])){
    $User = $_SESSION['User'];
}else{
    header("location:/studfyp/login.php");
}

/* DELETE TITLE DATA FUNCTION */
if(isset($_GET['del']))
{
    mysqli_query($bd, "delete from lectures_title where lectTitle_id = '".$_GET['id']."'");
    $_SESSION['delmsg']="Title record deleted !!";
}
?>


<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>PSM Management System | Title</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet" />
    </head>

    <body>
        <!-- HEADER SECTION -->
        <?php include('includes/header.php');?>
        <!--  SIDEBAR SECTION -->
        <?php include('includes/menubar2.php');?>
        <!-- DASHBOARD SECTION -->
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"><h1 class="page-head-line">MANAGE TITLE </h1></div>
                </div>
                <div class="row" >
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading"><center>SEARCH TITLE</center></div>
                            <font color="green" align="center">
                            <div class="panel-body">
                                <!-- SEARCH TITLE-->   
                                <form method="POST">
                                    <input type="text" class="form-control" name="keyword" placeholder="Search here..." required="required">
                                    <button class="btn btn-success" name="search" ><span class="glyphicon glyphicon-search"></span> Search</button>
                                </form>

                                <!-- ADD NEW TITLE-->  
                                <br><a href="addTitle.php?" type="button" class="btn btn-s btn-primary">New Title Project</a>
                                <div class="table-responsive">                            
                                    
                                    <!-- SEARCH TITLE FUNCTION SECTION -->
                                    <?php
                                        include('includes/config.php');
                                        if(ISSET($_POST['search'])){
                                    ?>
                                    <table class="table table-bordered table-hover table-striped">
                                        
                                        <thead>
                                            <tr>
                                                <th>Lecture Name</th>
                                                <th>Title Project</th>
                                                <th>Title Description</th>
                                                <th>Update</th>
                                                <th>View</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- DISPLAY LIST OF TITLE THAT CLICK SEARCH BUTTON -->
                                            <?php
                                                $keyword = $_POST['keyword'];
                                                $query = mysqli_query($bd, "SELECT * FROM lectures_title WHERE  title_project LIKE '%$keyword%'") or die(mysqli_error());
                                                $count = mysqli_num_rows($query);
                                                if($count > 0){
                                                    while($fetch = mysqli_fetch_array($query)){?>
                                            <tr>
                                                <td><?php echo $fetch['lect_name']; ?></td>
                                                <td><?php echo $fetch['title_project']; ?></td>
                                                <td><?php echo $fetch['title_description']; ?></td>
                                                <td><a href="editTitle.php?id=<?php echo $fetch["lectTitle_id"];?>" class="btn btn-warning">Update</a></td>
                                                <td><a href="viewTitle.php?id=<?php echo $fetch['lectTitle_id'] ?>" class="btn btn-info">View</a></td>
                                                <td>
                                                    <a href="titleproject_lect.php?id=<?php echo $fetch['lectTitle_id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">
                                                    <button class="btn btn-danger">Delete</button>
                                                </td>
                                                <!-- <td><a href="BookTitle.php?id=<?php echo $fetch["lectTitle_id"];?>" type="button" class="btn btn-s btn-primary">Book</a></td> -->
                                            </tr>
                                            <?php
                                                }
                                            }else{
                                                echo "<tr><td colspan='2' class='text-danger'><center>No result found!</center></td></tr>";
                                            }?>
                                        </tbody>
                                    </table>

                                    <?php		
                                    }else{
                                    ?>
                                    
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Lecture Name</th>
                                                <th>Title Project</th>
                                                <th>Title Description</th>
                                                <th>Update</th>
                                                <th>View</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            <!-- DISPLAY LIST OF LOGBOOK THAT NOT CLICK SEARCH BUTTON -->
                                            <?php
                                                $query = mysqli_query($bd, "SELECT * FROM lectures_title  ORDER BY lectTitle_id ASC") or die(mysqli_error());
                                                while($fetch = mysqli_fetch_array($query)){
                                            ?>

                                            <tr>
                                                <td><?php echo $fetch['lect_name']; ?></td>
                                                <td><?php echo $fetch['title_project']; ?></td>
                                                <td><?php echo $fetch['title_description']; ?></td>
                                                <td><a href="editTitle.php?id=<?php echo $fetch["lectTitle_id"];?>" class="btn btn-warning">Update</a></td>
                                                <td><a href="viewTitle.php?id=<?php echo $fetch['lectTitle_id'] ?>" class="btn btn-info">View</a></td>
                                                <td>
                                                    <a href="titleproject_lect.php?id=<?php echo $fetch['lectTitle_id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')">
                                                    <button class="btn btn-danger">Delete</button>
                                                </td>
                                            </tr>
                                            
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
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

        <!-- FOOTER SECTION -->
        <?php include('includes/footer.php');?>

        <!-- SCRIPT SECTION -->
        <script src="assets/js/jquery-1.11.1.js"></script>
        <script src="assets/js/bootstrap.js"></script>
    </body>
</html>
