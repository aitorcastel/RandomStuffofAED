<?php

    /* Parametros a configurar:
    *
    *  host: hace referencia a donde se encuentra la base de datos, la ip por así decirlo. Como trabajamos en local dejarlo como localhost
    *  database: nombre de la base de datos
    *  user: usuario con permisos de edición en la misma, en este caso root, aunque esto es una mala práctica.
    *  keydb: contraseña por defecto para conectar con la base de datos, en este caso, valor vacío.
    **/
    
    $host = "localhost";
    $database = "bdresidenciasescolares";
    $user = "root";
    $keydb = "";

    // Seleccionamos la tabla sobre la que realizamos la práctica, ResidenciasEscolares.

    $table = "residencias";

    // Creamos la conexion

    $conecction = new mysqli($host,$user,$keydb,$database);

    // Por si tenemos errores creamos el siguiente condicional para poder comprobarlo isofacto

    if($conecction -> connect_errno){
        echo "[X] Error en a la hora de establecer la conexión.";
        exit();
    }

?>