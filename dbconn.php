<?php
$config = include_once './config.php';
$handle = new mysqli($config[db][host], $config[db][user], $config[db][password], $config[db][db]);
 ?>