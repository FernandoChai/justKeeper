<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="/css/result-style.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<?php helper('number'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <div class="row mx-auto">
        <div class="col-md-3 offset-md-3 ">
            <img src="/Img/<?= $service->up; ?>" alt="profile-Picture" class="img-fluid" width="200px">
        </div>
        <div class="col-md">
            <div class="row">
                <div class="col-md ">
                    <h1><?= $service->name; ?></h1>
                    <div class="mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <p class="d-inline"><?= ($avgRate->rate) ? number_to_amount($avgRate->rate, 2) : '0'; ?></p>
                    </div>
                    <h3>IDR <?= $service->price; ?></h3>
                    <p><?= $service->location; ?>, Indonesia</p>
                    <?php if ($service->userId == user()->id) : ?>
                        <a href="/Service/edit/<?= $service->slug; ?>" class="btn btn-warning">Edit</a>
                        <form action="/Service/<?= $service->id; ?>" method="POST" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete?')">Delete</button>
                        </form>
                    <?php else : ?>
                        <a href="/Service/checkout/<?= $service->slug; ?>" class="btn btn-danger">Book Now</a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md offset-md-3">
            <h5>Description</h5>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md offset-md-3 shadow-sm p-3 mb-5 bg-body rounded">
                <p><?= $service->description; ?></p>
            </div>
            <div class="col-md-2">

            </div>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md offset-md-3">
            <h5>Review</h5>
        </div>
    </div>
    <?php if ($review) : ?>
        <div class="container">
            <?php foreach ($review as $r) : ?>
                <div class="row shadow-sm p-3 mb-5 bg-body rounded" style="margin-right:16%; margin-left: 24%;">
                    <div class="col-md-2 col-lg-2 text-center">
                        <img src="/Img/<?= $r['picture']; ?>" alt="" width="80px">
                        <p><?= $r['name']; ?></p>
                    </div>
                    <div class="col-md-12 col-lg">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <p class="d-inline "><?= $r['reviewRate']; ?></p>
                        <div class="row">
                            <div class="col">
                                <p><?= $r['comment']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="row" style="margin-right:16%; margin-left: 24%;">
                <div class="col">
                    <?= $pager->links('review', 'service_pagination') ?>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="container">
            <div class="row">
                <div class="col-md offset-md-3 shadow-sm p-3 mb-5 bg-body rounded">
                    <p>Has no review yet</p>
                </div>
                <div class="col-md-2">

                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection(); ?>