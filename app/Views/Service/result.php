<?php

use \App\Controllers\Service; ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="/css/result-style.css">

<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<?php helper('number'); ?>

<div class="container">
    <div class="row justify-content-between mb-3">
        <div class="col-12 col-md-12 col-lg-6 ">
            <h1 class="mt-2">Here what we got</h1>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col" style="max-width: fit-content;">
            <span class="mb-3 py-2 px-3 info"><?= $category; ?></span>
        </div>
        <div class="col">
            <span class="mb-3 py-2 px-3 info"><img src="/Img/Logo/map-pin.png" alt="location" width="20px" class="me-1"><?= $location; ?></span>
        </div>
    </div>
    <div class="row">
        <div class="col-md mb-3">
            <a href="/Service/search" class="mt-2 btn btn-secondary"><svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
                </svg>Back to search</a>
        </div>
        <?php if ($service != null) : ?>
            <div class="col-12 col-md-6 col-lg-3">
                <form action="" method="GET">
                    <input type="hidden" value="<?= $cat; ?>" name="category">
                    <input type="hidden" value="<?= $loc; ?>" name="location">
                    <label for="sort" style="font-weight: bold;">Sort:</label>
                    <select id="sort" name="sort" aria-label="Default select example" required class="px-2 py-1" style="border-radius: 6px; border-color: #4d80e4;" onchange="this.form.submit();">
                        <?php foreach ($filter as $c) : ?>
                            <?php if ($c['filterId'] == $sort) : ?>
                                <option selected value="<?= $c['filterId']; ?>"><?= $c['filterName']; ?></option>
                            <?php else : ?>
                                <option value="<?= $c['filterId']; ?>"><?= $c['filterName']; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </form>
            </div>
        <?php endif; ?>
    </div>
    <div class="row mx-auto justify-content-center mt-5" id="serviceCont">
        <?php if ($service) : ?>
            <?php $i = 1; ?>
            <?php foreach ($service as $a) : ?>
                <div class="col-12 col-md-6 col-lg-4 mb-2 ">
                    <a href="/Service/detail/<?= $a['slug']; ?>">
                        <div class="card mb-3 " style="max-width: 540px;">
                            <div class="row g-0 my-auto vertical-align ">
                                <div class="col-md-4 text-center ">
                                    <img src="/Img/<?= $a['up']; ?>" alt="picture" class="img-fluid" width="100px">
                                    <p class="card-text"><small class="text-muted"><?= $a['name']; ?></small></p>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-danger">IDR <?= $a['price']; ?></h5>
                                        <p class="card-text"><b>About <?= $a['category']; ?></b></p>
                                        <div class="mb-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                            </svg>
                                            <?php $rate = Service::GetAvgRate($a['sid']) ?>
                                            <?= ($rate->rate) ? number_to_amount($rate->rate, 2) : '0';
                                            ?>
                                        </div>
                                        <p class="card-text overflow-auto" style="height: 120px;"><?= $a['description']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 my-auto vertical-align">
                                <p class="btn btn-danger mb-0"><svg class="me-1 mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                        <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                                    </svg>Book Now</p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
        <?php else : ?>
            <div class="alert alert-danger" role="alert">
                Service Not Found!
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col">
                <?= $pager->links('service', 'service_pagination') ?>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>