<?php
class Pegawai extends CI_Controller {
function Pegawai(){
parent::CI_Controller();
$this->load->model('MPegawai');
}
 
function index(){
$data['title'] = "Halaman Data Pegawai";
$data['pegawai'] = $this->MPegawai->getAllPegawai();
$this->load->vars($data);
$this->load->view('pegawai_home');
}
 
function add(){
 
if ($this->input->post('nip')){
$this->MPegawai->addPegawai();
$this->session->set_flashdata('message','Data Pegawai berhasil ditambahkan !');
redirect('pegawai','refresh');
} else {
$data['title'] = "Menambah Data Pegawai";
$this->load->vars($data);
$this->load->view('pegawai_add');
$this->session->set_flashdata('message','Data Pegawai gagal ditambahkan !');
 
}
}
 
function edit($id=0){
if ($this->input->post('nip')){
$this->MPegawai->editPegawai();
$this->session->set_flashdata('message','Data Pegawai telah diedit !');
redirect('pegawai','refresh');
}else{
//$id = $this->uri->segment(4);
$data['title'] = "Edit Data Pegawai";
$data['pegawai'] = $this->MPegawai->getPegawai($id);
$this->load->vars($data);
$this->load->view('pegawai_edit');
}
}
 
function delete($id){
//$id = $this->uri->segment(4);
$data['title'] = "Hapus Data Pegawai";
$data['pegawai'] = $this->MPegawai->getPegawai($id);
$this->load->vars($data);
$this->load->view('pegawai_delete_confirm');
}
 
function delete_confirm(){
$id = $this->input->post('id');
$confirm = $this->input->post('confirm');
if ($confirm=="Hapus"){
$this->MPegawai->deletePegawai($id);
$this->session->set_flashdata('message','Data Pegawai telah dihapus!');
redirect('pegawai/index','refresh');
}else{
redirect('pegawai/index','refresh');
}
}
}
?>
