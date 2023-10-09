<html>
<head>
    <title>Email Input</title>
</head>
<body>
    <fieldset>
        <legend>Email</legend>
        <form method="post">
            <input type="email" id="email" name="email" value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>" required>
            <input type="submit" value="Submit">
        </form>
    </fieldset>
    
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['email']))
        {
            $email = $_POST["email"];
            echo "<h1>Hello, $email!</h1>";
        }
    ?>
</body>
</html>