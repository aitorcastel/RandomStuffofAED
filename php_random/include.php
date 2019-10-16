<?php

	// include si no encuentra da warning
	// require da error y para ejecución
	include "script2.php";
	require "script1.php";

	//include_once
	//require_once

	$var_temp = "hola";
	echo $var_temp . " " . $var1 . "\n";
	
	//print_r("-----------");
	echo $var_temp . " " . $var2 .  "\n";


?>