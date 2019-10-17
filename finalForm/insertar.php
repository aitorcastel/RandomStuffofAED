<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modificar</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<h1>DAR DE ALTA</h1>
<h3>Alumno: Aitor del Castillo </h3>

<?php

    // Recibiendo los valores

    include("conexion.php");

    $registros=$base->query("SELECT * FROM universidades ")->fetchALL(PDO::FETCH_OBJ);

    if(isset($_POST["alta"])){

      $Id=$_POST["id"];
      $nom=$_POST["nom"];
      $cod=$_POST["cod"];
      $precio=$_POST["precio"];
      $com=$_POST["com"];

      $sql="INSERT INTO residencias (nomResidencia, codUniversidad, precioMensual, comedor) VALUES(:nom, :cod, :precio, :com)";
      $resultado=$base->prepare($sql);
      $resultado->execute(array(":nom"=>$nom, ":cod"=>$cod, ":precio"=>$precio, ":com"=>$com ));

      header("Location:index.php");

    }


?>


<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table width="25%" border="0" align="center">

    <tr>
      <td>NomResidencia</td>
      <td>
        <label for="nom"></label>
        <input type="text" name="nom" id="nom">
    </td>
    </tr>
    
    <tr>
      <td>CodUniversidad</td>
      <td>
       <label for="cod">
        <!--
          <input type="text" name="cod" id="cod" value="<?php //echo $cod?>">
        -->
         <select name="cod" id="cod">

          <?php 
            foreach($registros as $x):
          ?>
            <option value="<?php echo $x->codUniversidad;?>"><?php echo $x->nomUniversidad;?></option>
          <?php
            endforeach;
          ?>

        </select>
      
      </label>
      </td>
    </tr>

    <tr>
      <td>Precio Mensual</td>
        <td><label for="precio"></label>
            <input type="text" name="precio" id="precio">
        </td>
    </tr>

    <tr>
      <td>Comedor</td>
      <td>
        <label for="com"></label>
        <!-- 
          <input type="text" name="com" id="com" value="<?php //echo $com?>">
        -->
        <input type="hidden" name="com" value="0" >
        <input type="checkbox" name="com" value="1">
      </td>
    </tr>
    
    <tr>
      <td colspan="2">
        <input type="submit" name="alta" id="alta" value="Dar de alta">
        
        <input type="reset" name="clean" id="clean" value="Limpiar">

        <a href="index.php">
        <input type="button" name=no_alta" id="no_alta" value="Cancelar">
        </a>
      </td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>