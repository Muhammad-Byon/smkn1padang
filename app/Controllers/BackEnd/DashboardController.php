<?php

namespace App\Controllers\BackEnd;

use App\Controllers\BaseController;
use App\Libraries\RoleChecker;

class DashboardController extends BaseController
{
    public function index()
    {
        $auth = service('authentication');
        $data['user'] = $auth->user();
        return view('BackEnd/Layout/dashboard', $data);
    }
}
