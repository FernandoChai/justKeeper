<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="/css/add-style.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="container ">
    <div class="row">
        <div class="col-md">
            <h1>Search Service</h1>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md text-center ">
            <img src="/Img/Logo/2.jpg" class="img-fluid" alt="logo">
        </div>
        <div class="col-md vertical-center">
            <form action="/service/result" method="GET">
                <div class="mb-3">
                    <label class="form-label" for="category">Select Category</label>
                    <select class="form-select <?= ($validation->hasError('category')) ? 'is-invalid' : ''; ?>" id="category" name="category" autofocus>
                        <?php foreach ($category as $c) : ?>
                            <?php if ($c['categoryId'] == old('category')) : ?>
                                <option selected value="<?= $c['categoryId']; ?>"><?= $c['categoryValue']; ?></option>
                            <?php else : ?>
                                <option value="<?= $c['categoryId']; ?>"><?= $c['categoryValue']; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        <?= $validation->getError('category'); ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="location">Select Location</label>
                    <select class="form-select <?= ($validation->hasError('location')) ? 'is-invalid' : ''; ?>" id="location" name="location">
                        <?php foreach ($location as $l) : ?>
                            <?php if ($l['locationId'] == old('location')) : ?>
                                <option selected value="<?= $l['locationId']; ?>"><?= $l['locationValue']; ?></option>
                            <?php else : ?>
                                <option value="<?= $l['locationId']; ?>"><?= $l['locationValue']; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        <?= $validation->getError('location'); ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary d-grid gap-2 col-12 mx-auto">Search</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>