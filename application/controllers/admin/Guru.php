<?php
class Guru extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_guru');
		$this->load->model('m_pengguna');
		$this->load->model('m_jabatan');
		$this->load->model('m_mata_pelajaran');
		
		$this->load->library('upload');
		
	}

 
	function index(){
		$x['data']=$this->m_guru->get_guru();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_guru',$x);
		$this->load->view('admin/control_sidebar');
		$this->load->view('admin/footer_guru');
	}
	function tambah_guru(){
		$x['jabatan']=$this->m_jabatan->get_all_jabatan()->result();
		$x['mata_pelajaran']=$this->m_mata_pelajaran->get_all_mata_pelajaran()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_input_guru',$x);
		$this->load->view('admin/control_sidebar');
		$this->load->view('admin/foot');
	} 
	
	function ubah_guru($id_guru){
		$where = array('guru_id'=>$id_guru);
		$x['jabatan']=$this->m_jabatan->get_all_jabatan()->result();
		$x['mata_pelajaran']=$this->m_mata_pelajaran->get_all_mata_pelajaran()->result();
		$x['guru'] = $this->m_guru->edit_data($where,'tbl_guru')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_edit_guru',$x);
		$this->load->view('admin/control_sidebar');
		$this->load->view('admin/foot');
	}
	
	function simpan_guru(){
				$config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();

	                        $photo=$gbr['file_name'];
							// $nip=strip_tags($this->input->post('xnip'));
							// $nama=strip_tags($this->input->post('xnama'));
							// $jenkel=strip_tags($this->input->post('xjenkel'));
							// $tmp_lahir=strip_tags($this->input->post('xtmp_lahir'));
							// $tgl_lahir=strip_tags($this->input->post('xtgl_lahir'));
							// $mapel=strip_tags($this->input->post('xmapel'));
							$data = array(
								'guru_nip' =>$this->input->post('nip'),
								'guru_nik' =>$this->input->post('nik'),
								'guru_nama' =>$this->input->post('nama_guru'),
								'guru_jenkel' =>$this->input->post('xjenkel'),
								'guru_tmp_lahir' =>$this->input->post('tempat_lahir'),
								'guru_tgl_lahir' =>$this->input->post('tanggal_lahir'),
								'guru_agama' =>$this->input->post('agama'),
								'guru_pendidikan_terakhir' =>$this->input->post('pendidikan_terakhir'),
								'guru_jurusan' =>$this->input->post('jurusan'),
								'guru_golongan' =>$this->input->post('golongan'),
								'guru_status' =>$this->input->post('status'),
								'guru_kd_jabatan' =>$this->input->post('jabatan'),
								'guru_kd_mata_pelajaran' =>$this->input->post('mapel'),
								'guru_hp' =>$this->input->post('no_hp'),
								'guru_NPWP' =>$this->input->post('npwp'),
								'guru_NUPTK' =>$this->input->post('nuptk'),
								'guru_alamat' =>$this->input->post('alamat'),
								'guru_keterangan' =>$this->input->post('keterangan'),
								'guru_photo' =>$gbr['file_name']
							);
								 $this->db->insert('tbl_guru',$data);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/guru');
							// $this->m_guru->simpan_guru($nip,$nama,$jenkel,$tmp_lahir,$tgl_lahir,$mapel,$photo);
							// echo $this->session->set_flashdata('msg','success');
							// redirect('admin/guru');
					}else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/guru');
	                }
	                 
	            }else{
	            	$data = array(
						'guru_nip' =>$this->input->post('nip'),
						'guru_nik' =>$this->input->post('nik'),
						'guru_nama' =>$this->input->post('nama_guru'),
						'guru_jenkel' =>$this->input->post('xjenkel'),
						'guru_tmp_lahir' =>$this->input->post('tempat_lahir'),
						'guru_tgl_lahir' =>$this->input->post('tanggal_lahir'),
						'guru_agama' =>$this->input->post('agama'),
						'guru_pendidikan_terakhir' =>$this->input->post('pendidikan_terakhir'),
						'guru_jurusan' =>$this->input->post('jurusan'),
						'guru_golongan' =>$this->input->post('golongan'),
						'guru_status' =>$this->input->post('status'),
						'guru_kd_jabatan' =>$this->input->post('jabatan'),
						'guru_kd_mata_pelajaran' =>$this->input->post('mapel'),
						'guru_hp' =>$this->input->post('no_hp'),
						'guru_NPWP' =>$this->input->post('npwp'),
						'guru_NUPTK' =>$this->input->post('nuptk'),
						'guru_alamat' =>$this->input->post('alamat'),
						'guru_keterangan' =>$this->input->post('keterangan')
					);
						 $this->db->insert('tbl_guru',$data);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/guru');
				}
				
	}
	
	function update_guru(){
				
	            $config['upload_path'] = './assets/images/'; //path folder
	            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
	            $config['encrypt_name'] = TRUE; //nama yang terupload nantinya

	            $this->upload->initialize($config);
	            if(!empty($_FILES['filefoto']['name']))
	            {
	                if ($this->upload->do_upload('filefoto'))
	                {
	                        $gbr = $this->upload->data();
	                        //Compress Image
	                        $config['image_library']='gd2';
	                        $config['source_image']='./assets/images/'.$gbr['file_name'];
	                        $config['create_thumb']= FALSE;
	                        $config['maintain_ratio']= FALSE;
	                        $config['quality']= '60%';
	                        $config['width']= 300;
	                        $config['height']= 300;
	                        $config['new_image']= './assets/images/'.$gbr['file_name'];
	                        $this->load->library('image_lib', $config);
	                        $this->image_lib->resize();
	                        $gambar=$this->input->post('gambar');
							$path='./assets/images/'.$gambar;
							unlink($path);

	                        $photo=$gbr['file_name'];
	                        $data = array(
								'guru_nip' =>$this->input->post('nip'),
								'guru_nik' =>$this->input->post('nik'),
								'guru_nama' =>$this->input->post('nama_guru'),
								'guru_jenkel' =>$this->input->post('xjenkel'),
								'guru_tmp_lahir' =>$this->input->post('tempat_lahir'),
								'guru_tgl_lahir' =>$this->input->post('tanggal_lahir'),
								'guru_agama' =>$this->input->post('agama'),
								'guru_pendidikan_terakhir' =>$this->input->post('pendidikan_terakhir'),
								'guru_jurusan' =>$this->input->post('jurusan'),
								'guru_golongan' =>$this->input->post('golongan'),
								'guru_status' =>$this->input->post('status'),
								'guru_kd_jabatan' =>$this->input->post('jabatan'),
								'guru_kd_mata_pelajaran' =>$this->input->post('mapel'),
								'guru_hp' =>$this->input->post('no_hp'),
								'guru_NPWP' =>$this->input->post('npwp'),
								'guru_NUPTK' =>$this->input->post('nuptk'),
								'guru_alamat' =>$this->input->post('alamat'),
								'guru_keterangan' =>$this->input->post('keterangan'),
								'guru_photo' =>$gbr['file_name']
							);

							// $this->m_siswa->update_siswa($kode,$nis,$nama,$jenkel,$kelas,$photo);
							$this->db->where('guru_id', $this->input->post('id'));
							if ($this->db->update('tbl_guru',$data)) {
								echo $this->session->set_flashdata('msg','info');
								redirect('admin/guru');
								
							}
	                    
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/guru');
	                }
	                
	            }else{
					$data = array(
						'guru_nip' =>$this->input->post('nip'),
						'guru_nik' =>$this->input->post('nik'),
						'guru_nama' =>$this->input->post('nama_guru'),
						'guru_jenkel' =>$this->input->post('xjenkel'),
						'guru_tmp_lahir' =>$this->input->post('tempat_lahir'),
						'guru_tgl_lahir' =>$this->input->post('tanggal_lahir'),
						'guru_agama' =>$this->input->post('agama'),
						'guru_pendidikan_terakhir' =>$this->input->post('pendidikan_terakhir'),
						'guru_jurusan' =>$this->input->post('jurusan'),
						'guru_golongan' =>$this->input->post('golongan'),
						'guru_status' =>$this->input->post('status'),
						'guru_kd_jabatan' =>$this->input->post('jabatan'),
						'guru_kd_mata_pelajaran' =>$this->input->post('mapel'),
						'guru_hp' =>$this->input->post('no_hp'),
						'guru_NPWP' =>$this->input->post('npwp'),
						'guru_NUPTK' =>$this->input->post('nuptk'),
						'guru_alamat' =>$this->input->post('alamat'),
						'guru_keterangan' =>$this->input->post('keterangan')
					);
					// $this->m_siswa->update_siswa($kode,$nis,$nama,$jenkel,$kelas,$photo);
					$this->db->where('guru_id', $this->input->post('id'));
					if ($this->db->update('tbl_guru',$data)) {
						echo $this->session->set_flashdata('msg','info');
						redirect('admin/guru');
						
					}
	            } 

	}

	function hapus_guru(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_guru->hapus_guru($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/guru');
	}

}