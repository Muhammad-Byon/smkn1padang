<?php

namespace App\Controllers\FrontEnd;

use App\Controllers\BaseController;
use App\Models\PostsModel;
use App\Models\QuoteModel;

class HomeController extends BaseController
{

    public function index()
    {

        // $postModel = new PostsModel();
        // $data['posts'] = $postModel->where('post_type', 'post')->orderBy('created_at', 'DESC')->limit(8)->findAll();
        $db = \Config\Database::connect();
        $query   = $db->query('SELECT * FROM posts WHERE post_type = "post" ORDER BY created_at DESC LIMIT 12');
        $data['posts'] = $query->getResult();
        return view('FrontEnd/home', $data);
    }

    public function detail($slug)
    {

        $model = new PostsModel();
        $data['post'] = $model->where('post_slug', $slug)->first();
        return view('FrontEnd/detail', $data);
    }

    public function form_alumni()
    {

        return view('FrontEnd/form_alumni');
    }

    public function hubungi_kami()
    {

        return view('FrontEnd/hubungi_kami');
    }
}
