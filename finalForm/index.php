<!doctype html>
    <html>
    <head>
    <meta charset="utf-8">
    <title>AED - PHP + MYSQL</title>
    <link rel="stylesheet" type="text/css" href="hoja.css">
    </head>

    <body>
        <?php

            include("conexion.php");
            /*
            $conexion=$base->query("SELECT * FROM DATOS_USUARIOS");
            $registros=$conexion->fetchALL(PDO::FETCH_OBJ);
            */
            $registros=$base->query("SELECT * FROM residencias")->fetchALL(PDO::FETCH_OBJ);

            /*
            if(isset($_POST["cr"])){

                $nom=$_POST["nom"];
                $cod=$_POST["cod"];
                $precio=$_POST["precio"];
                $com=$_POST["com"];

                $sql="INSERT INTO residencias (nomResidencia, codUniversidad, precioMensual, comedor) VALUES(:nom, :cod, :precio, :com)";

                $resultado=$base->prepare($sql);

                $resultado->execute(array(":nom"=>$nom,":cod"=>$cod, ":precio"=>$precio, ":com"=>$com));

                header("Location:index.php");

            }
            */

        ?>

        <h1>Residencias Escolares</h1>
        <h3>Alumno: Aitor del Castillo </h3>

        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

        <table width="50%" border="0" align="center">
            <tr >
                <td class="primera_fila">codResidencia</td>
                <td class="primera_fila">nomResidencia</td>
                <td class="primera_fila">codUniversidad</td>
                <td class="primera_fila">precioMensual</td>
                <td class="primera_fila">comedor</td>
                <td class="sin">&nbsp;</td>
                <td class="sin">&nbsp;</td>
                <td class="sin">&nbsp;</td>
            </tr>  

            <?php
            
            foreach($registros as $residencia):

            ?>
            <tr>
                <td><?php echo $residencia->codResidencia?></td>
                <td><?php echo $residencia->nomResidencia?></td>
                <td><?php echo $residencia->codUniversidad?></td>
                <td><?php echo $residencia->precioMensual?></td>
                <td>
                    <?php 
                    if($residencia->comedor == 1){
                        echo "Sí";
                    }else{
                        echo "No";
                    }
                    ?>
                </td>

                <td class="bot">
                   <!--
                    <a href="borrar.php?Id=<?php //echo$residencia->codResidencia?>"><input type='button' name='del' id='del' value='Borrar'></a>
                    -->
                    <a href="conf_borrar.php?Id=<?php echo $residencia->codResidencia?>& nom=<?php echo $residencia->nomResidencia?>& cod=<?php echo $residencia->codUniversidad?>& precio=<?php echo $residencia->precioMensual?>& com=<?php echo $residencia->comedor?>">
                    <input type='button' name='del' id='del' value='Borrar'>
                </td>
                
                <td class='bot'>
                    <a href="editar.php?Id=<?php echo $residencia->codResidencia?>& nom=<?php echo $residencia->nomResidencia?>& cod=<?php echo $residencia->codUniversidad?>& precio=<?php echo $residencia->precioMensual?>& com=<?php echo $residencia->comedor?>">
                    <input type='button' name='up' id='up' value='Modificar'>
                    </a>
                </td>
            
            </tr> 

            <?php
            
            endforeach;

            ?>

            <tr>
     
                <td class='bot'>
                <a href=insertar.php>
                <input type='button' name='cr' id='cr' value='Dar de Alta'>
                </a>
                </td>
            </tr>    
        </table>
            </form>
        <p>&nbsp;</p>
    </body>
</html>

