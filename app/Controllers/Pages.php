<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Baju;
use App\Models\Pemasok;
use App\Models\Provinsi;

class Pages extends BaseController
{
    public function index()
    {
        return view('pages/home');
    }
    public function home()
    {
        $pemasokmodel = new Pemasok();
        $kumppemasok = $pemasokmodel->findAll();
        $data = [
            'title' => 'Baju',
            'kumppemasok' => $kumppemasok,
        ];
        return view('pages/home', $data);
    }
}
