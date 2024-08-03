<?php

namespace App\Models;

use CodeIgniter\Model;

class RuanganModel extends Model
{
    protected $table = 't_ruangan';
    protected $primaryKey = 'kode_ruangan';
    protected $allowedFields = ['kode_ruangan', 'kode_gedung', 'nama_ruangan', 'lantai', 'keterangan'];

    public function generateKodeRuangan($kodeGedung)
    {
        // Validasi kode gedung
        if (empty($kodeGedung)) {
            throw new \InvalidArgumentException('Kode gedung tidak valid');
        }

        // Ambil kode ruangan terakhir dengan kode gedung tertentu
        $builder = $this->db->table($this->table);
        $builder->select('kode_ruangan');
        $builder->like('kode_ruangan', $kodeGedung . '%', 'after');
        $builder->orderBy('kode_ruangan', 'DESC');
        $query = $builder->get(1);

        $result = $query->getRow();
        $lastKode = $result ? $result->kode_ruangan : $kodeGedung;

        // Format kode ruangan terakhir yang sudah ada
        // 4 = karakter awal
        $kodeAwal = substr($lastKode, 0, 4);
        // ambil 2 digit terakhir untuk di tambahkan 
        $urutan = (int) substr($lastKode, 4, 2);
        $urutan++;

        // Menggabungkan semua komponen
        $nomorUrut = sprintf("%02d", $urutan);

        $nextKode = $kodeAwal . $nomorUrut;
        // echo $nextKode;
        // die();
        return $nextKode;
    }


    // public function generateKodeRuangan($klasifikasi)
    // {
    //     // Validasi klasifikasi
    //     $klasifikasi = strtoupper($klasifikasi);
    //     $validKlasifikasi = ['REK', 'SAP', 'SKM', 'SHH', 'SPP', 'SIK', 'SPD', 'GBL', 'MAP']; // Tambahkan klasifikasi lain jika diperlukan

    //     if (!in_array($klasifikasi, $validKlasifikasi)) {
    //         throw new \InvalidArgumentException('Klasifikasi tidak valid');
    //     }

    //     $builder = $this->db->table($this->table);
    //     $builder->select('kode_ruang');
    //     $builder->where('kode_ruang LIKE', $klasifikasi . '%');
    //     $builder->orderBy('kode_ruang', 'DESC');
    //     $query = $builder->get();

    //     $result = $query->getRow();
    //     $lastKode = $result ? $result->kode_ruang : $klasifikasi . '000';

    //     // Ekstrak bagian numerik dari kode terakhir
    //     $lastNumber = substr($lastKode, 3);

    //     // Generate kode berikutnya dengan awalan klasifikasi
    //     $nextNumber = str_pad((int)$lastNumber + 1, 3, '0', STR_PAD_LEFT);
    //     $nextKode = $klasifikasi . $nextNumber;

    //     return $nextKode;
    // }



    function getAll()
    {
        $builder = $this->db->table('t_ruangan');
        $builder->join('t_gedung', 't_gedung.kode_gedung = t_ruangan.kode_gedung');

        $query = $builder->get();
        return $query->getResult();
    }

    // public function data_buku($id_buku)
    // {
    //     return $this->find($id_buku);
    // }
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
