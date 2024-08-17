<?php
@include 'connect.php';

if (isset($_GET['delete'])) {
    $cargoID = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM cargo WHERE cargoID = $cargoID");
    header('location: cargo_admin.php');
}
 ?>