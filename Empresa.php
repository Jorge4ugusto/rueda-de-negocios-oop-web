<?php
/**
 *
 */
require_once 'Conexion.php';
class Empresa
{
  public $nombre,$correo,$web,$direccion,$telefono,$rubro,$pais,$ciudad,$tipo,$representante;
  const TABLA = 'EMPRESA';
  public function getNombre()
  {
    return $this->nombre;
  }
  public function getCorreo()
  {
    return $this->correo;
  }
  public function getWeb()
  {
    return $this->web;
  }
  public function getDireccion()
  {
    return $this->direccion;
  }
  public function getTelefono()
  {
    return $this->telefono;
  }
  public function getRubro()
  {
    return $this->rubro;
  }
  public function getPais()
  {
    return $this->pais;
  }
  public function getCiudad()
  {
    return $this->ciudad;
  }
  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }
  public function setCorreo($correo)
  {
    $this->correo = $correo;
  }
  public function setWeb($web)
  {
    $this->web = $web;
  }
  public function setDireccion($direccion)
  {
    $this->direccion = $direccion;
  }
  public function setTelefono($telefono)
  {
    $this->telefono = $telefono;
  }
  public function setRubro($rubro)
  {
    $this->rubro = $rubro;
  }
  public function setPais($pais)
  {
    $this->pais = $pais;
  }
  public function setCiudad($ciudad)
  {
    $this->ciudad = $ciudad;
  }
  function __construct($nombre = null, $correo = null, $web = null, $direccion = null, $telefono = null, $rubro = null, $pais = null, $ciudad = null, $tipo = null, $representante = null)
  {
    # code...
    $this->nombre = $nombre;
    $this->correo = $correo;
    $this->web = $web;
    $this->direccion = $direccion;
    $this->telefono = $telefono;
    $this->rubro = $rubro;
    $this->pais = $pais;
    $this->ciudad=$ciudad;
    $this->tipo = $tipo;
    $this->representante = $representante;
    //$this->imagen=$imagen;
  }

  public function CrearEmpresa()
  {
    Conexion::Insert('EMPRESA','ID_RUBRO,NOMBREEMPRESA,DIRECCION,CIUDAD,PAIS,TELEFONO,EMAIL,PAGINAWEB,TIPO,PERSONACONTACTO,ESTADO',"'$this->rubro','$this->nombre','$this->direccion','$this->ciudad','$this->pais','$this->telefono','$this->correo','$this->web','$this->tipo','$this->representante',1");
  }
  public function ListarEmpresa()
  {
    return Conexion::sql(" SELECT nombreempresa,nombre_rubro,direccion,telefono,pais,ciudad
      FROM EMPRESA,RUBRO
      WHERE EMPRESA.id_rubro = RUBRO.id_rubro
      AND EMPRESA.estado = 1 ");
  }
}

 ?>
