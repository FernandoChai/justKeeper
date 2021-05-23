<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="/css/style.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container ">
    <div class="row mt-5 pt-5">
        <div class="col-md text-center ">
            <img src="/Img/Logo/2.jpg" class="img-fluid" alt="logo">
        </div>
        <div class="col-md">

            <form action="/Service" method="post">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label class="form-label" for="kategori">Select Category</label>
                    <select class="form-select" id="kategori">
                        <option selected>Choose...</option>
                        <option value="1">Chef</option>
                        <option value="2">Electronic Service</option>
                        <option value="3">House Keeper</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="lokasi">Select location</label>
                    <select class="form-select" id="lokasi">
                        <option selected>Choose...</option>
                        <option value="1">Jakarta Barat</option>
                        <option value="2">Jakarta Timur</option>
                        <option value="3">Jakarta Utara</option>
                        <option value="4">Jakarta Selatan</option>
                        <option value="5">Jakarta Pusat</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary d-grid gap-2 col-12 mx-auto">Search</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>