<?php 
 class M_kelas7 extends CI_Model{
    function get_siswa_7(){
		$hsl=$this->db->query("SELECT 
      k7.`kelas_id`,
      k7.nis AS nis,
      s.`siswa_nisn`,
      s.siswa_nama AS siswa_nama,
      s.`siswa_jenkel`,
      k7.kelas_tingkat,
      k7.tahun_pelajaran
      FROM tbl_kls7 AS k7
      INNER JOIN tbl_siswa AS s
      ON k7.nis = s.siswa_nis");
		return $hsl;
 } 
 public function tampil_kelas(){
    return $this->db->get('tbl_kls7');
 }
 public function kelas(){
    return $this->db->get('tbl_kelas');
 }
 public function tahun(){
    return $this->db->get('tbl_thn_ajaran');
 }
 
 function edit_data($where,$table){
    return $this->db->get_where($table,$where);
 }
 function update_kelas($id_kelas,$kelas_tingkat,$tahun_pelajaran){
    $hsl=$this->db->query("UPDATE tbl_kls7 SET kelas_id='$id_kelas', kelas_tingkat='$kelas_tingkat',tahun_pelajaran='$tahun_pelajaran' WHERE kelas_id='$id_kelas'");
    return $hsl;
}
// function tahun(){
//     $query = $this->db->query("SELECT
//     id_tahun_ajaran,
//     tahun_ajaran
//   FROM tbl_thn_ajaran");
//     foreach ($query->result_array() as $row) {
//         $array[] = $row; }
//         if (!isset($array)) {
//             $array ='';
//         }
//         $query->free_result();
//         return $array;
// }
 } 