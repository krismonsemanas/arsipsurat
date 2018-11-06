<div class="animated fadeIn">
    <div class="row">
	    <div class="col-md-12">
	        <div class="card">
	            <div class="card-header">
	                <strong class="card-title"><?=$subJudul?></strong>
	                <span class="float-right">
	                	<a href="<?=base_url()?>/home" class="btn btn-warning btn-sm"><i class="fa fa-chevron-circle-left"></i></a>
	                </span>
	            </div>
	            <div class="card-body">
	            	<form method="post" action="<?=base_url()?>user/getuser" id="ubah" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3 offset-2">
                            	<label for="oldpass" class=" form-control-label">Password Lama</label>
                            </div>
                            <div class="col-12 col-md-4">
                            	<input type="password" id="oldpass" name="oldpass" placeholder="Password Lama" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3 offset-2">
                            	<label for="newpass" class=" form-control-label">Password Baru</label>
                            </div>
                            <div class="col-12 col-md-4">
                            	<input type="password" id="newpass" name="newpass" placeholder="Password Baru" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3 offset-2">
                            	<label for="repass" class=" form-control-label">Re-Password Baru</label>
                            </div>
                            <div class="col-12 col-md-4">
                            	<input type="password" id="repass" name="repass" placeholder="Re-Password Baru" class="form-control">
                                <?php echo $error; ?>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3 offset-2">
                            </div>
                            <div class="col-12 col-md-4">
                            	<button class="btn btn-info" id="btnSimpan" type="submit">Simpan</button>
                        		<button class="btn btn-danger" type="reset">Batal</button>
                            </div>
                        </div>
                    </form>
	            </div>
	        </div>
	    </div>
	</div>
</div><!-- .animated -->
<script>
    $(document).ready(function () {
       // validate form ubah
       $('#ubah').validate({
            rules: {
                oldpass: {
                    required: true
                },
                newpass: {
                    required: true
                },
                repass: {
                    required: true,
                    equalTo: '#newpass'
                }
            },
            messages: {
                oldpass: {
                    required: '<br><span class="alert alert-danger" role="alert">inputan tidak boleh kosong!</span>'
                },
                newpass: {
                    required: '<br><span class="alert alert-danger" role="alert">inputan tidak boleh kosong!</span>'
                },
                repass: {
                    required: '<br><span class="alert alert-danger" role="alert">inputan tidak boleh kosong!</span>',
                    equalTo: '<br><span class="alert alert-danger" role="alert">Pastikan inputan sama!</span>'

                }
            }
       }); 
    });
</script>
