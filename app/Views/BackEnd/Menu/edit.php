<?= $this->extend('BackEnd/Layout/template'); ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Data Menu</h1>
        <ol class="breadcrumb mb-5">
            <li class="breadcrumb-item"><a href="/menu">Menu</a></li>
            <li class="breadcrumb-item active">Form</li>
        </ol>

        <div class="card " style="max-width: 800px;">
            <div class=" card-body">
                <form action="/BackEnd/Menu/update/<?= $menu['id']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="menu_title" class="form-label">Menu Title</label>
                        <input type="text" class="form-control <?= ($validation->hasError('menu_title')) ? 'is-invalid' : ''; ?>" id="menu_title" placeholder="" name="menu_title" autofocus value="<?= $menu['menu_title']; ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('menu_title'); ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="menu_url" class="form-label">Menu Url</label>
                        <input type="text" class="form-control" id="menu_url" placeholder="" name="menu_url" value="<?= $menu['menu_url']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="menu_target" class="form-label">Menu Target</label>
                        <select class="form-select" name="menu_target" aria-label="Default select example">
                            <option value="_self" <?= $menu['menu_target'] == "_self" ? "selected" : "" ?>>_self</option>
                            <option value="_blank" <?= $menu['menu_target'] == "_blank" ? "selected" : "" ?>>_blank</option>
                            <option value="_parent" <?= $menu['menu_target'] == "_parent" ? "selected" : "" ?>>_parent</option>
                            <option value="_top" <?= $menu['menu_target'] == "_top" ? "selected" : "" ?>>_top</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="menu_type" class="form-label">Menu Type</label>
                        <input type="text" class="form-control" id="menu_type" placeholder="" name="menu_type" value="<?= $menu['menu_type']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="menu_parent_id" class="form-label">Menu Parent ID</label>
                        <input type="text" class="form-control" id="menu_parent_id" placeholder="" name="menu_parent_id" value="<?= $menu['menu_parent_id']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="menu_position" class="form-label">Menu Position</label>
                        <input type="text" class="form-control" id="menu_position" placeholder="" name="menu_position" value="<?= $menu['menu_position']; ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Edit Data</button>
                </form>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>