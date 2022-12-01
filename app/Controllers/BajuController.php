<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Baju;
use App\Models\Pemasok;

class BajuController extends BaseController
{
    public function index()
    {
        $bajumodel = new Baju();
        $kumpbaju = $bajumodel->findAll();
        $data = ['title' => 'Baju', 'kumpbaju' => $kumpbaju];

        return view('pages/list', $data);
    }
    public function listB(){
        return redirect()->to('/pages');
    }
    public function store()
    {
        $data = [
            'title' => 'Create Baju'
        ];

        return redirect()->to('/home');
    }
    public function create()
    {
        if (!$this->validate([
            'kodeb' => 'required|string',
            'merkb' => 'required|string',
            'sizeb' => 'required|string',
            'jumlahb' => 'required|numeric',
            'hargab' => 'required|numeric',
            'kodep'  => 'required|string',
        ])) {
            // return redirect()->to('/home');
            // echo 'LELE';
        }
        $baju = new Baju();
        $bajuinput = [
            'kodeb' => $this->request->getPost('kodeb'),
            'merkb' => $this->request->getPost('merkb'),
            'sizeb' => $this->request->getPost('sizeb'),
            'jumlahb' => $this->request->getPost('jumlahb'),
            'hargab' => $this->request->getPost('hargab'),
            'kodep'  => $this->request->getPost('kodep'),
            'created_at' => date('Y-m-d H:i:s'),
            'update_at' => date('Y-m-d H:i:s'),
        ];
        // dd($bajuinput);
        $baju->insert($bajuinput);
        return redirect()->to('/pages');
    }

    public function delete($id)
    {
        $bajumodel = new Baju();
        $bajumodel->delete($id);
        return redirect()->to('/pages');
    }

    public function edit($id)
    {
        $bajumodel = new Baju();
        $kumpbaju = $bajumodel->findAll();
        $pemasokmodel = new Pemasok();
        $kumppemasok = $pemasokmodel->findAll();
    
        $data = [
            'kumppemasok' => $kumppemasok,
            'kumpbaju' => $bajumodel->find($id),
            'title' => 'Edit Data'
        ];

        return view('pages/edit', $data);
    }

    public function update($id)
    {
        if (!$this->validate([
            'kodeb' => 'required|string',
            'merkb' => 'required|string',
            'sizeb' => 'required|string',
            'jumlahb' => 'required|numeric',
            'hargab' => 'required|numeric',
            'kodep'  => 'required|string',
        ])) {
            return redirect()->to('/edit/' . $id);
        }
        $bajumodel = new Baju();
        $data = [
            'kodeb' => $this->request->getPost('kodeb'),
            'merkb' => $this->request->getPost('merkb'),
            'sizeb' => $this->request->getPost('sizeb'),
            'jumlahb' => $this->request->getPost('jumlahb'),
            'hargab' => $this->request->getPost('hargab'),
            'kodep'  => $this->request->getPost('kodep'),
            'created_at' => date('Y-m-d H:i:s'),
            'update_at' => date('Y-m-d H:i:s'),
        ];
        $bajumodel->update($id, $data);

        return redirect()->to('/pages');
    }
    public function pageA(){
        
        return view('landingPage/pageA');
    }
    public function Pcreate()
    {
        if (!$this->validate([
            'kodep' => 'required|string',
            'namap' => 'required|string',
            'alamatp' => 'required|string'
        ])) {
            // return redirect()->to('/home');
            // echo 'LELE';
        }
        $baju = new Pemasok();
        $bajuinput = [
            'sizeb' => $this->request->getPost('sizeb'),
            'kodep' => $this->request->getPost('kodep'),
            'namap' => $this->request->getPost('namap'),
            'alamatp' => $this->request->getPost('alamatp'),
        
        ];
        // dd($bajuinput);
        $baju->insert($bajuinput);
        return redirect()->to('/home');
    }

}
