<?php
@include 'connect.php';

if (isset($_GET['delete'])) {
    $crewID = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM crew WHERE crewID = $crewID");
    header('location: crew_admin.php');
}
 ?>