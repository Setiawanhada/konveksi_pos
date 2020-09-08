<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-2 text-gray-800">Master Satuan</h1>

<!-- DataTales Example -->
<div class="card shadow mb-4">
<div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Satuan</h6>
</div>
<div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Nama Satuan</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>
                <a class="btn btn-warning btn-sm" href="<?php echo site_url('admin/informasi/edit/')?>">
                <i class="fa fa-edit"></i> Edit</a>
                <a class="btn btn-danger btn-sm" href="<?php echo site_url('admin/informasi/delete/')?>">
                <i class="fa fa-trash"></i> Hapus</a>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
</div>
</div>

</div>
<!-- /.container-fluid -->