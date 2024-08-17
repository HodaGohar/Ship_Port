<?php
@include 'connect.php';


$select = mysqli_query($conn, "SELECT * FROM ships");
$data = array();

while($row = mysqli_fetch_assoc($select)){
    $ship_data[] = $row;
}

echo json_encode($ship_data);
mysqli_close($conn);
?>