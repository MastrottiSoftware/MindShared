<?php

header('Access-Control-Allow-Origin: *');  
$obj = new \stdClass();
if(!isset($_POST["Username"]) || empty($_POST["Username"] ) ){//echo "errore username";
    $obj->status="no";
    echo json_encode($obj);
return;}
if(!isset($_POST["Password"]) || empty($_POST["Password"] ) ){//echo "errore password";
    $obj->status="no";
    echo json_encode($obj);
    return;}
if(!file_exists("myuser.txt")) { echo "errore file";
return;}

$fd=fopen("myuser.txt","r");

while(!feof($fd)){
$var = explode(",",fgets($fd));
if($_POST["Username"]==$var[1]){
    if(strcmp(sha1($_POST["Password"]),trim($var[2]))==0) {//echo "Benvenuto ".$var[0]."!";
        
        $_SESSION["nome"]=$var[0];
        $obj->status="ok";
        $obj->nome=$var[0];
        echo json_encode($obj);
        exit;}
    else {//echo "Accesso Negato";
        $obj->status="no";
        echo json_encode($obj);
        exit;}
}
}

//echo "Accesso negato";
$obj->status="no";
echo json_encode($obj);
exit;
?>