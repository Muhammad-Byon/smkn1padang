<?php

namespace App\Controllers\BackEnd;

use App\Controllers\BaseController;

use App\Models\ModuleModel;

class Module extends BaseController
{

    protected $moduleModel;

    public function __construct()
    {
        $this->moduleModel = new ModuleModel();
    }

    public function index()
    {
        $module = $this->moduleModel->findAll();

        $data = [
            'title' => 'Modules',
            'module' => $module
        ];

        return view('BackEnd/Module/index', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Tambah Modules',
            'validation' => \Config\Services::validation()
        ];

        return view('BackEnd/Module/create', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'module_name' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} module title harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('BackEnd/Module/create')->withInput()->with('validation', $validation);
        }


        $this->moduleModel->save([
            'module_name' => $this->request->getVar('module_name'),
            'module_description' => $this->request->getVar('module_description'),
            'module_url' => $this->request->getVar('module_url')
        ]);

        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Added data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);

        return redirect()->to('/module');
    }

    public function delete($id)
    {
        $this->moduleModel->delete($id);
        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Delete data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);
        return redirect()->to('/module');
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Edit Module',
            'validation' => \Config\Services::validation(),
            'module' => $this->moduleModel->getModuleByID($id)
        ];

        return view('BackEnd/Module/edit', $data);
    }

    public function update($id)
    {
        $this->moduleModel->save([
            'id' => $id,
            'module_name' => $this->request->getVar('module_name'),
            'module_description' => $this->request->getVar('module_description'),
            'module_url' => $this->request->getVar('module_url')
        ]);

        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Edit data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);
        return redirect()->to('/module');
    }
}
