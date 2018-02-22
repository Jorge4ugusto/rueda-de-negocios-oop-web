<?php
require_once 'Conexion.php';
class Rubro
{
  function __construct()
  {

  }


  public static function listarRubro()
  {
    $tabla = 'RUBRO';
    $campos = 'ID_RUBRO,nombre_rubro';
    $condicion = 'estado = 1';
    Conexion::Listar($campos,$tabla,$condicion);
    return Conexion::Listar($campos,$tabla,$condicion);
  }
}

 ?>
