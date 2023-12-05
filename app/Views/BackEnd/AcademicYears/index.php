<?= $this->extend('BackEnd/Layout/template'); ?>

<?= $this->section('content'); ?>

<div id="layoutSidenav_content">

    <div class="container-fluid px-4" style="border: 1px solid black;">
        <h1 class="mt-4">Academic Years</h1>
        <ol class="breadcrumb mb-3">
            <li class="breadcrumb-item"><a href="/academic">Academic Years</a></li>
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
                Data AcademicYears
            </div>
            <div class="card-body">
                <table id="datatablesSimple" style="border: 1px solid black;">
                    <a href="/BackEnd/AcademicYears/create/" class="btn btn-primary mb-3"><i class="fa fa-plus" aria-hidden="true"></i>&nbsp;Insert Academic</a>
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Academic Year</th>
                            <th>Semester</th>
                            <th>Current Semester</th>
                            <th>Admission Semester</th>
                            <th>Acction</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($academic_years as $a) : ?>
                            <tr>
                                <td><?= $a['id'] ?></td>
                                <td><?= $a['academic_year'] ?></td>
                                <td><?= $a['semester'] ?></td>
                                <td><?= $a['current_semester'] ?></td>
                                <td><?= $a['admission_semester'] ?></td>
                                <td>
                                    <a href="/BackEnd/AcademicYears/edit/<?= $a['id']; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                    <a href="/BackEnd/AcademicYears/delete/<?= $a['id']; ?>" class="btn btn-danger" onclick="return confirm('Yakin ingin menghapus?');"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <?= $this->endSection(); ?>