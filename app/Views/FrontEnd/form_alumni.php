<?= $this->extend('FrontEnd/templates/master'); ?>
<?= $this->section('title'); ?>
Form Alumni
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="row">
   <div class="col-lg-12 col-md-12 col-sm-12 ">
      <div class="section-title mb-0">
         <h4 class="m-0 text-uppercase font-weight-bold">PENDAFTARAN ALUMNI</h4>
      </div>
      <div class="card rounded-0 border  mb-3">
         <div class="card-body">
            <form>
               <div class="form-group row mb-2">
                  <label for="full_name" class="col-sm-3 control-label">Nama Lengkap <span style="color: red">*</span></label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control form-control rounded-0 border " id="full_name" name="full_name">
                  </div>
               </div>
               <div class="form-group row mb-2">
                  <label for="gender" class="col-sm-3 control-label">Jenis Kelamin <span style="color: red">*</span></label>
                  <div class="col-sm-9">
                     <select name="gender" class="custom-select custom-select-sm rounded-0 border " id="gender">
                        <option value="" selected="selected">Pilih :</option>
                        <option value="M">Laki-laki</option>
                        <option value="F">Perempuan</option>
                     </select>
                  </div>
               </div>
               <div class="form-group row mb-2">
                  <label for="birth_date" class="col-sm-3 control-label">Tanggal Lahir <span style="color: red">*</span></label>
                  <div class="col-sm-9">
                     <div class="input-group">
                        <input type="date" class="form-control form-control rounded-0 border  date" id="birth_date" name="birth_date">
                     </div>
                  </div>
               </div>
               <div class="form-group row mb-2">
                  <label for="end_date" class="col-sm-3 control-label">Tahun Lulus <span style="color: red">*</span></label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control form-control rounded-0 border " id="end_date" name="end_date">
                  </div>
               </div>
               <div class="form-group row mb-2">
                  <label for="identity_number" class="col-sm-3 control-label">NIS</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control form-control rounded-0 border " id="identity_number" name="identity_number">
                  </div>
               </div>
               <div class="form-group row mb-2">
                  <label for="street_address" class="col-sm-3 control-label">Alamat <span style="color: red">*</span></label>
                  <div class="col-sm-9">
                     <textarea rows="5" class="form-control form-control rounded-0 border " id="street_address" name="street_address"></textarea>
                  </div>
               </div>
               <div class="form-group row mb-2">
                  <label for="email" class="col-sm-3 control-label">Email <span style="color: red">*</span></label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control form-control rounded-0 border " id="email" name="email">
                  </div>
               </div>
               <div class="form-group row mb-2">
                  <label for="phone" class="col-sm-3 control-label">Telepon</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control form-control rounded-0 border " id="phone" name="phone">
                  </div>
               </div>
               <div class="form-group row mb-2">
                  <label for="mobile_phone" class="col-sm-3 control-label">Handphone</label>
                  <div class="col-sm-9">
                     <input type="text" class="form-control form-control rounded-0 border " id="mobile_phone" name="mobile_phone">
                  </div>
               </div>
               <div class="form-group row mb-2">
                  <label for="file" class="col-sm-3 control-label">Foto</label>
                  <div class="col-sm-9">
                     <input type="file" id="photo" name="photo">
                     <small class="form-text text-muted">Foto harus JPG dan ukuran file maksimal 1 Mb</small>
                  </div>
               </div>
            </form>
         </div>
         <div class="card-footer">
            <div class="form-group row mb-0">
               <div class="offset-sm-3 col-sm-9">
                  <button type="button" onclick="alumni_registration(); return false;" class="btn btn-warning rounded-0"><i class="fa fa-send"></i> Submit data</button>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?= $this->endSection(); ?>