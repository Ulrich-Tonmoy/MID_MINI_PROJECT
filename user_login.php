<?php
session_start();

?>

<html>
<table border="1" style="width: 100%; border: 1px solid;">
    <tr>
        <td>
            <h1>Welcome <?php echo $_SESSION["name"]   ?>!</h1>
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