<?php   

$payload = json_decode($_POST['payload']);

if($payload->ref =="refs/header/master"){
    shell_exec(PUESTA_EN_PRODUCCION.sh);
}



?>