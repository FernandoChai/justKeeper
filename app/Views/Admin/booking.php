<?= $this->extend('layoutAdmin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">
    <h1 class="h3 mb-2 text-gray-800">Booking History</h1>
    <a href="/Admin">
        <svg class="mb-4" xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left-circle" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8zm15 0A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-4.5-.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
        </svg>
    </a>
    <div class="row">
        <div class="col">
            <div class="card ">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="true" href="/Admin/<?= $id; ?>">User Detail</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/Admin/Service/<?= $id; ?>">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="/Admin/Booking/<?= $id; ?>" tabindex="-1" aria-disabled="true">Booking History</a>
                        </li>
                    </ul>
                </div>
                <div class="row my-3 mx-3">
                    <?php if ($book) : ?>
                        <div class="col-12">
                            <table class="table table-dark">
                                <thead>
                                    <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Service Profile</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Transaction Date</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Payment Method</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Location</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 + (5 * ($currPage - 1)) ?>
                                    <?php foreach ($book as $a) : ?>
                                        <tr>
                                            <th scope="row"><?= $i; ?></th>
                                            <td><img src="/Img/<?= $a['picture'] ?>" alt="picture" width="80px" class="rounded-circle"></td>
                                            <td><?= $a['name']; ?></td>
                                            <td><?= $a['date']; ?></td>
                                            <td><?= $a['address']; ?></td>
                                            <td><?= $a['paymentMethod']; ?></td>
                                            <td><?= $a['category']; ?></td>
                                            <td><?= $a['location']; ?></td>
                                            <td><?= $a['price']; ?></td>
                                            <td style="color: 
                                        <?php if ($a['statNum'] == 1) : ?> 
                                        <?= 'orange'; ?> 
                                        <?php elseif ($a['statNum'] == 2 || $a['statNum'] == 5) : ?> 
                                        <?= 'greenyellow'; ?> 
                                        <?php elseif ($a['statNum'] == 3) : ?> 
                                        <?= 'red'; ?> <?php elseif ($a['statNum'] == 4) : ?> 
                                        <?= 'deepskyblue'; ?> <?php endif; ?> ;">
                                                <?= $a['status']; ?></td>
                                        </tr>
                                        <?php $i++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                            <div class="row">
                                <div class="col">
                                    <?= $pager->links('book', 'service_pagination') ?>
                                </div>
                            </div>
                        </div>
                    <?php else : ?>
                        <div class="col-md text-center mt-3">
                            <div class="alert alert-danger" role="alert">
                                This user hasn't ordered any services yet
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>