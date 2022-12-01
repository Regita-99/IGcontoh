<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pemasok;
use App\Models\Provinsi;

class PemasokControl extends BaseController
{
    public function pemasok()
    {
        $provmodel = new Provinsi();
        $provinsi = $provmodel->findAll();
        $data = [
            'title' => 'Baju',
            'provinsi' => $provinsi
        ];
        return view('pages/pemasok', $data);
    }
    public function listpemasok()
    {
        $bajumodel = new Pemasok();
        $pbaju = $bajumodel->findAll();
        $data = ['title' => 'Baju', 'pbaju' => $pbaju];

        // d($pbaju);
        // exit();

        return view('pages/listpemasok', $data);
    }
    public function Pcreate()
    {
        if (!$this->validate([
            'kodep' => 'required|string',
            'ptp' => 'required|string',
            'namap' => 'required|string',
            'email' => 'required|string',
            'web' => 'required|string',
            'telp' => 'required|numeric',
            'id_provinsi' => 'required|numeric',
            'kodepos' => 'required|numeric',
            'kota' => 'required|string',
            'alamatp' => 'required|string'
        ])) {
            // return redirect()->to('/home');
            // echo 'LELE';
        }
        $baju = new Pemasok();
        $bajuinput = [
            'kodep' => $this->request->getPost('kodep'),
            'ptp' => $this->request->getPost('ptp'),
            'namap' => $this->request->getPost('namap'),
            'email' => $this->request->getPost('email'),
            'web' => $this->request->getPost('web'),
            'telp' => $this->request->getPost('telp'),
            'id_provinsi' => $this->request->getPost('id_provinsi'),
            'kodepos' => $this->request->getPost('kodepos'),
            'kota' => $this->request->getPost('kota'),
            'alamatp' => $this->request->getPost('alamatp'),
        ];
        // dd($bajuinput);
        $baju->insert($bajuinput);
        return redirect()->to('/pemasok');
    }
    public function delete($id)
    {
        $pemasokmodel = new Pemasok();
        $pemasokmodel->delete($id);
        return redirect()->to('/listpemasok');
    }
    public function edit($id)
    {
        $pemasokmodel = new Pemasok();
        $pbaju = $pemasokmodel->findAll();
        $provmodel = new Provinsi();
        $provinsi = $provmodel->findAll();
    
        $data = [
            'kumpbaju' => $pemasokmodel->find($id),
            'provinsi'=>$provinsi,
            'title' => 'Edit Data'
        ];

        return view('pages/editpemasok', $data);
    }
    public function update($id)
    {
        if (!$this->validate([
            'kodep' => 'required|string',
            'ptp' => 'required|string',
            'namap' => 'required|string',
            'email' => 'required|string',
            'web' => 'required|string',
            'telp' => 'required|numeric',
            'id_provinsi' => 'required|numeric',
            'kodepos' => 'required|numeric',
            'kota' => 'required|string',
            'alamatp' => 'required|string'
        ])) {
            return redirect()->to('/edit/' . $id);
        }
        $bajumodel = new Pemasok();
        $data = [
            'kodep' => $this->request->getPost('kodep'),
            'ptp' => $this->request->getPost('ptp'),
            'namap' => $this->request->getPost('namap'),
            'email' => $this->request->getPost('email'),
            'web' => $this->request->getPost('web'),
            'telp' => $this->request->getPost('telp'),
            'id_provinsi' => $this->request->getPost('id_provinsi'),
            'kodepos' => $this->request->getPost('kodepos'),
            'kota' => $this->request->getPost('kota'),
            'alamatp' => $this->request->getPost('alamatp')
        ];
        $bajumodel->update($id, $data);

        return redirect()->to('/listpemasok');
    }
}
