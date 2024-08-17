<?php
@include 'connect.php';
$serviceID = $_GET['edit'];

if(isset($_POST['update_service'])){
    $portID = $_POST['portID'];
    $iconClass = $_POST['iconClass'];
    $serviceName = $_POST['serviceName'];
    $ServiceDescription = $_POST['ServiceDescription'];
    $ServicePrice = $_POST['ServicePrice'];
    $OperatingHours = $_POST['OperatingHours'];
    $ContactInfo = $_POST['ContactInfo'];
    $status = $_POST['status'];


    
    if (empty($portID) || empty($iconClass) || empty($serviceName) || empty($ServiceDescription) || empty($ServicePrice) || empty($OperatingHours) || empty($ContactInfo) || empty($status)) {
        $message[] = 'Please fill out all fields.';}
            $update = "UPDATE services SET iconClass='$iconClass', serviceName='$serviceName', ServiceDescription='$ServiceDescription', ServicePrice='$ServicePrice', OperatingHours='$OperatingHours', ContactInfo='$ContactInfo', status='$status' WHERE serviceID = $serviceID";
            
            $upload = mysqli_query($conn, $update);

            if ($upload){
                $message[] = 'service updated successfully.';
            } else {
                $message[] = 'Could not update this service.';
            }
        };
?>