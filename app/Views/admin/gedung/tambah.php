<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Tambah Data Gedung<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h3 d-inline align-middle">Tambah Data Gedung</h1>
            </div>
        </div>
    </div>

    <!-- Tambah::Start -->
    <form id="editor-form" action="<?= site_url('panel/gedung/tambah') ?>" method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="klasifikasi">Klasifikasi:</label>
                                <select class="form-control mb-3" id="klasifikasi" name="klasifikasi">
                                    <option value="REK">Rektorat</option>
                                    <option value="SAP">Fakultas Ilmu Administrasi</option>
                                    <option value="SKM">Fakultas Ilmu Komputer</option>
                                    <option value="SHH">Fakultas Ilmu Hukum</option>
                                    <option value="SPP">Fakultas Pertanian</option>
                                    <option value="SIK">Fakultas Ilmu Komunikasi</option>
                                    <option value="SPD">Fakultas Ilmu Pendidikan</option>
                                    <option value="GBL">Gedung Belakang</option>
                                    <option value="MAP">Pasca Sarjana</option>
                                    <!-- Tambahkan opsi lain jika diperlukan -->
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="nama_gedung">Nama Gedung</label>
                                <input type="text" name="nama_gedung" id="nama_gedung" class="form-control mb-3" />
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="keterangan">Keterangan</label>
                                <input type="text" name="keterangan" id="keterangan" class="form-control mb-3" />
                            </div>
                        </div>
                    </div>


                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>

            </div>
    </form>
    <!--/ Tambah::End -->
</div>
<?= $this->endSection() ?>