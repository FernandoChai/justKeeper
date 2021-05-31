<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="/css/profile-style.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container ">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-warning" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row ">
        <div class="col-md text-center justify-content-center">
            <h1>My Profile</h1>
            <img src="/Img/<?= user()->picture; ?>" alt="profile" class="img-fluid mb-2">
            <h4><?= user()->username; ?></h4>
        </div>
        <div class="col-md mt-5">
            <div class="row">
                <div class="col-md">
                    <ul class="list-group list-group-flush">
                        <?php if (user()->name) : ?>
                            <li class="list-group-item"><b>Name</b><span>: <?= user()->name; ?></span></li>
                        <?php else : ?>
                            <li class="list-group-item"><b>Name</b><span style="color: red;">: You haven't set your name</span></li>
                        <?php endif; ?>

                        <?php if (user()->dob) : ?>
                            <li class="list-group-item"><b>Date of Birth</b><span>: <?= user()->dob; ?></span></li>
                        <?php else : ?>
                            <li class="list-group-item"><b>Date of Birth</b><span style="color: red;">: You haven't set your date of birth</span></li>
                        <?php endif; ?>

                        <?php if (user()->gender) : ?>
                            <li class="list-group-item"><b>Gender</b><span>: <?= user()->gender; ?></span></li>
                        <?php else : ?>
                            <li class="list-group-item"><b>Gender</b><span style="color: red;">: You haven't set your gender</span></li>
                        <?php endif; ?>

                        <?php if (user()->email) : ?>
                            <li class="list-group-item"><b>Email</b><span>: <?= user()->email; ?></span></li>
                        <?php else : ?>
                            <li class="list-group-item"><b>Email</b><span style="color: red;">: You haven't set your email</span></li>
                        <?php endif; ?>

                        <?php if (user()->address) : ?>
                            <li class="list-group-item"><b>Address</b><span>: <?= user()->address; ?></span></li>
                        <?php else : ?>
                            <li class="list-group-item"><b>Address</b><span style="color: red;">: You haven't set your Address</span></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row text-center justify-content-center mt-2">
        <div class="col-md">
            <a href="/User/edit" class="btn btn-warning">Edit Profile</a>
            <div class="row mt-2">
                <div class="col-md mb-4">
                    <a href="/User/offered" class="btn btn-success">Offered Service</a>
                </div>
            </div>
        </div>
        <div class="col-md">
            <a href="/logout" class="btn btn-danger d-block">Log out</a>
        </div>
    </div>

</div>

<?= $this->endSection(); ?>