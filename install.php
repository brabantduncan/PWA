<?php
session_start();
include_once 'DBConnect.php';

OpenCon();

//Sr No, Station, Status(OK, NM, WM, ACK) Date, Time
//1         A          NM                 12-5-18    12:15:00 am
// sql to create table
$sql = "CREATE TABLE logs (
	id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
	light VARCHAR(30),
	temp VARCHAR(30),
	remark VARCHAR(50),
	`Date` DATE NULL,
	`Time` TIME NULL, 
	`TimeStamp` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
	)";

if ($conn->query($sql) === TRUE) {
    echo "Table logs created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

CloseCon($conn);

?>