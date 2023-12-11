<?php
include_once("../controller/registrationCheck.php")
?>

<html>
    <head>
        
        
    <script>
        function validateForm() {
            var id = document.forms["registrationForm"]["id"].value.trim();
            var password = document.forms["registrationForm"]["password"].value.trim();
            var confirmPassword = document.forms["registrationForm"]["confirmPassword"].value.trim();
            var name = document.forms["registrationForm"]["name"].value.trim();
            var email = document.forms["registrationForm"]["email"].value.trim();
            var gender = document.forms["registrationForm"]["gender"].value;
            var dob = document.forms["registrationForm"]["dob"].value;
            var userType = document.forms["registrationForm"]["type"].value;

            if (id === "" || password === "" || confirmPassword === "" || name === "" || email === "" || gender === "" || dob === "" || userType === "") {
                alert("Please fill in all the fields");
                return false;
            }

            if (password !== confirmPassword) {
                alert("Password and Confirm Password do not match");
                return false;
            }
           
            if (!/^\d+$/.test(id) || id.length < 3) {
                alert("Invalid ID format");
                return false;
            }

   

            if (!/^\d{4}-\d{2}-\d{2}$/.test(dob)) {
                alert("Invalid date of birth format");
                return false;
            }

        




            return true;
        }
    </script>
    </head>
  
<body>
    <center>
    
                <table height=635 width=1080>                        
                    <tr>
                        <td>
                            <form name="registrationForm" action="../controller/registrationCheck.php" method="POST" enctype="" onsubmit="return validateForm()">
                                    <fieldset>
                                        <legend>
                                            <h3>REGISTRATION</h3>
                                        </legend>
                                        <table>
                                            <tr>
                                                <td>Id</td>
                                                <td><input type="text" name="id" value="<?php echo $id ?>" /><br /></td>
                                            </tr>

                                            <tr>
                                                <td>Password</td>
                                                <td><input type="password" name="password" value="<?php echo $password ?>" /><br /></td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Confirm Password</td>
                                                <td><input type="password" name="confirmPassword" value="<?php echo $confirmPassword ?>" /><br /></td>
                                            </tr>

                                            <tr>
                                                <td>Name</td>
                                                <td><input type="text" name="name" value="<?php echo $name ?>" /><br /></td>
                                            </tr>

                                            <tr>
                                                <td>Email</td>
                                                <td><input type="email" name="email" value="<?php echo $email ?>" /><br /></td>
                                            </tr>
                                        </table>    
                                        <fieldset>
                                                <Legend>Gender</Legend>

                                                <input type="radio" name="gender" value="Male" /> Male
                                                <input type="radio" name="gender" value="Female" /> Female
                                                <input type="radio" name="gender" value="Other" /> Other <br>
                                        </fieldset><br>

                                        <fieldset>
                                        <Legend>Date of Birth</Legend>
                                                <input type="date" name="dob" value=""/> 
                                        </fieldset><br>
                                        
                                        <fieldset>
                                        <Legend>User Type</Legend>

                                            <select id="type" name="type" required>
                                            <option value="User">USER</option>
                                            <option value="Admin">ADMIN</option>
                                            <option value="Seller">SELLER</option>
                                            </select>

                                        </fieldset>

                                        <hr class="dotted-hr"> 
                                        <input type="submit" value="Sign Up" name="submit" />
                                    </fieldset>
                            </form>
                        </td>
                    </tr>
                </table>
               
 </center>
    
</body>    
</html>
