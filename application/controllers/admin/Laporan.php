<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller{

    public function __construct(){
        parent::__construct();
        if($this->session->userdata('masuk') !=TRUE){
            $url=base_url('administrator');
            redirect($url);
        };
        $this->load->library('pdf');
        $this->load->model('m_siswa');
		$this->load->model('m_pengguna');
		$this->load->model('m_kelas');
		$this->load->library('upload');
		$this->load->model('m_tahun_ajaran');
    }
    public function index(){
        $pdf = new FPDF('p','mm','legal');
        $pdf->AddPage();
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

        
        $pdf->setFont('Arial','B',10);
		$pelajar = $this->m_siswa->get_all_siswa()->result();
		foreach($pelajar as $row){
		// $pdf->cell(35,6,$row->siswa_nis,1,0,'C');
		// $pdf->cell(45,6,$row->siswa_nama,1,0,'C');
		// $pdf->cell(35,6,$row->siswa_tempat,1,0,'C');
		// $pdf->cell(25,6,$row->siswa_tanggal,1,0,'C');
		// $pdf->cell(45,6,$row->siswa_jenkel,1,1,'C');
    }
    $pdf->Output();
}
}