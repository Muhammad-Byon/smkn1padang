<?php

namespace App\Controllers\BackEnd;

use App\Controllers\BaseController;
use App\Models\User;
use Myth\Auth\Password;
use App\Libraries\RoleChecker;


class UserController extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new User();
    }
    public function index()
    {

        $data['user'] = model('UserModel')->findAll();
        return view('BackEnd/user/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'Tambah Data User',
            'validation' => \Config\Services::validation()
        ];
        return view('BackEnd/user/create', $data);
    }

    public function save()
    {
        if (!$this->validate([
            'email' => [
                'rules' => 'required|valid_email|is_unique[users.email]',
            ],
            'username' => [
                'rules' => 'required|alpha_numeric_space',
            ],
            'password' => [
                'rules' => 'required',
            ],
            'role' => [
                'rules' => 'required',
            ]
        ])) {
            $validation = \Config\Services::validation();
            return redirect()->to('BackEnd/UserController/create')->withInput()->with('validation', $validation);
        }

        $this->userModel->save([
            'email' => $this->request->getVar('email'),
            'username' => $this->request->getVar('username'),
            'password_hash' => Password::hash($this->request->getVar('password')),
            'active' => 1,
            'role' => $this->request->getVar('role'),
        ]);
        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Added data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);
        return redirect()->to('/user');
    }

    public function delete($id)
    {
        $this->userModel->delete($id);
        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Deleted data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);
        return redirect()->to('/user');
    }
}
