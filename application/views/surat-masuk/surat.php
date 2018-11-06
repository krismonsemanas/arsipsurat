<div class="animated fadeIn">
    <div class="row">
	    <div class="col-md-12">
	        <div class="card">
	            <div class="card-header">
	                <strong class="card-title"><?=$subJudul?></strong>
	                <span class="float-right">
	                	<?php if($key != null){
	                		?>
	                		<a href="<?=base_url()?>surat/tambah/<?=$key?>" class="btn btn-info btn-sm">Tambah</a>
	                	<a href="<?=base_url()?>surat/tampil/<?=$key?>" class="btn btn-warning btn-sm"><i class="fa fa-refresh"></i></a>
	                		<?php
	                	} ?>
	                </span>
	            </div>
	            <div class="card-body">
	      			<table id="tabel" class="table table-striped table-bordered">
	        			<thead class="text-center">
				          <tr>
				          	<th>No</th>
				            <th>No Surat</th>
				            <th>Hal</th>
				            <th>Lampiran</th>
				            <th>Tujuan</th>
				            <th>Jenis Surat</th>
				            <th>Keterangan</th>
				            <th>Tanggal</th>
				            <th><i class="fa fa-cog"></i></th>
				          </tr>
	        			</thead>
	        			<tbody>
							<?php
								$no = 1;
								foreach ($data as $s => $rows) {
									?>
										<tr>
											<td><?=$no++?>.</td>
											<td><?=$rows['no_surat']?></td>
											<td><?=$rows['hal']?></td>
											<td><?=$rows['lampiran']?></td>
											<td><?=$rows['tujuan']?></td>
											<td><?=$rows['jenis_surat']?></td>
											<td><?=$rows['keterangan']?></td>
											<td><?=ind_for(date($rows['tanggal']))?></td>
											<td>
												<a href="<?=base_url()?>surat/edit/<?=$rows['id_surat']?>" class="btn btn-info btn-sm"> <i class="fa fa-edit"></i></a>
												<a href="<?=base_url()?>surat/hapus/<?=$rows['id_surat']?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin untuk menghapus');"><i class="fa fa-trash-o"></i></a>
											</td>
										</tr>
									<?php
								}
							?>
	        			</tbody>
	      			</table>
	            </div>
	        </div>
	    </div>
	</div>
</div><!-- .animated -->
<?php 
	function ind_for($tgl){
        $bulan = array(
            1 => 'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember'
            );
            $pecah = explode('-', $tgl);
            return $pecah[2].' '.$bulan[(int)$pecah[1]].' '.$pecah[0];
        }
?>