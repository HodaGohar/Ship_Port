<?php
@include 'connect.php';

if (isset($_GET['delete'])) {
    $registerID = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM registration WHERE registerID = $registerID");
    header('location: user_admin.html');
}
 ?>