<?php
@include 'connect.php';

// Check if the 'edit' parameter is set
if (!isset($_GET['edit']) || empty($_GET['edit'])) {
    die('No crew ID provided.');
}

$crewID = $_GET['edit'];
// $crewID = $_GET['edit'];

if(isset($_POST['update_crew'])){
    $crewName = $_POST['crewName'];
    $role = $_POST['role'];
    $nationality = $_POST['nationality'];
    $joinDate = $_POST['joinDate'];
    $email = $_POST['contactInfo'];
    $crewImg = $_FILES['crewImg']['name'];
    $shipID = $_POST['shipID'];
    $crewImg_tmp_name = $_FILES['crewImg']['tmp_name'];
    $crewImg_folder = 'images/' . $crewImg;

    if (empty($crewName) || empty($role) || empty($nationality) || empty($joinDate) || empty($email) || empty($crewImg)) {
        $message[] = 'Please fill out all fields.';
    } else {
        $check_ship = mysqli_query($conn, "SELECT * FROM ships WHERE shipID = '$shipID'");
        
        if (mysqli_num_rows($check_ship) > 0) {
            $update = "UPDATE crew SET crewName='$crewName', role='$role', nationality='$nationality', joinDate='$joinDate', contactInfo='$email', crewImg='$crewImg', shipID='$shipID' WHERE crewID = $crewID";
            
            $upload = mysqli_query($conn, $update);

            if ($upload) {
                move_uploaded_file($crewImg_tmp_name, $crewImg_folder);
                $message[] = 'Member updated successfully.';
            } else {
                $message[] = 'Could not update this member.';
            }
        } else {
            $message[] = 'Invalid ship ID.';
        }
    }
}
header("Location: update_crew.html");

?>