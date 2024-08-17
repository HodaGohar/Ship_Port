<?php
@include 'connect.php';
$tripRequestID = $_GET['edit'];
if (isset($_POST['update_request'])) {
    $paymentStatus = $_POST['paymentStatus'];
    $tripStatus = $_POST['tripStatus'];
    $registerID = $_POST['registerID'];
    $tripID = $_POST['tripID']; 
    $companyName =$_POST['companyName'];
    $number =$_POST['number'];
    $address =$_POST['address'];
    $destinationPort = $_POST['destinationPort'];



    if (empty($paymentStatus) || empty($tripStatus) || empty($registerID) || empty($tripID) || empty($companyName) || empty($number) || empty($address) || empty($destinationPort)) {
        $message[] = 'Please fill out all fields.';
    }

    $update = "UPDATE tripRequest SET companyName='$companyName', number='$number', address='$address', destinationPort='$destinationPort', paymentStatus='$paymentStatus',tripStatus='$tripStatus',registerID ='$registerID', tripID='$tripID'  WHERE tripRequestID=$tripRequestID";
            
    $upload = mysqli_query($conn, $update);

    if ($upload) {
        $message[] = 'trip updated successfully.';
    } else {
        $message[] = 'Could not update this trip.';
    }
};

?>