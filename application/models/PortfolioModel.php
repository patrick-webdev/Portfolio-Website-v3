<?php

defined('BASEPATH') or exit('No direct script access allowed');

class portfolioModel extends CI_Model
{
  public function __construct()
  {
    parent::__construct();
  }

  public function getAllWithPriority($table){
    $sql="SELECT * FROM $table ORDER BY priority";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    return $result;
  }

  public function getOne($table, $id){
    $sql="SELECT * FROM $table WHERE id = $id";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    return $result;
  }

  public function getContactLinks(){
    $sql="SELECT * FROM contact ORDER BY priority";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    return $result;
  }

  public function getGames(){
    $sql="SELECT * FROM game ORDER BY priority";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    return $result;
  }


  public function getGameRoles($gameID){
    $sql="SELECT * FROM gamerole WHERE gameID = $gameID";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    return $result;
  }

  public function getNavLinks(){
    $sql="SELECT * FROM nav ORDER BY priority";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    return $result;
  }

  public function getPlaygrounds(){
    $sql="SELECT * FROM playground";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    return $result;
  }

  public function getProjects(){
    $sql="SELECT * FROM project";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    return $result;
  }

  public function getProjectTags($projectID){
    $sql="SELECT * FROM projecttag WHERE projectID = $projectID";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    return $result;
  }

  public function getRoles(){
    $sql="SELECT * FROM role";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    return $result;
  }

  public function getRole($roleID){
    $sql="SELECT `role` FROM `role` WHERE id=$roleID";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    return $result;
  }

  public function getTags(){
    $sql="SELECT * FROM tag";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    return $result;
  }

  public function getTag($tagID){
    $sql="SELECT * FROM tag WHERE id=$tagID";
    $query = $this->db->query($sql);
    $result = $query->result_array();
    return $result;
  }
}