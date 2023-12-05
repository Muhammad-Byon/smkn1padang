<?= $this->extend('FrontEnd/templates/master'); ?>
<?= $this->section('title'); ?>
Hubungi Kami
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 ">
        <div class="section-title mb-0">
            <h4 class="m-0 text-uppercase font-weight-bold">HUBUNGI KAMI</h4>
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
                        <label for="full_name" class="col-sm-3 control-label">Email <span style="color: red">*</span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control rounded-0 border " id="full_name" name="full_name">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="full_name" class="col-sm-3 control-label">Url <span style="color: red"></span></label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control form-control rounded-0 border " id="full_name" name="full_name">
                        </div>
                    </div>
                    <div class="form-group row mb-2">
                        <label for="street_address" class="col-sm-3 control-label">Pesan <span style="color: red">*</span></label>
                        <div class="col-sm-9">
                            <textarea rows="5" class="form-control form-control rounded-0 border " id="street_address" name="street_address"></textarea>
                        </div>
                    </div>

                </form>
            </div>
            <div class="card-footer">
                <div class="form-group row mb-0">
                    <div class="offset-sm-3 col-sm-9">
                        <button type="button" onclick="hubungi_kami(); return false;" class="btn btn-warning rounded-0"><i class="fa fa-send"></i> Submit data</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>