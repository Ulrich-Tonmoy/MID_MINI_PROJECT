<?php

if (isset($_POST['submit'])) {
    $id               = $_POST['id'];
    $name             = $_POST['name'];
    $email            = $_POST['email'];
    $password         = $_POST['password'];
    $confirmPassword  = $_POST['confirmPassword'];
    $userType         = $_POST['userType'];

    if (empty($name) || empty($password) || empty($confirmPassword) || empty($email) || empty($id) || empty($userType)) {
        echo "null submission found!";
    } else {
        $con = mysqli_connect('localhost', 'root', '', 'webtech');

        $sql = "INSERT INTO user (id,name,email,password,userType)
        VALUES($id,$name,$email,$password,$userType)";
        $result = mysqli_query($con, $sql);
        if ($result) {
            header('location: login.html');
        }
    }
} else {
    echo "error!";
}
