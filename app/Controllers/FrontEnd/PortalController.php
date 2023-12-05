<?php

namespace App\Controllers\FrontEnd;

use App\Controllers\BaseController;

class PortalController extends BaseController
{
    public function index()
    {
        return view('FrontEnd/Portal/index');
    }
}
