<?php
    include('db.php');

    $con = getConnection();

    if (!$con)
    {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = $_POST['query'];

    $sql = "SELECT * FROM employeeInfo WHERE employee_name LIKE '%$query%'";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            echo '<p>' . $row['name'] . '</p>';
        }
    }
    else
    {
        echo '<p>No results found</p>';
    }
    mysqli_close($con);
?>