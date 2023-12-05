<?= $this->extend('BackEnd/Layout/template'); ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Insert Posts</h1>
        <ol class="breadcrumb mb-5">
            <li class="breadcrumb-item"><a href="/posts">Posts</a></li>
            <li class="breadcrumb-item active">Form</li>
        </ol>

        <div class="card " style="max-width: 800px;">
            <div class=" card-body">
                <form action="/BackEnd/Posts/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="post_title" style="margin-bottom: 10px;">Post Title</label>
                        <textarea class="form-control" id="post_title" name="post_title" autofocus style="height: 100px"><?= old('post_title'); ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="post_content" style="margin-bottom: 10px;">Post Content</label>
                        <textarea class="form-control summernote" id="post_content" name="post_content" style="height: 100px"><?= old('post_content'); ?></textarea>
                    </div>


                    <div class="mb-3">
                        <label for="post_image" class="form-label">Post Image</label>
                        <input type="file" class="form-control" id="post_image" placeholder="" name="post_image" value="<?= old('post_image'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="post_author" class="form-label">Post Author</label>
                        <input type="text" class="form-control" id="post_author" placeholder="0" name="post_author" value="<?= old('post_author'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="post_categories" class="form-label">Post Categori</label>
                        <input type="text" class="form-control" id="post_categories" placeholder="" name="post_categories" value="<?= old('post_categories'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="post_type" class="form-label">Post Type</label>
                        <input type="text" class="form-control" id="post_type" placeholder="" name="post_type" value="<?= old('post_type'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="post_status" class="form-label">Post Status</label>
                        <select class="form-select" name="post_status" aria-label="Default select example">
                            <option value="publish" <?= old('post_status') == "publish" ? "selected" : "" ?>>Publish</option>
                            <option value="draft" <?= old('post_status') == "draft" ? "selected" : "" ?>>Draft</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="post_visibility" class="form-label">Post Visibility</label>
                        <select class="form-select" name="post_visibility" aria-label="Default select example">
                            <option value="public" <?= old('post_visibility') == "public" ? "selected" : "" ?>>Public</option>
                            <option value="private" <?= old('post_visibility') == "private" ? "selected" : "" ?>>Private</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="post_comment_status" class="form-label d-block">Post Comment Status</label>

                        <div class="form-check d-inline-block mr-2">
                            <input type="radio" class="form-check-input" id="post_comment_statusOpen" name="post_comment_status" value="open">
                            <label class="form-check-label" for="post_comment_statusOpen">Open</label>
                        </div>
                        <div class="form-check d-inline-block">
                            <input type="radio" class="form-check-input" id="post_comment_statusClose" name="post_comment_status" value="close">
                            <label class="form-check-label" for="post_comment_statusClose">Close</label>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="post_slug" class="form-label">Post Slug</label>
                        <input type="text" class="form-control" id="post_slug" placeholder="" name="post_slug" value="<?= old('post_slug'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="post_tags" class="form-label">Post Tags</label>
                        <input type="text" class="form-control" id="post_tags" placeholder="" name="post_tags" value="<?= old('post_tags'); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="post_counter" class="form-label">Post Counter</label>
                        <input type="text" class="form-control" id="post_counter" placeholder="0" name="post_counter" value="<?= old('post_counter'); ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Insert Data</button>
                </form>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>