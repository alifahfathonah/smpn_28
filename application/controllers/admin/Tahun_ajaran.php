<?php 

class Tahun_ajaran extends CI_Controller{
    function __construct(){
        parent:: __construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_tahun_ajaran');

        }
    
    function  index(){
        $x['tahun']=$this->m_tahun_ajaran->tampil_tahun()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_tahun_ajaran',$x);
		$this->load->view('admin/foot');
    } 
    
    function tambah_aksi(){
        $data = array(
            'id_tahun_ajaran' =>$this->input->post('id_tahun'),
            'tahun_ajaran' =>$this->input->post('tahun_ajaran'));
             if ($this->db->insert('tbl_thn_ajaran',$data)) {
                 $this->session->set_flashdata("success",
                 "Berhasil Menambahkan data");
                 echo "<script>window.location.href='".base_url().
                 "admin/tahun_ajaran","';</script>";
             }else{
                $this->session->set_flashdata("error","Gagal Menambahkan data");
                echo "<script>window.location.href='".base_url()."admin","';</script>"; 
             }
    }
    
    public function delete($id_tahun){
        if ($this->db->delete('tbl_thn_ajaran',array('id_tahun_ajaran'=>$id_tahun))) {
            $this->session->set_flashdata("success","Berhasil Menghapus data");   
            echo "<script>window.location.href='".base_url()."admin/tahun_ajaran","';</script>";
             
        }
    }
    // update data
    public function ubah_siswa($id_tahun){
        $where = array('id_tahun_ajaran'=>$id_tahun);
        $data['title'] ="Ubah Tahun";
        $data['tahun'] = $this->m_tahun_ajaran->edit_data($where,'tbl_thn_ajaran')->result();
        $this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_tahun_ajaran',$data);
		$this->load->view('admin/foot');
    }
    function update_siswa(){
				
        $id_tahun=$this->input->post('xid');
           $tahun=strip_tags($this->input->post('xkelas'));
             $this->m_tahun_ajaran->update_kelas($id_tahun,$tahun);
           echo $this->session->set_flashdata('msg','info');
           redirect('admin/tahun_ajaran');

}
    
}
