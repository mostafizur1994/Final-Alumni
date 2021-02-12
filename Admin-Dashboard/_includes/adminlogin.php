<?php 
    include('connection.php');
    session_start();

    $email = $_POST['email'];
    $password = $_POST['password'];
    $query = "SELECT * FROM `login` WHERE `login-email`='$email' AND `login-password`='$password'";
    $execute  = mysqli_query($conn,$query);
    $num = mysqli_num_rows($execute);

    if($num!=0) {
        $rec = mysqli_fetch_array($execute);
        $_SESSION['ID'] = $rec['login-id'];
        $_SESSION['name'] = $rec['login-name'];
        $_SESSION['email'] = $rec['login-email'];
        $_SESSION['password'] = $rec['login-password'];

        header('location: ../index.php');
    } else {
        $_SESSION['login'] = 0;
        header('location: ../login.php');
    }
    
?>