<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Modificar</title>
<link rel="stylesheet" type="text/css" href="hoja.css">
</head>

<body>

<h1>CONFIRMAR BORRADO</h1>
<h3>Alumno: Aitor del Castillo </h3>

<?php
      include("conexion.php");
      $Id=$_GET["Id"];
      $nom=$_GET["nom"];
      $cod=$_GET['cod'];
      $precio=$_GET['precio'];
      $com=$_GET['com'];
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
      <td>
        <?php echo $nom?>
      </td>
    </tr>
    
    <tr>
      <td>CodUniversidad</td>
      <td>
        <?php echo $cod ?>
      </td>
    </tr>

    <tr>
      <td>Precio Mensual</td>
      <td><?php echo $precio?></td>
    </tr>

    <tr>
      <td>Comedor</td>
      <td>
        <?php echo $com?>
      </td>
    </tr>
    
    <tr>
        <td colspan="2">
        <a href="borrar.php?Id=<?php echo $Id?>">
            <input type='button' name='del' id='del' value='Borrar'>
        </a>
        <a href="index.php">
            <input type="button" name=no_borrar" id="no_borrar" value="Cancelar">
        </a>
      </td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>