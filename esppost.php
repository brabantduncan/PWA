<?php
$Temp = $_POST["temperature"];

$Light = $_POST["light"];

$Write = "<p>Temperature : " .$Temp. " Celsius </p>" ."<p>Light : ".$Light." lux</p>";

file_put_contents('sensor.html', $Write);
?>
<?php echo $Write ?></h>

