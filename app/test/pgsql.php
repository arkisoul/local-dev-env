<?php
echo "<pre>";

$conn = pg_connect("host=app_pgsql port=5432 dbname=appdev user=appdev password=appdev");
var_dump($conn);