<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<h1>MODIFICAR</h1>
<h3>Alumno: Aitor del Castillo </h3>

<?php

    // Recibiendo los valores

    include("conexion.php");

    // si no hemos pulsado el botón de actualizar
    if(!isset($_POST["modificar"])){

      $Id=$_GET["Id"];
      $nom=$_GET["nom"];
      $cod=$_GET['cod'];
      $precio=$_GET['precio'];
      $com=$_GET['com'];
    
    }else{

      $Id=$_POST["id"];
      $nom=$_POST["nom"];
      $cod=$_POST["cod"];
      $precio=$_POST["precio"];
      $com=$_POST["com"];

      $sql="UPDATE residencias SET nomResidencia=:nom, codUniversidad=:cod, precioMensual=:precio, comedor=:com WHERE codResidencia=:Id ";

      $resultado=$base->prepare($sql);
      $resultado->execute(array(":Id"=>$Id, ":nom"=>$nom, ":cod"=>$cod, ":precio"=>$precio, ":com"=>$com ));

      header("Location:index.php");


    }


?>


<p>
 
</p>
<p>&nbsp;</p>
<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
  <table width="25%" border="0" align="center">

    <!--
    <tr>
      <td></td>
      <td><label for="id"></label>
      <input type="hidden" name="id" id="id"></td>
    </tr>
    -->

    <!-- Se ha dejado comentado ya que no se modifica el código de la residencia-->
    <tr>
      <td>IdResidencia</td>
      <td><?php echo $Id ?></td>
      <input type="hidden" name="id" id="id" value="<?php echo $Id ?>">
    </tr>

    <tr>
      <td>NomResidencia</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $nom?>"></td>
    </tr>

    <tr>
      <td>CodUniversidad</td>
      <td><label for="cod"></label>
      <input type="text" name="cod" id="cod" value="<?php echo $cod?>"></td>
    </tr>

    <tr>
      <td>Precio Mensual</td>
      <td><label for="precio"></label>
      <input type="text" name="precio" id="precio" value="<?php echo $precio?>"></td>
    </tr>

    <tr>
      <td>Comedor</td>
      <td><label for="com"></label>
      <input type="text" name="com" id="com" value="<?php echo $com?>"></td>
    </tr>

    <tr>
      <td colspan="2">
        <input type="submit" name="modificar" id="modificar" value="Modificar Residencia">
        
        <a href="index.php">
        <input type="button" name=no_modificar" id="no_modificar" value="Cancelación">
        </a>
      </td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>