<html lang='en-Us'>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
</head>
<body>

<?php
$server="localhost";
$user="root";
$password="";
$db="pharmacy";

$con = new mysqli($server,$user,$password,$db);

if($con->connect_error){
    die("Connect failed : ".$con->connect_error);
}
$con->set_charset("utf8");

$Emp_ID = isset($_GET ['Emp_ID']) ? $_GET['Emp_ID'] : '';

 if($Emp_ID!=''){
     $sql = $sql="DELETE FROM employee Where Emp_ID='".$Emp_ID."'";
     if($con->query($sql)==TRUE){
         echo "<script>";
         echo "alert('deleted successfully');";
         echo "window.history.back()";
         echo "</script>";
     }else{
         echo "ERROR".$sql. "<BR>" .$con->error;
             }
 }

 ?>
 </body>
 </html>