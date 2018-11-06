<div class="animated fadeIn">
    <div class="row">
	    <div class="col-md-12">
	        <div class="card">
	            <div class="card-header">
	                <strong class="card-title"><?=$subJudul?></strong>
	                <span class="float-right">
	                	<?php $id = @$_GET['id']; ?>
	                	<a href="<?=base_url()?>surat?id=<?=$id?>" class="btn btn-warning btn-sm"><i class="fa fa-chevron-circle-left"></i></a>
	                </span>
	            </div>
	            <div class="card-body">
	            	<form method="post" id="edit" enctype="multipart/form-data" class="form-horizontal">
                        <div class="row form-group">
                            <div class="col col-md-3 offset-2">
                            	<label for="no_surat" class=" form-control-label">Nomor Surat</label>
                            </div>
                            <div class="col-12 col-md-4">
                            	<input type="text" id="no_surat" name="no_surat" placeholder="Nomor Surat" class="form-control" value="<?=$data->no_surat?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3 offset-2">
                            	<label for="hal" class=" form-control-label">Perihal</label>
                            </div>
                            <div class="col-12 col-md-4">
                            	<input type="text" id="hal" name="hal" placeholder="Perihal" class="form-control" value="<?=$data->hal?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3 offset-2">
                            	<label for="lampiran" class=" form-control-label">Lampiran</label>
                            </div>
                            <div class="col-12 col-md-4">
                            	<input type="text" id="lampiran" name="lampiran" placeholder="Lampiran" class="form-control" value="<?=$data->lampiran?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3 offset-2">
                            	<label for="tujuan" class=" form-control-label">Tujuan</label>
                            </div>
                            <div class="col-12 col-md-4">
                            	<input type="text" id="tujuan" name="tujuan" placeholder="tujuan" class="form-control" value="<?=$data->tujuan?>">
                                <input type="hidden" name="id" value="<?=$data->id_surat?>">
                                <input type="hidden" name="id_ket" value="<?=$data->id_keterangan;?>">
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col col-md-3 offset-2">
                            	<label for="jenis" class=" form-control-label">Jenis Surat</label>
                            </div>
                            <div class="col-12 col-md-4">
                            	<select name="jenis" id="jenis" class="form-control">
                            		<option value="<?=$data->id_jenis?>"><?=$data->jenis_surat?></option>
                            		<?php
                            			foreach ($jenis as $j => $rows) {
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
                            	<input type="date" id="tgl" name="tgl" placeholder="Tanggal" class="form-control" value="<?=$data->tanggal?>">
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
        $('#edit').validate({
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
               var data = $('#edit').serialize();
               console.log(data);
               $.ajax({
                url: '<?=base_url()?>surat/proses_edit',
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
                text: "Data gagal diupdate",
                icon: "warning",
                dangerMode: true,
                buttons: [false, "OK"],
              }).then(function() {
                window.location.href="<?=base_url()?>surat/edit/<?=$data->id_surat?>";
              });
        }
        function berhasil() {
            swal({
                title: "BERHASIl",
                text: "Data berhasil diupdate",
                icon: "success",
                buttons: [false, "OK"],
              }).then(function() {
                window.location.href="<?=base_url()?>surat/tampil/<?=$data->id_keterangan;?>";
              });
        }
</script>