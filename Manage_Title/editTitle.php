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
session_start();
if(isset($_SESSION['User'])){
    $User = $_SESSION['User'];
}else{
    header("location:/studfyp/login.php");
}

/* QUERY FOR SELECT LOGBOOK TABLE */
$query = "SELECT * FROM lectures_title";
$result = mysqli_query($bd,$query);
$row = mysqli_fetch_assoc($result);
$id = $_GET['id'];

/* UPDATE LOGBOOK DATA FUNCTION */
if(isset($_POST['btn_update']))
  {
    $lectID	= $_REQUEST['txt_id'];	//textbox name "date"
    $lectName	= $_REQUEST['txt_name'];	//textbox name "day"
    $title	= $_REQUEST['txt_title'];	//textbox name "txt_activities"
    $description	= $_REQUEST['txt_description'];	//textbox name "txt_note"


    $update_data="UPDATE lectures_title SET title_project='$title', title_description='$description' WHERE lectTitle_id=$id";
    $run_data = mysqli_query($bd,$update_data);

    if($run_data){
        header('location: titleproject_lect.php');
    }else{
        echo "Data unsuccessfully update";
    }
  }
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Logbook | Student</title>
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <link href="assets/css/style.css" rel="stylesheet" />
    </head>

    <body>
        <!-- HEADER SECTION -->
        <?php include('includes/header.php');?>
        <!--  SIDEBAR SECTION -->
        <?php include('includes/menubar.php');?>
        <!-- MENU SECTION END-->
        <div class="content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-12"><h1 class="page-head-line">MANAGE TITLE</h1></div>
                </div>
                <div class="row" >
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading"><center>UPDATE TITLE PROJECT</center></div>
                            <font color="black" align="left">
                            <div class="panel-body">
                                <form class="form-inline" method="POST"  enctype="multipart/form-data">
                                    <table align="center" width="100%">
                                        
                                        <?php
                                        /* DATABASE CONNECTION */
                                        include('includes/config.php');

                                        /* FETCH DATA FROM TABLE LOGBOOK */
                                        $query = "SELECT * FROM lectures_title WHERE lectTitle_id=$id";
                                        $result = mysqli_query($bd,$query);
                                        $row = mysqli_fetch_assoc($result);
                                        ?>
                                            
                                        <tr>
                                            <td><input type ="hidden" name="id" value="<?php echo $id; ?>"></td>
                                        </tr>

                                        <tr>
                                            <td><label class="control-label">Lecturer ID : </label></td>
                                            <td><input type="text" name="txt_id" class="form-control" value="<?php echo $row['lect_matric'];  ?>" readonly/></td>
                                        </tr>

                                        <tr>
                                            <td><label class="control-label">Lecturer Name : </label></td>
                                            <td><input type="text" name="txt_id" class="form-control" value="<?php echo $row['lect_name'];  ?>" readonly/></td>
                                        </tr>

                                        <tr>
                                            <td><label class="control-label">Project Title : </label></td>
                                            <td><input type="text" name="txt_title" class="form-control" value="<?php echo $row['title_project'];?>" required="required"/></td>
                                        </tr>

                                        <tr>
                                            <td><label class="control-label">Description: </label></td>
                                            <td><textarea name="txt_description"  cols="50" rows="10" required="required"><?php echo $row['title_description'];?></textarea></td>
                                        </tr>
                                            
                                        <tr>
                                            <td colspan="2">
                                                <br>
                                                <input type="submit"  name="btn_update" class="btn btn-primary" value="UPDATE">
                                                <input type="reset"   name="btn_reset" class="btn btn-info "value="RESET">
                                            </td>
                                        </tr>
                                    </table>
                                </form>
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