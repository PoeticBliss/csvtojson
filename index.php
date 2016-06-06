<?php

require 'inc/tojson.php';

$json = new tojson('insurance.csv');

// use getjson() method to get results
print_r($json->getjson());

//$arr = array_map('str_getcsv', file("insurance.csv"));
//print_r(json_encode($arr));

 ?>
