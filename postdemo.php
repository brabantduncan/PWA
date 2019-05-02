<?php
include_once 'DBConnect.php';
OpenCon();

//Get current date and time
date_default_timezone_set('Europe/Belgium');
$d = date("Y-m-d");
//echo " Date:".$d."<BR>";
$t = date("H:i:s");

if(!empty($_POST['temp']) && !empty($_POST['light']))
{
    $temp = $_POST['temp'];
    $light = $_POST['light'];

    $sql = "INSERT INTO logs (light, temp, Date, Time)
		
		VALUES ('".$light."', '".$temp."', '".$d."', '".$t."')";

    if ($conn->query($sql) === TRUE) {
        echo "OK";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

CloseCon($conn);
?>