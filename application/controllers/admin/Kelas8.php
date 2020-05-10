<?php 
class  Kelas8 extends CI_Controller{

    function __construct(){
        parent:: __construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->model('m_kelas8');
        $this->load->model('m_siswa');
        $this->load->model('m_tahun_ajaran');
        $this->load->model('m_kelas');
        $this->load->model('m_kelas7');

    }

    function index(){
        $data['kelas8'] = $this->m_kelas8->get_siswa_8();
        $data['siswa'] = $this->m_siswa->tampil();
        $data['kls'] = $this->m_kelas8->tampil_kelas()->result();
        $data['kls7']= $this->m_kelas7->kelas();
        $this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_kelas8',$data);
		$this->load->view('admin/control_sidebar');
		$this->load->view('admin/foot');
    }
    function tambah_aksi(){
        $data = array(
            'kelas_id' =>$this->input->post('kelas_id'),
            'nis' =>$this->input->post('nis'),
            'kelas_tingkat'=>$this->input->post('kelas_tingkat'),
            'tahun_pelajaran'=>$this->input->post('tahun_pelajaran'));
            
             if ($this->db->insert('tbl_kls8',$data)) {
                 $this->session->set_flashdata("success",
                 "Berhasil Menambahkan data");
                 echo "<script>window.location.href='".base_url().
                 "admin/kelas8","';</script>";
             }else{
                $this->session->set_flashdata("error","Gagal Menambahkan data");
                echo "<script>window.location.href='".base_url()."admin","';</script>"; 
             }
    }
    public function delete($kelas_id){
        if ($this->db->delete('tbl_kls8',array('kelas_id'=>$kelas_id))) {
            $this->session->set_flashdata("success","Berhasil Menghapus data");   
            echo "<script>window.location.href='".base_url()."admin/kelas8","';</script>";
             
        } 
    }
    public function ubah_kelas($kelas_id){
        $where = array('kelas_id'=>$kelas_id);
        $data['title'] ="Ubah Siswa";
        $data['kelas'] = $this->m_kelas8->edit_data($where,'tbl_kls8')->result();
        $this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_kelas8',$data);
		$this->load->view('admin/foot');
    }
    function update_siswa(){
				
        $kelas_id=$this->input->post('kelas_id');
        //    $nis=strip_tags($this->input->post('nis'));
           $kelas_tingkat=strip_tags($this->input->post('kelas_tingkat'));
           $tahun_pelajaran=strip_tags($this->input->post('tahun_pelajaran'));           
             $this->m_kelas8->update_kelas($kelas_id,$kelas_tingkat,$tahun_pelajaran);
           echo $this->session->set_flashdata('msg','info');
           redirect('admin/kelas8');

} 
}

?>