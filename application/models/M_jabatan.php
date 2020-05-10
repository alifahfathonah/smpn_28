<?php
class M_jabatan extends CI_Model{

	function get_all_jabatan(){
		$hsl=$this->db->query("SELECT * FROM tbl_jabatan");
		return $hsl;
	}

	public function tampil_tahun(){
		return $this->db->get('tbl_jabatan');
	 }
	 function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	 }
	 function update_jabatan($kd_jabatan,$nama_jabatan){
		$hsl=$this->db->query("UPDATE tbl_jabatan SET kd_jabatan='$kd_jabatan',nama_jabatan='$nama_jabatan' WHERE kd_jabatan='$kd_jabatan'");
		return $hsl;
	}
}