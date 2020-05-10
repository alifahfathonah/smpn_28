<?php
class M_kelas extends CI_Model{

	function get_all_kelas(){
		$hsl=$this->db->query("SELECT * FROM tbl_kelas");
		return $hsl;
	}

	public function tampil_kelas(){
		return $this->db->get('tbl_kelas');
	 }
	 function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	 }
	 function update_kelas($id_kelas,$kelas_nama){
		$hsl=$this->db->query("UPDATE tbl_kelas SET kelas_id='$id_kelas',kelas_nama='$kelas_nama' WHERE kelas_id='$id_kelas'");
		return $hsl;
	}
}