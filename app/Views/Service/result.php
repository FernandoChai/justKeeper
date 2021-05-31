<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="/css/result-style.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row justify-content-between">
        <div class="col-md-4">
            <h1 class="mt-2">Here what we got</h1>
        </div>
        <div class="col-md-4 text-center">
            <a href="/Service/search" class="mt-2 btn btn-secondary">Back to search</a>
        </div>
    </div>
    <div class="row mx-auto justify-content-center mt-3">
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
                                    <div class="card-body ">
                                        <h5 class="card-title">IDR <?= $a['price']; ?></h5>
                                        <p class="card-text"><b>About <?= $a['category']; ?></b></p>
                                        <p class="card-text overflow-auto" style="height: 120px;"><?= $a['description']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0 my-auto vertical-align">
                                <p class="btn btn-danger mb-0">Book Now</p>
                            </div>
                        </div>
                    </a>
                </div>
                <?php $i++; ?>
            <?php endforeach; ?>
        <?php else : ?>
            <h1>not found!</h1>
        <?php endif; ?>
    </div>
    <div class="row">
        <div class="col">
            <?= $pager->links('service', 'service_pagination') ?>
        </div>
    </div>
</div>

</div>


<?= $this->endSection(); ?>