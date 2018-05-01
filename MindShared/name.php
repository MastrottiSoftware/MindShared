<?php
header('Access-Control-Allow-Origin: *');  
$obj = new \stdClass();

if(!file_exists("myuser.txt")) { echo "errore file";
exit;}
$fd=fopen("myuser.txt","r");

while(!feof($fd)){
$var = explode(",",fgets($fd));
if($_GET["Username"]==$var[1]){
        $obj->status="ok";
        $obj->nome=$var[0];
        echo json_encode($obj);
        exit;
}
}
?>