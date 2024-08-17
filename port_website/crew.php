<?php
@include 'connect.php';

$select = mysqli_query($conn, "SELECT * FROM crew");
$data = array();

while($row = mysqli_fetch_assoc($select)){
    $crew_data[] = $row;
}

echo json_encode($crew_data);
mysqli_close($conn);
?>