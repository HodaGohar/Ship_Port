<?php
@include 'connect.php';

if (isset($_POST['add_crew'])) {
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
            $insert = "INSERT INTO crew(crewName, role, nationality, joinDate, contactInfo, crewImg, shipID) VALUES('$crewName','$role','$nationality','$joinDate','$email','$crewImg','$shipID')";
            $upload = mysqli_query($conn, $insert);

            if ($upload) {
                move_uploaded_file($crewImg_tmp_name, $crewImg_folder);
                $message[] = 'New member added successfully.';
            } else {
                $message[] = 'Could not add this member.';
            }
        } else {
            $message[] = 'Invalid ship ID.';
        }
    }
}
header("Location: crew_admin.html");
?>