<?php

$db = mysqli_connect('sql304.epizy.com', 'epiz_33404187', 'mLKptjxPVS6PJ', 'epiz_33404187_escomtask');


if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
