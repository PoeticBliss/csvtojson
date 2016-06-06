<?php

/**
 * This class converts csv file content into json
 */
class tojson {
  function __construct($file) {
    $json = array();
    // Constructor to handle file
    if ((!file_exists($file)) || (!is_readable($file)) ) {
      return "err: you passed me an invalid file";
    } else if (empty($file)) {
      return "err: pass me a csv file";
    } else {
      $this->json = array_map('str_getcsv', file($file));
      //$this->json = json_encode($this->json);
    }

    // return json file content
    //return $json;
  }


}



 ?>
