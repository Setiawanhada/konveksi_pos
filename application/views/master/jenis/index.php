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
    <div class="row d-flex justify-content-between">
        <div>
            <h6 class="m-0 font-weight-bold text-primary">Data Jenis</h6>
        </div>
        <div></div>
        <div>
            <a href="<?=site_url('master/jenis/add')?>" class="btn btn-sm btn-success">Tambah Data</a>
        </div>
    </div>
</div>
<div class="card-body">
    <div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>Nama Jenis</th>
            <th>Harga Jual</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($rs_data as $data): ?>
        <tr>
            <td><?php echo $data['nama_jenis'] ?></td>
            <td><?php echo $data['harga_jual'] ?></td>
            <td>
                <a class="btn btn-primary btn-sm" href="" data-toggle="modal" data-target="#detail<?=$data['id_jenis']?>">
                <i class="fa fa-eye"></i> Detail</a>
                <a class="btn btn-warning btn-sm" href="<?php echo site_url('master/jenis/edit/'.$data['id_jenis'])?>">
                <i class="fa fa-edit"></i> Edit</a>
                <a class="btn btn-danger btn-sm" href="" data-toggle="modal" data-target="#hapus<?=$data['id_jenis']?>">
                <i class="fa fa-trash"></i> Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
    </div>
</div>
<!-- Modal -->
<!-- modal detail -->
<?php foreach ($rs_data as $data): ?>
	<div class="modal fade" id="detail<?=$data['id_jenis']?>" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detail Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <?php 
                    $id_jenis = $data['id_jenis'];
                    $daa = $this->db->query("SELECT * FROM mst_jenis WHERE id_jenis = '$id_jenis'")->row_array();
                ?>
                <div class="modal-body">
                    <label><b> Data Jenis :</b></label>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Nama jenis</label>
                        </div>
                        <div class="col-md-8">
                            : <?php echo $daa['nama_jenis'];?>
                        </div>
                        <div class="col-md-3">
                            <label for="">Harga Jual</label>
                        </div>
                        <div class="col-md-8">
                            : <?php echo $daa['harga_jual'];?>
                        </div>
                    </div>
                    <?php 
                    $id_jenis = $data['id_jenis'];
                    $da = $this->db->query("SELECT a.dibutuhkan,b.nama_bahan FROM mst_detail_jenis a JOIN mst_bahan b ON a.id_bahan = b.id_bahan  WHERE id_jenis = '$id_jenis'")->result_array();
                    ?>
                    <label><b> Data Detail :</b></label>
                    <?php foreach ($da as $dat): ?>
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Nama Bahan</label>
                        </div>
                        <div class="col-md-8">
                            : <?php echo $dat['nama_bahan'];?>
                        </div>
                        <div class="col-md-3">
                            <label for="">Dibutuhkan</label>
                        </div>
                        <div class="col-md-8">
                            : <?php echo $dat['dibutuhkan'];?>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
			</div>
		</div>
	</div>
	<?php endforeach; ?>
</div>

<!-- modal hapus -->
<?php foreach ($rs_data as $data): ?>
	<div class="modal fade" id="hapus<?=$data['id_jenis']?>" tabindex="-1" role="dialog"
		aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form action="<?= site_url('master/jenis/delete_process')?>" method="post">
					<div class="modal-header">
						<h5 class="modal-title">Hapus Data</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">×</span>
						</button>
					</div>
					<?php 
                        $id_jenis = $data['id_jenis'];
                        $daa = $this->db->query("SELECT * FROM mst_jenis WHERE id_jenis = '$id_jenis'")->row_array();
                        ?>
					<div class="modal-body">
						<label><b>Anda akan menghapus data:</b></label>
						<input type="text" name="id_jenis" value="<?=$id_jenis?>" hidden>
						<div class="row">
							<div class="col-md-3">
								<label for="">Nama jenis</label>
							</div>
							<div class="col-md-8">
								: <?php echo $daa['nama_jenis'];?>
                            </div>
                            <div class="col-md-3">
								<label for="">Harga Jual</label>
							</div>
							<div class="col-md-8">
								: <?php echo $daa['harga_jual'];?>
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