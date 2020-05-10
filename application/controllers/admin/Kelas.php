<?php 

class Kelas extends CI_Controller{
    function __construct(){
        parent:: __construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_kelas');

        }
    
    function  index(){
        $x['kelas']=$this->m_kelas->tampil_kelas()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_kelas',$x);
		$this->load->view('admin/foot');
    } 
    
    function tambah_aksi(){
        $data = array(
            'kelas_id' =>$this->input->post('kelas_id'),
            'kelas_nama' =>$this->input->post('kelas_nama'));
             if ($this->db->insert('tbl_kelas',$data)) {
                 $this->session->set_flashdata("success",
                 "Berhasil Menambahkan data");
                 echo "<script>window.location.href='".base_url().
                 "admin/kelas","';</script>";
             }else{
                $this->session->set_flashdata("error","Gagal Menambahkan data");
                echo "<script>window.location.href='".base_url()."admin","';</script>"; 
             }
    }
    
    public function delete($kelas_id){
        if ($this->db->delete('tbl_kelas',array('kelas_id'=>$kelas_id))) {
            $this->session->set_flashdata("success","Berhasil Menghapus data");   
            echo "<script>window.location.href='".base_url()."admin/kelas","';</script>";
             
        }
    }
    // update data
    public function ubah_siswa($kelas_id){
        $where = array('kelas_id'=>$kelas_id);
        $data['title'] ="Ubah Siswa";
        $data['kelas'] = $this->m_kelas->edit_data($where,'tbl_kelas')->result();
        $this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_kelas',$data);
		$this->load->view('admin/foot');
    }
    function update_siswa(){
				
        $id_kelas=$this->input->post('xid');
           $kelas=strip_tags($this->input->post('xkelas'));
             $this->m_kelas->update_kelas($id_kelas,$kelas);
           echo $this->session->set_flashdata('msg','info');
           redirect('admin/kelas');

}
    
}
