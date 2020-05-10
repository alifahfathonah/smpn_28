<?php 
 class M_walas extends CI_Model{
    function get_walas(){
		$hsl=$this->db->query("SELECT
        tw.kd_walas as kw,
        tw.id_guru,
        tg.`guru_nip` AS nip,
        tg.`guru_nama`as nama,
        tw.kd_kelas as kelas,
        tw.tahun_ajaran
      FROM tbl_walas AS tw
      INNER JOIN tbl_guru AS tg
      ON tw.`id_guru`  =tg.`guru_id`");
		return $hsl;
 } 
 public function tampil_kelas(){
    return $this->db->get('tbl_kls8');
 }
 function edit_data($where,$table){
    return $this->db->get_where($table,$where);
 }
 function update_walas($kd_walas,$id_guru,$kd_kelas,$tahun_ajaran){
    $hsl=$this->db->query("UPDATE tbl_walas SET kd_walas='$kd_walas', id_guru='$id_guru',kd_kelas='$kd_kelas',tahun_ajaran='$tahun_ajaran' 
    WHERE kd_walas='$kd_walas'");
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
public function walas(){
   return $this->db->get('tbl_walas');
}
 } 