<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");

?>




<?php
$L_upp = $_POST['Lupp'];
   
if($L_upp==true)
{
    ?>
<!DOCTYPE html>
<html>
<title>Update product</title>
<body>
<h2><b>Update product</b></h2>
<form  method="POST" action="../controller/UpdateproductCheck.php"onsubmit="return validateForm()">
  <fieldset>
  <legend><h3><b>product</b></h3></legend>
  
  <h4>   
                                     Productid :     <input type="INT" name="Productid" value="" ><br>
                                     Productname   :<input type="text" name="Productname" value="" > <br>
                                      Quantity       :<input type="INT" name="Quantity" value="" > <br>
                    <input type="submit" name="submit" value="submit"><h4>
  </fieldset>
</form>
<td colspan="2" align="center"><a href="../views/"><h2>Go Back</h2></a></td>
</body>
</html>
<?php

}




