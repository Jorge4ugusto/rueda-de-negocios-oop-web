<?php/* Esto codigo es para aprender como funciona la clase PDO de php
$pdo = new
PDO('mysql:host=mysql.hostinger.es;dbname=u748880222_rueda',
'u748880222_obj3','ucatec2017');
try {
  $pdo = new PDO('mysql:host=mysql.hostinger.es;dbname=u748880222_rueda',
  'u748880222_obj3','ucatec2017');
}
catch (Exception $e)
{
  echo "Error al conectarse a la base de datos: ".$e->getMessaage();
  exit;
}*/
?>
<?php
/**
 *
 */
 define("HOST", "itmatica.net");
 /*Base de datos*/
 define("DB", "itmatica_poo");
 /*Nombre del usuario*/
 define("USER", "itmatica_poo");
 /*Contraseña*/
 define("PASS", "1hQNX966S+cG");
 class Conexion
 {
   public static function sql($query){
       $mysqli = new mysqli(HOST, USER, PASS, DB);
       if ($mysqli->connect_errno) {
           echo "Error: Fallo al conectarse a MySQL debido a:";
           echo "<strong> ".$mysqli->connect_error."</strong>";
           exit();
       }else{
           $mysqli->autocommit(FALSE);
           $mysqli->begin_transaction(MYSQLI_TRANS_START_WITH_CONSISTENT_SNAPSHOT);
           if(!$con = $mysqli->query($query)){
               echo 'Error de sintaxis en la consulta solicitada';
               $mysqli->rollback();
           }else{
               $mysqli->commit();
           }
           return $con;
       }
       $mysqli->close();
   }


   public static function Insert($tabla, $campos, $valores) {
       if (!$consul = Conexion::sql("INSERT INTO $tabla ($campos) VALUES($valores)")) {
           echo "Ha ocurrido un error al tratar de guardar los datos";
       }
       return $consul;
   }
   public static function Listar($campos,$tabla,$condicion) {
       if (!$consul = Conexion::sql("SELECT $campos FROM $tabla WHERE ($condicion)")) {
           echo "Ha ocurrido un error al tratar de guardar los datos";
       }
       return $consul;
   }

 }

?>
