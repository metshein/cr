<?php

$db_server = 'localhost';
$db_andmebaas = 'car';
$db_kasutaja = 'mario';
$db_salasona = 'mario';

$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);

if (!$yhendus) {
    die('Ei saa ühendust andmebaasiga');
}

?>