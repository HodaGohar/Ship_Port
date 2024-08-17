<?php
@include 'connect.php';
if (isset($_GET['delete'])) {
    $contactID = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM contact WHERE  contactID= $contactID");
    header('location: contact_admin.php');
}
?>