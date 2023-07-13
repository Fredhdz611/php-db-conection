<?php

function obtenerServicios()
{
  try {
    //importar las credenciales
    require 'database.php';

    //consulta sql
    $sql = 'SELECT * FROM servicios;';

    //realizar la consulta
    $consulta = mysqli_query($db, $sql);

    return $consulta;
    //acceder a los resultados
    // echo '<pre>';
    // var_dump(mysqli_fetch_assoc($consulta));
    // echo '</pre>';
    //mysqli_fetch_assoc nos trae los datos con los nombres de las columnas y solo retorna un valor, los otros tipos de fetch solo ponen un indice numerico.


    //cerrar conexion (opcional, php si se da cuenta que se quedo una conexion de bd abierta la cierra automaticamente)
    //$resultado = mysqli_close($db); 
    //si se cierra correctamente retorna un 1
  } catch (\Throwable $th) {
    var_dump($th);
  }
}

obtenerServicios();
