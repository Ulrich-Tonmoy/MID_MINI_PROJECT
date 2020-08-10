<?php
session_start();
if (isset($_POST['submit'])) {
    $old = $_POST['oldpass'];
    $new = $_POST['newpass'];
    $con = $_POST['conpass'];

    $file  = fopen('data.txt', 'r');
    $data  = fread($file, filesize('data.txt'));
    fclose($data);

    $user = explode('|', $data);

    $id         = trim($user[0]);
    $name       = trim($user[1]);
    $email      = trim($user[3]);
    $userType   = trim($user[4]);

    if (empty($old) || empty($new) || empty($con)) {
        echo "null submission found!";
    } else {
        if ($_SESSION['password'] == $old && $new == $con) {
            $file = fopen('data.txt', 'w');
            $data = $id . "|" . $name . "|" . $password . "|" . $email . "|" . $userType;
            fwrite($file, $data);
            fclose($file);
            echo "password changed";
        } else {
            header('location: change_password.php');
        }
    }
}
?>
<html>
<table style="width: 100%; border: 1px solid;">
    <tr>
        <td>
            <form action="" method="POST">
                <fieldset>
                    <legend><b>Change Password</b></legend>
                    <table>
                        <tr>
                            <td>Old Password</td>
                            <td>:</td>
                            <td><input name="oldpass" type="password" /></td>
                        </tr>
                        <tr>
                            <td>New Password</td>
                            <td>:</td>
                            <td><input name="newpass" type="password" /></td>
                        </tr>
                        <tr>
                            <td>Confirm Password</td>
                            <td>:</td>
                            <td><input name="conpass" type="password" /></td>
                        </tr>
                    </table>
                </fieldset>
                <hr />
                <input name="submit" type="submit" value="Change" />
                <a href="home.html">Home</a>
            </form>
        </td>
    </tr>
</table>

</html>