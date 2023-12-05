<?= $this->extend('BackEnd/Layout/template'); ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Insert Modules</h1>
        <ol class="breadcrumb mb-5">
            <li class="breadcrumb-item"><a href="/module">Modules</a></li>
            <li class="breadcrumb-item active">Form</li>
        </ol>

        <div class="card " style="max-width: 800px;">
            <div class=" card-body">
                <form action="/BackEnd/Module/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="module_name" class="form-label">Module Name</label>
                        <input type="text" class="form-control <?= ($validation->hasError('module_name')) ? 'is-invalid' : ''; ?>" id="module_name" placeholder="" name="module_name" autofocus value="<?= old('module_name'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('module_name'); ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="module_description" class="form-label">Module Description</label>
                        <input type="text" class="form-control" id="module_description" placeholder="" name="module_description" value="<?= old('module_description'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="module_url" class="form-label">Module Url</label>
                        <input type="text" class="form-control" id="module_url" placeholder="" name="module_url" value="<?= old('module_url'); ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Insert Data</button>
                </form>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>