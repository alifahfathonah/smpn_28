
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
    <?php foreach ($siswa as $s){ ?>}
    <form action="<?php echo base_url(). 'admin/siswa/update_siswa'; ?> " method="post"  enctype="multipart/form-data">
    <section class="col-lg-6 connectedSortable ">

              		<table class="table col-md-6">
            
     
          <tr>
          <tr>
  				<td>NIS</td>
  				<td><input type="number" class="form-control" name="nis" required="" placeholder="Masukan NIS Siswa"
                  value="<?php echo $s->siswa_nis; ?>" readonly
          >
          </td>
  		    </tr>
          <tr>

  				<tr>
  				<td>NSIN</td>
  				<td><input type="text" class="form-control" name="nisn" required=""  placeholder="Masukan NISN Siswa"
                  value="<?php echo $s->siswa_nisn; ?>"></td>
          </tr>
  		    </tr>
          
          <tr>
  				<td>Nama Siswa</td>
  				<td><input type="text" class="form-control" name="nama_siswa" required=""  placeholder="Masukan Nama Siswa" 
                  value="<?php echo $s->siswa_nama; ?>"></td>
          </tr>

  		    <tr>
  				<td>Tempat Lahir</td>
  				<td><input type="text" class="form-control" name="tempat_lahir" required=""  placeholder="Masukan Tempat Lahir Siswa"
                  value="<?php  echo $s->siswa_tempat; ?>"></td>
          </tr>
          
          <tr>
          <tr>
  				<td>Tanggal Lahir</td>
  				<td><input type="date" class="form-control pull-right" name="tanggal_lahir" required="" value="<?php echo $s->siswa_tanggal ?>"></td>
          </tr>

          <tr>
  				<td>Jenis Kelamin</td>
  				<td> <div >
                                          <?php if($s->siswa_jenkel=='L'):?>
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
  				<td>Agama</td>
  				<td>
                  <select class="form-control" name="agama" id="agama" >
                    <option value="<?php echo $s->siswa_agama;?>"><?php echo $s->siswa_agama;?></option>
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
                    <option value="<?php echo $s->siswa_kewarganegaraan; ?>"><?php echo $s->siswa_kewarganegaraan; ?> </option>
                    <option >Indonesia</option>
                    <option >Asing</option>
                                        </select>
                  </td>
          </tr>

          <tr>
  				<td>Anak ke</td>
  				<td><input type="number" class="form-control" name="anak_ke" required="" value="<?php echo $s->siswa_anakke; ?>" placeholder="Masukan Urutan Anak"></td>
          </tr>
          <tr>
  				<td>Jumlah Saudara</td>
  				<td><input type="number" class="form-control" name="jumlah_saudara" required="" value="<?php echo $s->siswa_jml_saudara; ?>" placeholder="Masukan Jumlah Saudara"></td>
          </tr>
       

          <tr>
  				<td>Bahasa sehari-hari</td>
  				<td><input type="text" class="form-control" name="bahasa_sehari2" required="" value="<?php echo $s->siswa_bahasa_sehari2;?>" placeholder="Bahasa sehari-hari Siswa"></td>
          </tr>
          
          <tr>
  				<td>tinggal dengan</td>
  				<td><input type="text" class="form-control" name="tinggaldengan" required="" value="<?php  echo $s->siswa_tinggal_dengan;?>" placeholder="tinggal dengan"></td>
          </tr>

          <tr>
  				<td>Ke Sekolah dengan</td>
  				<td><input type="text" class="form-control" name="kendaraan" required="" value="<?php echo $s->siswa_kendaraan; ?>" placeholder="tinggal dengan"></td>
          </tr>
          
          <tr>
  				<td>Tinggi</td>
  				<td><input type="number" class="form-control" name="tinggi" required="" value="<?php echo $s->siswa_tinggi; ?>" placeholder="Masukan Tinggi Siswa"></td>
          <td>Cm</td>
          </tr>
          
          <tr>
  				<td>Berat Badan</td>
  				<td><input type="number" class="form-control" name="berat" required="" value="<?php echo $s->siswa_berat; ?>" placeholder="Masukan Asal Sekolah Siswa"></td>
          <td>Kg</td>
          </tr>
          
          <tr>
  				<td>Gol. Darah</td>
  				<td>
          <select class="form-control" name="gol_dar" id="gol_dar" >
                    <option value="<?php echo $s->siswa_gol_dar; ?>"><?php echo $s->siswa_gol_dar; ?></option>
                    <option >O</option>
                    <option  >A</option>
                    <option  >B</option>
                    <option  >AB</option>
                    </select>
          </td>
          </tr>
          <tr>
  				<td>Tanggal di terima</td>
  				<td><input type="date" class="form-control" name="tgl_terima" required="" value="<?php echo $s->siswa_tanggal_diterima; ?>" placeholder="Masukan Asal Sekolah Siswa"></td>
          </tr>
         
  			
          

          </table>
    </section>
    <section class="col-lg-6 connectedSortable">
    <table class="table col-md-6">


          <tr>
  				<td>Asal Sekolah</td>
  				<td><input type="text" class="form-control" name="asal_sekolah" required="" value="<?php echo $s->siswa_asal_sekolah; ?>" placeholder="Masukan Asal Sekolah Siswa"></td>
          </tr>
          
          <tr>
  				<td>Nomer Ijasah</td>
  				<td><input type="text" class="form-control" name="nomer_ijasah"  value="<?php echo $s->siswa_nomer_ijasah; ?>" placeholder="Masukan Nomer Ijazah Siswa Siswa"></td>
          </tr>
          
  				<td>NO.Handphone</td>
  				<td><input type="text" class="form-control" name="no_hp" required="" value="<?php echo $s->siswa_nomerhp; ?>" placeholder="Masukan Nomer Handphone"></td>
          </tr>
          <tr>
  				<td>Status</td>
  				<td>
          <select class="form-control" name="status" id="status" >
                    <option value="<?php echo $s->siswa_status; ?>"><?php echo $s->siswa_status; ?></option>
                    <option >Aktif</option>
                    <option  >Mutasi</option>
                    <option  >Keluar</option>
                    <option  >Lulus</option>
                    </select>
          </td>
          </tr>
          
          
          <tr>
  				<td>Alamat</td>
  				<td><textarea type="text" class="form-control" name="alamat" required="" 
          placeholder="Masukan Alamat Siswa"><?php  echo $s->siswa_alamat; ?></textarea></td>
          </tr>
          <tr>
    <td>Tahun Angkatan</td>
  				<td>
          <select class="form-control" name="id_tahun" id="id_tahun" required="">
                    
                    <?php foreach($tahun as $row) { ?>
                    <option value="<?php echo $row->id_tahun_ajaran; ?>" ><?php echo $row->tahun_ajaran;?></option>
                    <?php } ?>
                    </select> 
          </td>
          </tr>
          <tr>
          <tr>
  				<td>Nama Ayah</td>
  				<td><input type="text" class="form-control" name="nama_ayah" required="" value="<?php echo $s->siswa_nama_ayah; ?>" placeholder="Masukan Ayah Siswa"></td>
          </tr>


           <tr>
  				<td>Pendidikan</td>
  				<td><select class="form-control" name="pendidikan_ayah" id="pendidikan_ayah" >
                    <option value="<?php echo $s->siswa_pendidikan_ayah; ?>"><?php echo $s->siswa_pendidikan_ayah; ?></option>
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
  				<td><input type="text" class="form-control" name="pekerjaan_ayah" required="" value="<?php echo $s->siswa_pekerjaan_ayah; ?>" placeholder="Masukan Pekerjaan Ayah"></td>
          </tr>
          
          <tr>
  				<td>Peghasilan</td>
  				<td><input type="text" class="form-control" name="penghasilan_ayah" required="" value="<?php echo $s->siswa_penghasilan_ayah ?>" placeholder="Masukan Penghasilan"></td>
  		    </tr>


  		    <tr>
  				<td>Nama Ibu</td>
  				<td><input type="text" class="form-control" name="nama_ibu" required="" value="<?php echo $s->siswa_nama_ibu; ?>" placeholder="Masukan Nama Ibu Siswa"></td>
          </tr>

          
          <tr>
  				<td>Pendidikan</td>
  				<td><select class="form-control" name="pendidikan_ibu" id="pendidikan_ibu">
                    <option value="<?php echo $s->siswa_pendidikan_ibu ?>"><?php echo $s->siswa_pendidikan_ibu ?></option>
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
  				<td><input type="text" class="form-control" name="pekerjaan_ibu" required="" value="<?php echo $s->siswa_pekerjaan_ibu; ?>" placeholder="Masukan Pekerjaan Ibu "></td>
          </tr>
          
          <tr>
  				<td>Peghasilan</td>
  				<td><input type="text" class="form-control" name="penghasilan_ibu" required="" value="<?php echo $s->siswa_pekerjaan_ibu; ?>" placeholder="Masukan Penghasilan "></td>
  		    </tr>
          <tr>
  				<td>Foto</td>
  				<td><input type="file" class="form-control" name="filefoto"  value="<?php echo $s->siswa_photo; ?>" ></td>
          </tr>
          <tr>
      <td></td>
      <td><img src="<?php echo base_url(). 'assets/images/'?><?php echo $s->siswa_photo;?>" alt="" width="100"></td>
      </tr>
     
  		      		    </table>
    </section>
    <table class="table col-lg-12">
    <tr>
  				<td><input type="submit" class="btn btn-success" value="Simpan">
                <button class="btn btn-danger" value=""><a href="<?php echo base_url().'admin/siswa' ?>" style="color:white">Batal</a></button></td>
  		    </tr>
    <?php } ?>
    </table>
  	</form>


  
    <!-- right col -->
  </div>
  <!-- /.row (main row) -->

</section>
<!-- /.content -->
</div>


