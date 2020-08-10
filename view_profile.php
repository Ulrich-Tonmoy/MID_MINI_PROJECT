<?php
session_start();
$file  = fopen('data.txt', 'r');
$data  = fread($file, filesize('data.txt'));
fclose($data);

$user = explode('|', $data);

$id         = trim($user[0]);
$name       = trim($user[1]);
$email      = trim($user[3]);
$userType   = trim($user[4]);
?>

<html>
<table border="1" style="width: 100%; border: 1px solid;">
    <tr>
        <td align="center" colspan="2">
            <h1>Profile</h1>
        </td>
    </tr>
    <tr>
        <td>Id</td>
        <td><?php echo $id; ?></td>
    </tr>
    <tr>
        <td>Name</td>
        <td><?php echo $name ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><?php echo $email ?></td>
    </tr>
    <tr>
        <td>User Type</td>
        <td><?php echo $userType ?></td>
    </tr>
    <tr>
        <td align="right" colspan="2"><a href="">Go Home</a></td>
    </tr>
</table>

</html>