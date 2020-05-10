
<div class="content-wrapper">
<!-- Content Header (Page header) -->

<section class="content-header">
  <h1>
    Dashboard
   
  </h1>
  <ol class="breadcrumb">
    <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Dashboard</li>
    <li class="active">Siswa</li>
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
    <form action="<?php echo base_url(). 'admin/siswa/simpan_siswa'; ?> " method="post"  enctype="multipart/form-data">
    <section class="col-lg-6 connectedSortable ">

              		<table class="table col-md-6">
            
      
          <tr>
          <tr>
  				<td>NIS</td>
  				<td><input type="number" class="form-control" name="nis" required="" placeholder="Masukan NIS Siswa"
          >
          </td>
  		    </tr>
          <tr>

  				<tr>
  				<td>NSIN</td>
  				<td><input type="text" class="form-control" name="nisn"  value="" placeholder="Masukan NISN Siswa"></td>
          </tr>
  		    </tr>
          
          <tr>
  				<td>Nama Siswa</td>
  				<td><input type="text" class="form-control" name="nama_siswa" " value="" placeholder="Masukan Nama Siswa"></td>
          </tr>

  		    <tr>
  				<td>Tempat Lahir</td>
  				<td><input type="text" class="form-control" name="tempat_lahir"  value="" placeholder="Masukan Tempat Lahir Siswa"></td>
          </tr>
          
          <tr>
          <tr>
  				<td>Tanggal Lahir</td>
  				<td><input type="date" class="form-control pull-right" name="tanggal_lahir"  value=""></td>
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
  				<td>Agama</td>
  				<td>
                  <select class="form-control" name="agama" id="agama" >
                    <option value="">Pilih</option>
                    <option >Islam</option>
                    <option  >Kristen Protestan</option>
                    <option  >Kristen Katholik</option>
                    <option  >Hindu</option>
                    <option>Budha</option>
                    </select>
                    </td>
          </tr>
            
          
          <tr>
  				<td>Kewarganegaraan</td>
  				<td>
                  <select class="form-control" name="id_kewargangeraan" id="kewarganegaraan" >
                    <option value="">Pilih</option>
                    <option >Indonesia</option>
                    <option >Asing</option>
                                        </select>
                  </td>
          </tr>

          <tr>
  				<td>Anak ke</td>
  				<td><input type="number" class="form-control" name="anak_ke" " value="" placeholder="Masukan Urutan Anak"></td>
          </tr>
          <tr>
  				<td>Jumlah Saudara</td>
  				<td><input type="number" class="form-control" name="jumlah_saudara"  value="" placeholder="Masukan Jumlah Saudara"></td>
          </tr>
       

          <tr>
  				<td>Bahasa sehari-hari</td>
  				<td><input type="text" class="form-control" name="bahasa_sehari2"  value="" placeholder="Bahasa sehari-hari Siswa"></td>
          </tr>
          
          <tr>
  				<td>tinggal dengan</td>
  				<td><input type="text" class="form-control" name="tinggaldengan"  value="" placeholder="tinggal dengan"></td>
          </tr>

          <tr>
  				<td>Ke Sekolah dengan</td>
  				<td><input type="text" class="form-control" name="kendaraan"  value="" placeholder="tinggal dengan"></td>
          </tr>
          
          <tr>
  				<td>Tinggi</td>
  				<td><input type="number" class="form-control" name="tinggi"  value="" placeholder="Masukan Tinggi Siswa"></td>
          <td>Cm</td>
          </tr>
          
          <tr>
  				<td>Berat Badan</td>
  				<td><input type="number" class="form-control" name="berat"  value="" placeholder="Masukan Asal Sekolah Siswa"></td>
          <td>Kg</td>
          </tr>
          
          <tr>
  				<td>Gol. Darah</td>
  				<td>
          <select class="form-control" name="gol_dar" id="gol_dar" >
                    <option value="">Pilih</option>
                    <option >O</option>
                    <option  >A</option>
                    <option  >B</option>
                    <option  >AB</option>
                    </select>
          </td>
          </tr>
          
         
  			
          

          </table>
    </section>
    <section class="col-lg-6 connectedSortable">
    <table class="table col-md-6">
    <tr>
  				<td>Tanggal di terima</td>
  				<td><input type="date" class="form-control" name="tgl_terima"  value="" placeholder="Masukan Asal Sekolah Siswa"></td>
          </tr>

          <tr>
  				<td>Asal Sekolah</td>
  				<td><input type="text" class="form-control" name="asal_sekolah"  value="" placeholder="Masukan Asal Sekolah Siswa"></td>
          </tr>
          
          <tr>
  				<td>Nomer Ijasah</td>
  				<td><input type="text" class="form-control" name="nomer_ijasah"  value="" placeholder="Masukan Nomer Ijazah Siswa Siswa"></td>
          </tr>
          <tr>
  				<td>NO.Handphone</td>
  				<td><input type="text" class="form-control" name="no_hp" value="" placeholder="Masukan Nomer Handphone"></td>
          </tr>
          <tr>
  				<td>Status</td>
  				<td>
          <select class="form-control" name="status" id="status" >
                    <option value="">Pilih</option>
                    <option>Siswa Baru</option>
                    <option >Aktif</option>
                    <option  >Mutasi</option>
                    <option  >Keluar</option>
                    <option  >Lulus</option>
                    </select>
          </td>
          </tr>
          
          
          <tr>
  				<td>Alamat</td>
  				<td><textarea type="text" class="form-control" name="alamat"  value="" placeholder="Masukan Alamat Siswa"></textarea></td>
          </tr>
          <tr>
    <td>Tahun Angkatan</td>
  				<td>
          <!-- <input type="text" class="form-control" name="Tahun_angkatan" required="" value="" placeholder="Masukan Tahun Angkatan Siswa"> -->
          <select class="form-control" name="id_tahun" id="id_tahun" required="">
                    <option value="">Pilih</option>
                    <?php foreach($tahun as $row) { ?>
                    <option value="<?php echo $row->id_tahun_ajaran; ?>" ><?php echo $row->tahun_ajaran;?></option>
                    <?php } ?>
                    </select> 
          </td>
          </tr>
          <tr>
  				<td>Nama Ayah</td>
  				<td><input type="text" class="form-control" name="nama_ayah"  value="" placeholder="Masukan Ayah Siswa"></td>
          </tr>


           <tr>
  				<td>Pendidikan</td>
  				<td><select class="form-control" name="pendidikan_ayah" id="pendidikan_ayah" >
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
  				<td>Pekerjaan</td>
  				<td><input type="text" class="form-control" name="pekerjaan_ayah"  value="" placeholder="Masukan Pekerjaan Ayah"></td>
          </tr>
          
          <tr>
  				<td>Peghasilan</td>
  				<td><input type="text" class="form-control" name="penghasilan_ayah" " value="" placeholder="Masukan Penghasilan"></td>
  		    </tr>


  		    <tr>
  				<td>Nama Ibu</td>
  				<td><input type="text" class="form-control" name="nama_ibu" value="" placeholder="Masukan Nama Ibu Siswa"></td>
          </tr>

          
          <tr>
  				<td>Pendidikan</td>
  				<td><select class="form-control" name="pendidikan_ibu" id="pendidikan_ibu" >
                    <option value="">Pilih</option>
                    <option >Tidak Sekolah</option>
                    <option  >SD</option>
                    <option  >SMP</option>
                    <option  >SMA/ Sederajat</option>
                    <option>D3</option>
                    <option>S1</option>
                    <option>S2</option>
                    <option>S3</option>
                    </select></td>
          </tr>

          <tr>
  				<td>Pekerjaan</td>
  				<td><input type="text" class="form-control" name="pekerjaan_ibu"  value="" placeholder="Masukan Pekerjaan Ibu "></td>
          </tr>
          
          <tr>
  				<td>Peghasilan</td>
  				<td><input type="text" class="form-control" name="penghasilan_ibu"  value="" placeholder="Masukan Penghasilan "></td>
  		    </tr>
          <tr>
  				<td>Foto</td>
  				<td><input type="file" class="form-control" name="filefoto"  value="" ></td>
          </tr>
  		      		    </table>
    </section>
    <table class="table col-lg-12">
    <tr>
  				<td><input type="submit" class="btn btn-success" value="Simpan">
                <button class="btn btn-danger" value=""><a href="<?php echo base_url().'admin/siswa' ?>" style="color:white">Batal</a></button></td>
  		    </tr>
    </table>
  	</form>


  
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>


