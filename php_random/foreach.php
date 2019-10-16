<?php


	$arr = array("uno", "dos", "tres");
	foreach($arr as $value)
	{
		echo $value . "<br>";
	}

	$arr = array(
	"1" => "uno",
	"2" => "dos",
	"3" => "tres"
	);

	foreach($arr as $key => $value)
	{
		echo $key . " = " .  $value . "<br>";
	}

?>