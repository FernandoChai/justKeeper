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
            <img src="/Img/Logo/thumbnail.jpg" class="img-fluid" alt="logo" width="70%">
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
                <button type="submit" class="btn btn-primary  col-12 mx-auto"><svg class="mb-1 me-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                    </svg>Search</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>