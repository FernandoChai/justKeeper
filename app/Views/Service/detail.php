<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="/css/detail-style.css">
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
        <div class="col-12 text-center col-md-3 offset-md-3 col-lg-3">
            <img src="/Img/<?= $service->up; ?>" alt="profile-Picture" class="img-fluid" width="200px">
        </div>
        <div class="col-12 col-lg-5 col-md-5 res-center">
            <div class="row">
                <div class="col ">
                    <h1><?= $service->name; ?></h1>
                    <div class="mb-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                            <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                        </svg>
                        <p class="d-inline"><?= ($avgRate->rate) ? number_to_amount($avgRate->rate, 2) : '0'; ?></p>
                    </div>
                    <h3 class="text-danger">IDR <?= $service->price; ?></h3>
                    <p><?= $service->location; ?>, Indonesia</p>
                    <?php if ($service->userId == user()->id) : ?>
                        <a href="/Service/edit/<?= $service->slug; ?>" class="btn btn-warning"><svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                            </svg>Edit</a>
                        <form action="/Service/<?= $service->id; ?>" method="POST" class="d-inline">
                            <?= csrf_field(); ?>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger" onclick="return confirm('are you sure to delete?')"><svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg>Delete</button>
                        </form>
                    <?php else : ?>
                        <a href="/Service/checkout/<?= $service->slug; ?>" class="btn btn-danger"><svg class="me-1 mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg>Book Now</a>
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
        <div class="col-md">
            <form action="" method="GET">
                <input type="hidden" value="<?= $slug; ?>" name="slug">
                <label for="sort" style="font-weight: bold;">Sort:</label>
                <select id="sort" name="sort" aria-label="Default select example" required class="px-2 py-1" style="border-radius: 6px; border-color: #4d80e4;" onchange="this.form.submit();">
                    <?php foreach ($revRate as $c) : ?>
                        <?php if ($c['rateId'] == $sort) : ?>
                            <?php if ($sort == 1) : ?>
                                <option selected value="<?= $c['rateId']; ?>">All</option>
                            <?php else : ?>
                                <option selected value="<?= $c['rateId']; ?>"><?= $c['rate']; ?></option>
                            <?php endif; ?>
                        <?php else : ?>
                            <?php if ($c['rateId'] == 1) : ?>
                                <option value="<?= $c['rateId']; ?>">All</option>
                            <?php else : ?>
                                <option value="<?= $c['rateId']; ?>"><?= $c['rate']; ?></option>
                            <?php endif; ?>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </select>
            </form>
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
            <div class="row mt-3">
                <div class="col-md offset-md-3 shadow-sm p-3 mb-5 bg-body rounded alert alert-danger" role="alert">
                    Has no review yet
                </div>
                <div class=" col-md-2">

                </div>
            </div>
        </div>
    <?php endif; ?>
</div>

<?= $this->endSection(); ?>