<?= $this->extend('FrontEnd/templates/master'); ?>
<?= $this->section('title'); ?>
Detail post
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="position-relative mb-3 mt-3">
   <?php if ($post['post_type'] == 'post') : ?>
      <img class="img-fluid w-100" src="<?= base_url('img/' . $post['post_image']) ?>" style="object-fit: cover;">
   <?php endif ?>
   <div class="bg-white border border-top-0 p-4">
      <div class="mb-3">
         <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">Post</a>
         <a class="text-body" href=""><?= date('d F Y', strtotime($post['created_at'])) ?></a>
      </div>
      <h1 class="mb-3 text-secondary text-uppercase font-weight-bold"><?= $post['post_title'] ?></h1>
      <?= $post['post_content'] ?>
   </div>
   <div class="d-flex justify-content-between bg-white border border-top-0 p-4">
      <div class="d-flex align-items-center">
         <span>Administrator Website</span>
      </div>
      <div class="d-flex align-items-center">
         <span class="ml-3"><i class="far fa-eye mr-2"></i><?= $post['post_counter'] ?></span>
      </div>
   </div>
</div>
<div class="mb-3">
   <div class="section-title mb-0">
      <h4 class="m-0 text-uppercase font-weight-bold">0 Comments</h4>
   </div>
   <div class="bg-white border border-top-0 p-4">

   </div>
</div>

<div class="mb-3">
   <div class="section-title mb-0">
      <h4 class="m-0 text-uppercase font-weight-bold">Leave a comment</h4>
   </div>
   <div class="bg-white border border-top-0 p-4">
      <form>
         <div class="form-row">
            <div class="col-sm-6">
               <div class="form-group">
                  <label for="name">Name *</label>
                  <input type="text" class="form-control" id="name">
               </div>
            </div>
            <div class="col-sm-6">
               <div class="form-group">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" id="email">
               </div>
            </div>
         </div>
         <div class="form-group">
            <label for="website">Website</label>
            <input type="url" class="form-control" id="website">
         </div>

         <div class="form-group">
            <label for="message">Message *</label>
            <textarea id="message" cols="30" rows="5" class="form-control"></textarea>
         </div>
         <div class="form-group mb-0">
            <input type="submit" value="Leave a comment" class="btn btn-primary font-weight-semi-bold py-2 px-3">
         </div>
      </form>
   </div>
</div>
<?= $this->endSection(); ?>