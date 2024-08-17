<?php
@include 'connect.php';

$select = mysqli_query($conn, "SELECT * FROM trips");
$data = array();

while($row = mysqli_fetch_assoc($select)){
    $trip_data[] = $row;
}

echo json_encode($trip_data);
mysqli_close($conn);
?>