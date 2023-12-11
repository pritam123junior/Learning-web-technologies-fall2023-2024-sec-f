<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");
include_once("../models/userModel.php");
$users = getAllUser();
?>

<html>
    <head>
        <title>Profile</title>
       
            <tr>
                
                <td>
                    <h2 class="user-list" align="center"><b>User List</b></h2>
                        <div  class="table-style">
                        <table class="user-table" border="1">
                            <tr class="row-style">
                                <td class="td-style">Id</td>
                                <td class="td-style">Name</td>
                                <td class="td-style">Email</td>
                                <td class="td-style">Gender</td>
                                <td class="td-style">Dob</td>
                                <td class="td-style">User type</td>
                            </tr>
                                <?php for ($i = 0; $i < count($users); $i++) { 
                                ?>
                            <tr class="row-style">
                                <td class="td-style"><?= $users[$i]['id'] ?></td>
                                <td class="td-style"><?= $users[$i]['name'] ?></td>
                                <td class="td-style"><?= $users[$i]['email'] ?></td>
                                <td class="td-style"><?= $users[$i]['gender'] ?></td>
                                <td class="td-style"><?= $users[$i]['dob'] ?></td>
                                <td class="td-style"><?= $users[$i]['type'] ?></td>
                            </tr>
                               <?php } 
                               ?>
                        </table>  
                        </div>             
                </td>
               </tr>
        </table>
        
 
    </body>


</html>

