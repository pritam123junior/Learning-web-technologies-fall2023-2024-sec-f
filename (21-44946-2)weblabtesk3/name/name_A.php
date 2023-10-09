<html>
<head>
    <title>Name Show</title>
</head>
<body>
    <?php
        $name = $_REQUEST['name'];

        if($name=="")
        {
            echo "null value";
        }
        else
        {
            echo "$name";
        }
    ?>
</body>
</html>