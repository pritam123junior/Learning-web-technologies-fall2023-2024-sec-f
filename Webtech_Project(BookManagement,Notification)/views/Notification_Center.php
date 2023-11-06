<!DOCTYPE html>
<html>
<title>Update Book</title>
<body>
<h2>Update Book</h2>
<form  method="POST" action="../controller/NotificationCheck.php"enctype="">
  <fieldset>
  <legend>Book Management</legend>
            User_id: <input type="text" name="User_id" value="" > <br>
           Notification_id: <input type="text" name="Notification_id" value="" > <br>
            Notification_Data: <input type="text" name="Notification_Data" value="" > <br>
                     <input type="submit" name="submit" value="submit">
  </fieldset>
</form>
</body>
</html>
<?php