<?php

session_start();

if (isset($_POST['submit'])) {

    $id         = $_POST['id'];
    $password     = $_POST['password'];

    if (empty($id) || empty($password)) {
        echo "null submission found!";
    } else {
        $con = mysqli_connect('localhost', 'root', '', 'webtech');
        $sql = mysqli_query($con, "select * from users where id='$id' and password='$password'");

        if (mysqli_num_rows($sql)) {
            while ($row = mysqli_fetch_array($sql)) {
                $userType = $row["userType"];

                if ($userType == "User") {
                    header('location: user_login.php');
                } else if ($userType == "Admin") {
                    header('location: admin_login.php');
                }
            }
        } else {
            header('location: login.php?msg=invalid_id/password');
        }
    }
} else {
    header('location: login.html');
}
