<?= $this->extend('layouts/v_master'); ?>

<?= $this->section('content'); ?>
<section class="section">

    <div class="pagetitle">
        <h1>Kategori</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">Home</a></li>
                <li class="breadcrumb-item"><a href="<?= site_url('Asset'); ?>">Asset</a></li>
                <li class="breadcrumb-item"><a href="<?= site_url('lokasi'); ?>"> Kategori</a></li>
                <li class="breadcrumb-item active">Tambah</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row justify-content-center">
        <div class="col-lg-6 mt-2">
            <div class="card border-top border-primary border-5">
                <div class="card-body">
                    <h5 class="card-title" style="font-weight: bold; font-size: 20px;">
                        <a href="<?= site_url('assets/kategori') ?>" style="color: black;" class=" bi bi-arrow-left-circle-fill d-inline" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Kembali"></a>
                        Tambah Kategori
                    </h5>
                    <!-- General Form Elements -->
                    <form action="<?= site_url('assets/kategori/save'); ?>" method="post" enctype="multipart/form-data" accept-charset="utf-8">
                        <?= csrf_field() ?>
                        <div class="row mb-3">
                            <label for="kode_kategori" class="col-sm-4  col-form-label">Kode Kategori</label>
                            <div class="col-sm-8">
                                <input type="text" name="kode_kategori" value="<?= old('kode_kategori'); ?>" class="form-control">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="nama_kategori" class="col-sm-4 col-form-label">Nama Kategori</label>
                            <div class="col-sm-8">
                                <input type="text" name="nama_kategori" value="<?= old('nama_kategori'); ?>" class="form-control">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary bi bi-cursor-fill">Simpan</button>
                                <button type="reset" class="btn btn-secondary bi bi-arrow-clockwise">Reset</button>
                            </div>
                        </div>

                    </form><!-- End General Form Elements -->

                </div>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection('content'); ?>