<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="/css/checkout-style.css">
<?= $this->endSection(); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col-md">
            <h1>Checkout</h1>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-md">
            <form action="/Service/save" method="POST">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $service->slug; ?>">
                <input type="hidden" name="id" value="<?= $service->id; ?>">
                <div class="row mb-3">
                    <div class="col">
                        <div class="mb-3">
                            <label class="form-label" for="price">
                                <h5>Address</h5>
                            </label>
                            <input type="text" class="form-control <?= ($validation->hasError('address')) ? 'is-invalid' : ''; ?>" id="address" name="address" placeholder="address..." value="<?= old('address'); ?>" autofocus>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?= $validation->getError('address'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="row text-center">
                        <div class="col">
                            <div class="mb-3">
                                <h5>Ordered Service</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <h5>Category</h5>
                            </div>
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <h5>Price</h5>
                            </div>
                        </div>
                    </div>
                    <div class="row text-center border border border-2 py-3 vertical-center">
                        <div class="col">
                            <img src="/Img/<?= $service->up; ?>" alt="" width="100px" class="circle me-2">
                            <p class="d-inline"><?= $service->name; ?></p>
                        </div>
                        <div class="col">
                            <p><?= $service->category; ?></p>
                        </div>
                        <div class="col">
                            <p>IDR <?= $service->price; ?></p>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="col-md">
                        <div class="mb-3">
                            <label class="form-label" for="paymentMethod">Payment Method</label>
                            <select class="form-select <?= ($validation->hasError('paymentMethod')) ? 'is-invalid' : ''; ?>" id="paymentMethod" name="paymentMethod">
                                <option selected value="0">Choose...</option>
                                <option value="Cash">Cash</option>
                                <!-- <option value="Electronic Service">Electronic Service</option>
                                <option value="House Keeper">House Keeper</option> -->
                            </select>
                            <div id="validationServerUsernameFeedback" class="invalid-feedback">
                                <?= $validation->getError('paymentMethod'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 offset-md-3 mt-3">
                        <h3>Total Price</h3>
                        <h5 class="ms-3 text-danger">IDR <?= $service->price; ?></h5>
                        <button type="submit" class="btn btn-danger px-5 mt-3"><svg class="me-1 mb-1" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag" viewBox="0 0 16 16">
                                <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z" />
                            </svg>Checkout</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>