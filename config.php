<?php
require 'environment.php';

define("BASE_URL", "http://binariux.com.br/emag2");


global $config;
$config = array();
if (ENVIRONMENT == 'development') {
    $config['dbname'] = 'emag2';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'admin_thiago';
    $config['dbpass'] = 'emag2_2017';
} else {
    $config['dbname'] = 'emag2';
    $config['host'] = 'localhost:3306';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}
?>
