<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="/css/add-style.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container ">
    <div class="row mt-5">
        <div class="col-md">
            <h1>Review</h1>
            <img src="/Img/Logo/5.jpg" class="img-fluid" alt="logo">
        </div>
        <div class="col-md vertical-center">
            <form action="/service/comment/<?= $slug; ?>" method="post">
                <input type="hidden" value="<?= $bookId; ?>" name="bookId">
                <?= csrf_field() ?>
                <div class="mb-3">
                    <label class="form-label" for="rate">Select Review Rate</label>
                    <select class="form-select <?= ($validation->hasError('rate')) ? 'is-invalid' : ''; ?>" id="rate" name="rate" autofocus>
                        <?php foreach ($review as $r) : ?>
                            <?php if ($r['rate'] == 0) : ?>
                                <?php $rate = "Choose..."; ?>
                            <?php else : ?>
                                <?php $rate = $r['rate'] ?>
                            <?php endif; ?>
                            <?php if ($r['rate'] == old('rate')) : ?>
                                <option selected value="<?= $r['rate']; ?>"><?= $rate; ?></option>
                            <?php else : ?>
                                <option value="<?= $r['rate']; ?>"><?= $rate; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        <?= $validation->getError('rate'); ?>
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label" for="comment">Comment</label>
                    <div class="form-floating">
                        <textarea class="form-control <?= ($validation->hasError('comment')) ? 'is-invalid' : ''; ?>" id="comment" style="height: 100px; resize: none;" name="comment"><?= old('comment'); ?></textarea>
                        <div id="validationServerUsernameFeedback" class="invalid-feedback">
                            <?= $validation->getError('comment'); ?>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary d-grid gap-2 col-12 mx-auto">Post Review</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>