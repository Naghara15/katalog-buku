@extends('layouts.app')

@section('title', 'Daftar Buku - Katalog Buku')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold mb-0">Daftar Koleksi Buku</h2>
    <a href="{{ route('beranda') }}" class="btn btn-outline-secondary btn-sm">Kembali ke Beranda</a>
</div>

<div class="card shadow-sm border-0">
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="table-primary">
                    <tr>
                        <th class="ps-4">No</th>
                        <th>Judul Buku</th>
                        <th>Nama Penulis</th>
                        <th>Tahun Terbit</th>
                        <th>Kategori</th>
                        <th class="text-center pe-4">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($daftarBuku as $buku)
                    <tr>
                        <td class="ps-4">{{ $loop->iteration }}</td>
                        <td class="fw-semibold">{{ $buku['judul'] }}</td>
                        <td>{{ $buku['penulis'] }}</td>
                        <td>{{ $buku['tahun'] }}</td>
                        <td><span class="badge bg-info text-dark">{{ $buku['kategori'] }}</span></td>
                        <td class="text-center pe-4">
                            <a href="{{ route('buku.show', $buku['id']) }}" class="btn btn-sm btn-primary">Detail</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection