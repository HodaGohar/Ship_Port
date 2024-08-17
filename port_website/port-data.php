<?php
@include 'connect.php';

$select = mysqli_query($conn, "SELECT * FROM ports");
$data = array();

while($row = mysqli_fetch_assoc($select)){
    $ports_data[] = $row;
}

echo json_encode($ports_data);
mysqli_close($conn);
?>