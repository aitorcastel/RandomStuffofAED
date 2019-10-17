<?php

    try{

        $base = new PDO('mysql:host=localhost; dbname=bdresidenciasescolares', 'root','');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET CHARACTER SET UTF8");

    }catch(Exception $e){
        
        die('[x] Error' - $e->getMessage());
        echo "[x] Error in line: " . $e->getLine();
        
    }




?>