<!--Counter Inbox-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Siswa
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Siswa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" href="siswa/siswa_tambah"><span class="fa fa-plus"></span> Add Siswa</a>
              <a class="btn btn-info btn-flat" href="Laporan" target="_blank"><span class="fa fa-print"></span> Cetak Laporan Siswa</a>
              
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered data table-striped w3-table-all w3-hoverable" style="font-size:13px;">
                <thead>
                <tr>
          					<th>Photo</th>
          					<th>NIS</th>
                    <th>NISN</th>
          					<th>Nama</th>
          					<th>Jenis Kelamin</th>
                    <th>Tahun Ajaran</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
          				<?php
          					$no=0;
          					foreach ($data->result_array() as $i) :
          					   $no++;
          					   $id=$i['siswa_id'];
                       $nis=$i['siswa_nis'];
                       $nisn=$i['siswa_nisn'];
          					   $nama=$i['siswa_nama'];
          					   $jenkel=$i['siswa_jenkel'];
          					   $kelas_id=$i['id_tahun_ajaran'];
                       $kelas_nama=$i['tahun_ajaran'];
                       $photo=$i['siswa_photo'];

                    ?>
                <tr>
                  <?php if(empty($photo)):?>
                  <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/user_blank.png';?>"></td>
                  <?php else:?>
                  <td><img width="40" height="40" class="img-circle" src="<?php echo base_url().'assets/images/'.$photo;?>"></td>
                  <?php endif;?>
                  <td><?php echo $nis;?></td>
                  <td><?php echo $nisn; ?></td>
        				  <td><?php echo $nama;?></td>
                  <?php if($jenkel=='L'):?>
                  <td>Laki-Laki</td>
                  <?php else:?>
                  <td>Perempuan</td>
                  <?php endif;?>
                  <td><?php echo $kelas_nama;?></td>
                  <td style="text-align:right;">
                  <span data-toggle="tooltip"
                    data-original-title="Edit data" 
                    style="font-size:10";>
                    <a href="<?php echo base_url().'admin/siswa/ubah_siswa/'.$nis; ?>"class="btn btn-warning btn-xs" >
                    <i class="fa fa-edit"></i></a></span>
                        <a class="btn btn-danger btn-xs" data-toggle="modal" data-target="#ModalHapus<?php echo $id;?>">
                        <span class="fa fa-trash"></span></a>
                        <span data-toggle="tooltip"
                    data-original-title="Cetak data" 
                    style="font-size:10";>
                    <a href="<?php echo base_url().'admin/siswa/cetak_siswa/'.$nis; ?>"class="btn btn-info btn-xs" >
                    <i class="fa fa-print"></i></a></span>
                  </td>
                </tr>
				<?php endforeach;?>
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
    <!--Modal Add Pengguna-->
  

	<?php foreach ($data->result_array() as $i) :
              $id=$i['siswa_id'];
              $nis=$i['siswa_nis'];
              $nisn=$i['siswa_nisn'];
              $nama=$i['siswa_nama'];
              $jenkel=$i['siswa_jenkel'];
              $kelas_id=$i['id_tahun_ajaran'];
              $kelas_nama=$i['tahun_ajaran'];
              $photo=$i['siswa_photo'];
            ?>
	<!--Modal Hapus Pengguna-->
        <div class="modal fade" id="ModalHapus<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Siswa</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/siswa/hapus_siswa'?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
							       <input type="hidden" name="kode" value="<?php echo $id;?>"/>
                     <input type="hidden" value="<?php echo $photo;?>" name="gambar">
                            <p>Apakah Anda yakin mau menghapus Siswa <b><?php echo $nama;?></b> ?</p>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
	<?php endforeach;?>
