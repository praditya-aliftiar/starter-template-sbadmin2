<?php $this->view('admin-templates/header') ?>

<?php $this->view('admin-templates/sidebar') ?>

<?php $this->view('admin-templates/topbar') ?>

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data Artikel</h1>
    </div>

    <!-- Content Row -->


    <!-- content tambah artikel-->
    <div class="card shadow mb-4">
        <div class="card-body">
            <form method="post" action="<?= base_url('admin/add_artikel') ?>" enctype="multipart/form-data" autocomplete="off">
                <div class="form-group">
                    <label for="tgl">Tanggal :</label>
                    <input type="date" class="form-control" name="tgl" value="<?= set_value('tgl') ?>">
                    <?= form_error('tgl', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="judul">Judul Artikel :</label>
                    <input type="text" class="form-control" name="judul" value="<?= set_value('judul') ?>">
                    <?= form_error('judul', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi :</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10" value="<?= set_value('deskripsi') ?>"></textarea>
                    <?= form_error('deskripsi', '<small class="text-danger">', '</small>') ?>
                </div>
                <div class="form-group ">
                    <label for="customFile">Pilih Gambar :</label>
                    <div class="mb-3 col-12">
                        <img src="<?= base_url('assets/img/artikel/default.jpg') ?>" class="imgPreview">
                    </div>
                    <input type="file" name="image" class="form-control" id="image" />
                    <p class="text-small text-primary mt-1">Gambar max 2MB</p>
                    <?= form_error('image', '<small class="text-danger">', '</small>') ?>
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
                <a href="<?= base_url('admin/artikel') ?>" class="btn btn-outline-danger ml-3">Cancel</a>
            </form>
        </div>
    </div>
    <!-- end of content tambah artikel -->

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php $this->view('admin-templates/footer') ?>