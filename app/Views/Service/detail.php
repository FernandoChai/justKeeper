<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2 class="mt-2">Detail Service</h2>
            <div class="card mb-3" style="max-width: 540px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="/Img/<?= $service['gambar']; ?>" width="100px">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title"><?= $service['nama']; ?></h5>
                            <p class="card-text"><b>Lokasi: </b><?= $service['lokasi']; ?></p>
                            <p class="card-text"><small class="text-muted"><b>Kategori: </b><?= $service['kategori']; ?></small></p>

                            <a href="/service/edit/<?= $service['slug']; ?>" class="btn btn-warning">Edit</a>

                            <form action="/service/<?= $service['id']; ?>" method="POST" class="d-inline">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?');">Delete</button>
                            </form>

                            <br> <br>
                            <a href="/service">Kembali ke daftar komik</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>