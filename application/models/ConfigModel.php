<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ConfigModel extends CI_Model
{

  /**
  * Index Page for this controller.
  *
  * Maps to the following URL
  *         http://example.com/index.php/welcome
  *    - or -
  *         http://example.com/index.php/welcome/index
  *    - or -
  * Since this controller is set as the default controller in
  * config/routes.php, it's displayed at http://example.com/
  *
  * So any other public methods not prefixed with an underscore will
  * map to /index.php/welcome/<method_name>
  * @see https://codeigniter.com/user_guide/general/urls.html
  */

  public function SelectConfigById($id)
  {

    $dataConfig = $this->db->where('configId',$id)->get('config')->result_array();
    return $dataConfig;

  }

  public function SelectConfig()
  {

    $dataConfig = $this->db->get('config')->result_array();
    return $dataConfig;

  }

  public function UpdateConfig($input)
  {

    $this->db
    ->where('configId',$input['configId'])
    ->update('config',$input);

  }

}
