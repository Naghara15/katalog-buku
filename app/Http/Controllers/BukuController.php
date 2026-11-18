<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    private function getDataBuku()
    {
        return [
            1 => [
                'id' => 1,
                'judul' => 'Clean Code: A Handbook of Agile Software Craftsmanship',
                'penulis' => 'Robert C. Martin',
                'tahun' => 2008,
                'kategori' => 'Teknologi & Pemrograman',
                'penerbit' => 'Prentice Hall',
                'halaman' => 464,
                'deskripsi' => 'Panduan praktis menulis kode yang bersih, mudah dibaca, dan mudah dipelihara oleh developer.'
            ],
            2 => [
                'id' => 2,
                'judul' => 'Laut Bercerita',
                'penulis' => 'Leila S. Chudori',
                'tahun' => 2017,
                'kategori' => 'Fiksi Sejarah',
                'penerbit' => 'Kepustakaan Populer Gramedia',
                'halaman' => 379,
                'deskripsi' => 'Novel yang mengangkat kisah persahabatan, cinta, keluarga, dan kehilangan para aktivis pada masa 1998.'
            ],
            3 => [
                'id' => 3,
                'judul' => 'Atomic Habits',
                'penulis' => 'James Clear',
                'tahun' => 2018,
                'kategori' => 'Pengembangan Diri',
                'penerbit' => 'Avery',
                'halaman' => 320,
                'deskripsi' => 'Cara mudah dan terbukti untuk membentuk kebiasaan baik dan menghilangkan kebiasaan buruk melalui perubahan kecil.'
            ],
            4 => [
                'id' => 4,
                'judul' => 'Designing Data-Intensive Applications',
                'penulis' => 'Martin Kleppmann',
                'tahun' => 2017,
                'kategori' => 'Sistem Terdistribusi & Basis Data',
                'penerbit' => 'O\'Reilly Media',
                'halaman' => 616,
                'deskripsi' => 'Membahas arsitektur sistem modern, skalabilitas, keandalan, dan pemrosesan data berskala besar.'
            ],
            5 => [
                'id' => 5,
                'judul' => 'Filosofi Teras',
                'penulis' => 'Henry Manampiring',
                'tahun' => 2018,
                'kategori' => 'Filsafat',
                'penerbit' => 'Kompas Penerbit Buku',
                'halaman' => 346,
                'deskripsi' => 'Pengantar filsafat Stoisisme kuno yang relevan untuk mengatasi emosi negatif di era modern.'
            ],
        ];
    }

    public function beranda()
    {
        $totalBuku = count($this->getDataBuku());
        return view('beranda', compact('totalBuku'));
    }

    public function index()
    {
        $daftarBuku = $this->getDataBuku();
        return view('buku.index', compact('daftarBuku'));
    }

    public function show($id)
    {
        $daftarBuku = $this->getDataBuku();

        if (!isset($daftarBuku[$id])) {
            abort(404, 'Buku tidak ditemukan');
        }

        $buku = $daftarBuku[$id];
        return view('buku.show', compact('buku'));
    }
}