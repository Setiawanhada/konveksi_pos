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
    <div class="row d-flex justify-content-between">
        <div>
            <h6 class="m-0 font-weight-bold text-primary">Data Bahan</h6>
        </div>
        <div></div>
        <div>
            <a href="<?=site_url('master/bahan/add')?>" class="btn btn-sm btn-primary">Tambah Data</a>
        </div>
    </div>
</div>
<div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Nama Bahan</th>
            <th>Harga Beli</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rs_data as $data): ?>
        <tr>
            <td><?php echo $data['nama_bahan'] ?></td>
            <td><?php echo $data['harga_beli'] ?></td>
            <td>
                <a class="btn btn-warning btn-sm" href="<?php echo site_url('master/bahan/edit/'.$data['id_bahan'])?>">
                <i class="fa fa-edit"></i> Edit</a>
                <a class="btn btn-danger btn-sm" href="" data-toggle="modal" data-target="#hapus<?=$data['id_bahan']?>">
                <i class="fa fa-trash"></i> Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>
<!-- Modal -->
<?php foreach ($rs_data as $data): ?>
	<div class="modal fade" id="hapus<?=$data['id_bahan']?>" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form action="<?= site_url('master/bahan/delete_process')?>" method="post">
					<div class="modal-header">
						<h5 class="modal-title">Hapus Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<?php 
                        $id_bahan = $data['id_bahan'];
                        $daa = $this->db->query("SELECT * FROM mst_bahan WHERE id_bahan = '$id_bahan'")->row_array();
                        ?>
					<div class="modal-body">
						<label><b>Anda akan menghapus data:</b></label>
						<input type="text" name="id_bahan" value="<?=$id_bahan?>" hidden>
						<div class="row">
							<div class="col-md-3">
								<label for="">Nama Bahan</label>
							</div>
							<div class="col-md-8">
								: <?php echo $daa['nama_bahan'];?>
                            </div>
                            <div class="col-md-3">
								<label for="">Harga Beli</label>
							</div>
							<div class="col-md-8">
								: <?php echo $daa['harga_beli'];?>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-sm btn-danger"><i class="fas fa-trash"></i> Hapus</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>

</div>
<!-- /.container-fluid -->