@extends('layouts.app')

@section('title', $buku['judul'] . ' - Detail Buku')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card shadow-sm border-0">
            <div class="card-header bg-primary text-white py-3">
                <h4 class="mb-0">Detail Informasi Buku</h4>
            </div>
            <div class="card-body p-4">
                <span class="badge bg-info text-dark mb-2">{{ $buku['kategori'] }}</span>
                <h2 class="fw-bold mb-3">{{ $buku['judul'] }}</h2>

                <table class="table table-borderless">
                    <tr>
                        <th class="ps-0" style="width: 180px;">Nama Penulis</th>
                        <td>: {{ $buku['penulis'] }}</td>
                    </tr>
                    <tr>
                        <th class="ps-0">Tahun Terbit</th>
                        <td>: {{ $buku['tahun'] }}</td>
                    </tr>
                    <tr>
                        <th class="ps-0">Penerbit</th>
                        <td>: {{ $buku['penerbit'] }}</td>
                    </tr>
                    <tr>
                        <th class="ps-0">Jumlah Halaman</th>
                        <td>: {{ $buku['halaman'] }} halaman</td>
                    </tr>
                </table>

                <hr>
                <h5 class="fw-semibold">Deskripsi / Sinopsis</h5>
                <p class="text-secondary mb-0">{{ $buku['deskripsi'] }}</p>
            </div>
            <div class="card-footer bg-white py-3 d-flex justify-content-between">
                <a href="{{ route('buku.index') }}" class="btn btn-secondary">&larr; Kembali ke Daftar Buku</a>
                <a href="{{ route('beranda') }}" class="btn btn-outline-primary">Ke Beranda</a>
            </div>
        </div>
    </div>
</div>
@endsection