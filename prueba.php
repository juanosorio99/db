<?php

require_once __DIR__ . '/vendor/autoload.php';

$nomclave= $_POST["nm"];
$dencomer= $_POST["dc"];
$fechain= $_POST["fi"];
$fechafin= $_POST["ff"];
$estadoac= $_POST["ea"];

$collection = (new MongoDB\Client)->mydb->proyectos;

$insertOneResult = $collection->insertOne([
    'nomCla' => $nomclave,
    'denoCom' => $dencomer,
    'feIni' => $fechain,
    'feFin' => $fechafin,
    'estAct' => $estadoac,
    
]);

header("Location:index.php");
//printf("Se insertó %d documento(s)\n", $insertOneResult->getInsertedCount());



var_dump($insertOneResult->getInsertedId());

?>