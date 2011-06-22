<?php
class Model_user extends CI_Model{
        function __construct(){
        parent::__construct();
    }
 
    function getAll(){
        $this->db->select('id,username,fullname');
                $this->db->from('user');
                $this->db->limit(10);
                $this->db->order_by('id','ASC');
                $query = $this->db->get();
 
                return $query->result();
    }
	function getUser($id){
        $this->db->where('id', $id);
    $query = $this->db->get('user');
 
    return $query->row_array();
    }
 
    function save(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');
    $fullname = $this->input->post('fullname');
    $data = array(
      'username'=>$username,
      'password'=>md5($password),
      'fullname'=>$fullname
    );
    $this->db->insert('user',$data);
  }
 
  function update(){
    $id   = $this->input->post('id');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
    $fullname = $this->input->post('fullname');
    if ($password==''){
        $data = array(
      'username'=>$username,
      'fullname'=>$fullname
    );
    }else{
        $data = array(
      'username'=>$username,
      'password'=>md5($password),
      'fullname'=>$fullname
    );
    }
 
    $this->db->where('id',$id);
    $this->db->update('user',$data);
  }
}
