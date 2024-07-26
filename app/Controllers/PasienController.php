<?php

namespace App\Controllers;

use App\Models\PasienModel;
use CodeIgniter\Controller;

class PasienController extends Controller
{
    public function index()
    {
        $model = new PasienModel();
        $data['pasiens'] = $model->findAll();

        return view('screen/halaman_utama', $data);
    }

    public function create()
    {
        return view('screen/tambah_pasien');
    }

    public function store()
    {
        $model = new PasienModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'keluhan' => $this->request->getPost('keluhan'),
            'umur' => $this->request->getPost('umur'),
            'riwayat_penyakit' => $this->request->getPost('riwayat_penyakit')
        ];

        $model->insert($data);
        return redirect()->to('/screen');
    }

    public function edit($id)
    {
        $model = new PasienModel();
        $data['pasien'] = $model->find($id);

        return view('screen/edit_pasien', $data);
    }

    public function update($id)
    {
        $model = new PasienModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'keluhan' => $this->request->getPost('keluhan'),
            'umur' => $this->request->getPost('umur'),
            'riwayat_penyakit' => $this->request->getPost('riwayat_penyakit')
        ];

        $model->update($id, $data);
        return redirect()->to('/screen');
    }

    public function delete($id)
    {
        $model = new PasienModel();
        $model->delete($id);
        return redirect()->to('/screen');
    }

  
}
