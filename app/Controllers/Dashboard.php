<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends Controller
{
    public function index()
    {
        $session = session();
        echo "Hi, " . $session->get('user_name');
        return view('halo');
    }
}
