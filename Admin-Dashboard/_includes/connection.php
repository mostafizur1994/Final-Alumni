<?php 
    $host = 'localhost';
    $user = 'root';
    $password = '';
    $db = 'alumni';  
    $conn = new mysqli($host, $user, $password,$db) or die("Connect failed: %s\n". $conn -> error);
