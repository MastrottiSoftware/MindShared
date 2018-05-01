<?php 
header('Access-Control-Allow-Origin: *');  
$codFiscale="/^[A-Z]{6}[0-9]{2}[A-Z][0-9]{2}[A-Z][0-9]{3}[A-Z]$/";
$obj = new \stdClass();
if (isset($_GET["cf"]) && !empty($_GET["cf"])) {
    if (preg_match($codFiscale,$_GET["cf"])){
        $obj->codFiscale=$_GET["cf"];
        $obj->status="ok";
        echo json_encode($obj);}
        else {
            $obj->codFiscale=$_GET["cf"];
            $obj->status="no";
            echo json_encode($obj);}
    
}
