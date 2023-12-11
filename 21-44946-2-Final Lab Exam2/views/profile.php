<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");
//include_once("../controller/SessionCheck.php");

?>

<html>
    <head>
        <title>Profile</title>
       
    </head>

<body>
   

        <table height=635 width=1080>
            
           
            
            <tr>
                
                <td>
					<fieldset>
						<legend> PROFILE </legend>
						<table height="30" width="500">				
							<tr>
								<td>ID</td>
								<td align="left"> :<?php echo $user['id'] ?> </td>
                                                
                                <td colspan="2" rowspan="3">  </td>
							</tr>
							<tr>
								<td>Name</td>
								<td>:<?php echo $user['name'] ?></td>
                              
							</tr>
                            </tr>
                                <tr>
								<td>Gender</td>
								<td>:<?php echo $user['gender'] ?></td>
							</tr>
                            <tr>
								<td>Email</td>
								<td>:<?php echo $user['email'] ?></td>
							</tr>
                               <tr>
								<td>DOB</td>
								<td>:<?php echo $user['dob'] ?></td>
                               
							</tr>							
					    </table>
					</fieldset>                    
					
                </td>
            </tr>
        </table>
        
        
    </body>
</html>