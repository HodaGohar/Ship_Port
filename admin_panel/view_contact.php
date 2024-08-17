<?php
@include 'connect.php';


$select = mysqli_query($conn, "SELECT * FROM contact");
$data = array();

while($row = mysqli_fetch_assoc($select)){
    $contact_data[] = $row;
}

echo json_encode($contact_data);
mysqli_close($conn);
?>