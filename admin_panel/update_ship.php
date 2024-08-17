<?php
@include 'connect.php';
$shipID = $_GET['edit'];
if(isset($_POST['update_ship'])){
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
    }
            $update = "UPDATE ships SET shipName='$shipName', shipType='$shipType', maxCapacity='$maxCapacity', registrationDate='$registrationDate', registrationDate='$registrationDate', shipImg='$shipImg'  WHERE shipID=$shipID";
            
            $upload = mysqli_query($conn, $update);

            if ($upload) {
                move_uploaded_file($shipImg_tmp_name, $shipImg_folder);
                $message[] = 'ship updated successfully.';
            } else {
                $message[] = 'Could not update this ship.';
            }
        }
?>