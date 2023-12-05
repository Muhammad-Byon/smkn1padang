<?= $this->extend('BackEnd/Layout/template'); ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4" style="border: 1px solid black;">
        <h1 class="mt-4">Posts Menu</h1>
        <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a href="/posts">Data Posts</a></li>
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
                Data Posts
            </div>
            <div class="card-body">

                <!-- Responsif Tabel Wrapper -->
                <div class="table-responsive">

                    <table id="datatablesSimple" class="table" style="border: 1px solid black; width:100%;">
                        <a href="/BackEnd/Posts/create/" class="btn btn-primary mb-3"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Insert New Posts</a>
                        <thead>
                            <tr>
                                <!-- Contoh mengatur lebar kolom -->
                                <th style="width:5%;">Id</th>
                                <th style="width:10%;">Posts Title</th>
                                <!-- sisanya... -->
                                <th>Posts Content</th>
                                <th>Posts Image</th>
                                <th>Posts Author</th>
                                <th>Posts Categori</th>
                                <th>Posts Type</th>
                                <th>Posts Status</th>
                                <th>Posts Visibility</th>
                                <th>Posts Comment Status</th>
                                <th>Posts Slugs</th>
                                <th>Posts Tags</th>
                                <th>Posts Counter</th>
                                <th>Acction</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($posts as $p) : ?>
                                <tr>
                                    <td><?= $p['id'] ?></td>
                                    <td><?= $p['post_title'] ?></td>
                                    <td><?= $p['post_content'] ?></td>
                                    <td><?= $p['post_image'] ?></td>
                                    <td><?= $p['post_author'] ?></td>
                                    <td><?= $p['post_categories'] ?></td>
                                    <td><?= $p['post_type'] ?></td>
                                    <td><?= $p['post_status'] ?></td>
                                    <td><?= $p['post_visibility'] ?></td>
                                    <td><?= $p['post_comment_status'] ?></td>
                                    <td><?= $p['post_slug'] ?></td>
                                    <td><?= $p['post_tags'] ?></td>
                                    <td><?= $p['post_counter'] ?></td>
                                    <td>
                                        <a href="/BackEnd/Posts/edit/<?= $p['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                        <a href="/BackEnd/Posts/delete/<?= $p['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>

                </div> <!-- End of .table-responsive -->

            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>