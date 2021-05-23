<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="/css/profile-style.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container ">
    <div class="row mt-3">
        <div class="col-md text-center ">
            <h1 class="mt-3">Offered Service</h1>
            <img src="/Img/Logo/<?= user()->picture; ?>" alt="profile" class="img-fluid mb-2">
            <h4><?= user()->username; ?></h4>
            <div class="row justify-content-center  ">
                <div class="col-md-4 mt-2">
                    <a href="/User/edit" class="btn btn-warning">Edit Profile</a>
                </div>
                <div class="col-md-4 mt-2">
                    <a href="/User/offered" class="btn btn-success">Offered Service</a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md">
                    <a href="/logout" class="btn btn-danger d-block">Log out</a>
                </div>
            </div>


        </div>
        <div class="col-md">

        </div>
    </div>
</div>

<?= $this->endSection(); ?>