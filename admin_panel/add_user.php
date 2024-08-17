<?php
@include 'connect.php';

if (isset($_POST['add_user'])) {
    $firstName =$_POST['firstName'];
    $lastName =$_POST['lastName'];
    $email =$_POST['email'];
    $number =$_POST['number'];
    $pass = $_POST['password'];
    $gender = $_POST['gender'];
    $userType = $_POST['userType'];

    if (empty($firstName) || empty($lastName) || empty($email) || empty($number) || empty($pass) || empty($gender) || empty($userType)) {
        $message[] = 'Please fill out all fields.';
    } else {
            $insert = "INSERT INTO registration(firstName, lastName, email, number, password, gender, userType) VALUES('$firstName','$lastName','$email', '$number','$pass', '$gender', '$userType')";
            $upload = mysqli_query($conn, $insert);

            if ($upload) {
                $message[] = 'New user added successfully.';
            } else {
                $message[] = 'Could not add this user .';
            }
        }
}
?>