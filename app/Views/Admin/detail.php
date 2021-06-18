<?= $this->extend('layoutAdmin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <h1 class="h3 mb-2 text-gray-800">User Detail</h1>
    <a href="/Admin">
        <svg class="mb-4" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
        </svg>
    </a>
    <div class="row">
        <div class="col">
            <div class="card ">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="true" href="/Admin/<?= $userDetail['id']; ?>">User Detail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Admin/Service/<?= $userDetail['id']; ?>">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Admin/Booking/<?= $userDetail['id']; ?>" tabindex="-1" aria-disabled="true">Booking History</a>
                        </li>
                    </ul>
                </div>
                <div class="row my-3">
                    <div class="col-12 text-center">
                        <img src="/Img/<?= ($userDetail['picture']) ? $userDetail['picture'] : '-'; ?>" alt="picture" width="150px" class="rounded-circle">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-5" style="margin-left: 41%;">
                        <div class="mb-3">
                            <p class="d-inline fw-bold" style="margin-right: 40px;">Username</p>
                            <p class="d-inline">: <?= $userDetail['username']; ?></p>
                        </div>
                        <div class="mb-3">
                            <p class="d-inline fw-bold" style="margin-right: 26px;">Email</p>
                            <p class="d-inline ms-5">: <?= $userDetail['email']; ?></p>
                        </div>
                        <div class="mb-3">
                            <p class="d-inline fw-bold" style="margin-right: 25px;">Name</p>
                            <p class="d-inline ms-5">: <?= $userDetail['name']; ?></p>
                        </div>
                        <div class="mb-3">
                            <p class="d-inline me-1 fw-bold">Date of Birth</p>
                            <p class="d-inline ms-3">: <?= ($userDetail['dob']) ? $userDetail['dob'] : '-'; ?></p>
                        </div>
                        <div class="mb-3">
                            <p class="d-inline me-5 fw-bold">Gender</p>
                            <p class="d-inline ms-3">: <?= ($userDetail['gender']) ? $userDetail['gender'] : '-'; ?></p>
                        </div>
                        <div class="mb-3">
                            <p class="d-inline me-5 fw-bold">Address</p>
                            <p class="d-inline ms-2">: <?= ($userDetail['address']) ? $userDetail['address'] : '-'; ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>