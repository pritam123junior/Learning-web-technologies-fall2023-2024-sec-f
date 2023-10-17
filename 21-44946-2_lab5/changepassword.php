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
            <td width="300px" align="right">
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
            
            <td colspan="2" height="150px">
                <fieldset>
                    <legend>Change PASSWORD</legend>
                    <table>
                        <tr>
                            <td> Current password</td>
                            <td>: <input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td> New password </td>
                            <td>: <input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td> Retype New password </td>
                            <td>: <input type="text" name="" id=""></td>
                        </tr>
                        <tr>
                            <td colspan="2"><hr></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" id="" value="Submit">
                            </td>
                        </tr>
                    </table>
                </fieldset>
            </td>
        
        </tr>
        <tr>
            <td colspan="2" align="center">Copyright 2017</td>
        </tr>
    </table>
</body>
</html>