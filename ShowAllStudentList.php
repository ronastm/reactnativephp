<?php

include 'DBconfig.php';

$conn = new mysqli_connect($HostName, $HostUser, $HostPass, $DatabaseName);

if($conn->connect_error){
    die("connection Failed" . $conn->connect_error)
}

$sql = "SELECT * FROM StudentDetailsTable";

$result = $conn->query($sql);

if($result->num_rows > 0) {
    while($row[] = $result->fetch_assoc()){
        $item = $row;
        $json = json_encode($item);
    }
    
}
else {
    echo "No REsult found.";
}
echo $json;
$conn->close();
?>