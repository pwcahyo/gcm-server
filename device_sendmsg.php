<?php
if (isset($_GET["regId"]) && isset($_GET["message"])) {
    $regId = $_GET["regId"];
    $message = $_GET["message"];
     
    include_once './gcm_sendmsg.php';
     
    $gcm = new GCM_SendMsg();
 
    $registatoin_ids = array($regId);
    $message = array("message"=>$message, "timestamp"=>"10-Aug-2015");
 
    $result = $gcm->send_notification($registatoin_ids, $message);
 
    echo $result;
}
?>