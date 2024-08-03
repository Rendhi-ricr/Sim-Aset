<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;
use App\Models\RuanganModel;
use App\Models\GedungModel;

class Ruangan extends BaseController
{
    protected $ruanganModel;
    protected $gedungModel;

    public function __construct()
    {
        $this->ruanganModel = new RuanganModel();
        $this->gedungModel = new GedungModel();
    }

    public function index()
    {
        $data['ruangan'] = $this->ruanganModel->getAll();
        return view("admin/ruangan/index", $data);
    }

    public function tambah()
    {
        $data['gedung'] = $this->gedungModel->findAll();

        if ($this->request->getMethod() === 'post') {
            // Ambil data dari request
            $kodeGedung = $this->request->getPost('kode_gedung');
            $kodeRuangan = $this->ruanganModel->generateKodeRuangan($kodeGedung);

            $storeData = [
                'kode_ruangan' => $kodeRuangan,
                'kode_gedung' => $kodeGedung,
                'nama_ruangan' => $this->request->getPost('nama_ruangan'),
                'lantai' => $this->request->getPost('lantai'),
                'keterangan' => $this->request->getPost('keterangan'),
            ];


            // Simpan data ke database
            $this->ruanganModel->insert($storeData);

            // Flash message
            session()->setFlashdata('message', 'Data ruangan berhasil disimpan');
            return redirect()->to('/panel/ruangan');
        }

        return view('admin/ruangan/tambah', $data);
    }
}
