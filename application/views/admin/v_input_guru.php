
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="box box-info box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA GURU</h3>
            </div>
<section class="content-header">


  <h1>
    Dashboard
    
  </h1>
  <ol class="breadcrumb">
    <li><a href="<?php echo base_url().'administrator' ?>"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
    <li class="active">
    <a href="<?php echo base_url().'admin/guru'?>">Guru</a>
    </li>
    <li class="active">Tambah Data</li>
  </ol>
</section>

<!-- Main content -->
<section class="content ">
  <!-- Small boxes (Stat box) -->
   
  <!-- /.row -->
  <!-- Main row -->
  <div class="row ">
  
    <!-- Left col -->
    <form action="<?php echo base_url(). 'admin/guru/simpan_guru'; ?> " method="post"  enctype="multipart/form-data">
  
    <section class="col-lg-6 connectedSortable ">

              		<table class="table col-md-6">
              <tr>
          <tr>
  				<td>NIP</td>
  				<td><input type="number" class="form-control" name="nip" required="" placeholder="Masukan Nomer Induk Pegawai"
          >
          </td>
  		    </tr>
          <tr>
  				<tr>
  				<td>NIK</td>
  				<td><input type="text" class="form-control" name="nik"  value="" placeholder="Masukan NIK Pegawai"></td>
          </tr>
  		    </tr>
          
          <tr>
  				<td>Nama Guru</td>
  				<td><input type="text" class="form-control" name="nama_guru"  value="" placeholder="Masukan Nama Pegawai"></td>
          </tr>
          <tr>
  				<td>Jenis Kelamin</td>
  				<td><div class="form-group">
                                       
          <div class="col-xs-12">
          <div class="radio radio-info radio-inline">
          <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
          <label for="inlineRadio1"> Laki-Laki </label>
          </div>
          <div class="radio radio-info radio-inline">
          <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
          <label for="inlineRadio2"> Perempuan </label>
          </div>
          </div>
          </div>
                </td>
          </tr>
  		    <tr>
  				<td>Tempat Lahir</td>
  				<td><input type="text" class="form-control" name="tempat_lahir"  value="" placeholder="Masukan Tempat Lahir "></td>
          </tr>
          
          <tr>
          <tr>
  				<td>Tanggal Lahir</td>
  				<td><input type="date" class="form-control pull-right" name="tanggal_lahir"  value=""></td>
          </tr>



          <tr>
  				<td>Agama</td>
  				<td>
                  <select class="form-control" name="agama" id="agama" >
                    <option value="">Pilih</option>
                    <option >Islam</option>
                    <option  >Kristen Protestan</option>
                    <option  >Kristen Katholik</option>
                    <option  >Hindu</option>
                    <option>Budha</option>
                    <option>Kepercayaan</option>
                    </select>
                    </td>
          </tr>
            
          <tr>
  				<td>Pendidikan Terakhir</td>
  				<td><select class="form-control" name="pendidikan_terakhir" id="pendidikan_terakhir" >
                    <option value="">Pilih</option>
                    <option >Tidak Sekolah</option>
                    <option  >SD</option>
                    <option  >SMP</option>
                    <option  >SMA/ Sederajat</option>
                    <option>D3</option>
                    <option>S1</option>
                    <option>S2</option>
                    <option>S3</option>
                    </select>
          </td>
          </tr>
       

          <tr>
  				<td>Jurusan</td>
  				<td><input type="text" class="form-control" name="jurusan"  value="" placeholder="Jurusan Pendidikan"></td>
          </tr>
          
          <tr>
  				<td>Golongan</td>
  				<td><input type="text" class="form-control" name="golongan"  value="" placeholder="Golongan PNS "></td>
          </tr>
          </table>
    </section>
    <section class="col-lg-6 connectedSortable">
    <table class="table col-md-6">
    <tr>
  				<td>Status</td>
  				<td><input type="text" class="form-control" name="status"  value="" placeholder="Status Pegawai"></td>
          </tr>
          
          <tr>
            <td>Jabatan</td>
  				<td>
          <!-- <input type="text" class="form-control" name="Tahun_angkatan" required="" value="" placeholder="Masukan Tahun Angkatan Siswa"> -->
          <select class="form-control" name="id_tahun" id="id_tahun" required="">
                    <option value="">Pilih</option>
                    <?php foreach($jabatan as $row) { ?>
                    <option value="<?php echo $row->kd_jabatan; ?>" ><?php echo $row->nama_jabatan;?></option>
                    <?php } ?>
                    </select> 
          </td>
          </tr>
          <tr>
  				<td>Mata Pelajaran</td>
  				<td>
          <select class="form-control" name="mapel" id="mapel" >
          <option value="">Pilih</option>
                    <?php foreach($mata_pelajaran as $row) { ?>
                    <option value="<?php echo $row->kd_pelajaran; ?>" ><?php echo $row->mata_pelajaran;?></option>
                    <?php } ?>
                    </select>
          </td>
          </tr>

              <tr>
  				<td>No. Hp</td>
  				<td><input type="text" class="form-control" name="no_hp"  value="" placeholder="Nomer Handphone"></td>
          </tr>
          
          <tr>
  				<td>NPWP</td>
  				<td><input type="text" class="form-control" name="npwp"  value="" placeholder="Masukan NPWP"></td>
          </tr>
          <tr>
  				<td>NUPTK</td>
  				<td><input type="text" class="form-control" name="nuptk" value="" placeholder="Masukan NUPTK"></td>
          </tr>
          
          <tr>
  				<td>Alamat</td>
  				<td><textarea type="text" class="form-control" name="alamat"  value="" placeholder="Masukan Alamat Guru"></textarea></td>
          </tr>

          <tr>
  				<td>Keterangan</td>
  				<td><input type="text" class="form-control" name="keterangan"  value="" placeholder="Masukan Keterangan"></td>
          </tr>
          <tr>
  				<td>Foto</td>
  				<td><input type="file" class="form-control" name="filefoto"  value="" ></td>
          </tr>
  		      		    </table>
    </section>
    <table class="table col-lg-12">
    <tr>
  				<td><input type="submit" class="btn btn-info" value="Simpan">
                <button class="btn btn-danger" value=""><a href="<?php echo base_url().'admin/guru' ?>" style="color:white">Batal</a></button></td>
  		    </tr>
    </table>
  	</form>


    </div>
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->
 
</section>
<!-- /.content -->
</div>


