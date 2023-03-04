<a href="<?= base_url('Report_all/export/'.encrypt_url($id_user)); ?>" class="btn btn-success mb-3 "><span class="fas fa-upload"></span> Export</a>

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
            </tr>
        </thead>
        <tbody class="table-body">
            
        <?php $no=1; foreach ($pemilih as $p): ?>
		    <tr>
		        <td><?= $no++;?></td>
		        <td><?= $p->nik;?></td>
		        <td><?= $p->nama_pemilih;?></td>
		        <td><?= $p->tempat_lahir;?></td>
		        <td><?= shortdate_indo($p->tanggal_lahir);?></td>
		        <td><?= $p->alamat;?></td>
		        <td><?= $p->rt.'/'.$p->rw;?></td>
		        <td><?= $p->nama_kec;?></td>
		        <td><?= $p->nama_kel;?></td>
		        
		    </tr>
		<?php endforeach ?>
	</tbody>
</table>
