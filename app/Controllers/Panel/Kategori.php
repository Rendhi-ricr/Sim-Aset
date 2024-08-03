<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;
use App\Models\KategoriModel;


class Kategori extends BaseController
{
    protected $kategoriModel;
    public function __construct()
    {
        $this->kategoriModel = new KategoriModel();
    }

    public function index()
    {
        $data['kategori'] = $this->kategoriModel->findAll();
        return view("admin/kategori/index", $data);
    }



    public function tambah()
    {
        $data = [];
        if ($this->request->getMethod() === 'post') {

            $kategoriModel = new KategoriModel();
            // $klasifikasi = $this->request->getPost('klasifikasi');
            // $kodeGedung = $gedungModel->generateKodeGedung($klasifikasi);
            $storeData = [
                // 'kode_gedung'   => $kodeGedung,
                'nama_kategori'   => $this->request->getPost('nama_kategori'),
                // 'keterangan'   => $this->request->getPost('keterangan'),

            ];
            $kategoriModel->insert($storeData);

            //flash message
            session()->setFlashdata('message', 'Faq berhasil disimpan');
            return redirect()->to('/panel/kategori');
        }
        return view('admin/kategori/tambah', $data);
    }
}
