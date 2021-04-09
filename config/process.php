<?php

$mysqli = new mysqli('127.0.0.1:3306','root','','summerpro') or die(mysqli_error($mysqli));

if (isset($POST['save'])){
    $username = $_POST['name'];
    $email = $_POST['email'];
    $password=$_POST['psw'];
    $remember_token=$_POST['psw-repeat'];

    $mysqli->query("INSERT INTO DATA(username, email,password,confirmpassword) VALUES('$username,$email,$psw, $psw')") or
    die($mysqli->error);
}




?>