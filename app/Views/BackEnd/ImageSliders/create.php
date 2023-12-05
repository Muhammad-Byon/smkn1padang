<?= $this->extend('BackEnd/Layout/template'); ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Insert Image</h1>
        <ol class="breadcrumb mb-5">
            <li class="breadcrumb-item"><a href="/image">Image Sliders</a></li>
            <li class="breadcrumb-item active">Form</li>
        </ol>

        <div class="card " style="max-width: 800px;">
            <div class=" card-body">
                <form action="/BackEnd/ImageSliders/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="caption" class="form-label">Caption</label>
                        <input type="text" class="form-control" id="caption" placeholder="" name="caption" autofocus value="<?= old('caption'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control" id="image" placeholder="" name="image" value="<?= old('image'); ?>">
                    </div>

                    <button type="submit" class="btn btn-success">Insert Data</button>
                </form>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>