<?php if (in_groups('user')) : ?>
    <?= $this->extend('layout/template'); ?>

    <?= $this->section('css'); ?>
    <link rel="stylesheet" href="/css/home-style.css">
    <?= $this->endSection(); ?>

    <?= $this->section('content'); ?>
    <div class="container">
        <div class="row mt-5">
            <div class="col">
                <p style="color: red;">We let you rent anything, anytime.</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1>What do you want to rent?</h1>
            </div>
        </div>
    </div>

    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <a href="/Service/search">
                    <div class="input-group shadow p-3 mb-5 bg-body">
                        <p class="rounded form-control ps-4">Chef, Electronic services, House keeper, etc. </p>
                        <svg xmlns="http://www.w3.org/2000/svg" width="50px" fill="currentColor" class="bi bi-arrow-right-square-fill justify-content-end index" viewBox="0 0 16 16">
                            <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z" />
                        </svg>
                    </div>
                </a>
            </div>
        </div>
        <div class="row justify-content-center image-home">
            <div class="col-lg">
                <img src="/Img/Logo/1.jpg" class="img-fluid mx-auto d-block" width="100%" alt="Sampul">
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>
<?php else :  ?>
    <?= $this->extend('layoutAdmin/index'); ?>
    <?= $this->section('content'); ?>
    <div class="container-fluid">

        <h1 class="h3 mb-2 text-gray-800">My Profile</h1>
        <div class="row">
            <div class="col">
                <div class="card ">
                    <div class="row my-3">
                        <div class="col-12 text-center">
                            <img src="/Img/<?= (user()->picture) ? user()->picture : '-'; ?>" alt="picture" width="150px" class="rounded-circle">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-5" style="margin-left: 41%;">
                            <div class="mb-3">
                                <p class="d-inline fw-bold" style="margin-right: 40px;">Username</p>
                                <p class="d-inline">: <?= user()->username; ?></p>
                            </div>
                            <div class="mb-3">
                                <p class="d-inline fw-bold" style="margin-right: 26px;">Email</p>
                                <p class="d-inline ms-5">: <?= user()->email; ?></p>
                            </div>
                            <div class="mb-3">
                                <p class="d-inline fw-bold" style="margin-right: 25px;">Name</p>
                                <p class="d-inline ms-5">: <?= (user()->name) ? user()->name : '-';  ?></p>
                            </div>
                            <div class="mb-3">
                                <p class="d-inline me-1 fw-bold">Date of Birth</p>
                                <p class="d-inline ms-3">: <?= (user()->dob) ? user()->dob : '-'; ?></p>
                            </div>
                            <div class="mb-3">
                                <p class="d-inline me-5 fw-bold">Gender</p>
                                <p class="d-inline ms-3">: <?= (user()->gender) ? user()->gender : '-'; ?></p>
                            </div>
                            <div class="mb-3">
                                <p class="d-inline me-5 fw-bold">Address</p>
                                <p class="d-inline ms-2">: <?= (user()->address) ? user()->address : '-'; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3 text-center">
                        <div class="col admin-btn">
                            <a href="/Admin/edit">Edit profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?= $this->endSection(); ?>
<?php endif; ?>