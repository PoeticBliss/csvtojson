<?php

/**
 * This class converts csv file content into json
 */
class tojson {
  private $json;
  function __construct($file) {
    // Constructor to handle file
    if ((!file_exists($file)) || (!is_readable($file)) ) {
      // if file doesn't exist or is not readable
      $this->json = "err: you passed me an invalid file";
    } else if (empty($file)) {
      // if the value for json file passed is not readable
      $this->json = "err: pass me a csv file";
    } else {
      // map file to str_getcsv function and store result in json variable
      $this->json = array_map('str_getcsv', file($file));
    }
  }

  public function getjson() {
    // Assign first array to another variable and use as key
    $arrkey = $this->json[0];
    // remove first array from collection
    array_shift($this->json);
    // Loop through the arrays in json array
    foreach ($this->json as $key => $value) {
      // use array_combine and assign key and value
      $this->json[$key] = array_combine($arrkey, $value);
    }
    // JSON encode the resulting array and return
    return json_encode($this->json);
  }

}

 ?>
