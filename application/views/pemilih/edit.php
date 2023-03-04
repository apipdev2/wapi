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
		                    <input type="number" name="nik" class="form-control <?php if (form_error('nik')): ?> is-invalid <?php endif ?>" value="<?= $pemilih->nik; ?>">
		                    <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
		                </div>

		                <div class="form-group">
		                    <label for="provinsi">Nama</label>
		                    <input type="text" name="nama" class="form-control <?php if (form_error('nama')): ?> is-invalid <?php endif ?>" value="<?= $pemilih->nama; ?>">
		                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
		                </div>

		                <div class="form-group">
		                    <label for="provinsi">Tempat Lahir</label>
		                    <input type="text" name="tempat_lahir" class="form-control <?php if (form_error('tempat_lahir')): ?> is-invalid <?php endif ?>" value="<?= $pemilih->tempat_lahir; ?>">
		                    <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
		                </div>

		                <div class="form-group">
		                    <label for="provinsi">Tanggal Lahir</label>
		                    <input type="date" name="tanggal_lahir" class="form-control <?php if (form_error('tanggal_lahir')): ?> is-invalid <?php endif ?>" value="<?= $pemilih->tanggal_lahir; ?>">
		                    <?= form_error('tanggal_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
		                </div>

                        <div class="form-group">
                            <label for="provinsi">Jenis Kelamin</label>
                            <select name="jk" class="form-select <?php if (form_error('jk')): ?> is-invalid <?php endif ?>" value="<?= set_value('jk'); ?>">
                                <?php foreach ($jk as $jk): ?>
                                    <?php if ($jk == $pemilih->jk): ?>
                                    <option value="<?= $jk; ?>" selected><?= $jk; ?></option>                                    
                                    <?php else: ?>
                                    <option value="<?= $jk; ?>"><?= $jk; ?></option>     
                                    <?php endif ?>
                                <?php endforeach ?>
                            </select>
                            <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

		                <div class="form-group">
		                    <label for="provinsi">Alamat</label>
		                    <input type="text" name="alamat" class="form-control <?php if (form_error('alamat')): ?> is-invalid <?php endif ?>" value="<?= $pemilih->alamat; ?>">
		                    <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>'); ?>
		                </div>
		                <div class="form-group">
		                    <label for="provinsi">RT</label>
		                    <input type="text" name="rt" class="form-control <?php if (form_error('rt')): ?> is-invalid <?php endif ?>" value="<?= $pemilih->rt; ?>">
		                    <?= form_error('rt', '<small class="text-danger pl-3">', '</small>'); ?>
		                </div>
		                <div class="form-group">
		                    <label for="provinsi">RW</label>
		                    <input type="text" name="rw" class="form-control <?php if (form_error('rw')): ?> is-invalid <?php endif ?>" value="<?= $pemilih->rw; ?>">
		                    <?= form_error('rw', '<small class="text-danger pl-3">', '</small>'); ?>
		                </div>

		                <div class="form-group">
		                    <label for="provinsi">Provinsi</label>
		                    <select id="provinsi" name="provinsi" class="form-control select2">
                                <?php foreach ($provinsi as $prov): ?>
                                <?php if ($prov->id_prov == $pemilih->id_provinsi): ?>
                                     <option value="<?= $prov->id_prov;?>" selected><?= $prov->nama;?></option>
                                <?php else :?>
                                    
                                <?php endif ?>   
                                <?php endforeach ?>
		                        
		                    </select>
		                </div>
		                <div class="form-group">
		                    <label for="kabupaten">Kabupaten</label>
		                    <select id="kabupaten" name="kabupaten" class="form-control select2">
		                    <?php foreach ($kabupaten as $kab): ?>
                                <?php if ($kab->id_kab == $pemilih->id_kabupaten): ?>
                                     <option value="<?= $kab->id_kab;?>" selected><?= $kab->nama;?></option> 
                                <?php else :?>
                                    
                                 
                                <?php endif ?>   
                            <?php endforeach ?>
		                    </select>
		                </div>
		                <div class="form-group">
		                    <label for="kecamatan">Kecamatan</label>
		                    <select id="kecamatan" name="kecamatan" class="form-control select2">
		                    <?php foreach ($kecamatan as $kec): ?>
                                <?php if ($kec->id_kec == $pemilih->id_kecamatan): ?>
                                     <option value="<?= $kec->id_kec;?>" selected><?= $kec->nama;?></option>  
                                <?php else :?>
                                
                                <?php endif ?>   
                            <?php endforeach ?>
		                    </select>
		                </div>
		                <div class="form-group">
		                    <label for="kelurahan">Kelurahan</label>
		                    <select id="kelurahan" name="kelurahan" class="form-control select2">
		                      <?php foreach ($kelurahan as $kel): ?>
                                <?php if ($kel->id_kel == $pemilih->id_kelurahan): ?>
                                     <option value="<?= $kel->id_kel;?>" selected><?= $kel->nama;?></option>
                                <?php else :?>
                                    
                                <?php endif ?>   
                            <?php endforeach ?>
		                    </select>
		                </div>
                        <div class="form-group">
                            <label for="kelurahan">No HP</label>
                            <input type="number" name="no_hp" class="form-control">
                        </div>

                        <div class="form-group">
                            <img src="<?= base_url('assets/images/'.$pemilih->ktp); ?>" alt="ktp" width="100">
                            <label for="kelurahan">Foto KTP</label>
                            <input type="file" name="ktp" class="form-control">
                        </div>

                        		                
		                <button type="submit" class="btn btn-primary mt-3 float-end"><i class="fas fa-save"></i> Simpan</button>

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


  