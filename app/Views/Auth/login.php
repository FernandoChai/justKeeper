<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="/style/home.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Login | JustKeeper</title>

</head>

<body>

    <div class="body-container mt-5">
        <div class="text-center">
            <div class="row">
                <div class="col-md">
                    <h1 class="mt-3">
                        <img src="/Img/Logo/Logo2.png" alt="" width="400px" height="120px">
                    </h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md">
                    <p>Rent without hazzle only at JustKeeper!</p>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 shadow p-4 pb-5 bg-body rounded">
                <h3>Sign In</h3>
                <?= view('Myth\Auth\Views\_message_block') ?>
                <form action="<?= route_to('login') ?>" method="post">
                    <?= csrf_field() ?>

                    <?php if ($config->validFields === ['email']) : ?>
                        <div class="form-group mb-3">
                            <label for="login" class="form-label"><?= lang('Auth.email') ?></label>
                            <input type="email" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.email') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="form-group mb-3 ">
                            <label for="login" class="form-label"><?= lang('Auth.emailOrUsername') ?></label>
                            <input type="text" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" name="login" placeholder="<?= lang('Auth.emailOrUsername') ?>">
                            <div class="invalid-feedback">
                                <?= session('errors.login') ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="form-group mb-3">
                        <label for="password" class="form-label"><?= lang('Auth.password') ?></label>
                        <input type="password" name="password" class="form-control  <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>" placeholder="<?= lang('Auth.password') ?>">
                        <div class="invalid-feedback">
                            <?= session('errors.password') ?>
                        </div>
                    </div>

                    <?php if ($config->allowRemembering) : ?>
                        <div class="form-check mb-3">
                            <label class="form-check-label" class="form-label">
                                <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>>
                                <?= lang('Auth.rememberMe') ?>
                            </label>
                        </div>
                    <?php endif; ?>

                    <button type="submit" class="btn btn-primary d-grid gap-2 col-12 mx-auto">Login</button>
                </form>
                <?php if ($config->allowRegistration) : ?>
                    <p class="mt-3">Don't have any account? <a href="<?= route_to('register') ?>">Sign Up</a></p>
                <?php endif; ?>
                <?php if ($config->activeResetter) : ?>
                    <p><a href="<?= route_to('forgot') ?>"><?= lang('Auth.forgotYourPassword') ?></a></p>
                <?php endif; ?>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</body>

</html>