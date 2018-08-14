<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 class debug {

  public function prevalue($value)
  {
    echo "<pre>";
    print_r($value);
    exit();
  }
} /* End of file Someclass.php */
