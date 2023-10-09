<html>
<head>
    <title>Gender Input</title>
</head>
<body>
    <fieldset>
        <legend>Gender</legend>
        <form action="" method="post">
            <input type="radio" name="gender" value="Male" > Male
            <input type="radio" name="gender" value="Female" > Female
            <input type="radio" name="gender" value="Other" > Other
            <br>
            <hr>
            <input type="submit" id="" name="" value="Submit">
        </form>
    </fieldset>
    <?php
        $gender = $_REQUEST['gender'];

        echo "<br> <h1>$gender</h1>";
    ?>
</body>
</html>