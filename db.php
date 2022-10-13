<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'ecc_test');

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($connection) {
    echo "Connection Successfully";
} else {
    echo "Conection Error";
}
