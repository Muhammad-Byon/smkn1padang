<?= $this->extend('BackEnd/Layout/template'); ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">

   <div class="container-fluid px-4" style="border: 1px solid black;">
      <h1 class="mt-4">Users</h1>
      <ol class="breadcrumb mb-3">
         <li class="breadcrumb-item"><a href="/user">Users</a></li>
         <li class="breadcrumb-item active">Tables</li>
      </ol>
      <?php if (session()->getFlashdata('pesan')) : ?>
         <div class="alert alert-success" role="alert">
            <?= session()->getFlashdata('pesan'); ?>
         </div>
      <?php endif; ?>
      <div class="card mb-4" style="background-color: #E3F4F4;">
         <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Data users
         </div>
         <div class="card-body">
            <table id="datatablesSimple" style="border: 1px solid black;">
               <a href="/BackEnd/UserController/create/" class="btn btn-primary mb-3"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Insert users</a>
               <thead>
                  <tr>
                     <th>No.</th>
                     <th>Email</th>
                     <th>Username</th>
                     <th>Role : status</th>
                     <th>Action</th>
                  </tr>
               </thead>
               <tbody>
                  <?php foreach ($user as $key => $a) : ?>
                     <tr>
                        <td class="text-center"><?= $key + 1 ?></td>
                        <td><?= $a->email ?></td>
                        <td><?= $a->username ?></td>
                        <td class="text-center">
                           <span class="badge <?= $a->role == 'admin' ? 'bg-primary' : 'bg-danger' ?>"><?= $a->role ?> : <?= $a->active == 1 ? 'Active' : 'Not Active' ?></span>
                        </td>
                        <td class="text-center">
                           <a href="/BackEnd/UserController/delete/<?= $a->id; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');"><i class="fas fa-trash"></i></a>
                        </td>
                     </tr>
                  <?php endforeach; ?>
               </tbody>

            </table>
         </div>
      </div>
   </div>

   <?= $this->endSection(); ?>