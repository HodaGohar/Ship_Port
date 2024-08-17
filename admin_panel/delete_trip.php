<?php
@include 'connect.php';

if (isset($_GET['delete'])) {
    $tripID = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM trips WHERE tripID = $tripID");
    header('location: trips_admin.php');
}
 ?>