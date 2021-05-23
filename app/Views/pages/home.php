<?= $this->extend('layout/template'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="/css/home-style.css">
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <p style="color: red;">We let you rent anything, anytime.</p>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <h1>What do you want to rent?</h1>
        </div>
    </div>
</div>

<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <a href="/Pages/search">
                <div class="input-group shadow p-3 mb-5 bg-body">
                    <p class="rounded form-control ps-4">Chef, Electronic services, House keeper, etc. </p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="50px" fill="currentColor" class="bi bi-arrow-right-square-fill justify-content-end index" viewBox="0 0 16 16">
                        <path d="M0 14a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12zm4.5-6.5h5.793L8.146 5.354a.5.5 0 1 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.293 8.5H4.5a.5.5 0 0 1 0-1z" />
                    </svg>
                </div>
            </a>
        </div>
    </div>
    <div class="row justify-content-center image-home">
        <div class="col-lg">
            <img src="/Img/Logo/1.jpg" class="img-fluid mx-auto d-block" width="100%" alt="Sampul">
        </div>
    </div>
</div>

<?= $this->endSection(); ?>