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
            <div class="form_bahan">
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Bahan</label>
                    <div class="col-sm-10">
                    <select class="form-control select2-show-search" name="id_bahan[]"
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
                    <input type="text" class="form-control" name="dibutuhkan[]">
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10">
                <a onclick="add_bahan()" class="btn btn-sm btn-info">+ Tambah</a>
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

            html += '<div class="form_bahan_tambah">';
            html += '<div class="form-group row">';
            html += '<label for="staticEmail" class="col-sm-2 col-form-label">Bahan</label>';
            html += '<div class="col-sm-10">';
            html += '<select class="form-control select2-show-search" name="id_bahan[]">';
            html += '<option value="" disabled selected>-- Pilih Bahan --</option>';
            html += '<?php foreach ($rs_bahan as $bahan): ?>';
            html += '<option value="<?php echo $bahan['id_bahan']?>"><?php echo $bahan['nama_bahan']?>';
            html += '</option>';
            html += '<?php endforeach; ?>';
            html += '</select>';
            html += '</div>';
            html += ' </div>';
            html += '<div class="form-group row form_dibutuhkan">';
            html += '<label for="staticEmail" class="col-sm-2 col-form-label">Jml Dibutuhkan</label>';
            html += '<div class="col-sm-10">';
            html += '<input type="text" class="form-control" name="dibutuhkan[]">';
            html += '</div>';
            html += '</div>';
            html += '<div class="form-group row">';
            html += '<label for="staticEmail" class="col-sm-2 col-form-label"></label>';
            html += '<div class="col-sm-10">';
            html += '<a onclick="del_form(this)" class="btn btn-sm btn-info">- Kurangi</a>';
            html += '</div>';
            html += '</div>';
            html += '</div>';

            $('.form_bahan').append(html);
        }

    function del_form(id)
        {
            $(id).closest('.form_bahan_tambah').remove()
            // id.closest('div').remove();
        }
</script>