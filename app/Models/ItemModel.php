<?php

namespace App\Models;

use CodeIgniter\Model;

class ItemModel extends Model
{
    protected $table = 't_item';
    protected $primaryKey = 'kode_item';
    protected $allowedFields = ['kode_item', 'id_kategori', 'nama_item', 'keterangan'];

    public function generateItemKode()
    {
        // Tetapkan prefix sebagai "AST"
        $prefix = 'AST';

        // Mendapatkan kode item terakhir
        $lastItem = $this->orderBy('kode_item', 'DESC')->first();

        // Jika ada item terakhir, ambil nomor urut terakhir
        if ($lastItem) {
            $lastNumber = intval(substr($lastItem['kode_item'], 3)); // Mengambil angka dari kode terakhir
            $newNumber = $lastNumber + 1; // Menambah angka terakhir dengan satu
        } else {
            // Jika tidak ada item, mulai dari 1
            $newNumber = 1;
        }

        // Format nomor baru menjadi 4 digit dengan leading zero
        $newNumberFormatted = str_pad($newNumber, 4, '0', STR_PAD_LEFT);

        // Gabungkan prefix dan angka menjadi kode item
        $ItemKode = $prefix . $newNumberFormatted;

        return $ItemKode;
    }



    function getAll()
    {
        $builder = $this->db->table('t_item');
        $builder->join('t_kategori', 't_kategori.id_kategori = t_item.id_kategori');
        $query = $builder->get();
        return $query->getResult();
    }

    public function data_item($kode_item)
    {
        return $this->find($kode_item);
    }
    // public function update_data($data, $id_buku)
    // {
    //     $query = $this->db->table($this->table)->update(
    //         $data,
    //         array('id_buku' => $id_buku)
    //     );
    //     return $query;
    // }
    // public function delete_data($id_buku)
    // {
    //     $query = $this->db->table($this->table)->delete(array('id_buku' => $id_buku));
    //     return $query;
    // }
}
