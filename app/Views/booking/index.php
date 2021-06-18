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
            <a href="/Service/search" class="btn btn-danger"><svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                </svg>Add new Booking</a>
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
                                    <h1 style="color: <?php if ($b['statNum'] == 1) : ?>
                                    <?= 'orange'; ?>
                                    <?php elseif ($b['statNum'] == 2 || $b['statNum'] == 5) : ?>
                                    <?= 'green'; ?>
                                    <?php elseif ($b['statNum'] == 3) : ?>
                                    <?= 'red'; ?>
                                    <?php elseif ($b['statNum'] == 4) : ?>
                                    <?= 'black'; ?>
                                    <?php endif; ?>
                                    ;"> <?= $b['status']; ?></h1>
                                    <?php if ($b['statNum'] == 2) : ?>
                                        <form action="/Service/review/<?= $b['slug']; ?>" method="POST">
                                            <?= csrf_field() ?>
                                            <input type="hidden" value="<?= $b['id']; ?>" name="bookId">
                                            <button type="submit" class="btn btn-warning"><svg class="me-1 mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-mailbox" viewBox="0 0 16 16">
                                                    <path d="M4 4a3 3 0 0 0-3 3v6h6V7a3 3 0 0 0-3-3zm0-1h8a4 4 0 0 1 4 4v6a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V7a4 4 0 0 1 4-4zm2.646 1A3.99 3.99 0 0 1 8 7v6h7V7a3 3 0 0 0-3-3H6.646z" />
                                                    <path d="M11.793 8.5H9v-1h5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.354-.146l-.853-.854zM5 7c0 .552-.448 0-1 0s-1 .552-1 0a1 1 0 0 1 2 0z" />
                                                </svg>Post a review</button>
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