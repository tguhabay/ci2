<?php
class MPegawai extends Model{
// fungsi konstruktor
function MPegawai(){
parent::Model();
}
//fungsi untuk mendapatkan data pegawai berdasarkan id
function getPegawai($id){
$data = array();
$this->db->where('id',$id);
$this->db->limit(1);
$Q = $this->db->get('pegawai');
if($Q->num_rows() > 0){
$data = $Q->row_array();
}
$Q->free_result();
return $data;
}
// fungsi untuk mendapatkan semua data pegawai
function getAllPegawai(){
$data = array();
$this->db->order_by('nama','asc');
$Q = $this->db->get('pegawai');
if ($Q->num_rows() > 0){
foreach ($Q->result_array() as $row){
$data[] = $row;
}
}
$Q->free_result();
return $data;
}
// fungsi untuk menambahkan data pegawai ke dalam tabel hari form isian
function addPegawai(){
$data = array(
'nip' => $this->input->post('nip'),
'nama' => $this->input->post('nama'),
'pekerjaan' => $this->input->post('pekerjaan'),
'alamat' => $this->input->post('alamat')
);
 
$this->db->insert('pegawai',$data);
}
// fungsi untuk mengedit data pegawai berdasarkan id pegawai
function editPegawai(){
$data = array(
'nip' => $this->input->post('nip'),
'nama' => $this->input->post('nama'),
'pekerjaan' => $this->input->post('pekerjaan'),
'alamat' => $this->input->post('alamat')
);
$this->db->where('id',$this->input->post('id'));
$this->db->update('pegawai',$data);
}
// fungsi untuk menghapus data pegwai berdasarkan id pegawai
function deletePegawai($id){
$this->db->where('id',$id);
$this->db->delete('pegawai');
}
}
?>