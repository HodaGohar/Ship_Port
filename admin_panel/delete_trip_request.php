<?php
@include 'connect.php';
if (isset($_GET['delete'])) {
    $tripRequestID = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM tripRequest WHERE tripRequestID = $tripRequestID");
    header('location: trip_request_admin.php');
}

?>