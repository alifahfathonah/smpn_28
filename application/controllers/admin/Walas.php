<?php 
class  Walas extends CI_Controller{

    function __construct(){
        parent:: __construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_guru');
        $this->load->model('m_walas');
        $this->load->model('m_tahun_ajaran');
        $this->load->model('m_kelas');
        $this->load->model('m_kelas7');

    }

    function index(){
        $data['walas'] = $this->m_walas->get_walas();
        $data['wls']=$this->m_walas->walas()->result();
        $data['guru']=$this->m_guru->get_guru(); 
        $data['kls7']= $this->m_kelas7->kelas();
        $this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_walas',$data);
		$this->load->view('admin/control_sidebar');
		$this->load->view('admin/foot');
    }
    function tambah_aksi(){
        $data = array(
            'kd_walas' =>$this->input->post('kd_walas'),
            'id_guru' =>$this->input->post('id_guru'),
            'kd_kelas'=>$this->input->post('kelas_tingkat'),
            'tahun_ajaran'=>$this->input->post('tahun_pelajaran'));
            
             if ($this->db->insert('tbl_walas',$data)) {
                 $this->session->set_flashdata("success",
                 "Berhasil Menambahkan data");
                 echo "<script>window.location.href='".base_url().
                 "admin/walas","';</script>";
             }else{
                $this->session->set_flashdata("error","Gagal Menambahkan data");
                echo "<script>window.location.href='".base_url()."admin","';</script>"; 
             }
    }
    public function delete($kd_walas){
        if ($this->db->delete('tbl_walas',array('kd_walas'=>$kd_walas))) {
            $this->session->set_flashdata("success","Berhasil Menghapus data");   
            echo "<script>window.location.href='".base_url()."admin/walas","';</script>";
             
        }  
    }
    public function ubah_walas($kd_walas){
        $where = array('kd_walas'=>$kd_walas);
        $data['title'] ="Ubah Walas";
        $data['walas'] = $this->m_walas->edit_data($where,'tbl_walas')->result();
        $this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_walas',$data);
		$this->load->view('admin/foot');
    }
    function update_walas(){
				
            $kelas_id=$this->input->post('kd_walas');
           $id_guru=strip_tags($this->input->post('id_guru'));
           $kd_kelas=strip_tags($this->input->post('kd_kelas'));
           $tahun_ajaran=strip_tags($this->input->post('tahun_ajaran'));           
            $this->m_walas->update_walas($kelas_id,$id_guru,$kd_kelas,$tahun_ajaran);
           echo $this->session->set_flashdata('msg','info');
           redirect('admin/walas');

} 
}

?>