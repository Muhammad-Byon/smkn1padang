<?= $this->extend('BackEnd/Layout/template'); ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">

    <div class="container-fluid px-4" style="border: 1px solid black;">
        <h1 class="mt-4">Data Menu</h1>
        <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a href="/menu">Data Menu</a></li>
            <li class="breadcrumb-item active">Tables</li>
        </ol>
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <div class="card mb-4" style="background-color: #E3F4F4;">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Data Menu
            </div>
            <div class="card-body">
                <table id="datatablesSimple" style="border: 1px solid black;">
                    <a href="/BackEnd/Menu/create/" class="btn btn-primary mb-3"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Insert New Menu</a>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Menu Title</th>
                            <th>Menu Url</th>
                            <th>Menu Target</th>
                            <th>Menu Type</th>
                            <th>Menu Parent Id</th>
                            <th>Menu Position</th>
                            <th>Acction</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($menu as $m) : ?>
                            <tr>
                                <td><?= $m['id'] ?></td>
                                <td><?= $m['menu_title'] ?></td>
                                <td><?= $m['menu_url'] ?></td>
                                <td><?= $m['menu_target'] ?></td>
                                <td><?= $m['menu_type'] ?></td>
                                <td><?= $m['menu_parent_id'] ?></td>
                                <td><?= $m['menu_position'] ?></td>
                                <td>
                                    <a href="/BackEnd/Menu/edit/<?= $m['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    <a href="/BackEnd/Menu/delete/<?= $m['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>