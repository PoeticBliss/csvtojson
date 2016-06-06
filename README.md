# csvtojson
converts a csv file content into json

## How to use
```php
<?php
//include tojson file
require 'inc/tojson.php';

// create class instance and pass csv file as argument
$json = new tojson('mycsvfile.csv');

// get resulting json with getjson() method
print_r($json->getjson());
?>
```

## Resulting json from sample csv file
![CSVtoJSON JSON result](http://i.imgur.com/QWqy2Bh.png)
