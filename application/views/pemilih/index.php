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
            <a href="<?= base_url('Pemilih/add'); ?>" class="btn btn-outline-light mb-2"><i class="fas fa-users"></i> Tambah Data</a>
                            
            </div>
            <div class="card-body">
                <div class="row">
                    <!-- relawan -->
                    <?php if ($this->session->userdata('id_level') == '1'): ?>
                        <div class="col-md-2">
                            <select id="relawan" name="relawan" class="form-select select2">
                                <option value="" selected disabled> ::Pilih Relawan::</option>
                                <option value="">Semua</option>
                                <?php foreach ($relawan as $rel): ?>
                                  <option value="<?= $rel->id_user; ?>"><?= $rel->nama; ?></option>  
                                <?php endforeach ?>
                            </select>
                        </div>
                    <?php else: ?>
                        <input type="hidden" name="relawan" id="relawan" value="<?= $this->session->userdata('id_user');?>">
                    <?php endif ?>
                    

                    <div class="col-md-3">
                        <select id="kabupaten" name="kabupaten" class="form-select select2">
                            <option value="" selected> ==Pilih Kabupaten==</option>
                            <?php foreach ($kabupaten as $kab): ?>
                              <option value="<?= $kab->id_kab; ?>"><?= $kab->nama; ?></option>  
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select id="kecamatan" name="kecamatan" class="form-select select2">
                            <option value="" selected> ==Pilih kecamatan==</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select id="kelurahan" name="kelurahan" class="form-select select2">
                            <option value="" selected> ==Pilih kelurahan==</option>
                        </select>
                    </div>
                    <div class="col-md-1">
                        <button class="btn btn-success" id="cari"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <hr>
                
            </div>
            <div class="card-body">
              
		            <div class="table-responsive">
                       <table id="example1" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIK</th>
                                    <th>Nama</th>
                                    <th>Tempat Lahir</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Alamat</th>
                                    <th>Rt/Rw</th>
                                    <th>Kecamatan</th>
                                    <th>Kel/Desa</th>
                                    <th>#</th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
                            </tbody>
                        </table>
                    </div>

		        
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


 <script>
     $(document).ready(function () {
     $('#example1').DataTable();
})
 </script>
 <script type="text/javascript">
        
 
 
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


        function view(){
            var relawan = $('#relawan').val();
            var kabupaten = $('#kabupaten').val();
            var kecamatan = $('#kecamatan').val();
            var kelurahan = $('#kelurahan').val();

            $.ajax({
                url: '<?= base_url() ?>Pemilih/view',
                type: "post",
                data : {
                    relawan:relawan,
                    kabupaten:kabupaten,
                    kecamatan:kecamatan,
                    kelurahan:kelurahan
                },
                success:function(data){
                    $('.table-body').html(data);
                }
            });
        }

        // view();

        $('#cari').on('click',function(){
            var relawan = $('#relawan').val();
            var kabupaten = $('#kabupaten').val();
            var kecamatan = $('#kecamatan').val();
            var kelurahan = $('#kelurahan').val();
            
            $.ajax({
                url: '<?= base_url() ?>Pemilih/view',
                type: "post",
                data : {relawan:relawan,kabupaten:kabupaten,kecamatan:kecamatan,kelurahan:kelurahan},
                success:function(data){
                    $('.table-responsive').html(data);
                    $('#example1').DataTable();
                }
            });
        });


      
    </script>