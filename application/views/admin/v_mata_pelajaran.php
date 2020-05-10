<!--Counter Inbox-->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Mata Pelajaran
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Mata Pelajaran</li>
      </ol>
    </section>
    

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">

          <div class="box">
            <div class="box-header">
            <?php if($this->session->flashdata('success')){ ?>
            <div class="alert alert-success">
            <button type="button" class="close"
            data-dismiss="alert" aria-label="Close">
            <i class="fa fa-close"></i>
            </button>
            <span style="text-align:left;"><?php echo  $this->session->flashdata('success'); ?>
            </span></div>
            
            <?php } ?>
            <?php if($this->session->flashdata('error')){ ?>
            <div class="alert alert-error">
            <button type="button" class="close"
            data-dismiss="alert" aria-label="Close">
            <i class="fa fa-close"></i>
            </button>
            <span style="text-align:left;"><?php echo  $this->session->flashdata('error'); ?>
            </span></div>
            </div>
            <?php  }?>

          <div class="box">
            <div class="box-header">
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#TambahModal"><span class="fa fa-plus"></span> Add Mata Pelajaran</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
          					<th>No</th>
          					<th>Mata Pelajaran</th>
          					<th>KKM Pengetahuan</th>
                              <th>KKM Keterampilan</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php  
                $no=1;
                foreach($mata_pelajaran as $m) {?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $m->mata_pelajaran ?></td>
                  <td><?php echo $m->kkm_pengetahuan ?></td>
                  <td><?php echo $m->kkm_keterampilan?></td>

                  
                    <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $m->kd_pelajaran;?>"><span class="fa fa-pencil"></span></a>
                        <span data-toggle="tooltip"
                    data-original-title="Delete data" 
                    style="font-size:10";>
                    <a href="<?php echo base_url('admin/mata_pelajaran/delete/'.$m->kd_pelajaran); ?>"
                    class="btn " onclick="return confirm('Hapus Mata Pelajaran <?php echo $m->mata_pelajaran; ?> ?')">
                    <i class="fa fa-trash-o"></i></a></span>
                  </td>
                </tr>
                <?php } ?>
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
       <!-- <div class="box box-success box-solid">
            <div class="box-header with-border">
                <h3 class="box-title">INPUT DATA Mata Pelajaran</h3>
            </div> -->
			 	<form action="<?php echo base_url() ?>admin/mata_pelajaran/tambah_aksi" method="POST">
				 <div class="form-group">
                  <label>Mata Pelajaran</label>
                  <input type="text" class="form-control nis" name="mata_pelajaran"  placeholder=" Mata Pelajaran"  required="">
                </div>
                <div class="form-group">
                  <label>KKM Pengetahuan</label>
                  <input type="number" class="form-control nama_siswa"  name="kkm_pengetahuan" placeholder="KKM Pengetahuan" required="">
			 </div>
             <div class="form-group">
                  <label>KKM Keterampilan</label>
                  <input type="number" class="form-control nama_siswa"  name="kkm_keterampilan" placeholder="KKM Keterampilan" require="">
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
	<!-- </div> -->
</div>
</div>

<!--Modal Edit Album-->
<?php foreach($mata_pelajaran as $m) {?>

        <div class="modal fade" id="ModalEdit<?php echo $m->kd_pelajaran;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Mata Pelajaran</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/mata_pelajaran/update_mapel/'.$m->kd_pelajaran; ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $m->kd_pelajaran;?>"/>

                                <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kode Pelajaran</label>
                                        <div class="col-sm-7">
                                            <input type="number" name="kd_pelajaran" value="<?php echo $m->kd_pelajaran;?>" 
                                            class="form-control" id="inputUserName" placeholder="Kode Pelajaran" readonly>
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Mata Pelajaran</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="mapel" value="<?php echo $m->mata_pelajaran;?>" class="form-control" 
                                            id="inputUserName" placeholder="Mata Pelajaran" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">KKM Pengetahuan </label>
                                        <div class="col-sm-7">
                                            <input type="number" name="kkm_pengetahuan" value="<?php echo $m->kkm_pengetahuan;?>" 
                                            class="form-control" id="inputUserName" placeholder="KKM" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">KKM keterampilan </label>
                                        <div class="col-sm-7">
                                            <input type="number" name="kkm_keterampilan" value="<?php echo $m->kkm_keterampilan;?>" class="form-control" id="inputUserName" placeholder="Nama" required>
                                        </div>
                                    </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default btn-flat" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary btn-flat" id="simpan">Simpan</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
                                            <?php  } ?>
	<!--Modal Edit Album-->
