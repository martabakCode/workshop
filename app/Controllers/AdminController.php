<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class AdminController extends BaseController
{
    public function index()
    {
        $session = session();
        return view('admin/pages/dashboard');
        echo "Welcome back, ".$session->get('name');
    }
}
