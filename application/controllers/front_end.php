<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Front_end extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
   
	public function index()
	{
    $this->load->helper('captcha');
    $tanggal = date("d-m-Y h:i:s");
    $testing_input = $this->input->post('testing_input');
    
    $data_input = array('text' => $testing_input, 'dates' => $tanggal);
    
    $this->db->insert('test1', $data_input);
    
    $q_show = $this->db->get('test1');
    $result_show = $q_show->result_array();
    
    
    
    $data["tgl"] = $tanggal;
    $data["testing_input_lho"] = $testing_input;
    $data["show_table"] = $result_show;
    
    $this->load->view('home', $data);
	}
  
  public function baru(){
    echo 'asf';
  }
  
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
