<?php

namespace App\Controllers\BackEnd;

use App\Controllers\BaseController;

use App\Models\AcademicYearsModel;

class AcademicYears extends BaseController
{

    protected $academicyearsModel;

    public function __construct()
    {
        $this->academicyearsModel = new AcademicYearsModel();
    }

    public function index()
    {
        $academic_years = $this->academicyearsModel->findAll();

        $data = [
            'title' => 'Academic Years',
            'academic_years' => $academic_years
        ];

        return view('BackEnd/AcademicYears/index', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Tambah Data Academic',
            'validation' => \Config\Services::validation()
        ];

        return view('BackEnd/AcademicYears/create', $data);
    }

    public function save()
    {
        //validasi input
        if (!$this->validate([
            'academic_year' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} academic year harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('BackEnd/AcademicYears/create')->withInput()->with('validation', $validation);
        }


        $this->academicyearsModel->save([
            'academic_year' => $this->request->getVar('academic_year'),
            'semester' => $this->request->getVar('semester'),
            'current_semester' => $this->request->getVar('current_semester'),
            'admission_semester' => $this->request->getVar('admission_semester')
        ]);

        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Added data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);

        return redirect()->to('/academic');
    }

    public function delete($id)
    {
        $this->academicyearsModel->delete($id);
        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Delete data successfully.',
            'type' => 'success' // other types: 'warning', 'error', 'info', etc.
        ]);
        return redirect()->to('/academic');
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Edit Data Academic',
            'validation' => \Config\Services::validation(),
            'academic' => $this->academicyearsModel->getAcademicByID($id)
        ];

        return view('BackEnd/AcademicYears/edit', $data);
    }

    public function update($id)
    {
        $this->academicyearsModel->save([
            'id' => $id,
            'academic_year' => $this->request->getVar('academic_year'),
            'semester' => $this->request->getVar('semester'),
            'current_semester' => $this->request->getVar('current_semester'),
            'admission_semester' => $this->request->getVar('admission_semester')
        ]);

        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Edit data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);

        return redirect()->to('/academic');
    }
}
