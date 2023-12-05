<?php

namespace App\Controllers\BackEnd;

use App\Controllers\BaseController;

use App\Models\ImageSlidersModel;

class ImageSliders extends BaseController
{

    protected $imageslidersModel;

    public function __construct()
    {
        $this->imageslidersModel = new ImageSlidersModel();
    }

    public function index()
    {
        $image_sliders = $this->imageslidersModel->findAll();

        $data = [
            'title' => 'Image Sliders',
            'image_sliders' => $image_sliders
        ];

        return view('BackEnd/ImageSliders/index', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Tambah Image',
            // 'validation' => \Config\Services::validation()
        ];

        return view('BackEnd/ImageSliders/create', $data);
    }

    public function save()
    {
        //validasi input
        // if (!$this->validate([
        //     'academic_year' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} academic year harus diisi.'
        //         ]
        //     ]
        // ])) {
        //     $validation = \Config\Services::validation();
        //     return redirect()->to('BackEnd/AcademicYears/create')->withInput()->with('validation', $validation);
        // }


        $this->imageslidersModel->save([
            'caption' => $this->request->getVar('caption'),
            'image' => $this->request->getVar('image')
        ]);

        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Added data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);

        return redirect()->to('/image');
    }

    public function delete($id)
    {
        $this->imageslidersModel->delete($id);
        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Delete data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);
        return redirect()->to('/image');
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Edit Image',
            // 'validation' => \Config\Services::validation(),
            'image' => $this->imageslidersModel->getImageByID($id)
        ];

        return view('BackEnd/ImageSliders/edit', $data);
    }

    public function update($id)
    {
        $this->imageslidersModel->save([
            'id' => $id,
            'caption' => $this->request->getVar('caption'),
            'image' => $this->request->getVar('image')
        ]);

        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Edit data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);

        return redirect()->to('/image');
    }
}
