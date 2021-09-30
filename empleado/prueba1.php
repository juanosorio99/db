<?php

require_once __DIR__ . '/vendor/autoload.php';

$identificacion= $_POST["idc"];
$nombre= $_POST["nm1"];
$apelli= $_POST["ape"];
$direc= $_POST["dir"];
$telef= $_POST["tel"];
$emailt= $_POST["ema"];
$fechac= $_POST["feco"];

$collection = (new MongoDB\Client)->mydb->empleados;

$insertOneResult = $collection->insertOne([
    'ident' =>$identificacion,
    'nomb' => $nombre,
    'apellid' => $apelli,
    'direct' => $direc,
    'telf' => $telef,
    'emar' => $emailt,
    'fc' => $fechac,
    
]);

header("Location:indexE.php");
//printf("Se insertó %d documento(s)\n", $insertOneResult->getInsertedCount());



var_dump($insertOneResult->getInsertedId());

?>