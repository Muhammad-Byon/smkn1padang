<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="utf-8">
   <title>SMKN 1 Padang | <?= $this->renderSection('title'); ?></title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <meta content="Free HTML Templates" name="keywords">
   <meta content="Free HTML Templates" name="description">

   <!-- Favicon -->
   <link href="<?= base_url('fe') ?>/img/smk1padang.ico" rel="icon">

   <!-- Google Web Fonts -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

   <!-- Font Awesome -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

   <!-- Libraries Stylesheet -->
   <link href="<?= base_url('fe') ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

   <!-- Customized Bootstrap Stylesheet -->
   <link href="<?= base_url('fe') ?>/css/style.css" rel="stylesheet">

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
   <!-- Topbar Start -->
   <div class="container-fluid d-none d-lg-block">
      <div class="row align-items-center bg-dark px-lg-5">
         <div class="col-lg-9">
            <nav class="navbar navbar-expand-sm bg-dark p-0">
               <ul class="navbar-nav ml-n2">
                  <li class="nav-item border-right border-secondary">
                     <a class="nav-link text-body small" href="#"><?= date('l, d F Y') ?></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-body small" href="/admin">Login</a>
                  </li>
               </ul>
            </nav>
         </div>
         <div class="col-lg-3 text-right d-none d-md-block">
            <nav class="navbar navbar-expand-sm bg-dark p-0">
               <ul class="navbar-nav ml-auto mr-n2">
                  <li class="nav-item">
                     <a class="nav-link text-body" href="#"><small class="fab fa-twitter"></small></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-body" href="#"><small class="fab fa-facebook-f"></small></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-body" href="#"><small class="fab fa-linkedin-in"></small></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-body" href="#"><small class="fab fa-instagram"></small></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-body" href="#"><small class="fab fa-youtube"></small></a>
                  </li>
               </ul>
            </nav>
         </div>
      </div>
      <div class="row align-items-center bg-white py-3 px-lg-5">
         <div class="col-lg-1">
            <a href="<?= base_url('/') ?>" class="navbar-brand p-0 d-none d-lg-block">
               <img src="/smk1padang.png" alt="Small Image" width="90" height="90" class="me-2">
            </a>
         </div>
         <div class="col-lg-5">
            <h6 class="m-0 display-4 text-uppercase text-primary" style="font-size: 30px;">
               <b>SMKN 1 Padang</b>
            </h6>
            <p><b>MEMBERI YANG TERBAIK MENJADI YANG TERBAIK</b></p>
         </div>
         <div class="col-lg-6">
            <ul class="nav">
               <li class="nav-item"><a class="nav-link active" style="color: #000000; font-size: 15px;"><i class="bi bi-envelope-at-fill mx-1"></i>smkn1pdgsumbar@gmail.com</a></li>
               <li class="nav-item"><a class="nav-link active" style="color: #000000; font-size: 15px;"><i class="bi bi-telephone-forward-fill mx-2"></i>0751-27917</a></li>
               <li class="nav-item"><a class="nav-link active" style="color: #000000; font-size: 15px;"><i class="bi bi-wifi mx-2"></i>RSS</a></li>
               <li class="nav-item"><a class="nav-link active" style="color: #000000; font-size: 15px;"><i class="bi bi-search mx-2"></i>Pencarian</a></li>
            </ul>
         </div>
      </div>

   </div>
   <!-- Topbar End -->


   <!-- Navbar Start -->
   <div class="container-fluid p-0">
      <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-5">
         <a href="<?= base_url('/') ?>" class="navbar-brand d-block d-lg-none">
            <h1 class="m-0 display-4 text-uppercase text-primary" style="font-size: 30px;">SMKN 1 Padang</span></h1>
         </a>
         <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
         </button>
         <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
            <?php

            use App\Models\PostsModel;

            $post = new PostsModel();
            ?>
            <div class="navbar-nav mr-auto py-0">
               <a href="<?= base_url('/') ?>" class="nav-item nav-link active">Home</a>
               <a href="<?= base_url('read/' . $post->where('id', 49)->first()['post_slug']) ?>" class="nav-item nav-link">Kategori</a>
               <a href="<?= base_url('read/' . $post->where('id', 2)->first()['post_slug']) ?>" class="nav-item nav-link">Profil</a>
               <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">PPDB 2020</a>
                  <div class="dropdown-menu rounded-0 m-0">
                     <a href="#" class="dropdown-item">Hasil Seleksi</a>
                     <a href="#" class="dropdown-item">Cetak Formulir</a>
                     <a href="#" class="dropdown-item">Download Formulir</a>
                  </div>
               </div>
               <a href="<?= base_url('read/' . $post->where('id', 3)->first()['post_slug']) ?>" class="nav-item nav-link">Visi dan misi</a>
               <div class="nav-item dropdown">
                  <a href="<?= base_url('read/' . $post->where('id', 26)->first()['post_slug']) ?>" class="nav-link dropdown-toggle" data-toggle="dropdown">PPID</a>
                  <div class="dropdown-menu rounded-0 m-0">
                     <a href="<?= base_url('read/' . $post->where('id', 27)->first()['post_slug']) ?>" class="dropdown-item">Profil singkat PPID</a>
                     <a href="<?= base_url('read/' . $post->where('id', 28)->first()['post_slug']) ?>" class="dropdown-item">SK PPID cerdas</a>
                     <a href="<?= base_url('read/' . $post->where('id', 30)->first()['post_slug']) ?>" class="dropdown-item">Maklumat PPID</a>
                     <a href="<?= base_url('read/' . $post->where('id', 29)->first()['post_slug']) ?>" class="dropdown-item">Tugas dan Fungsi PPID</a>
                     <a href="<?= base_url('read/' . $post->where('id', 31)->first()['post_slug']) ?>" class="dropdown-item">Struktur PPID</a>
                     <a href="<?= base_url('read/' . $post->where('id', 32)->first()['post_slug']) ?>" class="dropdown-item">Visi dan Misi</a>
                     <a href="<?= base_url('read/' . $post->where('id', 33)->first()['post_slug']) ?>" class="dropdown-item">Informasi PPID</a>
                     <a href="<?= base_url('read/' . $post->where('id', 34)->first()['post_slug']) ?>" class="dropdown-item">Regulasi</a>
                     <a href="<?= base_url('read/' . $post->where('id', 35)->first()['post_slug']) ?>" class="dropdown-item">Undang-undang Komisi Informasi</a>

                  </div>
               </div>
               <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">DIREKTORI</a>
                  <div class="dropdown-menu rounded-0 m-0">
                     <a href="#" class="dropdown-item">Direktori alumni</a>
                     <a href="#" class="dropdown-item">Direktori guru dan tenaga kependidikan</a>
                     <a href="#" class="dropdown-item">Direktori peserta didik</a>
                  </div>
               </div>
               <a href="<?= base_url('form-alumni') ?>" class="nav-item nav-link">Pendfaftaran alumni</a>
               <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Galeri</a>
                  <div class="dropdown-menu rounded-0 m-0">
                     <a href="#" class="dropdown-item">Foto</a>
                     <a href="#" class="dropdown-item">video</a>
                  </div>
               </div>
               <a href="<?= base_url('hubungi-kami') ?>" class="nav-item nav-link">Hubungi kami</a>
               <a href="/page-portal" class="nav-item nav-link">Portal</a>
            </div>
         </div>
      </nav>
   </div>
   <!-- Navbar End -->


   <!-- Main News Slider Start -->
   <?php

   use App\Models\ImageSlidersModel;

   $imageSlider = new ImageSlidersModel();
   $image = $imageSlider->orderBy('created_at', 'DESC')->limit(5)->findAll();
   $image1 = $imageSlider->orderBy('RAND()')->first();
   $image2 = $imageSlider->orderBy('RAND()')->first();
   $image3 = $imageSlider->orderBy('RAND()')->first();
   $image4 = $imageSlider->orderBy('RAND()')->first();
   $currentUri = uri_string();
   $isRoot = empty($currentUri);

   use App\Models\QuoteModel;

   $model = new QuoteModel();
   $quotes = $model->findAll();
   ?>
   <?php if ($isRoot) : ?>
      <div class="container-fluid">
         <div class="row">
            <div class="col-lg-7 px-0">

               <div class="owl-carousel main-carousel position-relative">
                  <?php foreach ($image as $row) : ?>
                     <div class="position-relative overflow-hidden" style="height: 500px;">
                        <img class="img-fluid h-100" src="<?= base_url('img/' . $row['image']) ?>" style="object-fit: cover;">
                        <div class="overlay">
                           <div class="mb-2">
                              <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= date('d F Y', strtotime($row['created_at'])) ?></a>
                           </div>
                           <p class="h2 m-0 text-white text-uppercase font-weight-bold" href=""><?= $row['caption'] ?></p>
                        </div>
                     </div>
                  <?php endforeach; ?>
               </div>
            </div>
            <div class="col-lg-5 px-0">
               <div class="row mx-0">
                  <div class="col-md-6 px-0">
                     <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="<?= base_url('img/' . $image1['image']) ?>" style="object-fit: cover;">
                        <div class="overlay">
                           <div class="mb-2">
                              <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= date('d F Y', strtotime($image1['created_at'])) ?></a>
                           </div>
                           <p class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href=""><?= $image1['caption'] ?></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 px-0">
                     <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="<?= base_url('img/' . $image2['image']) ?>" style="object-fit: cover;">
                        <div class="overlay">
                           <div class="mb-2">
                              <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= date('d F Y', strtotime($image2['created_at'])) ?></a>
                           </div>
                           <p class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href=""><?= $image2['caption'] ?></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 px-0">
                     <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="<?= base_url('img/' . $image3['image']) ?>" style="object-fit: cover;">
                        <div class="overlay">
                           <div class="mb-2">
                              <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= date('d F Y', strtotime($image3['created_at'])) ?></a>
                           </div>
                           <p class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href=""><?= $image3['caption'] ?></p>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 px-0">
                     <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="<?= base_url('img/' . $image4['image']) ?>" style="object-fit: cover;">
                        <div class="overlay">
                           <div class="mb-2">
                              <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href=""><?= date('d F Y', strtotime($image4['created_at'])) ?></a>
                           </div>
                           <p class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href=""><?= $image4['caption'] ?></p>
                        </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>

      <!-- Main News Slider End -->

      <!-- Breaking News Start -->
      <div class="container-fluid bg-dark py-3 mb-3">
         <div class="container">
            <div class="row align-items-center bg-dark">
               <div class="col-12">
                  <div class="d-flex justify-content-between">
                     <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Qoutes</div>
                     <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3" style="width: calc(100% - 170px); padding-right: 90px;">
                        <?php foreach ($quotes as $row) : ?>
                           <div class="text-truncate"><a class="text-white text-uppercase font-weight-semi-bold" href="#" style="font-size: 12px;"><?= $row['quote'] ?></a></div>
                        <?php endforeach; ?>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Breaking News End -->
   <?php endif; ?>


   <!-- News With Sidebar Start -->
   <div class="container-fluid">
      <div class="container">
         <div class="row">
            <div class="col-lg-8">
               <?= $this->renderSection('content'); ?>
            </div>

            <div class="col-lg-4">
               <?php
               $kepsek = $post->find(1);
               $halamanLain = $post->where('post_type', 'page')->findAll();
               ?>
               <div class="mb-3">
                  <div class="section-title mb-0">
                     <h4 class="m-0 text-uppercase font-weight-bold">Kepala Sekolah</h4>
                  </div>
                  <div class="bg-white text-center border border-top-0 p-3">
                     <a href=""><img class="img-fluid" src="<?= base_url('img/' . $kepsek['post_image']) ?>" alt=""></a>
                     <?= $kepsek['post_content'] ?>
                  </div>

               </div>

               <!-- Social Follow Start -->
               <div class="mb-3">
                  <div class="section-title mb-0">
                     <h4 class="m-0 text-uppercase font-weight-bold">Follow Us</h4>
                  </div>
                  <div class="bg-white border border-top-0 p-3">
                     <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #39569E;">
                        <i class="fab fa-facebook-f text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                        <span class="font-weight-medium">12,345 Fans</span>
                     </a>
                     <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #52AAF4;">
                        <i class="fab fa-twitter text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                        <span class="font-weight-medium">12,345 Followers</span>
                     </a>
                     <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #0185AE;">
                        <i class="fab fa-linkedin-in text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                        <span class="font-weight-medium">12,345 Connects</span>
                     </a>
                     <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #C8359D;">
                        <i class="fab fa-instagram text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                        <span class="font-weight-medium">12,345 Followers</span>
                     </a>
                     <a href="" class="d-block w-100 text-white text-decoration-none mb-3" style="background: #DC472E;">
                        <i class="fab fa-youtube text-center py-4 mr-3" style="width: 65px; background: rgba(0, 0, 0, .2);"></i>
                        <span class="font-weight-medium">12,345 Subscribers</span>
                     </a>
                  </div>
               </div>
               <!-- Social Follow End -->

               <!-- Popular News Start -->
               <div class="mb-3">
                  <div class="section-title mb-0">
                     <h4 class="m-0 text-uppercase font-weight-bold">Halaman Lainnya</h4>
                  </div>
                  <div class="bg-white border border-top-0 p-3">
                     <?php foreach ($halamanLain as $hl) : ?>
                        <div class="d-flex align-items-center bg-white mb-3" style="height: 110px;">
                           <div class="w-100 h-100 px-3 d-flex flex-column justify-content-center border border-left-0">
                              <div class="mb-2">
                                 <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="#"> <?= date('d F Y', strtotime($hl['created_at'])) ?></a><br>
                                 <small style="font-size: 11px;">• Oleh Administrator Website</small>
                              </div>
                              <a class="h6 m-0 text-secondary text-uppercase font-weight-bold" href="<?= base_url('read/' . $hl['post_slug']) ?>">#️⃣<?= $hl['post_title'] ?></a>
                           </div>
                        </div>
                     <?php endforeach ?>
                  </div>
               </div>
               <!-- Popular News End -->

               <!-- Newsletter Start -->
               <div class="mb-3">
                  <div class="section-title mb-0">
                     <h4 class="m-0 text-uppercase font-weight-bold">Newsletter</h4>
                  </div>
                  <div class="bg-white text-center border border-top-0 p-3">
                     <div class="input-group mb-2" style="width: 100%;">
                        <input type="text" class="form-control form-control-lg" placeholder="Your Email">
                        <div class="input-group-append">
                           <button class="btn btn-primary font-weight-bold px-3">Sign Up</button>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Newsletter End -->
            </div>
         </div>
      </div>
   </div>
   <!-- News With Sidebar End -->


   <!-- Footer Start -->
   <div class="container-fluid bg-dark pt-5 px-sm-3 px-md-5 mt-5">
      <div class="row py-4">
         <div class="col-lg-4 col-md-6 mb-5">
            <img src="/smk1padang.png" alt="Small Image" width="90" height="90" class="me-2">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold mt-3">SMK NEGERI 1 PADANG</h5>
            <p style="font-size: 12px;">MEMBERI YANG TERBAIK MENJADI YANG TERBAIK</p>
            <p class="font-weight-medium"><i class="fa fa-map-marker-alt mr-2"></i>Jl. Mahmud Yunus, Padang</p>
            <p class="font-weight-medium"><i class="fa fa-phone-alt mr-2"></i>0751-27917</p>
            <p class="font-weight-medium"><i class="fa fa-envelope mr-2"></i>smkn1pdgsumbar@gmail.com</p>
            <h6 class="mt-4 mb-3 text-white text-uppercase font-weight-bold">Follow Us</h6>
            <div class="d-flex justify-content-start">
               <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
               <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
               <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
               <a class="btn btn-lg btn-secondary btn-lg-square mr-2" href="#"><i class="fab fa-instagram"></i></a>
               <a class="btn btn-lg btn-secondary btn-lg-square" href="#"><i class="fab fa-youtube"></i></a>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 mb-5">
            <?php
            $popular = $post->where('post_type', 'post')->orderBy('post_counter', 'DESC')->findAll();
            ?>
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Popular News</h5>
            <div class="mb-3">
               <?php foreach ($popular as $key => $pop) : ?>
                  <?php if ($key <= 3) : ?>
                     <div class="mb-2">
                        <a class="badge badge-primary text-uppercase font-weight-semi-bold p-1 mr-2" href="<?= base_url('read/' . $pop['post_slug']) ?>">Post</a>
                        <a class="text-body" href="<?= base_url('read/' . $pop['post_slug']) ?>"><small><?= date('d F Y', strtotime($pop['created_at'])) ?></small></a>
                     </div>
                     <a class="small text-body text-uppercase font-weight-medium" href="<?= base_url('read/' . $pop['post_slug']) ?>"><?= $pop['post_title'] ?></a>
                  <?php endif ?>
               <?php endforeach ?>
            </div>
         </div>
         <div class="col-lg-4 col-md-6 mb-5">
            <h5 class="mb-4 text-white text-uppercase font-weight-bold">Tags</h5>
            <div class="m-n1">
               <a href="" class="btn btn-sm btn-secondary m-1">Berita</a>
               <a href="" class="btn btn-sm btn-secondary m-1">Pengumuman</a>
               <a href="" class="btn btn-sm btn-secondary m-1">Sekilas Info</a>
            </div>
         </div>

      </div>
   </div>
   <div class="container-fluid py-4 px-sm-3 px-md-5" style="background: #111111;">
      <p class="m-0 text-center">&copy; <a href="#">SMKN 1 Padang</a>. All Rights Reserved.
      </p>
   </div>
   <!-- Footer End -->


   <!-- Back to Top -->
   <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


   <!-- JavaScript Libraries -->
   <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
   <script src="<?= base_url('fe') ?>/lib/easing/easing.min.js"></script>
   <script src="<?= base_url('fe') ?>/lib/owlcarousel/owl.carousel.min.js"></script>

   <!-- Template Javascript -->
   <script src="<?= base_url('fe') ?>/js/main.js"></script>
</body>

</html>