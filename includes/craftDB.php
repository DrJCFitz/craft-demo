<?php
global $connection;
require_once('/var/config/config.php');
$connection = new mysqli($mysqliHost, $mysqliUser, $mysqliPassword, $mysqliDatabase);

if ($connection->connect_errno) {
    //echo 'Error connecting : '.$connection->connect_error;
}
//echo $connection->host_info."\n";
?>