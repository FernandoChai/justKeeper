<?= $this->extend('layout/template'); ?>
<?= $this->section('css'); ?>
<link rel="stylesheet" href="/css/style.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="mt-2">Service</h1>
            <a href="/service/create" class="btn btn-primary mb-3">Add Service</a>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($service as $a) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td>
                                <img src="/Img/<?= $a['gambar']; ?>" alt="" class="sampul">
                            </td>
                            <td><?= $a['nama']; ?></td>
                            <td>
                                <a href="/service/<?= $a['slug']; ?>" class="btn btn-success">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>