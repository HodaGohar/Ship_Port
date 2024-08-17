<?php
@include 'connect.php';

if (isset($_POST['add_request'])) {
    $paymentStatus = $_POST['paymentStatus'];
    $tripStatus = $_POST['tripStatus'];
    $registerID = $_POST['registerID'];
    $tripID = $_POST['tripID']; 

    if (empty($paymentStatus) || empty($tripStatus) || empty($registerID) || empty($tripID)) {
        $message[] = 'Please fill out all fields.';
    } else {
        $insert = "INSERT INTO tripRequest (paymentStatus, tripStatus, registerID, tripID) VALUES ('$paymentStatus', '$tripStatus', '$registerID', '$tripID')";
        $upload = mysqli_query($conn, $insert);

        if ($upload) {
            $message[] = 'New trip request added successfully.';
        } else {
            $message[] = 'Could not add this trip request .';
        }
    }
}
?>