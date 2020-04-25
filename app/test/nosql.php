<?php

echo "<pre>";

$options = array('username' => 'appdev', 'password' => 'appdev', 'authSource' => 'admin', 'ssl' => false);
$manager = new MongoDB\Driver\Manager("mongodb://app_nosql:27017", $options);
var_dump($manager);
