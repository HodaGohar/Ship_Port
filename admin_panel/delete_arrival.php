<?php
@include 'connect.php';

if (isset($_GET['delete'])) {
    $arrivalID = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM shiparrivals WHERE arrivalID = $arrivalID");
    header('location: arrivals_admin.html');
}
 ?>