<?php   

$payload = json_decode($_POST['payload']);

$payload->ref;

shell_exec(web/PUESTA_EN_PRODUCCION.sh);
shell_exec('date("h:i:s")>>log.txt');
 
?>