<?= $this->extend('BackEnd/Layout/template'); ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Edit Quotes</h1>
        <ol class="breadcrumb mb-5">
            <li class="breadcrumb-item"><a href="/quote">Quotes</a></li>
            <li class="breadcrumb-item active">Form</li>
        </ol>

        <div class="card " style="max-width: 800px;">
            <div class=" card-body">
                <form action="/BackEnd/Quote/update/<?= $quote['id']; ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="quote" style="margin-bottom: 10px;">Post Title</label>
                        <textarea class="form-control" id="quote" name="quote" autofocus style="height: 100px"><?= $quote['quote']; ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="quote_by" class="form-label">Quote By</label>
                        <input type="text" class="form-control" id="quote_by" placeholder="" name="quote_by" value="<?= $quote['quote_by']; ?>">
                    </div>
                    <button type="submit" class="btn btn-success">Edit Data</button>
                </form>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>