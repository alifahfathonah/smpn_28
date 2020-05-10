<!--Counter Inbox-->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tahun Ajaran
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Tahun AJaran</li>
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
              <a class="btn btn-success btn-flat" data-toggle="modal" data-target="#TambahModal"><span class="fa fa-plus"></span> Add Tahun Ajaran</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped" style="font-size:13px;">
                <thead>
                <tr>
          					<th>No</th>
          					<th>Id Tahun Ajaran</th>
          					<th>Tahun Ajaran</th>

                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                $no=1;
                foreach($tahun as $t) {?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $t->id_tahun_ajaran ?></td>
                  <td><?php echo $t->tahun_ajaran ?></td>

                  
                    <td style="text-align:right;">
                        <a class="btn" data-toggle="modal" data-target="#ModalEdit<?php echo $t->id_tahun_ajaran;?>">
                        <span class="fa fa-pencil"></span></a>
                        <span data-toggle="tooltip"
                    data-original-title="Delete data" 
                    style="font-size:10";>
                    <a href="<?php echo base_url('admin/tahun_ajaran/delete/'.$t->id_tahun_ajaran); ?>"
                    class="btn " onclick="return confirm('Hapus  <?php echo $t->tahun_ajaran; ?> ?')">
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
			 	<form action="<?php echo base_url() ?>admin/tahun_ajaran/tambah_aksi" method="POST">
				 <div class="form-group">
                  <label>Kode Tahun</label>
                  <input type="number" class="form-control nis" name="id_tahun"  placeholder=" Kode Tahun" >
                </div>
                <div class="form-group">
                  <label>Tahun </label>
                  <input type="text" class="form-control nama_siswa"  name="tahun_ajaran" placeholder="Tahun Ajaran">

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
<?php foreach($tahun as $t) {?>

        <div class="modal fade" id="ModalEdit<?php echo $t->id_tahun_ajaran;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Kelas</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/tahun_ajaran/update_siswa/'.$t->id_tahun_ajaran; ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $t->id_tahun_ajaran;?>"/>
                               
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Id Tahun</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xid" value="<?php echo $t->id_tahun_ajaran;?>" class="form-control" id="inputUserName" placeholder="Id Tahun Ajaran" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kelas </label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xkelas" value="<?php echo $t->tahun_ajaran;?>" class="form-control" id="inputUserName" placeholder="Tahun Ajaran" required>
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
