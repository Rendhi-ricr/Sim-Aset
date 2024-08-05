<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Tambah Data Ruangan<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h3 d-inline align-middle">Tambah Data Ruangan</h1>
            </div>
        </div>
    </div>

    <!-- Tambah::Start -->
    <form action="<?= site_url('/panel/ruangan/tambah') ?>" method="post">
        <div class="mb-3">
            <label for="kode_gedung" class="form-label">Kode Gedung</label>
            <select class="form-select" id="kode_gedung" name="kode_gedung" required>
                <option value="">Pilih Gedung</option>
                <?php foreach ($gedung as $g) : ?>
                    <option value="<?= $g['kode_gedung']; ?>"><?= $g['nama_gedung']; ?> (<?= $g['kode_gedung']; ?>)</option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
            <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" required>
        </div>
        <div class="mb-3">
            <label for="lantai" class="form-label">Lantai</label>
            <input type="number" class="form-control" id="lantai" name="lantai" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <!--/ Tambah::End -->
</div>
<?= $this->endSection() ?>