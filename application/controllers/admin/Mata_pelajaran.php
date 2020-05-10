<?php 

class Mata_pelajaran extends CI_Controller{
    function __construct(){
        parent:: __construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_mata_pelajaran');

        }
    
    function  index(){
        $x['mata_pelajaran']=$this->m_mata_pelajaran->get_all_mata_pelajaran()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_mata_pelajaran',$x);
		$this->load->view('admin/foot');
    } 
    
    function tambah_aksi(){
        $data = array(
            'mata_pelajaran' =>$this->input->post('mata_pelajaran'),
            'kkm_pengetahuan' =>$this->input->post('kkm_pengetahuan'),
            'kkm_keterampilan' =>$this->input->post('kkm_keterampilan'),
        
        );
             if ($this->db->insert('tbl_mata_pelajaran',$data)) {
                 $this->session->set_flashdata("success",
                 "Berhasil Menambahkan data");
                 echo "<script>window.location.href='".base_url().
                 "admin/mata_pelajaran","';</script>";
             }else{
                $this->session->set_flashdata("error","Gagal Menambahkan data");
                echo "<script>window.location.href='".base_url()."admin","';</script>"; 
             }
    }
    
    public function delete($kd_pelajaran){
        if ($this->db->delete('tbl_mata_pelajaran',array('kd_pelajaran'=>$kd_pelajaran))) {
            $this->session->set_flashdata("success","Berhasil Menghapus data");   
            echo "<script>window.location.href='".base_url()."admin/mata_pelajaran","';</script>";
             
        }
    }
    // update data
    public function ubah_mapel($kd_pelajaran){
        $where = array('kd_pelajaran'=>$kd_pelajaran);
        $data['title'] ="Ubah Tahun";
        $data['mata_pelajaran'] = $this->m_mata_pelajaran->edit_data($where,'tbl_mata_pelajaran')->result();
        $this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_mata_pelajaran',$data);
		$this->load->view('admin/foot');
    }
    function update_mapel(){

            $kd_pelajaran=$this->input->post('kd_pelajaran');
            $mata_pelajaran=strip_tags($this->input->post('mapel'));
           $kkm_pengetahuan=strip_tags($this->input->post('kkm_pengetahuan'));
           $kkm_keterampilan=strip_tags($this->input->post('kkm_keterampilan'));
           $this->m_mata_pelajaran->update_mapel($kd_pelajaran,$mata_pelajaran,$kkm_pengetahuan,$kkm_keterampilan);
           echo $this->session->set_flashdata('msg','info');
           redirect('admin/mata_pelajaran');

}
    
}
