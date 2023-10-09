<html>
    <head>
        <title></title>
    </head>
    <body>
        <form method="POST" action="degreehandler.php">
            <fieldset>
                <Legend>Degree</Legend>
            
            <input type="checkbox" name="degree[]" value="SSC"/> SSC
            <input type="checkbox" name="degree[]" value="HSC"/> HSC
            <input type="checkbox" name="degree[]" value="BSc"/> BSc
            <input type="checkbox" name="degree[]" value="MSc"/> MSc
        <br>
    </fieldset>
    <?php
        $degree = $_REQUEST['degree'];

        echo "<br> <h1>$degree</h1>";
    ?>
</body>
</html>