<?php

require 'inc/tojson.php';

$json = new tojson('insurance.csv');

print_r($json->json);

//$arr = array_map('str_getcsv', file("insurance.csv"));
//print_r(json_encode($arr));

 ?>
