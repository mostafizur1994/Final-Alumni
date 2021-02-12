<?php 
    include('connection.php');
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $query = "INSERT INTO `login`(`login-name`, `login-email`, `login-password`) VALUES ('$name','$email','$password')";
    $execute = mysqli_query($conn,$query);
    header('location: ../login.php');
?>