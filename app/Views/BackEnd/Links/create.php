<?= $this->extend('BackEnd/Layout/template'); ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Insert Data Links</h1>
        <ol class="breadcrumb mb-5">
            <li class="breadcrumb-item"><a href="/links">Data Links</a></li>
            <li class="breadcrumb-item active">Form</li>
        </ol>

        <div class="card " style="max-width: 800px;">
            <div class=" card-body">
                <form action="/BackEnd/Links/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="link_title" class="form-label">Link Title</label>
                        <input type="text" class="form-control <?= ($validation->hasError('link_title')) ? 'is-invalid' : ''; ?>" id="link_title" placeholder="" name="link_title" autofocus value="<?= old('link_title'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('link_title'); ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="link_url" class="form-label">Link Url</label>
                        <input type="text" class="form-control" id="link_url" placeholder="" name="link_url" value="<?= old('link_url'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="link_target" class="form-label">Link Target</label>
                        <select class="form-select" name="link_target" aria-label="Default select example">
                            <option value="_blank" <?= old('link_target') == "_blank" ? "selected" : "" ?>>_blank</option>
                            <option value="_self" <?= old('link_target') == "_self" ? "selected" : "" ?>>_self</option>
                            <option value="_parent" <?= old('link_target') == "_parent" ? "selected" : "" ?>>_parent</option>
                            <option value="_top" <?= old('link_target') == "_top" ? "selected" : "" ?>>_top</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="link_image" class="form-label">Link Image</label>
                        <input type="file" class="form-control" id="link_image" placeholder="" name="link_image" value="<?= old('link_image'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="link_type" class="form-label">Link Type</label>
                        <select class="form-select" name="link_type" aria-label="Default select example">
                            <option value="link" <?= old('link_type') == "link" ? "selected" : "" ?>>link</option>
                            <option value="banner" <?= old('link_type') == "banner" ? "selected" : "" ?>>banner</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Insert Data</button>
                </form>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>