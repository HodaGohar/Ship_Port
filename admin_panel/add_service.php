<?php
@include 'connect.php';

if (isset($_POST['add_service'])) {
    $portID = $_POST['portID'];
    $iconClass = $_POST['iconClass'];
    $serviceName = $_POST['serviceName'];
    $ServiceDescription = $_POST['ServiceDescription'];
    $ServicePrice = $_POST['ServicePrice'];
    $OperatingHours = $_POST['OperatingHours'];
    $ContactInfo = $_POST['ContactInfo'];
    $status = $_POST['status'];


    if (empty($portID) || empty($iconClass) || empty($serviceName) || empty($ServiceDescription) || empty($ServicePrice) || empty($OperatingHours) || empty($ContactInfo) || empty($status)) {
        $message[] = 'Please fill out all fields.';
    }else {

            $insert = "INSERT INTO services(portID, iconClass, serviceName, ServiceDescription, ServicePrice, OperatingHours, ContactInfo, status) VALUES('$portID','$iconClass','$serviceName','$ServiceDescription','$ServicePrice','$OperatingHours','$ContactInfo','$status')";
            $upload = mysqli_query($conn, $insert);

            if ($upload) {
                $message[] = 'New service added successfully.';
            } else {
                $message[] = 'Could not add this service.';
            }
        }
    };
?>