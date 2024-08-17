<?php
@include 'connect.php';

if (isset($_POST['add_arrival'])) {
    $shipID = $_POST['shipID'];
    // $portID = $_POST['portID'];
    $captainName = $_POST['captainName'];
    $arrivalDate = $_POST['arrivalDate'];
    $departureDate = $_POST['departureDate'];
    $cargoDescription = $_POST['cargoDescription'];
    $arrivalStatus = $_POST['arrivalStatus'];
    $berthAllocated = $_POST['berthAllocated'];
    $shipImg = $_FILES['shipImg']['name'];  
    $shipImg_tmp_name = $_FILES['shipImg']['tmp_name'];
    $shipImg_folder = 'images/' . $shipImg;

    if (empty($captainName) || empty($arrivalDate) || empty($departureDate) || empty($cargoDescription) || empty($arrivalStatus) || empty($shipImg)) {
        $message[] = 'Please fill out all fields.';
    } else {
        $check_ship = mysqli_query($conn, "SELECT * FROM ships WHERE shipID = '$shipID'");
        
        if (mysqli_num_rows($check_ship) > 0) {
            $insert = "INSERT INTO shipArrivals(captainName, arrivalDate, departureDate, cargoDescription, arrivalStatus, berthAllocated, shipImg, shipID) VALUES('$captainName','$arrivalDate','$departureDate', '$cargoDescription', '$arrivalStatus','$berthAllocated','$shipImg','$shipID')";
            $upload = mysqli_query($conn, $insert);

            if ($upload) {
                move_uploaded_file($shipImg_tmp_name, $shipImg_folder);
                $message[] = 'New ship arrival added successfully.';
            } else {
                $message[] = 'Could not add this ship arrival.';
            }
        } else{
            $message[] = 'Invalid ship ID.';
        }
    }
}
header("Location: arrivals_admin.html");

?>