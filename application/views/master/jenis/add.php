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
            <div class="form-group row form_bahan">
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
            <div class="form-group row form_dibutuhkan">
                <label for="staticEmail" class="col-sm-2 col-form-label">Jml Dibutuhkan</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" name="dibutuhkan">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                <a href="" onclick="add_bahan()" class="btn btn-sm btn-info">+</a>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                    <div><a href="<?=site_url('master/jenis')?>" class="btn btn-sm btn-warning">kembali</a></div>
                    <div><button type="submit" class="btn-sm btn-success">Simpan</button></div>
                    <div></div>
                </div>
        </form>
    </div>
</div>
</div>

</div>
<!-- /.container-fluid -->
<script>
    function add_bahan()
        {
            var html = '';

			html += '<div>';
            html += '<select class="form-control select2-show-search" name="id_bahan"';
            html += 'data-placeholder="-- Pilih Jenis Jabatan --">';
            html += '<option value="" disabled selected>-- Pilih Bahan --</option>';
            html += '<?php foreach ($rs_bahan as $bahan): ?>';
            html += '<option value="<?php echo $bahan['id_bahan']?>"><?php echo $bahan['nama_bahan']?>';
            html += '</option>';
            html += '<?php endforeach; ?>';
            html += '</select>';
			html += '<button type="button" class="btn btn-danger btn-sm" onclick="del_form(this)">-</button>';
			html += '</div>';

            $('.form_bahan').append(html);
        }

	function add_dibutuhkan()
        {
            var html = '';

			html += '<div>';
            html += '<select class="form-control form-control-sm select2 col-md-12" name="posisi[]" style="margin-bottom:2%">';
            html += '<option value="">-- Pilih Posisi --</option>';
            html += '<option value="PA">PA</option>';
            html += '<option value="AP">AP</option>';
            html += '<option value="LATERAL">LATERAL</option>';
            html += '<option value="AP/LAT">AP/LAT</option>';
            html += '<option value="OBLIQUE">OBLIQUE</option>';
			html += '</select>';
			html += '<button type="button" class="btn btn-danger btn-sm" onclick="del_form(this)">-</button>';
			html += '</div>';

            $('#form_dibutuhkan').append(html);
        }

    function del_form(id)
        {
            id.closest('div').remove();
        }
</script>