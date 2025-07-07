<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamModel extends Model
{
    protected $table            = 'tb_peminjam';
    protected $primaryKey       = 'no_peminjam';
    protected $allowedFields    = ['no_peminjam', 'nama_peminjam', 'kode_buku', 'tanggal_peminjaman', 'tanggal_pengembalian', 'jumlah_buku', 'status'];

    public function countDipinjam()
    {
        return $this->where('status', 'dipinjam')->countAllResults();
    }

    public function countDikembalikan()
    {
        return $this->where('status', 'dikembalikan')->countAllResults();
    }

    public function getPeminjamWithBuku()
    {
        $query = $this->db->table('tb_peminjam p')
        ->join('tb_buku b', 'b.kode_buku = p.kode_buku', 'right')
        ->select('p.*, b.kode_buku, b.judul_buku, b.jumlah_buku')
        ->get();

        return $query->getResultArray();
    }

    public function getJudulBuku()
    {
        $query = $this->db->table('tb_peminjam p')
        ->join('tb_buku b', 'b.kode_buku = p.kode_buku', 'left')
        ->select('p.*, b.kode_buku, b.judul_buku')
        ->get();

        return $query->getResultArray();
    }
    

    public function generateNoPeminjam()
    {
        $lastNumber = $this->getLatestPeminjamNumber();
        $nextNumber = $lastNumber + 1;
        $noPeminjam = 'KP' . str_pad($nextNumber, 4, '0', STR_PAD_LEFT);
        return $noPeminjam;
    }

    private function getLatestPeminjamNumber()
    {
        $query = $this->db->query("SELECT MAX(CAST(SUBSTRING(no_peminjam, 3) AS UNSIGNED)) AS latest_number FROM tb_peminjam");
        $result = $query->getRowArray();
        return isset($result['latest_number']) ? (int)$result['latest_number'] : 0;
    }


}
