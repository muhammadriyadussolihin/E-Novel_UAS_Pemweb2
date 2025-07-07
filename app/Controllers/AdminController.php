<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;
use App\Models\PeminjamModel;

class AdminController extends BaseController
{
    protected $buku;
    protected $peminjam;

    public function __construct(){
        $this->buku = new BukuModel();
        $this->peminjam = new PeminjamModel();
    }

    public function index(){
        return view('adminview/homeview');
    }

    public function dashboard(){
        $totalBuku = $this->buku->countAll();
        $totalPeminjam = $this->peminjam->countAll();
        $totalPinjam = $this->peminjam->countDipinjam();
        $totalKembali = $this->peminjam->countDikembalikan();

        $datatotal['totalBuku'] = $totalBuku;
        $datatotal['totalPeminjam'] = $totalPeminjam;
        $datatotal['totalPinjam'] = $totalPinjam;
        $datatotal['totalKembali'] = $totalKembali;

        return view('adminview/dashboardview', $datatotal);
    }

    public function databuku(){
        $getdata = $this->buku->findAll();

        $data =[
            'databuku' => $getdata
        ];
        return view('adminview/databukuview', $data);
    }

    public function tambahbuku(){
        helper('form');
        return view('adminview/tambahdatabukuview');
    }

    public function simpanbuku(){
        $validationRules = [
            'kodebuku' => 'is_unique[tb_buku.kode_buku]',
            'sampul' => 'uploaded[sampul]|mime_in[sampul,image/jpg,image/jpeg,image/png]',
        ];

        if (!$this->validate($validationRules)) {
            session()->setFlashdata('input_data', $this->request->getPost());
            if ($this->validator->hasError('kodebuku')) {
                session()->setFlashdata('duplikatkodebuku', 'Data Gagal Ditambah, Pastikan Kode Buku Yang di inputkan tidak sama');
                return redirect()->to('/admin/databuku');
            }
            if ($this->validator->hasError('sampul')) {
                session()->setFlashdata('inputsampulgagal', 'Gagal melakukan Input Data. Pastikan file gambar (jpg, jpeg, png)');
                return redirect()->to('/admin/databuku/tambah')->with('errors', $this->validator->getErrors());
            }
        }

        $sampul = $this->request->getFile('sampul');
        $sampulname = $sampul->getRandomName();
        $sampul->move(ROOTPATH . 'public/uploads/sampul', $sampulname);
        $this->buku->insert([
        'kode_buku' => $this->request->getVar('kodebuku'),
        'judul_buku' => $this->request->getVar('judulbuku'),
        'pengarang' => $this->request->getVar('pengarang'),
        'tahun_terbit' => $this->request->getVar('tahunterbit'),
        'kategori' => $this->request->getVar('kategori'),
        'jumlah_buku' => $this->request->getVar('jumlahbuku'),
        'sampul' =>'uploads/sampul/' . $sampulname,
        ]);

        session()->setFlashdata('inputbukuberhasil', 'Data Buku Berhasil Ditambah');
        return redirect()->to('/admin/databuku');
    }

    public function editbuku($kode_buku){
        helper('form');
        $select = $this->buku->find($kode_buku);
        
        if($select){
            $data = [
                'kode_buku' => $kode_buku,
                'judul_buku' => $select['judul_buku'], 
                'pengarang' => $select['pengarang'], 
                'tahun_terbit' => $select['tahun_terbit'], 
                'kategori' => $select['kategori'], 
                'jumlah_buku' => $select['jumlah_buku'], 
                'sampul' => $select['sampul'], 
            ];
            return view('adminview/editdatabukuview' ,$data);
        }
    }

    public function simpaneditbuku(){
        helper('form');
        $kode_buku = $this->request->getVar('kodebuku');

        $editbuku = $this->buku->find($kode_buku);
        $validationRules = [
            'sampul' => 'mime_in[sampul,image/jpg,image/jpeg,image/png]',
        ];

        if (!$this->validate($validationRules)) {
            session()->setFlashdata('input_data', $this->request->getPost());
            if ($this->validator->hasError('sampul')) {
                session()->setFlashdata('editsampulgagal', 'Gagal melakukan update sampul. Pastikan file gambar (jpg, jpeg, png)');
                $select = $this->buku->find($kode_buku);
                return view('adminview/editdatabukuview', [
                    'kode_buku' => $kode_buku,
                    'judul_buku' => $select['judul_buku'], 
                    'pengarang' => $select['pengarang'], 
                    'tahun_terbit' => $select['tahun_terbit'], 
                    'kategori' => $select['kategori'], 
                    'jumlah_buku' => $select['jumlah_buku'], 
                    'sampul' => $select['sampul'],
                ]);
            }
            
        }

        if ($this->validate($validationRules)) {
            $data = [
                'kode_buku' => $this->request->getVar('kodebuku'),
                'judul_buku' => $this->request->getVar('judulbuku'), 
                'pengarang' => $this->request->getVar('pengarang'), 
                'tahun_terbit' => $this->request->getVar('tahunterbit'), 
                'kategori' => $this->request->getVar('kategori'), 
                'jumlah_buku' => $this->request->getVar('jumlahbuku'), 
            ];

            $sampul = $this->request->getFile('sampul');
            if ($sampul->isValid()) {
                $newSampulName = $sampul->getRandomName();
                $sampul->move(ROOTPATH . 'public/uploads/sampul', $newSampulName);
                $data['sampul'] = 'uploads/sampul/' . $newSampulName;
                $this->hapusSampulLama($editbuku['sampul']);
            } else {
                $data['sampul'] = $editbuku['sampul'];
            }

            $this->buku->update($kode_buku, $data);

            session()->setFlashdata('editberhasil', 'Data Berhasil Di edit');
            return redirect()->to('/admin/databuku');
        } else {
            session()->setFlashdata('editgagal', 'Data Gagal Di Update');
            return redirect()->to("admin/databuku");
        }
    }

    private function hapusSampulLama($sampulPath){
        if (!empty($sampulPath) && file_exists(ROOTPATH . 'public/' . $sampulPath)) {
            unlink(ROOTPATH . 'public/' . $sampulPath);
        }
    }

    public function detailbuku($kode_buku){
        $data['databuku'] = $this->buku->find($kode_buku);
        return view('adminview/detailbukuview', $data);
    }

    public function hapusbuku($kode_buku){
        $hapus = $this->buku->find($kode_buku);
        if($hapus){
            if (!empty($hapus['sampul'])) {
                $fullPathSampul = FCPATH . $hapus['sampul'];
                if (is_file($fullPathSampul)) {
                    unlink($fullPathSampul);
                }
            }
            $this->buku->delete($kode_buku);
            session()->setFlashdata('hapusberhasil', 'Data Buku berhasil Dihapus');
            return redirect()->to('/admin/databuku');
        }
    }

    public function datapeminjam(){
        $getdata = $this->peminjam->getJudulBuku();
        $data =[
            'datapeminjam' => $getdata,
        ];
        return view('adminview/datapeminjamview', $data);
    }

    public function cetaklaporanpeminjam(){
        return view('adminview/cetaklaporanview');
    }

    public function tambahpeminjam(){
        helper('form');
        $data['nopeminjam'] = $this->peminjam->generateNoPeminjam();
        $data['daftarbuku'] = $this->peminjam->getPeminjamWithBuku();
        $data['kodebuku'] = $this->peminjam->getPeminjamWithBuku();
        $data['jumlahbuku'] = $this->peminjam->getPeminjamWithBuku();
        return view('adminview/tambahdatapeminjamview', $data);
    }

    public function simpanpeminjam(){
        $kode_buku = $this->request->getVar('judulbuku');
        $jumlahbuku = $this->request->getVar('jumlahbuku');

        $this->peminjam->insert([
        'no_peminjam' => $this->request->getVar('nopeminjam'),
        'nama_peminjam' => $this->request->getVar('namapeminjam'),
        'kode_buku' => $this->request->getVar('judulbuku'),
        'tanggal_peminjaman' => $this->request->getVar('tanggalpeminjaman'),
        'tanggal_pengembalian' => null,
        'jumlah_buku' => $this->request->getVar('jumlahbuku'),
        'status' => 'dipinjam',
        ]);
        
        $this->kurangiStokBuku($kode_buku, $jumlahbuku);
        session()->setFlashdata('inputpeminjamberhasil', 'Data Peminjam Berhasil Ditambah');
        return redirect()->to('/admin/datapeminjam');
    }
    
    private function kurangiStokBuku($kodeBuku, $jumlahDipinjam){
        $stokBukuSaatIni = $this->buku->getStokBuku($kodeBuku);
        $stokBaru = $stokBukuSaatIni - $jumlahDipinjam;

        $this->buku->updateStokBuku($kodeBuku, $stokBaru);
    }

    public function kembalikanbuku($no_peminjam) {
        date_default_timezone_set('Asia/Jakarta');
        $timestamp_pengembalian = time();
        $peminjaman = $this->peminjam->find($no_peminjam);
        $stok_buku = $this->buku->getStokBuku($peminjaman['kode_buku']);

        $this->peminjam->update($no_peminjam, [
            'status' => 'dikembalikan',
            'tanggal_pengembalian' => date('Y-m-d H:i:s', $timestamp_pengembalian),
        ]);

        $stok_baru = $stok_buku + $peminjaman['jumlah_buku'];
        $this->buku->updateStokBuku($peminjaman['kode_buku'], $stok_baru);

        session()->setFlashdata('kembalikanberhasil', 'Buku Berhasil Dikembalikan');
        return redirect()->to('/admin/datapeminjam');
    }

    public function hapuspeminjam($no_peminjam){
        $hapus = $this->peminjam->find($no_peminjam);
        if($hapus){
            $this->peminjam->delete($no_peminjam);
            session()->setFlashdata('hapusberhasil', 'Data berhasil Dihapus');
            return redirect()->to('/admin/datapeminjam');
        }
    }

}
