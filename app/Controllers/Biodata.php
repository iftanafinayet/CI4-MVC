<?php

namespace App\Controllers;

use App\Models\BiodataModel; // Load Modelnya di sini

class Biodata extends BaseController
{
    public function index()
    {
        $model = new BiodataModel();
        
        // Mengambil semua data dari tabel biodata
        $data['biodata'] = $model->findAll();

        // Mengirimkan variabel $data ke view
        return view('biodata/index', $data);
    }

    public function delete($id)
    {
        $model = new BiodataModel();
        $model->delete($id);

        return redirect()->to('/biodata')->with('success', 'Data berhasil dihapus');
    }
}