<?= $this->extend('FrontEnd/templates/master'); ?>
<?= $this->section('title'); ?>
Home page
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="row">
   <div class="col-12">
      <div class="section-title">
         <h4 class="m-0 text-uppercase font-weight-bold">Tulisan terbaru</h4>
         <!-- <a class="text-secondary font-weight-medium text-decoration-none" href="">View All</a> -->
      </div>
   </div>
   <?php foreach ($posts as $post) : ?>
      <div class="col-lg-6">
         <div class="position-relative mb-3">
            <img class="img-fluid w-100" src="<?= base_url('img/' . $post->post_image) ?>" style="object-fit: cover;">
            <div class="bg-white border border-top-0 p-4">
               <div class="mb-2">
                  <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="#"><?= date('d F Y', strtotime($post->created_at)) ?></a>
               </div>
               <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="<?= base_url('read/' . $post->post_slug) ?>" style="font-size: 14px;"><?= $post->post_title ?></a>
            </div>
            <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
               <div class="d-flex align-items-center">
                  <small>Administrator Website</small>
               </div>
               <div class="d-flex align-items-center">
                  <small class="ml-3"><i class="far fa-eye mr-2"></i><?= $post->post_counter ?></small>
               </div>
            </div>
         </div>
      </div>
   <?php endforeach ?>
</div>

<?= $this->endSection(); ?>