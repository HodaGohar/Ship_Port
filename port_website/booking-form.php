<?php
@include 'connect.php';
if(isset($_POST['send'])){
    $companyName =$_POST['companyName'];
    $email =$_POST['email'];
    $number =$_POST['number'];
    $address =$_POST['address'];
    $destinationPort = $_POST['destinationPort'];
    $cargoDescription = $_POST['cargoDescription'];
    $cargoWeight = $_POST['cargoWeight'];
    $cargoQuantity = $_POST['cargoQuantity'];
    $paymentMethod = $_POST['paymentMethod'];
    $shippingDate = $_POST['shippingDate'];


$userSelect = "SELECT registerID FROM registration WHERE email = '$email'";
$userResult = mysqli_query($conn, $userSelect);

if ($userRow = mysqli_fetch_assoc($userResult)) {
    $userID = $userRow['registerID'];
} else {
    die('User not found'); 
}

$insert = "INSERT INTO trips (companyName, email, number, address, destinationPort, cargoDescription, cargoWeight, cargoQuantity, paymentMethod, shippingDate, registerID) VALUES ('$companyName', '$email', '$number', '$address', '$destinationPort', '$cargoDescription', '$cargoWeight', '$cargoQuantity', '$paymentMethod', '$shippingDate', '$userID')";
$upload = mysqli_query($conn, $insert);

if ($upload) {
    $msg[] = 'your trip booked successfully.';
} else {
    $msg[] = 'Could not book this trip.';
}
        };
        header("Location: ship_port.html");


?>