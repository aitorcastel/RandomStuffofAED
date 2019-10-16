<?php

    include("conexion.php");

    $Id=$_GET["Id"];
        $base->query("DELETE FROM estancias WHERE codResidencia='$Id'");
        $base->query("DELETE FROM residencias WHERE codResidencia='$Id'");

    header("Location:index.php");

?>