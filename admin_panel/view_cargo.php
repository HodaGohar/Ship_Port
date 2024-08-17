<?php
@include 'connect.php';


$select = mysqli_query($conn, "SELECT * FROM cargo");
$data = array();

while($row = mysqli_fetch_assoc($select)){
    $cargo_data[] = $row;
}

echo json_encode($cargo_data);
mysqli_close($conn);
?>