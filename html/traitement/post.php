<?php
//pour que la réponse s'affiche comme du texte brut
header('Content-Type: text/plain');
 
/*partie à modifier*/
$name = 'http://localhost:5000';//nom du site
 
//pour ne pas devoir calculer à la main la longueur du corps, on le stocke dans une variable et la fonction strlen() nous la donne.
$data = '{
  "command": "home",
  "axes": ["x", "y"]
}';
 
//la requête
$envoi  = "POST /api/job HTTP/1.1\r\n";
$envoi .= "Host: ".$name."\r\n";
$envoi .= "Content-type: application/json";
$envoi .= "X-Api-Key: D337D723E2684C0989708BD216F0C6F0";
$envoi .= $data."\r\n\r\n";
/*/partie à modifier*/
 
/*ouverture socket*/
$socket = socket_create(AF_INET, SOCK_STREAM, SOL_TCP);
if($socket < 0){
        die('FATAL ERROR: socket_create() : " '.socket_strerror($socket).' "');
}
 
if (socket_connect($socket,gethostbyname($name),80) < 0){
        die('FATAL ERROR: socket_connect()');
}
/*/ouverture socket*/
 
/*envoi demande*/
if(($int = socket_write($socket, $envoi, strlen($envoi))) === false){
        die('FATAL ERROR: socket_write() failed, '.$int.' characters written');
}
/*/envoi demande*/
 
/*lecture réponse*/
$reception = '';
while($buff = socket_read($socket, 2000)){
   $reception.=$buff;
}
echo $reception;
/*/lecture réponse*/
 
socket_close($socket);
?>
