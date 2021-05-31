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
                    <a href="/User/edit" class="btn btn-warning">Edit Profile</a>
                </div>
            </div>
            <div class="row justify-content-center  ">
                <div class="col-md-6 mt-2">
                    <a href="/User/offered" class="btn btn-success">Offered Service</a>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-md">
                    <a href="/logout" class="btn btn-danger d-block">Log out</a>
                </div>
            </div>
        </div>
        <?php if ($services) : ?>
            <div class="col-md mt-5">
                <div class="card mb-3" style="max-width: 100%;">
                    <div class="row g-0">
                        <div class="col-md text-center my-auto">
                            <img src="/Img/<?= user()->picture ?>" class="img-fluid" alt="profile" width="80px">
                            <p class="card-text"><b><?= user()->username; ?></b></p>
                            <form action="" method="POST">
                                <?= csrf_field(); ?>
                                <?php if ($services->serviceStatus == 1) : ?>
                                    <button type="submit" name="offService" value="1" class="btn btn-danger" onclick="return confirm('Are you sure to turn off your service?')">Turn off service</button>
                                <?php else : ?>
                                    <button type="submit" name="onService" value="1" class="btn btn-success" onclick="return confirm('Are you sure to turn on your service?')">Turn on service</button>
                                <?php endif; ?>

                            </form>
                        </div>
                        <div class="col-md">
                            <div class="card-body">
                                <h5 class="card-title">IDR <?= $services->price; ?></h5>
                                <p class="card-text"><b>About <?= $services->categoryValue; ?></b></p>
                                <p class="card-text"><b><?= $services->locationValue; ?></b></p>
                                <p class="card-text"><?= $services->description; ?></p>
                            </div>
                        </div>
                        <div class="col-md text-center my-auto">
                            <a href="/Service/edit/<?= $services->slug; ?>" class="btn btn-warning mb-2">Edit</a>
                            <form action="/Service/<?= $services->id; ?>" method="POST">
                                <?= csrf_field(); ?>
                                <input type="hidden" name="_method" value="DELETE">
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete?')">Delete</button>
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
                                                            <button type="submit" name="ends" value="1" class="btn mb-1" style="background-color: black; color: white;" onclick="return confirm('Are you sure to end this order?');">End order</button>
                                                        <?php else : ?>
                                                            <button type="submit" name="confirms" class="btn btn-success mb-1" value="1" onclick="return confirm('Are you sure to confirm this service?');">Confirm Order</button>
                                                            <button type="submit" name="cancels" class="btn btn-danger mb-1" value="1" onclick="return confirm('Are you sure to cancel this order?');">Cancel Order</button>
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
                                <h4>You have no order yet</h4>
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


<?= $this->endSection(); ?>