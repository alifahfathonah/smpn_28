<?php
class M_tahun_ajaran extends CI_Model{

	function get_all_kelas(){
		$hsl=$this->db->query("SELECT * FROM tbl_thn_ajaran");
		return $hsl;
	}

	public function tampil_tahun(){
		return $this->db->get('tbl_thn_ajaran');
	 }
	 function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	 }
	 function update_kelas($id_tahun,$tahun_ajaran){
		$hsl=$this->db->query("UPDATE tbl_thn_ajaran SET id_tahun_ajaran='$id_tahun',tahun_ajaran='$tahun_ajaran' WHERE id_tahun_ajaran='$id_tahun'");
		return $hsl;
	}
}