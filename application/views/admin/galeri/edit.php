<link rel="icon" href="<?php echo base_url().'assets/image/logo_malang.png';?>">  
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Data Galeri</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col">
            
          <div class ="card">
                    <div class="card-header">
                        Form Edit Data Galeri
                    </div>
                    <div class ="card-body">
                    <?php if (validation_errors()): ?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors(); ?>
                    </div>
                    <?php endif; ?>
                    <?php foreach($galeri as $glr):?>
                    <form action="" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id_galeri" value="<?= $glr->id_galeri;?>">
                    
                    <div class="form-group">
                            <label for="merk">Judul</label>
                            <input type="text" class="form-control" id="judul" name="judul"
                            value="<?=$glr->judul;?>">
                    </div>

                    <div class="form-group">
                            <label for="merk">Foto</label>
                            <input type="file" class="form-control" id="foto" name="foto"
                            value="<?=$glr->foto;?>">
                    </div>
                        <button type="submit" name="submit" class="btn btn-success ">Submit</button>
                        <a href="<?php echo base_url("Admin/galeri");?>" class="btn btn-info">Cancel</a>
                        </form>
                        <?php endforeach ?>
                        </div>
                    </div>
                </div>   
          </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->