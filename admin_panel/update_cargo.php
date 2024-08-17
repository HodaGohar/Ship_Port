<?php
@include 'connect.php';
$cargoID = $_GET['edit'];

if(isset($_POST['update_cargo'])){
    $shipID = $_POST['shipID'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $weight = $_POST['weight'];
    $containerType = $_POST['containerType'];


    if (empty($shipID) || empty($description) || empty($quantity) || empty($weight) || empty($containerType)) {
        $message[] = 'Please fill out all fields.';
    } else {
        $check_ship = mysqli_query($conn, "SELECT * FROM cargo WHERE cargoID = '$cargoID'");
        
        if (mysqli_num_rows($check_ship) > 0) {
            $update = "UPDATE cargo SET description='$description', quantity='$quantity', weight='$weight', containerType='$containerType', shipID='$shipID' WHERE cargoID = $cargoID";
            
            $upload = mysqli_query($conn, $update);

            if ($upload){
                $message[] = 'cargo updated successfully.';
            } else {
                $message[] = 'Could not update this cargo.';
            }
        } else {
            $message[] = 'Invalid ship ID.';
        }
    }
}
?>