<?php  
// Create connection to Oracle 
$conn = oci_connect("portafolio", "portafolio", "localhost/portafolio"); 

if (!$conn) {    
  $m = oci_error();    
  echo $m['message'], "Problemas Al Conectar!!!";    
  exit; 
} else {    
  echo "Conexion con exito a Oracle!"; } 

// Close the Oracle connection 
oci_close($conn); 
?>