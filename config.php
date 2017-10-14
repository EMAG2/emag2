<?php
require 'environment.php';

define("BASE_URL", "localhost/emag2");


global $config;
$config = array();
if (ENVIRONMENT == 'development') {
    $config['dbname'] = 'emag2';
    $config['host'] = 'localhost:3306';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
} else {
    $config['dbname'] = 'emag2';
    $config['host'] = 'localhost:3306';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}
?>
