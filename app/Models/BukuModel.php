<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $table            = 'tb_buku';
    protected $primaryKey       = 'kode_buku';
    protected $allowedFields    = ['kode_buku', 'judul_buku', 'pengarang', 'tahun_terbit', 'kategori', 'jumlah_buku', 'sampul'];

    public function getStokBuku($kodeBuku)
    {
        $query = $this->select('jumlah_buku')->getWhere(['kode_buku' => $kodeBuku]);
        $result = $query->getRowArray();

        if ($result) {
            return $result['jumlah_buku'];
        } else {
            return null;
        }
    }

    public function updateStokBuku($kodeBuku, $jumlahBaru)
    {
        $this->set('jumlah_buku', $jumlahBaru)->where('kode_buku', $kodeBuku)->update();
    }
    
}
