<?php

namespace App\Controllers\BackEnd;

use App\Controllers\BaseController;
use App\Models\LinksModel;

class Links extends BaseController
{

    protected $linksModel;

    public function __construct()
    {
        $this->linksModel = new LinksModel();
    }

    public function index()
    {
        $links = $this->linksModel->findAll();

        $data = [
            'title' => 'Links',
            'links' => $links
        ];

        return view('BackEnd/Links/index', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Tambah Links',
            'validation' => \Config\Services::validation()
        ];

        return view('BackEnd/Links/create', $data);
    }

    public function save()
    {
        // validasi input
        if (!$this->validate([
            'link_title' => [
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Link Title title harus diisi.'
                ]
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('BackEnd/Links/create')->withInput()->with('validation', $validation);
        }


        $this->linksModel->save([
            'link_title' => $this->request->getVar('link_title'),
            'link_url' => $this->request->getVar('link_url'),
            'link_target' => $this->request->getVar('link_target'),
            'link_image' => $this->request->getVar('link_image'),
            'link_type' => $this->request->getVar('link_type'),
        ]);

        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Added data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);

        return redirect()->to('/links');
    }

    public function delete($id)
    {
        $this->linksModel->delete($id);
        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Delete data successfully.',
            'type' => 'success' // bisa juga 'warning', 'error', 'info', dll
        ]);
        return redirect()->to('/links');
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Edit Links',
            'validation' => \Config\Services::validation(),
            'links' => $this->linksModel->getLinksByID($id)
        ];

        return view('BackEnd/Links/edit', $data);
    }

    public function update($id)
    {
        $this->linksModel->save([
            'id' => $id,
            'link_title' => $this->request->getVar('link_title'),
            'link_url' => $this->request->getVar('link_url'),
            'link_target' => $this->request->getVar('link_target'),
            'link_image' => $this->request->getVar('link_image'),
            'link_type' => $this->request->getVar('link_type'),
        ]);

        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Edit data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);

        return redirect()->to('/links');
    }
}
