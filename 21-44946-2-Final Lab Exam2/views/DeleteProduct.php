<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");

?>

<?php
$L_del = $_POST['Ldel'];
   
if($L_del==true)
{
    ?>
<!DOCTYPE html>
<html>
<title>Delete product</title>
<body>
<h2><b>Delete product</b></h2>
<form  method="GET" action="../controller/DeleteproductCheck.php"enctype="">
  <fieldset style="width:20%">
  <legend><h3><b>Product</b></h3></legend>
  
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







