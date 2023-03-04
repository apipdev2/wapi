<main id="main" class="main">

    <div class="pagetitle">
      <h1><?= $title; ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('Dashboard'); ?>">Home</a></li>
          <li class="breadcrumb-item"><?= $title; ?></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-header bg-success">
              <a href="#" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#add"><i class="fas fa-users"></i> Tambah</a>
            </div>
            <div class="card-body">
              
		            <div class="table-responsive">
                       <table id="example" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Level</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $no =1; foreach ($user as $u): ?>
                               
                                <tr>
                                    <td><?= $no++; ?></td>
                                    <td>
                                      <img src="<?= base_url('assets/images/'.$u->image); ?>" alt="image" width="80">
                                    </td>
                                    <td><?= $u->nama; ?></td>
                                    <td><?= $u->email; ?></td>
                                    <?php if ($u->id_level == '1'): ?>
                                      <td><span class="badge text-bg-primary"><?= $u->nama_level;?></span></td>
                                    <?php else: ?>
                                      <td><span class="badge text-bg-success"><?= $u->nama_level;?></span></td>
                                    <?php endif ?>
                                    
                                    <td>
                                      <a href="#" data-bs-toggle="modal" data-bs-target="#key" class="fas fa-key text-warning"></a>
                                      <a href="#" data-bs-toggle="modal" data-bs-target="#edit<?= $u->id_user; ?>" class="fas fa-edit text-info"></a>
                                      <a href="<?= base_url('Koordinator/delete/'.encrypt_url($u->id_user)); ?>" class="fas fa-trash text-danger"></a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>

		        
          </div>

        </div>
      </div>
    </section>


<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
    <form action="" method="post" enctype="multipart/form-data">

      <div class="modal-header bg-success text-light">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control">
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control">
          </div>

          <div class="form-group">
            <label>Password</label>
            <input type="text" name="password" class="form-control">
          </div>

          <div class="form-group">
            <label>Level</label>
            <select name="id_level" class="form-select">
              <option value="" selected disabled>::Pilih Level::</option>
              <?php foreach ($level as $lvl): ?>
                <option value="<?= $lvl->id_level; ?>"><?= $lvl->nama_level; ?></option>
              <?php endforeach ?>
            </select>
          </div>

          <div class="form-group">
            <label>Foto</label>
            <input type="file" name="image" class="form-control">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Simpan</button>
      </div>
        </form>
    </div>
  </div>
</div>

<?php foreach ($user as $u): ?>
  
  <!-- Modal -->
<div class="modal fade" id="edit<?= $u->id_user;?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    
    <form action="<?= base_url('Koordinator/edit/'.encrypt_url($u->id_user)); ?>" method="post" enctype="multipart/form-data">

      <div class="modal-header bg-success text-light">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Ubah Data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

          <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= $u->nama;?>">
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?= $u->email;?>">
          </div>          

          <div class="form-group">
            <label>Level</label>
            <select name="id_level" class="form-select">
              <?php foreach ($level as $lvl): ?>
                <?php if ($u->id_level == $lvl->id_level): ?>
                  <option value="<?= $lvl->id_level; ?>" selected><?= $lvl->nama_level; ?></option>
                <?php else: ?>
                  <option value="<?= $lvl->id_level; ?>"><?= $lvl->nama_level; ?></option>
                <?php endif ?>
              <?php endforeach ?>
            </select>
          </div>

          <div class="form-group">
            <img src="<?= base_url('assets/images/'.$u->image); ?>" alt="image" width="100" class="m-2">
            <input type="file" name="image" class="form-control">
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-success">Ubah</button>
      </div>
        </form>
    </div>
  </div>
</div>

<?php endforeach ?>

  </main><!-- End #main -->


 <script>

     $(document).ready(function () {
      $('#example').DataTable();
    });


 </script>