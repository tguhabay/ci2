<?php
class User extends CI_Controller{
 
    function __construct(){
        parent::__construct();
        $this->load->model('Model_user');
    }
 
    function index(){
        $data['query'] = $this->Model_user->getAll();
        $this->load->view('input',$data);
    }
	function submit(){
        if ($this->input->post('submit')){
 
            if ($this->input->post('id')){
                $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]');
                $this->form_validation->set_rules('password', 'Password', 'matches[passconf]');
                $this->form_validation->set_rules('fullname', 'Fullname', 'required|min_length[5]|max_length[25]');
 
                if ($this->form_validation->run() == FALSE){
                    $data['id'] = $this->input->post('id');
                    $data['username'] = set_value('username');
                    $data['fullname'] = set_value('fullname');
                    $this->load->view('edit',$data);
                }else{
                    $this->Model_user->update();
            redirect('user/index');
        }
            }else{
                $this->form_validation->set_rules('username', 'Username', 'required|min_length[5]|max_length[12]');
                $this->form_validation->set_rules('password', 'Password', 'required|matches[passconf]');
                $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required');
                $this->form_validation->set_rules('fullname', 'Fullname', 'required|min_length[5]|max_length[25]');
 
        if ($this->form_validation->run() == FALSE){
                        $data['query'] = $this->Model_user->getAll();
                        $this->load->view('input',$data);
                }else{
              $this->Model_user->save();
            redirect('user/index');
        }
      }
        }
    }
 
    function edit(){
    $id=$this->uri->segment(3);
    $data['result']=$this->Model_user->getUser($id);
 
    if (empty($id) or count($data['result'])==0 ){
        redirect('user/index');
    }else{
        $result=$this->Model_user->getUser($id);
        $data['id'] = $result['id'];
        $data['username'] = $result['username'];
            $data['fullname'] = $result['fullname'];
        $this->load->view('edit', $data);
    }
  }
 
  function delete($id){
    $this->db->delete('user', array('id' => $id));
        redirect('user/index');
  }

}
