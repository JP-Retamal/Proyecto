<DOCTYPE HTML>
<meta charset = "utf8" />
<?php  
// crear conexion con oracle
$conexion = oci_connect("system", "JPreta666", "192.168.0.11/xe"); 
 
if (!$conexion) {    
  $m = oci_error();    
  echo $m['message'], "n";    
  exit; 
} else {    
  echo "Conexion con exito a Oracle!!!"; } 
 
?>
