<html>
<!-- THIS PART IS SEARCH LECTURER EXPERTISE () METHOD -->
<!-- THIS PART , STUDENT CAN VIEW FURTHER INFORMATION ALL REQUEST THAT THEY MAKE BEFORE. -->
<head>
<link rel="stylesheet" type="text/css" href="CSS.css">
</head>
<div class="header">
  <h2> PSM MANAGEMENT SYSTEM</h2>
</div>

<form action="" method="get" class="form-inline">
    Expertise :
    <input type="text" name="carian" class="form-control">
    <button type=submit class="btn btn-primary">Search</button>
</form>

<?php
//ExpertiseMainInterface.php
  include_once 'ExpertiseController.php';



//input carian expertise
if(isset($_GET['carian'])){
    $carian=$_GET['carian'];
}else{
    $carian="";
}
include "ExpertiseController.php";


$sql="SELECT Lect_ID, Lect_Name, Lect_Expertise, Lect_Position FROM Lecturers
        WHERE Lect_Expertise LIKE '%$carian%' 
        ";
//sql hantar ke dbserver
//resultset
$result=mysqli_query($conn, $sql);
//echo $sql;
//echo mysqli_error($conn);

//tiada padanan dijumpai
if(mysqli_num_rows($result)==0){
    echo "Tiada matches found";
}
else{
    //display table
?>
    <!-- html table -->
    <table border="1">
        <thead>
            <tr>
			    <td>Lecturer ID</td>
                <td>Lecturer Name</td>
                <td>Lecturer Expertise</td>
                <td>Lecturer Position</td>
            </tr>
        </thead>

<?php
    //capture record dari $result
    while($rec=mysqli_fetch_array($result)){
        echo "<tr>";
		echo "<td>". $rec['Lect_ID']."</td>";
        echo "<td>". $rec['Lect_Name']."</td>";
        echo "<td>". $rec['Lect_Expertise']."</td>";
        echo "<td>". $rec['Lect_Position']."</td>";
        $Lect_ID=$rec['Lect_ID'];
        echo "<td> <a href='ExpertiseDetailsInterface.php?Lect_ID=$Lect_ID'><button>View More</button>";
        echo "</td></tr>";
    }//end while
    echo "</table>";
}//end else rekod jumpa
?>
<a href=../home.php><button>BACK</button></a>
</center>
	<div class="footer">
  <p><sub>Copyright 2021, All Right Reserved</sub></p>
</div>
</html>