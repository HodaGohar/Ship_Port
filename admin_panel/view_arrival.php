<?php
@include 'connect.php';


$select = mysqli_query($conn, "SELECT * FROM shiparrivals");
$data = array();

while($row = mysqli_fetch_assoc($select)){
    $arrivals_data[] = $row;
}

echo json_encode($arrivals_data);
mysqli_close($conn);
?>