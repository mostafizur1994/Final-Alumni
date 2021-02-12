<?php 
include('../connection.php');

session_start();
$title = mysqli_real_escape_string($conn,$_POST['title']);
$description = mysqli_real_escape_string($conn,$_POST['description']);
$blog = mysqli_real_escape_string($conn,$_POST['blog']);
if(isset($_POST['image']) && $_SESSION['editID']) {
                    $imgname = $_POST['image'];
                } else {
                    $imgname = $_FILES['img']['name'];
                }

                
        $imgtype = $_FILES['img']['type'];
        $imgtemp = $_FILES['img']['tmp_name'];


        if(!isset($_SESSION['editID'])) {
            if($imgtype == 'image/jpg' || $imgtype == 'image/png' || $imgtype == 'image/jpeg') {
                $dir = '/opt/lampp/htdocs/Alumni/Admin-Dashboard/uploads/';
                move_uploaded_file($imgtemp,$dir.$imgname);
                
                $insert = "INSERT INTO `blog`(`blog-img`, `blog-title`, `blog-description`,`blog`) VALUES ('$imgname','$title','$description','$blog')";

                
            } 
    }

     else {
            $id = $_SESSION['editID'];
            $insert = "UPDATE `blog` SET
            `blog-title`='$title',
            `blog-description`='$description',
            `blog`='$blog'
            WHERE `blog-id`=$id";

            $_SESSION['submit'] = 1;
            unset($_SESSION['editID']);
            }
  
            $execute = mysqli_query($conn, $insert);

header("location: ../../blog-form.php");