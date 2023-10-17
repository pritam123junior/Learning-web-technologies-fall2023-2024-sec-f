<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
</head>
<body>
    <table border="1" cellspacing="0" align="center" cellpadding="5">
        <tr>
            <td><img src="company3.png" alt="" height="70px"></td>
            <td width="500px" align="right">
                Login as |
                <a href="login.php">Logout</a>
            </td>
        </tr>
        <tr>
            <td align="center">Account <hr>
                <ul>
                    <li><a href="dashboard.php">DashBoard</a></li>
                    <li><a href="viewprofile.php">View Profile</a></li>
                    <li><a href="editprofile.php">Edit Profile</a></a></li>
                    <li><a href="changepicture.php">Change Profile Picture</a></li>
                    <li><a href="changepassword.php">Change Password</a></li>
                    <li><a href="logout.php">log Out</a></li>
                </ul>
            </td>
            <td >
           <fieldset>
                   <legend>PROFILE PICTURE</legend>
                         <form action="profilePicture.php" method="post" enctype="multipart/form-data">
                              <img src="User_80px.png"  width="180" height="180"> <br>
                              <input type="file" id="" name="image" value="" accept="image/jpeg, image/jpg, image/png" required>
                              <hr>
                               <input type="submit" id="" name="" value="Submit">
                             </form>
             </fieldset>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">Copyright &copy; 2017</td>
        </tr>
    </table>
</body>
</html>