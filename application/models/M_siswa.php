<?php 
class M_siswa extends CI_Model{

	public $table = 'tbl_siswa';
    public $siswa_nis = 'siswa_nis';
	function get_all_siswa(){
		$hsl=$this->db->query("SELECT s.*,tp.`tahun_ajaran` FROM tbl_siswa AS s JOIN tbl_thn_ajaran AS tp ON s.`id_tahun_ajaran` = tp.`id_tahun_ajaran`");
		return $hsl;
	} 

	function simpan_siswa($nis,$nama,$jenkel,$kelas,$photo){
		$hsl=$this->db->query("INSERT INTO tbl_siswa (siswa_nis,siswa_nama,siswa_jenkel,siswa_kelas_id,siswa_photo) VALUES ('$nis','$nama','$jenkel','$kelas','$photo')");
		return $hsl; 
	}
	function simpan_siswa_tanpa_img($nis,$nama,$jenkel,$id_tahun_ajaran){
		$hsl=$this->db->query("INSERT INTO tbl_siswa (siswa_nis,siswa_nama,siswa_jenkel,id_tahun_ajaran) VALUES ('$nis','$nama','$jenkel','$id_tahun_ajaran')");
		return $hsl;
	}

	function update_siswa($kode,$nis,$nama,$jenkel,$kelas,$photo){
		$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel',siswa_kelas_id='$kelas',siswa_photo='$photo' WHERE siswa_id='$kode'");
		return $hsl;
	}
	function update_siswa_tanpa_img($kode,$nis,$nama,$jenkel,$kelas){
		$hsl=$this->db->query("UPDATE tbl_siswa SET siswa_nis='$nis',siswa_nama='$nama',siswa_jenkel='$jenkel' WHERE siswa_id='$kode'");
		return $hsl;
	}
	function hapus_siswa($kode){
		$hsl=$this->db->query("DELETE FROM tbl_siswa WHERE siswa_id='$kode'");
		return $hsl;
	}

	function siswa(){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id");
		return $hsl;
	}
	function siswa_perpage($offset,$limit){
		$hsl=$this->db->query("SELECT tbl_siswa.*,kelas_nama FROM tbl_siswa JOIN tbl_kelas ON siswa_kelas_id=kelas_id limit $offset,$limit");
		return $hsl;
	} 

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	 } 
	 function tampil(){
		$hsl=$this->db->query("SELECT tbl_siswa.*FROM tbl_siswa");
		return $hsl;
	} 
	function cetak_siswa($nis){
		$hsl=$this->db->query("SELECT s.*,tp.tahun_ajaran FROM tbl_siswa AS s JOIN tbl_thn_ajaran AS tp ON s.id_tahun_ajaran = tp.id_tahun_ajaran
		WHERE s.`siswa_nis`='$nis' ");
		return $hsl;
	}
	function get_by_id($siswa_nis)
    {
        $this->db->where($this->siswa_nis,$siswa_nis);
        return $this->db->get($this->table)->row();
    } 
} 