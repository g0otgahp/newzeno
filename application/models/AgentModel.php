<?php
defined('BASEPATH') or exit('No direct script access allowed');

class AgentModel extends CI_Model
{

  public function AgentSelect()
  {
    $dataSelect = $this->db
    ->where('agentStatus',1)
    ->get('agent')->result_array();

    return $dataSelect;
  }

  public function AgentRegister($input)
  {
    $this->db->insert('agent',$input);
  }

  public function AgentDelete($agentId)
  {

    $agent = array('agentStatus' => 2 );


    $this->db
    ->where('agentId',$agentId)
    ->update('agent',$agent);
  }

  public function SelectUpdate($agentId)
  {
    $dataSelect = $this->db
    ->where('agentId',$agentId)
    ->get('agent')->result_array();

    return $dataSelect;
  }

  public function AgentUpdate($dataUpdate)
  {
    $dataSelect = $this->db
    ->where('agentId',$dataUpdate['agentId'])
    ->update('agent',$dataUpdate);

    return $dataSelect;
  }

}
