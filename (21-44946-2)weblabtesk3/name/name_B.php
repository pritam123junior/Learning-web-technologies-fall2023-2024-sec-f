<html>
<head>
    <title>Name Input</title>
</head>
<body>
    <fieldset>
        <legend>Name</legend>
        <form action="" method="post">
            <input type="text" name="name" value="" required>
            <br>
            <hr>
            <input type="submit" name="" value="Submit">
        </form>
    </fieldset>
    <?php
        $name = $_REQUEST['name'];

        if($name=="")
        {
            echo "";
        }
        else
        {
            echo "<br> <h1>Name : $name</h1>";
        }
    ?>
</body>
</html>