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
                	
                	<table  id="example1" class="table table-striped">
                		<thead>
                			<tr>
                				<th>#</th>
                				<th>Nama</th>
                				<th>Nomor</th>
                			</tr>
                		</thead>
                		<tbody>
                			<?php foreach ($group as $row): ?>
                			<tr>
                				<td>
                					<input type="checkbox" name="group[]" value="<?= $row->group_id;?>">
                				</td>
                				<td><?= $row->nama_group;?></td>
                				<td><?= $row->group_id;?></td>
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
                		<label for="image" class="form-label">files</label>
                        <img class="img-preview img-fluid mb-3 col-sm-4" alt="">
                        <input type="file" class="form-control" id="image" name="files" onchange="previewImage()">
                	</div>
                	<div class="form-group">
                		<label>Pesan</label>
                    	<textarea name="message" class="form-control mt-3"></textarea>
                    	 <?= form_error('message', '<small class="text-danger pl-3">', '</small>'); ?>
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

 <script>


    function previewImage(){
        const image = document.querySelector('#image');
        const imagePreview = document.querySelector('.img-preview');

        imagePreview.style.display='block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);
        oFReader.onload = function(oFREvent){
            imagePreview.src = oFREvent.target.result;
        }
    }
</script>