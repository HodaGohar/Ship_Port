<?php
@include 'connect.php';

$select = mysqli_query($conn, "SELECT * FROM services");
$data = array();

while($row = mysqli_fetch_assoc($select)){
    $services_data[] = $row;
}

echo json_encode($services_data);
mysqli_close($conn);
?>