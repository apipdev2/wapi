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

              <!-- export all -->
            <div class="card">
                <div class="card-header bg-success text-light"><?= $title; ?></div>       
                <div class="card-body">
                    <form action="<?= base_url('Export/exall'); ?>" method="post">

                        <div class="mb-3 row">
                            <label  class="col-sm-2 col-form-label">Kabupaten</label>
                            <div class="col-sm-5">
                              <select name="id_kab" class="form-select">
                                <option value="" selected disabled>Pilih Kabupaten</option>
                                <?php foreach ($kabupaten as $kab): ?>
                                    <option value="<?= $kab->id_kab; ?>"><?= $kab->nama; ?></option>
                                <?php endforeach ?>
                              </select>
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-success"><i class="fas fa-upload"></i> Export</button>
                            </div>

                        </div>
                    </form>
                </div>
            
            
            </div>

               <!-- export kec -->
            <div class="card">
                <div class="card-header bg-success text-light"><?= $title; ?></div>       
                <div class="card-body">
                    <form action="<?= base_url('Export/exkec'); ?>" method="post">

                        <div class="mb-3 row">
                            <label  class="col-sm-2 col-form-label">Kecamatan</label>
                            <div class="col-sm-5">
                              <select name="id_kec" class="form-select">
                                <option value="" selected disabled>Pilih Kecamatan</option>
                                <?php foreach ($kecamatan as $kec): ?>
                                    <option value="<?= $kec->id_kec; ?>"><?= $kec->nama; ?></option>
                                <?php endforeach ?>
                              </select>
                            </div>
                            <div class="col-sm-2">
                                <button class="btn btn-success"><i class="fas fa-upload"></i> Export</button>
                            </div>

                        </div>
                    </form>
                </div>
            
            
            </div>

          <div class="card">
            <div class="card-header bg-success text-light">
            
            	<?= $title; ?>
            </div>
            
            <div class="card-body">
              <form action="<?= base_url('Export/exkel'); ?>" method="post">
                <div class="mb-3 row">
				    <label  class="col-sm-2 col-form-label">Kecamatan</label>
				    <div class="col-sm-5">
				      <select name="id_kec" id="kecamatan" class="form-select">
                        <option value="" selected disabled>Pilih Kecamatan</option>
				      	<?php foreach ($kecamatan as $kec): ?>
				      		<option value="<?= $kec->id_kec; ?>"><?= $kec->nama; ?></option>
				      	<?php endforeach ?>
				      </select>
				    </div>
				</div>

				<div class="mb-3 row">
				    <label  class="col-sm-2 col-form-label">Kelurahan</label>
				    <div class="col-sm-5">
				      <select name="id_kel" id="kelurahan" class="form-select">
				      	<option value=""></option>
				      </select>
				    </div>
                     <div class="col-sm-2">
                        <button class="btn btn-success"><i class="fas fa-upload"></i> Export</button>
                    </div>
				</div>
                </form>
		    </div>      

		        
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->

  <script>
  	

 
        // Kelurahan
        $("#kecamatan").change(function() {
            var id_kac = $("#kecamatan").val();
            $("#kelurahan").select2({
                ajax: {
                    url: '<?= base_url() ?>Pemilih/getdatakel/' + id_kac,
                    type: "post",
                    dataType: 'json',
                    delay: 200,
                    data: function(params) {
                        return {
                            searchTerm: params.term
                        };
                    },
                    processResults: function(response) {
                        return {
                            results: response
                        };
                    },
                    cache: true
                }
            });
        });
  </script>


 