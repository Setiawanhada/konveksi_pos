<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Master Jenis</h1>
<div>
<!-- load notif templates -->
<?php $this->load->view('template/notification') ?>
<!-- end load notif -->
</div>
<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Data</h6>
</div>
<div class="card-body">
    <div class="">
        <form action="<?=site_url('master/jenis/add_process')?>" method="post">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama jenis</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_jenis">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Harga Jual</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="harga_jual">
                </div>
            </div>
            <hr>
            <label for=""><b>Detail Jenis</b></label>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Bahan</label>
                <div class="col-sm-10">
                <select class="form-control select2-show-search" name="id_bahan"
                    data-placeholder="-- Pilih Jenis Jabatan --">
                    <option value="" disabled selected>-- Pilih Bahan --</option>
                    <?php foreach ($rs_bahan as $bahan): ?>
                    <option value="<?php echo $bahan['id_bahan']?>"><?php echo $bahan['nama_bahan']?>
                    </option>
                    <?php endforeach; ?>
                </select>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Jml Dibutuhkan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="dibutuhkan">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                <a href="" data-toggle="modal" data-target="#detail" class="btn btn-sm btn-info">detail</a>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                    <div><a href="<?=site_url('master/jenis')?>" class="btn btn-sm btn-warning">kembali</a></div>
                    <div><button type="submit" class="btn-sm btn-success">Simpan</button></div>
                    <div></div>
                </div>
        </form>
    </div>
    <!-- modal -->
    <div class="modal fade" id="detail" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form action="<?= site_url('master/jenis/add_process')?>" method="post">
					<div class="modal-header">
						<h5 class="modal-title">Tambah Data Detail</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<div class="modal-body">
						<div class="row">
							<div class="col-md-3">
								<label for="">Nama jenis</label>
							</div>
							<div class="col-md-8">
								: <input type="text">
                            </div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Simpan</button>
					</div>
				</form>
			</div>
		</div>
    </div>
    <!-- end modal -->
</div>
</div>

</div>
<!-- /.container-fluid -->