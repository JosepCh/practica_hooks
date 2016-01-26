<?php   

$payload = json_decode($_POST['payload']);

$payload->ref;

shell_exec(PUESTA_EN_PRODUCCION.sh);
 
?>