<?php

$db_server = 'localhost';
$db_andmebaas = 'cr';
$db_kasutaja = 'mariom';
$db_salasona = 'mariom';

$yhendus = mysqli_connect($db_server, $db_kasutaja, $db_salasona, $db_andmebaas);

if (!$yhendus) {
    die('Ei saa ühendust andmebaasiga');
}

?>