<?= $this->extend('layoutAdmin/index'); ?>
<?= $this->section('content'); ?>
<?php helper('number'); ?>
<div class="container-fluid">
    <!-- Page Heading -->

    <h1 class="h3 mb-2 text-gray-800">Service</h1>
    <a href="/Admin">
        <svg class="mb-4" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
        </svg>
    </a>
    <div class="row">
        <div class="col">
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="true" href="/Admin/<?= $id; ?>">User Detail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/Admin/Service/<?= $id; ?>">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Admin/Booking/<?= $id; ?>" tabindex="-1" aria-disabled="true">Booking History</a>
                        </li>
                    </ul>
                </div>
                <div class="card-body mb-3">
                    <?php if ($service) : ?>
                        <img src="/Img/<?= ($service->up) ? $service->up : '-'; ?>" alt="picture" width="150px" class="rounded-circle mb-3">
                        <h5 class="card-title fw-bold"><?= $service->name; ?></h5>
                        <div class="mb-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                                <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                            </svg>
                            <p class="d-inline"><?= ($avgRate->rate) ? number_to_amount($avgRate->rate, 2) : '0'; ?></p>
                        </div>
                        <p class="card-text text-info">About <?= $service->category; ?></p>
                        <p class="card-text text-danger">IDR <?= $service->price; ?></p>
                        <p class="card-text"><img src="/Img/Logo/map-pin.png" alt="location" width="20px" class="me-1"><?= $service->location; ?>, Indonesia</p>
                        <p class="card-text" style="margin:0% 25% 0% 25%;"><?= $service->description; ?>, Indonesia</p>
                    <?php else : ?>
                        <div class="alert alert-danger mt-3" role="alert">
                            This user doesn't provide a service
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>