<?php

include('includes/config.php');

/* SESSION */
session_start();
if(isset($_SESSION['User'])){
	$User = $_SESSION['User'];
}else{
	header("location:/studfyp/login.php");
}

/* INSERT LOGBOOK DATA FUNCTION */
if(isset($_POST['btn_insert']))
  {
    $studID	= $_REQUEST['txt_id'];	//textbox name "date"
    $studName	= $_REQUEST['txt_name'];	//textbox name "day"
    $title	= $_REQUEST['txt_title'];	//textbox name "txt_activities"
	$description	= $_REQUEST['txt_description'];	//textbox name "txt_note"
    


    $insert_data="INSERT INTO title (stud_matric,stud_name,title,title_description)VALUES('$studID','$studName','$title','$description') ";
    $run_data = mysqli_query($bd,$insert_data);

    if($run_data){
        header('location: titleproject.php');
    }else{
        echo "Data unsuccessfully insert";
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
        <title>PSM Management System | Title</title>
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
                    <div class="col-md-12"><h1 class="page-head-line">BOOKING TITLE</h1></div>
                </div>
                <div class="row" >
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading"><center>BOOK  TITLE PROJECT</center></div>
                                <font color="black" align="left">
                                <div class="panel-body">
                                <form class="form-inline" method="POST"  enctype="multipart/form-data">
                                    <table align="center" width="100%">
                                        <tr>
                                            <td><label class="control-label">Student ID : </label></td>
                                            <td><input type="text" name="txt_id" class="form-control" placeholder="Enter Student ID" required="required"/></td>
                                        </tr>

                                        <tr>
                                            <td><label class="control-label">Student Name : </label></td>
                                            <td><input type="text" name="txt_name" class="form-control" placeholder="Enter Student Name" required="required"/></td>
                                        </tr>

                                        <tr>
                                            <td><label class="control-label">Project Title : </label></td>
                                            <td><input type="text" name="txt_title" class="form-control" placeholder="Enter Project Title" required="required"/></td>
                                        </tr>

                                        <tr>
                                            <td><label class="control-label">Description: </label></td>
                                            <td><textarea name="txt_description" cols="50" rows="10" class="form-control" required="required"></textarea></td>
                                        </tr>
                                                    
                                        <tr>
                                            <td colspan="2">
                                                <br>
                                                <input type="submit"  name="btn_insert" class="btn btn-success " value="BOOK">
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