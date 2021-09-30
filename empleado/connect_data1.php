<?php
	
	require_once __DIR__ . '/vendor/autoload.php';
    $proy = (new MongoDB\Client)->mydb->empleados; 
	
?>