
<?php
include_once("../controller/loginCheck.php")
?>

<html>

<head>
    <title>Login</title>
	
  

    <script>
        function validateForm() {
            var userId = document.forms["loginForm"]["id"].value.trim();
            var password = document.forms["loginForm"]["password"].value.trim();

            if (userId === "") {
                alert("User Id must be filled out");
                return false;
            }

            if (password === "") {
                alert("Password must be filled out");
                return false;
            }


            return true;
        }
    </script>

</head>

<body>
    
       <center>
        
            
		    <table height=600 width=1080>			   					
				<tr>
                <td>
                   <div class="row" style="text-align: center;">
                    <form name="loginForm" action="../controller/loginCheck.php" method="POST" enctype="" onsubmit="return validateForm()">
                        <fieldset>
                            <legend>
                                    <h3>LOGIN</h3>
                                    </legend>
                            <table>
                                <tr>
                                    <td>User Id</td>
                                    <td><input type="text" name="id" value="<?php echo $id ?>" /><br></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td><input type="password" name="password" value="<?php echo $password ?>" /><br></td>
                                </tr>
                            </table>
                            <hr class="dotted-hr"> 
                            <input type="submit" value="Login" name="submit">
                        </fieldset>
                    </form> 
                                      
                </td>                
               </tr>
					
            </table>  

            </div>
            </main>
         

				
        </center>
  
</body>

</html>

