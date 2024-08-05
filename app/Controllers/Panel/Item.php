<?php

namespace App\Controllers\Panel;

use App\Controllers\BaseController;
use App\Models\ItemModel;
use App\Models\KategoriModel;


class Item extends BaseController
{
    protected $itemModel, $kategoriModel;
    public function __construct()
    {
        $this->itemModel = new ItemModel();
        $this->kategoriModel = new KategoriModel();
    }

    public function index()
    {
        $data['item'] = $this->itemModel->getAll();
        return view("admin/item/index", $data);
    }



    public function tambah()
    {
        // Mengambil data kategori untuk digunakan dalam view
        $data = ['kategori' => $this->kategoriModel->findAll()];

        // Memeriksa apakah form telah di-submit dengan metode POST
        if ($this->request->getMethod() === 'post') {

            // Inisialisasi model untuk item
            $itemModel = new ItemModel();

            // Generate kode aset baru
            $code = $itemModel->generateItemKode();

            // Ambil id_kategori dari input pengguna
            $id_kategori = $this->request->getVar('id_kategori');

            // Mengumpulkan data yang akan disimpan
            $storeData = [
                'kode_item'   => $code,
                'id_kategori' => $id_kategori,
                'nama_item'   => $this->request->getPost('nama_item'),
                'keterangan'  => $this->request->getPost('keterangan'),
            ];

            // Menyimpan data item baru ke database
            $itemModel->insert($storeData);

            // Menampilkan pesan sukses
            session()->setFlashdata('message', 'Item berhasil disimpan');
            return redirect()->to('/panel/item');
        }

        // Menampilkan view dengan data kategori
        return view('admin/item/tambah', $data);
    }

    public function edit($kode_item)
    {
        // Mencari item berdasarkan ID yang diberikan
        $data = [
            'item' => $this->itemModel->data_item($kode_item),
            'kategori' => $this->kategoriModel->findAll()
        ];

        // Memeriksa apakah form telah di-submit dengan metode POST
        if ($this->request->getMethod() === 'post') {

            // Ambil id_kategori dari input pengguna
            $id_kategori = $this->request->getVar('id_kategori');

            // Mengumpulkan data yang akan diperbarui
            $updateData = [
                'id_kategori' => $id_kategori,
                'nama_item'   => $this->request->getPost('nama_item'),
                'keterangan'  => $this->request->getPost('keterangan'),
            ];

            // Memperbarui data item di database
            $this->itemModel->update($kode_item, $updateData);

            // Menampilkan pesan sukses
            session()->setFlashdata('message', 'Item berhasil diperbarui');
            return redirect()->to('/panel/item');
        }

        // Menampilkan view dengan data item dan kategori
        return view('admin/item/edit', $data);
    }
}
