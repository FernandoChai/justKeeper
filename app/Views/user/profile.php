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
            <a href="/User/edit" class="btn btn-warning"><svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                </svg>Edit Profile</a>
            <div class="row mt-2">
                <div class="col-md mb-4">
                    <a href="/User/offered" class="btn btn-success"><svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                        </svg>Offered Service<?php if ($num > 0) : ?>
                        <span class="badge bg-danger">
                            <?php if ($num > 99) : ?>
                                99+
                            <?php else : ?>
                                <?= $num; ?>
                            <?php endif; ?>
                        </span>
                    <?php endif; ?></a>
                </div>
            </div>
        </div>
        <div class="col-md">
            <a href="#" class="btn btn-danger d-block" data-toggle="modal" data-target="#logoutModal"><svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                </svg>Log out</a>
        </div>
    </div>

</div>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="/logout">Logout</a>
            </div>
        </div>
    </div>
</div>
<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="/js/sb-admin-2.min.js"></script>

<?= $this->endSection(); ?>