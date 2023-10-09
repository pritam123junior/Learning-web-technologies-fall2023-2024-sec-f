<html>
<head>
    <title>Email Input</title>
</head>
<body>
    <fieldset>
        <legend>Email</legend>
        <form action="" method="post">
            <input type="email" name="email" value="" required>
            <br>
            <hr>
            <input type="submit" id="" name="" value="Submit">
        </form>
    </fieldset>
    <?php
        $email = $_REQUEST['email'];

        if($email=="")
        {
            echo "";
        }
        else
        {
            echo "<br> <h1>Email : $email</h1>";
        }
    ?>
</body>
</html>