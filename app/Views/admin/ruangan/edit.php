<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Edit Data Ruangan<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h3 d-inline align-middle">Edit Data Ruangan</h1>
            </div>
        </div>
    </div>

    <!-- Tambah::Start -->
    <form action="<?= site_url('panel/ruangan/' . $ruangan['kode_ruangan']) ?>" method="post">
        <div class="mb-3">
            <label for="kode_gedung" class="form-label">Kode Gedung</label>
            <select class="form-select" id="kode_gedung" name="kode_gedung" required>
                <option value="">Pilih Gedung</option>
                <?php foreach ($gedung as $g) : ?>
                    <option value="<?= $g['kode_gedung']; ?>" <?= ($g['kode_gedung'] == $ruangan['kode_gedung']) ? 'selected' : '' ?>><?= $g['nama_gedung']; ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="mb-3">
            <label for="nama_ruangan" class="form-label">Nama Ruangan</label>
            <input type="text" class="form-control" id="nama_ruangan" name="nama_ruangan" value="<?= $ruangan['nama_ruangan'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="lantai" class="form-label">Lantai</label>
            <input type="number" class="form-control" id="lantai" name="lantai" value="<?= $ruangan['lantai'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <textarea class="form-control" id="keterangan" name="keterangan" rows="3"><?= $ruangan['keterangan'] ?></textarea>
        </div>
        <div class="card-footer text-end">
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="<?= base_url('/panel/gedung') ?>" class="btn btn-secondary">Batal</a>
        </div>
    </form>
    <!--/ Tambah::End -->
</div>
<?= $this->endSection() ?>