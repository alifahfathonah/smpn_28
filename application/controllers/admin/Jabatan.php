<?php 

class Jabatan extends CI_Controller{
    function __construct(){
        parent:: __construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_jabatan');

        }
    
    function  index(){
        $x['jabatan']=$this->m_jabatan->get_all_jabatan()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_jabatan',$x);
		$this->load->view('admin/foot');
    } 
    
    function tambah_aksi(){
        $data = array(
            'kd_jabatan' =>$this->input->post('id_jabatan'),
            'nama_jabatan' =>$this->input->post('jabatan'));
             if ($this->db->insert('tbl_jabatan',$data)) {
                 $this->session->set_flashdata("success",
                 "Berhasil Menambahkan data");
                 echo "<script>window.location.href='".base_url().
                 "admin/jabatan","';</script>";
             }else{
                $this->session->set_flashdata("error","Gagal Menambahkan data");
                echo "<script>window.location.href='".base_url()."admin","';</script>"; 
             }
    }
    
    public function delete($kd_jabatan){
        if ($this->db->delete('tbl_jabatan',array('kd_jabatan'=>$kd_jabatan))) {
            $this->session->set_flashdata("success","Berhasil Menghapus data");   
            echo "<script>window.location.href='".base_url()."admin/jabatan","';</script>";
             
        }
    }
    // update data
    public function ubah_jabatan($kd_jabatan){
        $where = array('kd_jabatan'=>$kd_jabatan);
        $data['title'] ="Ubah Tahun";
        $data['jabatan'] = $this->m_jabatan->edit_data($where,'tbl_jabatan')->result();
        $this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_jabatan',$data);
		$this->load->view('admin/foot');
    }
    function update_jabatan(){
				
        $kd_jabatan=$this->input->post('kode');
           $nama_jabatan=strip_tags($this->input->post('xkelas'));
             $this->m_jabatan->update_jabatan($kd_jabatan,$nama_jabatan);
           echo $this->session->set_flashdata('msg','info');
           redirect('admin/jabatan');

}
    
}
