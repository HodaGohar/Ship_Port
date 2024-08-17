<?php
@include 'connect.php';

if (isset($_GET['delete'])) {
    $shipID = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM ships WHERE shipID = $shipID");
    header('location: ships_admin.php');
}
 ?>