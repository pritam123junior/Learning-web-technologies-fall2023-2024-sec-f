<html>
    <head>
        <title>blood group</title>
    </head>
    <body>
        <form method="POST" action="bloodgroup_input_A.php">
            
            Blood Group   
            <select name="bloodgroup">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>



            </select> <br>
            <hr>
            <input type="submit" name="" value="submit">
            
        </form>
        <?php
        $bloodgroup = $_REQUEST['bloodgroup'];

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['bloodgroup'])) {
            $bloodgroup = $_POST["bloodgroup"];
            echo "<h1>$bloodgroup</h1>";
        }

        
        ?>
    </body>
</html>    