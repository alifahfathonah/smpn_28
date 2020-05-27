<!--Counter Inbox-->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Kelas
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Kelas</li>
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
              <a class="btn btn-info btn-flat" data-toggle="modal" data-target="#TambahModal"><span class="fa fa-plus"></span> Add Kelas</a>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-striped table-bordered data display nowrap" style="font-size:13px;">
                <thead>
                <tr>
          					<th>No</th>
          					<th>Id Kelas</th>
          					<th>Nama</th>
                    <th style="text-align:right;">Aksi</th>
                </tr>
                </thead>
                <tbody>
                <?php  
                $no=1;
                foreach($kelas as $k) {?>
                <tr>
                  <td><?php echo $no++ ?></td>
                  <td><?php echo $k->kelas_id ?></td>
                  <td><?php echo $k->kelas_nama ?></td>

                  
                    <td style="text-align:right;">
                        <a class="btn btn-xs btn-warning" data-toggle="modal" 
                        data-target="#ModalEdit<?php echo $k->kelas_id;?>"><span class="fa fa-pencil"></span></a>
                        <span data-toggle="tooltip"
                    data-original-title="Delete data" 
                    style="font-size:10";>
                    <a href="<?php echo base_url('admin/kelas/delete/'.$k->kelas_id); ?>"
                    class="btn btn-danger btn-xs " onclick="return confirm('Hapus  <?php echo $k->kelas_nama; ?> ?')">
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
       
           
			 	<form action="<?php echo base_url() ?>admin/kelas/tambah_aksi" method="POST">
				 <div class="form-group">
                  <label>Kode Kelas</label>
                  <input type="number" class="form-control nis" name="kelas_id"  placeholder=" Kode Kelas" >
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <input type="text" class="form-control nama_siswa"  name="kelas_nama" placeholder="Nama Kelas">
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
</div>

<!--Modal Edit Album-->
<?php foreach($kls as $k) {?>

        <div class="modal fade" id="ModalEdit<?php echo $k->kelas_id;?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><span class="fa fa-close"></span></span></button>
                        <h4 class="modal-title" id="myModalLabel">Edit Kelas</h4>
                    </div>
                    <form class="form-horizontal" action="<?php echo base_url().'admin/kelas/update_siswa/'.$k->kelas_id; ?>" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                                <input type="hidden" name="kode" value="<?php echo $k->kelas_id;?>"/>
                               
                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Id Kelas</label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xid" value="<?php echo $k->kelas_id;?>" class="form-control" id="inputUserName" placeholder="NIP" required>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputUserName" class="col-sm-4 control-label">Kelas </label>
                                        <div class="col-sm-7">
                                            <input type="text" name="xkelas" value="<?php echo $k->kelas_nama;?>" class="form-control" id="inputUserName" placeholder="Nama" required>
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
  <script type="text/javascript">
    jQuery.noConflict();
    jQuery(document).ready(function($){
      $('.example1').DataTable(
        {
          "scrollX": true
        }
      );
  
    });
  </script>