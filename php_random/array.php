<?php
	// puede contener cualquier tipo de valor
	
	$array_1 = array("1","2","3","4", array('x','y','z'));
	$array_2 = array("uno","dos","tres","cuatro");
	$test = '1';

	echo $array_2[1] . "\n";
	print_r($array_2);
	print_r($array_1);
	
	$array_ass = array('1' => 'valor1', '2' => 'valor2','3' => 'valor3');

	echo is_array($array_ass);
	echo is_array($test);
	echo is_array($array_2);
	echo "<pre>";
	echo $array_ass[2];
	
?>