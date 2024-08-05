<?= $this->extend('layouts/base') ?>
<?= $this->section('title') ?>Tambah Data Aset<?= $this->endSection() ?>

<?= $this->section('content') ?>
<div class="container-xxl flex-grow-1 container-p-y">

    <div class="mb-3">
        <div class="row">
            <div class="col-md-12">
                <h1 class="h3 d-inline align-middle">Tambah Data Aset</h1>
            </div>
        </div>
    </div>

    <!-- Tambah::Start -->
    <form id="editor-form" action="<?= site_url('panel/item/tambah') ?>" method="post" enctype="multipart/form-data">
        <div class="card">
            <div class="card-body">
                <div class="row mb-3">
                    <div class="col-md-12">
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <label class="form-label" for="nama_item">Nama Aset</label>
                                <input type="text" name="nama_item" id="nama_item" class="form-control mb-3" />
                            </div>
                            <div class="col-md-12">
                                <label class="form-label" for="id_kategori">Kategori</label>
                                <select name="id_kategori" class="form-control mb-3" id="id_kategori">
                                    <?php foreach ($kategori as $k) : ?>
                                        <option value="<?= $k['id_kategori']; ?>"><?= $k['nama_kategori']; ?></option>
                                    <?php endforeach; ?>
                                </select>
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
        </div>
    </form>
    <!--/ Tambah::End -->
</div>
<?= $this->endSection() ?>