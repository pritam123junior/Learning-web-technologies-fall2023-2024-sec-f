
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
</head>
<body>
    <form action="" method="post">
    <table border="1" cellspacing="0" align="center" cellpadding="5">
        <tr>
            <td><img src="company3.png" alt="" height="60px"></td>
            <td width="500px" align="right">
                Login as|
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
                <form action="" method="">
                    <fieldset>
                        <legend>EDIT PROFILE</legend>
                        <table align="center">
                            <tr>
                                <td>Name</td>
                                <td>:<input type="text" name="" id=""></td>
                            </tr>
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>
                                    :<input type="email" name="email" id="">
                                    <input type="submit"  value="i" title="hint: example@example.com">
                                </td>
                                
                            </tr>
                            
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Gender</td>
                                <td>
                                    <input type="radio" name="gender" id="">Male
                                    <input type="radio" name="gender" id="">Female
                                    <input type="radio" name="gender" id="">Other
                                </td>
                            </tr>
                            
                            <tr>
                                <td colspan="2"><hr></td>
                            </tr>
                            <tr>
                                <td>Date Of Birth</td>
                                <td>
                                    :<input type="text" name="" id=""><i>(dd/mm/yyyy)</i>
                                </td>
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
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">Copyright &copy; 2017</td>
        </tr>
    </table>
    </form>
</body>
</html>
