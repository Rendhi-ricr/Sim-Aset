<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Edit Data Aset<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h3 d-inline align-middle">Edit Data Aset</h1>
            </div>
        </div>
    </div>

    <!-- Tambah::Start -->
    <form action="<?= site_url('panel/item/' . $item['kode_item']) ?>" method="post">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="kode_item">Kode Item</label>
                                <input type="text" class="form-control mb-3" id="kode_item" name="kode_item" value="<?= $item['kode_item'] ?>" readonly>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="nama_item">Nama Aset</label>
                                <input type="text" class="form-control mb-3" id="nama_item" name="nama_item" value="<?= old('nama_item', $item['nama_item']) ?>" required>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="id_kategori">Kategori</label>
                                <select class="form-control mb-3" id="id_kategori" name="id_kategori" required>
                                    <?php foreach ($kategori as $kat) : ?>
                                        <option value="<?= $kat['id_kategori'] ?>" <?= $kat['id_kategori'] == $item['id_kategori'] ? 'selected' : '' ?>>
                                            <?= $kat['nama_kategori'] ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="keterangan">Keterangan</label>
                                <textarea class="form-control mb-3" id="keterangan" name="keterangan" rows="3" required><?= old('keterangan', $item['keterangan']) ?></textarea>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="card-footer text-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="<?= base_url('/panel/item') ?>" class="btn btn-secondary">Batal</a>
                </div>

            </div>
        </div>
    </form>
    <!--/ Tambah::End -->
</div>
<?= $this->endSection() ?>