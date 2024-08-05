<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Edit Data Gedung<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h3 d-inline align-middle">Edit Data Gedung</h1>
            </div>
        </div>
    </div>

    <!-- Tambah::Start -->
    <form action="<?= site_url('panel/gedung/' . $gedung['kode_gedung']) ?>" method="post">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="kode_gedung">Kode Gedung</label>
                                <input type="text" class="form-control mb-3" id="kode_gedung" name="kode_gedung" value="<?= $gedung['kode_gedung'] ?>" readonly>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="nama_gedung">Nama Gedung</label>
                                <input type="text" class="form-control mb-3" id="nama_gedung" name="nama_gedung" value="<?= $gedung['nama_gedung'] ?>" required>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label" for="keterangan">Keterangan</label>
                                <textarea class="form-control mb-3" id="keterangan" name="keterangan" rows="3" required><?= $gedung['keterangan'] ?></textarea>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= base_url('/panel/gedung') ?>" class="btn btn-secondary">Batal</a>
                </div>

            </div>
        </div>
    </form>
    <!--/ Tambah::End -->
</div>
<?= $this->endSection() ?>