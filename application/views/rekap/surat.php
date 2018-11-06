<div class="animated fadeIn">
    <div class="row">
    	<!-- cetak keseluruhan -->
	    <div class="col-md-6">
	        <div class="card">
	            <div class="card-header">
	                <strong class="card-title"><?=$subJudul?></strong>
	            </div>
	            <div class="card-body">
	            	<div class="container text-center">
				        <h1 class="display-4"><i class="fa fa-print fa-2x"></i></h1>
				        <p class="lead">Catak semua <?=$subJudul?></p>
				        <a class="btn btn-info btn-md" target="_blank" href="<?=base_url()?>rekap/laporan/<?=$key?>" role="button"><i class="fa fa-print"></i> Cetak</a>
				     </div>
	            </div>
	        </div>
	    </div>
	    <!-- cetak perpriode -->
	    <div class="col-md-6">
	        <div class="card">
	            <div class="card-header">
	                <strong class="card-title"><?=$subJudul." Perpriode"?></strong>
	            </div>
	            <div class="card-body">
	            	<form method="POST" action="<?=base_url()?>rekap/cetakperiode/<?=$key?>" enctype="multipart/form-data" id="perpriode">
	            		<div class="row form-group">
                            <div class="col col-md-3">
                            	<label for="tglawal" class=" form-control-label">Dari</label>
                            </div>
                            <div class="col-12 col-md-9">
                            	<input type="date" id="tglawal" name="tglawal" placeholder="Nomor Surat" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                            	<label for="tglakhir" class=" form-control-label">Sampai</label>
                            </div>
                            <div class="col-12 col-md-9">
                            	<input type="date" id="tglakhir" name="tglakhir" placeholder="Nomor Surat" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3">
                            </div>
                            <div class="col-12 col-md-9">
                            	<button class="btn btn-info" id="btnCetak" type="submit"><i class="fa fa-print"></i> Cetak</button>
                            </div>
                        </div>
	            	</form>
	            </div>
	        </div>
	    </div>
	</div>
</div><!-- .animated -->
<script type="text/javascript">
	$(document).ready(function() {
		$('#perpriode').validate({
			rules: {
				tglawal: {
					required: true
				},
				tglakhir: {
					required: {
						required: true
					}
				}
			},
			messages: {
				tglawal: {
					required: '<br><span class="alert alert-danger" role="alert">inputan tidak boleh kosong!</span>'
				},
				tglakhir: {
					required: '<br><span class="alert alert-danger" role="alert">inputan tidak boleh kosong!</span>'
				}
			}
		});
	});
</script>