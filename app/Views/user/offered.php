<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="/css/offered-style.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-warning" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-md-4 me-auto text-center ">
            <h1 class="mt-3">Offered Service</h1>
            <img src="/Img/<?= user()->picture; ?>" alt="profile" class="img-fluid mb-2">
            <h4><?= user()->username; ?></h4>
            <div class="row justify-content-center  ">
                <div class="col-md-4 mt-2">
                    <a href="/User/edit" class="btn btn-warning"><svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                        </svg>Edit Profile</a>
                </div>
            </div>
            <div class="row justify-content-center  ">
                <div class="col-md-6 mt-2">
                    <a href="/User/offered" class="btn btn-success"><svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M10.5 3.5a2.5 2.5 0 0 0-5 0V4h5v-.5zm1 0V4H15v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V4h3.5v-.5a3.5 3.5 0 1 1 7 0zm-.646 5.354a.5.5 0 0 0-.708-.708L7.5 10.793 6.354 9.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                        </svg>Offered Service</a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md">
                    <a href="/logout" class="btn btn-danger d-block" data-toggle="modal" data-target="#logoutModal"><svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                            <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                        </svg>Log out</a>
                </div>
            </div>
        </div>
        <?php if ($services) : ?>
            <div class="col-md mt-5">
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-md text-center my-auto">
                            <img src="/Img/<?= user()->picture ?>" class="img-fluid" alt="profile" width="80px">
                            <p class="card-text"><b><?= user()->name; ?></b></p>
                            <form action="" method="POST">
                                <?= csrf_field(); ?>
                                <?php if ($services->serviceStatus == 1) : ?>
                                    <button type="submit" name="offService" value="1" class="btn btn-danger" onclick="return confirm('Are you sure to turn off your service?')"><svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                                            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                                        </svg>Turn off service</button>
                                <?php else : ?>
                                    <button type="submit" name="onService" value="1" class="btn btn-success" onclick="return confirm('Are you sure to turn on your service?')"><svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-clockwise" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M8 3a5 5 0 1 0 4.546 2.914.5.5 0 0 1 .908-.417A6 6 0 1 1 8 2v1z" />
                                            <path d="M8 4.466V.534a.25.25 0 0 1 .41-.192l2.36 1.966c.12.1.12.284 0 .384L8.41 4.658A.25.25 0 0 1 8 4.466z" />
                                        </svg>Turn on service</button>
                                <?php endif; ?>

                            </form>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <h5 class="card-title">IDR <?= $services->price; ?></h5>
                                <p class="card-text"><b>About <?= $services->categoryValue; ?></b></p>
                                <p class="card-text"><b><?= $services->locationValue; ?></b></p>
                                <p class="card-text overflow-auto" style="height: 120px;"><?= $services->description; ?></p>
                            </div>
                        </div>
                        <div class="col-md text-center my-auto">
                            <a href="/Service/edit/<?= $services->slug; ?>" class="btn btn-warning mb-2"><svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                    <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                </svg>Edit</a>
                            <form action="/Service/<?= $services->id; ?>" method="POST">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this service?')"><svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                    </svg>Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col">
                        <h3>Confirmation order</h3>
                    </div>
                    <div class="row ">
                        <?php if ($order) : ?>
                            <div class="col-md">
                                <ul class="list-group list-group-flush">
                                    <?php foreach ($order as $b) : ?>
                                        <li class="list-group-item">
                                            <div class="row shadow-sm p-3 mb-5 bg-body rounded">
                                                <div class="col-md text-center">
                                                    <img src="/Img/<?= $b['picture']; ?>" alt="Profile Picture" width="80px">
                                                    <h5><?= $b['name']; ?></h5>
                                                </div>
                                                <div class="col-md">
                                                    <p><b>Date order: </b><?= $b['date']; ?></p>
                                                    <p><b>Payment type: </b><?= $b['paymentMethod']; ?></p>
                                                    <p><b>Service address: </b><?= $b['address']; ?></p>
                                                </div>
                                                <div class="col-md text-center">
                                                    <h5 class="text-danger">IDR <?= $b['price']; ?></h5>
                                                    <form action="/Booking/confirmation" method="POST">
                                                        <?= csrf_field(); ?>
                                                        <input type="hidden" name="bookId" value=<?= $b['id']; ?>>
                                                        <?php if ($b['status'] == 1) : ?>
                                                            <button type="submit" name="ends" value="1" class="btn mb-1" style="background-color: black; color: white;" onclick="return confirm('Are you sure to end this order?');"><svg class="me-1 mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-check" viewBox="0 0 16 16">
                                                                    <path d="M10.854 7.854a.5.5 0 0 0-.708-.708L7.5 9.793 6.354 8.646a.5.5 0 1 0-.708.708l1.5 1.5a.5.5 0 0 0 .708 0l3-3z" />
                                                                    <path d="M14 14V4.5L9.5 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2zM9.5 3A1.5 1.5 0 0 0 11 4.5h2V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h5.5v2z" />
                                                                </svg>End order</button>
                                                        <?php else : ?>
                                                            <button type="submit" name="confirms" class="btn btn-success mb-1" value="1" onclick="return confirm('Are you sure to confirm this service?');"><svg class="me-1 mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                                </svg>Confirm Order</button>
                                                            <button type="submit" name="cancels" class="btn btn-danger mb-1" value="1" onclick="return confirm('Are you sure to cancel this order?');"><svg class="me-1 mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-octagon" viewBox="0 0 16 16">
                                                                    <path d="M4.54.146A.5.5 0 0 1 4.893 0h6.214a.5.5 0 0 1 .353.146l4.394 4.394a.5.5 0 0 1 .146.353v6.214a.5.5 0 0 1-.146.353l-4.394 4.394a.5.5 0 0 1-.353.146H4.893a.5.5 0 0 1-.353-.146L.146 11.46A.5.5 0 0 1 0 11.107V4.893a.5.5 0 0 1 .146-.353L4.54.146zM5.1 1 1 5.1v5.8L5.1 15h5.8l4.1-4.1V5.1L10.9 1H5.1z" />
                                                                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z" />
                                                                </svg>Cancel Order</button>
                                                        <?php endif; ?>
                                                    </form>
                                                </div>
                                            </div>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php else : ?>
                            <div class="col-md text-center my-5 py-5">
                                <h4 class="text text-danger">You have no order yet</h4>
                            </div>
                        <?php endif ?>

                    </div>
                    <div class="row">
                        <div class="col">
                            <?= $pager->links('order', 'service_pagination') ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php else : ?>
            <div class="col-md mt-5 vertical-center text-center">
                <h1>You haven't provide your service yet</h1>
                <a href="/user/add" class="btn btn-primary">Add new Service</a>
            </div>
        <?php endif; ?>
    </div>
</div>
<!-- data-toggle="modal" data-target="#logoutModal" -->

<!-- logout modal -->
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