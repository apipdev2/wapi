<main id="main" class="main">

    <div class="pagetitle">
      <h1><?= $title; ?></h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url('Dashboard'); ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url('Pemilih'); ?>">Data Pendukung</a></li>
          <li class="breadcrumb-item active"><?= $title; ?></li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-10 m-auto">

          <div class="card">
            <div class="card-body">
              
		            <form method="post" action="" enctype="multipart/form-data">
		            	<div class="form-group">
		                    <label for="provinsi">NIK</label>
		                    <input type="number" name="nik" class="form-control <?php if (form_error('nik')): ?> is-invalid <?php endif ?>" value="<?= set_value('nik'); ?>">
		                    <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
		                </div>

		                <div class="form-group">
		                    <label for="provinsi">Nama</label>
		                    <input type="text" name="nama" class="form-control <?php if (form_error('nama')): ?> is-invalid <?php endif ?>" value="<?= set_value('nama'); ?>">
		                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
		                </div>

		                <div class="form-group">
		                    <label for="provinsi">Tempat Lahir</label>
		                    <input type="text" name="tempat_lahir" class="form-control <?php if (form_error('tempat_lahir')): ?> is-invalid <?php endif ?>" value="<?= set_value('tempat_lahir'); ?>">
		                    <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
		                </div>

                         
		                <div class="form-group">
		                    <label for="provinsi">Tanggal Lahir</label>
		                    <input type="date" name="tanggal_lahir" class="form-control <?php if (form_error('tanggal_lahir')): ?> is-invalid <?php endif ?>" value="<?= set_value('tanggal_lahir'); ?>">
		                    <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
		                </div>

                        <div class="form-group">
                            <label for="provinsi">Jenis Kelamin</label>
                            <select name="jk" class="form-select <?php if (form_error('jk')): ?> is-invalid <?php endif ?>" value="<?= set_value('jk'); ?>">
                                <option value="" selected disabled>= Jenis Kelamin =</option>
                                <?php foreach ($jk as $jk): ?>
                                    <option value="<?= $jk; ?>"><?= $jk; ?></option>                                    
                                <?php endforeach ?>
                            </select>
                            <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

		                <div class="form-group">
		                    <label for="provinsi">Alamat</label>
		                    <input type="text" name="alamat" class="form-control <?php if (form_error('alamat')): ?> is-invalid <?php endif ?>" value="<?= set_value('alamat'); ?>">
		                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
		                </div>
		                <div class="form-group">
		                    <label for="provinsi">RT</label>
		                    <input type="text" name="rt" class="form-control <?php if (form_error('rt')): ?> is-invalid <?php endif ?>" value="<?= set_value('rt'); ?>">
		                    <?= form_error('rt', '<small class="text-danger pl-3">', '</small>'); ?>
		                </div>
		                <div class="form-group">
		                    <label for="provinsi">RW</label>
		                    <input type="text" name="rw" class="form-control <?php if (form_error('rw')): ?> is-invalid <?php endif ?>" value="<?= set_value('rw'); ?>">
		                    <?= form_error('rw', '<small class="text-danger pl-3">', '</small>'); ?>
		                </div>

		                <div class="form-group">
		                    <label for="provinsi">Provinsi</label>
		                    <select id="provinsi" name="provinsi" class="form-control select2">
		                        <option value="" selected> ==Pilih Provinsi==</option>
		                    </select>
		                </div>
		                <div class="form-group">
		                    <label for="kabupaten">Kabupaten</label>
		                    <select id="kabupaten" name="kabupaten" class="form-control select2">
		                        <option value="" selected> ==Pilih Kabupaten==</option>
		                    </select>
		                </div>
		                <div class="form-group">
		                    <label for="kecamatan">Kecamatan</label>
		                    <select id="kecamatan" name="kecamatan" class="form-control select2">
		                        <option value="" selected> ==Pilih kecamatan==</option>
		                    </select>
		                </div>
		                <div class="form-group">
		                    <label for="kelurahan">Kelurahan</label>
		                    <select id="kelurahan" name="kelurahan" class="form-control select2">
		                        <option value="" selected> ==Pilih kelurahan==</option>
		                    </select>
		                </div>
                         <div class="form-group">
                            <label for="kelurahan">No HP</label>
                            <input type="number" name="no_hp" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="kelurahan">Foto KTP</label>
                            <input type="file" name="ktp" class="form-control">
                        </div>

                       		                
		                <button type="submit" class="btn btn-primary mt-3 float-end">Simpan</button>

		            </form>
		        
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


  <script type="text/javascript">
        // Provinsi
        $(document).ready(function() {
            $("#provinsi").select2({
                ajax: {
                    url: '<?= base_url() ?>Pemilih/getdataprov',
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
 
        // Kabupaten
        $("#provinsi").change(function() {
            var id_prov = $("#provinsi").val();
            $("#kabupaten").select2({
                ajax: {
                    url: '<?= base_url() ?>Pemilih/getdatakab/' + id_prov,
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
 
        // Kecamatan
        $("#kabupaten").change(function() {
            var id_kab = $("#kabupaten").val();
            $("#kecamatan").select2({
                ajax: {
                    url: '<?= base_url() ?>Pemilih/getdatakec/' + id_kab,
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