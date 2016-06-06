<?php

require 'inc/tojson.php';

$json = new tojson('insurance.csv');

// use getjson() method to see results
print_r($json->getjson());

 ?>
