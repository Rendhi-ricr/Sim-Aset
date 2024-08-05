<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;
use App\Models\GedungModel;


class Gedung extends BaseController
{
    protected $gedungModel;
    public function __construct()
    {
        $this->gedungModel = new GedungModel();
    }

    public function index()
    {
        $data['gedung'] = $this->gedungModel->findAll();
        return view("admin/gedung/index", $data);
    }



    public function tambah()
    {
        $data = [];
        if ($this->request->getMethod() === 'post') {

            $gedungModel = new GedungModel();
            $klasifikasi = $this->request->getPost('klasifikasi');
            $kodeGedung = $gedungModel->generateKodeGedung($klasifikasi);
            $storeData = [
                'kode_gedung'   => $kodeGedung,
                'nama_gedung'   => $this->request->getPost('nama_gedung'),
                'keterangan'   => $this->request->getPost('keterangan'),

            ];
            $gedungModel->insert($storeData);

            //flash message
            session()->setFlashdata('message', 'Faq berhasil disimpan');
            return redirect()->to('/panel/gedung');
        }
        return view('admin/gedung/tambah', $data);
    }

    public function edit($kode_gedung)
    {
        // Mencari item berdasarkan ID yang diberikan
        $data = [
            'gedung' => $this->gedungModel->data_gedung($kode_gedung),

        ];

        // Memeriksa apakah form telah di-submit dengan metode POST
        if ($this->request->getMethod() === 'post') {


            // Mengumpulkan data yang akan diperbarui
            $updateData = [
                'nama_gedung'   => $this->request->getPost('nama_gedung'),
                'keterangan'  => $this->request->getPost('keterangan'),
            ];

            // Memperbarui data item di database
            $this->gedungModel->update($kode_gedung, $updateData);

            // Menampilkan pesan sukses
            session()->setFlashdata('message', 'Item berhasil diperbarui');
            return redirect()->to('/panel/gedung');
        }

        // Menampilkan view dengan data item dan kategori
        return view('admin/gedung/edit', $data);
    }
}
