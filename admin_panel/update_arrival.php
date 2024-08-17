<?php
@include 'connect.php';

$arrivalID = $_GET['edit'];


if(isset($_POST['update_arrival'])){
    $shipID = $_POST['shipID'];
    $captainName = $_POST['captainName'];
    $arrivalDate = $_POST['arrivalDate'];
    $departureDate = $_POST['departureDate'];
    $cargoDescription = $_POST['cargoDescription'];
    $arrivalStatus = $_POST['arrivalStatus'];
    $berthAllocated = $_POST['berthAllocated'];
    $shipImg = $_FILES['shipImg']['name'];  
    $shipImg_tmp_name = $_FILES['shipImg']['tmp_name'];
    $shipImg_folder = 'images/' . $shipImg;

    if (empty($captainName) || empty($arrivalDate) || empty($departureDate) || empty($cargoDescription) || empty($arrivalStatus) || empty($shipImg) || empty($shipID)) {
        $message[] = 'Please fill out all fields.';
    } else {
        $check_ship = mysqli_query($conn, "SELECT * FROM ships WHERE shipID = '$shipID'");
        
        if (mysqli_num_rows($check_ship) > 0) {
            $update = "UPDATE shipArrivals SET captainName='$captainName', arrivalDate='$arrivalDate', departureDate='$departureDate', cargoDescription='$cargoDescription', arrivalStatus='$arrivalStatus', berthAllocated='$berthAllocated', shipID='$shipID', shipImg='$shipImg' WHERE arrivalID = $arrivalID";
            
            $upload = mysqli_query($conn, $update);

            if ($upload) {
                move_uploaded_file($shipImg_tmp_name, $shipImg_folder);
                $message[] = 'ship arrival updated successfully.';
            } else {
                $message[] = 'Could not update this ship arrival.';
            }
        } else {
            $message[] = 'Invalid ship ID.';
        }
    }
}
?>