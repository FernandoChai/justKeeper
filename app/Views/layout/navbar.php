<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand text-light fw-bold" href="<?= base_url('/'); ?>">Just<span class="text-danger">Rent</span></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php if (uri_string() == '/') {
                                            echo 'active';
                                        }; ?>" aria-current="page" href="<?= base_url('/'); ?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if (uri_string() == 'pages/about') {
                                            echo 'active';
                                        }; ?> ?>" href="<?= base_url('/pages/about'); ?>">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if (uri_string() == 'Booking') {
                                            echo 'active';
                                        }; ?>" href="<?= base_url('/Booking'); ?>">Booking</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php if (uri_string() == 'User') {
                                            echo 'active';
                                        }; ?>" href="<?= base_url('/User'); ?>">Profile
                        <?php if ($num > 0) : ?>
                            <span class="badge bg-danger">
                                <?= $num; ?>
                            </span>
                        <?php endif; ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>