<?php

include 'DBconfig.php';

$con = mysqli_connect($HostName, $HostUser, $HostPass, $DatabaseName);

$json = file_get_contents('php://input');

$obj = json_decode($json, true);

$S_Id = $obj['student_id'];

$Sql_query = "DELETE FROM `StudentDetailsTable` WHERE $Student_Id = '$S_Id';"

if(mysqli_query($con, $Sql_query)){
    $MSG = "Record deleted successfully.";
    "
    $json = json_encode($MSG);
    
    echo $json;
    
    
}
else {
    echo "Try Again.";
}
mysqli_close($con);
?>