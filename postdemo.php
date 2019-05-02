<?php
include_once 'DBConnect.php';

OpenCon();

if (!empty($_POST['temp']) && !empty($_POST['light'])) {
    $temp = $_POST['temp'];
    $light = $_POST['light'];

    $sql = "INSERT INTO logs (light, temp) VALUES ('" . $light . "', '" . $temp . "')";

    if (mysqli_query($conn, $sql) === TRUE) {
        echo "OK";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

CloseCon($conn);
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<h1>Please</h1>
</body>
</html>