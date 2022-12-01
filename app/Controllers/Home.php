<?php

namespace App\Controllers;

use App\Models\Pemasok;

class Home extends BaseController
{
    public function index()
    {
        $pemasokmodel = new Pemasok();
        $kumppemasok = $pemasokmodel->findAll();
        $data = [
            'title' => 'Baju',
            'kumppemasok' => $kumppemasok
        ];
        return view('pages/home', $data);
    }
    public function PageA(){
        return view('landingPage/pageA');
    }
}
