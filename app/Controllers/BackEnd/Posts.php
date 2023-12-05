<?php

namespace App\Controllers\BackEnd;

use App\Controllers\BaseController;

use App\Models\PostsModel;

class Posts extends BaseController
{

    protected $postsModel;

    public function __construct()
    {
        $this->postsModel = new PostsModel();
    }

    public function index()
    {
        $posts = $this->postsModel->findAll();

        $data = [
            'title' => 'Posts',
            'posts' => $posts
        ];

        return view('BackEnd/Posts/index', $data);
    }

    public function create()
    {
        // session();
        $data = [
            'title' => 'Tambah Posts',
            // 'validation' => \Config\Services::validation()
        ];

        return view('BackEnd/Posts/create', $data);
    }

    public function save()
    {
        // validasi input
        // if (!$this->validate([
        //     'module_name' => [
        //         'rules' => 'required',
        //         'errors' => [
        //             'required' => '{field} module title harus diisi.'
        //         ]
        //     ]
        // ])) {
        //     $validation = \Config\Services::validation();
        //     return redirect()->to('BackEnd/Module/create')->withInput()->with('validation', $validation);
        // }


        $this->postsModel->save([
            'post_title' => $this->request->getVar('post_title'),
            'post_content' => $this->request->getVar('post_content'),
            'post_image' => $this->request->getVar('post_image'),
            'post_author' => $this->request->getVar('post_author'),
            'post_categories' => $this->request->getVar('post_categories'),
            'post_type' => $this->request->getVar('post_type'),
            'post_status' => $this->request->getVar('post_status'),
            'post_visibility' => $this->request->getVar('post_visibility'),
            'post_comment_status' => $this->request->getVar('post_comment_status'),
            'post_slug' => $this->request->getVar('post_slug'),
            'post_tags' => $this->request->getVar('post_tags'),
            'post_counter' => $this->request->getVar('post_counter'),
        ]);

        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Added data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);

        return redirect()->to('/posts');
    }

    public function delete($id)
    {
        $this->postsModel->delete($id);
        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Delete data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);
        return redirect()->to('/posts');
    }


    public function edit($id)
    {
        $data = [
            'title' => 'Edit Posts',
            // 'validation' => \Config\Services::validation(),
            'posts' => $this->postsModel->getPostsByID($id)
        ];

        return view('BackEnd/Posts/edit', $data);
    }

    public function update($id)
    {
        $this->postsModel->save([
            'id' => $id,
            'post_title' => $this->request->getVar('post_title'),
            'post_content' => $this->request->getVar('post_content'),
            'post_image' => $this->request->getVar('post_image'),
            'post_author' => $this->request->getVar('post_author'),
            'post_categories' => $this->request->getVar('post_categories'),
            'post_type' => $this->request->getVar('post_type'),
            'post_status' => $this->request->getVar('post_status'),
            'post_visibility' => $this->request->getVar('post_visibility'),
            'post_comment_status' => $this->request->getVar('post_comment_status'),
            'post_slug' => $this->request->getVar('post_slug'),
            'post_tags' => $this->request->getVar('post_tags'),
            'post_counter' => $this->request->getVar('post_counter'),
        ]);

        session()->setFlashdata('alert', [
            'title' => 'Success!',
            'text' => 'Edit data successfully.',
            'type' => 'success' // other types include 'warning', 'error', 'info', etc.
        ]);;

        return redirect()->to('/posts');
    }
}
