<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="/css/result-style.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container ">
    <div class="row text-center">
        <div class="col-md">
            <h1>My Booking</h1>
        </div>
        <div class="col-md">
            <a href="/Service/search" class="btn btn-danger">Add new Booking</a>
        </div>
    </div>
    <div class="row mt-3">
        <?php if ($book) : ?>
            <div class="col-md mt-5">
                <ul class="list-group list-group-flush">
                    <?php foreach ($book as $b) : ?>
                        <li class="list-group-item">
                            <div class="row shadow-sm p-3 mb-5 bg-body rounded">
                                <div class="col-md text-center">
                                    <p><b>Book Id: </b><?= $b['id']; ?></p>
                                    <img src="/Img/<?= $b['picture']; ?>" alt="Profile Picture" width="80px">
                                    <h5><?= $b['name']; ?></h5>
                                </div>
                                <div class="col-md">
                                    <p><b>Service Type: </b><?= $b['category']; ?></p>
                                    <p><b>Service address: </b><?= $b['address']; ?></p>
                                    <p><b>Transaction Date: </b><?= $b['date']; ?></p>
                                </div>
                                <div class="col-md">
                                    <h5 class="text-danger">IDR <?= $b['price']; ?></h5>
                                    <h1><?= $b['status']; ?></h1>
                                    <?php if ($b['statNum'] == 2) : ?>
                                        <form action="/Service/review/<?= $b['slug']; ?>" method="POST">
                                            <?= csrf_field() ?>
                                            <input type="hidden" value="<?= $b['id']; ?>" name="bookId">
                                            <button type="submit" class="btn btn-warning">Post a review</button>
                                        </form>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php else : ?>
            <div class="col-md text-center my-5 py-5">
                <h4>You have no booking yet</h4>
            </div>
        <?php endif ?>
    </div>
    <div class="row">
        <div class="col">
            <?= $pager->links('book', 'service_pagination') ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>