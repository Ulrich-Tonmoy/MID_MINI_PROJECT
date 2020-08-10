<?php
session_start();
$file  = fopen('data.txt', 'r');
$data  = fread($file, filesize('data.txt'));
fclose($data);

$user = explode('|', $data);

$name       = trim($user[1]);

?>

<html>
<table border="1" style="width: 100%; border: 1px solid;">
    <tr>
        <td>
            <h1>Welcome <?php echo $name   ?>!</h1>
        </td>
    </tr>
    <tr>
        <td>
            <a href="view_profile.php">Profile</a> <br>
            <a href="change_password.php"> Change Password</a> <br>
            <a href="logout.php">Logout</a>
        </td>
    </tr>
</table>

</html>