<?php 
class M_guru extends CI_Model{

	function get_all_guru(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru");
		return $hsl;
	}

	function get_guru(){
		$hsl=$this->db->query("SELECT 
		tg.`guru_id` as guru_id,
		tg.guru_nip as guru_nip,
		tg.guru_nama,
		tg.`guru_jenkel`,
		tg.guru_tmp_lahir,
		tg.guru_tgl_lahir,
		tg.guru_golongan,
		tg.`guru_NPWP`,
		tg.`guru_NUPTK`,
		tj.nama_jabatan AS nama_jabatan,
		tm.mata_pelajaran AS guru_mapel,
		tg.guru_keterangan,
		tg.`guru_photo`
		FROM tbl_guru AS tg
		INNER JOIN tbl_jabatan AS tj
		ON tg.guru_kd_jabatan = tj.kd_jabatan
		INNER JOIN tbl_mata_pelajaran AS tm
		ON tg.guru_kd_mata_pelajaran = tm.kd_pelajaran
		 ");
		return $hsl;
	}
	

	function simpan_guru($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_guru (guru_nip,guru_nama,guru_jenkel,guru_tmp_lahir,guru_tgl_lahir,guru_mapel,guru_photo) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$mapel','$photo')");
		return $hsl;
	}
	function simpan_guru_tanpa_img($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel){
		$hsl=$this->db->query("INSERT INTO tbl_guru (guru_nip,guru_nama,guru_jenkel,guru_tmp_lahir,guru_tgl_lahir,guru_mapel) VALUES ('$nip','$nama','$jenkel','$tmp_lahir','$tgl_lahir','$mapel')");
		return $hsl;
	}

	function update_guru($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel,$photo){
		$hsl=$this->db->query("UPDATE tbl_guru SET guru_nip='$nip',guru_nama='$nama',guru_jenkel='$jenkel',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_mapel='$mapel',guru_photo='$photo' WHERE guru_id='$kode'");
		return $hsl;
	}
	function update_guru_tanpa_img($kode,$nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel){
		$hsl=$this->db->query("UPDATE tbl_guru SET guru_nip='$nip',guru_nama='$nama',guru_jenkel='$jenkel',guru_tmp_lahir='$tmp_lahir',guru_tgl_lahir='$tgl_lahir',guru_mapel='$mapel' WHERE guru_id='$kode'");
		return $hsl;
	}
	function hapus_guru($kode){
		$hsl=$this->db->query("DELETE FROM tbl_guru WHERE guru_id='$kode'");
		return $hsl;
	}

	//front-end
	function guru(){
		$hsl=$this->db->query("SELECT * FROM tbl_guru");
		return $hsl;
	}
	function guru_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT * FROM tbl_guru limit $offset,$limit");
		return $hsl;
	}
	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	 } 
}