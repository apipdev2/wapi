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
            <div class="card-header bg-success text-light">
            
            	<table class="table">
		            <?php  if ($this->session->userdata('id_level')=='1'):?>
		            <tr>
		                
		                <td>
		                    <select id="relawan" name="relawan" class="select2">
		                        <option value="" selected disabled> ::Pilih Relawan::</option>
		                        <?php foreach ($relawan as $rel): ?>
		                          <option value="<?= $rel->id_user; ?>"><?= $rel->nama; ?></option>  
		                        <?php endforeach ?>
		                    </select>
		                </td>
                        <td>
                            <select id="relawan" name="relawan" class="select2">
                                <option value="" selected disabled> ::Pilih Relawan::</option>
                                <?php foreach ($relawan as $rel): ?>
                                  <option value="<?= $rel->id_user; ?>"><?= $rel->nama; ?></option>  
                                <?php endforeach ?>
                            </select>
                        </td>
                        <td>
                            <select id="relawan" name="relawan" class="select2">
                                <option value="" selected disabled> ::Pilih Relawan::</option>
                                <?php foreach ($relawan as $rel): ?>
                                  <option value="<?= $rel->id_user; ?>"><?= $rel->nama; ?></option>  
                                <?php endforeach ?>
                            </select>
                        </td>
		                <td>
		                	<button class="btn btn-light btn-sm" id="cari"><i class="fas fa-search"></i> Cari</button>
		                </td>
		            </tr>
		            <?php else: ?>
		                
		             <input type="hidden" name="relawan" id="relawan" value="<?= $this->session->userdata('id_user');?>">
		                   
		            <?php endif ?>            
		       
		        </table>
                            
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
        
 
 
       
        // view();

        $('#cari').on('click',function(){
            var relawan = $('#relawan').val();
            var kabupaten = $('#kabupaten').val();
            var kecamatan = $('#kecamatan').val();
            var kelurahan = $('#kelurahan').val();
            if(relawan == ''){
                alert('Silahkan Pilih Koordinator');
            }
            $.ajax({
                url: '<?= base_url() ?>Report_all/view',
                type: "post",
                data : {relawan:relawan},
                success:function(data){
                    $('.table-responsive').html(data);
                    $('#example1').DataTable();
                }
            });
        });

        

      
    </script>