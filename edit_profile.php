<?php
session_start();


?>
<html>
<table border="1" style="width: 100%; border: 1px solid;">
  <tr>
    <th width="100px"><img src="logo.png" /></th>
    <th width="auto"></th>
    <th width="200px">
      <a href="">loggedin as
        <?php echo $_SESSION['userName'];   ?>| </a><a href="">logout </a>
    </th>
  </tr>

  <tr>
    <td>
      <h3>Account</h3>
      <hr />
      <ul>
        <li><a href="logged_in_dash.php">Dashboard</a></li>
        <li><a href="view_profile.php">View Profile</a></li>
        <li><a href="edit_profile.php">Edit Profile</a></li>
        <li><a href="">Change Profile Picture</a></li>
        <li><a href="change_password.php">Change password</a></li>
        <li><a href="login.html">Logout</a></li>
      </ul>
    </td>

    <td height="400px">
      <fieldset>
        <legend><b>EDIT PROFILE</b></legend>
        <form>
          <br />
          <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
              <td>Name</td>
              <td>:</td>
              <td>
                <input name="name" type="text" value="<?php echo $_SESSION['name']; ?>" />
              </td>
              <td></td>
            </tr>
            <tr>
              <td colspan="4">
                <hr />
              </td>
            </tr>
            <tr>
              <td>Email</td>
              <td>:</td>
              <td>
                <input name="email" type="text" value="<?php echo $_SESSION['email']; ?>" />
                <abbr title="hint: sample@example.com"><b>i</b></abbr>
              </td>
              <td></td>
            </tr>
            <tr>
              <td colspan="4">
                <hr />
              </td>
            </tr>
            <tr>
              <td>Gender</td>
              <td>:</td>
              <td>
                <input name="gender" type="radio" checked="checked" />Male
                <input name="gender" type="radio" />Female
                <input name="gender" type="radio" />Other
              </td>
              <td></td>
            </tr>
            <tr>
              <td colspan="4">
                <hr />
              </td>
            </tr>
            <tr>
              <td valign="top">Date of Birth</td>
              <td valign="top">:</td>
              <td>
                <input name="dob" type="text" value="<?php echo $_SESSION['dob']; ?>" />
                <br />
                <font size="2"><i>(dd/mm/yyyy)</i></font>
              </td>
              <td></td>
            </tr>
          </table>
          <hr />
          <input type="submit" value="Submit" />
        </form>
      </fieldset>
    </td>
    <td></td>
  </tr>

  <tr>
    <td></td>
    <td align="center">copyright &copy; 2017</td>
    <td></td>
  </tr>
</table>

</html>