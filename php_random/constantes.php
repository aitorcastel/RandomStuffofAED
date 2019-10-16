<?php

 #constante simple
 define ("mi_constante", "hola");
 
 #constante array
 define ("my_array", array("2","3"));

 $_miconstante = mi_constante;

 echo mi_constante . "\n";
 
 echo $_miconstante . "\n";

 print_r (my_array[0]);
?>