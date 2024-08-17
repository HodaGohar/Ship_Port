<?php
@include 'connect.php';


$select = mysqli_query($conn, "SELECT * FROM registration");
$data = array();

while($row = mysqli_fetch_assoc($select)){
    $user_data[] = $row;
}

echo json_encode($user_data);
mysqli_close($conn);
?>