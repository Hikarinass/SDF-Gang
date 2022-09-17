<?php 

define('HOST', 'sdfgannsdfgang.mysql.db')
define('DB_NAME', 'sdfgannsdfgang')
define( 'USER', 'sdfgannsdfgang')
define('PASS', 'SDFgang08993')

try {
  $bdd = new PDO('mysql:host=sdfgannsdfgang;dbname=users', 'sdfgannsdfgang', 'SDFgang08993')
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "Connect > OK!";
} catch(PDOException $e) {
  echo $e;
}

?>