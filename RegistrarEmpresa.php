<?php
require_once 'Empresa.php';
$nombre =$_POST['empresa'];
$correo =$_POST['correo'];
$web =$_POST['web'];
$direccion =$_POST['direccion'];
$telefono =$_POST['telefono'];
$rubro =$_POST['SeleccionarRubros'];
$tipo = $_POST['SeleccionarTipo'];
$pais =$_POST['pais'];
$ciudad =$_POST['ciudad'];
$representante = $_POST['representante'];
$empresa = new Empresa($nombre,$correo,$web,$direccion,$telefono,$rubro,$pais,$ciudad,$tipo,$representante);
$empresa->CrearEmpresa();
echo $empresa->getNombre() . '    se ha guardado correctamente su Rubro es:    '.$empresa->getRubro().'   Su pagina web es:    '.$empresa->getWeb().'   Su direccion es:   '.$empresa->getDireccion().'    Su Telefono es:   '.$empresa->getTelefono().'   De nacionalidad:    '.$empresa->getPais().'   Y de ciudad:    '.$empresa->getCiudad();
header("Location:./#ultimo")
?>
