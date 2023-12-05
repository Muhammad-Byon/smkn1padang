<?= $this->extend('BackEnd/Layout/template'); ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
   <div class="container-fluid px-4">
      <h1 class="mt-4">Insert Data Users</h1>
      <ol class="breadcrumb mb-5">
         <li class="breadcrumb-item"><a href="/user">Users</a></li>
         <li class="breadcrumb-item active">Form</li>
      </ol>

      <div class="card " style="max-width: 800px;">
         <div class=" card-body">
            <form action="/BackEnd/UserController/save" method="post">
               <?= csrf_field(); ?>
               <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="text" class="form-control " id="email" placeholder="" name="email" autofocus value="<?= old('email'); ?>">
                  <div class="invalid-feedback">
                     <?= $validation->getError('email'); ?>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control " id="username" placeholder="" name="username" autofocus value="<?= old('username'); ?>">
                  <div class="invalid-feedback">
                     <?= $validation->getError('username'); ?>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control " id="password" placeholder="" name="password" autofocus value="<?= old('password'); ?>">
                  <div class="invalid-feedback">
                     <?= $validation->getError('password'); ?>
                  </div>
               </div>
               <div class="mb-3">
                  <label for="email" class="form-label">Role</label>
                  <select name="role" id="" class="form-control">
                     <option value="">== select ==</option>
                     <option value="admin">Admin</option>
                     <option value="operator">Operator</option>
                  </select>
                  <div class="invalid-feedback">
                     <?= $validation->getError('role'); ?>
                  </div>
               </div>
               <button type="submit" class="btn btn-success">Insert Data</button>
            </form>
         </div>
      </div>
   </div>
   <?= $this->endSection(); ?>