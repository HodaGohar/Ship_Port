<?php
@include 'connect.php';

if(isset($_POST['send_message'])){
    $name =$_POST['name'];
    $email =$_POST['email'];
    $number =$_POST['number'];
    $message =$_POST['message'];


$userSelect = "SELECT registerID FROM registration WHERE email = '$email'";
$userResult = mysqli_query($conn, $userSelect);

if ($userRow = mysqli_fetch_assoc($userResult)) {
    $userID = $userRow['registerID'];
} else {
    die('User not found');
}


$insert = "INSERT INTO contact (name, email, number, message, registerID) VALUES ('$name', '$email', '$number', '$message', '$userID')";
$load = mysqli_query($conn, $insert);

if ($load) {
    $mess[] = 'your message send successfully.';
} else {
    $mess[] = 'Could not send this message.';
}
};
// header("Location: ship_port.html");

?>