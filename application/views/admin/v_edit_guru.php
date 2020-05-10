
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
    <li class="active">Edit Data</li>
  </ol>
</section>

<!-- Main content -->
<section class="content ">
  <!-- Small boxes (Stat box) -->
   
  <!-- /.row -->
  <!-- Main row -->
  <div class="row ">
 
    <!-- Left col -->
    <?php foreach ($guru as $g){ ?>
    <form action="<?php echo base_url(). 'admin/guru/update_guru'; ?> " method="post"  enctype="multipart/form-data">
  
    <section class="col-lg-6 connectedSortable ">

              		<table class="table col-md-6">
              <tr>
              <tr>
  				<td>Id Guru</td>
  				<td><input type="number" class="form-control" name="id" readonly
                  placeholder="Masukan  ID Pegawai" value="<?php echo $g->guru_id;?>" >
          </td>
  		    </tr>
          <tr>
  				<td>NIP</td>
  				<td><input type="text" class="form-control" name="nip" required="" 
                  placeholder="Masukan Nomer Induk Pegawai" value="<?php echo $g->guru_nip;?>" >
          </td>
  		    </tr>
          <tr>
  				<tr>
  				<td>NIK</td>
  				<td><input type="text" class="form-control" name="nik"  value="<?php echo $g->guru_nik;?>" placeholder="Masukan NIK Pegawai"></td>
          </tr>
  		    </tr>
          
          <tr>
  				<td>Nama Guru</td>
  				<td><input type="text" class="form-control" name="nama_guru"  value="<?php echo $g->guru_nama;?>" placeholder="Masukan Nama Pegawai"></td>
          </tr>
          <tr>
  				<td>Jenis Kelamin</td>
  				<td> <div class="form-controlp">
                                        <div >
                                          <?php if($g->guru_jenkel=='L'):?>
                                           <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel" checked>
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="P" name="xjenkel">
                                                <label for="inlineRadio2"> Perempuan </label>
                                            </div>
                                          <?php else:?>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="L" name="xjenkel">
                                                <label for="inlineRadio1"> Laki-Laki </label>
                                            </div>
                                            <div class="radio radio-info radio-inline">
                                                <input type="radio" id="inlineRadio1" value="P" name="xjenkel" checked>
                                                <label for="inlineRadio2"> Perempuan </label>
                                            </div>
                                          <?php endif;?>
                                        </div>
                                    </div>
                </td>
          </tr>
  		    <tr>
  				<td>Tempat Lahir</td>
  				<td><input type="text" class="form-control" name="tempat_lahir"  value="<?php echo $g->guru_tmp_lahir; ?>" placeholder="Masukan Tempat Lahir "></td>
          </tr>
          
          <tr>
          <tr>
  				<td>Tanggal Lahir</td>
  				<td><input type="date" class="form-control pull-right" name="tanggal_lahir"  value="<?php echo $g->guru_tgl_lahir; ?>"></td>
          </tr>



          <tr>
  				<td>Agama</td>
  				<td>
                  <select class="form-control" name="agama" id="agama" >
                    <option value="<?php echo $g->guru_agama; ?>"><?php echo $g->guru_agama; ?></option>
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
                  <option value="<?php echo $g->guru_pendidikan_terakhir; ?>"><?php echo $g->guru_pendidikan_terakhir; ?></option>
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
  				<td><input type="text" class="form-control" name="jurusan"  value="<?php echo $g->guru_jurusan;?>" placeholder="Jurusan Pendidikan"></td>
          </tr>
          
          <tr>
  				<td>Golongan</td>
  				<td><input type="text" class="form-control" name="golongan"  value="<?php echo $g->guru_golongan;?>" placeholder="Golongan PNS "></td>
          </tr>
          </table>
    </section>
    <section class="col-lg-6 connectedSortable">
    <table class="table col-md-6">
    <tr>
  				<td>Status</td>
  				<td><input type="text" class="form-control" name="status"  value="<?php echo $g->guru_status;?>" placeholder="Status Pegawai"></td>
          </tr>
          
          <tr>
            <td>Jabatan</td>
  				<td>
          <!-- <input type="text" class="form-control" name="Tahun_angkatan" required="" value="" placeholder="Masukan Tahun Angkatan Siswa"> -->
          <select class="form-control select2" name="jabatan" id="jabatan" required="">

                    <?php foreach($jabatan as $row) { ?>
                    <option value="<?php echo $row->kd_jabatan; ?>" ><?php echo $row->nama_jabatan;?></option>
                    <?php } ?>
                    </select> 
          </td>
          </tr>
          <tr>
  				<td>Mata Pelajaran</td>
  				<td>
          <select class="form-control select2" name="mapel" id="mapel" >
                    <?php foreach($mata_pelajaran as $row) { ?>
                    <option value="<?php echo $row->kd_pelajaran; ?>" ><?php echo $row->mata_pelajaran;?></option>
                    <?php } ?>
                    </select>
          </td>
          </tr>

              <tr>
  				<td>No. Hp</td>
  				<td><input type="text" class="form-control" name="no_hp"  value="<?php echo $g->guru_hp; ?>" placeholder="Nomer Handphone"></td>
          </tr>
          
          <tr>
  				<td>NPWP</td>
  				<td><input type="text" class="form-control" name="npwp"  value="<?php echo $g->guru_NPWP; ?>" placeholder="Masukan NPWP"></td>
          </tr>
          <tr>
  				<td>NUPTK</td>
  				<td><input type="text" class="form-control" name="nuptk" value="<?php echo $g->guru_NUPTK; ?>" placeholder="Masukan NUPTK"></td>
          </tr>
          
          <tr>
  				<td>Alamat</td>
  				<td><textarea type="text" class="form-control" name="alamat"  placeholder="Masukan Alamat Guru">
                  <?php echo $g->guru_alamat; ?>
                  </textarea></td>
          </tr>

          <tr>
  				<td>Keterangan</td>
  				<td><input type="text" class="form-control" name="keterangan"  value="<?php echo $g->guru_keterangan; ?>" placeholder="Masukan Keterangan"></td>
          </tr>
          <tr>
  				<td>Foto</td>
  				<td><input type="file" class="form-control" name="filefoto"  value="<?php echo $g->guru_photo;?>" ></td>
                 
          </tr>
          <tr>
          <td></td>
          <td><img src="<?php echo base_url(). 'assets/images/'?><?php echo $g->guru_photo;?>" alt="" width="100"></td>
          </tr>
  		      		    </table>
    </section>
    <table class="table col-lg-12">
    <tr>
  				<td><input type="submit" class="btn btn-info" value="Simpan">
                <button class="btn btn-danger" value=""><a href="<?php echo base_url().'admin/guru' ?>" style="color:white">Batal</a></button></td>
  		    </tr>
    </table>
    <?php } ?>
  	</form>


    </div>
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->
 
</section>
<!-- /.content -->
</div>


