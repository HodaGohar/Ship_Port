<?php
@include 'connect.php';

if (isset($_GET['delete'])) {
    $serviceID = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM services WHERE serviceID = $serviceID");
    header('location: services_admin.html');
}

 ?>