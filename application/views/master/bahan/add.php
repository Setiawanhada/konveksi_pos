<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Master Bahan</h1>
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
        <form action="<?=site_url('master/bahan/add_process')?>" method="post">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Bahan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_bahan">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Harga Beli</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="harga_beli">
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                    <div><a href="<?=site_url('master/bahan')?>" class="btn btn-sm btn-warning">kembali</a></div>
                    <div><button type="submit" class="btn-sm btn-success">Simpan</button></div>
                    <div></div>
                </div>
        </form>
    </div>
</div>
</div>

</div>
<!-- /.container-fluid -->