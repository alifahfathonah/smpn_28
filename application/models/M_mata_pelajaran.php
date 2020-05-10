<?php
class M_mata_pelajaran extends CI_Model{

	function get_all_jabatan(){
		$hsl=$this->db->query("SELECT * FROM tbl_mata_pelajaran");
		return $hsl;
	}

	public function get_all_mata_pelajaran(){
		return $this->db->get('tbl_mata_pelajaran');
	 }
	 function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	 }
	 function update_mapel($kd_pelajaran,$mata_pelajaran,$kkm_pengetahuan,$kkm_keterampilan){
		$hsl=$this->db->query("UPDATE tbl_mata_pelajaran SET mata_pelajaran='$mata_pelajaran',kkm_pengetahuan='$kkm_pengetahuan',
		kkm_keterampilan='$kkm_keterampilan' WHERE kd_pelajaran='$kd_pelajaran'");
		return $hsl;
	}
}