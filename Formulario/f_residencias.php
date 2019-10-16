<!DOCTYPE html>
<head><meta charset="utf-8"></head>
<html>
  <style>
    body{
      margin: 0;
      padding: 0;
      font-family: sans-serif;
      background: url(fondoformulario.jpg) no-repeat;
      background-size: cover;
    }
    .info-box{
      width: 600px;
      position: absolute;
      top: 25%;
      left: 50%;
      transform: translate(-50%,-50%);
      color: darkblue;
    }
    .login-box{
      width: 400px;
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%,-50%);
      color(white);
    }
  </style>
  <body>
    <div class="info-box">
        <h2 align="center">Formulario de altas de residencias escolares</h2>
        <p align="center">Realizado por Aitor del Castillo</p>
        <br>
    </div>
    <form method="POST" action="f_residencias.php" class="login-box">
      <fieldset>
        <legend>Información a rellenar</legend>
        <p>Nombre de la Residencia: <input type="text" name="nameresidencia"></p>
        <p>Cod. Universidad: 
          <select name="codeuniversidad">
            <option value="ull">La Laguna</option>
            <option value="ulpgc">Las Palmas de Gran Canaria</option>
            <option value="ucm">Complutense de Madrid</option>
          </select>
        </p>
        <p>Precio mensual: <input type="number" name="monthprice"></p>
        Comedor <input type="radio" name="checkcomedor" value="yes"><br>
      </fieldset>
      <fieldset><legend>Opciones</legend>
        <input type="submit" value="Dar de alta" name="dar_alta">
        <input type="reset" value="Limpiar datos">
        <input type="submit" value="Cancelar el alta">
      </fieldset>
    </form>
  </body>
</html>


<?php

    include("datos_conexion.php");

    if(isset($_POST['dar_alta']))
    {
      echo "FUERA";
      $result = mysqli_query($conecction,"SELECT * FROM residencias");
      while($consulta = mysqli_fecth_array($result))
      {
        echo "DENTRO";
        echo $consulta[''];
      }

    }






?>