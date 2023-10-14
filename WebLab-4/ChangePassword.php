<?php 
    $currentPassword = $_REQUEST['currentPassword'];
    $newPassword = $_REQUEST['newPassword'];
    $retypedPassword = $_REQUEST['retypedPassword'];
    
    if ($newPassword == $currentPassword)
    {
        echo "New Password should not be the same as the Current Password";
    }
    elseif ($newPassword != $retypedPassword)
    {
        echo "New Password and Retyped Password do not match";
    }
    else
    {
        echo "Password changed successfully";
    }
?>
