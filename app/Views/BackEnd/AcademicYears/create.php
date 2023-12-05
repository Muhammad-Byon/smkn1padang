<?= $this->extend('BackEnd/Layout/template'); ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">
    <div class="container-fluid px-4">
        <h1 class="mt-4">Insert Data Academic</h1>
        <ol class="breadcrumb mb-5">
            <li class="breadcrumb-item"><a href="/academic">Academic Years</a></li>
            <li class="breadcrumb-item active">Form</li>
        </ol>

        <div class="card " style="max-width: 800px;">
            <div class=" card-body">
                <form action="/BackEnd/AcademicYears/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="mb-3">
                        <label for="academic_year" class="form-label">Academic Year</label>
                        <input type="text" class="form-control <?= ($validation->hasError('academic_year')) ? 'is-invalid' : ''; ?>" id="academic_year" placeholder="" name="academic_year" autofocus value="<?= old('academic_year'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('academic_year'); ?>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="semester" class="form-label">Semester</label>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="semesterOdd" name="semester" value="odd">
                            <label class="form-check-label" for="semesterOdd">odd</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="semesterEven" name="semester" value="even">
                            <label class="form-check-label" for="semesterEven">even</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="current_semester" class="form-label">Current Semester</label>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="current_semesterTrue" name="current_semester" value="true">
                            <label class="form-check-label" for="current_semesterTrue">True</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="current_semesterFalse" name="current_semester" value="false">
                            <label class="form-check-label" for="current_semesterFalse">False</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="admission_semester" class="form-label">Admission Semester</label>

                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="admission_semesterTrue" name="admission_semester" value="true">
                            <label class="form-check-label" for="admission_semesterTrue">True</label>
                        </div>
                        <div class="form-check">
                            <input type="radio" class="form-check-input" id="admission_semesterFalse" name="admission_semester" value="false">
                            <label class="form-check-label" for="admission_semesterFalse">False</label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success">Insert Data</button>
                </form>
            </div>
        </div>
    </div>
    <?= $this->endSection(); ?>