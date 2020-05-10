<!--Counter Inbox-->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Wali Kelas
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Wali Kelas</li>
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
          					<th>Kode Walas</th>
                     <th>NIP </th>
          					<th>Nama</th>
          					<th>Kelas</th>
                    <th>Tahun Ajaran</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
          				<?php
          					$no=1;
          					foreach ($walas->result_array() as $i) :
                      
                       $kd_walas=$i['kw'];
                        $id_guru=$i['nip'];
                       $nama=$i['nama'];
                       $kls = $i['kelas'];
          				$tahun=$i['tahun_ajaran'];
                    ?>
                <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $kd_walas; ?></td>
                    <td><?php echo $id_guru; ?></td>
                   <td><?php echo $nama; ?></td>
                  <td><?php echo $kls; ?></td>
                  <td><?php echo $tahun;?></td>              
                  <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $kd_walas;?>"><span class="fa fa-pencil"></span></a>
                        <span data-toggle="tooltip"
                    data-original-title="Delete data" 
                    style="font-size:10";>
                    <a href="<?php echo base_url('admin/walas/delete/'.$kd_walas); ?>"
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
			 	<form action="<?php echo base_url() ?>admin/walas/tambah_aksi" method="POST">
				 <!-- <div class="form-group">
                  <label>Id walas</label>
                  <input type="number" class="form-control nis" name="kd_walas"  placeholder=" Kode Walas" >
                </div> -->
                
                <div class="form-group">
                  <label>NIP </label>
                  <select class="form-control" name="id_guru" id="id_guru" required="">
                    <option value="">Pilih</option>
                    <?php foreach($guru->result_array() as $data) {
                        $id = $data['guru_id'];
                        $nama = $data['guru_nama'];
                        
                        ?>
                    <option value="<?php echo $id;?>"> <?php echo $nama; ?>
                                </option>
                    <?php } ?>
                    </select>
                </div>
                      
                <div class="form-group">
                  <label>Kelas</label>
                  <select class="form-control" name="kelas_tingkat" id="kelas_tingkat" required="">
                    <option value="">Pilih</option>
                    <?php foreach($kls7->result_array() as $data) {
                        $id = $data['kelas_id'];
                        $kelas = $data['kelas_nama'];
                          ?>
                    <option value="<?php echo $kelas;?>"><?php echo $kelas; ?>
                                </option>
                    <?php } ?>
                    </select>
                </div>
                
                <!-- <div class="form-group">
                  <label>Kelas</label>
                  <input type="text" class="form-control nis" name="kelas_tingkat"  placeholder="  Kelas" >
                </div> -->
               

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
<?php foreach($wls as $w) {?>

<div class="modal fade" id="ModalEdit<?php echo $w->kd_walas;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
				aria-hidden="true">&times; </button>
				<h4 class="modal-title">Ubah Data</h4>
			 </div>
			 <div class="modal-body">
			 	<form action="<?php echo base_url() ?>admin/walas/update_walas" method="POST">
				 <div class="form-group">
                  <label>Id Walas</label>
                  <input type="number" class="form-control nis" name="kd_walas"  value="<?php echo $w->kd_walas; ?>" placeholder=" Kode Kelas"
                  readonly >
                </div>
                
                <div class="form-group">
                  <label>Nama </label>
                  <select class="form-control" name="id_guru" id="id_guru" required="">
                    <!-- <option value=""><?php echo $w->id_guru; ?></option> -->
                    <?php foreach($guru->result_array() as $data) {
                        $id = $data['guru_id'];
                        $nama = $data['guru_nama'];
                        ?>
                    <option value="<?php echo $id;?>"> <?php echo $nama; ?>
                                </option>
                    <?php } ?>
                    </select>
                </div>            
                <div class="form-group">
                  <label>Kelas</label>
                  <select class="form-control" name="kd_kelas" id="kd_kelas" required="">
                   
                    <?php foreach($kls7->result_array() as $data) {
                        $id = $data['kelas_id'];
                        $kelas = $data['kelas_nama'];
                          ?>
                    <option value="<?php echo $kelas;?>"><?php echo $kelas; ?>
                                </option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                  <label>Tahun</label>
                  <input type="text" class="form-control nis" name="tahun_ajaran"  placeholder=" Tahun Pelajaran" 
                  value="<?php echo $w->tahun_ajaran; ?>" >
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
                                    <?php  } ?> -->
<!--Modal Edit Album