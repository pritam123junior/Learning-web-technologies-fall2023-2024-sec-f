<html>
<head>
    <title>Gender Input</title>
</head>
<body>
    <fieldset>
        <legend>Gender</legend>
        <form action="" method="post">
            <input type="radio" name="gender" value="<?php echo isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : ''; ?>" > Male
            <input type="radio" name="gender" value="<?php echo isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : ''; ?>" > Female
            <input type="radio" name="gender" value="<?php echo isset($_POST['gender']) ? htmlspecialchars($_POST['gender']) : ''; ?>" > Other
            <br>
            <hr>
            <input type="submit" id="" name="" value="Submit">
        </form>
    </fieldset>
    <?php
        $gender = $_REQUEST['gender'];

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['gender'])) {
            $gender = $_POST["gender"];
            echo "<h1>$gender</h1>";
        }

        //echo "<br> <h1>$gender</h1>";
    ?>
</body>
</html>