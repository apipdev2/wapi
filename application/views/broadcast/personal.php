<main id="main" class="main">

    <div class="pagetitle">
      <h1><?= $title; ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><?= $title; ?></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
     <form action="" method="post" enctype="multipart/form-data">
      <div class="row">
          
          <?= $this->session->flashdata('message'); ?>
         <!-- Sales Card -->
            <div class="col-md-7">
              <div class="card">  
              <div class="card-header bg-primary text-light">
              	<i class="fas fa-book"></i>&nbsp; Kontak
              </div>            	
                <div class="card-body">
                	<div class="btn-group mb-1">
                	<a href="#" class="btn btn-primary btn-sm"><i class="fas fa-user-plus"></i> Tambah Kontak</a>
                	<a href="#" class="btn btn-success btn-sm"><i class="fas fa-download"></i> Import Kontak</a>
                		
                	</div>
                	<table  id="example1" class="table table-striped">
                		<thead>
                			<tr>
                				<th>#</th>
                				<th>Nama</th>
                				<th>Nomor</th>
                			</tr>
                		</thead>
                		<tbody>
                			<?php foreach ($kontak as $row): ?>
                			<tr>
                				<td>
                					<input type="checkbox" name="kontak[]" value="<?= $row->number;?>">
                				</td>
                				<td><?= $row->nama;?></td>
                				<td><?= $row->number;?></td>
                			</tr>
                			<?php endforeach ?>
                		</tbody>
                	</table>
                	
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Sales Card -->
            <div class="col-md-5">

              <div class="card">
                <div class="card-header bg-primary text-light">
                  <i class="fas fa-paper-plane"></i>&nbsp; Pesan
                </div>
                <div class="card-body">
                	<div class="form-group">
                		<label>File</label>
                		<input type="file" name="files" class="form-control">
                	</div>
                	<div class="form-group">
                		<label>Pesan</label>
                    	<textarea name="message" class="form-control mt-3"></textarea>
                	</div>
                	<button class="btn btn-success mt-2 float-end"><i class="fas fa-paper-plane"></i>Send</button>

                </div>

              </div>

            </div><!-- End Sales Card -->

      </div>

    </form>
    </section>

     

  </main><!-- End #main -->




 <script>
     $(document).ready(function () {
     $('#example1').DataTable();
})
 </script>