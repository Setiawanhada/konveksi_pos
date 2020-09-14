<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Master Satuan</h1>
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
        <form action="<?=site_url('master/satuan/add_process')?>">
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama Satuan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="nama_satuan">
                </div>
                
            </div>
            <div class="row d-flex justify-content-center">
                    <div></div>
                    <div><button type="submit" class="btn-sm btn-success">Simpan</button></div>
                    <div></div>
                </div>
        </form>
    </div>
</div>
</div>

</div>
<!-- /.container-fluid -->