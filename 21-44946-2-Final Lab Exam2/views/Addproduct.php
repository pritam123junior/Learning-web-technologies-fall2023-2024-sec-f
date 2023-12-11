
<?php
include_once("../controller/view_userCheck.php");
include_once("../controller/userData.php");

?>

<?php
$L_add = $_POST['Ladd'];
   
        if($L_add==true)
        {
            ?>
            <!DOCTYPE html>
            <html>
            <title>Add New Product</title>
            <body>
            <h2><b>Add Product</b></h2>
            <form method="POST" action="../controller/AddproductCheck.php" onsubmit="return validateForm()">
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



