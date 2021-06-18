<?= $this->extend('layoutAdmin/index'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">User List</h1>

    <div class="row">
        <div class="col-6">
            <form action="" method="POST">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Input search keyword by username..." name="keyword">
                    <button class="btn btn-outline-secondary" type="submit" name="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    <?php if ($allUser) : ?>
        <div class="row">
            <div class="col-12">
                <table class="table table-dark">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Name</th>
                            <th scope="col">Dob</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Address</th>
                            <th scope="col">Picture</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1 + (5 * ($currPage - 1)) ?>
                        <?php foreach ($allUser as $a) : ?>
                            <tr>
                                <th scope="row"><?= $i; ?></th>
                                <td><?= $a['username']; ?></td>
                                <td><?= $a['email']; ?></td>
                                <td><?= ($a['name']) ? $a['name'] : '-'; ?></td>
                                <td><?= ($a['dob']) ? $a['dob'] : '-'; ?></td>
                                <td><?= ($a['gender']) ? $a['gender'] : '-'; ?></td>
                                <td><?= ($a['address']) ? $a['address'] : '-'; ?></td>
                                <td><img src="/Img/<?= ($a['picture']) ? $a['picture'] : '-'; ?>" alt="picture" width="80px" class="rounded-circle"></td>
                                <td><a href="Admin/<?= $a['id']; ?>" class="btn btn-info">Detail</a></td>
                            </tr>
                            <?php $i++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col">
                        <?= $pager->links('users', 'service_pagination') ?>
                    </div>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="col-md text-center mt-3">
            <div class="alert alert-danger" role="alert">
                No Data
            </div>
        </div>
    <?php endif; ?>
</div>
<?= $this->endSection(); ?>