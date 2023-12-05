<?= $this->extend('BackEnd/Layout/template'); ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">

    <div class="container-fluid px-4" style="border: 1px solid black;">
        <h1 class="mt-4">Image Sliders</h1>
        <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a href="/image">Image Sliders</a></li>
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
                Data ImageSliders
            </div>
            <div class="card-body">
                <table id="datatablesSimple" style="border: 1px solid black;">
                    <a href="/BackEnd/ImageSliders/create/" class="btn btn-primary mb-3"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Insert Image</a>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Caption</th>
                            <th>Image</th>
                            <th>Acction</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($image_sliders as $i) : ?>
                            <tr>
                                <td><?= $i['id'] ?></td>
                                <td><?= $i['caption'] ?></td>
                                <td><?= $i['image'] ?></td>
                                <td>
                                    <a href="/BackEnd/ImageSliders/edit/<?= $i['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    <a href="/BackEnd/ImageSliders/delete/<?= $i['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>