<?= $this->extend('BackEnd/Layout/template'); ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Insert Menu</h1>
        <ol class="breadcrumb mb-5">
            <li class="breadcrumb-item"><a href="/menu">Menu</a></li>
            <li class="breadcrumb-item active">Form</li>
        </ol>

        <div class="card " style="max-width: 800px;">
            <div class=" card-body">
                <form action="/BackEnd/Menu/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="menu_title" class="form-label">Menu Title</label>
                        <input type="text" class="form-control <?= ($validation->hasError('menu_title')) ? 'is-invalid' : ''; ?>" id="menu_title" placeholder="" name="menu_title" autofocus value="<?= old('menu_title'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('menu_title'); ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="menu_url" class="form-label">Menu Url</label>
                        <input type="text" class="form-control" id="menu_url" placeholder="" name="menu_url" value="<?= old('menu_url'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="menu_target" class="form-label">Menu Target</label>
                        <select class="form-select" name="menu_target" aria-label="Default select example">
                            <option value="_self" <?= old('menu_target') == "_self" ? "selected" : "" ?>>_self</option>
                            <option value="_blank" <?= old('menu_target') == "_blank" ? "selected" : "" ?>>_blank</option>
                            <option value="_parent" <?= old('menu_target') == "_parent" ? "selected" : "" ?>>_parent</option>
                            <option value="_top" <?= old('menu_target') == "_top" ? "selected" : "" ?>>_top</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="menu_type" class="form-label">Menu Type</label>
                        <input type="text" class="form-control" id="menu_type" placeholder="" name="menu_type" value="<?= old('menu_type'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="menu_parent_id" class="form-label">Menu Parent ID</label>
                        <input type="text" class="form-control" id="menu_parent_id" placeholder="" name="menu_parent_id" value="<?= old('menu_parent_id'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="menu_position" class="form-label">Menu Position</label>
                        <input type="text" class="form-control" id="menu_position" placeholder="" name="menu_position" value="<?= old('menu_position'); ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Insert Data</button>
                </form>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>