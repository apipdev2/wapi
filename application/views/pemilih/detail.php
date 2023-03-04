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
      	<div class="col-md-3">
      		<img src="<?= base_url('assets/images/'.$pemilih->ktp); ?>" alt="" width="200">
      	</div>

        <div class="col-lg-9">

          <div class="card">
          	<div class="card-header bg-success text-light">
          		<?= $title;?>
          	</div>
            <div class="card-body">
              
              <table class="table">
              	<tr>
              		<th>NIK</th><td>:</td><td><?= $pemilih->nik;?></td>
              	</tr>
              	<tr>
              		<th>Nama</th><td>:</td><td><?= $pemilih->nama_pemilih;?></td>
              	</tr>
              	<tr>
              		<th>Tempat, Tanggal Lahir</th><td>:</td><td><?= $pemilih->tempat_lahir.', '.shortdate_indo($pemilih->tanggal_lahir);?></td>
              	</tr>
              	<tr>
              		<th>Jenis Kelamin</th><td>:</td><td><?= $pemilih->jk;?></td>
              	</tr>
              	<tr>
              		<th>Alamat</th><td>:</td><td><?= $pemilih->alamat;?></td>
              	</tr>
              	<tr>
              		<th>RT/RW</th><td>:</td><td><?= $pemilih->rt.'/'.$pemilih->rw;?></td>
              	</tr>
              	<tr>
              		<th>Kelurahan</th><td>:</td><td><?= $pemilih->nama_kel;?></td>
              	</tr>
              	<tr>
              		<th>Kecamatan</th><td>:</td><td><?= $pemilih->nama_kec;?></td>
              	</tr>
              	<tr>
              		<th>Kabupaten</th><td>:</td><td><?= $pemilih->nama_kab;?></td>
              	</tr>
              	<tr>
              		<th>Provinsi</th><td>:</td><td><?= $pemilih->nama_prov;?></td>
              	</tr>
              </table>
		        
          </div>

        </div>

        

      </div>
    </section>

  </main><!-- End #main -->

