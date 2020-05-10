<?php 
 class M_kelas8 extends CI_Model{
    function get_siswa_8(){
		$hsl=$this->db->query("SELECT
k8.`kelas_id`,
k8.nis,
s.`siswa_nisn`,
s.siswa_nama,
s.`siswa_jenkel`,
k7.kelas_tingkat AS kls7,
k7.tahun_pelajaran AS tp7,
k8.kelas_tingkat AS kls8,
k8.`tahun_pelajaran` AS tp8
 FROM tbl_kls8 AS k8
INNER JOIN tbl_kls7 AS k7
ON k8.nis = k7.nis
INNER JOIN tbl_siswa AS s
ON k8.nis = s.siswa_nis");
		return $hsl;
 } 
 public function tampil_kelas(){
    return $this->db->get('tbl_kls8');
 }
 function edit_data($where,$table){
    return $this->db->get_where($table,$where);
 }
 function update_kelas($kelas_id,$kelas_tingkat,$tahun_pelajaran){
    $hsl=$this->db->query("UPDATE tbl_kls8 SET kelas_id='$kelas_id', kelas_tingkat='$kelas_tingkat',tahun_pelajaran='$tahun_pelajaran' WHERE kelas_id='$kelas_id'");
    return $hsl;
}
function tahun(){
    $query = $this->db->query("SELECT
    id_tahun_ajaran,
    tahun_ajaran
  FROM tbl_thn_ajaran");
    foreach ($query->result_array() as $row) {
        $array[] = $row; }
        if (!isset($array)) {
            $array ='';
        }
        $query->free_result();
        return $array;
}
 } 