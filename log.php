<?php

session_start();

if (isset($_POST['submit'])) {

    $id         = $_POST['id'];
    $password     = $_POST['password'];

    if (empty($id) || empty($password)) {
        echo "null submission found!";
    } else {
        $con = mysqli_connect('localhost', 'root', '', 'webtech');
        $sql = "select * from user where id='$id' and password='$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        if ($row > 0) {
            if ($row["userType"] == "User") {
                header('location: user_login.php');
            } else if ($row["userType"] == "Admin") {
                header('location: admin_login.php');
            }
        } else {
            header('location: login.php?msg=invalid_id/password');
        }
    }
} else {
    header('location: login.html');
}
