
<html>
<head>
	<style type="text/css">
		/* Table */
		body {
			font-family: "lucida Sans Unicode", "Lucida Grande", "Segoe UI", vardana
		}
		.demo-table {
			border-collapse: collapse;
			font-size: 13px;
			border:1px solid #000;
		}
		th,td{
			font-size: 13px;
			border:1px solid #000;
		}
		
	</style>
</head>
<body>
	<h2>Data Pendukung</h2>
	<p>Total : <?= $total;?></p>
	<table class="demo-table" width="100%">
		<thead>
			<tr>
                <th>No</th>
                <th>NIK</th>
                <th>Nama</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>Rt/Rw</th>
                <th>Kel/Desa</th>
                <th>Kecamatan</th>
                <th>Kabupaten</th>
                <th>Provinsi</th>
            </tr>
		</thead>	 
<?php
// header("Content-type: application/vnd-ms-excel");
// header("Content-Disposition: attachment; filename=Data Pendukung.xls");
?>
		<tbody>
			<?php $no=1; foreach ($pemilih as $p): ?>
		    <tr>
		        <td><?= $no++;?></td>
		        <td>'<?= $p->nik;?></td>
		        <td><?= $p->nama_pemilih;?></td>
		        <td><?= $p->tempat_lahir;?></td>
		        <td><?= shortdate_indo($p->tanggal_lahir);?></td>
		        <td><?= $p->alamat;?></td>
		        <td>'<?= $p->rt.'/'.$p->rw;?></td>
		        <td><?= $p->nama_kel;?></td>
		        <td><?= $p->nama_kec;?></td>
		        <td><?= $p->nama_kab;?></td>
		        <td><?= $p->nama_prov;?></td>
		        
		    </tr>
		<?php endforeach ?>
		</tbody>

		
	</table>
</body>
</html>
