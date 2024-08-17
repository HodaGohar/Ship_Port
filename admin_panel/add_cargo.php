<?php
@include 'connect.php';

if (isset($_POST['add_cargo'])) {
    $shipID = $_POST['shipID'];
    $description = $_POST['description'];
    $quantity = $_POST['quantity'];
    $weight = $_POST['weight'];
    $containerType = $_POST['containerType'];

    if (empty($description) || empty($quantity) || empty($weight) || empty($containerType)) {
        $message[] = 'Please fill out all fields.';
    } else {
            $check_ship = mysqli_query($conn, "SELECT * FROM ships WHERE shipID = '$shipID'");
            
            if (mysqli_num_rows($check_ship) > 0) {
            $insert = "INSERT INTO cargo(description, quantity, weight, containerType, shipID) VALUES('$description','$quantity','$weight', '$containerType', '$shipID')";
            $upload = mysqli_query($conn, $insert);

            if ($upload) {
                $message[] = 'New cargo added successfully.';
            } else {
                $message[] = 'Could not add this cargo .';
            }
        }
    }
}
header("Location: cargo_admin.html");
?>