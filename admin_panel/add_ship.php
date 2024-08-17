<?php
@include 'connect.php';

if (isset($_POST['add_ship'])) {
    $shipName = $_POST['shipName'];
    $shipType = $_POST['shipType'];
    $maxCapacity = $_POST['maxCapacity'];
    $registrationDate = $_POST['registrationDate'];
    $ownerInfo = $_POST['ownerInfo'];
    $shipImg = $_FILES['shipImg']['name'];  
    $shipImg_tmp_name = $_FILES['shipImg']['tmp_name'];
    $shipImg_folder = 'images/' . $shipImg;

    if (empty($shipName) || empty($shipType) || empty($maxCapacity) || empty($registrationDate) || empty($ownerInfo) || empty($shipImg)) {
        $message[] = 'Please fill out all fields.';
    } else {
        
            $insert = "INSERT INTO ships(shipName, shipType, maxCapacity, registrationDate, ownerInfo, shipImg) VALUES('$shipName','$shipType','$maxCapacity', '$registrationDate', '$ownerInfo', '$shipImg')";
            $upload = mysqli_query($conn, $insert);

            if ($upload) {
                move_uploaded_file($shipImg_tmp_name, $shipImg_folder);
                $message[] = 'New ship added successfully.';
            } else {
                $message[] = 'Could not add this ship .';
            }
        }
}
header("Location: ships_admin.html");

?>