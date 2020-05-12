<?php
class Siswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
		$this->load->model('m_siswa');
		$this->load->model('m_pengguna');
		$this->load->model('m_kelas');
		$this->load->library('upload');
		$this->load->model('m_tahun_ajaran');
		$this->load->library('pdf');
	}


	function index(){
		$x['kelas']=$this->m_kelas->get_all_kelas();
		$x['data']=$this->m_siswa->get_all_siswa();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_siswa',$x);
		$this->load->view('admin/control_sidebar');
		$this->load->view('admin/foot');
	} 
	
	function simpan_siswa(){
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
							// $nis=strip_tags($this->input->post('xnis'));
							// $nama=strip_tags($this->input->post('xnama'));
							// $jenkel=strip_tags($this->input->post('xjenkel'));
							// $kelas=strip_tags($this->input->post('xkelas'));

							$data = array(
								'siswa_nis' =>$this->input->post('nis'),
								'siswa_nisn' =>$this->input->post('nisn'),
								'siswa_nama' =>$this->input->post('nama_siswa'),
								'siswa_tempat' =>$this->input->post('tempat_lahir'),
								'siswa_tanggal' =>$this->input->post('tanggal_lahir'),
								'siswa_jenkel' =>$this->input->post('xjenkel'),
								'siswa_agama' =>$this->input->post('agama'),
								'siswa_kewarganegaraan' =>$this->input->post('id_kewargangeraan'),
								'siswa_anakke' =>$this->input->post('anak_ke'),
								'siswa_jml_saudara' =>$this->input->post('jumlah_saudara'),
								'siswa_bahasa_sehari2' =>$this->input->post('bahasa_sehari2'),
								'siswa_tinggal_dengan' =>$this->input->post('tinggaldengan'),
								'siswa_kendaraan' =>$this->input->post('kendaraan'),
								'siswa_tinggi' =>$this->input->post('tinggi'),
								'siswa_berat' =>$this->input->post('berat'),
								'siswa_gol_dar' =>$this->input->post('gol_dar'),
								'siswa_tanggal_diterima' =>$this->input->post('tgl_terima'),
								'siswa_asal_sekolah' =>$this->input->post('asal_sekolah'),
								'siswa_nomer_ijasah' =>$this->input->post('nomer_ijasah'),
								'siswa_nomerhp' =>$this->input->post('no_hp'),
								'siswa_status' =>$this->input->post('status'),				
								'siswa_alamat' =>$this->input->post('alamat'),
								'id_tahun_ajaran' =>$this->input->post('id_tahun'),
								'siswa_nama_ayah' =>$this->input->post('nama_ayah'),
								'siswa_pendidikan_ayah' =>$this->input->post('pendidikan_ayah'),
								'siswa_pekerjaan_ayah' =>$this->input->post('pekerjaan_ayah'),
								'siswa_penghasilan_ayah' =>$this->input->post('penghasilan_ayah'),
								'siswa_nama_ibu' =>$this->input->post('nama_ibu'),
								'siswa_pendidikan_ibu' =>$this->input->post('pendidikan_ibu'),
								'siswa_pekerjaan_ibu' =>$this->input->post('pekerjaan_ibu'),
								'siswa_penghasilan_ibu' =>$this->input->post('penghasilan_ibu'),
								'siswa_photo' =>$gbr['file_name']
							);
								 $this->db->insert('tbl_siswa',$data);
							echo $this->session->set_flashdata('msg','success');
							redirect('admin/siswa');
					}else{
					$nis=strip_tags($this->input->post('nis'));
					$nama=strip_tags($this->input->post('nama_siswa'));
					$jenkel=strip_tags($this->input->post('xjenkel'));
					$id_tahun_ajaran=strip_tags($this->input->post('id_tahun'));


					$this->m_siswa->simpan_siswa_tanpa_img($nis,$nama,$jenkel,$id_tahun_ajaran);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/siswa');
	                }
	                 
	            }else{
	            	$nis=strip_tags($this->input->post('nis'));
					$nama=strip_tags($this->input->post('nama_siswa'));
					$jenkel=strip_tags($this->input->post('xjenkel'));
					$id_tahun_ajaran=strip_tags($this->input->post('id_tahun'));


					$this->m_siswa->simpan_siswa_tanpa_img($nis,$nama,$jenkel,$id_tahun_ajaran);
					echo $this->session->set_flashdata('msg','success');
					redirect('admin/siswa');
				// 	$this->session->set_flashdata("error","Gagal Menambahkan data");
                // echo "<script>window.location.href='".base_url()."admin/siswa","';</script>"; 
				}
				
	}
	 
	
	function update_siswa(){
				
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
								'siswa_nis' =>$this->input->post('nis'),
								'siswa_nisn' =>$this->input->post('nisn'),
								'siswa_nama' =>$this->input->post('nama_siswa'),
								'siswa_tempat' =>$this->input->post('tempat_lahir'),
								'siswa_tanggal' =>$this->input->post('tanggal_lahir'),
								'siswa_jenkel' =>$this->input->post('xjenkel'),
								'siswa_agama' =>$this->input->post('agama'),
								'siswa_kewarganegaraan' =>$this->input->post('id_kewargangeraan'),
								'siswa_anakke' =>$this->input->post('anak_ke'),
								'siswa_jml_saudara' =>$this->input->post('jumlah_saudara'),
								'siswa_bahasa_sehari2' =>$this->input->post('bahasa_sehari2'),
								'siswa_tinggal_dengan' =>$this->input->post('tinggaldengan'),
								'siswa_kendaraan' =>$this->input->post('kendaraan'),
								'siswa_tinggi' =>$this->input->post('tinggi'),
								'siswa_berat' =>$this->input->post('berat'),
								'siswa_gol_dar' =>$this->input->post('gol_dar'),
								'siswa_tanggal_diterima' =>$this->input->post('tgl_terima'),
								'siswa_asal_sekolah' =>$this->input->post('asal_sekolah'),
								'siswa_nomer_ijasah' =>$this->input->post('nomer_ijasah'),
								'siswa_nomerhp' =>$this->input->post('no_hp'),
								'siswa_status' =>$this->input->post('status'),				
								'siswa_alamat' =>$this->input->post('alamat'),
								'id_tahun_ajaran' =>$this->input->post('id_tahun'),
								'siswa_nama_ayah' =>$this->input->post('nama_ayah'),
								'siswa_pendidikan_ayah' =>$this->input->post('pendidikan_ayah'),
								'siswa_pekerjaan_ayah' =>$this->input->post('pekerjaan_ayah'),
								'siswa_penghasilan_ayah' =>$this->input->post('penghasilan_ayah'),
								'siswa_nama_ibu' =>$this->input->post('nama_ibu'),
								'siswa_pendidikan_ibu' =>$this->input->post('pendidikan_ibu'),
								'siswa_pekerjaan_ibu' =>$this->input->post('pekerjaan_ibu'),
								'siswa_penghasilan_ibu' =>$this->input->post('penghasilan_ibu'),
								'siswa_photo' =>$gbr['file_name']
							);

							// $this->m_siswa->update_siswa($kode,$nis,$nama,$jenkel,$kelas,$photo);
							$this->db->where('siswa_nis', $this->input->post('nis'));
							if ($this->db->update('tbl_siswa',$data)) {
								echo $this->session->set_flashdata('msg','info');
								redirect('admin/siswa');
								
							}
							
	                }else{
	                    echo $this->session->set_flashdata('msg','warning');
	                    redirect('admin/siswa');
	                }
	                
	            }else{
					$data = array(
						'siswa_nis' =>$this->input->post('nis'),
						'siswa_nisn' =>$this->input->post('nisn'),
						'siswa_nama' =>$this->input->post('nama_siswa'),
						'siswa_tempat' =>$this->input->post('tempat_lahir'),
						'siswa_tanggal' =>$this->input->post('tanggal_lahir'),
						'siswa_jenkel' =>$this->input->post('xjenkel'),
						'siswa_agama' =>$this->input->post('agama'),
						'siswa_kewarganegaraan' =>$this->input->post('id_kewargangeraan'),
						'siswa_anakke' =>$this->input->post('anak_ke'),
						'siswa_jml_saudara' =>$this->input->post('jumlah_saudara'),
						'siswa_bahasa_sehari2' =>$this->input->post('bahasa_sehari2'),
						'siswa_tinggal_dengan' =>$this->input->post('tinggaldengan'),
						'siswa_kendaraan' =>$this->input->post('kendaraan'),
						'siswa_tinggi' =>$this->input->post('tinggi'),
						'siswa_berat' =>$this->input->post('berat'),
						'siswa_gol_dar' =>$this->input->post('gol_dar'),
						'siswa_tanggal_diterima' =>$this->input->post('tgl_terima'),
						'siswa_asal_sekolah' =>$this->input->post('asal_sekolah'),
						'siswa_nomer_ijasah' =>$this->input->post('nomer_ijasah'),
						'siswa_nomerhp' =>$this->input->post('no_hp'),
						'siswa_status' =>$this->input->post('status'),				
						'siswa_alamat' =>$this->input->post('alamat'),
						'id_tahun_ajaran' =>$this->input->post('id_tahun'),
						'siswa_nama_ayah' =>$this->input->post('nama_ayah'),
						'siswa_pendidikan_ayah' =>$this->input->post('pendidikan_ayah'),
						'siswa_pekerjaan_ayah' =>$this->input->post('pekerjaan_ayah'),
						'siswa_penghasilan_ayah' =>$this->input->post('penghasilan_ayah'),
						'siswa_nama_ibu' =>$this->input->post('nama_ibu'),
						'siswa_pendidikan_ibu' =>$this->input->post('pendidikan_ibu'),
						'siswa_pekerjaan_ibu' =>$this->input->post('pekerjaan_ibu'),
						'siswa_penghasilan_ibu' =>$this->input->post('penghasilan_ibu')
					);

					// $this->m_siswa->update_siswa($kode,$nis,$nama,$jenkel,$kelas,$photo);
					$this->db->where('siswa_nis', $this->input->post('nis'));
					if ($this->db->update('tbl_siswa',$data)) {
						echo $this->session->set_flashdata('msg','info');
						redirect('admin/siswa');
						
							// $this->session->set_flashdata("error","Gagal Menambahkan data");
							// echo "<script>window.location.href='".base_url()."admin/siswa","';</script>"; 
				}  
			}

	}
 
	function hapus_siswa(){
		$kode=$this->input->post('kode');
		$gambar=$this->input->post('gambar');
		$path='./assets/images/'.$gambar;
		unlink($path);
		$this->m_siswa->hapus_siswa($kode);
		echo $this->session->set_flashdata('msg','success-hapus');
		redirect('admin/siswa');
	} 
		function siswa_tambah(){
		$x['tahun']=$this->m_tahun_ajaran->tampil_tahun()->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_siswa_input',$x);
		$this->load->view('admin/control_sidebar');
		$this->load->view('admin/foot');
		}

		public function ubah_siswa($NIS){
			$data['tahun']=$this->m_tahun_ajaran->tampil_tahun()->result();
		$where = array('siswa_nis'=>$NIS);
		$data['title'] ="Ubah Siswa"; 
		$data['siswa'] = $this->m_siswa->edit_data($where,'tbl_siswa')->result();
		$this->load->view('admin/header');
		$this->load->view('admin/sidebar');
		$this->load->view('admin/v_siswa_edit',$data);
		$this->load->view('admin/control_sidebar');
		$this->load->view('admin/foot');
		}
	function cetak_siswa($siswa_nis){
		// $data['tahun']=$this->m_tahun_ajaran->tampil_tahun()->result();
		// $where = array('siswa_nis'=>$NIS);
		// $data['title'] ="Ubah Siswa"; 
		// $data= $this->m_siswa->edit_data($where,'tbl_siswa')->result();
		// $siswa = $this->m_siswa->cetak_siswa($nis)->result();
		$siswa = $this->m_siswa->get_by_id($siswa_nis);
		$this->load->library('pdf');
		$pdf= new FPDF();
		$pdf->AddPage('P','A4');
		$pdf->setFont('Arial','B',14);
        $pdf->Image('http://localhost/mschool/theme/images/dinas.png', 15, 7, 25);
        $pdf->Cell(45,7,'',0,0,'C');
        $pdf->Cell('120',7,'PENDIDIKAN KOTA BEKASI',0,1,'C');
        $pdf->Cell('210',7,'DINAS PENDIDIKAN',0,1,'C');
        $pdf->setFont('Arial','B',10);
        $pdf->Cell('220',7,'JL. SMP 28 Kranggan Pasar Jatisampurna 17433 Kota Bekasi',0,1,'C');
        $pdf->Cell('220',5,'Telp: (021) 84304472 Email : smpn_dupan@yahoo.co.id',0,1,'C');
        $pdf->Line(12,40,200-2,40);
		$pdf->Line(12,41, 200-2, 41);	
		$pdf->Cell(185,31,'Biodata Siswa',0,1,'C');
		$pdf->Cell(44,4,'1. NIS ',0,0,'L');
		$pdf->Cell(14,4,': '.$siswa->siswa_nis,0,0,'L');
		$pdf->Cell(10,4,'',0,1,'C');
		$pdf->Cell(44,7,'2. NISN ',0,0,'L');
		$pdf->Cell(44,7,' : '.$siswa->siswa_nisn,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'3. Nama Lengkap ',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_nama,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'4. Tmpt,Tgl Lahir',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_tempat,0,0,'L');
		$pdf->Cell(1,8,''.$siswa->siswa_tanggal,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'5. Jenis Kelamin',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_jenkel,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'6. Agama',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_agama,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'7. Kewarganegaraan',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_kewarganegaraan,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'8. Anak Ke',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_anakke,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'7. Jumlah Saudara',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_jml_saudara,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'8. Bahasa keseharian',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_bahasa_sehari2,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'9. Tinggal dengan',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_tinggal_dengan,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'10. Ke sekolah dengan',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_kendaraan,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'11. Tinggi Badan',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_tinggi,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'12. Berat Badan',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_berat,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'11. Gol. Darah',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_gol_dar,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'12. Tanggal Diterima',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_tanggal_diterima,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'13. Asal Sekolah',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_asal_sekolah,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'14. Nomer Ijazah',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_nomer_ijasah,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'15. Nomer Jp',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_nomerhp,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'16. Status Siswa',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_status,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,8,'17. Alamat Siswa',0,0,'L');
		$pdf->Cell(44,8,' : '.$siswa->siswa_alamat,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,20,'B. KETERANGAN TENTANG ORANG TUA SISWA',0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,28,'18. Nama Ayah',0,0,'L');
		$pdf->Cell(44,28,' : '.$siswa->siswa_nama_ayah,0,0,'L');
		$pdf->Cell(44,28,'Nama Ibu',0,0,'L');
		$pdf->Cell(44,28,' : '.$siswa->siswa_nama_ibu,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,30,'19. Pendidikan ',0,0,'L');
		$pdf->Cell(44,30,' : '.$siswa->siswa_pendidikan_ayah,0,0,'L');
		$pdf->Cell(44,32,'Pendidikan ',0,0,'L');
		$pdf->Cell(44,32,' : '.$siswa->siswa_pendidikan_ibu,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,34,'20. Pekerjaan ',0,0,'L');
		$pdf->Cell(44,34,' : '.$siswa->siswa_pekerjaan_ayah,0,0,'L');
		$pdf->Cell(44,36,'Pekerjaan ',0,0,'L');
		$pdf->Cell(44,36,' : '.$siswa->siswa_pekerjaan_ibu,0,0,'L');
		$pdf->Cell(11,4,'',0,1,'C');
		$pdf->Cell(44,38,'21. Penghasilan ',0,0,'L');
		$pdf->Cell(44,38,' : Rp. '.$siswa->siswa_penghasilan_ayah,0,0,'L');
		$pdf->Cell(44,40,'Penghasilan ',0,0,'L');
		$pdf->Cell(44,40,' : Rp. ' .$siswa->siswa_penghasilan_ibu,0,0,'L');
		// $pdf->Cell(200,40,'',0,1,'C');
		$pdf->Cell(44,50,'Bekasi,  ',0,0,'L');
		
		$pdf->Output();
		}
		
}