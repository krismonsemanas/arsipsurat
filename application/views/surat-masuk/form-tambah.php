<div class="animated fadeIn">
    <div class="row">
	    <div class="col-md-12">
	        <div class="card">
	            <div class="card-header">
	                <strong class="card-title"><?=$subJudul?></strong>
	                <span class="float-right">
                        <?php $id=$key; ?>
	                	<a href="<?=base_url()?>surat/tampil/<?=$key?>" class="btn btn-warning btn-sm"><i class="fa fa-chevron-circle-left"></i></a>
	                </span>
	            </div>
	            <div class="card-body">
	            	<form method="post" id="tambah" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3 offset-2">
                            	<label for="no_surat" class=" form-control-label">Nomor Surat</label>
                            </div>
                            <div class="col-12 col-md-4">
                            	<input type="text" id="no_surat" name="no_surat" placeholder="Nomor Surat" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3 offset-2">
                            	<label for="hal" class=" form-control-label">Perihal</label>
                            </div>
                            <div class="col-12 col-md-4">
                            	<input type="text" id="hal" name="hal" placeholder="Perihal" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3 offset-2">
                            	<label for="lampiran" class=" form-control-label">Lampiran</label>
                            </div>
                            <div class="col-12 col-md-4">
                            	<input type="text" id="lampiran" name="lampiran" placeholder="Lampiran" class="form-control">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3 offset-2">
                            	<label for="tujuan" class=" form-control-label">Tujuan</label>
                            </div>
                            <div class="col-12 col-md-4">
                            	<input type="text" id="tujuan" name="tujuan" placeholder="tujuan" class="form-control">
                                <input type="hidden" name="id_ket" value="<?=$key?>">
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col col-md-3 offset-2">
                            	<label for="jenis" class=" form-control-label">Jenis Surat</label>
                            </div>
                            <div class="col-12 col-md-4">
                            	<select name="jenis" id="jenis" class="form-control">
                            		<option value="">--Pilih Salah Satu--</option>
                            		<?php
                            			foreach ($data as $j => $rows) {
                            				?>
                            					<option value="<?=$rows['id']?>"><?=$rows['jenis_surat']?></option>
                            				<?php
                            			}
                            		?>
                            	</select>
                            </div>
                        </div>
                         <div class="row form-group">
                            <div class="col col-md-3 offset-2">
                            	<label for="tgl" class=" form-control-label">Tanggal</label>
                            </div>
                            <div class="col-12 col-md-4">
                            	<input type="date" id="tgl" name="tgl" placeholder="Tanggal" class="form-control">
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
    $(document).ready(function(){
        $.validator.setDefaults({
            debug: true,
            success: "valid"
        });
        $('#tambah').validate({
            rules: {
                no_surat: {
                    required: true
                },
                hal: {
                    required: true
                },
                lampiran: {
                    required: true
                },
                tujuan: {
                    required: true
                },
                jenis: {
                   required: true
                },
                tgl: {
                    required: true
                }
            },
            messages: {
               no_surat: {
                 required: '<br><span class="alert alert-danger" role="alert">inputan tidak boleh kosong!</span>'
               },
               hal: {
                 required: '<br><span class="alert alert-danger" role="alert">inputan tidak boleh kosong!</span>'
               },
               lampiran: {
                 required: '<br><span class="alert alert-danger" role="alert">inputan tidak boleh kosong!</span>'
               },
               tujuan: {
                 required: '<br><span class="alert alert-danger" role="alert">inputan tidak boleh kosong!</span>'
               },
               jenis: {
                 required: '<br><span class="alert alert-danger" role="alert">inputan tidak boleh kosong!</span>'
               },
               tgl: {
                 required: '<br><span class="alert alert-danger" role="alert">inputan tidak boleh kosong!</span>'
               }
            },
            submitHandler: function (form) {
               var data = $('#tambah').serialize();
               $.ajax({
                url: '<?=base_url()?>surat/simpan/',
                data: data,
                type: 'POST',
                success: function (data) {
                        if (data === "true") {
                            berhasil();
                        }else{
                            gagal();
                        }
                    }
               });
            }
        });
    });
        function gagal() {
            swal({
                title: "OOPS",
                text: "Data gagal ditambahkan",
                icon: "warning",
                dangerMode: true,
                buttons: [false, "OK"],
              }).then(function() {
                window.location.href="<?=base_url()?>surat/tambah/<=$key?>";
              });
        }
        function berhasil() {
            swal({
                title: "BERHASIl",
                text: "Data telah ditambahkn",
                icon: "success",
                buttons: [false, "OK"],
              }).then(function() {
                window.location.href="<?=base_url()?>surat";
              });
        }
</script>