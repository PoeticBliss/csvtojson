<?php

/**
 * This class converts csv file content into json
 */
class tojson {
  private $json;
  function __construct($file) {
    // Constructor to handle file
    if ((!file_exists($file)) || (!is_readable($file)) ) {
      $this->json = "err: you passed me an invalid file";
    } else if (empty($file)) {
      $this->json = "err: pass me a csv file";
    } else {
      $this->json = array_map('str_getcsv', file($file));
      //$this->json = json_encode($this->json);
    }
    $this->json = json_encode($this->json);
    // return json file content
    //return $json;
  }

  public function getjson() {
    // this will return the json value
    return $this->json;
  }


}



 ?>
