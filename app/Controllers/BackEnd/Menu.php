<?php

namespace App\Controllers\BackEnd;

use App\Controllers\BaseController;

use App\Models\MenuModel;

class Menu extends BaseController
{

    protected $menuModel;

    public function __construct()
    {
        $this->menuModel = new MenuModel();
    }

    public function index()
    {
        $menu = $this->menuModel->findAll();

        $data = [
            'title' => 'Menu',
            'menu' => $menu
        ];

        return view('BackEnd/Menu/index', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Tambah Menu',
            'validation' => \Config\Services::validation()
        ];

        return view('BackEnd/Menu/create', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'menu_title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} menu title harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('BackEnd/Menu/create')->withInput()->with('validation', $validation);
        }


        $this->menuModel->save([
            'menu_title' => $this->request->getVar('menu_title'),
            'menu_url' => $this->request->getVar('menu_url'),
            'menu_target' => $this->request->getVar('menu_target'),
            'menu_type' => $this->request->getVar('menu_type'),
            'menu_parent_id' => $this->request->getVar('menu_parent_id'),
            'menu_position' => $this->request->getVar('menu_position'),
        ]);

        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Added data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);

        return redirect()->to('/menu');
    }

    public function delete($id)
    {
        $this->menuModel->delete($id);
        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Delete data successfully.',
            'type' => 'success' // other types: 'warning', 'error', 'info', etc.
        ]);
        return redirect()->to('/menu');
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Edit Menu',
            'validation' => \Config\Services::validation(),
            'menu' => $this->menuModel->getMenuByID($id)
        ];

        return view('BackEnd/Menu/edit', $data);
    }

    public function update($id)
    {
        $this->menuModel->save([
            'id' => $id,
            'menu_title' => $this->request->getVar('menu_title'),
            'menu_url' => $this->request->getVar('menu_url'),
            'menu_target' => $this->request->getVar('menu_target'),
            'menu_type' => $this->request->getVar('menu_type'),
            'menu_parent_id' => $this->request->getVar('menu_parent_id'),
            'menu_position' => $this->request->getVar('menu_position'),
        ]);

        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Edit data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);

        return redirect()->to('/menu');
    }
}
