<!--Counter Inbox-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Siswa Kelas 8
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
            <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#TambahModal"><span class="fa fa-plus"></span> Add Kelas</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered data table-striped w3-table-all w3-hoverable" style="font-size:13px;">
                <thead>
                <tr>
                            <th>NO. </th>
          					<th>NIS</th>
                              <th>NISN</th>
          					<th>Nama</th>
                              <th>L/P</th>
          					<th>Kelas 7</th>
                    <th>Tahun Ajaran</th>
                    <th>Kelas 8</th>
                    <th>Tahun Ajaran</th>
                    
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
          				<?php
          					$no=1;
          					foreach ($kelas8->result_array() as $i) :
                      
                       $kelas_id=$i['kelas_id'];
                        $nis=$i['nis'];
                       $nisn=$i['siswa_nisn'];
                       $nama=$i['siswa_nama'];
                       $jekel = $i['siswa_jenkel'];
                       $kelas7=$i['kls7'];
                          $tahun7=$i['tp7'];
                        $kls8=$i['kls8'];
                        $tp8 = $i['tp8'];
                    ?>
                <tr>
                <td><?php echo $no++ ?></td>
                    <td><?php echo $nis;?></td>
                    <td><?php echo $nisn; ?></td>
                   <td><?php echo $nama; ?></td>
                  <td><?php echo $jekel; ?></td>
        		 <td><?php echo $kelas7;?></td>
                  <td><?php echo $tahun7;?></td> 
                  <td><?php echo $kls8; ?></td>
                  <td><?php echo $tp8;?></td>             
                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $kelas_id;?>"><span class="fa fa-pencil"></span></a>
                        <span data-toggle="tooltip"
                    data-original-title="Delete data" 
                    style="font-size:10";>
                    <a href="<?php echo base_url('admin/kelas8/delete/'.$kelas_id); ?>"
                    class="btn " onclick="return confirm('Hapus  <?php echo $nama; ?> ?')">
                    <i class="fa fa-trash-o"></i></a></span>
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
<div id="TambahModal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
				aria-hidden="true">&times; </button>
				<h4 class="modal-title">Tambah Data</h4>
			 </div>
			 <div class="modal-body">
			 	<form action="<?php echo base_url() ?>admin/kelas8/tambah_aksi" method="POST">
				 <!-- <div class="form-group">
                  <label>Id Kelas</label>
                  <input type="number" class="form-control nis" name="kelas_id"  placeholder=" Kode Kelas" >
                </div> -->
                
                <div class="form-group">
                  <label>NIS</label>
                  <select class="form-control" name="nis" id="nis" required="">
                    <option value="">Pilih</option>
                    <?php foreach($siswa->result_array() as $data) {
                        $nis = $data['siswa_nis'];
                        $nama = $data['siswa_nama'];
                         
                        ?>
                    <option value="<?php echo $nis;?>"> <?php echo $nis;?> - <?php echo $nama; ?>
                                </option>
                    <?php } ?>
                    </select>
                </div>
                
                
                <div class="form-group">
                  <label>Kelas</label>
                  <input type="text" class="form-control nis" name="kelas_tingkat"  placeholder="  Kelas" >
                </div>
                <div class="form-group">
                  <label>Tahun</label>
                  <input type="text" class="form-control nis" name="tahun_pelajaran"  placeholder=" Tahun Pelajaran" >
                </div>
			 </div>
			 <div  class="modal-footer">
			 	<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
			 		Batal	
			 	</button>
			 	<input type="submit" class="btn btn-primary"value="simpan" >

			 </div>
			 </form>
	</div>
	</div>
</div>

<!--Modal Edit Album-->
<?php foreach($kls as $k) {?>

<div class="modal fade" id="ModalEdit<?php echo $k->kelas_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
				aria-hidden="true">&times; </button>
				<h4 class="modal-title">Tambah Data</h4>
			 </div>
			 <div class="modal-body">
			 	<form action="<?php echo base_url() ?>admin/kelas8/update_siswa" method="POST">
				 <div class="form-group">
                  <label>Id Kelas</label>
                  <input type="number" class="form-control nis" name="kelas_id"  value="<?php echo $k->kelas_id; ?>" placeholder=" Kode Kelas" readonly>
                </div>
                
                <div class="form-group">
                  <label>NIS</label>
                  <select class="form-control" name="nis" id="nis"  readonly>
                    <option value=""><?php echo $k->nis;?></option>
                    <?php foreach($siswa->result_array() as $data) {
                        $nis = $data['siswa_nis'];
                        $nama = $data['siswa_nama'];             
                        ?>
                    <option value="<?php echo $nis;?>"> <?php echo $nis;?> - <?php echo $nama; ?>
                                </option>
                    <?php } ?>
                    </select>
                </div>             
                <div class="form-group">
                  <label>Kelas</label>
                  <input type="text" class="form-control nis" name="kelas_tingkat"  placeholder=" Kelas" value="<?php echo $k->kelas_tingkat; ?>" >
                </div>
                <div class="form-group">
                  <label>Tahun</label>
                  <input type="text" class="form-control nis" name="tahun_pelajaran"  placeholder=" Tahun Pelajaran" value="<?php echo $k->tahun_pelajaran; ?>" >
                </div>
			 </div>
			 <div  class="modal-footer">
			 	<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">
			 		Batal	
			 	</button>
			 	<input type="submit" class="btn btn-primary"value="simpan" >

			 </div>
			 </form>
	</div>
	</div>
</div>
                                    <?php  } ?>
<!--Modal Edit Album-->